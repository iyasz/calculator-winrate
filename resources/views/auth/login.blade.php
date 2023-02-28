@extends('layout.mainlayout')

@section('title', 'Login')

@section('content')
    <div class="hero-side-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body mx-3">
                            <form action="/login" method="post">
                                @csrf
                                <div class="">
                                    <label class="white-primary mb-1">Email</label>
                                    <input type="text" name="email" class="form-control rounded-1 form-hero" id="">
                                </div>
                                <div class="mt-3">
                                    <label class="white-primary mb-1">Password</label>
                                    <input type="text" name="password" class="form-control rounded-1 form-hero" id="">
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary w-100 rounded-0">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
