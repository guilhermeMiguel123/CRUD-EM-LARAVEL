<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\wamp64\www\resources\css\app.css">
    <title>Minha Aplicação</title>
    
</head>
<body>
    <div class="container">
        <header>
            <h1>Minha Aplicação</h1>
            <p>Bem-vindo à minha aplicação de controle de clientes e assistências.</p>
        </header>

        <nav>
            <ul>
                <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li><a href="{{ route('assistencias.index') }}">Assistências</a></li>
            </ul>
        </nav>

        <div class="content">
            <div id="solicitacoes"></div> 
        </div>
        
        <footer>
            <p>&copy; 2024 Minha Aplicação. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="https://github.com/guilhermeMiguel123">Guilherme Miguel</a></p>
        </footer>
    </div>

    <script src="C:\wamp64\www\resources\js\app.js"></script> 
</body>
</html>
