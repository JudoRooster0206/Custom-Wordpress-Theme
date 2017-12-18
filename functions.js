$(document).ready(function(){
	$("#LeftMenu li").each(function() {
		var IconImage = 'Images/Navigation/' + $(this).children("span").html() + ' Icon.png';
		console.log($(this).children("span").html() + ' Icon.png');
		$(this).children("img").attr('src', IconImage);
	});

	$("#Menu_Button").click(function(){
		$("#LeftMenu").show();
	});
});