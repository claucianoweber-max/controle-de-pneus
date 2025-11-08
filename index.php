<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadTire</title>
    <link rel="icon" type="imagens/x-icon" href="imagens/roadtire.ico">

    <style>
        body {
            background-color: #ff6347;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
        }

        /* MENU LATERAL */
        nav {
            width: 220px;
            background: #ff9999;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform .3s ease;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav li a {
            display: block;
            padding: 12px 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        nav li a:hover {
            background: #ffd1d1;
        }

        /* CONTEÚDO PRINCIPAL */
        .conteudo {
            margin-left: 240px;
            padding: 20px;
            width: calc(100% - 240px);
        }

        /* CABEÇALHO */
        header {
            background: rgba(255, 255, 255, 0.3);
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 3px solid #fff;
        }

        header img {
            height: 80px;
        }

        header h1 {
            font-size: 28px;
            margin: 0;
            color: #fff;
            text-shadow: 1px 1px 2px #000;
        }

        /* BOTÃO HAMBÚRGUER (MOBILE) */
        .menu-btn {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            background: #ffffffcc;
            border: none;
            padding: 10px 14px;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            z-index: 1000;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px;
            color: #fff;
            opacity: 0.8;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 768px) {
            body { display: block; }

            nav {
                transform: translateX(-250px); /* esconder menu */
                width: 200px;
                height: 100%;
            }

            nav.ativo {
                transform: translateX(0); /* mostrar menu */
            }

            .menu-btn {
                display: block;
            }

            .conteudo {
                margin-left: 0;
                width: 100%;
                padding-top: 60px;
            }

            header {
                flex-direction: column;
                text-align: center;
            }

            header img {
                height: 60px;
            }
        }
    </style>
</head>
<body>

    <button class="menu-btn" onclick="abreMenu()">☰ Menu</button>

    <nav id="menu">
        <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="auditoria.php">Auditar Relatório</a></li>
    <li><a href="Cadastrapneu.php">Cadastrar Pneu</a></li>
    <li><a href="CadastraVeiculo.php">Cadastrar Veículo</a></li>
    <li><a href="relatorio.php">Relatório</a></li>
    <li><a href="vidadoPneu.php">Vida do Pneu</a></li>
    <li><a href="login.php" style="color:red;">Sair</a></li>
</ul>
    </nav>

    <div class="conteudo">
        <header>
            <img src="imagens/a.png" alt="Logo RoadTire">
            <h1>Sistema de Controle de Pneus</h1>
        </header>

        <main>
            <h2>Bem-vindo ao sistema!</h2>
            <p>Selecione uma opção no menu.</p>
            <p>
                Explicações das funções do menu.
            </p>
            <p>
                O menu é composto por :
            </p>
            <ul>
                <li>Home</li>
                <li>Auditar Relatório</li>
                <li>Cadastrar Pneu</li>
                <li>Cadastrar Veículo</li>
                <li>Relatório</li>
                <li>Vida do Pneu</li>
                <li>Sair</li>
            </ul>
            <p>
            Home estamos na aba, Bem-vindo ao sistema.Abaixo segue uma explanação do menu lateral esquerdo.
            </p>
            <p>
            Auditar Relatório, traz a informação, data, identidade do pneu (ID), tipo da ação Ex: trocado, quilometragem percorrida,e o responsável pela ação (manutenção exercida).
            </p>
            <p>
            Cadastrar Pneu, refere ao cadastrar um pneu novo, dar uma identificação única ao pneu, seguido de marca, medida, estado do pneu, obs.
            </p>
            <p>
            Cadastrar Veículo, refere ao cadastro do veículo ao qual pertence a empresa, com as informações de placa, modelo, marca, ano, identificação da frota, e status de ativo, manutenção, e em caso de veículo roubado, acidentado sem condições de uso, ou vendido, deve ser atualizado no menu vida do pneu.
            </p>
            <p>
            Relatório de Pneus, informar o número a ser pesquisado, confirmar para trazer a informação a tela.
            </p>
        </main>

        <footer>
            RoadTire © 2025 - Todos os direitos reservados - versão 1.0.
        </footer>
    </div>

    <script>
        function abreMenu() {
            document.getElementById('menu').classList.toggle('ativo');
        }
    </script>

</body>
</html>

