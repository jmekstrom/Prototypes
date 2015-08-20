
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
body{
	position: absolute;
}
#image_container{
	height: 600px;
	width: 800px;
	overflow: hidden;
	position: relative;
}
.carousel_img{
	position: absolute;
}



</style>
<script type="text/javascript">	
var image_object = {};
	function load_files(){
		var image_array = [];
		$("#image_container").empty();
		$.ajax({
			url: "http://localhost:8888/Sandbox/prototypes/php_directory_operations/dir_listing.php",
			dataType: "json",
			success: function(data){
				console.log(data);
				for(var i in data.files){
					var imageDOM = $("<img>",{
						class: "carousel_img",
						img_index: i,
						src: data.files[i]
					});
					imageDOM.css('left','100%');
					image_array.push(imageDOM);
					$("#image_container").append(imageDOM);
				}
				image_array[0].css('left','0%');
				image_object.imageDOM = image_array;
				image_object.displayIndex = 0;
			}
		});
		
	}
		

function prev_image(){
	if(image_object.displayIndex === 0){
		image_object.displayIndex = image_object.imageDOM.length-1;
		image_object.imageDOM[image_object.displayIndex].css('left','-100%');
		image_object.imageDOM[image_object.displayIndex].animate({'left':'0%'});
		console.log('last image');
	}
	else{
		image_object.imageDOM[image_object.displayIndex].animate({'left':'100%'});
		image_object.displayIndex = image_object.displayIndex -1;
		image_object.imageDOM[image_object.displayIndex].animate({'left':'0%'});
	}
}

function next_image(){
	if(image_object.displayIndex === image_object.imageDOM.length-1){
		image_object.displayIndex = 0;
	}
	else{
		image_object.imageDOM[image_object.displayIndex].animate({'left':'-100%'});
	}
	image_object.displayIndex = image_object.displayIndex +1;
	image_object.imageDOM[image_object.displayIndex].animate({'left':'0%'});
}
</script>


<button type="button" class="btn btn-default" onclick="load_files()">Load Files</button>
<div id="image_container">
	
</div>
<button type="button" class="btn btn-default" onclick="prev_image()">Previous</button>
<button type="button" class="btn btn-default" onclick="next_image()">Next</button>



