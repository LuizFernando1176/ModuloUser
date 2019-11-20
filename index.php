<!DOCTYPE html>
<?php
$coon = mysqli_connect('localhost', 'root', '', 'teste01');
$queryBuscaUsuario = "select * from user ";
$queryResposta = mysqli_query($coon, $queryBuscaUsuario);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Estilo do Site-->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <!--Scripts do site--> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body onload="mudaToggle();mudaToggleExcluido();">
        <div class="container">
            <div class="container-fluid">
                <div class="card tamanhoCard mt-1 text-center">
                    <script type="text/javascript" src="js/script.js"></script>
                    <div class="card-header bg-primary text-white" style="font-family: 'Roboto', sans-serif;"><b>Edição de Usuário</b></div>
                    <div class="card-footer"> 
                        <!-- Tokeninput plugin library -->
                        <script src="js/jquery-ui.js"></script>
                        <!--                        <link rel="stylesheet" href="css/token-input.css" />-->
                        <script src="js/jquery.min"></script>
                        <script src="js/jquery-ui.js"></script>
                        <div class="container row">
                            <form title="busca completa USE % " class="form-inline" method="post" action="">
                                <div class="form-group mx-sm-2 mb-2">
                                    <input class="form-control" id="search" type="text" name="login" placeholder="Usuario"/>
                                </div>
                                <button type="submit" class="btn btn-success mb-2">Busca</button>
                            </form>
                            <div class="col-12 mx-sm-12 mb-2" style="float:right">
                                <button type="button" class="btn btn-info">
                                    <span class="fa"></span> Adicionar
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table-reponsive table table-borderless " >
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Senha</th>
                                    <th>Nivel</th>
                                    <th>Conceder Admin</th>
                                    <th>Status</th>
                                    <th>Excluido</th>
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
                                        <td><label class="switch accordion">
                                                <input class="toggleAdmin" id="<?php echo $queryRespostas['id'] ?>" type="checkbox" onclick="alteraAdmin(this.id, this.checked)">
                                                <span class="slider"></span>
                                            </label></td>
                                        <td><label class="switch">
                                                <input class="toggleExcluido" id="<?php echo $queryRespostas['id'] ?>" type="checkbox" onclick="Excluir(this.id, this.checked)"> 
                                                <span class="slider2"></span>
                                            </label></td>
                                        <td class="ex" id="excluido<?php echo $queryRespostas['id'] ?>"><?php echo $queryRespostas['excluido']; ?></td>


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
