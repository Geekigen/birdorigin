$(document).ready(function(){
	//group add limit
	var maxGroup = 10;
	
	// PRE GRANT PROJECTS DUPLICATE FIELDS ADD & REMOVE +++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	//Adding fields group to Pre Grant Projects -----------------------------------
	$(".addMore").click(function(){
		if($('body').find('.fieldGroup').length < maxGroup){
			var fieldHTML = '<div class="form-group row mb-0 fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
			$('body').find('.fieldGroup:last').after(fieldHTML);
		}else{
			alert('Maximum '+maxGroup+' projects are allowed.');
		}
	});
	
	//Remove fields group from Pre Grant Projects ---------------------------------
	$("body").on("click",".remove",function(){ 
		$(this).parents(".fieldGroup").remove();
	});
	
	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++ PRE GRANT PROJECTS DUPLICATE FIELDS ADD & REMOVE //
	// -------------------------------------------------------------------------------------------------------- //
	// GRANT FROM ICSSR DUPLICATE FIELDS ADD & REMOVE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	//Adding fields group to ICSSR Grant Modal ------------------------------------
	$(".addModal").click(function(){
		if($('body').find('.modalGroup').length < maxGroup){
			var fieldHTML = '<div class="form-group mb-3 modalGroup icssrFundRow">'+$(".modalGroupCopy").html()+'</div>';
			$('body').find('.modalGroup:last').after(fieldHTML);
			
			// ICSSR Expenditure Amount Calculation -------------------------------
			
			$(".icssrFundRow").on("change", "input", function () {  //use event delegation
				var tableRow = $(this).closest(".row");  //from input find row
				var one = Number(tableRow.find(".fundRate").val());  //get first textbox
				var two = Number(tableRow.find(".fundQty").val());  //get second textbox
				var total = one * two;  //calculate total
				tableRow.find(".fundAmount").val(total);  //set value
			});
			
			// --------------------------------------------------------------------
			
		}else{
			alert('Maximum '+maxGroup+' subjects are allowed.');
		}
	});
	
	//Remove fields group from ICSSR Grant Modal ----------------------------------
	$("body").on("click",".removeModal",function(){ 
		$(this).parents(".modalGroup").remove();
	});
	
	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ GRANT FROM ICSSR DUPLICATE FIELDS ADD & REMOVE //
	// -------------------------------------------------------------------------------------------------------- //
	// GRANT FROM OTHER AGENCIES DUPLICATE FIELDS ADD & REMOVE ++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	//Adding fields group to Grant from Other Agencies Modal ----------------------
	$(".addModal2").click(function(){
		if($('body').find('.modalGroup2').length < maxGroup){
			var fieldHTML = '<div class="form-group row mb-0 modalGroup2">'+$(".modalGroup2Copy").html()+'</div>';
			$('body').find('.modalGroup2:last').after(fieldHTML);
		}else{
			alert('Maximum '+maxGroup+' subjects are allowed.');
		}
	});
	
	//Remove fields group from Grant from Other Agencies Modal --------------------
	$("body").on("click",".removeModal2",function(){ 
		$(this).parents(".modalGroup2").remove();
	});
	
	// ++++++++++++++++++++++++++++++++++++++++++++++++ GRANT FROM OTHER AGENCIES DUPLICATE FIELDS ADD & REMOVE //
	// -------------------------------------------------------------------------------------------------------- //
});