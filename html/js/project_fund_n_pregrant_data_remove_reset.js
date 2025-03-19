// ICSSR Total Grant Data Remove & Reset +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
		
for (var x = 0; x < 11; x++) {
	
	// Data Remove ------------------------------------------------------- //
	
	function delGrantFunction(x) {
		var a = document.getElementById("delGrantBtn[" + x + "]").value;
		document.getElementById("exp_head_new[" + x + "]").value = document.getElementById("exp_head[" + x + "]").value;
		document.getElementById("exp_amount_new[" + x + "]").value = document.getElementById("exp_amount[" + x + "]").value;
		document.getElementById("del_grant[" + x + "]").value = a;
		document.getElementById("exp_head[" + x + "]").value = '';
		document.getElementById("exp_amount[" + x + "]").value = 0;
		
		document.getElementById("exp_head[" + x + "]").disabled = true;
		document.getElementById("exp_amount[" + x + "]").disabled = true;
		document.getElementById("delGrantBtn[" + x + "]").classList.add("d-none");
		document.getElementById("relGrantBtn[" + x + "]").classList.remove("d-none");
	}
	
	// ------------------------------------------------------- Data Remove //
	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	// Data Reset -------------------------------------------------------- //
	
	function relGrantFunction(x) {
		document.getElementById("del_grant[" + x + "]").value = '';
		document.getElementById("exp_head[" + x + "]").value = document.getElementById("exp_head_new[" + x + "]").value;
		document.getElementById("exp_amount[" + x + "]").value = document.getElementById("exp_amount_new[" + x + "]").value;
		document.getElementById("exp_head_new[" + x + "]").value = '';
		document.getElementById("exp_amount_new[" + x + "]").value = '';
		
		document.getElementById("exp_head[" + x + "]").disabled = false;
		document.getElementById("exp_amount[" + x + "]").disabled = false;
		document.getElementById("relGrantBtn[" + x + "]").classList.add("d-none");
		document.getElementById("delGrantBtn[" + x + "]").classList.remove("d-none");
	}
	
	// -------------------------------------------------------- Data Reset //
}

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ICSSR Total Grant Data Remove & Reset //
// ----------------------------------------------------------------------------------------------------------------------- //
// Other Agencies Grant Data Remove & Reset ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

for (var y = 0; y < 11; y++) {
	function delOtherFunction(y) {			
		var b = document.getElementById("delOtherBtn[" + y + "]").value;
		document.getElementById("grant_org_new[" + y + "]").value = document.getElementById("grant_org[" + y + "]").value;
		document.getElementById("grant_amount_new[" + y + "]").value = document.getElementById("grant_amount[" + y + "]").value;
		document.getElementById("del_other[" + y + "]").value = b;
		document.getElementById("grant_org[" + y + "]").value = '';
		document.getElementById("grant_amount[" + y + "]").value = 0;
		
		document.getElementById("grant_org[" + y + "]").disabled = true;
		document.getElementById("grant_amount[" + y + "]").disabled = true;
		document.getElementById("delOtherBtn[" + y + "]").classList.add("d-none");
		document.getElementById("relOtherBtn[" + y + "]").classList.remove("d-none");
	}
	function relOtherFunction(y) {
		document.getElementById("del_other[" + y + "]").value = '';
		document.getElementById("grant_org[" + y + "]").value = document.getElementById("grant_org_new[" + y + "]").value;
		document.getElementById("grant_amount[" + y + "]").value = document.getElementById("grant_amount_new[" + y + "]").value;
		document.getElementById("grant_org_new[" + y + "]").value = '';
		document.getElementById("grant_amount_new[" + y + "]").value = '';
		
		document.getElementById("grant_org[" + y + "]").disabled = false;
		document.getElementById("grant_amount[" + y + "]").disabled = false;
		document.getElementById("relOtherBtn[" + y + "]").classList.add("d-none");
		document.getElementById("delOtherBtn[" + y + "]").classList.remove("d-none");
	}
}

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Other Agencies Grant Data Remove & Reset //
// ----------------------------------------------------------------------------------------------------------------------- //
// Pre Grant Projects Data Remove ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

for (var z = 0; z < 11; z++) {
	function delPgProFunction(z) {			
		var c = document.getElementById("delPgProBtn[" + z + "]").value;
		document.getElementById("del_pgpro[" + z + "]").value = c;
		
		var hidePgPro = document.getElementById("editPgPro[" + z + "]");
		hidePgPro.classList.add("d-none");
	}
}

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Pre Grant Projects Data Remove //