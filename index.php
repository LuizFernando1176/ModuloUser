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
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <!--Scripts do site--> 

        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/jquery.quicksearch.js" type="text/javascript"></script>
        <script src="js/bootstrap.mins.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body onload="mudaToggle();mudaToggleExcluido();">
        <div class="container">
            <div class="container-fluid">
                <div class=" text-center">
                    <div class="card-header bg-primary text-white" style="font-family: 'Roboto', sans-serif;"><b>Edição de Usuário</b></div>
                    <div class="card-footer"> 
                        <form  class="form" method="post" action="">
                                <div class="form-group ">
                                    <span class="input-group-addon"><i class="material-icons">search</i></span>
                                    <input type="text" class="w25 input-search form-control" alt="lista-clientes" placeholder="Buscar nesta lista" />
                                    
                                </div>
                            
                                    <button class="btn btn-outline-info " ><label >Cadastra Usuário</label><i class="material-icons ">add</i></button>
                                
                            </form>
                    </div>
                    <div class="card-body">
                        <table class="table-reponsive table  lista-clientes"   >
                            <thead class="thead-light">
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
