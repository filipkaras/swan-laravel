<?php

namespace App\Repositories;

use App\Http\Middleware\OwnTodosOnly;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoRepository implements TodoRepositoryInterface
{
    public static $middleware = [
        OwnTodosOnly::class,
    ];

    public function getFilteredSortedTodosWithPagination(int $itemsPerPage = 10)
    {
        return Todo::sortable()->filter()->with('user')->where('user_id', auth()->id())->paginate($itemsPerPage);
    }

    public function store(TodoRequest $request, int $userId)
    {
        $attributes = $this->getAttributes($request);
        $attributes['user_id'] = $userId;

        Todo::create($attributes);
    }

    public function update(Todo $todo, TodoRequest $request)
    {
        $todo->update($this->getAttributes($request));
    }

    private function getAttributes(TodoRequest $request): array
    {
        return [
            'todo' => $request->todo,
            'description' => $request->description,
            'completed' => (int)$request->has('completed')
        ];
    }
}
