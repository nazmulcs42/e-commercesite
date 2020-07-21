<!DOCTYPE html>
<html >
    <head>

        <title>E-Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="{{asset('frontcss/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="{{asset('frontcss/style.css')}}" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="{{asset('frontcss/jquery.countdown.css')}}" />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
        <!-- dropdown -->
        <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
        <!-- start menu -->
        <link href="{{asset('frontcss/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
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

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <!--<div class="container">-->

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
                                        <li><a href="{{route('customer.wishlist')}}">Wishlist</a></li> 
                                        <li><a href="{{route('customer.login')}}">Log In</a></li> 
                                        <li><a href="{{route('customer.register')}}">Sign Up</a></li>
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
                                    <!-- <h3 style=" color:blue">E-SHOP</h3>-->
                                   <a href="/"><img src="{{asset('images/logo.png')}}" alt=""/></a> 
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
                                <li class="active grid"><a class="color2" href="#">Home</a></li>
                                <li><a class="color4" href="{{route('product')}}">Category</a></li>              
                                <li><a class="color10" href="#">Men Fashion</a>
                                    <div class="megapanel">
                                        <div class="row">
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Men</h4>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Jackets</a></li>
                                                        <li><a href="{{route('product')}}">Blazers</a></li>
                                                        <li><a href="{{route('product')}}">Suits</a></li>
                                                        <li><a href="{{route('product')}}">Trousers</a></li>
                                                        <li><a href="{{route('product')}}">Jeans</a></li>
                                                        <li><a href="{{route('product')}}">Shirts</a></li>
                                                        <li><a href="{{route('product')}}">Sweatshirts & Hoodies</a></li>
                                                        <li><a href="{{route('product')}}">Swem Wear</a></li>
                                                        <li><a href="{{route('product')}}">Accessories</a></li>
                                                    </ul>    
                                                </div>                          
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Women</h4>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Outerwear</a></li>
                                                        <li><a href="{{route('product')}}">Dresses</a></li>
                                                        <li><a href="{{route('product')}}">Handbags</a></li>
                                                        <li><a href="{{route('product')}}">Trousers</a></li>
                                                        <li><a href="{{route('product')}}">Jeans</a></li>
                                                        <li><a href="{{route('product')}}">T-Shirts</a></li>
                                                        <li><a href="{{route('product')}}">Shoes</a></li>
                                                        <li><a href="{{route('product')}}">Coats</a></li>
                                                        <li><a href="{{route('product')}}">Accessories</a></li>
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
                                <li><a class="color3" href="{{asset('accessories')}}">Accessories</a></li>
                                <li><a class="color7" href="#">Women's Fashion</a>
                                    <div class="megapanel">
                                        <div class="row">
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Men</h4>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Jackets</a></li>
                                                        <li><a href="{{route('product')}}">Blazers</a></li>
                                                        <li><a href="{{route('product')}}">Suits</a></li>
                                                        <li><a href="{{route('product')}}">Trousers</a></li>
                                                        <li><a href="{{route('product')}}">Jeans</a></li>
                                                        <li><a href="{{route('product')}}">Shirts</a></li>
                                                        <li><a href="{{route('product')}}">Sweatshirts & Hoodies</a></li>
                                                        <li><a href="{{route('product')}}">Swem Wear</a></li>
                                                        <li><a href="{{route('product')}}">Accessories</a></li>
                                                    </ul>   
                                                </div>                          
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Women</h4>
                                                    <ul>
                                                        <li><a href="{{route('product')}}">Outerwear</a></li>
                                                        <li><a href="{{route('product')}}">Dresses</a></li>
                                                        <li><a href="{{route('product')}}">Handbags</a></li>
                                                        <li><a href="{{route('product')}}">Trousers</a></li>
                                                        <li><a href="{{route('product')}}">Jeans</a></li>
                                                        <li><a href="{{route('product')}}">T-Shirts</a></li>
                                                        <li><a href="{{route('product')}}">Shoes</a></li>
                                                        <li><a href="{{route('product')}}">Coats</a></li>
                                                        <li><a href="{{route('product')}}">Accessories</a></li>
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
                                <li><a class="color8" href="{{route('blog')}}">Blog</a></li>
                                <div class="clearfix"> </div>
                             </ul>
                          </div>
                    </div>
                    </div>
                    <div >
                        
                    </div>

                    <main class="py-4">
                       @yield('content')
                    </main>

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
                              <li><a href="{{asset('contact')}}">Contact Us</a></li>
                            </ul>
                            <p class="copy">Copyright&copy; 2020 developed by <a href="https://TechLatif.com" target="_blank"> w3layouts</a></p>
                        </div>
                    </div>
            </nav>
        </div>
    </body>
</html>