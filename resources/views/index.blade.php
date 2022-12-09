@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 sec-head d-flex">
                <span class="sec-border"></span>
            <div class="sec-title">
                    <h2>Trending</h2>
                    <p class="text-muted">Top view in this week</p>
                </div>
                <span class="sec-border"></span>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="product-image">
                        <span class="off">-58.3%</span>
                        <div class="card-hover d-flex align-items-center justify-content-center">
                            <button class="btn">
                                <span>View</span>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="btn">
                                <span>Cart</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                        <img src="{{ URL::asset('/img/mercurytee.webp') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Mercury tee</h6>
                        <p class="card-text">$30,00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="product-image">
                        <span class="off">-58.3%</span>
                        <div class="card-hover d-flex align-items-center justify-content-center">
                            <button class="btn">
                                <span>View</span>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="btn">
                                <span>Cart</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                        <img src="{{ URL::asset('/img/wshirt.webp') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Mercury tee</h6>
                        <p class="card-text">$30,00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="product-image">
                        <span class="off">-58.3%</span>
                        <div class="card-hover d-flex align-items-center justify-content-center">
                            <button class="btn">
                                <span>View</span>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="btn">
                                <span>Cart</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                        <img src="{{ URL::asset('/img/tshirt.webp') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Mercury tee</h6>
                        <p class="card-text">$30,00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="product-image">
                        <span class="off">-58.3%</span>
                        <div class="card-hover d-flex align-items-center justify-content-center">
                            <button class="btn">
                                <span>View</span>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="btn">
                                <span>Cart</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                        <img src="{{ URL::asset('/img/twpant.webp') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Mercury tee</h6>
                        <p class="card-text">$30,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
