<!DOCTYPE html>
<html>
<head>
    <title>Login Painel Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css" />
</head>
<body>
<div class="container">
    <form action="<?php echo BASE_URL; ?>login/index_action" method="POST" class="login">
    <?php if(!empty($error)): ?>
    <div class="alert alert-danger" role="alert">
    <p><?php echo $error; ?></p>
    </div>
    <?php endif; ?>
        <div class="form-group">
            <label id="email" style="color:#000;">E-mail:</label>
            <input type="email" name="email" class="form-control" autofocus placeholder="exemplo@gmail.com" />
        </div>
        <div class="form-group">
            <label id="password" style="color:#000;">Senha:</label>
            <input type="password" name="password" class="form-control" placeholder="teste" />
        </div>
        <input type="submit" value="Entrar" class="btn btn-primary" />
        <a href="<?php echo BASE_URL; ?>login/add_user">Cadastre-se</a>
    </form>
</div>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>