<?php
require_once "../plugin/faisal_style.php";
require_once "../plugin/basic.php";
echo head("Contact || JMI Robotics");
echo basic_fav();
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main>
<div class="container">
    <div class="section">
      <div class="row">
      
      
        <div class="col s12 m4">
        <span class="green-text" style="font-weight:lighter;font-size:40px;">Contact Us</span><br>
        <ul class="collapsible popout" data-collapsible="accordion"> <li> <div class="collapsible-header"><i class="material-icons fa fa-envelope"></i>Email</div> <div class="collapsible-body"><span><a href="mailto:roboconjmi@gmail.com" class=" black-text">roboconjmi@gmail.com</a></span></div> </li> <li> <div class="collapsible-header"><i class="material-icons fa fa-whatsapp"></i>WhatsApp</div> <div class="collapsible-body"><span><a href="https://chat.whatsapp.com/8wEuvZY4aUy6NfuZQPrvgY" class="black-text">Click Here To Join Our Guest Group</a></span></div> </li> 
        
         <li> <div class="collapsible-header"><i class="material-icons fa fa-phone"></i>Call Us</div> <div class="collapsible-body">
Ankit: <span><a href="tel:+919873356285" class="black-text">+919873356285</a></span><br>
Rahul: <span><a href="tel:+917042484922" class="black-text">+917042484922</a></span><br>
Vagarth: <span><a href="tel:+919654398054" class="black-text">+919654398054</a></span><br>
Faisal: <span><a href="tel:+919097718815" class="black-text">+919097718815</a></span>
</li> 
        
         <li> <div class="collapsible-header"><i class="material-icons fa fa-map-pin"></i>Address</div> <div class="collapsible-body">Faculty of Engineering and Technology, Jamia Millia Islamia, Jamia Nagar, Okhla, New Delhi, Delhi 110025
         <div id="saru" style="height:200px;width:100%"></div></div> </li> 
        
        
         </ul>
         
         
<div class="card white"> <div class="card-content"> <span class="card-title">Your Valuable Comments...</span> <p>

<div style="width:100%;">
<div class="input-field col" style="width:100%"> <textarea id="acomm" class="materialize-textarea" placeholder=" "></textarea> <label for="acomm"><i class="material-icons fa fa-comment"></i> Add A Comment...</label> </div>
<div class="input-field col" style="width:100%;"> <input id="name" type="text" class="validate" placeholder=" "> <label for="name"><i class="material-icons fa fa-user"></i> Name</label> </div>

<div class="input-field col" style="width:100%;"> <input id="email" type="email" class="validate" placeholder=" " data-error="Please Provide A valid email"> <label for="acomm"><i class="material-icons fa fa-envelope"></i> Email</label> </div>
<button class="btn waves-effect green waves-light" id="smb">Submit <i class="material-icons fa fa-send"></i> </button>
        
        
        
        <div id="com_body"></div></div>


</p> </div> <div class="card-action"> <a id="prevb" class="green-text">Previous</a> <a id="nextb" class="green-text">Next</a> </div> </div> </div>
        </div>
       </div>
     </div>
</div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
echo l_js("contact/maps.js");
echo r_js("https://maps.googleapis.com/maps/api/js?key=AIzaSyAa9zBvf8Afp-ObmQ9Yz1WylnDqrGXhbRo&callback=initMap","async defer");
echo l_js("contact/saru.js");
?>