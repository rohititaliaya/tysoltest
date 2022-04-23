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
        <section id="content_of_student_form" class="container p-5">
            <form action="{{ url('/subject/create') }}" method="POST">
                @csrf()
                @method('POST')
                <legend>Subject Form</legend>
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name:</label>
                <input type="text" id="sname" name="sname" class="form-control" placeholder="input" required>
                </div>
                <div class="mb-3">
                <label for="disabledSelect" class="form-label"> Select term</label>
                <select id="disabledSelect" class="form-select" name="sterm" required>
                    <option value="">Select</option>
                    @foreach($terms as $term)
                        <option value="{{$term->id}}">{{$term->name}}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <section id="sub_list" class="container p-5">
            <h3>Subjects Table Here </h3>
            <table class="table">
                <tr>
                    <th>name</th>
                    <th>term_id</th>
                </tr>
                @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->subject_name}}</td>
                    <td>{{$subject->term_id}}</td>
                </tr>
                @endforeach
            </table>
        </section>
    </body>
</html>
