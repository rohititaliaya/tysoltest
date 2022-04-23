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
            <form action="{{ url('/faculty/create') }}" method="POST">
                @csrf()
                @method('POST')
                <legend>faculty Form</legend>
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name:</label>
                <input type="text" id="sname" name="sname" class="form-control" placeholder="input" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <section id="sub_list" class="container p-5">
            <h3>facultys Table Here </h3>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>term_id</th>
                    <th>Created</th>
                </tr>
                @foreach($facultys as $faculty)
                <tr>
                    <td>{{$faculty->id}}</td>
                    <td>{{$faculty->name}}</td>
                    <td>{{$faculty->email}}</td>
                    <td>{{$faculty->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </section>
    </body>
</html>
