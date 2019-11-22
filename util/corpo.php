<?php

function cabeca() {

    echo '<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Estilo do Site-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="' . URL_BASE . 'css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="' . URL_BASE . 'css/estilo.css" rel="stylesheet" type="text/css"/>
        
        
    </head>';
}

function rodape() {

    echo '  
        <!--Scripts do site--> 
        <script src="' . URL_BASE . 'js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/popper.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/bootstrap.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/jquery.quicksearch.js" type="text/javascript"></script>
        <script type="text/javascript" src="' . URL_BASE . 'js/script.js"></script>
</body>
</html> 
';
}
