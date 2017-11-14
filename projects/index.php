<?php
   require_once "../plugin/faisal_style.php";
   require_once "../plugin/basic.php";
   echo head("Projects || Robocon JMI");
   echo basic_fav();
   echo m_css();
   echo c_head();
   echo basic_nav($dcname,$theme);
   ?>
<main>
   <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
         <div class="container">
            <br><br>
            <h1 class="header white-text">Current Project:</h1>
            <h1 class="header white-text">ThrowBot</h1>
            <div class="row">
               <h4 class="header col s12 light">Robocon 2k18</h4>
            </div>
            <br><br>
         </div>
      </div>
      <div class="parallax"><img src="<?php echo host(); ?>/images/back/drone_1.jpeg" alt="Unsplashed background img 1"></div>
   </div>
   <div class="container">
      <div class="section">
         <div class="row">
            <div class="col">
               <span class="green-text" style="font-weight:lighter;font-size:40px;">ThrowBot</span><br>
               <span class="green-text" style="font-weight:lighter;font-size:30px;">Robocon 2k18</span><br>
               We are working on it
            </div>
         </div>
      </div>
      <div class="section">
         <div class="row">
            <div class="col s12 m4" style="margin-right:60px;">
               <span class="green-text" style="font-weight:lighter;font-size:40px;">Past Projects</span><br>
               <span class="green-text" style="font-weight:lighter;font-size:30px;">2016-17</span>
               <div class="card" style="height:300px;width: 300px; margin-bottom:30px; ">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator" style="height:240px;width:300px;" src="<?php echo host();?>/images/projects/auto_drone.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Autonomous Drone<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>Inspired by the <a href="http://www.aerialroboticscompetition.org/phpBB/">International Aerial Robotics Competition</a>, we aim to refit a quadcopter for autonomous flight.</p>
                  </div>
               </div>
               <div class="card" style="height:300px;width: 300px; margin-top:30px; ">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator" style="height:240px;width:300px;" src="<?php echo host();?>/images/projects/del_bot.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Delivery Bot<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>We aim to build a wheeled robot capable of autonomous navigation around the Columbia Campus.</p>
                  </div>
               </div>
            </div>
            
            <div class="col s12 m4" style="margin-right:60px;">
               <span class="green-text" style="font-weight:lighter;font-size:40px;">Past Projects</span><br>
               <span class="green-text" style="font-weight:lighter;font-size:30px;">2014-16</span>
               <div class="card" style="height:300px;width: 300px; margin-bottom:30px;">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator responsive" style="height:240px;width:300px;" src="<?php echo host();?>/images/projects/basic_quadcopter.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Basic Quadcopter<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Basic Quadcopter<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>Inspired by the <a href="http://www.aerialroboticscompetition.org/phpBB/">International Aerial Robotics Competition</a>, several members designed and assembled a flyable remote-controlled quadcopter from off-the-shelf parts.</p>
                  </div>
               </div>
               <div class="card" style="height:300px;width: 300px; margin-top:30px; ">
                  <div class="card-image waves-effect waves-block waves-light"> <img class="activator"
                     style="height:240px;width:300px;" src="<?php echo host();?>/images/projects/mech_warfare.jpg"> </div>
                  <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Mech Warfare<i class="material-icons right fa fa-chevron-up"></i></span></div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Mech Warfare<i class="material-icons right fa fa-chevron-down"></i></span> 
                     <p>In 2014-2015, several members built a remotely piloted walker equipped with a low power BB gun, FPV camera, and scoring system.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php
   echo basic_foot($dcname,$theme);
   echo m_js();
   ?>