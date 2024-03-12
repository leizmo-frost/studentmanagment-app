@extends('home.welcome')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Login</h2>
                </div>
                <div class="card-body">
                    <form method="POST"> <!-- Assuming you have a route named 'login' -->
                        @csrf <!-- CSRF Protection -->
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-auto mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2" name="remember">
                                <label class="form-check-label" for="autoSizingCheck2">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Centering the button -->
                            <button type="submit" class="btn btn-primary mb-3 btn-lg rounded-pill" style="width: 80%;">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
