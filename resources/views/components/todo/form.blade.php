@props(['todo', 'title', 'action', 'method' => 'POST'])

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <form action="{{ $action }}" method="post" id="frm-todo" class="m-form m-form--fit m-form--label-align-right">
                @csrf
                @if ($method != 'POST')
                    @method($method)
                @endif
                <div class="m-portlet__body">
                    <x-form.input name="todo" :value="old('todo', $todo->todo)" required />
                    <x-form.input name="description" :value="old('description', $todo->description)" />

                    <div class="mb-3">
                        <input type="checkbox" name="completed" id="completed" @if(old('completed', $todo->completed) == '1') checked="checked" @endif class="form-check-input" />
                        <label class="form-check-label ms-2" for="completed">Completed</label>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <input type="submit" name="save" value="Save" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
