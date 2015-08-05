//Create GLOBAL variable below here on line 2
var global_result;

$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result){
				console.log('loaded',result);
				global_result = result;
                first_movie = global_result.feed.entry[0];
                first_movie_img = global_result.feed.entry[0]['im:image'][0].label;
                first_movie_img3 = global_result.feed.entry[0]['im:image'][2].label;
                for(var i = 0; i < global_result.feed.entry.length; i++ ){
                    var movie_img = global_result.feed.entry[i]['im:image'][2].label;
                    var img_tag = $("<img>", {
                        src: movie_img,
                        id: "img"+i
                    });
                    var title = global_result.feed.entry[i].title.label;
                    var title_tag = $("<h5>",{
                        id: "title"+i,
                        text: title
                    })
                    var director = global_result.feed.entry[i]['im:artist'].label;
                    var director_tag = $("<h6>",{
                        id: "director"+i,
                        text: director
                    })
                    $("#main").append(img_tag,title_tag,director_tag);
                }
			}
		});
	});
});
