<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <section class="login-section">

        <div>
            <h1>Iniciar sesión</h1>
        </div>


        <form method="POST" action="{{ route('loginAuth') }}">
            @csrf
            <div>
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">iniciar</button>
        </form>
    </section>

</body>

</html>