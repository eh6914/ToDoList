<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<link rel = "stylesheet" href="css.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class = "todolist">

<h1>To Do</h1>
<ul>
<ul>
<?php require("connect.php"); ?>
</ul>
    <li>
        <form method="post" autocomplete="off" name="idontknow" action="additem.php">
            <input class="index" type="hidden" name="index" />
            <input name="title" value="" placeholder="Add new item here..."/>

            <button name="action" value="update">
                <span>Add</span>
            </button>

            <button name="action"  value="remove">
                <span>Remove</span>
            </button>
        </form>
    </li>
</ul>

</form>
</div>
</body>

</html>
