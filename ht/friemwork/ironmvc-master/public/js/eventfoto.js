$(document).ready(function(){
	var itemfoto = $(".ig");
	var cam = $("#file");
	itemfoto.click(function(){
		cam.click();
	});

	cam.change(function(){
		upload(cam.val());
	})

	itemfoto.bind("drop", function(){
		cam.bind("drop");
	})

	function upload(name){
		var formData = new FormData($('#form')[0]);
		$.ajax({
			url: "http://localhost/kuliah/uas/index.php/foto/up",
    		type: 'POST',
    		data: formData,
   			async: false,
    		cache: false,
    		contentType: false,
    		processData: false,
    		success: function (returndata) {
    			$(".fname").val(name);
    			itemfoto.html("<img src='http://localhost/kuliah/uas/public/image/"+ name +"' class='image'/>")
    		}
		});
	}

})