<?php
// Assume $tasks is an array of task data passed to this view
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Todo List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h1 class="text-3xl font-bold mb-6 text-center">Todo List</h1>

    <form method="POST" class="flex mb-6">
      <input
        type="text"
        name="title"
        required
        class="flex-grow border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
        placeholder="Add new task"
      />
      <button
        type="submit"
        class="bg-blue-500 text-white px-5 rounded-r-md hover:bg-blue-600 transition"
      >
        Add
      </button>
    </form>

    <ul>
      <?php foreach ($tasks as $task): ?>
        <li
          class="flex justify-between items-center bg-blue-50 rounded-md p-3 mb-2 shadow-sm"
        >
          <span><?= htmlspecialchars($task['title']) ?></span>
          <a
            href="?delete=<?= $task['id'] ?>"
            class="text-red-500 hover:text-red-700 font-semibold"
          >
            Delete
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>

</body>
</html>
