<!DOCTYPE html>

<head>
    <title>to-do list</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>

<h1><a href="index.php">To-do list</a></h1>
	
<p>
    <a href="create.php">Add new</a>
</p>

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
        $date = $row['date'];
?>

<ul>
    <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
	<button type="button"><a href="delete.php?id=<?php echo $id?>">Delete</a></button>
	<button type="button"><a href="edit.php?id=<?php echo $id?>">Edit</a></button>
</ul>

<?php

    }
};

?>

</body>