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
