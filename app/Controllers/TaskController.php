<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Task::create($_POST['title']);
            header('Location: /');
            exit;
        }

        if (isset($_GET['delete'])) {
            Task::delete($_GET['delete']);
            header('Location: /');
            exit;
        }

        $tasks = Task::all();
        require __DIR__ . '/../Views/tasks.php';
    }
}
