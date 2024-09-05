<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<section class="vh-100" style="background-color: #6A9C89;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block" style="padding-top: 30px;">
                            <img src="https://ps.w.org/login-customizer/assets/icon-256x256.png?rev=2455454"
                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Login Admin</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <!-- Email Address -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <label class="form-label" for="email">Email address</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                                        <label class="form-label" for="password">Password</label>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-check mb-4">
                                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                        <label class="form-check-label ms-2 text-sm text-gray-600 dark:text-gray-400" for="remember_me">Remember me</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block">Login</button>
                                    </div>

                                    <!-- @if (Route::has('password.request'))
                                    <a class="small text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                    @endif -->


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
