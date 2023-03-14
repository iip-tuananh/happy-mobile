<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="@yield('title')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ url()->current() }}" />
    <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="598" />
    <meta property="og:image:height" content="333" />
    <meta property="og:image:alt" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <!-- Fav Icon -->
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="preload" as="script" href="{{ asset('frontend/js/jquery.js') }}" />
    <script src="{{ asset('frontend/js/jquery.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/cookie.js') }}" />
    <script src="{{ asset('frontend/js/cookie.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/swiper.js') }}" />
    <script src="{{ asset('frontend/js/swiper.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{asset('frontend/js/quickview.js')}}" />
    <script src="{{asset('frontend/js/quickview.js')}}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/lazy.js') }}" />
    <script src="{{ asset('frontend/js/lazy.js') }}" type="text/javascript"></script>
    <link rel="preload" href="{{ asset('frontend/css/main.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/index.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/404page.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/snow.style.css')}}">
    <script src="{{asset('frontend/js/toastr.min.js')}}"></script>
    @yield('css')
    <style>
        :root {
            --mainColor: #ff5c00;
            --textColor: #231f20;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link href="{{ asset('frontend/css/main.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as='style' type="text/css"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link href="{{ asset('frontend/css/font.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/index.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <style>
        :root {
            --gradient1: #eb3349;
            --gradient1_2: #f45c43;
            --gradient3: #092477;
            --gradient4: #3a529b;
            --pricecolor: #ff5c00;
        }
    </style>
    <script>
        $(document).ready(function($) {
            awe_lazyloadImage();
        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    <script>
        const io = new IntersectionObserver((e, t) => {
                e.forEach(e => {
                    e.isIntersecting && (e.target.src = e.target.dataset.src, e.target.classList.add("loaded"),
                        t.unobserve(e.target))
                })
            }),
            bo = new IntersectionObserver((e, t) => {
                e.forEach(e => {
                    if (e.isIntersecting) {
                        const r = e.target;
                        r.style.backgroundImage = r.dataset.background, e.target.classList.add("loaded"), t
                            .unobserve(e.target)
                    }
                })
            });
        document.addEventListener("DOMContentLoaded", function() {
            const arr = document.querySelectorAll('.lazy')
            arr.forEach((v) => {
                io.observe(v);
            })
            const arrBg = document.querySelectorAll('.lazy_bg')
            arrBg.forEach((v) => {
                bo.observe(v);
            })
        })
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WB6T2NQ');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '955862305797994');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=955862305797994&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB6T2NQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @if (session()->has('successBill'));
    <div id="popup-notify" class="quickview-product">
        <div id="close-qw" class="quickview-overlay"></div>
        <div class="quick-view-product">
            <div class="row ">
                <div class="col-12 notify-modal">
                    <img class="img-tichxanh" src="{{url('frontend/img/tichxanh.png')}}" alt="">
                </div>
                <div class="col-12 notify-modal h3-notify">
                    <h3 > Đặt hàng thành công</h3>
                </div>
                <div class="col-12 notify-modal">
                    Đơn hàng của quý khách đã được cập nhật.Chúng tôi sẽ sớm liên hệ với quý khách để bàn giao sản phẩm
                </div>
                <div class="col-12 notify-modal">
                    Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi !
                </div>
            </div>
            <div class="row"></div>
        <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="removeNotify()">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
            </svg>
        </a>
        </div>
    </div>     
    @endif
    <div class="opacity_menu"></div>
    @include('layouts.header.index')
    @yield('content')
    @include('layouts.footer.index')
    
    <a href="#" class="backtop" title="Lên đầu trang">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10">
            <path fill="currentColor"
                d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"
                class=""></path>
        </svg>
    </a>
    <link rel="preload" as="style" href="{{ asset('frontend/css/ajaxcart.scss.css') }}" type="text/css">
    <link href="{{ asset('frontend/css/ajaxcart.scss.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <div class="backdrop__body-backdrop___1rvky"></div>
    <div id="popup-cart-desktop" class="popup-cart">
    </div>
    <div id="popup-cart-mobile" class="popup-cart-mobile">
    </div>
    <div id="quick-view-product" class="quickview-product" style="display:none">
    </div>
    <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
    <script src="{{asset('frontend/js/main.js')}}" type="text/javascript">
    </script>
    <style>
        .swatch.error {
        background-color: #fff5f5;
        padding: 5px 12px;
        }
        .swatch.error .message-error{
        color: #ff5c00
        }
        .swatch.error .click-color{
        background-color: #ffff;
        }
    </style>
    @yield('js')
    {{-- data-quick-view --}}
    <script>
        $('.quick-view-pro').click(function(){
            var id = $(this).data('id');
            var url = $(this).data('url');
            $.ajax({
                type : 'POST',
                url : url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id : id},
                success:function(data){
                    $('#quick-view-product').css("display", "block");
                    $('#quick-view-product').html(data.html);
                }
            })
        })
    </script>

    {{-- add-to-cart --}}
    <script>
        $('.add_to_cart').click(function(e){
        e.preventDefault();
        var id = $(this).parent().find('input[name=id]').val();
        var quantity = $('input[name=quantity]').val();
        var color = $('input[name=color]').val();
        var price = $('input[name=product_price]').val();
        var url = $(this).data('url');
        if ($('input[name=color]').empty() && color == '') {
            $('.swatch').addClass('error');
            $('.message-error').html('<span>Vui lòng chọn phân loại bảo hành</span>'); 
        } else {
            $.ajax({
                type: "POST",
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id: id, quantity: quantity, color: color, price: price },
                success: function(data){
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.backdrop__body-backdrop___1rvky').addClass('active');
                    if ($(window).width() > 768) {
                        $('#popup-cart-desktop').html(data.html3);
                        $('#popup-cart-desktop').addClass('active');
                        $('#popup-cart-mobile').removeClass('active');
                    } else {
                        $('#popup-cart-mobile').html(data.html5);
                        $('#popup-cart-desktop').removeClass('active');
                        $('#popup-cart-mobile').addClass('active');
    
                    }
                }
            })
        }
        })
    </script>

    {{-- update-cart --}}
    <script>
        function btnMinus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
        function btnPlus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
        function removeItemCart(e) {
            var id = e
            var url = $('.remove-item-cart').data('url');
            $.ajax({
                type: 'get',
                url:url,
                data: {id:id},
                success: function(data) {
                    $('.top-cart-content').html(data.html1);
                    $('.count_item_pr').html(data.html2);
                    $('.CartPageContainer').html(data.html3);
                    $('.CartMobileContainer').html(data.html6);
                    $('#popup-cart-desktop').html(data.html4);
                }
            })
        }
    </script>
    {{-- romove-cart-popup --}}
    <script>
        function removePopup() {
            $('#popup-cart-desktop').removeClass('active');
            $('.backdrop__body-backdrop___1rvky').removeClass('active');
            $('#popup-cart-mobile').removeClass('active');
        }
        $('.backdrop__body-backdrop___1rvky').click(function() {
            $('#popup-cart-desktop').removeClass('active');
            $('#popup-cart-mobile').removeClass('active');
            $('.backdrop__body-backdrop___1rvky').removeClass('active');
        })
    </script>
    {{-- romove-notify-popup --}}
    <script>
        function removeNotify() {
            $('#popup-notify').css('display', 'none');
            }
            $('.quickview-overlay ').click(function() {
            $('#popup-notify').css('display', 'none');
            })
    </script>
    <div id="sidebar-all" class="d-none">
        <div class="sidebar-all-wrap-right container" data-type="wishlist">
            <div class="sidebar-all-wrap-right-main">
                <div class="sidebar-all-wrap-right-main-list row">
                </div>
            </div>
        </div>
    </div>
    <div class="compare-sidebar">
        <div class="sidebarAllMainCompare">
            <div class="sidebarAllHeader">
                <div class="container">
                    <div class="title">
                        <a href='/so-sanh-san-pham' title="Bấm vào đây để tới trang so sánh">
                            <span>Bấm vào đây để tới trang so sánh</span>
                        </a>
                        <span class="closeSidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path d="M12.9996 12.9996L1 1" stroke="#292D32" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 1.00024L12.25 1.75022M1.00035 12.9999L7.00018 7.00007L9.50037 4.49988"
                                    stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sidebarAllBody">
                </div>
            </div>
        </div>
    </div>
    <div class="overplayAll"></div>
    <div id="popupCartModal" class="modal fade" role="dialog"></div>
    <div class="addThis_listSharing addThis_listing">
        <div class="addThis_item">
            <a class="addThis_item-icon" href="tel:{{$setting->phone1}}" rel="nofollow" aria-label="phone"
                title="Gọi ngay cho chúng tôi ">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219"
                            y2="40.5458" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#e8434c" />
                            <stop offset="100%" stop-color="#d61114" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="tooltip-text">Gọi ngay cho chúng tôi </span>
            </a>
        </div>
        <div class="addThis_item">
            <a class="addThis_item-icon" href="https://zalo.me/{{$setting->phone1}}" target="_blank"
                rel="nofollow noreferrer" aria-label="zalo" title="Chat với chúng tôi qua Zalo ">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)" />
                    <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                            fill="white" />
                        <path
                            d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                            fill="white" />
                        <path
                            d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                            fill="white" />
                        <path
                            d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                            fill="#0068FF" />
                    </g>
                    <defs>
                        <linearGradient id="paint4_linear" x1="22" y1="0" x2="22"
                            y2="44" gradientUnits="userSpaceOnUse">
                            <stop offset="50%" stop-color="#3180f6" />
                            <stop offset="100%" stop-color="#096de8" />
                        </linearGradient>
                        <clipPath id="clip0">
                            <rect width="26.3641" height="24.2" fill="white"
                                transform="translate(8.78906 9.90234)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="tooltip-text">Chat với chúng tôi qua Zalo </span>
            </a>
        </div>
        <div class="addThis_item">
            <a class="addThis_item-icon" href="mailto:{{$setting->email}}" aria-label="email"
                title="Gửi email cho chúng tôi ">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="100" height="100"
                viewBox="0 0 100 100">
                <circle cx="13" cy="29" r="2" fill="#ee3e54"></circle><circle cx="77" cy="13" r="1" fill="#f1bc19"></circle><circle cx="50" cy="50" r="37" fill="#fce0a2"></circle><circle cx="83" cy="15" r="4" fill="#f1bc19"></circle><circle cx="87" cy="24" r="2" fill="#ee3e54"></circle><circle cx="81" cy="76" r="2" fill="#fbcd59"></circle><circle cx="15" cy="63" r="4" fill="#fbcd59"></circle><circle cx="25" cy="87" r="2" fill="#ee3e54"></circle><circle cx="18.5" cy="53.5" r="2.5" fill="#fff"></circle><circle cx="21" cy="67" r="1" fill="#f1bc19"></circle><circle cx="80" cy="34" r="1" fill="#fff"></circle><g><path fill="#472b29" d="M36.437,72.3c-4.817,0-8.737-3.92-8.737-8.737V36.438c0-4.817,3.92-8.737,8.737-8.737h27.125 c4.817,0,8.737,3.92,8.737,8.737v27.125c0,4.817-3.92,8.737-8.737,8.737H36.437z"></path><path fill="#472b29" d="M63.562,28.4c4.432,0,8.037,3.606,8.037,8.037v27.125c0,4.432-3.606,8.037-8.037,8.037H36.437 c-4.432,0-8.037-3.606-8.037-8.037V36.438c0-4.432,3.606-8.037,8.037-8.037H63.562 M63.562,27H36.437 C31.247,27,27,31.247,27,36.438v27.125C27,68.753,31.247,73,36.437,73h27.125C68.753,73,73,68.753,73,63.563V36.438 C73,31.247,68.753,27,63.562,27L63.562,27z"></path></g><g><path fill="#ee3e54" d="M66,43c0,0-7,0-8-8h-6v14.024V56l-0.05,3c-0.252,2.247-2.136,4-4.45,4c-2.485,0-4.5-2.015-4.5-4.5 s2.015-4.5,4.5-4.5c0.171,0,0.334,0.032,0.5,0.05v-6.025C47.833,48.017,47.669,48,47.5,48C41.701,48,37,52.701,37,58.5 C37,64.299,41.701,69,47.5,69c5.63,0,10.212-4.435,10.475-10H58V46.24c1.98,1.623,4.584,2.76,8,2.76C66,47,66,43,66,43z"></path></g><g><path fill="#472b29" d="M58,57c-0.138,0-0.25-0.112-0.25-0.25v-8.625c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25 v8.625C58.25,56.888,58.138,57,58,57z"></path></g><g><path fill="#472b29" d="M47.5,69.25c-0.799,0-1.595-0.088-2.366-0.261c-0.135-0.03-0.22-0.164-0.189-0.299 c0.03-0.134,0.159-0.221,0.299-0.189c1.468,0.329,3.038,0.331,4.5,0.002c0.324-0.071,0.647-0.16,0.963-0.265 c0.398-0.132,0.788-0.288,1.157-0.463c3.438-1.624,5.683-4.991,5.861-8.787c0.007-0.134,0.116-0.238,0.25-0.238 c0.138,0,0.263,0.112,0.263,0.25c0,0.034-0.006,0.066-0.018,0.097c-0.216,3.946-2.563,7.439-6.143,9.13 c-0.388,0.185-0.796,0.348-1.215,0.486c-0.331,0.109-0.671,0.203-1.011,0.278C49.087,69.163,48.296,69.25,47.5,69.25z"></path></g><g><path fill="#472b29" d="M43.354,56.998c-0.032,0-0.065-0.006-0.098-0.02c-0.127-0.054-0.187-0.201-0.133-0.328 c0.746-1.762,2.464-2.9,4.377-2.9c0.085,0,0.168,0.007,0.25,0.017v-5.741c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25v6.025 c0,0.071-0.03,0.139-0.083,0.187c-0.054,0.047-0.124,0.067-0.194,0.062l-0.154-0.02c-0.104-0.014-0.21-0.029-0.318-0.029 c-1.712,0-3.249,1.019-3.916,2.596C43.543,56.94,43.451,56.998,43.354,56.998z"></path></g><g><path fill="#472b29" d="M66,49.25c-1.45,0-2.831-0.205-4.106-0.609c-0.132-0.042-0.205-0.183-0.163-0.313 c0.042-0.132,0.187-0.205,0.313-0.163c1.153,0.365,2.399,0.562,3.706,0.584V43.24c-0.66-0.044-2.505-0.277-4.288-1.503 c-0.114-0.078-0.143-0.234-0.064-0.348c0.079-0.113,0.236-0.141,0.348-0.064c2.048,1.408,4.233,1.425,4.255,1.425 c0.138,0,0.25,0.112,0.25,0.25v6C66.25,49.138,66.138,49.25,66,49.25z"></path></g><g><path fill="#fff" d="M45.5,67.5c-6.065,0-11-4.935-11-11s4.935-11,11-11c0.12,0,0.237,0.008,0.355,0.016l0.168,0.011 c0.267,0.012,0.477,0.232,0.477,0.499v6.025c0,0.143-0.061,0.277-0.167,0.373c-0.092,0.082-0.211,0.127-0.333,0.127 c-0.019,0-0.216-0.023-0.216-0.023C45.69,52.515,45.597,52.5,45.5,52.5c-2.206,0-4,1.794-4,4s1.794,4,4,4 c2.026,0,3.726-1.528,3.952-3.556l0.048-2.953V33c0-0.276,0.224-0.5,0.5-0.5h6c0.252,0,0.465,0.188,0.496,0.438 c0.932,7.45,7.237,7.562,7.505,7.563c0.275,0.001,0.499,0.225,0.499,0.5v6c0,0.276-0.224,0.5-0.5,0.5 c-2.828,0-5.346-0.758-7.5-2.255V57c0,0.064-0.013,0.126-0.034,0.184C56.109,62.981,51.323,67.5,45.5,67.5z"></path><path fill="#472b29" d="M56,33c1,8,8,8,8,8s0,4,0,6c-3.416,0-6.02-1.136-8-2.76V57h-0.025C55.712,62.565,51.13,67,45.5,67 C39.701,67,35,62.299,35,56.5C35,50.701,39.701,46,45.5,46c0.169,0,0.333,0.017,0.5,0.025v6.025C45.834,52.032,45.671,52,45.5,52 c-2.485,0-4.5,2.015-4.5,4.5s2.015,4.5,4.5,4.5c2.314,0,4.198-1.753,4.45-4L50,54v-6.976V33H56 M56,32h-6c-0.552,0-1,0.448-1,1 v14.024V54l-0.049,2.933C48.732,58.685,47.257,60,45.5,60c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5 c0.075,0,0.147,0.013,0.219,0.023l0.169,0.022c0.037,0.004,0.074,0.006,0.111,0.006c0.245,0,0.482-0.09,0.667-0.255 C46.879,52.606,47,52.335,47,52.05v-6.025c0-0.534-0.419-0.974-0.953-0.999l-0.156-0.01C45.761,45.008,45.632,45,45.5,45 C39.159,45,34,50.159,34,56.5S39.159,68,45.5,68c6.069,0,11.06-4.695,11.461-10.729C56.986,57.185,57,57.094,57,57V46.161 C59.057,47.382,61.403,48,64,48c0.552,0,1-0.448,1-1v-6c0-0.552-0.448-1-1-1c-0.246-0.002-6.134-0.131-7.008-7.124 C56.93,32.376,56.504,32,56,32L56,32z"></path></g><g><path fill="#83ccb7" d="M64,41.892C64,41.352,64,41,64,41s-2.649-0.007-4.921-1.871C60.687,41.039,62.78,41.683,64,41.892z"></path><path fill="#83ccb7" d="M42.866,60.134C43.684,61.26,45.002,62,46.5,62c2.314,0,4.198-1.753,4.45-4L51,55v-6.976V34h5.181 c-0.067-0.324-0.136-0.645-0.181-1h-6v14.024V54l-0.05,3c-0.252,2.247-2.136,4-4.45,4C44.513,61,43.608,60.673,42.866,60.134z"></path><path fill="#83ccb7" d="M36,57.5c0-5.63,4.435-10.212,10-10.475v-1C45.833,46.017,45.669,46,45.5,46 C39.701,46,35,50.701,35,56.5c0,3.154,1.398,5.976,3.599,7.901C36.985,62.555,36,60.145,36,57.5z"></path></g><g><path fill="#472b29" d="M51,46.25c-0.138,0-0.25-0.112-0.25-0.25V34c0-0.138,0.112-0.25,0.25-0.25h5.181 c0.138,0,0.25,0.112,0.25,0.25s-0.112,0.25-0.25,0.25H51.25V46C51.25,46.138,51.138,46.25,51,46.25z"></path><path fill="#472b29" d="M51,55.25c-0.138,0-0.25-0.112-0.25-0.25v-6.976c0-0.138,0.112-0.25,0.25-0.25 s0.25,0.112,0.25,0.25V55C51.25,55.138,51.138,55.25,51,55.25z"></path><path fill="#472b29" d="M46.5,62.25c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25c2.154,0,3.96-1.624,4.201-3.777 l0.022-1.436c0.002-0.137,0.114-0.246,0.25-0.246c0.001,0,0.003,0,0.004,0c0.139,0.002,0.248,0.116,0.246,0.254l-0.024,1.459 C50.929,60.435,48.909,62.25,46.5,62.25z"></path><path fill="#472b29" d="M42.367,48.107c-0.097,0-0.189-0.057-0.229-0.151c-0.055-0.127,0.004-0.274,0.131-0.328 c1.181-0.505,2.432-0.792,3.72-0.853c0.121,0.013,0.255,0.101,0.262,0.238c0.006,0.138-0.101,0.255-0.238,0.262 c-1.228,0.058-2.421,0.331-3.546,0.812C42.434,48.101,42.4,48.107,42.367,48.107z"></path><path fill="#472b29" d="M36,57.75c-0.138,0-0.25-0.112-0.25-0.25c0-3.713,1.881-7.112,5.03-9.093 c0.116-0.07,0.271-0.039,0.345,0.079c0.073,0.116,0.038,0.271-0.079,0.345c-3.003,1.888-4.796,5.129-4.796,8.669 C36.25,57.638,36.138,57.75,36,57.75z"></path></g>
                                            </svg>
                <span class="tooltip-text">Xem trên tiktok </span>
            </a>
        </div>
        <div class="addThis_item">
            <a class="addThis_item-icon" href="{{$setting->fbPixel}}" rel="nofollow" aria-label="phone"
                title="Gọi ngay cho chúng tôi ">
                <svg width="115px" height="115px" viewBox="-7.2 -7.2 62.40 62.40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.2" y="-7.2" width="62.40" height="62.40" rx="31.2" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <title>Youtube-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke-width="0.00048000000000000007" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -362)" fill="#CE1312"> <path d="M219.044,391.269916 L219.0425,377.687742 L232.0115,384.502244 L219.044,391.269916 Z M247.52,375.334163 C247.52,375.334163 247.0505,372.003199 245.612,370.536366 C243.7865,368.610299 241.7405,368.601235 240.803,368.489448 C234.086,368 224.0105,368 224.0105,368 L223.9895,368 C223.9895,368 213.914,368 207.197,368.489448 C206.258,368.601235 204.2135,368.610299 202.3865,370.536366 C200.948,372.003199 200.48,375.334163 200.48,375.334163 C200.48,375.334163 200,379.246723 200,383.157773 L200,386.82561 C200,390.73817 200.48,394.64922 200.48,394.64922 C200.48,394.64922 200.948,397.980184 202.3865,399.447016 C204.2135,401.373084 206.612,401.312658 207.68,401.513574 C211.52,401.885191 224,402 224,402 C224,402 234.086,401.984894 240.803,401.495446 C241.7405,401.382148 243.7865,401.373084 245.612,399.447016 C247.0505,397.980184 247.52,394.64922 247.52,394.64922 C247.52,394.64922 248,390.73817 248,386.82561 L248,383.157773 C248,379.246723 247.52,375.334163 247.52,375.334163 L247.52,375.334163 Z" id="Youtube"> </path> </g> </g> </g></svg>
                <span class="tooltip-text">Gọi ngay cho chúng tôi </span>
            </a>
        </div>
    </div>
    <a href="{{$setting->google}}" target="_blank" rel="noopener noreferrer">
    <div class="chat-mess">
        <i class="bi bi-messenger"></i>
    </div>
    </a>
    <div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-quickview">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.99929 0.908334C4.86815 0.908334 3.20577 2.12566 1.76033 3.90586C1.71565 3.96089 1.71565 4.03911 1.76033 4.09414C3.20577 5.87434 4.86815 7.09167 6.99929 7.09167C9.13043 7.09167 10.7928 5.87434 12.2383 4.09414C12.2829 4.03911 12.2829 3.96089 12.2383 3.90586C10.7928 2.12566 9.13043 0.908334 6.99929 0.908334ZM1.12634 3.39109C2.63915 1.52791 4.51047 0.0916672 6.99929 0.0916672C9.48812 0.0916672 11.3594 1.52791 12.8722 3.39109C13.1605 3.74608 13.1605 4.25392 12.8722 4.60891C11.3594 6.47209 9.48812 7.90833 6.99929 7.90833C4.51047 7.90833 2.63915 6.47209 1.12634 4.60891C0.838096 4.25392 0.838097 3.74608 1.12634 3.39109Z"
                        fill="#7B7B7B" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.99948 2.95C6.41958 2.95 5.94948 3.4201 5.94948 4C5.94948 4.5799 6.41958 5.05 6.99948 5.05C7.57938 5.05 8.04948 4.5799 8.04948 4C8.04948 3.4201 7.57938 2.95 6.99948 2.95ZM5.13281 4C5.13281 2.96907 5.96855 2.13333 6.99948 2.13333C8.03041 2.13333 8.86615 2.96907 8.86615 4C8.86615 5.03093 8.03041 5.86666 6.99948 5.86666C5.96855 5.86666 5.13281 5.03093 5.13281 4Z"
                        fill="#7B7B7B" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 11" fill="none">
                    <path
                        d="M1.21763 5.64124C0.581381 3.86545 1.37671 1.60538 3.12641 1.12108C4.08078 0.798209 5.35327 1.12106 5.98952 2.08967C6.62577 1.12106 7.89826 0.798209 8.85263 1.12108C10.7614 1.76682 11.3977 3.86545 10.7614 5.64124C9.96609 8.38563 6.78483 10 5.98952 10C5.19421 9.83856 2.17201 8.54707 1.21763 5.64124Z"
                        stroke="#7B7B7B" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-compare">
                <svg x="0" y="0" viewBox="0 0 459 459.648"
                    style="enable-background:new 0 0 512 512">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m416.324219 293.824219c0 26.507812-21.492188 48-48 48h-313.375l63.199219-63.199219-22.625-22.625-90.511719 90.511719c-6.246094 6.25-6.246094 16.375 0 22.625l90.511719 90.511719 22.625-22.625-63.199219-63.199219h313.375c44.160156-.054688 79.945312-35.839844 80-80v-64h-32zm0 0"
                        fill="#7B7B7B" data-original="#000000" style=""></path>
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="m32.324219 165.824219c0-26.511719 21.488281-48 48-48h313.375l-63.199219 63.199219 22.625 22.625 90.511719-90.511719c6.246093-6.25 6.246093-16.375 0-22.625l-90.511719-90.511719-22.625 22.625 63.199219 63.199219h-313.375c-44.160157.050781-79.949219 35.839843-80 80v64h32zm0 0"
                        fill="#7B7B7B" data-original="#000000" style=""></path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-viewmore">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 11" fill="none">
                    <path
                        d="M12.9764 9.08131C12.7355 9.31672 12.7355 9.70421 12.9764 9.93962C13.2096 10.1675 13.5821 10.1675 13.8153 9.93962L17.8089 6.03635C18.1099 5.74213 18.1099 5.25784 17.8089 4.96362L13.8153 1.06038C13.5821 0.832464 13.2096 0.832464 12.9764 1.06038C12.7355 1.29579 12.7355 1.68328 12.9764 1.91869L15.592 4.47507C15.7522 4.63172 15.6413 4.90386 15.4172 4.90386L1.34615 4.90385C1.01691 4.90385 0.75 5.17076 0.75 5.50001C0.75 5.82925 1.01691 6.09616 1.34615 6.09616L15.4172 6.09617C15.6413 6.09617 15.7522 6.36831 15.5919 6.52496L12.9764 9.08131Z"
                        fill="url(#paint0_linear_158_2937)" stroke="url(#paint1_linear_158_2937)"
                        stroke-width="0.5" />
                    <defs>
                        <linearGradient id="paint0_linear_158_2937" x1="9.5" y1="10" x2="9.5"
                            y2="0.999999" gradientUnits="userSpaceOnUse">
                            <stop offset="0.786458" stop-color="#3A529B" />
                        </linearGradient>
                    </defs>
                </svg>
            </symbol>
        </svg>
    </div>
</body>
</html>
