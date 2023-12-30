<x-layout>
    <div class="container">
        <div class="container py-5">
            <div class="row justify-content-md-center">
                <div class="col-6">
                    <main>
                        <a class="btn btn-outline-secondary mb-2" href="/todos"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
                        <div class="card mb-4 rounded-3 shadow-sm card-form">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{ $todo->todo }}</h4>
                            </div>
                            <div class="card-body">
                                <strong>Description:</strong> {{ $todo->description }}<br />
                                <strong>Created:</strong> {{ $todo->created_at }}<br />
                                <strong>Completed:</strong> {{ $todo->completed ? 'Yes' : 'No' }}<br />
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-layout>
