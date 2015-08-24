<!--login_form.php-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function ajaxCall(){
	var username = $('#username').val();
	var password = $('#password').val();
	$.ajax({
		url: "login_handler.php",
		data: username,
		cache: false,
		method: "POST",
		dataType: "text",
		success: function(data){
			console.log(data);
		}
	})
}
</script>

Username:<input type="text" id="username"><br><br>
Password :<input type="text" id="password"><br><br>
<button type="submit" onclick="ajaxCall()">Login</button>