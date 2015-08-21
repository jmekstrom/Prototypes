<?php 
session_start();
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<form action="session_reader.php" method="POST">
	<input type="text" name="name" placeholder="Name" value='<?php echo $_SESSION["name"] ?>'>
	<input type="text" name="age" placeholder="Age" value='<?php echo $_SESSION["age"] ?>'>
	<input type="text" name="occupation" placeholder="Occupation" value='<?php echo $_SESSION["occupation"] ?>'>
	<button>Submit</button>
</form>
