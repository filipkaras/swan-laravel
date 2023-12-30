<div class="position-fixed bottom-0 end-0 me-4 mb-2">
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
</div>
