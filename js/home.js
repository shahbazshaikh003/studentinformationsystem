function val() {
	var x=document.forms["std"]["srn"].value;
	var y=document.forms["std"]["password"].value;
	if (x=="" || y=="") {

		alert("Please Enter Username and Password");
		return false;
	}
	 
}
// .......................Login Show...............................
$(document).ready(function(){

$("#headlg").click(function()
{

	$("#login").show();

	});

});
