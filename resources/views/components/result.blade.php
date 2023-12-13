@if (session()->has('success'))
    <div class="mt-4 alert alert-success" onclick="this.remove()">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="mt-4 alert alert-danger" onclick="this.remove()">
        {{ session('error') }}
    </div>
@endif
