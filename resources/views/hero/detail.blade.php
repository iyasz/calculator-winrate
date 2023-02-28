@extends('layout.mainlayout')

@section('title', 'Detail Hero')

@section('content')
    <div class="hero-side-content">
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
                    <div class="col-12 fs-6 col-md-12 col-lg-6 mt-3 ">
                        <h5 class="ff-a-600 fw-bold yellow-primary mx-3 mb-1">{{$speciallity->nama}}</h5>
                        <p class="white-primary mx-3 opacity-75">@if(empty($hero->deskripsi)) Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique, voluptatem natus accusamus molestias sapiente molestiae facere obcaecati. @else {{$hero->deskripsi}} @endif</p>
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

    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 text-white ff-a-600" id="staticBackdropLabel">Update Hero</h1>
            </div>
            <div class="detail-header-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0),
            rgba(45, 50, 56, 1)) ,url('{{$hero->avatar_id}}')"></div>
            <form action="/hero/{{$hero->id}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3 mt-2">
                                <label class="text-white mb-2 ff-a-400">Nama Hero :</label>
                                <input type="text" autocomplete="off" value="{{$hero->nama}}" readonly name="nama" class="form-control rounded-0 ff-a-400 form-hero hero" id="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-3 mt-2">
                                <label class="text-white mb-2 ff-a-400">Role Hero</label>
                                <select class="form-select rounded-0 ff-a-400 form-hero" name="role_id" aria-label="Default select example">
                                    <option selected disabled> --- </option>
                                    @foreach ($role as $item)                                        
                                    <option @if($item->id == $hero->role_id) selected @endif value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                  </select>

                                  <label class="text-white mb-2 ff-a-400 mt-3">Specially Hero :</label>
                                  <select name="specially" class="form-select rounded-0 ff-a-400 form-hero" >
                                      <option selected disabled> --- </option>
                                      <option @if($speciallity->nama == "Burst") selected @endif value="burst">Burst</option>
                                      <option @if($speciallity->nama == "Poke") selected @endif value="poke">Poke</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-3 mt-2">
                                <label class="text-white mb-2 ff-a-400">deskripsi Hero :</label>
                                <textarea name="deskripsi" class="form-control rounded-0 ff-a-400 form-hero text-area text-white">{{$hero->deskripsi}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($skill as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mb-3 mt-2">
                                <label class="text-white mb-2 ff-a-400">Skill {{$loop->iteration}} :</label>
                                <input type="text" autocomplete="off" value="{{$item->nama}}" name="nama_skill" class="form-control rounded-0 ff-a-400 form-hero" id="">
                                <textarea name="deskripsi_skill" class="form-control rounded-0 ff-a-400 form-hero text-area text-white fs-6 mt-3">{{$item->deskripsi}}</textarea>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <a href="/" class="btn btn-secondary bg-dark-primary border-0 position-fixed btn-sm btn-top-fixed back">
        <i class="bi bi-chevron-left"></i>
    </a>
    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-secondary bg-dark-primary border-0 position-fixed btn-sm btn-top-fixed setting"><i class="bi bi-gear"></i></button>
    <button id="deleteBtn" class="btn btn-secondary border-0 position-fixed btn-sm btn-top-fixed delete"><i class="bi bi-trash3"></i></button>
@endsection
