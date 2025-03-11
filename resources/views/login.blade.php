<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('login')}}" method="POST">
            @csrf
            <input type="eamil" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit"> login </button>
        </form>
    </div>
</body>
</html>