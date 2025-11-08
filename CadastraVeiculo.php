<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículo - RoadTire</title>
    <link rel="icon" type="imagens/x-icon" href="imagens/roadtire.ico">

    <style>
        body {
            background-color: #ff6347;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
        }

        nav {
            width: 220px;
            background: #ff9999;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform .3s;
        }

        nav ul { list-style: none; padding: 0; margin: 0; }
        nav li a {
            display: block;
            padding: 12px 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
        nav li a:hover { background: #ffd1d1; }

        .conteudo {
            margin-left: 240px;
            padding: 20px;
            width: calc(100% - 240px);
        }

        header {
            color: white;
            border-bottom: 2px solid #fff;
            padding-bottom: 10px;
        }

        h1 { margin: 0; }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
            max-width: 550px;
        }

        label { font-weight: bold; display: block; margin-top: 12px; }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 5px;
            border: 1px solid #aaa;
            font-size: 15px;
        }

        button {
            margin-top: 20px;
            background: #ff6347;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        .menu-btn {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            background: #ffffffcc;
            border: none;
            padding: 10px 14px;
            font-size: 18px;
            cursor: pointer;
            z-index: 1000;
            border-radius: 4px;
        }

        @media (max-width: 768px) {
            nav { transform: translateX(-250px); width: 200px; }
            nav.ativo { transform: translateX(0); }
            .conteudo { margin-left: 0; width: 100%; padding-top: 60px; }
            .menu-btn { display: block; }
        }
    </style>
</head>
<body>

<button class="menu-btn" onclick="document.getElementById('menu').classList.toggle('ativo')">☰ Menu</button>

<nav id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="auditoria.php">Auditar Relatório</a></li>
        <li><a href="Cadastrapneu.php">Cadastrar Pneu</a></li>
        <li><a href="relatorio.php">Relatório</a></li>
        <li><a href="vidadoPneu.php">Vida do Pneu</a></li>
        <li><a href="login.php" style="color:red;">Sair</a></li>
    </ul>
</nav>

<div class="conteudo">
    <header>
        <h1>Cadastrar Veículo</h1>
        <p>Preencha os dados abaixo para cadastrar um veículo.</p>
    </header>

    <main>
        <form action="index.php" method="POST">
            
            <label>Placa:</label>
            <input type="text" name="placa" placeholder="ABC-1234" required>

            <label>Modelo:</label>
            <input type="text" name="modelo" required>

            <label>Marca do Veículo:</label>
            <select name="marca" required>
                <option value="">Selecione...</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Volvo">Volvo</option>
                <option value="Scania">Scania</option>
                <option value="Iveco">Iveco</option>
                <option value="Ford">Ford</option>
                <option value="Fiat">Fiat</option>
            </select>

            <label>Ano:</label>
            <input type="number" name="ano" min="1980" max="2099" required>

            <label>Identificação / Frota:</label>
            <input type="text" name="frota">

            <label>Status:</label>
            <select name="status" required>
                <option value="Ativo">Ativo</option>
                <option value="Manutenção">Manutenção</option>
                <option value="Desativado">Desativado</option>
            </select>

            <button type="submit">Salvar Veículo</button>
        </form>
    </main>
</div>

</body>
</html>
