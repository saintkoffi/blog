<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head lang="fr">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Fobia-Template&formulaire</title>
	<!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Framework CSS -->
	<link rel="stylesheet" href="assets/blueprint-css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="assets/blueprint-css/print.css" type="text/css" media="print">
	<!--[if lt IE 8]><link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="assets/blueprint-css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<style type="text/css" media="screen">
		p, table, hr, .box { margin-bottom:25px; }
		.box p { margin-bottom:10px; }
	</style>
</head>


<body>
	@include('partials.header')
<!-- end div .span-6 -->
			<div class="span-12 last">
				<p class="prepend-top append-0">Merci d'avoir acheté mon thème.<br/>
					Si vous avez des questions qui dépassent la portée de ce fichier d'aide,<br/>
					n'hésitez pas à nous envoyer un e-mail via le formulaire de contact de ma page utilisateur.<br/>
					Merci beaucoup!</p>
			</div>
		</div><!-- end div .borderTop -->
		<!-- @include('partials.sidebar') -->

        @yield('nomPrenom')

        @include('partials.footer')
	<!-- end div .container -->
	<div class="container">
		@if (session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
		@endif
	</div>
</body>
</html>
