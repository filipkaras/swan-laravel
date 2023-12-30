<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Repositories\TodoRepositoryInterface;

class TodoController extends Controller
{
    public function __construct(private TodoRepositoryInterface $todoRepository) { }

    public function index()
    {
        return view('todo.index', [
            'todos' => $this->todoRepository->getFilteredSortedTodosWithPagination(10)
        ]);
    }

    public function show(Todo $todo)
    {
        return view('todo.show', [
            'todo' => $todo
        ]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(TodoRequest $request)
    {
        $this->todoRepository->store($request, auth()->id());

        return redirect('/todos')->with('success', 'To-do created!');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Todo $todo, TodoRequest $request)
    {
        $this->todoRepository->update($todo, $request);

        return redirect('/todos')->with('success', 'To-do updated!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back()->with('success', 'To-do deleted!');
    }
}
