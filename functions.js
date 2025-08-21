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
    })
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
