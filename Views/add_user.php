<style type="text/css">
    body{
        background-image: url('../assets/images/bg-user.jpg');
    }
    .container-cadastrar{
        width: 20em;
        height: 23em;
        margin: 10em auto;
        background-color: #DDD;
        opacity: 0.8;
    }
    h2{
        text-align: center;
        padding-top: 0.1em;
    }
    .form-group{
        text-align: center;
    }
    label{
        float: left;
        margin-left: 1.5em;
        margin-top: 1em;
    }
    .form-control{
        width: 20em;
        height: 2em;
        padding: 1em;
    }
    .form-check{
        margin-top:1em;
    }
    .form-check-input{
        float: left;
        margin-left: 2em;
    }
    .btn{
        width: 10em;
        height:2em;
        margin-top: 1em;
        margin-left: 10em;
        cursor: pointer;
        background-color: #0000FF;
        color:#FFF;
        border: none;
        font-weight: bold;
    }
</style>
<div class="container-cadastrar">
    <h2>Cadastra novo Usuário</h2>
    <form action="<?php echo BASE_URL; ?>login/add_action" method="POST" class="login">
    <?php if(!empty($error)): ?>
    <div class="alert alert-danger" role="alert">
    <p><?php echo $error; ?></p>
    </div>
    <?php endif; ?>
        <div class="form-group">
            <label id="name">Nome:</label><br/>
            <input type="text" name="name" class="form-control" autofocus />
        </div>

        <div class="form-group">
            <label id="email">E-mail:</label><br/>
            <input type="email" name="email" class="form-control" />
        </div>

        <div class="form-group">
            <label id="password">Senha:</label><br/>
            <input type="password" name="password" class="form-control" />
        </div>

        <div class="form-check">
            Administrador
            <input type="checkbox" class="form-check-input" name="adm"><br/>
        </div>
        <button type="submit" class="btn btn-primary">Cadastre-se</button>
    </form>
</div>