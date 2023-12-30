<x-layout>
    <x-todo.form
        :todo="new App\Models\Todo"
        title="New TO-DO"
        action="/todos"
    ></x-todo.form>
</x-layout>
