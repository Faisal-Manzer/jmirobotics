<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Our Team || JMI Robotics");
echo basic_fav();
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main>
 <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4 l4 xl4">
        
    <span class="green-text" style="font-weight:lighter;font-size:40px;"><strong>Our Team</strong></span>
    <p>
    A group of students from various departments of Jamia Millia Islamia, inspired by the world of robotics working on immediate goal to participate in Asia-pacific Robot comptetion(ABU Robocon2018), a university level international robotics comptetion.  The team consists of 27 members from various department of Jamia  who are working tirelessly to build the robots and represent Jamia on the national and international stage.
Stay in touch to get familiar with other members of our dynamic team.
You are passionate about robotics too join us !!
      </p>
        </div>


<div class="col s12 m8 l8 xl8">
<ul class="tabs"> <li class="tab col s3"><a href="#mteam" class="active black-text"><strong>Robocon</a></li> <li class="tab col s3"><a href="#wteam" class="black-text">Web Dev</strong></a></li></ul>
<span id="mteam">
        <span class="green-text" style="font-weight:lighter;font-size:40px;"><strong>Robocon</strong></span><br>
  <span class="green-text" style="font-weight:lighter;font-size:30px;"><strong>2017-18</strong></span>
<ul class="collection">
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/vagarth.jpg" alt="" class="circle"> <span class="title"><strong>Vagarth Aggarwal</strong></span> <p>B.Tech 3rd Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/ankit.jpg" alt="" class="circle"> <span class="title"><strong>Ankit Singhal</strong></span> <p>B.Tech 3rd Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title"><strong>Faisal Manzer</strong></span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/rahul.jpg" alt="" class="circle"> <span class="title"><strong>Rahul Kumar Roy</strong></span> <p>B.Tech Electrical 3rd Year <br>Oreanroy@gmail.com<br><a href="https://www.linkedin.com/in/rahul-kumar-roy-7b102512a/">Linkedin</a><br> Jamia Millia Islamia</p>
</li>

</ul>
</span>

<span id="wteam">
        <span class="green-text" style="font-weight:lighter;font-size:40px;"><strong>Web Dev</strong></span><br>
  <span class="green-text" style="font-weight:lighter;font-size:30px;"><strong>2017-18</strong></span>
<ul class="collection">
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/smi.png" alt="" class="circle"> <span class="title"><strong>Faisal Manzer</strong></span> <p>B.Tech 1st Year <br>Jamia Millia Islamia</p>
</li>
<li class="collection-item avatar"> <img src="<?php echo host(); ?>/images/team/rahul.jpg" alt="" class="circle"> <span class="title"><strong>Rahul Kumar Roy</strong></span> <p>B.Tech Electrical 3rd Year <br>Oreanroy@gmail.com<br><a href="https://www.linkedin.com/in/rahul-kumar-roy-7b102512a/">Linkedin</a><br> Jamia Millia Islamia</p>
</li>

</ul>
</span>
</div>
     </div>
 </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
?>