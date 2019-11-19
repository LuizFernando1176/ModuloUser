<!DOCTYPE html>
<?php
$coon = mysqli_connect('localhost', 'root', '', 'teste01');
$queryBuscaUsuario = "select * from user WHERE NOT EXCLUIDO";
$queryResposta = mysqli_query($coon, $queryBuscaUsuario);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Estilo do Site-->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <!--Scripts do site--> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body onload="mudaToggle();">
        <div class="container">
        <div class="container-fluid">
            <div class="card tamanhoCard mt-5 text-center">
                <script type="text/javascript" src="js/script.js"></script>
                <div class="card-header bg-success">Edição de Usuário</div>
                <div class="card-body">
                    <table class="table-reponsive table table-borderless " >
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Senha</th>
                                <th>Nivel</th>
                                <th>Conceder Admin</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($queryRespostas = mysqli_fetch_assoc($queryResposta)) {
                                ?>
                                <tr>
                                    <td><?php echo $queryRespostas['login']; ?></td>
                                    <td><?php echo $queryRespostas['senha']; ?></td>
                                    <td class="admin" id="nivel<?php echo $queryRespostas['id'] ?>"><?php echo $queryRespostas['admin']; ?></td>
                                    <td><label class="switch">
                                            <input id="<?php echo $queryRespostas['id'] ?>" type="checkbox" onclick="alteraAdmin(this.id, this.checked)">
                                            <span class="slider"></span>
                                        </label></td>
                                    <td><label class="">
                                            <input id="" type="checkbox" onclick="">
                                            <span class=""></span>
                                        </label></td>

                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
    </body>
</html> 
