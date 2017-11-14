<?php
function basic_nav()
{
echo '
<header>
<nav class="white-text z-depth-0 green" role="navigation">
    <div class="nav-wrapper container fixed">
      <a id="logo-container" href="#" class="brand-logo white-text"><b>Jamia</b><span style="font-weight:lighter;">RoboClub</span></a>

      <ul id="slide-out" class="side-nav fixed green z-depth-0"> <li><div class="user-view" style="height:200px""> <div class="background"> <img src="'.host().'/images/back/jmi.jpg"> </div></li> <li><a href="'.host().'" class="white-text"><i class="material-icons fa fa-home white-text"></i>Home</a></li><li><a href="'.host().'/projects" class="white-text"><i class="material-icons fa fa-file-text white-text"></i>Projects</a></li>
      <li><a href="'.host().'/2k18" class="white-text"><i class="material-icons fa fa-unlink white-text"></i>Robocon 2k18</a></li>
      <li><a href="'.host().'/gallery" class="white-text"><i class="material-icons fa fa-video-camera white-text"></i>Gallery</a></li>
      <li><a href="'.host().'/ourteam" class="white-text"><i class="material-icons fa fa-group white-text"></i>Our Team</a></li>
      <li><a href="'.host().'/contact" class="white-text"><i class="material-icons fa fa-address-book white-text"></i>Contact</a></li>  </ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons white-text fa fa-bars"></i></a> 
    </div>
  </nav>
</header>
  ';
}
function basic_foot()
{
echo '
<footer class="page-footer green">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text"><b>Jamia</b><span style="font-weight:lighter;">RoboClub</h5>
          <p class="grey-text text-lighten-4">A Jamia Millia Islamia Product</p>


        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Externel Links</h5>
          <ul>
            <li><a class="white-text" href="http://jmi.ac.in">Jamia Millia Islamia</a></li>
            <li><a class="white-text" href="#!">Robocon</a></li>
          </ul>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Follow us:</h5>
          <ul>
            <li><a class="white-text" target="_blank" href="http://twitter.com/jmirobotics"><i class="fa fa-twitter" aria-hidden="true"></i> @jmirobotics</a></li>
            <li><a class="white-text" target="_blank" href="http://facebook.com/jmirobotics"><i class="fa fa-facebook-official" aria-hidden="true"></i> @jmirobotics</a></li>
            <li><a class="white-text" target="_blank" href="http://instagram.com/jmirobotics"><i class="fa fa-instagram" aria-hidden="true"></i> @jmirobotics</a></li>
            <li><a class="white-text" target="_blank" href="https://www.youtube.com/channel/UCPMITE3IA9ZNvYxsn88QhDw"><i class="fa fa-youtube-play" aria-hidden="true"></i> @jmirobotics</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
      &copy; Jamia Millia Islamia 2017-18
      </div>
    </div>
  </footer>

';
}
function basic_fav()
{
echo '
<link rel="apple-touch-icon-precomposed" href="'.host().'/images/favicon/fav-152.png">

<meta name="msapplication-TileColor" content="#FFFFFF">

<meta name="msapplication-TileImage" content="'.host().'/images/favicon/fav-144.png">

<link rel="icon" href="'.host().'/images/favicon/fav-32.png" sizes="32x32">
<link rel="shortcut icon" href="'.host().'"/images/favicon/fav-144.png">
<meta name="theme-color" content="#2E7E4B">';
}
?>