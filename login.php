<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login - RoadTire</title>
<link rel="icon" type="imagens/x-icon" href="imagens/roadtire.ico">
<style>
    body {
        background: #ff6347;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial;
    }
    .login-box {
        background: #ffffffdd;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        width: 320px;
        box-shadow: 0px 0px 12px #000;
    }
    .login-box img {
        width: 120px;
        margin-bottom: 20px;
    }
    input {
        width: 90%;
        padding: 10px;
        margin: 8px 0;
        border-radius: 6px;
        border: 1px solid #aaa;
    }
    button {
        width: 100%;
        padding: 12px;
        background: #ff6347;
        border: none;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        border-radius: 6px;
    }
    button:hover { background: #d94b38; }
    .erro { color: red; font-weight: bold; }
</style>

</head>
<body>

<div class="login-box">
    <img src="imagens/a.png" alt="Logo RoadTire">
    <h2>Login RoadTire</h2>

    <?php if(isset($erro)){ echo "<p class='erro'>$erro</p>"; } ?>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit"><a href="index.php">Entrar</a></button>
    </form>
</div>

</body>
</html>
