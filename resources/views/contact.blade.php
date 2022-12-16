@section('title','Pxwebshop contact')
@extends('layouts.template')

@section('content')
<main class="p-contact" id="contact">
    <section class="p-contact1">
       
        <div class="p-contact1__content">
            <div class="l-container">
                <ul class="c-box8">
                    <li class="c-box8__item">
                        <h5 class="c-box8__tlt">Liên hệ trực tiếp</h5>
                        <p class="c-box8__txt">Bất cứ khi nào cần hỗ trợ, hãy liên hệ qua tôi các kênh sau.</p>
    
                        <div class="c-box8__wrap">
                            <ul class="c-box8__address">
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img1.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__style1">
                                        <div class="c-box8__address__text">
                                            <h5>Địa chỉ tại Lào: </h5>						
                                            <p>ບ້ານ ຂາມງອຍ,​ ເມືອງ ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ</p>
                                        </div>
                                        <div class="c-box8__address__text">
                                            <h5>Địa chỉ ở Việt Nam: </h5>						
                                            <p>150 Huỳnh Tần Phát, Tân Thuận Đông, Quận 7, Thành Phố Hồ Chí Minh</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img2.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__text">
                                        <h5>HOTLINE</h5>						
                                        <a class="c-box8__phone" href="+tel:02028266650">020 28266650</a>
                                    </div>
                                </li>
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img3.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__text">
                                        <h5>Email</h5>						
                                        <p>pxwebshop@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="c-box8__icon">
                                <h5 class="c-box8__titleSocial">Chúng tôi trên: &nbsp; </h5>
                                <div class="c-box8__socialIcons">
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer nofollow" >
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer nofollow">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="c-box8__item">
                        <form action="" class="c-box8__form">
                            <h5 class="c-box8__form__tlt">Gửi yêu cầu tư vấn</h5>
                            <div class="c-box8__input">
                                <input type="text" placeholder="Nhập họ và tên">
                            </div>
                            <div class="c-box8__input">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="c-box8__input">
                                <input type="number" placeholder="Nhập số điện thoại">
                            </div>
                            <textarea name="" rows="10"></textarea>
                            <button class="c-box8__btn" type="submit">Gửi yêu cầu &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-right"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            
            <ul class="c-form1">

            </ul>
        </div>

        <div class="p-contact1__area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7589.420135974364!2d102.66638249405541!3d17.992221101233906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3124679cd1397e6f%3A0x6820293abbbefccf!2z4LqaLiDgu4HguqrguofguqrgurDguqvguqfgu4jgurLguocg4Lqu4LuI4Lqt4LqhIDYs4LuE4LqK4LuA4Lqq4LqU4LqW4LqyLOC6meC6sOC6hOC6reC6meC6q-C6vOC6p-C6h-C6p-C6veC6h-C6iOC6seC6mQ!5e0!3m2!1sen!2s!4v1649131023954!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>
@endsection
