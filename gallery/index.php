<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Gallery || JMI Robotics");
echo basic_fav();
echo m_css();
echo r_css("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css");
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main><div class="container">
    <div class="section">
      <div class="row">
      <div class="col s12 m12 l12 xl12 blocktext">
<?php
$directory ='../images/gallery';

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

while ($file = readdir($dir_handle)) 
{
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);
	
	$nomargin='';
	
	if(in_array($ext,$allowed_types))
	{
		
		$sq="'";
		
		echo '<div class="col s12 m4" style="width:300px;height:300px;margin:10px"><a data-fancybox="gallery" href="'.host().'/images/gallery/'.$file.'" class="hoverable"><div style="width:300px;height:300px;background-image:url('.$sq.host().'/images/gallery/'.$file.$sq.');background-position:center; background-size:cover;" onload="this.style.height='.$sq.'400px'.$sq.';">&nbsp;</div></a></div>';
		

	}
}

closedir($dir_handle);
?>
		</div>
</div>
</div>
</div><div id="hint" class="modal bottom-sheet"> <div class="modal-content"> <h4>Hints</h4> <p><b>Click</b> On Image <b>to Expand</b><br>
<b>navigate by</b> clicking on <b>left/right icon</b> or by <b>swiping left/right</b>
<br>
<b>close</b> the popup by clicking on <b>cross icon</b> or by <b>swiping up/down</b>
<br>
Click on <b>box icon</b> to go into <b>fullscreen mode</b>
<br>
Click on <b>play icon</b> to play a <b>slide show</b>
<br>
Click on the <b>grid icon</b> to make <b>thumbnail</b> (only available on large screens)
</p> </div> <div class="modal-footer"> <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a> </div> </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
echo r_js("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js");
echo l_js("gallery/saru.js");
?>