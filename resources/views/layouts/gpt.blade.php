<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Lateral</title>
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .wrapper {
        display: flex;
        height: 100%;
    }

    .sidebar {
        width: 250px;
        background-color: #333;
        color: #fff;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
        border-bottom: 1px solid #555;
    }

    .sidebar ul li:hover {
        background-color: #555;
    }

    .content {
        flex: 1;
        padding: 20px;
    }

    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }
</style>
</head>
<body>
<h1>@yield('chammou')</h1>
<div class="wrapper">
    <div class="sidebar">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
        </ul>
    </div>
    <div class="content">
        <h1> @yield('content')</h1>
       
 
        
    </div>
</div>

<div class="footer">
    Rodapé da Página
</div>

</body>
</html>
