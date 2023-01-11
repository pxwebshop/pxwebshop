@section('title','Liên hệ')
@extends('layouts.template')

@section('content')
<main class="p-contact" id="contact">
    <div class="c-box13">
        <div class="c-box13__inner">
            <div class="l-container">
                <h2 class="c-box13__tlt">ຂໍ້​ມູນ​ຕິດ​ຕໍ່</h2>
                <ul class="c-breadcrumb">
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="/#home">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <span class="c-breadcrumb__txt">​ຕິດ​ຕໍ່</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="p-contact1">
        <div class="p-contact1__content">
            <div class="l-container">
                <ul class="c-box8">
                    <li class="c-box8__item">
                        <h5 class="c-box8__tlt">ຕິດຕໍ່ໂດຍກົງ</h5>
                        <p class="c-box8__txt">ເມື່ອໃດກໍ່ຕາມທີ່ທ່ານຕ້ອງການຄວາມຊ່ວຍເຫຼືອ, ກະລຸນາຕິດຕໍ່ພວກເຮົາໂດຍຜ່ານຊ່ອງທາງຕໍ່ໄປນີ້.</p>
    
                        <div class="c-box8__wrap">
                            <ul class="c-box8__address">
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img1.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__style1">
                                        <div class="c-box8__address__text">
                                            <h5>ທີ່ຢູ່: </h5>						
                                            <p>ບ້ານ ຂາມງອຍ,​ ເມືອງ ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img2.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__text">
                                        <h5>HOTLINE</h5>						
                                        <a class="c-box8__phone" href="tel:+02028266650">020 28266650</a>
                                    </div>
                                </li>
                                <li class="c-box8__address__item">
                                    <figure>
                                        <img src="{{asset('images/address/img3.png')}}" alt="">
                                    </figure>
                                    <div class="c-box8__address__text">
                                        <h5>Email</h5>						
                                        <p>laosmarttech@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="c-box8__icon">
                                <h5 class="c-box8__titleSocial">ຕິດຕາມພວກເຮົາ: &nbsp; </h5>
                                <div class="c-box8__socialIcons">
                                    <a href="https://www.facebook.com/laosmarttech" target="_blank" rel="noopener noreferrer nofollow">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/message/FJW3P3M2S54IA1?autoload=1&app_absent=0" target="_blank" rel="noopener noreferrer nofollow">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="c-box8__item">
                        <form action="/contact" class="c-box8__form" method="POST">
                            @csrf
                            <h5 class="c-box8__form__tlt">ສົ່ງຄວາມຕ້ອງການ ເພື່ອຂໍຄຳແນະນຳ</h5>
                            @if (\Session::has('success'))
                                <p class="c-box8__message">{!! \Session::get('success') !!}</p>
                            @endif
                            @if (\Session::has('error'))
                                <p class="c-box8__message c-box8__message--error">{!! \Session::get('error') !!}</p>
                            @endif

                            <div class="c-box8__input">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                                @include('_partials.alert', ['field' => 'name'])
                            </div>
                            <div class="c-box8__input">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="ອີເມວ">
                                @include('_partials.alert', ['field' => 'email'])
                            </div>
                            <div class="c-box8__input">
                                <input type="number" name="phone" value="{{ old('phone') }}" placeholder="ເບີ້ໂທລະສັບ">
                                @include('_partials.alert', ['field' => 'phone'])
                            </div>
                            <textarea name="description" rows="10">{{ old('description') }}</textarea>
                            <div class="c-box8__input">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn-refresh"><i class="fa fa-refresh"></i></button>
                                    <input id="captcha" type="text" class="form-control" placeholder="ປ້ອນ Captcha" name="captcha">
                                  </div>
                                @include('_partials.alert', ['field' => 'captcha'])
                            </div>
                            <button class="c-box8__btn" type="submit">ສົ່ງຄວາມຕ້ອງການ &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-right"></i></button>
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

@push('scripts')

<script type="text/javascript">
    $(document).ready(function() {
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