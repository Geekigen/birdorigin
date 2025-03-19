// ICSSR Expenditure Amount Calculation +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

$(".icssrFundRow").on("change", "input", function () {  //use event delegation
	var tableRow = $(this).closest(".row");  //from input find row
	var one = Number(tableRow.find(".fundRate").val());  //get first textbox
	var two = Number(tableRow.find(".fundQty").val());  //get second textbox
	var total = one * two;  //calculate total
	tableRow.find(".fundAmount").val(total);  //set value
});

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ICSSR Expenditure Amount Calculation //
// -------------------------------------------------------------------------------------------------------- //
// ICSSR Total Grant Calculation ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

function myCalculation() {
	var sum = 0;
	$(".fundAmount").each(function(){
		sum += +$(this).val();
	});
	$(".totalFund").val(sum);
};
//var inputFund = document.getElementById("pro_fund_apply");
var inputFund = document.getElementById("pro_total_budget");
var sum = 0;
$(".fundAmount").each(function(){
	sum += +$(this).val();
});
inputFund.value = sum;

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ICSSR Total Grant Calculation //
// -------------------------------------------------------------------------------------------------------- //
// Other Agencies Grant Calculation +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

function otherGrantCalculation() {
	var sum2 = 0;
	$(".otherGrantAmount").each(function(){
		sum2 += +$(this).val();
	});
	$(".totalOtherGrant").val(sum2);
};
var inputOtherGrant = document.getElementById("pro_grant_other");
var sum2 = 0;
$(".otherGrantAmount").each(function(){
	sum2 += +$(this).val();
});
inputOtherGrant.value = sum2;

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Other Agencies Grant Calculation //
// -------------------------------------------------------------------------------------------------------- //
// Total Participants Calculation +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

$(function(){
	$('#participant_intl, #participant_ind_loc, #participant_ind_ost').keyup(function(){
		var value1 = parseFloat($('#participant_intl').val()) || 0;
		var value2 = parseFloat($('#participant_ind_loc').val()) || 0;
		var value3 = parseFloat($('#participant_ind_ost').val()) || 0;
		$('#pro_participants').val(value1 + value2 + value3);
	});
	var inputParticipants = document.getElementById("pro_participants");
	var sum3 = 0;
	$(".participantsValue").each(function(){
		sum3 += +$(this).val();
	});
	inputParticipants.value = sum3;
});

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Total Participants Calculation //
// -------------------------------------------------------------------------------------------------------- //