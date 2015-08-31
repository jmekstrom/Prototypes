<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="container">
    <form role="form" action="index_insert.php" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name='title' class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <input type="text" name="details" class="form-control" id="details">
        </div>
        <div class="form-group">
            <label for="timestamp">Timestamp:</label>
            <input type="text" name="timestamp" class="form-control" id="timestamp">
        </div>
        <div class="form-group">
            <label for="timestamp">Priority:</label>
            <input type="text" name="priority" class="form-control" id="timestamp">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
