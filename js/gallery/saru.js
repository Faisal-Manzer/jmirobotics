setTimeout(tst,3000);
function tst()
{
var $toastContent = $('<span>Click Image to Expand</span>').add($('<a class="btn-flat toast-action modal-trigger" href="#hint" onclick="diss();">MoreHint</a>')); Materialize.toast($toastContent,2000);
 }
function diss()
{
Materialize.Toast.removeAll(); 
}