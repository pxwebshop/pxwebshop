<header class="c-header 
{{ Route::current()->getName() === 'home' ? 'c-header--style1' : ''}}">
    <div class="l-container">
        <a class="c-header__logo" href="/">
            <figure>
                <img src="https://placehold.jp/150x80.png" alt="">
            </figure>
        </a>
        <nav class="c-header__nav">
            <ul class="c-header__list">
                <li class="c-header__item">
                    <a class="c-header__link is-home {{ Route::current()->getName() == 'home' ? 'is-choose' : ''}}" href="{{ Route::current()->getName() == 'home' ? '/#home' : '/'}}">Trang chủ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#service">Dịch Vụ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#interface-warehouse">Kho giao diện</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#price-list">Bảng giá</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#procedure">Quy trình</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#train">Đào tạo</a>
                </li>
                <li class="c-header__item c-header__item--style1">
                    <a href="#" class="c-header__link is-child_item">Về chúng tôi &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="c-header__child">
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/contact">Liên hệ</a>
                        </li>
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/pay">Thanh toán</a>
                        </li>
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/introduction">Giới thiệu</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="c-header__btn js-menu sp-only">
            <span class="c-header__btn__text">MENU</span>
            <div class="c-header__btn__lines">
              <span class="c-header__btn__line"></span>
            </div>
        </div>
    </div>
</header>