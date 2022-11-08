<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>
            @auth
                {{ Auth::User()->name }}
                hola
            @endauth
        </h1>
        <div>
            <form method="post" action=" {{ url('login/') }}">
                @csrf
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="Email">
                <br>
                <label for="pass">Password:</label>
                <input type="password" name="password" placeholder="* * * * *">
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
</body>
</html>