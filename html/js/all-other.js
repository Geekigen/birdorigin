// JavaScript Document

// Sidebar Toggle
document.getElementById("close").style.display = "none";
function closeNav(){
	document.getElementById("mySidenav").style.left = "0px";
	document.getElementById("main").style.width = "calc(100% - 220px)";
	document.getElementById("main").style.marginLeft = "220px";
	document.getElementById("main").style.marginRight = "0px";
	document.getElementById("title").style.marginLeft = "280px";
	document.getElementById("close").style.display = "none";
	document.getElementById("open").style.display = "block";
	document.getElementById("table-sc").style.width = "calc(100vw - 310px)";
}
function openNav() {
	document.getElementById("mySidenav").style.left = "-220px";
	document.getElementById("main").style.width = "calc(100%)";
	document.getElementById("main").style.marginLeft = "0px";
	document.getElementById("main").style.marginRight = "0px";
	document.getElementById("title").style.marginLeft = "60px";
	document.getElementById("open").style.display = "none";
	document.getElementById("close").style.display = "block";
	document.getElementById("table-sc").style.width = "calc(100vw - 90px)";
}


//********************************************************************

// Sidebar Submenu Toggle

$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
	SidebarCollapse();
});

function SidebarCollapse () {
	$('.menu-collapsed').toggleClass('d-none');
	$('.sidebar-submenu').toggleClass('d-none');
	$('.submenu-icon').toggleClass('d-none');
	$('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
	
	// Treating d-flex/d-none on separators with title
	var SeparatorTitle = $('.sidebar-separator-title');
	if ( SeparatorTitle.hasClass('d-flex') ) {
		SeparatorTitle.removeClass('d-flex');
	} else {
		SeparatorTitle.addClass('d-flex');
	}
	
	// Collapse/Expand icon
	$('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}

//*******************************************************************

// Tree View
$(function() {
	// Hide all lists except the outermost.
	$('ul.tree ul').hide();
  
	$('.tree li > ul').each(function(i) {
	  var $subUl = $(this);
	  var $parentLi = $subUl.parent('li');
	  var $toggleIcon = '<i class="js-toggle-icon">+</i>';
  
	  $parentLi.addClass('has-children');
	  
	  $parentLi.prepend( $toggleIcon ).find('.js-toggle-icon').on('click', function() {
		$(this).text( $(this).text() == '+' ? '-' : '+' );
		$subUl.slideToggle('fast');
	  });
	});
});
// ******************************************************************

// Top profile button Random Color

var colors = ['#2e963d', '#b666d2', '#318ce7', '#cd5b45', '#1770c9', '#744fc9'];
var random_color = colors[Math.floor(Math.random() * colors.length)];
document.getElementById('rand-clr').style.backgroundColor = random_color;