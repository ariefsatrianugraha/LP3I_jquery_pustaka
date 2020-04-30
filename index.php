<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Jquery</title>
    <link rel="stylesheet" href="lib/style.css"/>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href=""><img src="assets/LOGO.png" alt="" width="30px"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php $aktif = isset($_GET['url'])?$_GET['url']:''; ?>
                <li class="nav-item <?php if ($aktif == 'biodata'){ echo "aktif";} ?>">
                    <a class="nav-link" href="index.php?url=biodata">Biodata</a>
                </li>
                <li class="nav-item <?php if($aktif == 'buku'){echo "aktif";} ?>">
                    <a class="nav-link" href="index.php?url=buku">Buku</a>
                </li>
                <li class="nav-item <?php if($aktif == 'peminjaman') { echo "aktif";} ?>">
                    <a class="nav-link" href="index.php?url=peminjaman">Peminjaman</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="row">
        <div class="container">
            <?php 
                require('control.php');
                if(isset($page) && $page != ''){
                    include($page);
                }
            ?>
        </div>
    </div>

    <script src="lib/jquery-3.4.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/swal/dist/sweetalert2.all.min.js"></script>
    <script src="lib/jquery-loading/dist/jquery.loading.min.js"></script>
    <script src="lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <?php
        if(isset($js) && $js != ''){
            include($js);
        }
    ?>
</body>
</html>