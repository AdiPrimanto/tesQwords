@extends('layouts.default')

@section('content')

<div class="container">
    {{-- Slider --}}
    <div class="row">
        <div class="col-md-12">
            <div class="py-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://cf.shopee.co.id/file/8d6a104c5c05744c9af44425d05ccfb9_xxhdpi" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cf.shopee.co.id/file/ef9eb8a2a5a76d2c1f0dad9c0c349985_xxhdpi" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cf.shopee.co.id/file/23cfdbe31ac708e4c4bb576d636aa5b5_xxhdpi" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Kategori Pilihan --}}
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Kategori Pilihan</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner category">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/02577b74fe168f6dabd57eab9c2f8f21_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Elektronik</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/7dea4bb643bfb14ac71e46cd4e5740ad_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Tas Pria</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/1f18bdfe73df39c66e7326b0a3e08e87_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Aksesoris</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/ba92815c4339198b836bff5224d48911_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Jam Tangan</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/f9490654e54dc56e308cda4f6d86e840_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Kesehatan</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/e670ee2864a44227fb48a4c8c571d169_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Tas Wanita</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/61a7b80e42a3d272d170954c76ab84a7_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Hobi</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="	https://cf.shopee.co.id/file/8465b33b83d571b2dbac57481622002e_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Sepatu Pria</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/5bbc23650006cd766b8838f55d53aac7_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Handphone</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/962e5544f481d1032bd1dfd3137c4355_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Rumah</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/b98756cdb31eabe3d7664599e24ccc29_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Muslim</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/27838b968afb76ca59dd8e8f57ece91f_tn">
                                                <div class="card-body">
                                                    <h6 class="card-title">Otomotif</h6>
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
        </div>
    </div>

    {{-- Kejar Diskon --}}
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5 mb-5">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Kejar Diskon</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/d9c349208b7da5a7548c685c84c0c9eb_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">iPhone 11 Green</label>
                                                <h5 class="font-weight-bold">Rp 11.200.000</h5>
                                                <p class="card-text"><span class="badge badge-danger">12%</span> &nbsp;<span class="line-through">Rp 12.400.000</span></p>
                                            </div>
                                        </div>
                                    </div>            
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/c1e27a363c2ef03dc2eb566d3f40d636_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">Softcase Handphone</label>
                                                <h5 class="font-weight-bold">Rp 36.800</h5>
                                                <p class="card-text"><span class="badge badge-danger">15%</span> &nbsp;<span class="line-through">Rp 50.000</span></p>
                                            </div>
                                        </div>
                                    </div>            
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/efed5ffba51377a3ca1d1cdef4c39552_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">Sweater Hoodie</label>
                                                <h5 class="font-weight-bold">Rp 89.000</h5>
                                                <p class="card-text"><span class="badge badge-danger">40%</span> &nbsp;<span class="line-through">Rp 265.000</span></p>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/846b26500ad707ad66444f7f98239739_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">Mi Band 6</label>
                                                <h5 class="font-weight-bold">Rp 497.000</h5>
                                                <p class="card-text"><span class="badge badge-danger">25%</span> &nbsp;<span class="line-through">Rp 550.000</span></p>
                                            </div>
                                        </div>
                                    </div>            
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="	https://cf.shopee.co.id/file/a87450ee0ef6eb8fb36cfc0b9f6fa587_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">Celana Pendek Pria</label>
                                                <h5 class="font-weight-bold">Rp 49.800</h5>
                                                <p class="card-text"><span class="badge badge-danger">15%</span> &nbsp;<span class="line-through">Rp 69.000</span></p>
                                            </div>
                                        </div>
                                    </div>            
                                    <div class="col-md-4">
                                        <div class="card carousel-inner">
                                            <img class="img-fluid" alt="100%x280" src="https://cf.shopee.co.id/file/c5799a1c390d08d145df0147aee87e57_tn">
                                            <div class="card-body">
                                                <label class="card-title mb-0">Tas Selempang</label>
                                                <h5 class="font-weight-bold">Rp 40.000</h5>
                                                <p class="card-text"><span class="badge badge-danger">13%</span> &nbsp;<span class="line-through">Rp 62.000</span></p>
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
    </div>
</div>

@endsection