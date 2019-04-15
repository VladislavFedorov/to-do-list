<!DOCTYPE html>

<head>
    <title>to-do list</title>
	<meta charset="utf-8">
</head>

<body>

<h1>To-do list</h1>
	
<p>
    <a href="create.php">Add new</a>
</p>

<?php  require_once("connection.php");

db();
global $link;
$query = "SELECT id, todoTitle, todo, date FROM todo";
$result = mysqli_query($link, $query);

//check if there’s any data inside the table
if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['todoTitle'];
        $date = $row['date'];
?>

<ul>
    <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
</ul>
 
<?php
    }
};
?>

</body>







