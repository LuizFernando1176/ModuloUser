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
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <!--Scripts do site--> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body onload="mudaToggle();">
        <div class="container">
            <div class="container-fluid">
                <div class="card tamanhoCard mt-1 text-center">
                    <script type="text/javascript" src="js/script.js"></script>
                    <div class="card-header bg-primary text-white" style="font-family: 'Roboto', sans-serif;"><b>Edição de Usuário</b></div>
                    <div class="card-footer"> 
                        <!-- Tokeninput plugin library -->
                        <script src="js/jquery.tokeninput.js"></script>
                        <link rel="stylesheet" href="css/token-input.css" />
                        <script>
        $(document).ready(function () {
            $("#login").tokenInput("./util/buscaUser.php", {
                deleteText: "&times;",
                minChars: 1,
                propertyToSearch: "name",
                hintText: "Procure o Usuario...",
                noResultsText: "Usuario não encontrado.",
                searchingText: "Procurando..."
            });
        });
                        </script>
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline mt-2" >
                                <input type="text" placeholder="Busca" aria-label="Search" name="login" id="login"> 
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </nav></div>
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
                                        <td><label class="switch">
                                                <input id="<?php echo $queryRespostas['id'] ?>" type="checkbox" onclick="alteraAdmin(this.id, this.checked)">
                                                <span class="slider"></span>
                                            </label></td>
                                        <td><label class="switch">
                                                <input id="<?php echo $queryRespostas['id'] ?>" type="checkbox" onclick="alteraUser()(this.id, this.checked)"> 
                                                <span class="slider2"></span>
                                            </label></td>
                                        <td class="admin" id="nivel<?php echo $queryRespostas['id'] ?>"><?php echo $queryRespostas['excluido']; ?></td>


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
