<!DOCTYPE html>
<?php
$coon = mysqli_connect('localhost', 'root', '', 'teste01');
$queryBuscaUsuario = "select * from user WHERE NOT EXCLUIDO";
$queryResposta = mysqli_query($coon, $queryBuscaUsuario);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            .switch input { 
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>
        <script>
            function alteraAdmin(id, admin) {
                if (admin) {
                    admin = 1;

                } else {
                    admin = 0;
                }

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status == 200) {
//                        document.getElementById("demo").innerHTML == this.responseText;
                        window.alert(this.responseText);
                    }
                };
                xhttp.open("GET", "./scripts/mudaPrivilegio.php?id=" + id + "&admin=" + admin, true);
                xhttp.send();
                document.getElementById('nivel'+id).innerHTML = admin;
            }
            function mudaToggle() {
                var toggles = document.getElementsByTagName('input');
                var niveis = document.getElementsByClassName('admin');

                for (i = 0; i < toggles.length; i++) {
                    if (niveis[i].innerHTML === '1') {
                        toggles[i].checked = true;

                    } else {
                        toggles[i].checked = false;
                    }
                }
            }
        </script>
    </head>
    <body onload="mudaToggle();">
        <table class="table-reponsive table table-borderless">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Nivel</th>
                    <th>Conceder Admin</th>
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
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </body>
</html> 
