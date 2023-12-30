<x-layout>
    <section class="auth vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white">
                        <div class="card-body p-5 text-center">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
