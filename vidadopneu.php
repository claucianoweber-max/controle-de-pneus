<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida do Pneu - RoadTire</title>
    <link rel="icon" type="imagens/x-icon" href="imagens/roadtire.ico">

    <style>
        body { background-color: #ff6347; margin: 0; font-family: Arial, Helvetica, sans-serif; display: flex; }
        nav { width: 220px; background: #ff9999; height: 100vh; padding-top: 20px; position: fixed; left: 0; top: 0; }
        nav ul { list-style: none; padding: 0;}
        nav li a { display: block; padding: 12px 18px; color: #000; text-decoration: none; font-weight: bold;}
        nav li a:hover { background: #ffd1d1;}
        .conteudo { margin-left: 240px; padding: 20px; width: calc(100% - 240px);}
        header { background: rgba(255,255,255,0.3); padding: 20px; border-bottom: 3px solid #fff; display: flex; align-items: center; gap: 20px; }
        header img { height: 80px; }
        header h1 { margin: 0; color: #fff; text-shadow: 1px 1px 2px #000; }

        form { background: #fff; padding: 25px; border-radius: 10px; margin-top: 20px; max-width: 750px; }
        label { font-weight: bold; display: block; margin-top: 12px; }
        input, select { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-top: 5px; }

        .linha {
            display: flex;
            gap: 10px;
        }
        .linha > div {
            flex: 1;
        }

        button { margin-top: 20px; padding: 12px; background: #333; color: #fff; border: none; cursor: pointer; border-radius: 5px;}
        button:hover { background: #111; }

        footer { text-align: center; margin-top: 40px; padding: 15px; color: #fff; opacity: 0.8; }
    </style>
</head>
<body>

<nav id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="auditoria.php">Auditar Relatório</a></li>
        <li><a href="Cadastrapneu.php">Cadastrar Pneu</a></li>
        <li><a href="CadastraVeiculo.php">Cadastrar Veículo</a></li>
        <li><a href="relatorio.php">Relatório</a></li>
        <li><a href="login.php" style="color:red;">Sair</a></li>
    </ul>
</nav>

<div class="conteudo">
    <header>
        <img src="imagens/a.png" alt="Logo RoadTire">
        <h1>Vida do Pneu</h1>
    </header>

    <form action="salvarVidaPneu.php" method="POST">

        <label>Identificação Única do Pneu:</label>
        <input type="text" name="numero_pneu" placeholder="Ex: RT-0125" required>

        <label>Veículo</label>
        <select name="veiculo" required>
            <option value="">Selecione...</option>
            <!-- Aqui depois vamos puxar do banco -->
            <option>ABC1D23</option>
            <option>XYZ4K88</option>
        </select>

        <label>Localização do Pneu</label>
        <div class="linha">
            <div>
                <select name="eixo" required>
                    <option value="">Eixo</option>
                    <?php for($i=1;$i<=11;$i++): ?>
                        <option>Eixo <?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div>
                <select name="lado" required>
                    <option value="">Lado</option>
                    <option>Lado Esquerdo</option>
                    <option>Lado Direito</option>
                </select>
            </div>
        </div>

        <label>KM quando o pneu foi montado no veículo</label>
        <input type="number" name="km_montagem" required>

        <label>KM de Recapagens (se não teve, deixe vazio)</label>
        <input type="number" name="rec1" placeholder="1ª Recapagem">
        <input type="number" name="rec2" placeholder="2ª Recapagem">
        <input type="number" name="rec3" placeholder="3ª Recapagem">
        <input type="number" name="rec4" placeholder="4ª Recapagem">
        <input type="number" name="rec5" placeholder="5ª Recapagem">

        <button type="submit">Salvar Registro</button>

    </form>

    <footer>
        RoadTire © 2025 - Todos os direitos reservados - versão 1.0.
    </footer>
</div>

</body>
</html>
