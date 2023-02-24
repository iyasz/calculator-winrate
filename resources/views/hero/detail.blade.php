@extends('layout.mainlayout')

@section('title', 'Detail Hero')

@section('content')
    <div class="detail-content">
        <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),
        rgba(45, 50, 56, 1)) ,url('{{$hero->avatar_id}}')" class="detail-header-hero">
        </div>
        <div class="content-hero-detail mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-5">
                        <div class="title-detail ms-3">
                            <h1 class="ff-a-600 fw-bold text-white mb-1">{{$hero->nama}}</h1>
                            <h6 class="ff-a-600 fw-bold yellow-primary">{{$hero->role['nama']}}</h6>
                        </div>
                    </div>
                    <div class="col-12 fs-6 col-md-4 col-lg-6 mt-2">
                        <p class="white-primary ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique, voluptatem natus accusamus molestias sapiente molestiae facere obcaecati expedita.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
