@section('title','Pxwebshop Home')
@extends('layouts.template')

@section('content')
<main class="p-home">
    <section class="p-home1">
      <div class="l-container">
        <ul class="c-list1">
          <li class="c-list1__item">
            <h2 class="c-title1">Thiết kế web chuẩn seo.<br/>
              <span class="c-title1__txt">Dẫn đầu</span>
              <span class="c-title1__color1">công nghệ</span>
            </h2>
            <p class="c-title1__description">Pxwebshop đi đầu trong lĩnh vực SEO và thiết kế website, thiết kế phần mềm, thiết kế hệ thống với hơn 6 năm kinh nghiệm và đội ngũ nhân viên chuyên nghiệp được đào tạo chuyên môn sâu.</p>
          </li>
          <li class="c-list1__item">
            <figure>
              <img src="https://placehold.jp/500x300.png" alt="" srcset="">
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
        <ul class="c-box1">
          <li class="c-box1__item">
            <div class="c-box1__inner">
              <div class="c-box1__icon">
                <i class="fa fa-whatsapp"></i>
              </div>
              <div class="c-box1__info">
                <h5 class="c-box1__tlt">Liên hệ WhatsApp</h5>
                <p class="c-box1__txt">Trải nghiệm trực tiếp tất cả các tính năng của hệ thống tạo website tự động</p>
                <button class="c-box1__btn">Liên hệ ngay</button>
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
                <p class="c-box1__txt">Trải nghiệm trực tiếp tất cả các tính năng của hệ thống tạo website tự động</p>
                <button class="c-box1__btn"><i class="fa fa-phone"></i> 096.098.987</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
</main>
@endsection
