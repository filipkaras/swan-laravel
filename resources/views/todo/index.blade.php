<x-layout>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <h1>To-do list</h1>
            </div>
            <div class="col-md-4 text-end">
                <a href="/todos/create" type="button" class="btn btn-primary">New to-do</a>
                <a onclick="return confirm('Are you sure you want to sign out?')" href="{{ route('logout') }}" type="button" class="btn btn-danger">Sign Out</a>
            </div>
        </div>
        <form method="GET" action="/todos">
            <div class="row mt-4">
                <div class="col-md-4">
                    <label for="filter-todo">To-do</label>
                    <input type="text" name="filters[todo][$contains]" id="filter-todo" class="form-control" value="{{ request()->query('filters')['todo']['$contains'] ?? "" }}">
                </div>
                <div class="col-md-4">
                    <label for="filter-date-from">Date from</label>
                    <input type="date" name="filters[created_at][$gte]" id="filter-date-from" class="form-control" value="{{ request()->query('filters')['created_at']['$gte'] ?? "" }}">
                </div>
                <div class="col-md-4">
                    <label for="filter-date-to">Date to</label>
                    <input type="date" name="filters[created_at][$lte]" id="filter-date-to" class="form-control" value="{{ request()->query('filters')['created_at']['$lte'] ?? "" }}">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <input type="hidden" name="sort" value="{{ request()->query('sort') ?? "created_at" }}">
                    <input type="hidden" name="direction" value="{{ request()->query('direction') ?? "desc" }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                    <a href="/todos" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>@sortablelink('id', 'ID')</th>
                        <th>@sortablelink('created_at', 'Date created')</th>
                        <th>@sortablelink('todo', 'To-do')</th>
                        <th>@sortablelink('completed', 'Completed')</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($todos->count() == 0)
                        <tr>
                            <td colspan="5">No to-dos to display.</td>
                        </tr>
                    @endif
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->created_at }}</td>
                            <td>{{ $todo->todo }}</td>
                            <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
                            <td>
                                <a class="btn py-0" href="{{ route('todos.show', ['todo' => $todo]) }}"><i class="fas fa-search"></i></a>
                                <a class="btn py-0" href="{{ route('todos.edit', ['todo' => $todo]) }}"><i class="far fa-edit"></i></a>
                                <form class="d-inline" method="POST" action="{{ route('todos.destroy', ['todo' => $todo]) }}" onsubmit="return confirm('Are you sure you want to delete this to-do?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn py-0"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $todos->links() }}
            </div>
        </div>
    </div>
</x-layout>
