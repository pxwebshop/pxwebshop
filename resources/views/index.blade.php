@section('title','Pxwebshop Home')
@extends('layouts.template')

@section('content')
<main class="p-home" id="home">
    <section class="p-home1">
      <div class="l-container">
        <ul class="c-list1 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <li class="c-list1__item">
            <h1 class="c-title1">ອອກແບບເວັບໄຊ ຕາມມາດຕະຖານ SEO.<br/>
              <span class="c-title1__txt">ເປັນຜູ້ນຳ</span>
              <span class="c-title1__color1">ໃນດ້ານເຕັກໂນໂລຊີ</span>
            </h1>
            <p class="c-title1__description">Lao Smart Tech ເປັນຜູ້ນຳໃນດ້ານ SEO, ອອກແບບເວັບໄຊ, ອອກແບບໂປຣແກຣມ, ອອກແບບລະບົບເຄືອຂ່າຍ, ອອກແບບລະບົບບ້ານອັດສະລິຍະ ແລະ ຝຶກອົບຮົມ. ມີປະສົບການຫຼາຍກວ່າ 7 ປີ ແລະ ມີທີມງານມືອາຊີບທີ່ໄດ້ຮັບການຝຶກອົບຮົມສະເພາະດ້ານ.</p>
          </li>
          <li class="c-list1__item">
            <figure>
              <img src="/images/banner.png" alt="công ty lao smart tech thiết kế website">
            </figure>
          </li>
        </ul>
      </div>
      {{-- <div class="l-container">
        <h3 class="c-title1">ລາຄາບໍລິການ <span class="c-title1--color1">ອອກແບບ WEBSITE</span> TẠI PXWEBSHOP</h3>
        <p class="c-text1">Giá thiết kế web trọn gói được Pxwebshop công khai rõ ràng và minh bạch. Tuỳ theo mục đích và lĩnh vực <br/>kinh doanh mà khách hàng lựa chọn gói dịc vụ phù hợp</p>
      </div> --}}
      <div class="p-home1__box">
        <div class="p-home1__svg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
            <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
            <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
            <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
            <path class="elementor-shape-fill" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
          </svg>
        </div>
      </div>
    </section>
 
    <section class="p-home2">
      <div class="l-container">
        <ul class="c-box1 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <li class="c-box1__item">
            <div class="c-box1__inner">
              <div class="c-box1__icon">
                <i class="fa fa-whatsapp"></i>
              </div>
              <div class="c-box1__info">
                <h5 class="c-box1__tlt">ຕິດຕໍ່ WhatsApp</h5>
                <p class="c-box1__txt">ສຳພັດຄຸນສົມບັດໃນການຕອບໂຕ້ຂອງລະບົບເວັບໄຊ, ເຊີ່ງເປັນສີ່ງທີ່ລູກຄ້າຈະໄດ້ຮັບເມື່ອໃຊ້ບໍລິການ.</p>
                <a target="_blank" rel="noopener" href="https://api.whatsapp.com/message/FJW3P3M2S54IA1?autoload=1&app_absent=0" class="c-box1__btn">ຕິດຕໍ່ຕອນນີ້</a>
              </div>
            </div>
          </li>
          <li class="c-box1__item">
            <div class="c-box1__inner">
              <div class="c-box1__icon">
                <i class="fa fa-users"></i>
              </div>
              <div class="c-box1__info">
                <h5 class="c-box1__tlt">ຂໍຄຳປຶກສາ</h5>
                <p class="c-box1__txt">ເຂົ້າໃຈຜະລິດຕະພັນ, ສັນຍາ ແລະ ຜົນປະໂຫຍດຂອງລູກຄ້າທີ່ຈະໄດ້ຮັບເມື່ອໃຊ້ບໍລິການ.</p>
                <a class="c-box1__btn" href="tel:+02028266650"><i class="fa fa-phone"></i> 020 28266650</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-home3" id="service">
      <div class="l-container">
        <div class="c-box2 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <h2 class="c-title2">
            <span class="c-title2__text">
            ບໍລິການ <span class="c-title2__color1">ທີ່ໂດດເດັ່ນ</span> ຂອງ <span class="c-title2__color1">Lao Smart Tech</span>
            </span>
            <span class="c-title2__text1">
            Lao Smart Tech ຊ່ຽວຊານໃນການສະໜອງຊ່ອງທາງໃນການເພີ່ມມູນຄ່າສໍາຫຼັບທຸລະກິດຂະໜາດນ້ອຍ ແລະ ຂະໜາດກາງ, ດ້ວຍພະນັກງານທີ່ມີປະສົບການຕົວຈີງ, ເຮັດວຽກຕາມມາດຕະຖານຍີ່ປຸ່ນ.<br> ເພື່ອຮັບປະກັນວ່າລະບົບຂອງທ່ານເຮັດວຽກໄດ້ດີ ແລະ ມີປະສິດທິພາບສູງສຸດ.
            </span>
          </h2>

          <ul class="c-box2__list">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-computer"></i>
                </div>
                <h4 class="c-box2__tlt">ບໍລິການອອກແບບ Website</h4>
                <p class="c-box2__txt">ຕາມຄວາມຕ້ອງການຊັບພະຍາກອນທາງທຸລະກິດໃນປັດຈຸບັນ Lao Smart Tech ມຸ່ງໝັ້ນທີ່ຈະສ້າງເວັບໄຊທີ່ດີທີ່ສຸດ ເພື່ອໂຄສະນາທຸລະກິດ ແລະ ສ້າງຜົນກຳໄລສູງສຸດ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-network-wired"></i>
                </div>
                <h4 class="c-box2__tlt">ບໍລິການອອກແບບ Network</h4>
                <p class="c-box2__txt">ຫຼາຍໆອົງກອນຍັງມີຂໍ້ຈຳກັດທາງດ້ານລະບົບເຄືອຂ່າຍ ທີ່ບໍ່ໄດ້ມາດຕະຖານ, ດັ່ງນັ້ນພວກເຮົາພ້ອມທີ່ຈະໃຫ້ບໍລິການເພື່ອ ອອກແບບ, ຕິດຕັ້ງ, ປັບປຸງ ແລະ ບຳລຸງຮັກສາລະບົບເຄືອຂ່າຍຂອງທ່ານ ໃຫ້ມີປະສິດທິພາບສູງສຸດ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-computer"></i>
                </div>
                <h4 class="c-box2__tlt">ບໍລິການອອກແບບ Logo,..</h4>
                <p class="c-box2__txt">ບໍລິການອອກແບບ Logo, Banner... ໂດຍທີມງານອອກແບບທີ່ເປັນມືອາຊີບ, ພວກເຮົາໝັ້ນໃຈທີ່ຈະມອບຜະລິດຕະພັນທີ່ດີທີ່ສຸດໃຫ້ກັບທ່ານ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa-solid fa-code"></i>
                </div>
                <h4 class="c-box2__tlt">ຂຽນໂປຣແກຣມ</h4>
                <p class="c-box2__txt">ພວກເຮົາມີຄວາມຊຳນານໃນການພັດທະນາໂປຣແກຣມຄຸ້ມຄອງ ແລະ ຈັດການລະບົບ ເພື່ອຊ່ວຍໃຫ້ທຸລະກິດຂອງທ່ານດໍາເນີນການໄດ້ຢ່າງມີປະສິດທິພາບ ແລະ ງ່າຍໃນການບໍລິຫານຈັດການ.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="p-home4" id="interface-warehouse">
      <div class="c-slider wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
        <h2 class="c-title2">
          <span class="c-title2__text">
             <span class="c-title2__color1">ຕົວຢ່າງ</span> Website
          </span>
          <span class="c-title2__text1">
            ມີຕົວຢ່າງເວັບໄຊທີ່ຫຼາກຫຼາຍບໍ່ວ່າຈະເປັນເວັບໄຊ ອີຄອມເມິດສ, ຂາຍສີນຄ້າ, ຂ່າວສານ, ແນະນຳທຸລະກິດ  <br/> ໂດຍຄວບຄຸມທຸກສາຂາອາຊີບ ໃຫ້ທ່ານເລືອກໄດ້ຕາມໃຈມັກ.
          </span>
        </h2>
        <div class="c-slider__list">
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/05/vanphongphamfast-trangchu.jpg" alt="nest mart grocery">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex1" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex1">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/05/vanphongphamfast-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/06/cleverfood-trangchu.jpg" alt="blogar">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex2" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex2">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/06/cleverfood-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/05/dualeoshoes-trangchu.jpg" alt="elanna">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex3" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex3">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/05/dualeoshoes-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/04/nuochoa-trangchu.jpg" alt="innivation architecture">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex4" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex4">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/04/nuochoa-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/03/broshop-trangchu.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex5" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex5">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/03/broshop-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/maynenkhi-trangchu.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex6" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex6">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/maynenkhi-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/laptoppro.vn-trang-chu.png" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex7" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex7">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/laptoppro.vn-trang-chu.png" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/watch-mirora-trangchu.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex8" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex8">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/watch-mirora-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div class="c-slider__list">
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2020/06/FireShot-Capture-019-Yoko-Edu-mauweb.monamedia.net_.png" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex9" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex9">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2020/06/FireShot-Capture-019-Yoko-Edu-mauweb.monamedia.net_.png" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/03/fpt-hanoi-trangchu.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex10" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex10">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/03/fpt-hanoi-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/01/FireShot-Capture-482-Kids-World-http___mauweb.monamedia.net_kidsworld_.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex11" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex11">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/01/FireShot-Capture-482-Kids-World-http___mauweb.monamedia.net_kidsworld_.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/mlandmarkresidence-landingpage.jpg" alt="nest mart grocery">
              </figure>
              <div class="c-slider__btnWrap">
                <a  href="#ex12" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex12">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/mlandmarkresidence-landingpage.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/01/phu-my-hung.jpg" alt="blogar">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex13" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex13">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/01/phu-my-hung.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/traveltime-trangchu.jpg" alt="elanna">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex14" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex14">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/traveltime-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/02/trabble-trangchu.jpg" alt="innivation architecture">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex15" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex15">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2019/02/trabble-trangchu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2017/11/trang-chu-truot-tuyet.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex16" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex16">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2017/11/trang-chu-truot-tuyet.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2017/11/trang-chu.jpg" alt="digital solution">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex17" rel="modal:open" class="c-slider__btn c-slider__btn--style1">ເບິ່ງ ຕົວຢ່າງ</a>
              </div>
              <div class="c-slider__modal modal" id="ex17">
                <figure>
                  <img src="https://mona.media/wp-content/uploads/2017/11/trang-chu.jpg" alt="elanna">
                </figure>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>

    <section class="p-home5" id="price-list">
      <div class="l-container">
        <div class="c-list2 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <h2 class="c-title2">
            <span class="c-title2__text">
            ລາຄາແພັກເກັດ <span class="c-title2__color1">ບໍລິການອອກແບບເວັບໄຊ</span> ຂອງ Lao Smart Tech
            </span>
            <span class="c-title2__text1">
            ລາຄາແພັກເກັດອອກແບບເວັບໄຊ ໄດ້ລະບຸລາຍລະອຽດຕ່າງໆໄວ້ຢ່າງຊັດເຈນ ແລະ ຄົບຖ້ວນ, ທ່ານສາມາດເລືອກຕາມຄວາມເຫມາະສົມ ຂອງຈຸດປະສົງ ແລະ ປະເພດທຸລະກິດຂອງທ່ານ. 
            </span>
          </h2>
          <ul class="c-list2__inner">
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">ບໍລິການອອກແບບເວັບໄຊ 
                    <span>(Basic)</span>
                  </h4>
                  <p class="c-list2__price">24,999,000 LAK</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">ເໝາະສຳຫຼັບເວັບໄຊຮູບແບບ Landing Page, ເວັບໄຊຂ່າວສານ, ເວັບໄຊແນະນຳທຸລະກິດ... ພ້ອມກັບຟັງຊັ່ນຕ່າງໆ ທີ່ຈຳເປັນໃນເວັບໄຊມາດຕະຖານ SEO.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐</strong>Source Code: Lao Smart Tech Core</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Framework (ຖ້າລູກຄ້າຕ້ອງການ): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ແບບເວັບໄຊ: ອອກແບບເວັບໄຊຕາມຕົວຢ່າງທີ່ມີຢູ່ແລ້ວ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ຮັບປະກັນ: ຕະຫຼອດການໃຊ້ງານ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ບໍາລຸງຮັກສາ: 1 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem">✅ &nbsp;ມາດຕະຖານ Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;ຮັບປະກັນ: Hỗ trợ ບໍາລຸງຮັກສາ, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 ປີ domain quốc tế (.com, .net, .org)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 ປີ dùng hosting lên đến 3GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ພາສາ: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Không</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">ລົງທະບຽນ</a>
              </div>
            </li>
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">ບໍລິການອອກແບບເວັບໄຊ
                    <span>(Advanced)</span>
                  </h4>
                  <p class="c-list2__price">39,999,000 LAK</p>
                  <p class="c-list2__hot">ໂດດເດັ່ນ</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">Phù hợp với các website bán hàng, website thương mại nhỏ, website bất động sản, web nông nghiệp,... với đầy đủ các tính năng cao cấp về đặt hàng, thanh toán.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Source Code: Lao Smart Tech Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ບໍາລຸງຮັກສາ: 1 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (ຖ້າລູກຄ້າຕ້ອງການ): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບບເວັບໄຊ: Thiết kế ແບບເວັບໄຊ riêng theo yêu cầu khách hàng</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem">✅ &nbsp;ມາດຕະຖານ Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;ຮັບປະກັນ: Hỗ trợ ບໍາລຸງຮັກສາ, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;ມາດຕະຖານ SEO: Cam kết ມາດຕະຖານ SEO 100%</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 ປີ domain Lào (.la, .com)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 ປີ dùng hosting lên đến 5GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ພາສາ: Tiếng Lào</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Giảm 10% phí dịch vụ chăm sóc Website + Fanpage</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">ລົງທະບຽນ</a>
              </div>
            </li>
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">ບໍລິການອອກແບບເວັບໄຊ
                    <span>(Professional)</span>
                  </h4>
                  <p class="c-list2__price">ຕິດຕໍ່ (VIP)</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">Phù hợp với các website thương mại điện tử lớn, website có thuật toán thoạt toán truy xuất khó (phong thuỷ, toán học,...), website có traffic cao, cần độ ຄວາມປອດໄພ và SEO cao cấp.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Source Code: Lao Smart Tech Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (ຖ້າລູກຄ້າຕ້ອງການ): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບບເວັບໄຊ: Thiết kế ແບບເວັບໄຊ riêng theo yêu cầu khách hàng</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຮັບປະກັນ: ຕະຫຼອດການໃຊ້ງານ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ບໍາລຸງຮັກສາ: 2 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem">✅ &nbsp;ມາດຕະຖານ Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;ມາດຕະຖານ SEO: Cam kết ມາດຕະຖານ SEO 100%</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hỗ trợ thay đổi theo xu hướnghướng SEO mới nhất của Google theo thời gian ບໍາລຸງຮັກສາ</li>
                    <li class="c-list2__boxItem">✅ &nbsp;ຮັບປະກັນ: Hỗ trợ ບໍາລຸງຮັກສາ, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 ປີ domain quốc tế (.com, .net, .org)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 ປີ dùng hosting lên đến 10GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ພາສາ: Tiếng Việt, Tiếng Anh, Tiếng Lào, Tiếng Nhật</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Giảm 10% phí dịch vụ chăm sóc Website + Fanpage</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">ລົງທະບຽນ</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="p-home6" id="procedure">
      <div class="l-container">
        <div class="c-box2 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <h2 class="c-title2">
            <span class="c-title2__text">
              ຂັ້ນຕອນດຳເນີນງານສ້າງ website  <span class="c-title2__color1">ແບບມືອາຊີບຂອງ Lao Smart Tech </span>
            </span>
            <span class="c-title2__text1">
            Lao Smart Tech ຢຶດຖືເອົາລູກຄ້າເປັນສູນກາງ ໂດຍເນັ້ນໃນການຊ່ວຍເຫຼືອ, ໃຫ້ຄຳປຶກສາ ແລະ ແກ້ໄຂບັນຫາຂອງລູກຄ້າ ໃນການອອກແບບເວັບໄຊ.<br> ພວກເຮົາມີຂະບວນການເຮັດວຽກທີ່ຈະແຈ້ງ ແລະ ຊັດເຈນ ເພື່ອຮັບໃຊ້ທ່ານຢ່າງເປັນມືອາຊີບ.
            </span>
          </h2>

          <ul class="c-box2__list c-box2__list--style1">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 1
                </div>
                <h4 class="c-box2__tlt">ເຂົ້າໃຈລູກຄ້າ</h4>
                <p class="c-box2__txt">Đội ngũ nhân
                  viên giàu kinh nghiệm của Lao Smart Tech gặp gỡ khách hàng, lắng nghe ý tưởng thiết kế, thảo luận về tính năng mà bạn
                  mong muốn trong thiết kế web. Sau khi tư vấn giải pháp và tính năng phù hợp với mục đích và nhu cầu của bạn,
                  chúng tôi lên kế hoạch thiết kế.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 2
                </div>
                <h4 class="c-box2__tlt">ລົງ​ນາມ ​ແລະ ​ຮ່ວມ​ມື​</h4>
                <p class="c-box2__txt">Để đảm bảo quyền lợi cho bạn,
                  chúng ta cùng nhau ghi nhận bằng văn bản
                  pháp lý. Cái bắt tay nhỏ thể hiện tinh thần lớn, Lao Smart Tech sẽ là người đồng hành cùng bạn, giúp bạn xây dựng
                  giải pháp thiết kế website phù hợp và nâng tầm thương hiệu của bạn trên thị trường.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 3
                </div>
                <h4 class="c-box2__tlt">ອອກແບບ</h4>
                <p class="c-box2__txt">Đến giai đoạn này thiết kế website của bạn gần như được hoàn thiện. Tuy nhiên với mong muốn tạo ra sản phẩm tốt nhất, và để đảm bảo website hoạt động trơn tru và hiệu quả, đội ngũ kỹthuật Lao Smart Tech sẽ kiểm tra và hiệu chỉnh trước khi thực sự đưa vào hoạt động.</p>
              </div>
            </li>

            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 4
                </div>
                <h4 class="c-box2__tlt">Lập trình</h4>
                <p class="c-box2__txt">Dựa trên ý
                  Từ thiết kế đã có và những kinh nghiệm đúc kết trong nhiều ປີ làm việc, đội ngũ lập trình viên sẽ lên kế hoạch lập trình ມາດຕະຖານ UX (trải nghiệm người dùng), thực hiện lập trình web, đảm bảo đầy đủ các tính năng hữu ích và tiện lợi cho website của bạn.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 5
                </div>
                <h4 class="c-box2__tlt">Thử nghiệm và chỉnh sửa</h4>
                <p class="c-box2__txt">Đến giai đoạn này thiết kế website của bạn gần như được hoàn thiện. Tuy nhiên với mong muốn tạo ra sản phẩm tốt nhất, và để đảm bảo website hoạt động trơn tru và hiệu quả, đội ngũ kỹ thuật Lao Smart Tech sẽ kiểm tra và hiệu chỉnh trước khi thực sự đưa vào hoạt động.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 6
                </div>
                <h4 class="c-box2__tlt">ສົ່ງມອບ toàn diện</h4>
                <p class="c-box2__txt">ສົ່ງມອບ toàn diện là trách nhiệm của toàn thể đội ngũ Lao Smart Tech. Đội ngũ Lao Smart Tech sẽ hướng dẫn bạn quản trị web tận tình và chu đáo. Dù đã hoàn thành dự án, đội ngũ Lao Smart Tech luôn trong tâm thế sẵn sàng hỗ trợ bạn trong quá trình bạn vận hành và quản trị website.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="p-home7" id="certificate">
      <div class="l-container">
        <div class="c-box3 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <h2 class="c-title2">
            <span class="c-title2__text">
              ບັນດາ <span class="c-title2__color1">ໃບຢັ້ງຢືນ</span> ວິຊາຊີບ
            </span>
            <span class="c-title2__text1">
             Lao Smart Tech ຮຽນຮູ້ເຕັກໂນໂລຊີໃໝ່ໆຢູ່ຕະຫຼອດເວລາ ເພື່ອນຳເອົາມູນຄ່າທີ່ດີທີ່ສຸດໃຫ້ແກ່ລູກຄ້າ.
            </span>
          </h2>

          <ul class="c-box3__wrap">
            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/HCIA-Access.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">sửa chỗ này nha </h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/HCIP-Access.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco ceftifications</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>

            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img3.jpg') }}" alt="advaced diplona in fomation techology">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Advaced diplona in fomation techology</h5>
                  <p class="c-box3__txt">(example: Chứng chỉ chuyên gia ຄວາມປອດໄພ của ICSI cấp)Viết ພາສາ lào</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/CCNA_Security_rotated.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei certification</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img2.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco ceftifications</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img4.jpg') }}" alt="certificate course in advanced web technology">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate course in advanced web technology</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>

            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/HCIA-Datacom.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei certification</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/BigDataAnalytics.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco ceftifications</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img5.jpg') }}" alt="certificate course in data communication and networking">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate course in data communication and networking</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/CCEHIS.jpg') }}" alt="certificate course in data communication and networking">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate course in data communication and networking</h5>
                  <p class="c-box3__txt">Viết ພາສາ lào</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="commit" class="p-home8 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
      <div class="l-container">
        <div class="c-box4">
          <h2 class="c-title2">
            <span class="c-title2__text">
              <span class="c-title2__color1">ຄໍາສັນຍາ </span> ຈາກພວກເຮົາ
            </span>
            <span class="c-title2__text1">
              Lao Smart Tech ພ້ອມດ້ວຍທີມງານທັງພາຍໃນ ແລະ ຕ່າງປະເທດ ມຸ່ງຫມັ້ນທີ່ຈະສະຫນອງຜະລິດຕະພັນຄຸນນະພາບທີ່ດີທີ່ສຸດໃຫ້ແກ່ລູກຄ້າ.
            </span>
          </h2>

          <ul class="c-box4__content">
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-life-ring"></i>
                </p>
                <h5 class="c-box4__tlt">ຊ່ວຍເຫຼືອ</h5>
                <p class="c-box4__txt">
                  ຕອບສະໜອງ, ຊ່ວຍເຫຼືອ ແລະ ຕອບຄໍາຖາມຂອງລູກຄ້າ ດ້ວຍຄວາມຈີງໃຈ.
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-clock"></i>
                </p>
                <h5 class="c-box4__tlt">ແກ້ໄຂບັນຫາຢ່າງວ່ອງໄວ​</h5>
                <p class="c-box4__txt">
                  ຕອບສະໜອງຈັດການບັນຫາຕ່າງໆທີ່ກ່ຽວຂ້ອງກັບລະບົບ ໄວເທົ່າທີ່ເປັນໄປໄດ້.
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="fas fa-headset"></i>
                </p>
                <h5 class="c-box4__tlt">ໃຫ້ຄໍາປຶກສາ​</h5>
                <p class="c-box4__txt">
                  ​ໃຫ້​ຄໍາ​ປຶກ​ສາດ້ວຍຄວາມຈີງໃຈ​ ເພື່ອ​ແກ້​ໄຂ​ບັນ​ຫາ​ໃນ​ລະ​ຫວ່າງ​ການ​​ໃຊ້ງານ.​
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-check-square"></i>
                </p>
                <h5 class="c-box4__tlt">ຮັບປະກັນ ຈາກພວກເຮົາ​​</h5>
                <p class="c-box4__txt">
                  ຮັບປະກັນສິດທິໃນການເປັນເຈົ້າຂອງເວັບໄຊຖືກຕ້ອງຕາມກົດໝາຍ.
                </p>
              </div>
            </li>
          </ul>
        </div>

        <div class="c-box5">
          <h2 class="c-title2">
            <span class="c-title2__text">
              <span class="c-title2__color1">ຄູ່ຮ່ວມມື </span> ທີ່ເຊື່ອຖືໃຊ້ບໍລິການ
            </span>
          </h2>
          <ul class="c-box5__content is-list1">
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img1.png') }}" alt="">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img2.png') }}" alt="pxwebshop chuyên phân phối website">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img3.png') }}" alt="pxwebshop đi đầu trong lĩnh vực phần mềm quản lý">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img4.png') }}" alt="pxwebshop chuyển quảng cáo sản phẩm">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img5.png') }}" alt="pxwebshop cung cấp website giá rẻ">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img6.png') }}" alt="pxwebshop chất lượng sản phẩm cao">
              </figure>
            </li>
            <li class="c-box5__item">
              <figure>
                <img src="{{ asset('images/img7.png') }}" alt="pxwebshop thông tin người dùng ຄວາມປອດໄພ">
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    @if(count($blogs) > 0)
    <section id="blog" class="p-home9 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
      <div class="l-container">
        <h2 class="c-title2">
          <span class="c-title2__text">
            <span class="c-title2__color1">ບົດຄວາມ</span> ຍອດນິຍົມ
          </span>
        </h2>

        <div class="c-list10">
          <ul class="c-list10__list">
            @foreach($blogs as $key => $item)
            <li class="c-list10__item">
              <a href="{{route('blog_detail', $item->id)}}" class="c-list10__wrap">
                <figure>
                  <img src="{{url('storage/images/blog/feature/'.$item->featured_image.'')}}" alt="">
                </figure>
                <div class="c-list10__info">
                  <h3 class="c-list10__tlt">{{$item->title}}</h3>
                  <p class="c-list10__date"><span>Ngày đăng: </span>{{ date('d-m-Y', strtotime($item->created_at)); }}</p>
                  <ul class="c-list10__category">
                    @foreach($item->blog_category()->get() as $key => $value)
                      @if($key == 0)
                      <li class="c-list10__category__item">
                        {{$value->name}}
                      </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>
    @endif

    <section id="train" class="p-home10 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
      <div class="c-box6">
        <h2 class="c-title2">
          <span class="c-title2__text">
            <span class="c-title2__color1">ຝຶກອົບຮົມ</span> ພະນັກງານລະດັບສູງ
          </span>
          <span class="c-title2__text1">
           ດ້ວຍ​ຄວາມ​ຮູ້ ແລະ ຄວາມສາມາດ ​ໃນ​ການ​ເຮັດ​ວຽກ​ກ່ຽວກັບດ້ານເຕັກໂນໂລຊີການສື່ສານ ແລະ ຂໍ້ມູນຂ່າວສານ Lao Smart Tech ​ໄດ້​ສະໜອງ​ການ​ຝຶກ​ອົບຮົມໃຫ້ແກ່​ພະນັກງານລະດັບສູງ.
          </span>
        </h2>
        <ul class="c-box6__inner is-list2">
          <li class="c-box6__item">
            <ul class="c-box6__list">
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img9.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img11.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img src="{{ asset('images/img10.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img src="{{ asset('images/img12.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
            </figure>
          </li>
          <li class="c-box6__item">
            <ul class="c-box6__list">
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img14.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img15.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img src="{{ asset('images/img16.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img src="{{ asset('images/img13.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
            </figure>
          </li>

          <li class="c-box6__item">
            <ul class="c-box6__list">
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img18.jpeg') }}" alt="">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img src="{{ asset('images/img19.jpeg') }}" alt="">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img src="{{ asset('images/img20.jpeg') }}" alt="">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img src="{{ asset('images/img17.jpeg') }}" alt="">
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <section id="register" class="p-home11 modal">
      <div class="l-container">
          <div class="c-box12">
            <div class="c-box12__inner">
              <form action="/" method="POST">
                @csrf
                <h2 class="c-box12__tlt">ປ້ອນຂໍ້ມູນເພື່ອ ລົງທະບຽນ</h2>
                <p class="c-box12__tlt__sub">Lao Smart Tech ໃຫ້ຄຳແນະນຳ ແລະ ຊ່ວຍເຫຼືອລູກຄ້າ 24/7</p>

                <div class="print-error-msg" style="display:none">
                  <ul></ul>
                </div>
          
                <ul class="c-box12__list">
                  <li class="c-box12__item">
                    <p class="c-box12__txt">ຊື່ ແລະ ນາມສະກຸນ</p>
                    <input name="name" type="text" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">ອີເມວ</p>
                    <input name="email" type="email" placeholder="ອີເມວ">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">ເບີ້ໂທລະສັບ</p>
                    <input name="phone" type="number" placeholder="ເບີ້ໂທລະສັບ">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">ເລືອກປະເພດບໍລິການ</p>
                    <select name="service_pack">
                      <option value="0">ເລືອກປະເພດບໍລິການ</option>
                      <option value="1">ບໍລິການອອກແບບເວັບໄຊ (Basic)</option>
                      <option value="2">ບໍລິການອອກແບບເວັບໄຊ (Advanced) </option>
                      <option value="3">ບໍລິການອອກແບບເວັບໄຊ (Professional)</option>
                    </select>
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">Captcha</p>
                    <div class="captcha">
                      <span>{!! captcha_img() !!}</span>
                      <button type="button" class="btn-refresh"><i class="fa fa-refresh"></i></button>
                      <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                    </div>
                  </li>
                </ul>
               
                <button type="submit" class="c-box12__btn">ລົງທະບຽນ</button>
              </form>
              <figure>
                <img src="https://placehold.jp/800x500.png" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
              </figure>
            </div>
          </div>
      </div>
    </section>
</main>
@endsection

@push('scripts')

<script type="text/javascript">
  $(document).ready(function() {
      $(".c-box12__btn").click(function(e){
        e.preventDefault();
        $(this).prop('disabled', true);
        $(this).append(`<span class="loader"></span>`);

        var _token = $("input[name='_token']").val();
        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var phone = $("input[name='phone']").val();
        var service_pack = $("select[name='service_pack']").val();
        var captcha = $("input[name='captcha']").val();
        let that = this;
        $.ajax({
            url: "/",
            type:'POST',
            data: {_token:_token, name:name, email:email, phone:phone, service_pack:service_pack, captcha:captcha},
            success: function(data) {
              $('.loader').remove();

              setTimeout(() => {
                alert(data.success);
                location.reload();
              }, 200);
            },
            error: function(errors) {
              printErrorMsg(errors.responseJSON.error);
              $(that).prop('disabled', false);
              $('.loader').remove();
            },
        });
      }); 

      function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
      }

      $(".btn-refresh").click(function(){
        $.ajax({
          type:'GET',
          url:'/refresh_captcha',
          success:function(data){
              $(".captcha span").html(data.captcha);
          }
        });
      });
  });
</script>

@endpush
