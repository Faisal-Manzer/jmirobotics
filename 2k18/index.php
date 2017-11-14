<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Robocon 2k18 || JMI Robotics");
echo basic_fav();
echo m_css();
echo c_head();
echo basic_nav();
?>
<main>
<div class="container">
    <div class="section">
      <div class="row">
      
      
  </div>
	
    <span class="green-text" style="font-weight:lighter;font-size:40px;">
    <h4>Robocon 2018</h4></span> 
 
   <div class="video-container">
        <iframe width="680" height="350" src="https://www.youtube.com/embed/hvFXaQLTEHw" frameborder="0" allowfullscreen></iframe>
      </div>
     <hr  style="height: 3px;  color: rgb(46,126,75);background-color:rgb(46,126,75);">
  </div>
  </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
?>