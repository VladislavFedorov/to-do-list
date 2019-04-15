<!DOCTYPE html>

<head>
    <title>to-do list</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>

<h1>To-do list</h1>

<?php  include "connection.php";  ?>

<form method="post" action="create.php">
    <p>Todo title:</p>
    <input name="todoTitle" type="text">
    <p>Todo description: </p>
    <input name="todoDescription" type="text">
    <br>
    <input type="submit" name="submit" value="submit">
</form>

<?php

if(isset($_POST['submit'])) {
	
    $title = $_POST['todoTitle'];
    $description = $_POST['todoDescription'];
    echo "you filled title " . $title . "<br> and description " . $description;
};

if(isset($_POST['submit'])) {
	
    $title = $_POST['todoTitle'];
    $description = $_POST['todoDescription'];

    db();
    global $link;
	
    $query = "INSERT INTO todo(todoTitle, todo, date) VALUES ('$title', '$description', now() )";
    $insertTodo = mysqli_query($link, $query);
   
   if($insertTodo){
	   
        echo " -- Successfully added";
		echo "<p><a href='index.php'>Back</a></p>";
    } else{
		
        echo mysqli_error($link);
    }
    mysqli_close($link);
};


?>

</body>