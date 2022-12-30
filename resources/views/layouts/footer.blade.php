<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "100919432505933");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div class="c-footer wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
    <div class="l-container">
        <div class="c-footer__inner">
            <div class="c-footer__item">
                <h5 class="c-footer__tlt">CÔNG TY TNHH TMĐT CÔNG NGHỆ PXWEBSHOP</h5>
                <address>
                    <span><i class="fa-solid fa-location-dot"></i> VP tại Lào: ບ້ານ ຂາມງອຍ,​ ເມືອງ ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ</span>
                    <span><i class="fa-solid fa-location-dot"></i> VP tại Việt Nam: 150 Huỳnh Tần Phát, Tân Thuận Đông, Quận 7, Thành Phố Hồ Chí Minh</span>
                </address>
                <figure class="c-footer__logo pc-only">
                    <img src="https://placehold.jp/280x120.png" alt="" srcset="">
                </figure>
            </div>
            <div class="c-footer__item">
                <h5 class="c-footer__tlt">LIÊN HỆ</h5>
                <ul class="c-footer__list">
                    <li class="c-footer__item1">
                        <span class="c-footer__item1__tlt">Email:</span>
                        <span class="c-footer__item1__txt">pxwebshop@gmail.com</span>
                    </li>
                    <li class="c-footer__item1">
                        <span class="c-footer__item1__tlt">Hotline:</span>
                        <span class="c-footer__item1__txt">
                            <a href="tel:+02028266650">020 28266650 </a>
                        </span>
                    </li>
                    <li class="c-footer__item1">
                        <span class="c-footer__item1__tlt">Tổng đài:</span>
                        <span class="c-footer__item1__txt">
                            <a href="tel:+4733378901">+47 333 78 901</a>
                        </span>
                    </li>
                    <li class="c-footer__item1">
                        <a class="c-footer__item1__link" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pxwebshop">
                            <span class="c-footer__icon">
                                <i aria-hidden="true" class="fab fa-facebook"></i>
                            </span>
                            <span class="c-footer__icon__txt">Fanpage PXwebshop</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="c-footer__item">
                <h5 class="c-footer__tlt">ĐIỀU KHOẢN CHÍNH SÁCH</h5>
                <ul class="c-footer__list1">
                    <li class="c-footer__list1__item">
                        <a href="/privacy-policy">Chính Sách Bảo Mật</a>
                    </li>
                    <li class="c-footer__list1__item">
                        <a href="/terms-of-use">Điều Khoản Sử Dụng</a>
                    </li>
                    <li class="c-footer__list1__item">
                        <a href="">Thông Tin Thanh Toán</a>
                    </li>
                    {{-- <li class="c-footer__list1__item">
                        <a href="">Câu Hỏi Thường Gặp</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <p class="c-footer__copyright">Copyright © 2022 PX WebShop. All rights reserved.</p>
    </div>
</div>