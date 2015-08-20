
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

.dot_container{
	position: absolute;
	z-index: 1;
	bottom: 50px;
	left: 300px;
}

.dots {
	border-radius: 15px;
	border: 2px solid white;
	height: 15px;
	width: 15px;
	display: inline-block;
	margin: 5px;
}

.active{
	background-color: white;
}


</style>
<script type="text/javascript">	
var image_object = {};
	function load_files(){
		var image_array = [];
		$("#image_container").empty();
		$("#image_container").append("<div class='dot_container'></div>")
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
					var dotDOM = $("<div>",{
						class: "dots",
						dot: i,
						onclick: "clickDot("+i+")"
					})
					$(".dot_container").append(dotDOM)
				}
				image_array[0].css('left','0%');
				image_object.imageDOM = image_array;
				image_object.displayIndex = 0;
				activeDot(0);
			}
		});
		
	}
		

function prev_image(i){
	console.log(i);
	var current_image = image_object.displayIndex;
	//conditional statement preps the image to be animated
	if(image_object.displayIndex === 0){
		var prev_image = image_object.imageDOM.length-1;
	}
	else{
		var prev_image = image_object.displayIndex-1;
	}
	if(i != undefined){
		prev_image = i;
	}
	console.log(prev_image);
	//image placed in proper location to be animated
	image_object.imageDOM[prev_image].css("left","-100%");
	//current image animated to the right
	image_object.imageDOM[current_image].animate({'left':'100%'});
	//new image animated to the right
	image_object.imageDOM[prev_image].animate({'left':'0%'});
	//current display index updated
	image_object.displayIndex = prev_image;
	activeDot(prev_image,current_image);
	
}

function next_image(i){
	console.log(i);
	var current_image = image_object.displayIndex;
	//conditional statement preps the image to be animated
	if(image_object.displayIndex === image_object.imageDOM.length-1){
		var next_image = 0;
	}
	else{
		var next_image = image_object.displayIndex+1;
	}
	if(i != undefined){
		next_image = i;
	}
	console.log(next_image);
	//image placed in proper location to be animated
	image_object.imageDOM[next_image].css("left","100%");
	//current image animated to the right
	image_object.imageDOM[current_image].animate({'left':'-100%'});
	//new image animated to the right
	image_object.imageDOM[next_image].animate({'left':'0%'});
	//current display index updated
	image_object.displayIndex = next_image;
	activeDot(next_image,current_image);
}
 
 function activeDot(on,off){
 	$("[dot="+off+"]").removeClass("active");
 	$("[dot="+on+"]").addClass("active");
 }

 function clickDot(d){
 	activeDot(d,image_object.displayIndex);
 	if(d>image_object.displayIndex){
 		next_image(d);
 	}
 	else if(d<image_object.displayIndex){
 		prev_image(d);
 	}
 	
 }

 $(document).ready(function(){
 	load_files();
 })
</script>


<button type="button" class="btn btn-default" onclick="load_files()">Load Files</button>
<div id="image_container">
</div>



<button type="button" class="btn btn-default" onclick="prev_image()">Previous</button>
<button type="button" class="btn btn-default" onclick="next_image()">Next</button>



