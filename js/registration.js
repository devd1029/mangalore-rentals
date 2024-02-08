$(document).ready(function(){
	var today = new Date();
	var date11 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	$(".dates").val(date11);
	
	var time1 = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	$(".times").val(time1);
	
	
	
	
$("#submit").click(function(){
	
var name = $("#name").val();
var email = $("#email").val();
var number = $("#number").val();
var pickup = $("#pickup").val();
var drop = $("#drop").val();

 var date = $('#date1').val();

var time = $("#time1").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&number='+ number + '&pickup='+ pickup +'&drop='+ drop +'&date='+ date +'&time='+ time;
if(name==''||number==''||pickup==''||drop=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "messag.php",
data: dataString,
cache: false,
success: function(result){

$('#sucessmodal').modal('show');
}
});
}
return false;
});



// service Code To Submit Form.

$("#servicesubmit").click(function(){
	
var name = $("#servicename").val();
var email = $("#serviceemail").val();
var number = $("#servicenumber").val();
var pickup = $("#servicepickup").val();
var drop = $("#servicedrop").val();
var service = $("#service").val();

 var date = $('#servicedate1').val();

var time = $("#servicetime1").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&number='+ number + '&pickup='+ pickup +'&drop='+ drop +'&date='+ date +'&service='+service+'&time='+time ;
if(name==''||number==''||pickup==''||drop==''||service=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "messag.php",
data: dataString,
cache: false,
success: function(result){
alert(result);

$('#myModal').modal('hide');
$('#sucessmodal').modal('show');
}
});
}
return false;
});






// rent Code To Submit Form.

$("#rentsubmit").click(function(){
	
var name = $("#rentname").val();
var email = $("#rentemail").val();
var number = $("#rentnumber").val();
var pickup = $("#rentpickup").val();
var drop = $("#rentdrop").val();
var distance = $("#packagePicker").val();
var vehicle = $("#rentvehicle").val();

 var date = $('#rentdate1').val();

var time = $("#renttime1").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&number='+ number + '&pickup='+ pickup +'&drop='+ drop +'&date='+ date +'&time='+time+'&vehicle='+ vehicle +'&distance='+ distance;
if(name==''||number==''||pickup==''||drop==''||service=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "messag.php",
data: dataString,
cache: false,
success: function(result){


$('#rentcar').modal('hide');
$('#sucessmodal').modal('show');
}
});
}
return false;
});








});
