<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?= e( asset( 'css/screen.css' ) ) ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div id="container" class="site-container">
	<header id="masthead" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?= e( url() ); ?>"><?= e( config( 'app.title') ); ?></a>
				</h1>
				<span><?= e( config( 'app.tagline' ) ); ?></span>
			</div>
			<?php $engine->include( 'nav/menu/primary' ) ?>
		</div>
	</header>