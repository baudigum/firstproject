<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <meta property=”og:title” content=”@yield('ogtitle')” />
    <meta property=”og:type” content=”article” />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('header')
    <title>@yield('title')</title>
</head>
<body>
    <div class="mobile_menu">
        <ul class="mobile">
            <li><a href="{{route('index')}}" class="active">მთავარი</a></li>
            <li class="mob_drop"><a>პროდუქცია</a>
                <ul class="mob_product_drop">
                    <li><a>ავეჯი</a></li>
                    <li><a>მატრასი</a></li>
                    <li><a>ტექსტილი</a></li>
                    <li><a>ბალიში</a></li>
                    <li><a>მაგიდის სერვისება</a></li>
                </ul>
            </li>
            <li><a>ახალი კოლექცია</a></li>
            <li><a>აქცია</a></li>
            <li><a>რატომ კლასიკა</a></li>
            <li><a>კონტაქტი</a></li>
        </ul>
        <button class="mobile_menu_close"><img src="assets/assets/images/close.svg" alt="close"></button>
    </div>
    <div class="website_header">
        <div class="top_head-border">
            <div class="top_head">
                <div class="head_contact">
                    <a href="#"><img src="assets/images/call-center.png" alt="call"></a>
                    <a href="#">+995) 591 40 80 92</a>
                    <a href="#">/</a>
                    <a href="#">(+995) 557 77 57 18</a>
                </div>
                <div class="serv">
                    <div class="service">
                        <a href="#">უფასო მიწოდება</a>
                        <a href="#">/</a>
                        <a href="#">როგორ შევიძინო</a>
                    </div>
                    <div class="lenguage">
                        <div class="customSelect">
                            <div class="geo1"><img src="assets/images/geo-flag.svg" alt="geo"><span>ქარ</span></div>
                            <div class="usa1"><img src="assets/images/usa-flag.svg" alt="usa"><span>Eng</span></div>
                        </div>
                        <div class="dropSelect">
                            <ul>
                                <li class="geo"><a href="#"><img src="assets/images/geo-flag.svg" alt="geo"><span>ქარ</span></a></li>
                                <li class="usa"><a href="#"><img src="assets/images/usa-flag.svg" alt="usa"><span>Eng</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main_header">
            <div class="menu_fixed">
                <div class="logo"><a href="#"><img src="assets/images/logo.png" alt="logo"></a></div>
                <div class="mainMenu">
                    <ul class="main_header_menu">
                        <li><a href="{{ route('index') }}" class="{{ Route::current()->getName() == 'index' ? 'active' : '' }}">მთავარი</a></li>
                        <li><a href="{{ route('product') }}" class="{{ Route::current()->getName() == 'product' ? 'drop_active active' : 'drop_active' }}">პროდუქცია</a>
                            <div class="dropDownMenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul>
                                        </div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                            <h4>სკამები</h4>
                                            <ul>
                                                <li><a href="#">საოფისე</a></li>
                                                <li><a href="#">საკანცელარიო</a></li>
                                                <li><a href="#">პლასტიკური</a></li>
                                                <li><a href="#">ბაღი</a></li>
                                                <li><a href="#" class="see_all">ყველას ნახვა</a></li>
                                            </ul></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">ახალი კოლექცია</a></li>
                        <li><a href="#">აქცია</a></li>
                        <li><a href="#">რატომ კლასიკა</a></li>
                        <li><a href="#">კონტაქტი</a></li>
                    </ul>
                </div>
                <div class="menu_right_side">
                    <a href="#"><img src="assets/images/search.png" alt="search" id="search"></a>
                    <a href="#"><img src="assets/images/user.png" alt="user"></a>
                    <a href="#"><img src="assets/images/Forma-1.png" alt="form"></a>
                    <div class="total">
                        <span>(0)</span>
                        <span>0.111</span>
                    </div>
                    <span class="mobile_menuIcon">
                        <i class="fa fa-navicon"></i>
                    </span>
                </div>
            </div>
        </header>
    </div>
    <div class="search">
        <form class="search_form">
            <input type="text" placeholder="ძიება">
            <button><img src="assets/images/search.png" alt="search"></button>
            <button id="close"><img src="assets/images/close.svg" alt="close"></button>
        </form>
    </div>
    @yield('content')
    <footer>
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                        <div class="footer_column">
                            <h5>ნავიგაცია</h5>
                            <ul>
                                <li><a href="#">პროდუქცია</a></li>
                                <li><a href="#">ახალი კოლექცია</a></li>
                                <li><a href="#">აქცია</a></li>
                                <li><a href="#">რატომ კლასიკა</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2">
                        <h5>დახმარება</h5>
                        <ul>
                            <li><a href="#">მიტანის სერვისი</a></li>
                            <li><a href="#">როგორ შევიძინო</a></li>
                            <li><a href="#">გარანტია</a></li>
                            <li><a href="#">განვადება</a></li>
                            <li><a href="#">ვაკანსია</a></li>
                        </ul>
                    </div> -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                        <div class="footer_column">
                            <h5 class="footer_title">დაგვიკავშირდით</h5>
                            <ul class="address">
                                <li class="conn1"><a href="#">ალ.ყაზბეგის 14ბ 2 38 88 11</a></li>
                                <li class="conn2"><a href="#">ვაჟა-ფშაველას 51 2 31 1119</a></li>
                                <li  class="conn3"><a href="#">დ.დიღომი, როსტევან მეფის 4 2 37 11 11</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                        <div class="footer_column">
                            <h5 class="active">ცხელი ხაზი:</h5>
                            <ul class="connect">
                                <li><a href="#">(+995) 557 77 57 18</a></li>
                                <li><a href="#">(+995) 591 40 80 92</a></li>
                                <li class="order"><a href="#"><img src="assets/images/mail.png"><span>order@cl.ge</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="cont">
                            <textarea placeholder="მოგვწერეთ"></textarea>
                            <button>გაგზავნა</button>
                            <div class="social">
                                <a href="#">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <a href="#">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                  </span>
                                  </a>
                                <a href="#">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                  </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <p>All Rights Reserved. Created By <a href="#">CGROUP.GE</a></p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    @yield('footer')
</body>
</html>
