<!DOCTYPE html>
<?php
include_once 'util/config.php';
include_once 'util/corpo.php';
include_once 'util/conectaBD.php';
$coon = conecta();
//Busca tabela de usuarios

$queryBuscaUsuario = "Select * from user order by login asc";
$queryResposta = mysqli_query($coon, $queryBuscaUsuario);

//Busca quantidade usuarios ativos
$QuerybuscaAtivos = "select count(id) total from USER where not excluido";
$queryRespostaAtivo = mysqli_query($coon, $QuerybuscaAtivos);
$queyRespostasAtivo = mysqli_fetch_assoc($queryRespostaAtivo);

//Busca quantidade usuarios já cadastrado
$QuerybuscaCad = "select count(id) total from USER ";
$queryRespostaCad = mysqli_query($coon, $QuerybuscaCad);
$queyRespostasCad = mysqli_fetch_assoc($queryRespostaCad);

//Busca quantidade usuarios Exluido
$QuerybuscaEx = "select count(id) total from USER where  excluido";
$queryRespostaEx = mysqli_query($coon, $QuerybuscaEx);
$queyRespostasEx = mysqli_fetch_assoc($queryRespostaEx);

//Busca quantidade de adm ativos
$QuerybuscaAdm = "select count(id) total from user WHERE admin ";
$queryRespostaAdm = mysqli_query($coon, $QuerybuscaAdm);
$queyRespostasAdm = mysqli_fetch_assoc($queryRespostaAdm);

//Buscar useuarios 
$queryBuscaUsuariosEditar = "Select * from user order by login asc";
$queryBuscaUsuariosEditarResposta = mysqli_query($coon, $queryBuscaUsuariosEditar);


cabeca();
?>


<body class="" onload="mudaToggle();mudaToggleExcluido();">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
            <div class="logo">

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Sistema Cad. Usuarios
                    <!-- <div class="logo-image-big">
                      <img src="../assets/img/logo-big.png">
                    </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="<?php echo URL_BASE ?>index.php">
                            <i class="nc-icon nc-bank"></i>
                            <p>Painel de Controle</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="nc-icon nc-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.html">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="./upgrade.html">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Sistema de Cadastro de Pessoas</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" href="#pablo">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="#pablo">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- <div class="panel-header panel-header-lg">
      
        <canvas id="bigDashboardChart"></canvas>
      
      
      </div> -->
            <script>
            function carrega(){
                 window.location.reload()
            }
            </script>
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-single-02 text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Quant. Ativos</p>
                                            <p class="card-title"><?php echo $queyRespostasAtivo['total'] ?></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> <a onclick="carrega(this);">Update Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-black">
                                            <i class="nc-icon nc-single-02 text-black"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Total de Usuário</p>
                                            <p class="card-title"><?php echo $queyRespostasCad['total'] ?></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar-o"></i> Total de Usuário Cadastrado
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-danger">
                                            <i class="nc-icon nc-simple-remove text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Usuários Deletados</p>
                                            <p class="card-title"><?php echo $queyRespostasEx['total'] ?></p>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                     <i class="fa fa-refresh"></i> <a onclick="carrega(this);">Update Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Administradores</p>
                                             <p class="card-title"><?php echo $queyRespostasAdm['total'] ?></p>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-refresh"></i> <a onclick="carrega(this);">Update Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Edição de Usuário</h5>

                                <form  class="form" method="post" action="">
                                    <div class="form-group ">
                                        <span class="input-group-addon"><i class="material-icons">search</i></span>
                                        <input type="text" class="w25 input-search form-control" alt="lista-clientes" placeholder="Buscar nesta lista" />

                                    </div></form>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                                    Cadastrar Usuário
                                </button>   

                            </div>
                            <div class="card-body ">
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
                                                        <input type="text" class="form-control" id="Nome" name="login"  placeholder="Usuario">
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

                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="card-footer ">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Area da paginação
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-title">Editar Usários</h5>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
                                  <table class="table-reponsive table  lista-clientes"   >
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Senha</th>
                                            <th>Editar</th>
                                            <th>Visualizar</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($queryRespostaUserEdite = mysqli_fetch_assoc($queryBuscaUsuariosEditarResposta)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $queryRespostaUserEdite['login']; ?></td>
                                                <td><?php echo $queryRespostaUserEdite['senha']; ?></td>
                                            <?php    echo "<td >" . "<button class='btn btn-warning'><a class ='text-dark' href='./editar/editarUser.php?id=" . $queryRespostaUserEdite['id'] . "'>Editar</a></button>" . "</td>";?>
                                            <?php    echo "<td >" . "<button class='btn btn-success '><a class ='text-dark' href='./editar/editarMaquina.php?id=" . $queryRespostaUserEdite['id'] . "'>Visualizar</a></button>" . "</td>";?>
                                               
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div></div>
                    </div>
                </div>
                <footer class="footer footer-black  footer-white ">
                    <div class="container-fluid">
                        <div class="row">
                            <nav class="footer-nav">
                                <ul>
                                    <li>
                                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                                    </li>
                                    <li>
                                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                                    </li>
                                    <li>
                                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="credits ml-auto">
                                <span class="copyright">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                                </span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script>
                $(document).ready(function () {
                    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                    demo.initChartsPages();
                });
            </script>
        </div>
        <?php rodape() ?>

    </html>
