<?php

namespace App\Repositories;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;

interface TodoRepositoryInterface
{
    public function getFilteredSortedTodosWithPagination(int $itemsPerPage = 10);

    public function store(TodoRequest $request, int $userId);

    public function update(Todo $todo, TodoRequest $request);
}
