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
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="title-detail ms-3">
                            <h1 class="ff-a-600 fw-bold text-white mb-1">{{$hero->nama}}</h1>
                            <h6 class="ff-a-600 fw-bold yellow-primary">{{$hero->role['nama']}}</h6>
                        </div>
                    </div>
                    <div class="col-12 fs-6 col-md-12 col-lg-6 mt-2 ">
                        <p class="white-primary mx-3 opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique, voluptatem natus accusamus molestias sapiente molestiae facere obcaecati expedita.</p>
                    </div>
                </div>
                <div class="row justify-content-center mx-1 mt-3 text-center ">
                    @foreach ($skill as $item)
                    <div class="col-lg-4 col-md-6 col-12 gy-3 align-items-stretch d-flex">
                        <div class="card border-0 rounded-1 ">
                            <div class="card-body">
                                <img src="https://i.ibb.co/9hKT7P2/tanganjulian.png" class="rounded-circle mt-2" width="70px" height="65px"  alt="">
                                <h5 class="ff-a-600 mt-2 white-primary">@if(empty($item->nama))Tidak Ada @else {{$item->nama}} @endif</h5>
                                <p class="text-white fs-6 text-start mt-3 opacity-75">@if(empty($item->deskripsi)) Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aspernatur ex voluptatibus veniam architecto voluptates sapiente! @else {{$item->deskripsi}} @endif</p>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <a href="/" class="btn btn-secondary bg-dark-primary border-0 position-fixed btn-sm btn-top-fixed back">
        <i class="bi bi-chevron-left"></i>
    </a>
    <button class="btn btn-secondary bg-dark-primary border-0 position-fixed btn-sm btn-top-fixed setting"><i class="bi bi-gear"></i></button>
    {{-- <form action="/hero/{{$hero->id}}" method="post">
        @csrf
        @method('delete') --}}
        <button id="deleteBtn" class="btn btn-secondary border-0 position-fixed btn-sm btn-top-fixed delete"><i class="bi bi-trash3"></i></button>
    {{-- </form> --}}
@endsection
