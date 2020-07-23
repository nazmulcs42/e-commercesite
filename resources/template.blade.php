<!DOCTYPE html>
<html >
    <head>

        <title>E-Commerce online Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
        <!-- dropdown -->
        <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
        <!-- start menu -->
        <link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="{{asset('js/responsiveslides.min.js')}}"></script>
        <script>
            $(function () {
              $("#slider").responsiveSlides({
                auto: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
              });
            });
        </script>
        <script src="{{asset('js/jquery.countdown.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>

    </head>
    <body>
        <div class="header_top">
          <div class="container">
            <div class="header_top-box">
             <div class="header-top-left">
                      <div class="box">
                            <select tabindex="4" class="dropdown drop">
                               <option value="" class="label" value="">Dollar :</option>
                               <option value="1">Dollar</option>
                               <option value="2">Euro</option>
                            </select>
                       </div>
                       <div class="box1">
                               <select tabindex="4" class="dropdown">
                                    <option value="" class="label" value="">English :</option>
                                    <option value="1">English</option>
                                    <option value="2">French</option>
                                    <option value="3">German</option>
                              </select>
                       </div>
                            <div class="clearfix"></div>
                     </div>
                     <div class="cssmenu">
                        <ul>
                            <li class="active"><a href="login.html">Account</a></li> 
                            <li><a href="wishlist.html">Wishlist</a></li> 
                            <li><a href="login.html">Log In</a></li> 
                            <li><a href="register.html">Sign Up</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
           </div>
        </div>
        </div>
        <div class="header_bottom">
            <div class="container">
             <div class="header_bottom-box">
                <div class="header_bottom_left">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""/></a>
                    </div>
                    <ul class="clock">
                        <i class="clock_icon"> </i>
                        <li class="clock_desc">Justo 24/h</li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="header_bottom_right">
                    <div class="search">
                      <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
                      <input type="submit" value="">
                    </div>
                    <ul class="bag">
                        <a href="#"><i class="bag_left"> </i></a>
                        <a href="#"><li class="bag_right"><p>205.00 $</p> </li></a>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        </div>
        <div class="menu">
            <div class="container">
                <div class="menu_box">
                 <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color2" href="index.html">Home</a></li>
                    <li><a class="color4" href="men.html">Special</a></li>              
                    <li><a class="color10" href="#">Men Fashion</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="men.html">Jackets</a></li>
                                            <li><a href="men.html">Blazers</a></li>
                                            <li><a href="men.html">Suits</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                            <li><a href="men.html">Swem Wear</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>   
                                    </div>                          
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Women</h4>
                                        <ul>
                                            <li><a href="men.html">Outerwear</a></li>
                                            <li><a href="men.html">Dresses</a></li>
                                            <li><a href="men.html">Handbags</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Shoes</a></li>
                                            <li><a href="men.html">Coats</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>   
                                    </div>                          
                                </div>
                                <div class="col2">
                                    <div class="h_nav">
                                        <h4>Trends</h4>
                                        <ul>
                                            <li class>
                                                <div class="p_left">
                                                   <img src="{{asset('images/t1.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                  <img src="images/t2.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                   <img src="{{asset('images/t3.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                        </ul>   
                                    </div>                                              
                                </div>
                              </div>
                            </div>
                    </li>
                    <li><a class="color3" href="404.html">Accessories</a></li>
                    <li><a class="color7" href="#">Women's Fashion</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="men.html">Jackets</a></li>
                                            <li><a href="men.html">Blazers</a></li>
                                            <li><a href="men.html">Suits</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">Shirts</a></li>
                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                            <li><a href="men.html">Swem Wear</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>   
                                    </div>                          
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Women</h4>
                                        <ul>
                                            <li><a href="men.html">Outerwear</a></li>
                                            <li><a href="men.html">Dresses</a></li>
                                            <li><a href="men.html">Handbags</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Shoes</a></li>
                                            <li><a href="men.html">Coats</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>   
                                    </div>                          
                                </div>
                                <div class="col2">
                                    <div class="h_nav">
                                        <h4>Trends</h4>
                                        <ul>
                                            <li class>
                                                <div class="p_left">
                                                   <img src="{{asset('images/t1.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                  <img src="{{asset('images/t2.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                   <img src="{{asset('images/t3.jpg')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                        </ul>   
                                    </div>                                              
                                </div>
                              </div>
                            </div>
                    </li>
                    <li><a class="color8" href="blog.html">Blog</a></li>
                    <div class="clearfix"> </div>
                 </ul>
              </div>
        </div>
        </div>
        <div class="index_slider">
            <div class="container">
              <div class="callbacks_container">
                  <ul class="rslides" id="slider">
                    <li><img src="{{asset('images/slider1.jpg')}}" class="img-responsive" alt=""/></li>
                    <li><img src="{{asset('images/2.jpg')}}" class="img-responsive" alt=""/></li>
                    <li><img src="{{asset('images/3.jpg')}}" class="img-responsive" alt=""/></li>
                  </ul>
              </div>
            </div> 
        </div>
        <div class="content_top">
            <div class="container">
                <div class="grid_1">
                    <div class="col-md-3">
                     <div class="box2">
                        <ul class="list1">
                            <i class="lock"> </i>
                            <li class="list1_right"><p>Upto 5% Reward on your shipping</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                     </div>
                    </div>
                    <div class="col-md-3">
                     <div class="box3">
                        <ul class="list1">
                            <i class="clock1"> </i>
                            <li class="list1_right"><p>Easy Extended Returned</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                     </div>
                    </div>
                    <div class="col-md-3">
                     <div class="box4">
                        <ul class="list1">
                            <i class="vehicle"> </i>
                            <li class="list1_right"><p>Free Shipping on order over 99 $</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                     </div>
                    </div>
                    <div class="col-md-3">
                     <div class="box5">
                        <ul class="list1">
                            <i class="dollar"> </i>
                            <li class="list1_right"><p>Delivery Schedule Spread Cheer Time</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                     </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="column_center">
                    <h1>1 of the most Beautiful online store </h1>
                    <h2>Clothes is one of the word'd leading E-commerce companies that designs and develops online stores</h2>
                </div>
                <div class="sellers_grid">
                    <ul class="sellers">
                        <i class="star"> </i>
                        <li class="sellers_desc"><h2>Best Sellers</h2></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="grid_2">
                    <div class="col-md-3 span_6">
                      <div class="box_inner">
                        <img src="{{asset('images/p1.jpg')}}" class="img-responsive" alt=""/>
                         <div class="sale-box"> </div>
                         <div class="desc">
                            <h3>Ullamcorper suscipit</h3>
                            <h4>178,90 $</h4>
                            <ul class="list2">
                              <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
                              <li class="list2_right"><span class="m_2"><a href="#" class="link1">See More</a></span></li>
                              <div class="clearfix"> </div>
                            </ul>
                            <div class="heart"> </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-md-3 span_6">
                      <div class="box_inner">
                        <img src="{{asset('images/p2.jpg')}}" class="img-responsive" alt=""/>
                         <div class="sale-box"> </div>
                         <div class="desc">
                            <h3>Ullamcorper suscipit</h3>
                            <h4>178,90 $</h4>
                            <ul class="list2">
                              <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
                              <li class="list2_right"><span class="m_2"><a href="#" class="link1">See More</a></span></li>
                              <div class="clearfix"> </div>
                            </ul>
                            <div class="heart"> </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-md-3 span_6">
                      <div class="box_inner">
                        <img src="{{asset('images/p3.jpg')}}" class="img-responsive" alt=""/>
                         <div class="sale-box"> </div>
                         <div class="desc">
                            <h3>Ullamcorper suscipit</h3>
                            <h4>178,90 $</h4>
                            <ul class="list2">
                              <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
                              <li class="list2_right"><span class="m_2"><a href="#" class="link1">See More</a></span></li>
                              <div class="clearfix"> </div>
                            </ul>
                            <div class="heart"> </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-md-3 span_6">
                      <div class="box_inner">
                        <img src="{{asset('images/p4.jpg')}}" class="img-responsive" alt=""/>
                         <div class="sale-box"> </div>
                         <div class="desc">
                            <h3>Ullamcorper suscipit</h3>
                            <h4>178,90 $</h4>
                            <ul class="list2">
                              <li class="list2_left"><span class="m_1"><a href="#" class="link">Add to Cart</a></span></li>
                              <li class="list2_right"><span class="m_2"><a href="#" class="link1">See More</a></span></li>
                              <div class="clearfix"> </div>
                            </ul>
                            <div class="heart"> </div>
                         </div>
                       </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="content_middle">
            <div class="container">
                <ul class="promote">
                    <i class="promote_icon"> </i>
                    <li class="promote_head"><h3>Promotion</h3></li>
                </ul>
                 <ul id="flexiselDemo3">
                                <li><img src="{{asset('images/n1.jpg')}}"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                    <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                    <div class="ticket"> </div>
                                </div></li>
                                <li><img src="{{asset('images/n2.jpg')}}"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                    <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                    <div class="ticket"> </div>
                                </div></li>
                                <li><img src="{{asset('images/n3.jpg')}}"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                    <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                    <div class="ticket"> </div>
                                </div></li>
                                <li><img src="{{asset('images/n4.jpg')}}"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                    <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                    <div class="ticket"> </div>
                                </div></li>
                                <li><img src="{{asset('images/n5.jpg')}}"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                    <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                    <div class="ticket"> </div>
                                </div></li>
                             </ul>
                            <script type="text/javascript">
                             $(window).load(function() {
                                $("#flexiselDemo3").flexisel({
                                    visibleItems: 6,
                                    animationSpeed: 1000,
                                    autoPlay:true,
                                    autoPlaySpeed: 3000,            
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: { 
                                        portrait: { 
                                            changePoint:480,
                                            visibleItems: 1
                                        }, 
                                        landscape: { 
                                            changePoint:640,
                                            visibleItems: 2
                                        },
                                        tablet: { 
                                            changePoint:768,
                                            visibleItems: 3
                                        }
                                    }
                                });
                                
                            });
                           </script>
                           <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
            </div>
        </div>
        <div class="container">
           <div class="content_middle_bottom">
              <div class="col-md-4">
                  <ul class="spinner">
                    <i class="spinner_icon"> </i>
                    <li class="spinner_head"><h3>But I must explain</h3></li>
                    <div class="clearfix"> </div>
                  </ul>
                  <div class="timer_box">
                    <div class="thumb"> </div>
                    <div class="timer_grid">
                    <ul id="countdown">
                    </ul>
                        <ul class="navigation">
                            <li>
                                <p class="timeRefDays">DAYS</p>
                            </li>
                            <li>
                                <p class="timeRefHours">HOURS</p>
                            </li>
                            <li>
                                <p class="timeRefMinutes">MINUTES</p>
                            </li>
                            <li>
                                <p class="timeRefSeconds">SECONDS</p>
                            </li>
                        </ul>
                  </div>
                  <div class="thumb_desc">
                    <h3> totam rem aperiam</h3>
                    <div class="price">
                       <span class="reducedfrom">$140.00</span>
                       <span class="actual">$120.00</span>
                    </div>
                 </div>
                 <a href="#"><div class="m_3 deal"><div class="link3">Buy this deal</div></div></a>
                </div>
                </div>
                <div class="col-md-8">
                  <ul class="spinner">
                    <i class="paperclip"> </i>
                    <li class="spinner_head"><h3>From the Blog</h3></li>
                    <div class="clearfix"> </div>
                  </ul>
                      <div class="a-top">
                         <div class="left-grid">
                            <img src="{{asset('images/t4.jpg')}}" class="img-responsive" alt=""/>
                         </div>
                         <div class="right-grid">
                            <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                         </div>
                         <div class="but">
                           <a class="arrow" href="#"> </a>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="a-top">
                         <div class="left-grid">
                            <img src="{{asset('images/t5.jpg')}}" class="img-responsive" alt=""/>
                         </div>
                         <div class="right-grid">
                            <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                         </div>
                         <div class="but">
                           <a class="arrow" href="#"> </a>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="a-top">
                         <div class="left-grid">
                            <img src="{{asset('images/t6.jpg')}}" class="img-responsive" alt=""/>
                         </div>
                         <div class="right-grid">
                            <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                         </div>
                         <div class="but">
                           <a class="arrow" href="#"> </a>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="a-top">
                         <div class="left-grid">
                            <img src="{{asset('images/t7.jpg')}}" class="img-responsive" alt=""/>
                         </div>
                         <div class="right-grid">
                            <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                         </div>
                         <div class="but">
                           <a class="arrow" href="#"> </a>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content_bottom">
                <div class="col-md-3 span_1">
                  <ul class="spinner">
                     <i class="box_icon"> </i>
                     <li class="spinner_head"><h3>mazim pla</h3></li>
                     <div class="clearfix"> </div>
                  </ul>
                  <img src="{{asset('images/t8.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-3 span_1">
                  <ul class="spinner">
                     <i class="bubble"> </i>
                     <li class="spinner_head"><h3>About Us</h3></li>
                     <div class="clearfix"> </div>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                </div>
                <div class="col-md-3 span_1">
                  <ul class="spinner">
                     <i class="mail"> </i>
                     <li class="spinner_head"><h3>Contact Us</h3></li>
                     <div class="clearfix"> </div>
                  </ul>
                 <ul class="social">
                    <li><a href=""> <i class="fb"> </i> </a></li>
                    <li><a href=""><i class="tw"> </i> </a></li>
                    <li><a href=""><i class="google"> </i> </a></li>
                    <li><a href=""><i class="linkedin"> </i> </a></li>
                    <li><a href=""><i class="skype"> </i> </a></li>
                </ul>
                </div>
                <div class="col-md-3 span_1">
                  <ul class="spinner">
                     <i class="mail"> </i>
                     <li class="spinner_head"><h3>Contact Us</h3></li>
                     <div class="clearfix"> </div>
                  </ul>
                  <p>500 Lorem Ipsum Dolor Sit,</p>
                  <p>22-56-2-9 Sit Amet, Lorem,</p>
                  <p>Phone:(00) 222 666 444</p>
                  <p><a href="mailto:info@demo.com"> info(at)gifty.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <img src="{{asset('images/pay.png')}}" class="img-responsive" alt=""/>
                <ul class="footer_nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <p class="copy">Copyright&copy; 2015 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
            </div>
        </div>
    </body>
</html>



====================================================================
admin-login

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>E-shop Admin Panel</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- end: Favicon -->
    
            <style type="text/css">
            body { background: url("{{asset('admin/img/bg-login.jpg')}}") !important; }
        </style>
        
        
        
</head>

<body>
        <div class="container-fluid-full">
        <div class="row-fluid">
                    
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="{{route('admin.index')}}"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" action="index.html" method="post">
                        <fieldset>
                            
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
                            </div>
                            <div class="clearfix"></div>
                            
                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    </form>
                    <hr>
                    <h3>Forgot Password?</h3>
                    <p>
                        No problem, <a href="#">click here</a> to get a new password.
                    </p>    
                </div><!--/span-->
            </div><!--/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
    
    <!-- start: JavaScript-->

        <script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{asset('admin/js/modernizr.js')}}"></script>
    
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
    
        <script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('admin/js/excanvas.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
        
        <script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.noty.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
    
        <script src="{{asset('admin/js/counter.js')}}"></script>
    
        <script src="{{asset('admin/js/retina.js')}}"></script>

        <script src="{{asset('admin/js/custom.js')}}"></script>
    <!-- end: JavaScript-->
    
</body>
</html>

=============
ui

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- end: Favicon -->
    
        
        
        
</head>

<body>
        <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Metro</span></a>
                                
                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">iOS Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Android Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{asset('admin/img/avatar.jpg')}}" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                6 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{asset('admin/img/avatar.jpg')}}" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                56 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{asset('admin/img/avatar.jpg')}}" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                3 hours
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{asset('admin/img/avatar.jpg')}}" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{asset('admin/img/avatar.jpg')}}" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Dennis Ji
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
                
            </div>
        </div>
    </div>
    <!-- start: Header -->
    
        <div class="container-fluid-full">
        <div class="row-fluid">
                
            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>   
                        <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
                        <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
                        <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                        <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
                            <ul>
                                <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                                <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                        <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                        <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                        <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                        <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                        <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                        <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                        <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                        <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->
            
            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>
            
            <!-- start: Content -->
            <div id="content" class="span10">
            
                        
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="icon-angle-right"></i> 
                </li>
                <li>
                    <i class="icon-eye-open"></i>
                    <a href="#">UI Features</a>
                </li>
            </ul>
    
            <div class="row-fluid"> 
                <div class="box yellow span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon tasks"></i><span class="break"></span>Sliders</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped">
                            <tr>
                                <td>
                                    <div class="slider sliderSimple"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin green"></div>
                                    <div class="field_notice">Min: <span class="must sliderMinLabel">$180</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMax blue"></div>
                                    <div class="field_notice">Max: <span class="must sliderMaxLabel">$280</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderRange red"></div>
                                    <div class="field_notice">Price Range: <span class="must sliderRangeLabel">$192 - $470</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="sliderVertical-1" class="sliderVertical greenDark"></div>
                                    <div id="sliderVertical-2" class="sliderVertical greenLight"></div>
                                    <div id="sliderVertical-3" class="sliderVertical pink"></div>
                                    <div id="sliderVertical-4" class="sliderVertical pinkDark"></div>
                                    <div id="sliderVertical-5" class="sliderVertical yellow"></div>
                                    <div id="sliderVertical-6" class="sliderVertical purple"></div>
                                    <div id="sliderVertical-7" class="sliderVertical blue"></div>
                                    <div id="sliderVertical-8" class="sliderVertical blueDark"></div>
                                    <div id="sliderVertical-9" class="sliderVertical blueLight"></div>
                                    <div id="sliderVertical-10" class="sliderVertical orange"></div>
                                    <div id="sliderVertical-11" class="sliderVertical orangeDark"></div>
                                    <div id="sliderVertical-12" class="sliderVertical red"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-1 green"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-2 yellow"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-3 pink"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-4 red"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-5 purple"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-6 greenDark"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-7 orange"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="slider sliderMin-8 blue"></div>
                                </td>
                            </tr>
                        </table>
                    </div>  
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box blue span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon hand-top"></i><span class="break"></span>Quick Buttons</h2>
                    </div>
                    <div class="box-content">
                        
                        <a class="quick-button span2">
                            <i class="icon-group"></i>
                            <p>Users</p>
                            <span class="notification blue">1.367</span>
                        </a>
                        <a class="quick-button span2">
                            <i class="icon-comments-alt"></i>
                            <p>Comments</p>
                            <span class="notification green">167</span>
                        </a>
                        <a class="quick-button span2">
                            <i class="icon-shopping-cart"></i>
                            <p>Orders</p>
                        </a>
                        <a class="quick-button span2">
                            <i class="icon-barcode"></i>
                            <p>Products</p>
                        </a>
                        <a class="quick-button span2">
                            <i class="icon-envelope"></i>
                            <p>Messages</p>
                        </a>
                        <a class="quick-button span2">
                            <i class="icon-calendar"></i>
                            <p>Calendar</p>
                            <span class="notification red">68</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>  
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon hand-top"></i><span class="break"></span>Small Quick Buttons</h2>
                    </div>
                    <div class="box-content">
                        
                        <a class="quick-button-small span1">
                            <i class="icon-group"></i>
                            <p>Users</p>
                            <span class="notification blue">7</span>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-comments-alt"></i>
                            <p>Comments</p>
                            <span class="notification green">4</span>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-shopping-cart"></i>
                            <p>Orders</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-barcode"></i>
                            <p>Products</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-envelope"></i>
                            <p>Messages</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-calendar"></i>
                            <p>Calendar</p>
                            <span class="notification red">8</span>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-beaker"></i>
                            <p>Projects</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-thumbs-up"></i>
                            <p>Likes</p>
                            <span class="notification green">1</span>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-heart-empty"></i>
                            <p>Favorites</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-bullhorn"></i>
                            <p>Notifications</p>
                            <span class="notification yellow">7</span>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-cogs"></i>
                            <p>Settings</p>
                        </a>
                        <a class="quick-button-small span1">
                            <i class="icon-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                        
                        <div class="clearfix"></div>
                    </div>  
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon tasks"></i><span class="break"></span>Progress Bars</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped">
                            <tr>
                                <td>Basic</td>
                                <td>
                                    <div class="progress simpleProgress blue">80</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Progress</td>
                                <td>
                                    <div class="progress progressAnimate yellow"></div>
                                    <div class="field_notice">Value: <span class="must progressAnimateValue">0%</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload</td>
                                <td>
                                    <div class="progress progressUploadAnimate pink"></div>
                                    <div class="field_notice">Uploading: <span class="must progressUploadAnimateValue">0 Mb</span> / 4096 Gb</div>
                                </td>
                            </tr>
                        </table>
                    </div>  
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon tasks"></i><span class="break"></span>Skill Bars</h2>
                    </div>
                    <div class="box-content">
                        <ul class="skill-bar">
                            <li>
                                <h5>Web Design ( 40% )</h5>
                                <div class="meter yellow"><span style="width: 40%"></span></div><!-- Edite width here -->
                            </li>
                            <li>
                                <h5>Wordpress ( 80% )</h5>
                                <div class="meter blue"><span style="width: 80%"></span></div><!-- Edite width here -->
                            </li>
                            <li>
                                <h5>Branding ( 100% )</h5>
                                <div class="meter pink"><span style="width: 100%"></span></div><!-- Edite width here -->
                            </li>
                            <li>
                                <h5>SEO Optmization ( 60% )</h5>
                                <div class="meter green"><span style="width: 60%"></span></div><!-- Edite width here -->
                            </li>
                        </ul>
                    </div>  
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon tasks"></i><span class="break"></span>Standard Progress Bars</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <h3>Basic</h3>
                        <div class="progress">
                            <div class="bar" style="width: 70%;"></div>
                        </div>
                        <h3>Striped</h3>
                        <div class="progress progress-striped">
                            <div class="bar" style="width: 30%;"></div>
                        </div>
                        <h3>Animated</h3>
                        <div class="progress progress-striped progress-success active">
                            <div class="bar" style="width: 50%;"></div>
                        </div>
                        <h3>Additional Colors</h3>
                        <div class="progress progress-info progress-striped" style="margin-bottom: 9px;">
                            <div class="bar" style="width: 20%"></div>
                        </div>
                        <div class="progress progress-success" style="margin-bottom: 9px;">
                            <div class="bar" style="width: 40%"></div>
                        </div>
                        <div class="progress progress-warning progress-striped active" style="margin-bottom: 9px;">
                            <div class="bar" style="width: 60%"></div>
                        </div>
                        <div class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
                            <div class="bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    
                    <div class="box-header">
                        <h2><i class="halflings-icon bullhorn"></i><span class="break"></span>Alerts</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content alerts">
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Well done!</strong> You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-block ">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4 class="alert-heading">Warning!</h4>
                            <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        </div>
                    </div>
                    
                </div><!--/span-->
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    
                    <div class="box-header">
                        <h2><i class="halflings-icon bell"></i><span class="break"></span>Growl Like Notifications</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="alert alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4 class="alert-heading">Attention!</h4>
                            <p>Click buttons below to see Pop Notifications.</p>
                        </div>
                        <p class="center">
                            <button class="btn btn-primary" id="add-regular"><i class="halflings-icon white bell"></i>Regular</button>
                            <button class="btn btn-primary" id="add-sticky"><i class="halflings-icon white bell"></i>Sticky</button>
                            <button class="btn btn-primary" id="add-without-image"><i class="halflings-icon white bell"></i>w/o image</button>
                            <button class="btn btn-primary" id="add-gritter-light"><i class="halflings-icon white bell"></i>White</button>
                            <button class="btn btn-primary" id="remove-all"><i class="halflings-icon white bell"></i>Remove All</button>
                        </p>
                    </div>
                    
                </div><!--/span-->
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span12">
                    
                    <div class="box-header">
                        <h2><i class="halflings-icon bell"></i><span class="break"></span>Bootstrap Notifications</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="alert alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4 class="alert-heading">Attention!</h4>
                            <p>Click buttons below to see Pop Notifications.</p>
                        </div>
                        <p class="center">
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is a success notification","layout":"topLeft","type":"success"}'><i class="halflings-icon white bell"></i> Top Left</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an alert notification with fade effect","layout":"topCenter","type":"alert","animateOpen": {"opacity": "show"}}'><i class="halflings-icon white bell"></i> Top Center (fade)</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an error notification","layout":"topRight","type":"error"}'><i class="halflings-icon white bell"></i> Top Right</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is a success information","layout":"top","type":"information"}'><i class="halflings-icon white bell"></i> Top Full Width</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an alert notification with fade effect","layout":"center","type":"alert","animateOpen": {"opacity": "show"}}'><i class="halflings-icon white bell"></i> Center (fade)</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an error notification","layout":"center","type":"error"}'><i class="halflings-icon white bell"></i> Center</button>

                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an error notification","layout":"bottomLeft","type":"error"}'><i class="halflings-icon white bell"></i> Bottom Left</button>
                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an alert notification with fade effect","layout":"bottomRight","type":"alert","animateOpen": {"opacity": "show"}}'><i class="halflings-icon white bell"></i> Bottom Right (fade)</button>

                            <button class="btn btn-primary noty" data-noty-options='{"text":"This is an alert","layout":"bottom","type":"alert","closeButton":"true"}'><i class="halflings-icon white bell"></i> Bottom Full Width with Close Button</button>
                        </p>
                    </div>
                    
                </div><!--/span-->
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid"> 
                <div class="box span4">
                    <div class="box-header">
                        <h2><i class="halflings-icon plus"></i><span class="break"></span>Extended Elements</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Star Rating</td>
                                <td>
                                    <span class="rating">
                                        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Popover</td>
                                <td>
                                    <a href="#" class="btn btn-danger" data-rel="popover" data-content="And here's some amazing content. It's very engaging. right?" title="A Title">Hover for popover</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dialog</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-setting">Click for dialog</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tooltip</td>
                                <td>
                                    <a href="#" title="Tooltip, you can change the position." data-rel="tooltip" class="btn btn-warning">Hover for tooltip</a>
                                </td>
                            </tr>
                        </table>
                    </div>  
                </div><!--/span-->
                
                <div class="box span2">
                    <div class="box-header">
                        <h2><i class="halflings-icon eye-open"></i><span class="break"></span>Labels</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped">
                            <tbody>
                              <tr>
                                <td>
                                  <span class="label">Default</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="label label-success">Success</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="label label-warning">Warning</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="label label-important">Important</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="label label-info">Info</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="label label-inverse">Inverse</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div><!--/span-->
                
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon list"></i><span class="break"></span>Buttons</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content buttons">
                        <p>
                            <button class="btn btn-large">Large button</button>
                            <button class="btn btn-large btn-primary">Large button</button>
                            <button class="btn btn-large btn-danger">Large button</button>
                            <button class="btn btn-large btn-warning">Large button</button>
                        </p>
                        <p>
                            <button class="btn btn-large btn-success">Large button</button>
                            <button class="btn btn-large btn-info">Large button</button>
                            <button class="btn btn-large btn-inverse">Large button</button>
                        </p>
                        <p>
                            
                        </p>
                        <div class="btn-group">
                            <button class="btn btn-large">Large Dropdown</button>
                            <button class="btn btn-large dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="halflings-icon star"></i> Action</a></li>
                                <li><a href="#"><i class="halflings-icon tag"></i> Another action</a></li>
                                <li><a href="#"><i class="halflings-icon download-alt"></i> Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="halflings-icon tint"></i> Separated link</a></li>
                            </ul>
                        </div>
                        
                        <hr>
                        
                        <p class="btn-group">
                              <button class="btn">Left</button>
                              <button class="btn">Middle</button>
                              <button class="btn">Right</button>
                        </p>
                        <p>
                            <button class="btn btn-small"><i class="halflings-icon white star"></i> Icon button</button>
                            <button class="btn btn-small btn-primary">Small button</button>
                            <button class="btn btn-small btn-danger">Small button</button>
                            <button class="btn btn-small btn-warning">Small button</button>
                            <button class="btn btn-small btn-success">Small button</button>
                            
                        </p>
                        <p>
                            <button class="btn btn-small btn-info">Small button</button>
                            <button class="btn btn-small btn-inverse">Small button</button>
                            <button class="btn btn-large btn-primary btn-round">Round button</button>
                            <button class="btn btn-large btn-round"><i class="halflings-icon white ok"></i></button>
                            <button class="btn btn-primary"><i class="halflings-icon white edit"></i></button>
                        </p>
                        <p>
                            <button class="btn btn-mini">Mini button</button>
                            <button class="btn btn-mini btn-primary">Mini button</button>
                            <button class="btn btn-mini btn-danger">Mini button</button>
                            <button class="btn btn-mini btn-warning">Mini button</button>
                            <button class="btn btn-mini btn-info">Mini button</button>
                            <button class="btn btn-mini btn-success">Mini button</button>
                            <button class="btn btn-mini btn-inverse">Mini button</button>
                        </p>
                        
                    </div>
                </div><!--/span-->
                
            </div><!--/row-->
            
            <hr>
            
            <div class="row-fluid">
                
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon th"></i><span class="break"></span>Tabs</h2>
                    </div>
                    <div class="box-content">
                        <ul class="nav tab-menu nav-tabs" id="myTab">
                            <li class="active"><a href="#info">Info</a></li>
                            <li><a href="#custom">Custom</a></li>
                            <li><a href="#messages">Messages</a></li>
                        </ul>
                         
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active" id="info">
                                <p>

                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   
                                </p>

                            </div>
                            <div class="tab-pane" id="custom">
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   
                                </p>
                            </div>
                            <div class="tab-pane" id="messages">
                                <p>
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.   
                                </p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->           
        

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
            
        </p>

    </footer>
    
    <!-- start: JavaScript-->

        <script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{asset('admin/js/modernizr.js')}}"></script>
    
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
    
        <script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('admin/js/excanvas.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
        
        <script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
        
        <script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.noty.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>
    
        <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
    
        <script src="{{asset('admin/js/counter.js')}}"></script>
    
        <script src="{{asset('admin/js/retina.js')}}"></script>

        <script src="{{asset('admin/js/custom.js')}}"></script>
    <!-- end: JavaScript-->
    
</body>
</html>
==============================================
admin-singleProduct

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gifty an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}
" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}
" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}
"></script>
<!-- dropdown -->
<script src="{{asset('js/jquery.easydropdown.js')}}
"></script>
<!-- start menu -->
<link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/megamenu.js')}}
"></script>

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="{{asset('css/etalage.css')}}"/>
<script src="{{asset('js/jquery.etalage.min.js')}}
"></script>
<script>
            jQuery(document).ready(function($){

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function(image_anchor, instance_id){
                        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                    }
                });

            });
        </script>
</head>
<body>
<div class="header_top">
  <div class="container">
    <div class="header_top-box">
     <div class="header-top-left">
              <div class="box">
                    <select tabindex="4" class="dropdown drop">
                       <option value="" class="label" value="">Dollar :</option>
                       <option value="1">Dollar</option>
                       <option value="2">Euro</option>
                    </select>
               </div>
               <div class="box1">
                       <select tabindex="4" class="dropdown">
                            <option value="" class="label" value="">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                      </select>
               </div>
                    <div class="clearfix"></div>
             </div>
             <div class="cssmenu">
                <ul>
                    <li class="active"><a href="login.html">Account</a></li> 
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="login.html">Log In</a></li> 
                    <li><a href="register.html">Sign Up</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
   </div>
</div>
</div>
<div class="header_bottom">
    <div class="container">
     <div class="header_bottom-box">
        <div class="header_bottom_left">
            <div class="logo">
                <a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""/></a>
            </div>
            <ul class="clock">
                <i class="clock_icon"> </i>
                <li class="clock_desc">Justo 24/h</li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="header_bottom_right">
            <div class="search">
              <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
              <input type="submit" value="">
            </div>
            <ul class="bag">
                <a href="#"><i class="bag_left"> </i></a>
                <a href="#"><li class="bag_right"><p>205.00 $</p> </li></a>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<div class="menu">
    <div class="container">
        <div class="menu_box">
         <ul class="megamenu skyblue">
            <li><a class="color2" href="index.html">Home</a></li>
            <li><a class="color4" href="men.html">Special</a></li>          
            <li class="active grid"><a class="color10" href="#">Men Fashion</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Men</h4>
                                <ul>
                                    <li><a href="men.html">Jackets</a></li>
                                    <li><a href="men.html">Blazers</a></li>
                                    <li><a href="men.html">Suits</a></li>
                                    <li><a href="men.html">Trousers</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">Shirts</a></li>
                                    <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                    <li><a href="men.html">Swem Wear</a></li>
                                    <li><a href="men.html">Accessories</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Women</h4>
                                <ul>
                                    <li><a href="men.html">Outerwear</a></li>
                                    <li><a href="men.html">Dresses</a></li>
                                    <li><a href="men.html">Handbags</a></li>
                                    <li><a href="men.html">Trousers</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">T-Shirts</a></li>
                                    <li><a href="men.html">Shoes</a></li>
                                    <li><a href="men.html">Coats</a></li>
                                    <li><a href="men.html">Accessories</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col2">
                            <div class="h_nav">
                                <h4>Trends</h4>
                                <ul>
                                    <li class>
                                        <div class="p_left">
                                           <img src="{{asset('images/t1.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                          <img src="{{asset('images/t2.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                           <img src="{{asset('images/t3.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                </ul>   
                            </div>                                              
                        </div>
                      </div>
                    </div>
            </li>
            <li><a class="color3" href="404.html">Accessories</a></li>
            <li><a class="color7" href="#">Women's Fashion</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Men</h4>
                                <ul>
                                    <li><a href="men.html">Jackets</a></li>
                                    <li><a href="men.html">Blazers</a></li>
                                    <li><a href="men.html">Suits</a></li>
                                    <li><a href="men.html">Trousers</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">Shirts</a></li>
                                    <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                    <li><a href="men.html">Swem Wear</a></li>
                                    <li><a href="men.html">Accessories</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Women</h4>
                                <ul>
                                    <li><a href="men.html">Outerwear</a></li>
                                    <li><a href="men.html">Dresses</a></li>
                                    <li><a href="men.html">Handbags</a></li>
                                    <li><a href="men.html">Trousers</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">T-Shirts</a></li>
                                    <li><a href="men.html">Shoes</a></li>
                                    <li><a href="men.html">Coats</a></li>
                                    <li><a href="men.html">Accessories</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col2">
                            <div class="h_nav">
                                <h4>Trends</h4>
                                <ul>
                                    <li class>
                                        <div class="p_left">
                                           <img src="{{asset('images/t1.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                          <img src="{{asset('images/t2.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                           <img src="{{asset('images/t3.jpg')}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Denim shirt</a></h4>
                                            <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                            <span class="price">29.99 $</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                </ul>   
                            </div>                                              
                        </div>
                      </div>
                    </div>
            </li>
            <li><a class="color8" href="blog.html">Blog</a></li>
            <div class="clearfix"> </div>
         </ul>
      </div>
</div>
</div>
<div class="men">
    <div class="container">
      <div class="single_top">
           <div class="col-md-9 single_right">
               <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="{{asset('images/s1.jpg')}}" class="img-responsive" />
                                    <img class="etalage_source_image" src="{{asset('images/s1.jpg')}}" class="img-responsive" title="" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s2.jpg')}}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{asset('images/s2.jpg')}}" class="img-responsive" title="" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s3.jpg')}}" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{asset('images/s3.jpg')}}"class="img-responsive"  />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s4.jpg')}}" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{asset('images/s4.jpg')}}"class="img-responsive"  />
                            </li>
                        </ul>
                         <div class="clearfix"></div>       
                  </div> 
                  <div class="desc1 span_3_of_2">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <p class="m_5">Rs. 888 <span class="reducedfrom">Rs. 999</span> <a href="#">click for offer</a></p>
                    <div class="btn_form">
                        <form>
                            <input type="submit" value="buy" title="">
                        </form>
                     </div>
                     <span class="m_link"><a href="#">login to save in wishlist</a> </span>
                     <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
                  </div>
                  <div class="clearfix"></div>  
       </div>
       <div class="col-md-3">
        <!-- FlexSlider -->
              <section class="slider_flex">
                  <div class="flexslider">
                    <ul class="slides">
                        <li><img src="{{asset('images/pic4.jpg')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{asset('images/pic7.jpg')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{asset('images/pic6.jpg')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{asset('images/pic5.jpg')}}" class="img-responsive" alt=""/></li>
                    </ul>
                  </div>
              </section>
<!-- FlexSlider -->
      </div>
      <div class="clearfix"> </div>
     </div>
       <div class="toogle">
        <h2>Product Details</h2>
        <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
     </div>
     <div class="toogle">
        <h2>More Information</h2>
        <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     <h4 class="head_single">Related Products</h4>
     <div class="span_3">
                 <div class="col-sm-3 grid_1">
                    <a href="single.html">
                     <img src="{{asset('images/pic9.jpg')}}" class="img-responsive" alt=""/>
                     <h3>parum clari</h3>
                     <p>Duis autem vel eum iriure</p>
                     <h4>Rs.399</h4>
                     </a>  
                  </div> 
                <div class="col-sm-3 grid_1">
                    <a href="single.html">
                     <img src="{{asset('images/pic8.jpg')}}" class="img-responsive" alt=""/>
                     <h3>parum clari</h3>
                     <p>Duis autem vel eum iriure</p>
                     <h4>Rs.399</h4>
                     </a>  
                  </div> 
                 <div class="col-sm-3 grid_1">
                    <a href="single.html">
                     <img src="{{asset('images/pic1.jpg')}}" class="img-responsive" alt=""/>
                     <h3>parum clari</h3>
                     <p>Duis autem vel eum iriure</p>
                     <h4>Rs.399</h4>
                     </a>  
                  </div> 
                  <div class="col-sm-3 grid_1">
                    <a href="single.html">
                     <img src="{{asset('images/pic3.jpg')}}" class="img-responsive" alt=""/>
                     <h3>parum clari</h3>
                     <p>Duis autem vel eum iriure</p>
                     <h4>Rs.399</h4>
                     </a>  
                  </div> 
                  <div class="clearfix"></div>
         </div>
      </div>
</div>
<div class="footer">
    <div class="container">
        <img src="{{asset('images/pay.png')}}" class="img-responsive" alt=""/>
        <ul class="footer_nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Media</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <p class="copy">Copyright&copy; 2015 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
    </div>
</div>
<link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
                              <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                              <script type="text/javascript">
                                $(function(){
                                  SyntaxHighlighter.all();
                                });
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>
</body>
</html>     