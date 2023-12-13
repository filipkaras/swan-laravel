<x-layout>
    <x-result></x-result>

    <div class="row mt-4">
        <div class="col-md-8">
            <h1>To-do list</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="/todo/create" type="button" class="btn btn-primary">New to-do</a>
            <a onclick="return confirm('Are you sure you want to sign out?')" href="/logout" type="button" class="btn btn-danger">Sign Out</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Date Created</th>
                    <th>To-do</th>
                    <th>Completed</th>
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
                        <td>{{ $todo->completed }}</td>
                        <td>
                            <a class="btn py-0" href="/todo/{{ $todo->id }}"><i class="fas fa-search"></i></a>
                            <a class="btn py-0" href="/todo/{{ $todo->id }}/edit"><i class="far fa-edit"></i></a>
                            <form class="d-inline" method="POST" action="/todo/{{ $todo->id }}" onsubmit="return confirm('Are you sure you want to delete this to-do?')">
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
</x-layout>
