@section('title','Pxwebshop Home')
@extends('layouts.template')

@section('content')
<main class="p-home" id="home">
    <section class="p-home1">
      <div class="l-container">
        <ul class="c-list1 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
          <li class="c-list1__item">
            <h1 class="c-title1">Thiết kế web chuẩn seo.<br/>
              <span class="c-title1__txt">Dẫn đầu</span>
              <span class="c-title1__color1">công nghệ</span>
            </h1>
            <p class="c-title1__description">PXwebshop đi đầu trong lĩnh vực SEO và thiết kế website, thiết kế phần mềm, thiết kế hệ thống với hơn 7 năm kinh nghiệm và đội ngũ nhân viên chuyên nghiệp được đào tạo chuyên môn sâu.</p>
          </li>
          <li class="c-list1__item">
            <figure>
              <img src="/images/banner.png" alt="thiết kế website giá rẻ">
            </figure>
          </li>
        </ul>
      </div>
      {{-- <div class="l-container">
        <h3 class="c-title1">BẢNG GIÁ DỊCH VỤ <span class="c-title1--color1">THIẾT KẾ WEBSITE</span> TẠI PXWEBSHOP</h3>
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
                <h5 class="c-box1__tlt">Liên hệ WhatsApp</h5>
                <p class="c-box1__txt">Trải nghiệm tương tác các tính năng của hệ thống, giá trị đem lại cho khách hàng khi sử dụng.</p>
                <a href="#" class="c-box1__btn">Liên hệ ngay</a>
              </div>
            </div>
          </li>
          <li class="c-box1__item">
            <div class="c-box1__inner">
              <div class="c-box1__icon">
                <i class="fa fa-users"></i>
              </div>
              <div class="c-box1__info">
                <h5 class="c-box1__tlt">Tư vấn giải pháp</h5>
                <p class="c-box1__txt">Hiểu rõ sản phẩm, hợp đồng của sản phẩm và lợi ích của khách hàng khi sử dụng.</p>
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
              Dịch vụ <span class="c-title2__color1">nổi bật</span> của <span class="c-title2__color1">PXwebshop</span>
            </span>
            <span class="c-title2__text1">
              Pxwebshop chuyên cung cấp các giải pháp cho doanh nghiệp vừa và nhỏ. Với đội ngũ nhân viên giàu kinh nghiệm thực tế, làm việc theo tiêu chuẩn nhật bản. Đảm bảo hệ thống của bạn vận hành tốt nhất.
            </span>
          </h2>

          <ul class="c-box2__list">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-computer"></i>
                </div>
                <h4 class="c-box2__tlt">Dịch vụ thiết kế website</h4>
                <p class="c-box2__txt">Với nhu cầu nguồn lực kinh doanh hiện nay PXwebshop luôn hướng đến tạo những website tốt nhất quảng báo cho doanh nghiệp và đem lại lợi nhuận tốt nhất.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-network-wired"></i>
                </div>
                <h4 class="c-box2__tlt">Thiết kế hệ thống network</h4>
                <p class="c-box2__txt">Các doanh nghiệp còn hạn chế về hệ thống network nên chúng tôi muốn cung cấp cho doanh nghiệp dịch vụ network để cho doanh nghiệp vận hành tốt nhất.. doing</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa fa-computer"></i>
                </div>
                <h4 class="c-box2__tlt">Dịch vụ thiết kế logo,..</h4>
                <p class="c-box2__txt">Dịch vụ thiết kế logo, banner..., với đội ngũ designer làm việc ở Bộ thông tin. Chúng tôi tự tin cung cấp sản phẩm tốt nhất đến các doanh nghiệp.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  <i class="fa-solid fa-code"></i>
                </div>
                <h4 class="c-box2__tlt">Xây dựng phần mềm</h4>
                <p class="c-box2__txt">Chúng tôi chuyên phát triển phần mềm quản lý để giúp cho các doanh nghiệp vận hành tốt và đem lại lợi nhuận cao nhất.</p>
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
            Kho <span class="c-title2__color1">giao diện</span> website
          </span>
          <span class="c-title2__text1">
            Đa dạng các mẫu giao diện website thương mại điện tử, bán hàng, tin tức, giới <br/>thiệu mọi lĩnh vực cho bạn tham khảo.
          </span>
        </h2>
        <div class="c-slider__list">
          <div class="c-slider__item">
            <div class="c-slider__inner">
              <figure>
                <img src="https://mona.media/wp-content/uploads/2019/05/vanphongphamfast-trangchu.jpg" alt="nest mart grocery">
              </figure>
              <div class="c-slider__btnWrap">
                <a href="#ex1" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex1" class="modal">
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
                <a href="#ex2" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex2" class="modal">
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
                <a href="#ex3" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex3" class="modal">
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
                <a href="#ex4" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex4" class="modal">
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
                <a href="#ex5" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex5" class="modal">
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
                <a href="#ex6" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex6" class="modal">
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
                <a href="#ex7" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex7" class="modal">
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
                <a href="#ex8" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex8" class="modal">
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
                <a href="#ex9" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex9" class="modal">
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
                <a href="#ex10" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex10" class="modal">
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
                <a href="#ex11" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex11" class="modal">
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
                <a  href="#ex12" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex12" class="modal">
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
                <a href="#ex13" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex13" class="modal">
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
                <a href="#ex14" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex14" class="modal">
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
                <a href="#ex15" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex15" class="modal">
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
                <a href="#ex16" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex16" class="modal">
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
                <a href="#ex17" rel="modal:open" class="c-slider__btn c-slider__btn--style1" href="#">Xem demo</a>
              </div>
              <div class="c-slider__modal" id="ex17" class="modal">
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
              Bảng giá dịch vụ <span class="c-title2__color1">thiết kế website</span> tại Pxwebshop
            </span>
            <span class="c-title2__text1">
              Giá thiết kế website trọn gói được Pxwebshop công khai rõ ràng và minh bạch. Tuỳ theo mục đích và lĩnh vực<br/>
              kinh doanh mà khách hàng lựa chọn gói phù hợp
            </span>
          </h2>
          <ul class="c-list2__inner">
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">Gói dịch vụ thiết kế web
                    <span>cơ bản</span>
                  </h4>
                  <p class="c-list2__price">24,999,000 VNĐ</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">Phù hợp với các website dạng Landing Page, website tin tức, website giới thiệu doanh nghiệp,... với đầy đủ các tính năng cần thiết ở một trang web chuẩn SEO.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐</strong>Mã nguồn: Pxwebshop Core</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Ngôn ngữ: Code PHP thuần 100%</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Framework (nếu khách hàng yêu cầu): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Giao diện: Thiết kế giao diện theo mẫu có sẵn **</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Bàn giao: Toàn bộ mã nguồn</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Bảo hành: Vĩnh viễn</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Bảo trì: 1 Năm</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Băng thông: Không giới hạn</li>
                    <li class="c-list2__boxItem"><strong>⭐</strong>Bảo mật: Tuyệt đối</li>

                    <li class="c-list2__boxItem">✅ &nbsp;Chuẩn Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Bảo hành: Hỗ trợ bảo trì, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 năm domain quốc tế (.com, .net, .org)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 năm dùng hosting lên đến 3GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ngôn ngữ: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Không</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">Đăng Ký</a>
              </div>
            </li>
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">Gói dịch vụ thiết kế web
                    <span>cao cấp</span>
                  </h4>
                  <p class="c-list2__price">39,999,000 VNĐ</p>
                  <p class="c-list2__hot">nổi bật</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">Phù hợp với các website bán hàng, website thương mại nhỏ, website bất động sản, web nông nghiệp,... với đầy đủ các tính năng cao cấp về đặt hàng, thanh toán.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Mã nguồn: Pxwebshop Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Ngôn ngữ: Code PHP thuần 100%</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bàn giao: Toàn bộ mã nguồn</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bảo trì: 1 Năm</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (nếu khách hàng yêu cầu): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Giao diện: Thiết kế giao diện riêng theo yêu cầu khách hàng</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Băng thông: Không giới hạn</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bảo mật: Tuyệt đối</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Chuẩn Mobile 100%</li>

                    <li class="c-list2__boxItem">✅ &nbsp;Chuẩn Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Bảo hành: Hỗ trợ bảo trì, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Chuẩn SEO: Cam kết chuẩn SEO 100%</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 năm domain Lào (.la, .com)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 năm dùng hosting lên đến 5GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Không</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ngôn ngữ: Tiếng Lào</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Giảm 10% phí dịch vụ chăm sóc Website + Fanpage</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">Đăng Ký</a>
              </div>
            </li>
            <li class="c-list2__item">
              <div class="c-list2__wrap">
                <div class="c-list2__heading">
                  <h4 class="c-list2__tlt">Gói dịch vụ thiết kế web
                    <span>chuyên nghiệp</span>
                  </h4>
                  <p class="c-list2__price">LIÊN HỆ (VIP)</p>
                </div>
                <div class="c-list2__body">
                  <p class="c-list2__txt">Phù hợp với các website thương mại điện tử lớn, website có thuật toán thoạt toán truy xuất khó (phong thuỷ, toán học,...), website có traffic cao, cần độ bảo mật và SEO cao cấp.</p>
                  <ul class="c-list2__box">
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Mã nguồn: Pxwebshop Core</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Ngôn ngữ: Code PHP thuần 100%</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Framework (nếu khách hàng yêu cầu): Laravel</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Giao diện: Thiết kế giao diện riêng theo yêu cầu khách hàng</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bàn giao: Toàn bộ mã nguồn</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bảo hành: Vĩnh viễn</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bảo trì: 2 Năm</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Băng thông: Không giới hạn</li>
                    <li class="c-list2__boxItem"><strong>⭐ </strong> Bảo mật: Tuyệt đối</li>

                    <li class="c-list2__boxItem">✅ &nbsp;Chuẩn Mobile: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Chuẩn SEO: Cam kết chuẩn SEO 100%</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hỗ trợ thay đổi theo xu hướnghướng SEO mới nhất của Google theo thời gian bảo trì</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Bảo hành: Hỗ trợ bảo trì, sửa lỗi, website miễn phí trọn đời</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Domain: Tặng miễn phí 1 năm domain quốc tế (.com, .net, .org)</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Hosting: Tặng miễn phí 1 năm dùng hosting lên đến 10GB</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Giỏ hàng, thanh toán: Có</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Đa ngôn ngữ: Tiếng Việt, Tiếng Anh, Tiếng Lào, Tiếng Nhật</li>
                    <li class="c-list2__boxItem">✅ &nbsp;Tặng voucher: Giảm 10% phí dịch vụ chăm sóc Website + Fanpage</li>
                  </ul>
                </div>
                <a href="#register" rel="modal:open" class="c-btn1">Đăng Ký</a>
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
              Các bước hình thành website  <span class="c-title2__color1">chuyên nghiệp tại pxwebshop</span>
            </span>
            <span class="c-title2__text1">
              PXwebshop với phương châm làm việc lấy khách hàng làm trung tâm, luôn hướng đến các giải pháp hỗ trợ khách hàng trong hoạt động thiết kế web. Chúng tôi có quy trình làm việc rõ ràng, nhằm phục vụ bạn chuyên nghiệp nhất.
            </span>
          </h2>

          <ul class="c-box2__list c-box2__list--style1">
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 1
                </div>
                <h4 class="c-box2__tlt">Thấu hiểu khách hàng</h4>
                <p class="c-box2__txt">Đội ngũ nhân
                  viên giàu kinh nghiệm của PXwebshop gặp gỡ khách hàng, lắng nghe ý tưởng thiết kế, thảo luận về tính năng mà bạn
                  mong muốn trong thiết kế web. Sau khi tư vấn giải pháp và tính năng phù hợp với mục đích và nhu cầu của bạn,
                  chúng tôi lên kế hoạch thiết kế.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 2
                </div>
                <h4 class="c-box2__tlt">Ký kết và hợp tác</h4>
                <p class="c-box2__txt">Để đảm bảo quyền lợi cho bạn,
                  chúng ta cùng nhau ghi nhận bằng văn bản
                  pháp lý. Cái bắt tay nhỏ thể hiện tinh thần lớn, PxWebshop sẽ là người đồng hành cùng bạn, giúp bạn xây dựng
                  giải pháp thiết kế website phù hợp và nâng tầm thương hiệu của bạn trên thị trường.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 3
                </div>
                <h4 class="c-box2__tlt">Thiết kế</h4>
                <p class="c-box2__txt">Đến giai đoạn này thiết kế website của bạn gần như được hoàn thiện. Tuy nhiên với mong muốn tạo ra sản phẩm tốt nhất, và để đảm bảo website hoạt động trơn tru và hiệu quả, đội ngũ kỹthuật PXwebshop sẽ kiểm tra và hiệu chỉnh trước khi thực sự đưa vào hoạt động.</p>
              </div>
            </li>

            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 4
                </div>
                <h4 class="c-box2__tlt">Lập trình</h4>
                <p class="c-box2__txt">Dựa trên ý
                  Từ thiết kế đã có và những kinh nghiệm đúc kết trong nhiều năm làm việc, đội ngũ lập trình viên sẽ lên kế hoạch lập trình chuẩn UX (trải nghiệm người dùng), thực hiện lập trình web, đảm bảo đầy đủ các tính năng hữu ích và tiện lợi cho website của bạn.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 5
                </div>
                <h4 class="c-box2__tlt">Thử nghiệm và chỉnh sửa</h4>
                <p class="c-box2__txt">Đến giai đoạn này thiết kế website của bạn gần như được hoàn thiện. Tuy nhiên với mong muốn tạo ra sản phẩm tốt nhất, và để đảm bảo website hoạt động trơn tru và hiệu quả, đội ngũ kỹ thuật PXwebshop sẽ kiểm tra và hiệu chỉnh trước khi thực sự đưa vào hoạt động.</p>
              </div>
            </li>
            <li class="c-box2__item">
              <div class="c-box2__inner">
                <div class="c-box2__icon">
                  Bước 6
                </div>
                <h4 class="c-box2__tlt">Bàn giao toàn diện</h4>
                <p class="c-box2__txt">Bàn giao toàn diện là trách nhiệm của toàn thể đội ngũ Pxwebshop. Đội ngũ Pxwebshop sẽ hướng dẫn bạn quản trị web tận tình và chu đáo. Dù đã hoàn thành dự án, đội ngũ Pxwebshop luôn trong tâm thế sẵn sàng hỗ trợ bạn trong quá trình bạn vận hành và quản trị website.</p>
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
              Các <span class="c-title2__color1">chứng chỉ</span> chuyên môn
            </span>
            <span class="c-title2__text1">
              PXwebshop luôn học hỏi công nghệ mới để đem lại giá trị tốt nhất cho khách hàng
            </span>
          </h2>

          <ul class="c-box3__wrap">
            <li class="c-box3__item">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img3.jpg') }}" alt="advaced diplona in fomation techology">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Advaced diplona in fomation techology</h5>
                  <p class="c-box3__txt">(example: Chứng chỉ chuyên gia bảo mật của ICSI cấp)Viết ngôn ngữ lào</p>
                </div>
              </div>
            </li>
            <li class="c-box3__item c-box3__item--style1">
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img1.jpg') }}" alt="huawei certification">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Huawei certification</h5>
                  <p class="c-box3__txt">Viết ngôn ngữ lào</p>
                </div>
              </div>
              <div class="c-box3__inner">
                <figure>
                  <img src="{{ asset('images/certificate/img2.jpg') }}" alt="cisco ceftifications">
                </figure>
                <div class="c-box3__content">
                  <h5 class="c-box3__tlt">Cisco ceftifications</h5>
                  <p class="c-box3__txt">Viết ngôn ngữ lào</p>
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
                  <p class="c-box3__txt">Viết ngôn ngữ lào</p>
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
                  <p class="c-box3__txt">Viết ngôn ngữ lào</p>
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
              <span class="c-title2__color1">Cam kết</span> từ chúng tôi
            </span>
            <span class="c-title2__text1">
              PXwebshop với đội ngũ trong và ngoài nước cam kết chất lượng sản phẩm đem lại cho khách hàng là tốt nhất.
            </span>
          </h2>

          <ul class="c-box4__content">
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-life-ring"></i>
                </p>
                <h5 class="c-box4__tlt">Hỗ trợ tận tình</h5>
                <p class="c-box4__txt">
                  Tư vấn, hỗ trợ, giải đáp tận tình thắc mắc của khách hàng.
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-clock"></i>
                </p>
                <h5 class="c-box4__tlt">Xử lý lỗi nhanh​</h5>
                <p class="c-box4__txt">
                  Hỗ trợ xử lý mọi vấn đề liên quan đến hệ thống nhanh nhất có thể.
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="fas fa-headset"></i>
                </p>
                <h5 class="c-box4__tlt">Tư vấn​</h5>
                <p class="c-box4__txt">
                  Hỗ trợ tư vấn kinh nghiệm, xử lý vấn đề trong quá trình sử dụng.​
                </p>
              </div>
            </li>
            <li class="c-box4__item">
              <div class="c-box4__inner">
                <p class="c-box4__icon">
                  <i aria-hidden="true" class="far fa-check-square"></i>
                </p>
                <h5 class="c-box4__tlt">Cam kết chính chủ​​</h5>
                <p class="c-box4__txt">
                  Cam kết độc quyền cung cấp & sở hữu hợp pháp website.
                </p>
              </div>
            </li>
          </ul>
        </div>

        <div class="c-box5">
          <h2 class="c-title2">
            <span class="c-title2__text">
              <span class="c-title2__color1">Đối tác</span> tiêu biểu đã tin dùng
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
                <img src="{{ asset('images/img7.png') }}" alt="pxwebshop thông tin người dùng bảo mật">
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="p-home9 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
      <div class="l-container">
        <h2 class="c-title2">
          <span class="c-title2__text">
            <span class="c-title2__color1">Bài viết</span> nổi bật
          </span>
        </h2>

        <div class="c-list10">
          <ul class="c-list10__list">
            <li class="c-list10__item">
              <a class="c-list10__wrap">
                <figure>
                  <img src="https://placehold.jp/320x240.png" alt="">
                </figure>
                <ul class="c-list10__cat">
                  <li class="c-list10__cat__item">category1</li>
                  <li class="c-list10__cat__item">category2</li>
                  <li class="c-list10__cat__item">category2</li>
                  <li class="c-list10__cat__item">category2</li>
                  <li class="c-list10__cat__item">category2</li>
                </ul>
                <h3 class="c-list10__tlt">title title title title title title title title title title title title title title</h3>
              </a>
            </li>
            <li class="c-list10__item">
              <a class="c-list10__wrap">
                <figure>
                  <img src="https://placehold.jp/320x240.png" alt="">
                </figure>
                <ul class="c-list10__cat">
                  <li class="c-list10__cat__item">category1</li>
                  <li class="c-list10__cat__item">category2</li>
                </ul>
                <h3 class="c-list10__tlt">title title title title title title title title title title title title title title</h3>
              </a>
            </li>
            <li class="c-list10__item">
              <a class="c-list10__wrap">
                <figure>
                  <img src="https://placehold.jp/320x240.png" alt="">
                </figure>
                <ul class="c-list10__cat">
                  <li class="c-list10__cat__item">category1</li>
                  <li class="c-list10__cat__item">category2</li>
                </ul>
                <h3 class="c-list10__tlt">title title title title title title title</h3>
              </a>
            </li>
            <li class="c-list10__item">
              <a class="c-list10__wrap">
                <figure>
                  <img src="https://placehold.jp/320x240.png" alt="">
                </figure>
                <ul class="c-list10__cat">
                  <li class="c-list10__cat__item">category1</li>
                  <li class="c-list10__cat__item">category2</li>
                </ul>
                <h3 class="c-list10__tlt">title title title title title title title</h3>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="train" class="p-home10 wow bounceInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
      <div class="c-box6">
        <h2 class="c-title2">
          <span class="c-title2__text">
            <span class="c-title2__color1">Đào tạo</span> nhân viên cấp cao
          </span>
          <span class="c-title2__text1">
            Với kiến thức làm việc trong Bộ Thông Tin được nhận công tác đào tạo cho nhân viên cấp cao.
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
              <form action="" method="POST">
                @csrf
                <h2 class="c-box12__tlt">Nhận thông tin đăng ký</h2>
                <p class="c-box12__tlt__sub">Pxwebshop hỗ trợ khách hàng 24/7</p>

                <div class="print-error-msg" style="display:none">
                  <ul></ul>
                </div>
          
                <ul class="c-box12__list">
                  <li class="c-box12__item">
                    <p class="c-box12__txt">Họ tên</p>
                    <input name="name" type="text" placeholder="Họ tên">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">Email</p>
                    <input name="email" type="email" placeholder="Email">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">Số điện thoại</p>
                    <input name="phone" type="number" placeholder="Số điện thoại">
                  </li>
                  <li class="c-box12__item">
                    <p class="c-box12__txt">Chọn gói dịch vụ</p>
                    <select name="service_pack">
                      <option value="0">Chọn gói dịch vụ</option>
                      <option value="1">Dịch vụ thiết kế web CƠ BẢN</option>
                      <option value="2">Dịch vụ thiết kế web CAO CẤP</option>
                      <option value="3">Dịch vụ thiết kế web CHUYÊN NGHIỆP</option>
                    </select>
                  </li>
                </ul>
                <button type="submit" class="c-box12__btn">Gửi Yêu Cầu</button>
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

        var _token = $("input[name='_token']").val();
        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var phone = $("input[name='phone']").val();
        var service_pack = $("select[name='service_pack']").val();

        $.ajax({
            url: "/",
            type:'POST',
            data: {_token:_token, name:name, email:email, phone:phone, service_pack:service_pack},
            success: function(data) {
              alert(data.success);
              location.reload();
            },
            error: function(errors) {
              printErrorMsg(errors.responseJSON.error);
            }
        });
      }); 

      function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
      }
  });
</script>

@endpush
