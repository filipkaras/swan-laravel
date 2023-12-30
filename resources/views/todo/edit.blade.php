<x-layout>
    <x-todo.form
        :todo="$todo"
        :title="'Edit TO-DO: ' . $todo->todo"
        :action="'/todos/' . $todo->id"
        method="PATCH"
    ></x-todo.form>
</x-layout>
