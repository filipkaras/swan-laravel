<x-layout>
    <x-result></x-result>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h1>New to-do</h1>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <form action="/todo" method="post" id="frm-todo" class="m-form m-form--fit m-form--label-align-right">
                @csrf
                <div class="m-portlet__body">
                    <div class="mb-3">
                        <label for="todo">To-do *</label>
                        <input type="text" name="todo" id="todo" class="form-control" value="{{ old('todo') }}" />
                        @error('todo')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" />
                        @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" name="completed" id="completed" value="{{ old('completed') }}" class="form-check-input" />
                        <label class="form-check-label ms-2" for="completed">Completed</label>
                        @error('completed')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
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
</x-layout>
