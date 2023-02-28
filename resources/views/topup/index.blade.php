@extends('layout.mainlayout')

@section('title', 'Top Up')

@section('content')
<div class="hero-side-content">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mx-2">
                    <div class="card-header">
                        <h5 class="text-white fw-semibold ">Lengkapi Data</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label class="white-primary mb-1">User ID</label>
                                <input type="number" name="id" class="form-control rounded-0" id="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label class="white-primary mb-1">Server ID</label>
                                <input type="number" name="server" class="form-control rounded-0" id="">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary rounded-0">Petunjuk</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mx-2 mt-4">
                    <div class="card-header">
                        <h5 class="text-white fw-semibold ">Pilih Nominal</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">86 (78+8) Diamonds </p>
                                        <p class="white-primary">Rp.19.700</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">172 (156+16) Diamonds </p>
                                        <p class="white-primary">Rp.39.400</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">257 (234+23) Diamonds </p>
                                        <p class="white-primary">Rp.59.000</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">344 (312+32) Diamonds </p>
                                        <p class="white-primary">Rp.59.000</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">429 (390+39) Diamonds </p>
                                        <p class="white-primary">Rp.59.000</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 gy-3">
                                <div class="card-diamond bg-dark-primary2 d-flex rounded-3 ">
                                    <div class="ms-3 mt-2">
                                        <p class="text-white mb-0">514 (468+46) Diamonds </p>
                                        <p class="white-primary">Rp.59.000</p>
                                    </div>
                                    <div class="m-lg-auto m-md-auto me-1 my-auto">
                                        <img src="https://lumosdiamond.com/assets/img/167420394350ormore_MLBB_Diamonds.png" width="40px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
