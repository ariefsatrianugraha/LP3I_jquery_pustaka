    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="lib/style.css"/>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html"><img src="assets/LOGO.png" alt="" width="30px"></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="biodata.html">Biodata <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="buku.html">Buku <span class="sr-only"></span></a>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		<div id="pesan"></div>
		<div class="row">
			<div class="container">
                <p>Ini datapicker </p>
                <input type="text" id="date-picker">
                <button id="tombol">Tombol</button>

            </div>
        </div>

        <script src="lib/jquery-3.4.1.min.js"></script>
        <script src="lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script>
            $(Document).ready(function(){
                $('#date-picker').datepicker();
                $('#date-picker').datepicker('option','dateFormat','yy-mm-dd');
            })

        </script>

    </body>
    </html>