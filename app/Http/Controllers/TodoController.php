<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index', [
            'todos' => Todo::sortable()->filter()->with('user')->where('user_id', auth()->id())->paginate(10)
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

    public function store(StoreTodoRequest $request)
    {
        $attributes = [
            'todo' => $request->todo,
            'description' => $request->description,
            'completed' => (int)$request->has('completed'),
            'user_id' => auth()->id()
        ];

        Todo::create($attributes);

        return redirect('/todos')->with('success', 'To-do created!');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(StoreTodoRequest $request, $id)
    {
        $attributes = [
            'todo' => $request->todo,
            'description' => $request->description,
            'completed' => (int)$request->has('completed')
        ];

        Todo::find($id)->update($attributes);

        return redirect('/todos')->with('success', 'To-do updated!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back()->with('success', 'To-do deleted!');
    }
}
