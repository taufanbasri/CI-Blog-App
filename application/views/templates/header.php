<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?= site_url(); ?>assets/css/style.css">

		<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
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
					<li><a href="<?= base_url(); ?>categories">Category</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
					<li><a href="<?= base_url(); ?>categories/create">Create Category</a></li>
					<li><a href="<?= base_url(); ?>users/login">Login</a></li>
					<li><a href="<?= base_url(); ?>users/register">Register</a></li>
				</ul>
			</div>
		  </div>
		</nav>

		<div class="container">
			<!-- Flash Messages -->
			<?php if($this->session->flashdata('user_registered')): ?>
				<p class="alert alert-success"><?= $this->session->flashdata('user_registered');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_created')): ?>
				<p class="alert alert-success"><?= $this->session->flashdata('post_created');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_updated')): ?>
				<p class="alert alert-success"><?= $this->session->flashdata('post_updated');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('category_created')): ?>
				<p class="alert alert-success"><?= $this->session->flashdata('category_created');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_deleted')): ?>
				<p class="alert alert-danger"><?= $this->session->flashdata('post_deleted');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedin')): ?>
				<p class="alert alert-success"><?= $this->session->flashdata('user_loggedin');  ?></p>
			<?php endif; ?>
			<?php if($this->session->flashdata('login_failed')): ?>
				<p class="alert alert-danger"><?= $this->session->flashdata('login_failed');  ?></p>
			<?php endif; ?>
