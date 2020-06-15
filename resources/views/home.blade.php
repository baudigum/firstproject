@extends('layouts.app')
@section('title','მთავარი გვერდი')
@section('content')
<section>
    <div class="slider">
        <div class="textBox">
            <div class="rightBox">
                <div class="rightSideBackground">
                <div class="box">
                    <img src="" alt="small" class="left">
                    <div class="right">
                        <div class="right-text">
                            <div class="text">
                                <h2 class="small">ნუბუკის დივანი</h2>
                                <span>ახალი კოლექცია</span>
                            </div>
                        </div>
                        <div class="next_arrow">
                            <img src="images/Shape-81.png" alt="next" class="Next">
                        </div>
                    </div>
                </div>
                <div class="progressBar"></div></div>
            </div>
        </div>
        <div id="owl-one" class="owl-carousel owl-theme">
            <div class="item">
                <img src="images/main-img2.jpg" alt="slider">
                <div class="leftBox">
                    <span class="one">აქცია</span>
                    <h2 class="title">ნუბუკის დივანი1</h2>
                    <button class="buy">იყიდე ეხლა</button>
                </div>
            </div>
            <div class="item">
                <img src="images/Layer 2.jpg" alt="slider">
                <div class="leftBox">
                    <span class="one">აქცია</span>
                    <h2 class="title">ნუბუკის დივანი2</h2>
                    <button class="buy">იყიდე ეხლა</button>
                </div>
            </div>
            <div class="item">
                <img src="images/11325.jpg" alt="slider">
                <div class="leftBox">
                    <span class="one">აქცია</span>
                    <h2 class="title">ნუბუკის დივანი3</h2>
                    <button class="buy">იყიდე ეხლა</button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="furniture">
    <div class="products">
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/sofa-copy.png" alt="" class="furniture_img1">
                    <img src="images/sofa-copy1.png" alt=""  class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/saagarake-2-copy1.png" alt="" class="furniture_img1">
                    <img src="images/saagarake-2-copy.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/balishebi-copy.png" alt="" class="furniture_img1">
                    <img src="images/balishebi-copy1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/tetreuli-2-copy.png" alt="" class="furniture_img1">
                    <img src="images/tetreuli-2-copy1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/dekoracia-copy1.png" alt="" class="furniture_img1">
                    <img src="images/dekoracia-copy11.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/churcheli-copy.png" alt="" class="furniture_img1">
                    <img src="images/churcheli-copy1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/textile-fill.png" alt="" class="furniture_img1">
                    <img src="images/textile-fill1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/dana-changali.png" alt="" class="furniture_img1">
                    <img src="images/dana-changali1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="furniture_box">
                <div class="furniture_img">
                    <img src="images/matrasi-2-copy.png" alt="" class="furniture_img1">
                    <img src="images/matrasi-2-copy1.png" alt="" class="furniture_img2">
                </div>
                <div class="furniture_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
    </div>
    <div class="furniture_modal_icon">
        <span>
            <i class="fa fa-navicon"></i>
        </span>
        <h4>კატეგორიები</h4>
    </div>
</div>
<div class="furniture_modal">
    <div class="lookFor">
        <button class="furniture_search"><img src="images/search.png" alt="search"></button>
        <input type="text" placeholder="ძებნა" class="look_input">
        <button class="closeModal"><img src="images/close.svg" alt="closeModal"></button>
    </div>
    <div class="furniture_modal_box">
        <a href="#">
            <div class="modalBox">
                <img src="images/sofa-copy.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/saagarake-2-copy1.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/balishebi-copy.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/tetreuli-2-copy.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/dekoracia-copy1.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/churcheli-copy.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/textile-fill.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/dana-changali.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="modalBox">
                <img src="images/matrasi-2-copy.png" alt="" class="modal_img">
                <div class="modal_text">
                    <h5>ავეჯი</h5>
                    <span>200 პროდუქტი</span>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="sold_products">
    <div class="container">
        <div class="right_title">
            <div class="title">
                <h3>გაყიდვადი პროდუქცია</h3>
                <span>TOP 8</span>
            </div>
        </div>
        <div class="sold_top">
            <h4>კატეგორიები</h4>
            <div class="bord"></div>
            <div class="arrows">
                <img src="images/arrow1.png" alt="" class="prev">
                <img src="images/arrow.png" alt="" class="next">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                <div class="left_product">
                    <div class="category_tab">
                        <ul class="list">
                            <li data-id="one" data-tab="tab-1"><a href="#">ავეჯი</a></li>
                            <li data-id="two" data-tab="tab-2"><a href="#">სააგარაკე</a></li>
                            <li data-id="three" data-tab="tab-3"><a href="#">ბალიში</a></li>
                            <li data-id="four" data-tab="tab-4"><a href="#">თეთრეული</a></li>
                            <li data-id="five" data-tab="tab-5"><a href="#">საჩიქრები/დეკორაციები</a></li>
                            <li data-id="six" data-tab="tab-6"><a href="#">ჭურჭელი</a></li>
                            <li data-id="seven" data-tab="tab-7"><a href="#">ტექსტილი</a></li>
                            <li data-id="eight" data-tab="tab-8"><a href="#">მაგიდის სერვირება</a></li>
                            <li data-id="nine" data-tab="tab-9"><a href="#">მატრასი</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-lg-10 col-md-10 col-sm-10">
                <div class="right_product">
                    <div class="category_slider">
                        <div id="one" class="sold show_category">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button c>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="two" class="sold" >
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>asasasasდივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია125444555555</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="three" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="df" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი1111111</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="four" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი 4</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count" >1</span class="minus">
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="five" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="six" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="seven" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="coount">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="eight" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <div id="nine" class="sold">
                            <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 51.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 41.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category_item">
                                    <div class="img">
                                        <a href="#"><img src="images/Layer 61.jpg" alt="" class="im"></a>
                                    </div>
                                    <div class="category_item_text">
                                        <div class="category_text">
                                            <div class="category_text_background">
                                                <div class="top_left">
                                                    <h5>დივანი</h5>
                                                    <p>ნაჭრის სამეული CAMELA</p>
                                                </div>
                                                <div class="bottom_left">
                                                    <h5>3800₾</h5>
                                                    <p>მარაგშია</p>
                                                </div>
                                            </div>
                                            <div class="category_text1">
                                                <div class="top_right">
                                                    <h5>კოდი</h5>
                                                    <p>KN-221162</p>
                                                </div>
                                                <div class="bottom_right">
                                                    <div class="shop">
                                                        <div class="number">
                                                            <button class="minus"><img src="images/arrow11.png" alt=""></button>
                                                            <span class="count">1</span>
                                                            <button class="add"><img src="images/arrow22.png" alt=""></button>
                                                        </div>
                                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                                    </div>
                                                    <button class="discount">აქცია</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection">
    <div class="container-fluid">
        <div class="collection1">
            <div class="row ml-0">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 pl-0 pr-0">
                    <a href="#">
                        <div class="left_collection">
                            <div class="collection_background">
                                <img src="images/45671.png" alt="collection" class="back">
                                <div class="colletction_text">
                                    <h3>ახალი კოლექცია</h3>
                                    <a href="#" class="full"><span>ვრცლად</span><img src="images/arrow2cat.png" alt="arrow2"></a>
                                </div>
                                <div class="poligon"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pl-0 pr-0">
                    <a href="#">
                        <div class="right_collection">
                            <div class="collection_background_right">
                                <img src="images/table70012.png" alt="collection" class="back">
                                <div class="colletction_text">
                                    <h3>ახალი კოლექცია</h3>
                                    <a href="#" class="full"><span>ვრცლად</span><img src="images/arrow2cat.png" alt="arrow2"></a>
                                </div>
                                <div class="poligon1"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="collection_slider">
            <div id="owl-three" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-17.png" alt="www" ></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-18.png" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount yellow">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-19.png" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-20.png" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount yellow">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-21.png" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer-22.png" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount yellow">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="collection_item">
                            <a href="#"><div class="image"><img src="images/Layer 61.jpg" alt=""></div></a>
                            <div class="collection_item_text">
                                <div class="collection_left_text">
                                    <h5>საძინებლის გარნიტური</h5>
                                    <span>3800₾</span>
                                    <p>მარაგშია</p>
                                </div>
                                <div class="collection_right_text">
                                    <button class="discount">აქცია</button>
                                    <div class="collection_shop">
                                        <button class="kalata"><img src="images/kalata.png" alt="kalata"></button>
                                        <div class="collection_number">
                                            <button class="Minus"><img src="images/arrow11.png" alt=""></button>
                                            <span class="theCount">1</span>
                                            <button class="Add"><img src="images/arrow22.png" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="arrow_circle">
                <div class="left_circle">
                    <img src="images/arrow1.png" alt="left">
                </div>
                <div class="right_circle">
                    <img src="images/arrow.png" alt="right">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="new_top">
                    <div class="news">
                        <div class="new_top_title">
                            <h3>ბოლო სიახლეები</h3>
                        </div>
                        <div class="line"></div>
                        <div class="arrows">
                            <img src="images/arrow_news1.png" alt="prev" class="new_prev">
                            <img src="images/arrow_news.png" alt="next" class="new_next">
                        </div>
                    </div>
                    <a href="#">
                        <span>სიახლეები</span>
                        <img src="images/arrow2.png" alt="arrow2">
                    </a>
                </div>
                <div id="owl-four" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer-15.png" alt="news">
                            <a href="#">
                                <div class="date">
                                    <span>4</span>
                                    <span>იან</span>
                                </div>
                            </a>
                            <div class="news_description">
                                <h4>რბილი ავეჯის გადასაფარებელი</h4>
                                <p>შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს.</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer-16.png" alt="news">
                            <a href="#">
                                <div class="date">
                                    <span>2</span>
                                    <span>თებ</span>
                                </div>
                            </a>
                            <div class="news_description">
                                <h4>საწოლის გადასაფარებლები პორტუგალიიდან</h4>
                                <p>შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="catalog_title">
                    <h3>კატალოგები და ჟურნალები</h3>
                    <div class="catalog_line"></div>
                    <div class="catalog_arrows">
                        <img src="images/arrow_news1.png" alt="prev" class="catalog_prev">
                        <img src="images/arrow_news.png" alt="next" class="catalog_next">
                    </div>
                </div>
                <div id="owl-five" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer 11.jpg" alt="catalog">
                            <div class="catalog_hover">
                                <h5>KONFOR <span>BY CLASSICA</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer 9.jpg" alt="catalog">
                            <div class="catalog_hover">
                                <h5>KONFOR <span>BY CLASSICA</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer 8.jpg" alt="catalog">
                            <div class="catalog_hover">
                                <h5>KONFOR <span>BY CLASSICA</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="images/Layer 10.jpg" alt="catalog">
                            <div class="catalog_hover">
                                <h5>KONFOR <span>BY CLASSICA</span></h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="info">
    <div class="container">
        <div class="info_border">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 p-0">
                    <a href="#">
                        <div class="box">
                            <img src="images/Shape-12.png" alt="box" class="box_img1">
                            <img src="images/Shape-1211.png" alt="box" class="box_img2">
                            <h4>ფილიალები</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 p-0">
                    <a href="#">
                        <div class="box">
                            <img src="images/Forma-11.png" alt="box" class="box_img1">
                            <img src="images/Forma-1111.png" alt="box" class="box_img2">
                            <h4>როგორ შევიძინო</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 p-0">
                    <a href="#">
                        <div class="box">
                            <img src="images/Shape-11.png" alt="box" class="box_img1">
                            <img src="images/Shape-111.png" alt="box" class="box_img2">
                            <h4>უფასო მიწოდება</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 p-0">
                    <a href="#">
                        <div class="box">
                            <img src="images/ganvadeba.png" alt="box" class="box_img1">
                            <img src="images/lari1.png" alt="box" class="box_img2">
                            <h4>განვადება</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
