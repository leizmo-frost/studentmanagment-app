@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Register</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" required>
                            </div>
                            <div class="col-md-12 mb-3"> <!-- Added margin-bottom to the confirmation password input field -->
                                <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" required>
                            </div>
                        </div>
                        <div class="col-auto mb-3"> <!-- Added margin-bottom to the form-check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                <label class="form-check-label" for="autoSizingCheck2">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="text-center mt-3"> <!-- Centering the button and adding margin-top -->
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill" style="width: 80%;">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
