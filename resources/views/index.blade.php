@section('title','Lao Smart Tech công ty thiết kế website, phần mềm, logo')
@section('description','Đây là trang lao smat tech chuyên cung cấp giải pháp công nghệ thông tin và thiết kế website, phần mềm, logo, banner, network và đào tạo sinh viên')
@section('keywords','lao smart tech, thiết kế website, xây dựng phần mềm, thiết kế logo, banner, thiết kế hệ thống network')

@extends('layouts.template')

@section('content')
<main class="p-home" id="home">
    <section class="p-home1">
      <div class="l-container">
        <ul class="c-list1 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <li class="c-list1__item">
            <h1 class="c-title1">ຮັບອອກແບບເວັບໄຊ ແລະ ພັດທະນາໂປຣແກຣມ.<br/>
              <span class="c-title1__txt">ເປັນຜູ້ນຳ</span>
              <span class="c-title1__color1">ໃນດ້ານເຕັກໂນໂລຊີ</span>
            </h1>
            <p class="c-title1__description">Lao Smart Tech ເປັນຜູ້ນຳໃນການ SEO, ອອກແບບເວັບໄຊ, ພັດທະນາໂປຣແກຣມ, ອອກແບບລະບົບເຄືອຂ່າຍ ແລະ ຈັດຝຶກອົບຮົມ. ໂດຍທີມງານມືອາຊີບ ແລະ ມີປະສົບການຫຼາຍກວ່າ 7 ປີ ທີ່ໄດ້ຮັບການຝຶກອົບຮົມສະເພາະດ້ານ.</p>
          </li>
          <li class="c-list1__item">
            <picture>
              <source type="image/webp" srcset="{{ asset('images/banner.webp') }}"> 
              <img src="{{ asset('images/banner.webp') }}" alt="ບໍລິສັດ lao smart tech ອອກແບບເວັບໄຊ">
            </picture>
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
            Lao Smart Tech ຊ່ຽວຊານໃນການສະໜອງຊ່ອງທາງໃນການເພີ່ມມູນຄ່າສໍາລັບທຸລະກິດຂະໜາດນ້ອຍ ແລະ ຂະໜາດກາງ ດ້ວຍພະນັກງານທີ່ມີປະສົບການຕົວຈີງ.<br> ເພື່ອຮັບປະກັນວ່າລະບົບຂອງທ່ານເຮັດວຽກໄດ້ດີ ແລະ ມີປະສິດທິພາບສູງສຸດ.
            </span>
          </h2>

          <ul class="c-box2__list">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-computer"></i>
                </div>
                <h4 class="c-box2__tlt">ອອກແບບ ເວັບໄຊ</h4>
                <p class="c-box2__txt">ເວັບໄຊ ທີ່ສວຍງາມ ແລະ ໂດດເດັ່ນ ຈະຊ່ວຍເພີ່ມຄວາມໜ້າເຊື່ອຖື ແລະ ຜົນກຳໄລໃຫ້ກັບທຸລະກິດຂອງທ່ານ, ປັດຈຸບັນ Lao Smart Tech ມຸ່ງໝັ້ນທີ່ຈະສ້າງເວັບໄຊທີ່ດີທີ່ສຸດ ເພື່ອໂຄສະນາທຸລະກິດ ແລະ ສ້າງຜົນກຳໄລສູງສຸດ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa-solid fa-code"></i>
                </div>
                <h4 class="c-box2__tlt">ພັດທະນາ ໂປຣແກຣມ</h4>
                <p class="c-box2__txt">ພວກເຮົາມີຄວາມຊຳນານໃນການ ອອກແບບ ແລະ ພັດທະນາໂປຣແກຣມຄຸ້ມຄອງ ແລະ ຈັດການລະບົບ ເພື່ອຊ່ວຍໃຫ້ທຸລະກິດຂອງທ່ານດໍາເນີນການໄດ້ຢ່າງມີປະສິດທິພາບ ແລະ ງ່າຍໃນການບໍລິຫານຈັດການ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-network-wired"></i>
                </div>
                <h4 class="c-box2__tlt">ອອກແບບ ເຄືອຂ່າຍ</h4>
                <p class="c-box2__txt">ຫຼາຍໆອົງກອນຍັງມີຂໍ້ຈຳກັດທາງດ້ານລະບົບເຄືອຂ່າຍ ທີ່ບໍ່ໄດ້ມາດຕະຖານ, ດັ່ງນັ້ນພວກເຮົາພ້ອມທີ່ຈະໃຫ້ບໍລິການເພື່ອ ອອກແບບ, ຕິດຕັ້ງ, ປັບປຸງ ແລະ ບຳລຸງຮັກສາລະບົບເຄືອຂ່າຍຂອງທ່ານ ໃຫ້ມີປະສິດທິພາບສູງສຸດ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-drafting-compass"></i>
                </div>
                <h4 class="c-box2__tlt">ອອກແບບ ໂລໂກ</h4>
                <p class="c-box2__txt">ບໍລິການອອກແບບ Logo, Banner ແລະ ສື່ໂຄສະນາທຸກຮູບແບບ ໂດຍທີມງານອອກແບບທີ່ເປັນມືອາຊີບ, ພວກເຮົາໝັ້ນໃຈທີ່ຈະມອບຜະລິດຕະພັນທີ່ດີທີ່ສຸດໃຫ້ກັບທ່ານ.</p>
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
            ມີຕົວຢ່າງເວັບໄຊທີ່ຫຼາກຫຼາຍບໍ່ວ່າຈະເປັນເວັບໄຊ ອີຄອມເມິດສ, ຂາຍສີນຄ້າ, ຂ່າວສານ ແລະ ແນະນຳທຸລະກິດ...  <br/> ໂດຍຄວບຄຸມທຸກສາຂາອາຊີບ ໃຫ້ທ່ານເລືອກໄດ້ຕາມໃຈມັກ.
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
            ລາຄາແພັກເກັດ <span class="c-title2__color1">ອອກແບບເວັບໄຊ</span> ຂອງ Lao Smart Tech
            </span>
            <span class="c-title2__text1">
            ລາຄາແພັກເກັດອອກແບບເວັບໄຊ ໄດ້ລະບຸລາຍລະອຽດຕ່າງໆ ໄວ້ຢ່າງຊັດເຈນ ແລະ ຄົບຖ້ວນ, ທ່ານສາມາດເລືອກຕາມຄວາມເຫມາະສົມ ຂອງຈຸດປະສົງ ແລະ ປະເພດທຸລະກິດຂອງທ່ານ. 
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
                    <li class="c-list2__boxItem"><strong>⭐</strong>ແບບເວັບໄຊ: ອອກແບບຕາມຕົວຢ່າງທີ່ມີຢູ່ແລ້ວ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ຮັບປະກັນ: ຕະຫຼອດການໃຊ້ງານ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ບໍາລຸງຮັກສາ: 1 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem"><strong>✅ </strong>ມາດຕະຖານ Mobile: ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Domain: ຟຣີ 1 ປີ (.com, .net, .org)</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Hosting: ຟຣີ 1 ປີ, ເນື້ອທີ່ຈັດເກັບສູງເຖິງ 3GB</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ກະຕ່າສີນຄ້າ, ລະບົບຊຳລະເງິນ: ບໍ່ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ພາສາ: ພາສາລາວ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ສ່ວນຫຼຸດ: ບໍ່ມີ</li>
                  </ul>
                </div>
                <a href="#" data-service="1" class="c-btn1 js-btn-modal">ລົງທະບຽນ</a>
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
                  <p class="c-list2__txt">ເໝາະສຳຫຼັບເວັບໄຊຂາຍສີນຄ້າ, ເວັບໄຊອີຄອມເມິດສຂະໜາດນ້ອຍ, ເວັບໄຊອະສັງຫາລິມະສັບ, ເວັບໄຊການກະເສດ... ພ້ອມຄຸນສົມບັດລະດັບສູງເຕັມຮູບແບບ</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Source Code: Lao Smart Tech Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ບໍາລຸງຮັກສາ: 1 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (ຖ້າລູກຄ້າຕ້ອງການ): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບບເວັບໄຊ: ອອກແບບຕາມຄວາມຕ້ອງການຂອງລູກຄ້າ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem"><strong>✅ </strong>ມາດຕະຖານ Mobile: ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ມາດຕະຖານ SEO: ຮັບປະກັນມາດຕະຖານ SEO 100%</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Domain: ຟຣີ 1 ປີ (.la, .com, .org)</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Hosting: ຟຣີ 1 ປີ, ເນື້ອທີ່ຈັດເກັບສູງເຖິງ 5GB</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ກະຕ່າສີນຄ້າ, ລະບົບຊຳລະເງິນ: ບໍ່ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ພາສາ: ພາສາລາວ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ສ່ວນຫຼຸດ: ຫຼຸດ 10% ຄ່າ​ບໍ​ລິ​ການບໍາລຸງຮັກສາ​ ເວັບໄຊ</li>
                  </ul>
                </div>
                <a href="#" data-service="2" class="c-btn1 js-btn-modal">ລົງທະບຽນ</a>
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
                  <p class="c-list2__txt">ເໝາະສຳຫຼັບເວັບໄຊອີຄອມເມິດສຂະໜາດໃຫຍ່, ເວັບໄຊທີ່ມີການຄຳນວນທາງຄະນິດສາດຊັບຊ້ອນ, ເວັບໄຊທີ່ມີ traffic ສູງ, ຕ້ອງການຄວາມປອດໄພ ແລະ SEO ລະດັບສູງ.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Source Code: Lao Smart Tech Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (ຖ້າລູກຄ້າຕ້ອງການ): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບບເວັບໄຊ: ອອກແບບຕາມຄວາມຕ້ອງການຂອງລູກຄ້າ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ສົ່ງມອບ: Source Code ທັງໝົດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຮັບປະກັນ: ຕະຫຼອດການໃຊ້ງານ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ບໍາລຸງຮັກສາ: 2 ປີ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ແບນວິດ: ບໍ່ຈຳກັດ</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> ຄວາມປອດໄພ: SSL</li>

                    <li class="c-list2__boxItem"><strong>✅ </strong>ມາດຕະຖານ Mobile: ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ມາດຕະຖານ SEO: ຮັບປະກັນມາດຕະຖານ SEO 100%</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ຊ່ວຍເຫຼືອປ່ຽນແປງ SEO ຕາມເທນຫຼ້າສຸດຂອງ Google</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Domain: ຟຣີ 1 ປີ (.com, .net, .org)</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>Hosting: ຟຣີ 1 ປີ, ເນື້ອທີ່ຈັດເກັບສູງເຖິງ 10GB</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ກະຕ່າສີນຄ້າ, ລະບົບຊຳລະເງິນ: ມີ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ພາສາ: ພາສາລາວ, ອັງກິດ, ຫວຽດນາມ, ຈີນ</li>
                    <li class="c-list2__boxItem"><strong>✅ </strong>ສ່ວນຫຼຸດ: ຫຼຸດ 10% ຄ່າ​ບໍ​ລິ​ການບໍາລຸງຮັກສາ ​ເວັບໄຊ</li>
                  </ul>
                </div>
                <a href="#" data-service="3" class="c-btn1 js-btn-modal">ລົງທະບຽນ</a>
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
              ຂັ້ນຕອນສ້າງ website  <span class="c-title2__color1">ແບບມືອາຊີບຂອງ Lao Smart Tech </span>
            </span>
            <span class="c-title2__text1">
            Lao Smart Tech ຖືເອົາລູກຄ້າເປັນສູນກາງ ໂດຍເນັ້ນໃນການຊ່ວຍເຫຼືອ, ໃຫ້ຄຳປຶກສາ ແລະ ແກ້ໄຂບັນຫາຂອງລູກຄ້າ ໃນການອອກແບບເວັບໄຊ<br> ພວກເຮົາມີຂະບວນການເຮັດວຽກທີ່ຈະແຈ້ງ ແລະ ຊັດເຈນ ເພື່ອຮັບໃຊ້ທ່ານຢ່າງເປັນມືອາຊີບ.
            </span>
          </h2>

          <ul class="c-box2__list c-box2__list--style1">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 1
                </div>
                <h4 class="c-box2__tlt">ເຂົ້າໃຈລູກຄ້າ</h4>
                <p class="c-box2__txt">ພະນັກງານຂອງ Lao Smart Tech ພົບປະໂອ້ລົມກັບລູກຄ້າ, ຮັບຟັງແນວຄວາມຄິດໃນການອອກແບບ ແລະ ສົນທະນາກ່ຽວກັບຄຸນສົມບັດທີ່ລູກຄ້າຕ້ອງການໃນເວັບໄຊ. ຫຼັງຈາກປຶກສາຫາລືກ່ຽວກັບວິທີແກ້ໄຂ ແລະ ຄຸນສົມບັດທີ່ເຫມາະສົມກັບຈຸດປະສົງ ແລະ ຄວາມຕ້ອງການຂອງລູກຄ້າ, ພວກເຮົາຈະເລີ່ມວາງແຜນໃນການອອກແບບເວັບໄຊ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 2
                </div>
                <h4 class="c-box2__tlt">ລົງ​ນາມ ​ແລະ ​ຮ່ວມ​ມື​</h4>
                <p class="c-box2__txt">ເພື່ອປົກປ້ອງຜົນປະໂຫຍດຂອງລູກຄ້າ,
                ພວກເຮົາຮ່ວມກັນບັນທຶກເອກະສານທາງດ້ານກົດຫມາຍ. ການຈັບມືທັກທາຍນ້ອຍໆສະແດງໃຫ້ເຫັນເຖິງຄວາມຈິງໃຈ, Lao Smart Tech  ຈະເປັນຄູ່ຮ່ວມມືຂອງທ່ານ, ຊ່ວຍໃຫ້ທ່ານສ້າງໂຊລູຊັ່ນການອອກແບບເວັບໄຊທີ່ເໝາະສົມ ແລະ ຍົກລະດັບແບນຂອງທ່ານໃນຕະຫຼາດໃຫ້ສູງຂື້ນ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 3
                </div>
                <h4 class="c-box2__tlt">ອອກແບບ</h4>
                <p class="c-box2__txt"> ອີງຕາມແນວຄວາມຄິດຂອງລູກຄ້າ, ທີມງານອອກແບບເວັບໄຊ Lao Smart Tech ພ້ອມຄວາມຄິດສ້າງສັນ ແລະ ສະໜອງສ້າງເວັບໄຊຕົວຢ່າງທີ່ສວຍງາມ, ໜ້າດຶງດູດ ແລະ ມາດຕະຖານ UX/UI. ຫຼັງ​ຈາກ​ທີ່​ລູກຄ້າກວດສອບ​ການ​ສາ​ທິດເວັບໄຊຕົວຢ່າງ​, ທີມ​ງານ​ອອກ​ແບບ​ຈະທຳ​ການ​ແກ້​ໄຂ​​ເພື່ອ​ໃຫ້ລາຍລະອຽດການອອກແບບ ສໍາ​ເລັດ​ຢ່າງສົມບູນ​.</p>
              </div>
            </li>

            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 4
                </div>
                <h4 class="c-box2__tlt">ສ້າງເວັບໄຊ
                </h4>
                <p class="c-box2__txt">ຈາກການອອກແບບທີ່ພວກເຮົາມີ ແລະ ປະສົບການທີ່ສະສົມໃນໄລຍະຫຼາຍປີຂອງການເຮັດວຽກ, ທີມງານໂປຣແກຣມເມີຈະວາງແຜນໃນການຂຽນ UX (ປະສົບການຂອງຜູ້ໃຊ້), ດຳເນີນການການຂຽນໂປຣແກຣມເວັບ, ຮັບປະກັນຄຸນສົມບັດທີ່ເປັນປະໂຫຍດ ແລະ ສະດວກສໍາລັບເວັບໄຊຂອງທ່ານ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 5
                </div>
                <h4 class="c-box2__tlt">​ທົດ​ສອບ ​ແລະ ​​ແກ້​ໄຂ​</h4>
                <p class="c-box2__txt">ຂັ້ນຕອນນີ້ການອອກແບບເວັບໄຊຂອງລູກຄ້າເກືອບຈະສຳເລັດສົມບູນ 100%,  ຢ່າງໃດກໍ່ຕາມ ດ້ວຍຄວາມມຸ່ງໝັ້ນທີ່ຈະສ້າງຜະລິດຕະພັນຄຸນນະພາບທີ່ດີທີ່ສຸດ ແລະ ເພື່ອຮັບປະກັນວ່າເວັບໄຊເຮັດວຽກໄດ້ຍ່າງເລືອນໄຫລ ແລະ ມີປະສິດທິພາບ, ທາງທີມງານເຕັກນິກ Lao Smart Tech ຈະກວດສອບ ແລະ ປັບທຽບມາດຕະຖານກ່ອນທີ່ຈະນຳໄປໃຊ້ງານຈິງ.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  ຂັ້ນຕອນ 6
                </div>
                <h4 class="c-box2__tlt">ສົ່ງມອບເວັບໄຊ</h4>
                <p class="c-box2__txt">ສົ່ງມອບເວັບໄຊທີ່ສົມບູນໃຫ້ແກ່ລູກຄ້າ ແມ່ນຄວາມຮັບຜິດຊອບຂອງທີມງານ Lao Smart Tech ທັງຫມົດ,  ທີມງານຈະແນະນຳທ່ານກຽ່ວກັບວິທີຄຸ້ມຄອງ ແລະ ຮັກສາເວັບໄຊ ດ້ວຍຄວາມເອົາໃຈໃສ່.  ເຖິງແມ່ນວ່າຂະບວນການສ້າງເວັບໄຊໄດ້ສຳເລັດແລ້ວ ແຕ່ທີມງານ Lao Smart Tech ພ້ອມສະເໝີທີ່ຈະສະໜັບສະໜູນທ່ານ ໃນຂະບວນການດຳເນີນງານ ແລະ ຄຸ້ມຄອງເວັບໄຊ.</p>
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
                  <img loading="lazy" src="{{ asset('images/certificate/HCIA-Access.jpg') }}" alt="huawei certification hcia">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei Certification</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດສາກົນ HCIA Access</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/HCIP-Access.jpg') }}" alt="huawei certification hcip">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei Certifications</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດສາກົນ HCIP Access</p>
                </div>
              </div>
            </li>

            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/img3.jpg') }}" alt="advaced diplona in fomation techology">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Advanced Diploma in Information Technology</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ເຕັກໂນໂລຊີຂໍ້ມູນຂ່າວສານຂັ້ນສູງ</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/CCNA_Security_rotated.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco Certification</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ຄວາມປອດໄພທາງເຄືອຂ່າຍ</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/img2.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco Certification</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດສາກົນ CCNA Routing & Switching </p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/img4.jpg') }}" alt="certificate course in advanced web technology">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate Course in Advanced Web Technology</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ເວັບເຕັກໂນໂລຊີຂັ້ນສູງ</p>
                </div>
              </div>
            </li>

            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/HCIA-Datacom.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei Certification</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດສາກົນ HCIA Datacom
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/BigDataAnalytics.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Big Data Analytics</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ການວິເຄາະຖານຂໍ້ມູນໃຫ່ຍ</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/img5.jpg') }}" alt="certificate course in data communication and networking">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate Course in Data Communication and Networking</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ການສື່ສານຂໍ້ມູນ ແລະ ເຄືອຂ່າຍຄອມພິວເຕີ</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img loading="lazy" src="{{ asset('images/certificate/CCEHIS.jpg') }}" alt="certificate course in data communication and networking">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Certificate Course in Ethical Hacking and Information Security</h5>
                  <p class="c-box3__txt">ໃບຢັ້ງຢືນຫຼັກສູດ ການແຮັກຢ່າງມີຈັນຍາບັນ ແລະ ຄວາມປອດໄພຂໍ້ມູນຂ່າວສານ</p>
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
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img1.webp') }}"> 
                <img src="{{ asset('images/img1.jpg') }}" alt="">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img2.webp') }}"> 
                <img src="{{ asset('images/img2.jpg') }}" alt="">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img3.webp') }}"> 
                <img src="{{ asset('images/img3.jpg') }}" alt="pxwebshop đi đầu trong lĩnh vực phần mềm quản lý">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img4.webp') }}"> 
                <img src="{{ asset('images/img4.jpg') }}" alt="pxwebshop chuyển quảng cáo sản phẩm">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img5.webp') }}"> 
                <img src="{{ asset('images/img5.jpg') }}" alt="pxwebshop cung cấp website giá rẻ">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img6.webp') }}"> 
                <img src="{{ asset('images/img6.jpg') }}" alt="pxwebshop chất lượng sản phẩm cao">
              </picture>
            </li>
            <li class="c-box5__item">
              <picture>
                <source type="image/webp" srcset="{{ asset('images/img7.webp') }}"> 
                <img src="{{ asset('images/img7.jpg') }}" alt="pxwebshop thông tin người dùng ຄວາມປອດໄພ">
              </picture>
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
                  <img loading="lazy" src="{{url('storage/images/blog/feature/'.$item->featured_image.'')}}" alt="">
                </figure>
                <div class="c-list10__info">
                  <h3 class="c-list10__tlt">{{$item->title}}</h3>
                  <p class="c-list10__date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d-m-Y', strtotime($item->created_at)); }}</p>
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
                  <img loading="lazy" src="{{ asset('images/img9.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img11.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img10.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img loading="lazy" src="{{ asset('images/img12.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
            </figure>
          </li>
          <li class="c-box6__item">
            <ul class="c-box6__list">
              <li class="c-box6__list__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img14.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img15.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img16.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img loading="lazy" src="{{ asset('images/img13.jpeg') }}" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
            </figure>
          </li>

          <li class="c-box6__item">
            <ul class="c-box6__list">
              <li class="c-box6__list__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img18.jpeg') }}" alt="">
                </figure>
              </li>
              <li class="c-box6__list__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img19.jpeg') }}" alt="">
                </figure>
              </li>
            </ul>
            <div class="c-box6__img">
              <div class="c-box6__img__item">
                <figure>
                  <img loading="lazy" src="{{ asset('images/img20.jpeg') }}" alt="">
                </figure>
              </div>
            </div>
          </li>
          <li class="c-box6__item c-box6__item--style1">
            <figure>
              <img loading="lazy" src="{{ asset('images/img17.jpeg') }}" alt="">
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <div class="c-modal">
      <div class="l-container">
          <div class="c-modal__content">
            <div class="c-modal__close">
              <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="c-modal__inner">
              <form action="/" method="POST">
                @csrf
                <h2 class="c-modal__tlt">ປ້ອນຂໍ້ມູນເພື່ອ ລົງທະບຽນ</h2>
                <p class="c-modal__tlt__sub">Lao Smart Tech ໃຫ້ຄຳແນະນຳ ແລະ ຊ່ວຍເຫຼືອລູກຄ້າ 24/7</p>

                <ul class="c-modal__list">
                  <li class="c-modal__item">
                    <p class="c-modal__txt">ຊື່ ແລະ ນາມສະກຸນ</p>
                    <input name="name" type="text" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                    <p class="error_msg" id="name"></p>
                  </li>
                  <li class="c-modal__item">
                    <p class="c-modal__txt">ອີເມວ</p>
                    <input name="email" type="email" placeholder="ອີເມວ">
                    <p class="error_msg" id="email"></p>
                  </li>
                  <li class="c-modal__item">
                    <p class="c-modal__txt">ເບີ້ໂທລະສັບ</p>
                    <input name="phone" type="number" placeholder="ເບີ້ໂທລະສັບ">
                    <p class="error_msg" id="phone"></p>
                  </li>
                  <li class="c-modal__item">
                    <p class="c-modal__txt">ເລືອກປະເພດບໍລິການ</p>
                    <select name="service_pack">
                      <option value="0">ເລືອກປະເພດບໍລິການ</option>
                      <option value="1">ບໍລິການອອກແບບເວັບໄຊ (Basic)</option>
                      <option value="2">ບໍລິການອອກແບບເວັບໄຊ (Advanced) </option>
                      <option value="3">ບໍລິການອອກແບບເວັບໄຊ (Professional)</option>
                    </select>
                    <p class="error_msg" id="service_pack"></p>
                  </li>
                  <li class="c-modal__item">
                    <p class="c-modal__txt">Captcha</p>
                    <div class="captcha">
                      <span>{!! captcha_img() !!}</span>
                      <button type="button" class="btn-refresh"><i class="fa fa-refresh"></i></button>
                      <input type="text" class="form-control" placeholder="ປ້ອນ Captcha" name="captcha">
                    </div>
                    <p class="error_msg" id="captcha"></p>
                  </li>
                </ul>
               
                <button type="submit" class="c-modal__btn">ລົງທະບຽນ</button>
              </form>
              <figure>
                <img loading="lazy" src="/images/background-modal.png" alt="Hãy viết mô tả hình ảnh đào tạo(vd: đào tạo ở đâu gì đó ở seo cho tốt nha...)">
              </figure>
            </div>
          </div>
      </div>
    </div>
</main>
@endsection

@push('scripts')

<script type="text/javascript">
  $(document).ready(function() {
      $(".c-modal__btn").click(function(e){
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
            let resp = errors.responseJSON.error;
            for (index in resp) {
              $("#" + index).html(resp[index]);
            }
            
            $(that).prop('disabled', false);
            $('.loader').remove();
          },
        });
      }); 

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
