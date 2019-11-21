//função reposnsavel pela edição do ADMIN
function alteraAdmin(id, admin) {
    if (admin) {
        admin = 1;

    } else {
        admin = 0;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
//                        document.getElementById("demo").innerHTML == this.responseText;
        }
    };
    xhttp.open("GET", "./scripts/mudaPrivilegio.php?id=" + id + "&admin=" + admin, true);
    xhttp.send();
    document.getElementById('nivel' + id).innerHTML = admin;
}
function mudaToggle() {
    var toggles = document.getElementsByClassName('toggleAdmin');
    var niveis = document.getElementsByClassName('admin');

    for (i = 0; i < toggles.length; i++) {
        if (niveis[i].innerHTML === '1') {
            toggles[i].checked = true;

        } else {
            toggles[i].checked = false;
        }
    }
}
//função reposnsavel pela edição do USER
function Excluir(id, excluido) {
    if (excluido) {
        excluido = 1;

    } else {
        excluido = 0;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
//                        document.getElementById("demo").innerHTML == this.responseText;
        }
    };
    xhttp.open("GET", "./scripts/mudaUser.php?id=" + id + "&excluido=" + excluido, true);
    xhttp.send();
    document.getElementById('excluido' + id).innerHTML = excluido;
}
function mudaToggleExcluido() {
    var toggles = document.getElementsByClassName('toggleExcluido');
    var excluido = document.getElementsByClassName('ex');

    for (i = 0; i < toggles.length; i++) {
        if (excluido[i].innerHTML === '1') {
            toggles[i].checked = true;

        } else {
            toggles[i].checked = false;
        }
    }
}
// busca de usuarios
$(document).ready(function () {
    $("#search").autocomplete({
        source: "util/search.php",
        minLength: 0
    });
});
//busca tabela

$('input#txt_consulta').quicksearch('table#tabela tbody tr');

