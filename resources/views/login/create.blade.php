<x-auth-panel>
    <div class="mb-md-5 mt-md-4 pb-5">
        <img src="/favicon/apple-touch-icon.51ba96d0e797.png" />
        <h2 class="fw-bold mb-2 text-uppercase">Sign In</h2>
        <p class="text-white-50 mb-4">Please enter your email and password!</p>
        <form method="POST" action="{{ route('login') }}" class="mt-10">
            @csrf
            <x-form.input name="email" type="email" />
            <x-form.input name="password" type="password" />
            <button class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Login</button>
        </form>
        <div class="social d-flex justify-content-center text-center mt-4 pt-1">
            <a target="_blank" href="http://www.facebook.com/SWANoperator" class="text-white px-4"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/swan-a-s-" class="text-white px-4"><i class="fab fa-linkedin fa-lg"></i></a>
            <a target="_blank" href="https://www.youtube.com/c/SWAN" class="text-white px-4"><i class="fab fa-youtube fa-lg"></i></a>
        </div>
    </div>
    <div>
        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
    </div>
</x-auth-panel>
