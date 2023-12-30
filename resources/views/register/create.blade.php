<x-auth-panel>
    <div class="mb-md-3 mt-md-4 pb-5">
        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
        <p class="text-white-50 mb-4">Create a new account!</p>

        <form method="POST" action="{{ route('register') }}" class="mt-10">
            @csrf
            <x-form.input name="first_name" />
            <x-form.input name="last_name" />
            <x-form.input name="phone" />
            <x-form.input name="email" type="email" />
            <x-form.input name="password" type="password" />
            <button class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Register</button>
        </form>

    </div>

    <div>
        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Sign In</a></p>
    </div>
</x-auth-panel>
