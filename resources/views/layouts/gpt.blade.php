<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #717CA3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #D9D9D9;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .topic {
            background-color: #EFEFEF;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .topic:hover {
            background-color: #E0E0E0;
        }
        .topic h2 {
            margin-bottom: 5px;
            text-align: left;
        }
        .topic p {
            margin-bottom: 5px;
            text-align: left;
        }
        .topic .meta {
            text-align: right;
            font-size: 14px;
            color: #666;
        }
        .navbar {
            background-color: #6D6565;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            width: 100%;
            position: fixed;
            top: 0;
        }
        .navbar .brand {
            display: flex;
            align-items: center;
            color: white;
            font-size: 20px;
            padding: 20px 0;
        }
        .navbar .menu {
            display: flex;
        }
        .navbar .menu a {
            display: block;
            color: white;
            text-align: center;
            padding: 20px 50px;
            text-decoration: none;
        }
        .navbar .menu a:hover {
            background-color: #656E8F;
            color: white;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar li {
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="brand">
        For1
        </div>
        <div class="menu">
            <ul>
                <a href="{{ url('/') }}" >Pagina Inicial</a>
                @auth
                <h3>Bem-vindo, {{ Auth::user()->name }}!</h3>
                    <li><a href="{{ route('listUser', ['uid' => Auth::user()->id]) }}" >Perfil</a></li>
                    <li><a href="{{ route('logout') }}" >Logout</a></li>
                @else
                <h3>Bem-vindo!</h3>
                    <li><a href="{{ route('login') }}" >Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" >Cadastrar</a></li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>

    <div class="container">
        <div >
            <h1>Tópicos</h1>
            <div class="topic" onclick="window.location.href='/visualizar';">
                <h2>Nome do Título</h2>
                <p>Nome do Conteúdo</p>
                <div class="meta">
                    <p>Tag: <span>tag1</span></p>
                    <p>Categoria: <span>Categoria1</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>