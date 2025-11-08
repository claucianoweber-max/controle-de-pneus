<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório - RoadTire</title>
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

        header { color: white; border-bottom: 2px solid #fff; padding-bottom: 10px; }
        h1 { margin: 0; }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
        }

        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background: #ff9999;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            nav { transform: translateX(-250px); width: 200px; }
            nav.ativo { transform: translateX(0); }
            .conteudo { margin-left: 0; width: 100%; padding-top: 60px; }
            .menu-btn { display: block; }
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
    </style>
</head>
<body>

<button class="menu-btn" onclick="document.getElementById('menu').classList.toggle('ativo')">☰ Menu</button>

<nav id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="auditoria.php">Auditar Relatório</a></li>
        <li><a href="Cadastrapneu.php">Cadastrar Pneu</a></li>
        <li><a href="CadastraVeiculo.php">Cadastrar Veículo</a></li>
        <li><a href="vidadoPneu.php">Vida do Pneu</a></li>
        <li><a href="login.php" style="color:red;">Sair</a></li>
    </ul>
</nav>

<div class="conteudo">
    <header>
        <h1>Relatório de Pneus</h1>
        <p>Acompanhe o status e histórico dos pneus cadastrados.</p>
    </header>

    <main>
        <form action="relatorio.php" method="GET" style="background:#fff; padding:15px; border-radius:8px; margin-bottom:20px; max-width:350px;">
    <label for="id_pneu" style="font-weight:bold;">Consultar Pneu pelo ID:</label>
    <input type="text" name="id_pneu" id="id_pneu" placeholder="Ex: RT-001" required style="width:100%; padding:8px; margin-top:6px;">
    <button type="submit" style="margin-top:10px; background:#ff6347; color:#fff; padding:10px; width:100%; border:none; border-radius:5px; font-weight:bold;">
        Ver Relatório
    </button>
</form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pneu</th>
                    <th>Medida</th>
                    <th>Veículo</th>
                    <th>Status</th>
                    <th>Quilometragem</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui depois vamos colocar dados do banco -->
                <tr>
                    <td>001</td>
                    <td>Firestone</td>
                    <td>295/80R22.5</td>
                    <td>Caminhão 12</td>
                    <td>Em Uso</td>
                    <td>120.000 km</td>
                </tr>
            </tbody>
        </table>
    </main>
</div>

</body>
</html>
