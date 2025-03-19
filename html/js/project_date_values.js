document.getElementById("pro_end_date").readOnly = true;
document.getElementById("pro_close_date").readOnly = true;

document.getElementById("pro_start_date").onchange = function () {
	document.getElementById("pro_end_date").readOnly = false;
	var input = document.getElementById("pro_end_date");
	input.setAttribute("min", this.value);
	input.setAttribute("value", this.value);
	
	document.getElementById("pro_close_date").readOnly = false;
	var input = document.getElementById("pro_close_date");
	input.setAttribute("min", this.value);
	input.setAttribute("value", this.value);
}
document.getElementById("pro_end_date").onchange = function () {
	document.getElementById("pro_close_date").readOnly = false;
	var input = document.getElementById("pro_close_date");
	input.setAttribute("min", this.value);
	input.setAttribute("value", this.value);
}
document.getElementById("pro_type").onchange = function () {
	var hideInput = document.getElementById("proIdHide");
	var setInput = document.getElementById("pro_id");
	var strFirstThree = this.value.substring(0,3);
	setInput.setAttribute("value", hideInput.value + strFirstThree);
}