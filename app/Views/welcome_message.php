<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/brisk.css">
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
            <li class="menu-item hidden"><a href="/brisk-codeignitor/public/blog" target="_blank">About</a>
            </li>
            <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Services</a></li>
            <li class="menu-item hidden"><a
                    href="https://codeigniter.com/contribute" target="_blank">Contact</a>
            </li>
        </ul>
     </div>
  </header>

 <!-- HEROES SECTION -->

   <div class="heroes-container"> 
     <div class="heroes-text">
        <h1><span class="text-blue">Trusted</span> IT Consultants<br>
            Delivering <span class="text-blue">Customized</span><br>
            Digital Transformation<br>
            Strategies
        </h1>
     </div>

     <div class="elevate" style="background: none;">
        <div class="elevate-img">
            <img src="<?php
            echo base_url();
            ?>/images/Vector.svg" alt="vector.svg">
        </div>
        <div class="elevate-text">
            <h3>We elevate business</h3>
            <p>
            We overcome challenges through expertise that<br>
                  drives innovation and competitive advantages.
            </p>  
        </div>        
     </div>

    </div>
    <div class="img-iridescent">
               <img src="<?php
               echo base_url();
               ?>/images/Iridescent cubes@2-1920x999.jpg" alt="hero image of cubes">
    </div>
</section>

<!-- CONTENT -->
<section class="innovative">
    <div class="innovative-text">
        <h2>We are an <span class="text-blue">innovative</span> team of <span class="text-blue">experts</span> who deliver<span class="text-blue"> quality</span><br>
           <span class="text-blue"> services</span> that bridge gaps on<span class="text-blue"> data</span>,<span class="text-blue"> automation</span> and<br>
           <span class="text-blue"> improved</span> workflow for<span class="text-blue"> accelerated</span> bussinesses &<br>
            processes.
        </h2>
    </div>
    <div class="innovative-img"> 
        <div class="cubes"></div>
        <div class="cluster-innovative">
            <div class="operation">
                <img src="<?php
               echo base_url();
               ?>/images/code.png" alt="code photo" class="code-photo">
                <div class="years-op">
                    <p class="years">Years in Operation</p>
                    <div class="delivering">
                        <p class="numbers">12+</p>
                        <hr style="width: 220px;">
                        <p class="cluster-txt">years of driving innovation</p>
                    </div>
                </div>
            </div>
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide">
                        <img src="<?php
                            echo base_url();
                            ?>/images/brisk hr.png" alt="brisk hr logo">
                        <div class="brisk-hr-txt">
                            <h3>Brisk HR</h3>
                            <p>Brisk HR is a comprehensive human resource<br>
                                management system that enables the tracking,<br>
                                management , and analysis of all the employees from<br>
                                recruitment to separation.</p>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        
    </div>
</section>

<section class="proficient">
    <div class="txt-proficient">
        <h2>Proficient Performance<br>
        Strategic Foresight<br>
        Bespoke Builds</h2>
    </div>

</section>

<section class="expertise-block">
    <h2>Our expertise</h2>
    <div class="expertise-txt" style="width: 45%;">
        <div class="expertise-txt-border"><p style="color: black;">Business automation solution</p></div>
        <div class="expertise-txt-border"><p>Business intelligence & reports</p></div>
        <div class="expertise-txt-border"><p>Managed services & Cloud based solutions</p></div>
        <div class="expertise-txt-border"><p>Digital services & Development</p></div>
        <div class="expertise-txt-border"><p>App Development</p></div>
    </div>
</section>
</body>
</html>
