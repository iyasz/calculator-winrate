@extends('layout.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <div class="hero-side-content">
        <div class="text-center">
            <div class="header-hero ff-a-400 mt-5">
                <h1 class="ff-a-600 text-white mb-3">HERO</h1>
                <a class="mx-2" href="">ALL</a>
                <a class="mx-2" href="">Tank</a>
                <a class="mx-2" href="">Figther</a>
                <a class="mx-2" href="">Assasin</a>
                <a class="mx-2" href="">Mage</a>
                <a class="mx-2" href="">Marksman</a>
                <a class="mx-2" href="">Support</a>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                @for ($i = 0; $i < 20; $i++)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <a class="main-hero text-decoration-none position-relative" href="">
                            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0.4)) ,url('https://random.imagecdn.app/v1/image?width=500&height=150&category=anime&format=image')"
                                class="card-hero ">
                                <div class="pt-5 ms-2 main-text-hero">
                                    <h4 class="text-white ff-a-600 mb-0 pt-4">Aamon</h4>
                                    <h6 class="ff-a-400">Assasin</h6>
                                </div>
                                <div class="hero-hover">
                                    <div class="backdrop-hero"></div>
                                    <div class="ms-2 position-absolute content-hover">
                                        <h4 class="text-white ff-a-600 mb-0 pt-3">Aamon</h4>
                                        <h6 class="ff-a-400">Assasin</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, in.
                                            Lorem ipsum dolor sit </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="plus-icon">
        <i class="bi bi-plus"></i>
    </div>
@endsection
