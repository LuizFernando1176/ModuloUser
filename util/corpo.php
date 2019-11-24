<?php

function cabeca() {

    echo '<html>
    <head>
        
       <meta charset="utf-8" />
       <link rel="apple-touch-icon" sizes="76x76" href="' . URL_BASE . 'img/apple-icon.png">
       <link rel="icon" type="image/png" href="' . URL_BASE . 'img/favicon.png">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--Estilo do Site-->
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="' . URL_BASE . 'css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="' . URL_BASE . 'css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="' . URL_BASE . 'css/paper-dashboard.min.css" rel="stylesheet" type="text/css"/>
        <link href="' . URL_BASE . 'css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />F
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        
    </head>';
}

function rodape() {

    echo '  
        <!--Scripts do site--> 
        <script src="' . URL_BASE . 'js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/popper.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/bootstrap-notify.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/chartjs.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/demo.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/jquery.quicksearch.js" type="text/javascript"></script>
        <script src="' . URL_BASE . 'js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="' . URL_BASE . 'js/script.js"></script>
</body>
</html> 
';
}
