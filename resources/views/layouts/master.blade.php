

<!DOCTYPE HTML>
<html lang="pt">

<!-- Mirrored from townhub.kwst.net/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 14:55:56 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Townhub - Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/rtl-style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!-- logo-->
                <a href="{{url('/') }}" class="logo-holder"><img src="images/logo.png" alt=""></a>
                <!-- logo end-->
                <!-- header-search_btn-->
                <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
                <!-- header-search_btn end-->
                <!-- header opt -->
                <div class="show-reg-form modal-open avatar-img" data-srcav="images/avatar/3.jpg"><i class="fal fa-user"></i>Entrar</div>
                <!-- header opt end-->
                <!-- lang-wrap-->

                <!-- lang-wrap end-->
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a href="#" class="act-link">Principal<i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="#">Parallax Image</a></li>

                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="#">Pontos Turisticos <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="listing.html">Column map</a></li>

                                    <li>
                                        <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                        <!--third  level  -->
                                        <ul>
                                            <li><a href="listing-single.html">Style 1</a></li>
                                            <li><a href="listing-single2.html">Style 2</a></li>
                                            <li><a href="listing-single3.html">Style 3</a></li>
                                            <li><a href="listing-single4.html">Style 4</a></li>
                                        </ul>
                                        <!--third  level end-->
                                    </li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="blog.html">Eventos</a>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>

                                    <li><a href="about.html">About</a></li>

                                </ul>
                                <!--second level end-->
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <!-- header-search_container -->
                <div class="header-search_container header-search vis-search">
                    <div class="container small-container">
                        <div class="header-search-input-wrap fl-wrap">
                            <!-- header-search-input -->
                            <div class="header-search-input">
                                <label><i class="fal fa-keyboard"></i></label>
                                <input type="text" placeholder="What are you looking for ?"   value=""/>
                            </div>
                            <!-- header-search-input end -->
                            <!-- header-search-input -->
                            <div class="header-search-input location autocomplete-container">
                                <label><i class="fal fa-map-marker"></i></label>
                                <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2" value=""/>
                                <a href="#"><i class="fal fa-dot-circle"></i></a>
                            </div>
                            <!-- header-search-input end -->
                            <!-- header-search-input -->
                            <div class="header-search-input header-search_selectinpt ">
                                <select data-placeholder="Category" class="chosen-select no-radius" >
                                    <option>All Categories</option>
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <!-- header-search-input end -->
                            <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i> Search </button>
                        </div>
                        <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
                    </div>
                </div>
                <!-- header-search_container  end -->
                <!-- wishlist-wrap-->
                <div class="header-modal novis_wishlist">
                    <!-- header-modal-container-->
                    <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar data-simplebar-direction='rtl'>
                        <!--widget-posts-->
                        <div class="widget-posts  fl-wrap">
                            <ul class="no-list-style">
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                                        <div class="widget-posts-descr-score">4.1</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                                        <div class="widget-posts-descr-score">5.0</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                                        <div class="widget-posts-descr-score">4.2</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
                                        <div class="widget-posts-descr-score">5.0</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- widget-posts end-->
                    </div>
                    <!-- header-modal-container end-->
                    <div class="header-modal-top fl-wrap">
                        <h4><span>Locations <strong></strong></span> : Your Wishlist</h4>
                        <div class="close-header-modal"><i class="far fa-times"></i></div>
                    </div>
                </div>
                <!--wishlist-wrap end -->
            </header>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <div class="bg bg_tabs"  data-bg="images/bg/hero/1.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Encontre Pontos Turisticos lindos para visitar e Participar de Grandes Eventos.</h1>
                                </div>
                                <h3>Encontre Pontos Turisticos lindos para visitar e Participar de Grandes Eventos.</h3>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li><a href="#tab-inpt4" data-bgtab="images/bg/hero/4.jpg"> Hoteis</a></li>
                                    <li><a href="#tab-inpt3" data-bgtab="images/bg/hero/3.jpg"> Restaurantes</a></li>
                                    <li><a href="#tab-inpt2" data-bgtab="images/bg/hero/2.jpg"> Eventos</a></li>
									<li class="current"><a href="#tab-inpt1" data-bgtab="images/bg/hero/1.jpg"> Lugares</a></li>
                                </ul>
                                <!--tabs -->
                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-keyboard"></i></label>
                                                        <input type="text" placeholder="What are you looking for?" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item location autocomplete-container">
                                                        <label><i class="fal fa-map-marker-check"></i></label>
                                                        <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="All Categories"  class="chosen-select" >
                                                            <option>All Categories</option>
                                                            <option>Shops</option>
                                                            <option>Hotels</option>
                                                            <option>Restaurants</option>
                                                            <option>Fitness</option>
                                                            <option>Events</option>
                                                        </select>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i>Search  </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt2" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-handshake-alt"></i></label>
                                                        <input type="text" placeholder="Event Name or Place" value=""/>
                                                    </div>

                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="Loaction" class="chosen-select on-radius" >
                                                            <option>All Cities</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Paris</option>
                                                            <option>Kiev</option>
                                                            <option>Moscow</option>
                                                            <option>Dubai</option>
                                                            <option>Rome</option>
                                                            <option>Beijing</option>
                                                        </select>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Event Date"     name="datepicker-here"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i>Search  </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt3" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-cheeseburger"></i></label>
                                                        <input type="text" placeholder="Restaurant Name" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Date and Time"     name="datepicker-here-time"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>

                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-user-friends"></i></label>
                                                        <input type="number" placeholder="Persons" value=""/>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i>Procurar  </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt4" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-cheeseburger"></i></label>
                                                        <input type="text" placeholder="Hotel Name" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-user-friends"></i></label>
                                                        <input type="number" placeholder="Persons" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container3 daterangepicker_big">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Date In Out"     name="dates"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i>Search  </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->
                            <div class="hero-categories fl-wrap">
                                <h4 class="hero-categories_title">O que esta a Procura? :</h4>
                                <ul class="no-list-style">
                                    <li><a href="listing.html"><i class="far fa-cheeseburger"></i><span>Restaurantes</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-bed"></i><span>Hoteis</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-shopping-bag"></i><span>Super Mercados</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-dumbbell"></i><span>Ginasios</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-cocktail"></i><span>Eventos</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                        </div>
                    </section>
                    <!--section end-->
                    <div class="sec-circle fl-wrap"></div>
                    <!--section -->
                    <section   class="gray-bg hidden-section particles-wrapper">
                        <div class="container">

                            <div class="listing-item-grid_container fl-wrap">
                                <div class="row">
                                    @yield('conteudo')
                                </div>
                            </div>

                        </div>

                    </section>
                    <!--  section  -->


                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            <footer class="main-footer fl-wrap">

                <!--sub-footer-->
                <div class="sub-footer  fl-wrap">
                    <div class="container">
                        <div class="copyright"> &#169; Todos Direitos Reservados A FCUAN</div>


                </div>
                <!--sub-footer end -->
            </footer>
            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap  modal_main">
                        <div class="main-register_title">Welcome to <span><strong>Town</strong>Hub<strong>.</strong></span></div>
                        <div class="close-reg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="check">
                                                <label for="check-a3">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit"     class="btn float-btn color2-bg"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"> Facebook</a>
                            </div>
                            <div class="wave-bg">
                                <div class='wave -one'></div>
                                <div class='wave -two'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;language=ar&amp;libraries=places&amp;callback=initAutocomplete"></script>
        <script src="{{asset('js/map-single.js')}}"></script>
    </body>

<!-- Mirrored from townhub.kwst.net/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 15:15:00 GMT -->
</html>
