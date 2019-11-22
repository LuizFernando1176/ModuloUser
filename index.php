<!DOCTYPE html>
<?php
$coon = mysqli_connect('localhost', 'root', '', 'teste01');
$queryBuscaUsuario = "select * from user ";
$queryResposta = mysqli_query($coon, $queryBuscaUsuario);
include_once 'util/config.php';
include_once 'util/corpo.php';
cabeca();
?>

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

                    </form>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                        Abrir modal de demonstração
                      </button>               <!--<button class="btn btn-outline-info " data-toggle="modal" data-target="#modalExemplo" ><label >Cadastra Usuário</label><i class="material-icons ">add</i></button>-->

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
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastre Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo URL_BASE ?>inserir/inserirUsuario.php">
                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" class="form-control" id="Nome" name="login" aria-describedby="emailHelp" placeholder="Usuario">
                            <small id="emailHelp" class="form-text text-muted">Digite seu Usuario.</small>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="****">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Apagar</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>
    <?php rodape() ?>