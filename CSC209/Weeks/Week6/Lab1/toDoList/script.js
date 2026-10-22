const taskInput = document.getElementById("taskInput");
const addButton = document.getElementById("addButton");
const taskList = document.getElementById("taskList");

addButton.addEventListener("click", function() {
    let taskText = taskInput.value;

    if (taskText !== "") {
        let task = document.createElement("li");
        task.textContent = taskText;

        task.addEventListener("click", function() {
            task.classList.toggle("completed");
        });

        taskList.appendChild(task);
        taskInput.value = "";
    }
});