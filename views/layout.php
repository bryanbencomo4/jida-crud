<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
</head>
<body>
    <div class="container-fluid">
        <header class="text-center">
            <img src="<?= URL_BASE ?>/assets/img/jida.png" alt="" style="width:150px">
            <h1 class="text-muted">CRUD DE USUARIOS</h1>
        </header>

        <hr />

        <?php
            if(isset($_SESSION["msj"]))
                echo "<script> alert(".$_SESSION["msj"]."); </script>";
            unset($_SESSION["msj"]);
            require $view;
        ?>

        <hr />

        <footer>
            <div class="text-center">Bryan Bencomo, © 2019:
                <a href="https://www.jidadesarrollos.com/" target="_blank"> jidadesarrollos.com</a>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= URL_BASE ?>/assets/js/datatable-config.js"></script>
    <script src="<?= URL_BASE ?>/assets/js/form-validate.js"></script>
</body>
</html>