<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/signin.css')); ?>">
</head>
<body>

<div class="logo">
			<img src="image.png">
		</div>
		<div class="main">
			<ul>
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
				<li><a href="<?php echo e(route('services')); ?>">Services</a></li>
				<li><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>

	<form class="box" action="signin.html" method="post">
		<h1>LOG IN</h1>
		<input type="text" name="" placeholder="Username">
		<input type="Password" name="" placeholder="Password">
		<input type="submit" name="" value="Login">
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\Website\laravel\resources\views/signin.blade.php ENDPATH**/ ?>