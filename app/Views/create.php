<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create blog</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/create.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Syne">

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<section class="top-menu">
    <header>

     <div class="menu">
        <ul>
            <li class="logo">
               <img src="<?php
               echo base_url();
               ?>/images/brisklogo.jpg" alt="brisk logo" class="logo">
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="#">Home</a></li>
            <li class="menu-item hidden"><a href="https://codeigniter.com/user_guide/" target="_blank">About</a>
            </li>
            <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Services</a></li>
            <li class="menu-item hidden"><a
                    href="https://codeigniter.com/contribute" target="_blank">Contact</a>
            </li>
        </ul>
     </div> 
  </header>

  <!-- Form section -->

  <div class="blog-form">
    <h3>CREATE BLOG</h3><br>
    <form action="<?= base_url('articles') ?>" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Content:</label><br><br>
        <div class="editor">
        <textarea name="content" id="content" rows="10" col="30"></textarea>
        </div>
        <script src="ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.replace("content");
        </script>
        <div>
            <button type="submit" value="submit">submit</button>
        </div>
    </form>
  </div>
  