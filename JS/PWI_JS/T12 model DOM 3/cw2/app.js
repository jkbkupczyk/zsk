// Elems

const bttnElem = document.querySelector('.form__bttn--add');
const inputElem = document.querySelector('input[type=text]');
const listElem = document.querySelector('.list');

const addTask = () => {
    const todoBody = document.createElement('div');
    todoBody.classList.add('todo__elem');

    const todoText = document.createElement('p');
    todoText.classList.add('todo__elem--text');
    todoText.innerText = inputElem.value;

    const deleteBttn = document.createElement('button');
    deleteBttn.classList.add('todo__elem--delete');
    deleteBttn.innerText = "Usuń";
    deleteBttn.addEventListener('click', removeTask);

    todoBody.append(todoText, deleteBttn);

    const newTodo = document.createElement('li');
    newTodo.appendChild(todoBody);

    listElem.append(newTodo)
}

const removeTask = (e) => {
    const el = e.target.closest('li');
    el.parentNode.removeChild(el);
}

bttnElem.addEventListener('click', addTask);