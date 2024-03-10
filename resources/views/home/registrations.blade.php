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
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                            </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="confirm password" aria-label="confirm Password">
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                              <label class="form-check-label" for="autoSizingCheck2">
                                Remember me
                              </label>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
