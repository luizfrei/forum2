<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perfil</h2>
        <span>{{session('message')}}</span>
        @if($user != null)
        <form action="{{route('UpdateUser',[$user->id])}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{$user->name}}" required>
             @error('name')<span>{{$message}} </span>  @enderror  
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"value="{{$user->email}}" required>
                @error('email')<span>{{$message}} </span>  @enderror
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="password" name="password" >
                @error('password')<span>{{$message}} </span>  @enderror
            </div>
           
            <button type="submit" value="Registrar">Cadastrar</button>
        </form>
    </br>
        <form action="{{route('DeleteUser',[$user->id])}}" method="POST">
        @csrf
         @method('delete')
         <input type="submit" value="Excluir" >
         </form>
        @endif
    </div>
</body>
</html>
