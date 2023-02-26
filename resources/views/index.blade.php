@extends('layout.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <div class="hero-side-content">
        <div class="text-center">
            <div class="header-hero ff-a-400 mt-5">
                <h1 class="ff-a-600 text-white mb-3">HERO</h1>
                <a class="mx-2 nav-role active" href="#">ALL</a>
                <a class="mx-2 nav-role" href="#">Tank</a>
                <a class="mx-2 nav-role" href="#">Figther</a>
                <a class="mx-2 nav-role" href="#">Assasin</a>
                <a class="mx-2 nav-role" href="#">Mage</a>
                <a class="mx-2 nav-role" href="#">Marksman</a>
                <a class="mx-2 nav-role" href="#">Support</a>
                {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">ppawdpa</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">lag</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">lagbos</div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                  </div> --}}
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                @foreach ($hero as $dataHero)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <a class="main-hero text-decoration-none position-relative" href="/hero/detail/{{$dataHero->id}}">
                            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0.4)) ,url('{{$dataHero->avatar_id}}')" class="card-hero ">
                                <div class="pt-5 ms-2 main-text-hero">
                                    <h4 class="text-white ff-a-600 mb-0 pt-4">{{ $dataHero['nama'] }}</h4>
                                    <h6 class="ff-a-400">{{ $dataHero->role['nama'] }}</h6>
                                </div>
                                <div class="hero-hover d-none">
                                    <div class="backdrop-hero"></div>
                                    <div class="ms-2 position-absolute content-hover">
                                        <h4 class="text-white ff-a-600 mb-0 pt-3">{{ $dataHero['nama'] }}</h4>
                                        <h6 class="ff-a-400">{{ $dataHero->role['nama'] }}</h6>
                                        <p class="mb-0">Hero Dengan Role {{$dataHero->role['nama'] }} Dengan Specially
                                            {{ $dataHero['role_id'] }} </p>
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
        <button class="border-0" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
            <i class="bi bi-plus"></i>
        </button>
    </div>

    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3 text-white ff-a-600" id="staticBackdropLabel">Tambah Hero</h1>
                </div>
                <form action="/hero/store" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mt-2">
                                    <label class="text-white mb-2 ff-a-400">Nama Hero :</label>
                                    <input type="text" autocomplete="off" name="nama" class="form-control rounded-0 ff-a-400 form-hero hero" id="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="mb-3 mt-2">
                                    <label class="text-white mb-2 ff-a-400">Role Hero</label>
                                    <select class="form-select rounded-0 ff-a-400 form-hero" name="role_id" aria-label="Default select example">
                                        <option selected disabled> --- </option>
                                        @foreach ($role as $item)                                        
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                      </select>
                                    {{-- <select class="js-example-basic-multiple" id="mySelect2" name="states[]" multiple="multiple">
                                        <option selected value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                      </select> --}}
                                      
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="mb-3 mt-2">
                                    <label class="text-white mb-2 ff-a-400">Specially Hero :</label>
                                    <select name="specially" class="form-select rounded-0 ff-a-400 form-hero" >
                                        <option selected disabled> --- </option>
                                        <option value="burst">Burst</option>
                                        <option value="poke">Poke</option>
                                      </select>
                                </div>
                            </div>
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
@endsection
