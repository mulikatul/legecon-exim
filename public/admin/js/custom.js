$(document).on('click', '.delete-row', function(){
	var id = $(this).attr('data-id');
	if(confirm('Are you sure you want to delete?'))
	{
	    event.preventDefault();
	    document.getElementById('delete-form-'+id).submit();
	}
	else
	{
	    event.preventDefault();
	}	
});

var url = window.location.href;
var url1 = url.slice(0, url.lastIndexOf('/'));
var url2 = url1.slice(0, url1.lastIndexOf('/'));
// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
   return (this.href == url || this.href == url1 || this.href == url2);
}).addClass('active');

// for treeview
// $('ul.treeview-menu a').filter(function() {
//    return this.href == url;
// }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
$('ul.nav-treeview a').filter(function() {
    return (this.href == url || this.href == url1 || this.href == url2);
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

// $(document).on('click', '.category_status', function(){
// 	var id = $(this).attr('data-id');
// 	$.get(BASE_URL+'/admin/category_status/'+id, function(fb){
// 		alert("Status successfully changed");
// 	})
// });

$("#success-message").show().delay(5000).fadeOut();