<x-my-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-slot name="linkcss">
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    </x-slot>
    <div class="container flex-row">
        <div class="cate-container">
            <h2>Danh mục sản phẩm</h2>
            <div class="cate-box flex-col">
                @foreach ($cates as $cate)
                    <a class="cate-link flex-row" href="#">
                        <img class="cate-icon" src="{{ url('/assets/images/demo.jpg') }}" alt="">
                        <h5 class="cate-name">{{ $cate->name }}</h5>
                    </a>
                @endforeach
            </div>
            
        </div>
        <div class="banner-container">
            <div class="banner-slide">
                <img src="{{ url('/assets/images/banner1.jpg') }}" alt="Sports Apparel">    
                <img src="{{ url('/assets/images/banner2.jpg') }}" alt="Sports Shoes">    
                <img src="{{ url('/assets/images/banner3.jpg') }}" alt="Sports Accessories">
                <img src="{{ url('/assets/images/banner4.jpg') }}" alt="Fitness Gear">
            </div>

            <div class="dots-container">
                <span class="dot" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>

    <div class="contents-home flex-col">
        <div class="products-content-container flex-col">
            <div class="title-action flex-row">
                <h1 class="title-content">Sản phẩm phổ biến</h1>
                <a href="#">Xem thêm</a>
            </div>
            <div class="product-content flex-row">
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 </h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#" title="Thêm vào giỏ hàng">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Đồ bộ quần áo giày dép bóng chuyền bóng đá cầu lông</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-content-container flex-col">
            <div class="title-action flex-row">
                <h1 class="title-content">Yêu thích</h1>
                <a href="#">Xem thêm</a>
            </div>
            <div class="product-content flex-row">
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box flex-col">
                    <div class="img-box">
                        <img src="{{ url('/assets/images/demo.jpg') }}" alt="">
                    </div>
                    <div class="product-info flex-col">
                        <h4>Sản phẩm 1 Sản phẩm 1 Sản phẩm 1 Sản phẩm 1</h4>
                        <div class="price-box flex-row">
                            <span class="price-discount">999000 <i style="margin-bottom: 2px;">₫</i></span>
                            <span class="price-original">1500000 <i style="margin-bottom: 2px;">₫</i></span>
                        </div>
                        <div class="action-cart flex-row">
                            <span class="sold">Đã bán 2k4</span>
                            <a href="#">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ url('/assets/js/banners_slide.js') }}"></script>
    
</x-my-layout>