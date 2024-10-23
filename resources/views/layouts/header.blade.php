<header id="header">
    <div class="head-left">
        <img src="{{ asset('assets/images/logo.png') }}" alt="KcSport">
    </div>
    <div class="head-right">
        <div class="head-right-top">
            
            <form id="search-form" class="frm-search" method="post">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input id="input-search" class="input-search" type="text" name="key" placeholder="Nhập sản phẩm bạn muốn tìm kiếm" />
                <button class="btn-search" type="submit">Tìm kiếm</button>
            </form>
            <div class="nav">
                <a href="/" class="link link-home">
                    <i class="fa-solid fa-house-user"></i>
                    Trang chủ
                </a>
                <div class="div-nav">
                    <button class="link link-account" type="button">
                        <i class="fa-solid fa-user"></i>
                        Tài khoản
                    </button>
                    <ul class="subnav">
                        <li><a href="#">Thông tin tài khoản</a></li>
                        <li><a href="#">Đơn hàng của tôi</a></li>
                        <li><a href="#">Trung tâm hỗ trợ</a></li>
                        <li><a href="/login">Đăng nhập</a></li>
                    </ul>
                </div>
                <a class="nav-cart" href="#" title="Giỏ hàng">
                    <i class="ti-shopping-cart"></i>
                    <span class="quantity-product-cart">0</span>
                </a>
            </div>
        </div>
        <div class="head-right-bottom">
            <div class="head-bottom-suggest">
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">giày bóng chuyền</span>
                </a>
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">giày bóng đá</span>
                </a>
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">phụ kiện</span>
                </a>
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">quần áo bóng chuyền</span>
                </a>
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">gậy bi-a</span>
                </a>
                <a class="suggest-item-link" href="#">
                    <span class="suggest-item">giày sneaker</span>
                </a>
            </div>
            <div class="head-bottom-address">
                <i class="ti-location-pin"></i>
                <h4>Giao đến:</h4>
                <a href="#">Q.Hải Châu, P.Hải Châu, Đà Nẵng</a>
            </div>
        </div>
    </div>
</header>