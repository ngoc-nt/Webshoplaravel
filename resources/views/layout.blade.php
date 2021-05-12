<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>{{$meta_title}}</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="{{$meta_desc}}">
  <meta name="keywords" content="{{$meta_keywords}}">
  <meta name="canonical" href="{{$url_canonical}}">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
  <meta property="og:site_name" content="http://localhost:8080/webshoplaravel" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href={{asset("public/frontend/css/font-awesome.min.css")}} />
  <link rel="stylesheet" type="text/css" href={{asset("public/frontend/css/bootstrap.css")}} />
  <link rel="stylesheet" type="text/css" href={{asset("public/frontend/css/style.css")}} />
  <link rel="stylesheet" type="text/css" href={{asset("public/frontend/css/magnific-popup.css")}}>
  <link rel="stylesheet" type="text/css" href={{asset("public/frontend/css/owl.carousel.css")}}>
  <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="//theme.hstatic.net/1000341789/1000533258/14/favicon.png?v=738" type="image/png" />
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png" type="image/png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" type="image/png" >
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" type="image/png">
</head>

<body>
    <!-- =====  LODER  ===== -->
    <div class="loder"></div>
    <div class="wrapper">
      <div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">
        <div class="newsletter-popup"> <img class="offer" src={{asset("public/frontend/images/newsbg.jpg")}} alt="offer">
          <div class="newsletter-popup-static newsletter-popup-top">
            <div class="popup-text">
              <div class="popup-title">Siêu giảm giá<span> tới 50% </span></div>
              <div class="popup-desc">
                <div>Đăng ký ngay để nhận ưu đãi lớn.</div>
              </div>
            </div>
            <form onsubmit="return  validatpopupemail();" method="post">
              <div class="form-group required">
                <input type="email" name="email-popup" id="email-popup" placeholder="Nhập email của bạn" class="form-control input-lg" required />
                <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Đăng ký</button>
                <label class="checkme">
                  <input type="checkbox" value="" id="checkme" /> Không nhắc lại</label>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- =====  HEADER START  ===== -->
      <header id="header">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="header-top-left">
                  <div class="contact"><span class="hidden-xs hidden-sm hidden-md">Mở cửa mỗi ngày từ 8:00 AM đến 8:00 PM</span></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <ul class="header-top-right text-right">
                  <li class="account"><a href="{{URL::to('/login-checkout')}}">Tài khoản của tôi</a></li>
                  <li class="cart"><a href="{{URL::to('/checkout')}}">Thanh toán</a></li>
                  <li class="cart"><a href="{{URL::to('/gio-hang')}}">Giỏ hàng</a></li>
                  <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Yêu thích <span class="caret"></span> </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                    </ul>
                  </li>
                  <?php
                      $customer_id = Session::get('customer_id');
                      $shipping_id = Session::get('shipping_id');
                      if($customer_id!=NULL && $shipping_id==NULL)
                      {

                      }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="header">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                  <form action="{{URL::to('/tim-kiem')}}" method="POST">
                  {{ csrf_field() }}
                      <div class="main-search mt_40">
                          <input id="search-input" name="keywords_submit" value="" placeholder="Tìm kiếm" class="form-control input-lg" autocomplete="off" type="text">
                          <span class="input-group-btn">
                      <button type="submit" class="btn btn-default btn-lg" name="search_item"><i class="fa fa-search"></i></button>
                      </span> </div>
                  </form>
              </div>
              <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="{{URL::to('/')}}"> <img alt="themini" src={{asset("public/frontend/images/logo.png")}}> </a> </div>
              <div class="col-xs-6 col-sm-4 shopcart">
                <form action="" method="">
                <div id="cart" class="btn-group btn-block mtb_40">
                  <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span> </button>
                </div>
                <div id="cart-dropdown" class="cart-menu collapse">
                  <ul>
                    <li>
                      <table class="table table-striped">
                        <tbody>
                              <tr>
                              <td class="text-center"><a href="#"><img src={{asset("public/frontend/images/product/70x84.jpg")}} alt="iPod Classic" title="iPod Classic"></a></td>
                              <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                                  <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                              </td>
                              <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                              </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-right"><strong>Sub-Total</strong></td>
                            <td class="text-right">$2,100.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                            <td class="text-right">$2.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>VAT (20%)</strong></td>
                            <td class="text-right">$20.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Total</strong></td>
                            <td class="text-right">$2,122.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <form action="/show-cart">
                        <input class="btn pull-left mt_10" value="View cart" type="submit">
                      </form>
                      <form action="checkout_page.html">
                        <input class="btn pull-right mt_10" value="Checkout" type="submit">
                      </form>
                    </li>
                  </ul>
                </div>
                </form>
            </div>
            </div>
            <nav class="navbar">
              <p>menu</p>
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
              <div class="collapse navbar-collapse js-navbar-collapse">
                <ul id="menu" class="nav navbar-nav">
                  <li> <a href="{{URL::to('/')}}">Trang chủ</a></li>
                  <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
                    <ul class="dropdown-menu mega-dropdown-menu row">
                      <li class="col-md-3">
                        <ul>
                          <li class="dropdown-header">Women's</li>

                          <li><a href="#">Unique Features</a></li>

                        </ul>
                      </li>
                      <li class="col-md-3">
                        <ul>
                          <li class="dropdown-header">Man's</li>
                          <li><a href="#">Unique Features</a></li>
                          <li><a href="#">Image Responsive</a></li>
                          <li><a href="#">Four columns</a></li>
                          <li><a href="#">Auto Carousel</a></li>
                          <li><a href="#">Newsletter Form</a></li>
                          <li><a href="#">Four columns</a></li>
                          <li><a href="#">Good Typography</a></li>
                        </ul>
                      </li>
                      <li class="col-md-3">
                        <ul>
                          <li class="dropdown-header">Children's</li>
                          <li><a href="#">Unique Features</a></li>
                          <li><a href="#">Four columns</a></li>
                          <li><a href="#">Image Responsive</a></li>
                          <li><a href="#">Auto Carousel</a></li>
                          <li><a href="#">Newsletter Form</a></li>
                          <li><a href="#">Four columns</a></li>
                          <li><a href="#">Good Typography</a></li>
                        </ul>
                      </li>
                      <li class="col-md-3">
                        <ul>
                          <li id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="item active"> <a href="#"><img src={{asset("public/frontend/images/menu-banner1.jpg")}} class="img-responsive" alt="Banner1"></a></div>
                              <!-- End Item -->
                              <div class="item"> <a href="#"><img src={{asset("public/frontend/images/menu-banner2.jpg")}} class="img-responsive" alt="Banner1"></a></div>
                              <!-- End Item -->
                              <div class="item"> <a href="#"><img src={{asset("public/frontend/images/menu-banner3.jpg")}} class="img-responsive" alt="Banner1"></a></div>
                              <!-- End Item -->
                            </div>
                            <!-- End Carousel Inner -->
                          </li>
                          <!-- /.carousel -->
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li> <a href="category_page.html">Shop</a></li>
                  <li> <a href="blog_page.html">Blog</a></li>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                    <ul class="dropdown-menu">
                      <li> <a href="cart_page.html">Cart</a></li>
                      <li> <a href="checkout_page.html">Checkout</a></li>
                      <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                      <li> <a href="single_blog.html">Single Post</a></li>
                    </ul>
                  </li>
                  <li> <a href="about.html">About us</a></li>
                  <li> <a href="contact_us.html">Contact us</a></li>
                </ul>
              </div>
              <!-- /.nav-collapse -->
            </nav>
          </div>
        </div>
      </header>
      <!-- =====  HEADER END  ===== -->
      <!-- =====  BANNER STRAT  ===== -->
      <div class="banner">
        @yield('banner')
      </div>
      <!-- =====  BANNER END  ===== -->
      <!-- =====  CONTAINER START  ===== -->
      <div class="container">
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row">
          <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
              <div class="icon-right Shipping"></div>
              <h6>Miễn phí vận chuyển</h6>
              <p>Miễn phí các đơn hàng </p>
            </div>
          </div>
          <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
              <div class="icon-right Order"></div>
              <h6>Đặt hàng Online</h6>
              <p>Từ : 8:00am - 11:00pm</p>
            </div>
          </div>
          <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
              <div class="icon-right Save"></div>
              <h6>Mua sắm tiết kiệm</h6>
              <p>Tặng voucher giảm giá</p>
            </div>
          </div>
          <div class="col-sm-3 mt_20 cms-icon ">
            <div class="feature-i-left ptb_30 ">
              <div class="icon-right Safe"></div>
              <h6>Mua sắm an toàn</h6>
              <p>Cam kết chính hãng </p>
            </div>
          </div>
        </div>
        <div class="row ">
            <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
            <!-- =====  PRODUCT TAB vừa cắt ===== -->
          @yield('content')
            <!-- =====  PRODUCT TAB  END ===== -->

        </div>
      </div>
      <!-- =====  CONTAINER END  ===== -->
      <!-- =====  FOOTER START  ===== -->
      <div class="footer pt_60">
        <div class="container">
          <div class="newsletters mt_30 mb_50">
            <div class="row">
              <div class="col-sm-6">
                <div class="news-head pull-left">
                  <h2>Follow Our Updates !</h2>
                  <div class="new-desc">Be the First to know about our Fresh Arrivals and much more!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="news-form pull-right">
                  <form onsubmit="return validatemail();" method="post">
                    <div class="form-group required">
                      <input style="width: 380px" name="email" id="email" placeholder="Enter Your Email" class="form-control input-lg" required="" type="email">
                      <button type="submit" class="btn btn-default btn-lg" style="width: 175px">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 footer-block">
              <h6 class="footer-title ptb_20">Information</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-block">
              <h6 class="footer-title ptb_20">Services</h6>
              <ul>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="">My Account</a></li>
                <li><a href="#">Order History</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-block">
              <h6 class="footer-title ptb_20">Extras</h6>
              <ul>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Gift Certificates</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Newsletter</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-block">
              <h6 class="footer-title ptb_20">Contacts</h6>
              <ul>
                <li>Công ty TNHH Ghiền mua sắm</li>
                <li>Số 1 Xuân Đỉnh, thành phố Hà Nội</li>
                <li>(+84) 0372105792</li>
                <li>thoigian5792@gmail.com</li>
                <li><a href="#">www.tiendo.com</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-bottom mt_60 ptb_20">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="social_icon">
                  <ul>
                    <li><a href="https://www.facebook.com/ngocnt.5792"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="https://github.com/humg-it98"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="copyright-part text-center">@2021 Website phát triển bởi <a target="self" href="https://www.facebook.com/ngocnt.5792/">Nguyễn Tuấn Ngọc</a></div>
              </div>
              <div class="col-sm-4">
                <div class="payment-icon text-right">
                  <ul>
                    <li><i class="fa fa-cc-paypal "></i></li>
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-discover"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  FOOTER END  ===== -->
    </div>
    <a id="scrollup"></a>
    <script src={{asset("public/frontend/js/jQuery_v3.1.1.min.js")}}></script>
    <script src={{asset("public/frontend/js/owl.carousel.min.js")}}></script>
    <script src={{asset("public/frontend/js/bootstrap.min.js")}}></script>
    <script src={{asset("public/frontend/js/jquery.magnific-popup.js")}}></script>
    <script src={{asset("public/frontend/js/jquery.firstVisitPopup.js")}}></script>
    <script src={{asset("public/frontend/js/custom.js")}}></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="nWBXSAKo"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="JNB9T0As"></script>
    <div class="zalo-chat-widget" data-oaid="248512510121692038" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="HywljSwE"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                alert( 'Đã thêm vào giỏ hàng');
                // alert( cart_product_name);
                // $.ajax({
                //     url: '{{url('/add-cart-ajax')}}',
                //     method: 'POST',
                //     data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                //     success:function(){

                //         swal({
                //                 title: "Đã thêm sản phẩm vào giỏ hàng",
                //                 text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                //                 showCancelButton: true,
                //                 cancelButtonText: "Xem tiếp",
                //                 confirmButtonClass: "btn-success",
                //                 confirmButtonText: "Đi đến giỏ hàng",
                //                 closeOnConfirm: false
                //             },
                //             function() {
                //                 window.location.href = "{{url('/gio-hang')}}";
                //             });

                //     }

                // });
            });
        });
    </script>


  </body>
</html>
