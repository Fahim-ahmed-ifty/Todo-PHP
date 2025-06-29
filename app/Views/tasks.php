<!DOCTYPE html>
<html>
<body>
    <h1>Todo List</h1>

    <form method="POST">
        <input type="text" name="title" required>
        <button>Add</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= htmlspecialchars($task['title']) ?>
                <a href="?delete=<?= $task['id'] ?>">Delete</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
