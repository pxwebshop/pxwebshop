@section('title','Pxwebshop pay')
@extends('layouts.template')

@section('content')
<main class="p-pay" id="pay">
    <div class="c-box13">
        <div class="c-box13__inner">
            <div class="l-container">
                <h2 class="c-box13__tlt">ຂໍ້ມູນການຊຳລະເງິນ</h2>
                <ul class="c-breadcrumb">
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="#home">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <span class="c-breadcrumb__txt">ການຊຳລະເງິນ</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="p-pay1">
        <div class="l-content">
            <div class="p-pay1__box">
                <p class="p-pay1__tlt">* Đối với chuyển khoản qua ທະນາຄານ và Internet Banking:</p>
                <p class="p-pay1__txt">Khi Quý khách tiến hành chuyển khoản, vui lòng ghi rõ trong nội dung thanh toán bao gồm: Tên miền/ ID thành viên/Mã hợp đồng cần thanh toán để bộ phận kế toán tiến hành đăng ký hoặc gia hạn chính xác website của Quý khách.</p>
            </div>
            <div class="p-pay1__box">
                <p class="p-pay1__tlt">* Đối với chuyển khoản qua ATM:</p>
                <p class="p-pay1__txt">Sau khi Quý khách chuyển khoản, vui lòng gọi điện hoặc gửi tin nhắn cho chuyên viên tư vấn để chúng tôi xác nhận thông tin.</p>
            </div>
            <p class="p-pay1__contact">Hotline: 
                <span>
                    <a href="tel:+02028266650">020 28266650</a>
                </span>
            </p>
            <p class="p-pay1__contact">Email: 
                <span>pxwebshop@gmail.com</span>
            </p>
            <h2 class="c-title2">
                <span class="c-title2__text">
                ຂໍ້ມູນ <span class="c-title2__color1">ການຊຳລະເງິນ</span>
                </span>
            </h2>

            <ul class="c-list3">
                <li class="c-list3__item">
                   <div class="c-list3__content">
                        <figure class="c-list3__img">
                            <img src="/images/account/logo-bcel.png" alt="ບັນຊີເງິນກິບ (LAK)">
                        </figure>
                        <h2 class="c-title2">
                             <span class="c-title2__text">ບັນຊີເງິນກິບ (LAK)</span></h2>
                        <ul class="c-list3__wrap">
                            <li class="c-list3__txt">
                                <span>ທະນາຄານ</span>
                                <span>ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ</span>
                            </li>
                            <li class="c-list3__txt">
                                <span>ເຈົ້າຂອງບັນຊີ</span>
                                <span>PHONEXAY NAMSAVANH</span>
                            </li>
                            <li class="c-list3__txt">
                                <span>ເລກບັນຊີ</span>
                                <span>010-12-00-00087570-001</span>
                            </li>
                        </ul>
                        <figure>
                            <img src="/images/account/bcel-one-kip-qr.jpeg" alt="010-12-00-00087570-001">
                        </figure>
                   </div>
                </li>
                <li class="c-list3__item">
                    <div class="c-list3__content">
                        <figure class="c-list3__img">
                             <img src="/images/account/logo-bcel.png" alt="ບັນຊີເງິນໂດຣາ (USD)">
                         </figure>
                        <h2 class="c-title2">
                            <span class="c-title2__text">ບັນຊີເງິນໂດຣາ (USD)</span>
                        </h2>
                         <ul class="c-list3__wrap">
                             <li class="c-list3__txt">
                                 <span>ທະນາຄານ</span>
                                 <span>ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ</span>
                             </li>
                             <li class="c-list3__txt">
                                 <span>ເຈົ້າຂອງບັນຊີ</span>
                                 <span>PHONEXAY NAMSAVANH</span>
                             </li>
                             <li class="c-list3__txt">
                                 <span>ເລກບັນຊີ</span>
                                 <span>221-12-01-00087570-001</span>
                             </li>
                         </ul>
                         <figure>
                            <img src="/images/account/bcel-one-dollar-qr.jpeg" alt="221-12-01-00087570-001">
                        </figure>
                    </div>
                 </li>
            </ul>
        </div>
    </section>
</main>
@endsection