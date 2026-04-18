(function () {
    const taskList = document.getElementById('taskList');
    const taskInput = document.getElementById('taskInput');
    const taskForm = document.getElementById('taskForm');
    const addTaskButton = document.getElementById('addTaskButton');
    const activeCount = document.getElementById('activeCount');
    const completedCount = document.getElementById('completedCount');

    if (!taskList || !taskInput || !taskForm || !addTaskButton || !activeCount || !completedCount) {
        return;
    }

    function setTaskState(taskItem, isCompleted) {
        const check = taskItem.querySelector('.task-check');
        if (check) {
            check.checked = isCompleted;
        }

        taskItem.dataset.completed = isCompleted ? 'true' : 'false';
        taskItem.classList.toggle('task-completed', isCompleted);
    }

    function updateCounters() {
        const items = taskList.querySelectorAll('.task-item');
        let completed = 0;

        items.forEach(function (item) {
            if (item.dataset.completed === 'true') {
                completed += 1;
            }
        });

        completedCount.textContent = String(completed);
        activeCount.textContent = String(items.length - completed);
    }

    function buildTaskItem(text) {
        const item = document.createElement('li');
        item.className = 'list-group-item task-item';
        item.dataset.completed = 'false';

        const wrapper = document.createElement('div');
        wrapper.className = 'd-flex align-items-center gap-3';

        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.className = 'form-check-input task-check mt-0';
        checkbox.setAttribute('aria-label', 'Oznaci nalogo kot dokoncano');

        const textEl = document.createElement('span');
        textEl.className = 'task-text flex-grow-1';
        textEl.textContent = text;

        const deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn btn-outline-danger btn-sm task-delete';
        deleteButton.textContent = 'Izbrisi';

        wrapper.appendChild(checkbox);
        wrapper.appendChild(textEl);
        wrapper.appendChild(deleteButton);
        item.appendChild(wrapper);

        return item;
    }

    function addTask() {
        const value = taskInput.value.trim();
        if (value === '') {
            taskInput.focus();
            return;
        }

        taskList.appendChild(buildTaskItem(value));
        taskInput.value = '';
        taskInput.focus();
        updateCounters();
    }

    taskForm.addEventListener('submit', function (event) {
        event.preventDefault();
        addTask();
    });

    addTaskButton.addEventListener('click', addTask);

    taskList.addEventListener('click', function (event) {
        const deleteButton = event.target.closest('.task-delete');
        if (!deleteButton) {
            return;
        }

        const item = deleteButton.closest('.task-item');
        if (!item) {
            return;
        }

        item.remove();
        updateCounters();
    });

    taskList.addEventListener('change', function (event) {
        const checkbox = event.target.closest('.task-check');
        if (!checkbox) {
            return;
        }

        const item = checkbox.closest('.task-item');
        if (!item) {
            return;
        }

        const wasCompleted = item.dataset.completed === 'true';
        const nowCompleted = checkbox.checked;

        if (wasCompleted && !nowCompleted) {
            const confirmed = window.confirm('Naloga je bila ze potrjena. Ce jo odznacite, bo ponovno aktivna. Zelite nadaljevati?');
            if (!confirmed) {
                checkbox.checked = true;
                return;
            }

            window.alert('Naloga je ponovno aktivna za novo potrjevanje.');
        }

        setTaskState(item, nowCompleted);
        updateCounters();
    });

    taskList.querySelectorAll('.task-item').forEach(function (item) {
        const check = item.querySelector('.task-check');
        setTaskState(item, Boolean(check && check.checked));
    });

    updateCounters();
})();
