<!DOCTYPE html>
<html>
<head>
	<title>GALLERY</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/gallery.css')); ?>">
</head>
<body>
	<header>
		<div class="logo">
			<img src="image.png">
		</div>
		<div class="main">
			<ul>
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li class="active"><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
				<li><a href="<?php echo e(route('services')); ?>">Services</a></li>
				<li><a href="<?php echo e(route('about')); ?>">About</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</div>
		<h1>GALLERY</h1>

	</header>
	<main>
		<div class="box"><img src="2.jpg"></div>
		<div class="box"><img src="3.jpg"></div>
		<div class="box"><img src="4.jpg"></div>
		<div class="box"><img src="5.jpg"></div>
		<div class="box"><img src="6.jpg"></div>
		<div class="box"><img src="7.jpg"></div>
		<div class="box"><img src="8.jpg"></div>
		<div class="box"><img src="9.jpg"></div>
	</main>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\Website\laravel\resources\views/gallery.blade.php ENDPATH**/ ?>