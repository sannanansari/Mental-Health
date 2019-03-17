
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mental Health</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
    <div class="large-4 medium-4 small-12 columns">
    <div id="logo"><a href="index.html">Cure-Insanity</a></div>
    </div>
    <div class="large-8 medium-8 small-12 columns">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"> </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>


  <section class="top-bar-section">
    <ul class="right">
      <li ><a href="index.html">Home</a></li>
      <li class="active"><a href="find.html">Find Med</a></li>    
      <li><a href="services.html">Remedies</a></li>
      <li><a href="faq.html">FAQs</a></li>
      <li><a href="about-us.html">About Us</a></li>     
      </ul>
      </li>
    </ul>
  </section>
</nav>
    </div>
    </div>
    
    <div class='row' style="border:5px solid rgb(0, 182, 243);padding:30px; margin:170px;">
      <h4 style="text-align:center;">Mental Disorder - Anxiety</h4>
        <form action="third.php" method="GET" style="display: block;">
        <div class='row' style="padding: 5px;">
        <?php
          $count = 0;
        ?>
          <div class='column'>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Chest">Chest Pain or Discomfort <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Breath">Shortness of Breath <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Heart">Heart Palpitations <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Legs">Weak Legs <br>
          </div>
          <div class='column'>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Choking">Choking <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="ears">Ringing in the ears <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Jaw">Jaw Pain <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Nausea">Nausea <br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Dizziness">Dizziness <br>
          </div>
          <div class='column'>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Back">Back Pain<br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Sweating">Sweating<br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Brain">Brain Fog<br>
            <input type="checkbox" name="color[<?php echo $count++; ?>]" id="color" value="Numbness">Numbness<br>
          </div>
          <div class="row">
            <input type="submit" name = 'submit' value="submit" style="margin:auto 45%;background-color: #008CBA;color: white; padding: 5px 10px; text-align: center; text-decoration: none;">
          </div>
          </form>
        
        
    </div>
</div>
 
 
 <div class="footer-sec">
 <div class="row">
 <div class="large-5 medium-5 small-12 columns">
 <div class="foot-1">
 <h4>Quick Links</h4>
 <ul>
 <li><a href="index.html" title="Home">Home</a></li>
 <li><a href="about-us.html" title="About Us">About Us</a></li>
 <li><a href="faq.html" title="FAQs">FAQs</a></li>
 <li><a href="services.html" title="Services">Services</a></li>
 <li><a href="contact.html" title="Contact">Contact</a></li>
 </ul>
 </div>
 </div>

 </div>
 
 </div>
 </div>
 
 <div class="copy">
 <div class="row">
 <div class="large-12 columns">
 Copyright &copy; 2019 Cure-Insanity. All Rights Reserved. <a href="index.html">Cure-Insanity</a>
 </div>
 </div>
 </div>
 
 
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
  </body>
</html>
