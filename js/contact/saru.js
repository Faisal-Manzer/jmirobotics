loa=0;
load_com();
$("button").click(function(){
name=$("#name").val();
email=$("#email").val();
acomm=$("#acomm").val();
if(name=="")
{
Materialize.toast("Hey! Whats your name",2000);
$("#name").focus();
}
else if(email=="")
{
Materialize.toast("Hey! Whats your email",2000);
$("#email").focus();
}
else if(acomm=="")
{
Materialize.toast("Please Add A comment",2000);
$("#acomm").focus();
}
else if(!valid_N())
{
Materialize.toast("Plz Provide A valid Name",2000);
$("#name").focus();
}
else if(!valid_E())
{
Materialize.toast("Plz Provide A valid Email",2000);
$("#acomm").focus();
}
else
{
    $.post("save.php",
    {
        name: name,
email: email,
        acomm: acomm
    },
    function(data, status){
if(status=="success")
{
Materialize.toast("Thanks for commenting",2000);
/*
$("#com_b").prepend(acomm+"<br><span class='grey-text'>"+name+"</span><br><br>");
*/
$("#com_b").prepend(data);
}
else{
Materialize.toast("Opps error occur",2000);
}
    });
}
});

$("#nextb").click(function(){
loa++;
load_com();
});
$("#prevb").click(function(){
loa--;
load_com();
});

function load_com()
{
$("#com_body").load("get.php?q="+loa);
}
function valid_E()
{
    var x=$("#email").val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }
    else
    {
    return true;
    }
}
function valid_N()
{
return /^[A-Za-z\s]+$/.test($("#name").val());
}