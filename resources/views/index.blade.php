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
                {{-- @for ($i = 0; $i < 20; $i++) --}}
                @foreach ($hero as $dataHero)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                            
                        <a class="main-hero text-decoration-none position-relative" href="">
                            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0.4)) ,url('{{$dataHero['hero_avatar']}}')"
                                class="card-hero ">
                                <div class="pt-5 ms-2 main-text-hero">
                                    <h4 class="text-white ff-a-600 mb-0 pt-4">{{$dataHero['hero_name']}}</h4>
                                    <h6 class="ff-a-400">{{$dataHero['hero_role']}}</h6>
                                </div>
                                <div class="hero-hover d-none">
                                    <div class="backdrop-hero"></div>
                                    <div class="ms-2 position-absolute content-hover">
                                        <h4 class="text-white ff-a-600 mb-0 pt-3">{{$dataHero['hero_name']}}</h4>
                                        <h6 class="ff-a-400">{{$dataHero['hero_role']}}</h6>
                                        <p class="mb-0">Hero Dengan Role {{$dataHero['hero_role']}} Dengan Specially {{$dataHero['hero_specially']}} </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                {{-- @endfor --}}
            </div>
        </div>
    </div>
    <div class="plus-icon">
        <a href="/addhero">
            <i class="bi bi-plus"></i>
        </a>
    </div>
@endsection
