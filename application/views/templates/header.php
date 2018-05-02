<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container">
		    <div class="navbar-header">
				<a class="navbar-brand" href="/">ciBlog</a>
		    </div>
			<div class="navbar">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/posts">Blog</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
				</ul>
			</div>
		  </div>
		</nav>

		<div class="container">
