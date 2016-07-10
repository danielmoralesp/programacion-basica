$(function(){
	var header = $('app-header');
	$('#app-header').find('h1');
	//$('#app-header').has('h1');
	//$('#app-header').has('.title');
	//$('#app-header').not('h1');
	//$('#app-header').filter('.text');
	$('#app-header')
		.filter('.text')
		.has('a')
		.eq(1)
});