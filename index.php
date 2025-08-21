<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Todo</title>
    <link rel="stylesheet" href="css/style.css?v=(<?php echo time(); ?>)">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css?v=(<?php echo time(); ?>)">
</head>

<header class = "header">
    <div class = "box-plus" id = "pushTodo">
        <i class="bi bi-plus-square-fill" ></i>
    </div>

    <input  id = "inputTodo" placeholder="Новая задача..."></input>
</header>

<body>
    <ul id="listTodo"> </ul>

    <script src = 'functions.js'> </script>
</body>
</html>
