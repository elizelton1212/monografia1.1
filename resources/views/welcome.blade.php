@extends('layouts.master')
@section('conteudo')

 <!--section  -->
 <section>
    <div class="container big-container">
        <div class="section-title">
            <h2><span>Actividades a Participar</span></h2>
            <div class="section-subtitle">Best Listings</div>
            <span class="section-separator"></span>
            <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
        </div>
        <div class="listing-filters gallery-filters fl-wrap">
            <a href="#" class="gallery-filter" data-filter=".restaurant">Restaurants </a>
            <a href="#" class="gallery-filter" data-filter=".hotels">Hotels</a>
            <a href="#" class="gallery-filter" data-filter=".events">Events</a>
            <a href="#" class="gallery-filter" data-filter=".fitness">Fitness</a>
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
        </div>
        <div class="grid-item-holder gallery-items fl-wrap">
            <!--  gallery-item-->
            <div class="gallery-item restaurant events">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/1.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">12 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                    <span>Restaurants</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#1" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">Pricey</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!--  gallery-item-->
            <div class="gallery-item events">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/9.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Rocko Band in Marquee Club</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  75 Prince St,  NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                                    <span>Events</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>2</strong></span></a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/9.jpg'},{'src': 'images/all/32.jpg'}, {'src': 'images/all/23.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="4"></span>
                                    <span class="price-name-tooltip">Ultra High</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item fitness">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/31.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">3.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                    <br>
                                    <div class="reviews-count">4 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                    <span>Fitness / Gym</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>3</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/31.jpg'},{'src': 'images/all/10.jpg'}, {'src': 'images/all/15.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">Moderate</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/16.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/3.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">5.0</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">4 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza Hotel</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 Bright St New York, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                    <span>Hotels</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/16.jpg'},{'src': 'images/all/27.jpg'}, {'src': 'images/all/20.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="4"></span>
                                    <span class="price-name-tooltip">Ultra High</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/28.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.7</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">9 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Handmade Shop</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                    <span>Shopping</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/28.jpg'},{'src': 'images/all/29.jpg'}, {'src': 'images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">Pricey</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item  restaurant hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/18.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.1</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">26 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in Manhattan</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ,  USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                    <span>Restaurants</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/18.jpg'},{'src': 'images/all/21.jpg'}, {'src': 'images/all/22.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">Moderate</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item fitness">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/52.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/6.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.1</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">56 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">BodyStrong Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                    <span>Fitness / Gym</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>7</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/10.jpg'},{'src': 'images/all/14.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">Moderate</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/all/62.jpg" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.7</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">9 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Family Store</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                    <span>Shopping</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/28.jpg'},{'src': 'images/all/29.jpg'}, {'src': 'images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">Pricey</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
        </div>

    </div>
</section>
<!--section end-->

22

<!--section end-->
<section class="parallax-section small-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="images/bg/22.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay  op7"></div>
    <div class="container">
        <div class=" single-facts single-facts_2 fl-wrap">
            <!-- inline-facts -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="1254">1254</div>
                        </div>
                    </div>
                    <h6>New Visiters Every Week</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="12168">12168</div>
                        </div>
                    </div>
                    <h6>Happy customers every year</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="2172">2172</div>
                        </div>
                    </div>
                    <h6>Won Amazing Awards</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="732">732</div>
                        </div>
                    </div>
                    <h6>New Listing Every Week</h6>
                </div>
            </div>
            <!-- inline-facts end -->
        </div>
    </div>
</section>
<!--section end-->

33
<!--section -->
<section   class="gray-bg hidden-section particles-wrapper">
    <div class="container">
        <div class="section-title">
            <h2>Lugares a Conhecer</h2>
            <div class="section-subtitle">Angola 7 Maravilhas</div>
            <span class="section-separator"></span>
            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus.</p>
        </div>

        <div id="app">
            <locais_cl></locais_cl>
        </div>
    </div>

</section>
<!--  section  -->

<script src="{{ asset('js/app.js') }}"></script>

@endsection


