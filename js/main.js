	
	var num = 90;
	function transform() {
		var value = document.getElementById('img').style.transform;
	document.getElementById('img').style.transform = 'rotate('+num+'deg)';
	num = num + 90;
	}
	
	// print(imgUrl.length);
// adding an image via url box

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
	
	var gs 		 = $("#gs").val();      // grayscale
	var blur 	 = $("#blur").val();    // blur
	var br 		 = $("#br").val();      // brightness
	var ct 		 = $("#ct").val();      // contrast
	var huer	 = $("#huer").val();    //hue-rotate
	var opacity      = $("#opacity").val(); //opacity
	var invert 	 = $("#invert").val();  //invert
	var saturate     = $("#saturate").val();//saturate
	var sepia 	 = $("#sepia").val();   //sepia

	var filter = 	'grayscale(' + gs+
			'%) blur(' + blur +
			'px) brightness(' + br +
			'%) contrast(' + ct +
			'%) hue-rotate(' + huer +
			'deg) opacity(' + opacity +
			'%) invert(' + invert +
			'%) saturate(' + saturate +
			'%) sepia(' + sepia + '%)';

	$("#imageContainer img").css("filter", filter);
	$("#imageContainer img").css("-webkit-filter", filter); 

}

//When sliders change image will be updated via editImage() function
$("input[type=range]").change(editImage).mousemove(editImage);

// Reset sliders back to their original values on press of 'reset'
$('#imageEditor').on('reset', function () {
	setTimeout(function() {
		editImage();
	},0);
});

function editImages() {
	
	var gs 		 = $("#gs").val();      // grayscale
	var blur 	 = $("#blur").val();    // blur
	var br 		 = $("#br").val();      // brightness
	var ct 		 = $("#ct").val();      // contrast
	var huer	 = $("#huer").val();    //hue-rotate
	var opacity      = $("#opacity").val(); //opacity
	var invert 	 = $("#invert").val();  //invert
	var saturate     = $("#saturate").val();//saturate
	var sepia 	 = $("#sepia").val();   //sepia

	var filter = 	'grayscale(' + gs+
			'%) blur(' + blur +
			'px) brightness(' + br +
			'%) contrast(' + ct +
			'%) hue-rotate(' + huer +
			'deg) opacity(' + opacity +
			'%) invert(' + invert +
			'%) saturate(' + saturate +
			'%) sepia(' + sepia + '%)';

	$("#imageContainer img").css("filter", filter);
	$("#imageContainer img").css("-webkit-filter", filter); 

}

//When sliders change image will be updated via editImage() function
$("input[type=range]").change(editImages).mousemove(editImages);

// Reset sliders back to their original values on press of 'reset'
$('#imageEditors').on('reset', function () {
	setTimeout(function() {
		editImages();
	},0);
});

function doCapture(){

            html2canvas(document.getElementById("img")).then(function (canvas){

            const dataURI=canvas.toDataURL();

             // imgConverted.src=dataURI;
// 
            console.log(dataURI);

              var ajax=new XMLHttpRequest();

              ajax.open("POST","save-capture.php",true);

              ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

              ajax.send("image="+canvas.toDataURL("image/jpg",0.9));

 

              ajax.onreadystatechange=function(){

                if(this.readyState==4 && this.status==200){

                  console.log(this.responseText);

                }

              }

            })

          }