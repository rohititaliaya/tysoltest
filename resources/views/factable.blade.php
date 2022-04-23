<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <section id="sub_list" class="container p-5">
            <h3>facultys Time Table form </h3>   
            <button class="btn btn-success" id="add_new_option_button">Add New</button>
            <form action="{{ url('/factable/create') }}" method="POST">
                @csrf()
                @method('POST')
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Subject</th>
                        <th>Faculty</th>
                        <th>Session Date</th>
                        <th>Session Start Time</th>
                        <th>Session End Time</th>
                    </tr>

                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <section>
            <div class="container">
                <h1>Faculty Time Table</h1>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Subject</th>
                        <th>Faculty</th>
                        <th>Session Date</th>
                        <th>Session Start Time</th>
                        <th>Session End Time</th>
                        <th>Duration</th>
                        <th>Created</th>
                    </tr>
                    @foreach ($facultyTimeTable as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->subject_id }}</td>
                        <td>{{ $item->faculty_id }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->session_start_time }}</td>
                        <td>{{ $item->session_end_time }}</td>
                        <td>{{ $item->duration }} min</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            var swaco ;
            $(document).ready(function () {
                $('#add_new_option_button').on('click',function () {
                    // alert('Please');
                    addOptions();
                });
            }); 
            var lastOption=0;
            function addOptions() {
                // alert('Please');
                    lastOption++;
                    $('.table').append('<tr class="newoption'+lastOption+'"><td>'+lastOption+'</td><td><select class="form-control form-select" id="subject'+lastOption+'" name="form'+lastOption+'[subject]" required></select></td><td><select id="faculty'+lastOption+'" class="form-control form-select" name="form'+lastOption+'[faculty]" required></select></td><td><input type="date" class="form-control form-select" name="form'+lastOption+'[date]" required></td><td><input type="time" class="form-control" name="form'+lastOption+'[start_time]" required></td><td><input type="time" class="form-control" name="form'+lastOption+'[end_time]" required></td><td><button type="button" id="remove_new_option_button" onClick="removeOption(`newoption'+lastOption+'`)" class="btn btn-danger">X</button></td></tr>');
                    // ------------------- subjects -------------//
                    var subs = {!! json_encode($subjects->toArray()) !!};
                    var list = $('#subject'+lastOption);
                    list.append(new Option('---select---',''));
                    $.each(subs, function(index, item) {
                        list.append(new Option(item.subject_name, item.id));
                    });
                    // ------------------- Faculty -------------//
                    var facs = {!! json_encode($facultys->toArray()) !!};
                    console.log(facs);
                    var list1 = $('#faculty'+lastOption);
                    list1.append(new Option('---select---',''));
                    $.each(facs, function(index, item) {
                        list1.append(new Option(item.name, item.id));
                    });
                }
        </script>
    </body>
</html>
