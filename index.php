<!DOCTYPE html>

<head>
    <title>TO-DO List</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	
    <!-- For Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<div class="container">

<nav class="navbar navbar-expand-md navbar-dark bg-dark" >

<a class="navbar-brand" href="index.php">TO-DO List</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="create.php"> 
			    <button type="submit" class="btn btn-success">New note</button>
			</a>
		</li>
    </ul>
	
</div>
 
</nav>

<?php

require_once("connection.php");

db();
global $link;
$query = "SELECT id, todoTitle, todo, date FROM `$table`";
$result = mysqli_query($link, $query);


if(mysqli_num_rows($result) >= 1){
	
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['todoTitle'];
		$description = $row['todo'];
        $date = $row['date'];
?>

<ul>
    <li>
		<?php echo $title . " // "?>
		<?php echo $description ?>
    </li>
	<?php echo "$date";?>
	
	<p>
	<a href="delete.php?id=<?php echo $id?>" role="button" class="btn btn-danger" type="submit">Delete</a>
	<a href="edit.php?id=<?php echo $id?>" role="button" class="btn btn-primary" type="submit">Edit</a>
	</p>
</ul>

<?php

    }
};

?>

<footer class="page-footer font-small bg-dark">
    <div class="footer-copyright text-center py-3">
        <a href="https://github.com/VladislavFedorov/to-do-list" target="_blank">2019, GitHub</a>
    </div>
</footer>


</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>