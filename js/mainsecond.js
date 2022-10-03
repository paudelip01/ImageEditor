	
	var num = 90;
	function transform() {
		var value = document.getElementById('img').style.transform;
	document.getElementById('img').style.transform = 'rotate('+num+'deg)';
	num = num + 90;
	}
// adding an image via url box
function addImage(e) {
	var imgUrl = $("#imgUrl").val();
	if (imgUrl.length) {
		$("#imageContainer img").attr("src", imgUrl);
	}
	e.preventDefault();
}

//on pressing return, addImage() will be called
$("#urlBox").submit(addImage);


// editing image via css properties
function editImage() {
	
	var br 		 = $("#br").val();      // brightness
	var ct 		 = $("#ct").val();      // contrast
	var opacity      = $("#opacity").val(); //opacity
	var saturate     = $("#saturate").val();//saturate
	
	var filter = 	' brightness(' + br +
			'%) contrast(' + ct +
			'%)  opacity(' + opacity +
			'%)  saturate(' + saturate +
			'%) ';

	$("#imageContainer img").css("filter", filter);
	$("#imageContainer img").css("-webkit-filter", filter); 

}
function editImages() {
	
	var gs 		 = $("#gs").val();      // grayscale
	var blur 	 = $("#blur").val();    // blur
	var huer	 = $("#huer").val();    //hue-rotate
	var invert 	 = $("#invert").val();  //invert
	var sepia 	 = $("#sepia").val();   //sepia

	var filters = 	'grayscale(' + gs+
			'%) blur(' + blur +
			'px)  hue-rotate(' + huer +
			'deg)invert(' + invert +
			'%s)epia(' + sepia + '%)';

	$("#imageContainer img").css("filter", filters);
	$("#imageContainer img").css("-webkit-filter", filters); 

}
//When sliders change image will be updated via editImage() function
$("input[type=range]").change(editImages).mousemove(editImages);

// Reset sliders back to their original values on press of 'reset'
$('#imageEditors').on('reset', function () {
	setTimeout(function() {
		editImages();
	},0);
});
//When sliders change image will be updated via editImage() function
$("input[type=range]").change(editImage).mousemove(editImage);

// Reset sliders back to their original values on press of 'reset'
$('#imageEditor').on('reset', function () {
	setTimeout(function() {
		editImage();
	},0);
});
