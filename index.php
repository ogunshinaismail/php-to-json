<?php require("todo.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Todos</h1>
    <form action="" method="post">
        <input type="text" class="input" placeholder="enter todo" name="todo">
        <input type="submit" name="submit" value="add todo" class="btn">

        <p class="error"><?php echo @$error ?></p>
        <p class="success"><?php echo @$success ?></p>
    </form>

</body>
</html>

