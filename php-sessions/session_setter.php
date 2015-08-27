<?php 
session_start();
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<form action="session_reader.php" method="POST">
	<input type="text" name="name" placeholder="Name" value='<?php echo $_SESSION["name"] ?>'><br>
	<?php print_r($_SESSION["error"]['name']); ?><br>
	<input type="text" name="age" placeholder="Age" value='<?php echo $_SESSION["age"] ?>'><br>
	<?php print_r($_SESSION["error"]['age']); ?><br>
	<input type="text" name="occupation" placeholder="Occupation" value='<?php echo $_SESSION["occupation"] ?>'><br>
	<?php print_r($_SESSION["error"]['occupation']); ?><br>
	<button>Submit</button>
</form>