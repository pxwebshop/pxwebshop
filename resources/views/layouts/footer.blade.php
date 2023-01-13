<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105912482337654");
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
                <h5 class="c-footer__tlt">Lao Smart Tech</h5>
                <address>
                    <span><i class="fa-solid fa-location-dot"></i> ບ້ານ ຂາມງອຍ,​ ເມືອງ ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ</span>
                </address>
                <figure class="c-footer__logo pc-only">
                    <img src="https://placehold.jp/280x120.png" alt="laosmarttech@gmail.com">
                </figure>
            </div>
            <div class="c-footer__item">
                <h5 class="c-footer__tlt">ຕິດຕໍ່</h5>
                <ul class="c-footer__list">
                    <li class="c-footer__item1">
                        <span class="c-footer__item1__tlt">Email:</span>
                        <a class="c-footer__item1__txt" href="mailto:laosmarttech@gmail.com">
                            laosmarttech@gmail.com
                        </a>
                    </li>
                    <li class="c-footer__item1">
                        <span class="c-footer__item1__tlt">Hotline:</span>
                        <span class="c-footer__item1__txt">
                            <a href="tel:02028266650">020 28266650 </a>
                        </span>
                    </li>
                    <li class="c-footer__item1">
                        <a class="c-footer__item1__link" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/laosmarttech">
                            <span class="c-footer__icon">
                                <i aria-hidden="true" class="fab fa-facebook"></i>
                            </span>
                            <span class="c-footer__icon__txt">Fanpage LaoSmartTech</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="c-footer__item">
                <h5 class="c-footer__tlt">ເງື່ອນໄຂ</h5>
                <ul class="c-footer__list1">
                    <li class="c-footer__list1__item">
                        <a href="/privacy-policy">ນະໂຍບາຍຄວາມເປັນສ່ວນຕົວ</a>
                    </li>
                    <li class="c-footer__list1__item">
                        <a href="/terms-of-use">ເງື່ອນໄຂການນໍາໃຊ້</a>
                    </li>
                    <li class="c-footer__list1__item">
                        <a href="/pay">ຂໍ້ມູນການຊຳລະເງິນ</a>
                    </li>
                    {{-- <li class="c-footer__list1__item">
                        <a href="">ຄໍາຖາມທີ່ຖາມເລື້ອຍໆ</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <p class="c-footer__copyright">Copyright © 2022 Lao Smart Tech. All rights reserved.</p>
    </div>
</div>