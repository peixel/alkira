<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>alkira | control de alquileres</title>
		<meta name="description" content="">
		<meta name="author" content="guitarrero">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
         <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
            <link rel="stylesheet" href="<?=base_url()?>css/style.css">
          <script src="//code.jquery.com/jquery-1.10.2.js"></script>
          <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script>
          $(function() {
            $( "#datepicker" ).datepicker();
          });
          </script>

		
	</head>

	<body>
		<div class="container">
			<header>
                <h1>ALKIRA</h1>
                <h1><?=$welcome_msg?></h1>
			</header>
            <nav>
                <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a href="<?=base_url()?>user">Inicio</a></li>
                  <li role="presentation"><a href="<?=base_url()?>user">Inquilino</a></li>
                  <li role="presentation"><a href="<?=base_url()?>user/contrat">Lista</a></li>
                </ul>            
            </nav>
			<div>
                <?=$principal?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by guitarrero
				</p>
			</footer>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
