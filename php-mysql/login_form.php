<!--login_form.php-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function ajaxCall(){
	var username = $('#username').val();
	var password = $('#password').val();
	$.ajax({
		url: "login_handler.php",
		data: {username,password},
		cache: false,
		method: "POST",
		dataType: "json",
		success: function(data){
			if(data.success){
				console.log("login successful",data);
				window.location.href = 'form.php';
			}
			else{
				console.log("login failed",data);
			}
		},
		error: function(response){
			console.log(response);
		}
	})
}
</script>


Username:<input type="text" id="username"><br><br>
Password :<input type="text" id="password"><br><br>
<button type="button" onclick="ajaxCall()">Login</button>
