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
    <ul id="listTodo">

    </ul>



    <script>
        const btn = document.getElementById('pushTodo');
        const text = document.getElementById('inputTodo');
        const list = document.getElementById('listTodo');

        let todos = localStorage.getItem('todos') || '[]' // if getImet == null -> get empty massive
        todos = JSON.parse(todos);

        for(let todo of todos) show(todo);
        btn.addEventListener('click', pushText);
        text.addEventListener('keydown',(e) => {
            if(e.key === 'Enter')pushText();
        })


        function show(text){
            const div = document.createElement('div'); // create new li element
            div.textContent = text; // text -> li (box)
            div.className = 'item new';
            list.prepend(div); // push list new li

            requestAnimationFrame(() => {
                div.classList.remove('new');


            div.addEventListener('click', () => {
                div.remove(); // delete for html
                todos = todos.filter(el => el !== text); // если текущий текст то false/ если тукщйи элемент он и есть
                localStorage.setItem('todos',JSON.stringify(todos));
            })
        }

        function pushText(){
            const value = text.value.trim();
            if(!value)return;

            todos.push(value);
            localStorage.setItem('todos',JSON.stringify(todos));

            show(value);
            text.value = '';  // обнуление текста
        }



    </script>
</body>
</html>
