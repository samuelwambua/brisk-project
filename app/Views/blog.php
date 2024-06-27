<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our blog</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/blog.css">
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
  
  <!-- hereos section -->

<section class="heroes-section">
    <div class="button" style="padding-right: 70px;">
        <a href="/brisk-codeignitor/public/create" class="btn btn-primary" > 
            <button type="submit" style="float: right; font-size: medium">create</button></a>
    </div>
    <div class="heroes-block">
        <div class="border-radius-7 blog-cards ">
            <h3 class="heroes-h3">brisk</h3>
            <p class="heroes-paragraph" style="margin-bottom: 20px;">Hot New Releases in <br>Audio Headphones</p>
            <p class="blog-writer">Faith J . 2 months ago</p>
        </div>
        <div class="border-radius-7 blog-cards"></div>
        <div class="border-radius-7 blog-cards "></div>
        <div class="border-radius-7 blog-cards "></div>
    </div>
    <div class="heroes-text-block">
        <div class="heroes-text "></div>
        <div class="heroes-text"></div>
        <div class="heroes-text"></div>
        <div class="heroes-text"></div>
    </div>
</section>
<section>
    <div class="card-body">
        <table class="table-border">
            <thead>
                <tr>
                    <th>post_id </th>
                    <th>title</th>
                    <th>post_date</th>
                    <th>owner_id</th>
                    <th>content</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
    </div>
</section>
    
</body>
</html>

<!-- content section -->
