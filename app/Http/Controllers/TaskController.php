<?php

namespace App\Http\Controllers;
use App\Task;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(Task $tasks)
  {
    $tasks = Task::orderBy('id', 'DESC')->paginate(10);
    return view('admin.todo.index', [
      'tasks' => $tasks,
    ]);
  }

  public function store()
  {
    $inputs = request()->validate([
      'title' => ['required', 'max:255'],
      'body' => ['required', 'max:500'],
    ]);

    auth()
      ->user()
      ->tasks()
      ->create($inputs);

    return redirect()
      ->route('task-index')
      ->with('success', 'Dodano zadanie.');
  }

  public function complete(Task $task)
  {
    DB::update(
      'update tasks set completed_by = ?, is_completed = ? where id = ?',
      [Auth::user()->name, 'yes', $task->id]
    );

    return redirect()
      ->route('task-index')
      ->with('info', 'Zadanie zostało oznaczone jako wykonane.');
  }
}
