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
                    <a class="c-header__link is-home {{ Route::current()->getName() == 'home' ? 'is-choose' : ''}}" href="{{ Route::current()->getName() == 'home' ? '/#home' : '/'}}">ໜ້າຫຼັກ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#service">ບໍລິການ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#interface-warehouse">ຕົວຢ່າງເວັບໄຊ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#price-list">ລາຄາເວັບໄຊ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#procedure">ຂັ້ນຕອນດຳເນີນງານ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#train">ຫຼັກສູດຝຶກອົບຮົມ</a>
                </li>
                <li class="c-header__item">
                    <a class="c-header__link" href="/#blog">ບົດຄວາມ</a>
                </li>
                <li class="c-header__item c-header__item--style1">
                    <a href="#about-us" class="c-header__link is-child_item">ກ່ຽວກັບພວກເຮົາ &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="c-header__child">
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/contact">ຕິດຕໍ່ພວກເຮົາ</a>
                        </li>
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/pay">ການຊຳລະເງິນ</a>
                        </li>
                        <li class="c-header__child__item">
                            <a class="c-header__child__link" href="/introduction">ແນະນຳທີມງານ</a>
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