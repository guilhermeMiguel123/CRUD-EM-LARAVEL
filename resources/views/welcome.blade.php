@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Minha Aplicação</title>
    
</head>
<body>
    <div class="container">
        <header>
            <h1>Minha Aplicação</h1>
            <p>Bem-vindo à minha aplicação de controle de clientes e assistências.</p>
        </header>

        @yield('content')
       
        <footer>
            <p>&copy; 2024 Minha Aplicação. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="https://github.com/guilhermeMiguel123">Guilherme Miguel</a></p>
        </footer>
    </div>

    <script src="/assets/js/app.js"></script> 
</body>
</html>
