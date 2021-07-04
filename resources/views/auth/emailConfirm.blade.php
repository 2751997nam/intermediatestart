<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Email</title>
    <link rel="stylesheet" href="{{  asset('js/app.js') }}">
</head>
<body>
    <div class="container">
        <div class="greeting">
            <h3>hello {{ $user->name }}</h3>
        </div>
        {!! Form::open(['method' => 'POST', 'url' => route('register.verify', ['verifyToken' => $user->verifyToken])]) !!}
            <button class="btn btn-primary" type="submit">Click Me</button>
        {!! Form::close() !!}
    </div>
</body>
</html>