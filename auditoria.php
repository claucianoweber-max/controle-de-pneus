<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditoria - RoadTire</title>
    <link rel="icon" type="image/x-icon" href="imagens/roadtire.ico">

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

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            margin-top: 15px;
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
        <li><a href="CadastraVeiculo.php">Cadastrar Veículo</a></li>
        <li><a href="relatorio.php">Relatório</a></li>
        <li><a href="vidadoPneu.php">Vida do Pneu</a></li>
    </ul>
</nav>

<div class="conteudo">
    <header>
        <h1>Auditoria do Sistema</h1>
        <p>Verifique histórico de movimentações, trocas e controle de uso.</p>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>ID Pneu</th>
                    <th>Veículo</th>
                    <th>Ação</th>
                    <th>Quilometragem</th>
                    <th>Responsável</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados de exemplo, vamos conectar ao banco depois -->
                <tr>
                    <td>10/11/2025</td>
                    <td>001</td>
                    <td>Caminhão 12</td>
                    <td>Troca de Pneu</td>
                    <td>355.120 km</td>
                    <td>João Ribeiro</td>
                </tr>
            </tbody>
        </table>
    </main>

</div>

</body>
</html>
