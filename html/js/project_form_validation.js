$('.tab2').addClass('disabled');
$('.tab3').addClass('disabled');
document.getElementById("continue1").onclick = (function() {
	var proType = document.forms["project-form"]["pro_type"].value;
	if (proType == "") {
		alert("Please select an item from the Project Type");
		document.getElementById("pro_type").focus();
		return false;
	}
	var subCat = document.forms["project-form"]["sub_cat"].value;
	if (subCat == "") {
		alert("Please select an item from the Subject Category");
		document.getElementById("sub_cat").focus();
		return false;
	}
	var proName = document.forms["project-form"]["pro_name"].value;
	if (proName == "") {
		alert("Please fill out a name for the Project");
		document.getElementById("pro_name").focus();
		return false;
	}
	var proStartDate = document.forms["project-form"]["pro_start_date"].value;
	if (proStartDate == "") {
		alert("Please selct Project start date");
		document.getElementById("pro_start_date").focus();
		return false;
	}
	var proEndDate = document.forms["project-form"]["pro_end_date"].value;
	if (proEndDate == "") {
		alert("Please selct Project end date");
		document.getElementById("pro_end_date").focus();
		return false;
	}
	var proCloseDate = document.forms["project-form"]["pro_close_date"].value;
	if (proCloseDate == "") {
		alert("Please selct Project close date");
		document.getElementById("pro_close_date").focus();
		return false;
	}
	var proFundApply = document.forms["project-form"]["pro_fund_apply"].value;
	if ((proFundApply == "") || (proFundApply == 0)) {
		alert("Please fill out expected grant from ICSSR for the Project");
		document.getElementById("pro_fund_apply").focus();
		return false;
	}
	var proTotalBudget = document.forms["project-form"]["pro_total_budget"].value;
	if (proTotalBudget == "") {
		alert("Please fill out an estimated budget for the Project");
		document.getElementById("pro_total_budget").focus();
		return false;
	}
	var proGrantOther = document.forms["project-form"]["pro_grant_other"].value;
	var totalGrantApply = Number(proFundApply) + Number(proGrantOther);
	if (proTotalBudget < totalGrantApply) {
		alert("Estimated budget should more than the total grant apply");
		document.getElementById("pro_total_budget").focus();
		return false;
	}
	var proParticipants = document.forms["project-form"]["pro_participants"].value;
	if ((proParticipants == "") || (proParticipants == 0)) {
		alert("Please fill out total participants for the Project");
		document.getElementById("pro_participants").focus();
		return false;
	}
	var proAbs = document.forms["project-form"]["pro_abs"].value;
	if (proAbs == "") {
		alert("Please fill out the abstract of the Project");
		document.getElementById("pro_abs").focus();
		return false;
	}
	var proTheme = document.forms["project-form"]["pro_theme"].value;
	if (proTheme == "") {
		alert("Please fill out the theme of the Project");
		document.getElementById("pro_theme").focus();
		return false;
	}
	else {
		$('.tab2').removeClass('disabled');
		$('.nav-tabs > .tab-1').next('li').find('a').trigger('click');
	}
});
document.getElementById("continue2").onclick = (function() {
	var instFrd = document.forms["project-form"]["inst_frd"].value;
	if (instFrd == "") {
		alert("Please fill out Institution Forward");
		document.getElementById("inst_frd").focus();
		return false;
	}
	var instFrdAddress = document.forms["project-form"]["inst_frd_address"].value;
	if (instFrdAddress == "") {
		alert("Please fill out Institution Forward address");
		document.getElementById("inst_frd_address").focus();
		return false;
	}
	var instFrdMobile = document.forms["project-form"]["inst_frd_mobile"].value;
	if (instFrdMobile == "") {
		alert("Please fill out Institution Forward mobile number");
		document.getElementById("inst_frd_mobile").focus();
		return false;
	}
	var instFrdEmail = document.forms["project-form"]["inst_frd_email"].value;
	if (instFrdEmail == "") {
		alert("Please fill out Institution Forward email");
		document.getElementById("inst_frd_email").focus();
		return false;
	}
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if (!instFrdEmail.match(mailformat)) {
		alert("Please fill out a valid email address");
		document.getElementById("inst_frd_email").focus();
		return false;
	}
	var instFrdType = document.forms["project-form"]["inst_frd_type"].value;
	if (instFrdType == "") {
		alert("Please select an item from the Institution Forward type");
		document.getElementById("inst_frd_type").focus();
		return false;
	}
	else {
		$('.tab3').removeClass('disabled');
		$('.nav-tabs > .tab-2').next('li').find('a').trigger('click');
	}
});
document.getElementById("back1").onclick = (function() {
	$('.nav-tabs > .tab-2').prev('li').find('a').trigger('click');
});
document.getElementById("back2").onclick = (function() {
	$('.nav-tabs > .tab-3').prev('li').find('a').trigger('click');
});