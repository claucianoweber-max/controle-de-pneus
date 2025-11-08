<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pneu - RoadTire</title>
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

        /* Formulário */
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

        button:hover { background: #e7533a; }

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
        <li><a href="Cadastraveiculo.php">Cadastrar Veículo</a></li>
        <li><a href="relatorio.php">Relatório</a></li>
        <li><a href="vidadoPneu.php">Vida do Pneu</a></li>
        <li><a href="login.php" style="color:red;">Sair</a></li>
    </ul>
</nav>

<div class="conteudo">
    <header>
        <h1>Cadastrar Pneu</h1>
        <p>Preencha os dados abaixo para registrar um novo pneu.</p>
    </header>

    <main>
        <form action="index.php" method="POST">
         <label>Identificação Única do Pneu:</label>
    <div style="display:flex; gap:10px; align-items:center; margin-top:6px;">
        <input type="text" name="sigla_empresa" placeholder="Sigla (Ex: RT)" maxlength="5" style="width:35%;" required>
        <input type="number" name="id_pneu" placeholder="Número (Ex: 001)" min="1" style="width:65%;" required>
    </div>
    <small style="color:#555;">Exemplo final: RT-001</small>
        <label>Marca do Pneu:</label>
    <select name="marca" required>
        <option value="">Selecione...</option>
        <option value="Pirelli">Pirelli</option>
        <option value="Michelin">Michelin</option>
        <option value="Goodyear">Goodyear</option>
        <option value="Continental">Continental</option>
        <option value="Bridgestone">Bridgestone</option>
        <option value="Firestone">Firestone</option>
        <option value="Dunlop">Dunlop</option>
        <option value="XBRI">XBRI</option>
        <option value="LingLong">LingLong</option>
        <option value="Aeolus">Aeolus</option>
        <option value="Outros">Outros</option>
    </select>

    <label>Medida:</label>
    <input type="text" name="medida" placeholder="Ex: 295/80R22.5" required>

    <label>Estado do Pneu:</label>
    <select name="status" required>
        <option value="Novo">Novo</option>
        <option value="Reformado">Reformado</option>
        <option value="Em Uso">Em Uso</option>
        <option value="Descartado">Descartado</option>
    </select>

    <label>Observações (opcional):</label>
    <input type="text" name="obs" placeholder="Ex: 1ª linha, estoque, etc.">

    <button type="submit">Salvar Pneu</button>
</form>

    </main>
</div>

</body>
</html>
