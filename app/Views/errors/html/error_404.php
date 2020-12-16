<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<style>
	div.logo {
		height: 200px;
		width: 155px;
		display: inline-block;
		opacity: 0.08;
		position: absolute;
		top: 2rem;
		left: 50%;
		margin-left: -73px;
	}
	body {
		height: 100%;
		background: #fafafa;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		color: #777;
		font-weight: 300;
	}
	h1 {
		font-weight: lighter;
		letter-spacing: 0.8;
		font-size: 3rem;
		margin-top: 0;
		margin-bottom: 0;
		color: #222;
	}
	.wrap {
		max-width: 1024px;
		margin: 5rem auto;
		padding: 2rem;
		background: #fff;
		text-align: center;
		border: 1px solid #efefef;
		border-radius: 0.5rem;
		position: relative;
	}
	pre {
		white-space: normal;
		margin-top: 1.5rem;
	}
	code {
		background: #fafafa;
		border: 1px solid #efefef;
		padding: 0.5rem 1rem;
		border-radius: 5px;
		display: block;
	}
	p {
		margin-top: 1.5rem;
	}
	.footer {
		margin-top: 2rem;
		border-top: 1px solid #efefef;
		padding: 1em 2em 0 2em;
		font-size: 85%;
		color: #999;
	}
	a:active,
	a:link,
	a:visited {
		color: #dd4814;
	}


	/* desde aqui el doedigo de error*/


	@import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700');
$nunito-font: 'Nunito', sans-serif;

// mixins
@mixin breakpoint($point) {
    @if $point==mobile {
        @media (max-width: 480px) and (min-width: 320px) {
            @content ;
        }
    }
}

// keyrames
@keyframes floating {
    from { transform: translateY(0px); }
    65%  { transform: translateY(15px); }
    to   { transform: translateY(-0px); }
}

html {
  height: 100%;
}

body{
  background-image: url('https://mars-404.templateku.co/img/star.svg'),linear-gradient(to bottom, #05007A, #4D007D);
  height: 100%;
  margin: 0;
  background-attachment: fixed;
  overflow: hidden;
}

.mars{
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  height: 27vmin;
  background: url('https://mars-404.templateku.co/img/mars.svg') no-repeat bottom center;
  background-size: cover;
}

.logo-404{
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  top: 16vmin;
  width: 30vmin;

  @include breakpoint(mobile){
    top: 45vmin;
  }
}

.meteor{
  position: absolute;
  right: 2vmin;
  top: 16vmin;
}

.title{
  color: white;
  font-family: $nunito-font;
  font-weight: 600;
  text-align: center;
  font-size: 5vmin;
  margin-top: 31vmin;

  @include breakpoint(mobile){
    margin-top: 65vmin;
  }
}

.subtitle{
  color: white;
  font-family: $nunito-font;
  font-weight: 400;
  text-align: center;
  font-size: 3.5vmin;
  margin-top: -1vmin;
  margin-bottom: 9vmin;
}

.btn-back{
  border: 1px solid white;
  color: white;
  height: 5vmin;
  padding: 12px;
  font-family: $nunito-font;
  text-decoration: none;
	border-radius: 5px;

  &:hover{
    background: white;
    color: #4D007D;
  }

  @include breakpoint(mobile){
    font-size: 3.5vmin;
  }
}

.astronaut{
  position: absolute;
  top: 18vmin;
  left: 10vmin;
  height: 30vmin;
	animation: floating 3s infinite ease-in-out;

  @include breakpoint(mobile){
    top: 2vmin;
  }
}

.spaceship{
  position: absolute;
  bottom: 15vmin;
  right: 24vmin;

  @include breakpoint(mobile){
    width: 45vmin;
    bottom: 18vmin;
  }
}
</style>
</head>
<body>
	<!--<div class="wrap">
		<h1>404 - File Not Found</h1>

		<p>
			<?php if (! empty($message) && $message !== '(null)') : ?>
				<?= esc($message) ?>
			<?php else : ?>
				Sorry! Cannot seem to find the page you were looking for.
			<?php endif ?>
		</p>
	</div>-->

	<!--lin de error-->
	<!--https://codepen.io/AsyrafHussin/pen/KxWRrK-->
	<!--end eror-->


	<div class="mars"></div>
		<img src="https://assets.codepen.io/1538474/404.svg" class="logo-404" />
		<img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" />
		<p class="title">Oh no!!</p><br><br>
		<p class="subtitle">
			<?php if (! empty($message) && $message !== '(null)') : ?>

				<?= esc($message) ?>
			<?php else : ?>
				O bien escribe incorrectamente la URL <br /> o solicita una página que ya no está aquí.
			<?php endif ?>
			
		</p>
		<div align="center">
			<a class="btn-back" href="javascript:history.back()" >Volver a la página anterior</a>
		</div>
		<img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" />
		<img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" />
</body>
</html>
