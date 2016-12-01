@extends('layouts.frontend.master')

@section('content')

<section class="short-image no-padding agency">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12 short-image-title">
                <h5 class="subtitle-margin second-color">more</h5>
                <h1 class="second-color">about us</h1>
                <div class="short-title-separator"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-light section-top-shadow no-bottom-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="details-title pull-left">
                            <h3 class="title-negative-margin">Company Name<span class="special-color">.</span></h3>
                            <div class="details-agency-address">
                                <i class="fa fa-map-marker"></i>
                                <span>Fort Collins, Colorado 80523, USA</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="title-separator-primary"></div>
                        <div class="row margin-top-60">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <img src="frontend/images/logo1-big.png" alt="" />
                                <div class="details-parameters agency-details margin-top-60">
                                    <div class="team-desc-line">
                                        <span class="agent-icon-circle">
										<i class="fa fa-phone"></i>
									</span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="agent-icon-circle">
										<i class="fa fa-phone"></i>
									</span>
                                        <span>(0)-987-654-321</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="agent-icon-circle">
										<i class="fa fa-envelope fa-sm"></i>
									</span>
                                        <span><a href="#">apartment@domain.tld</a></span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="agent-icon-circle">
										<i class="fa fa-globe"></i>
									</span>
                                        <span><a href="#">www.domain.tld</a></span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="agent-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="agent-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="agent-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="agent-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-9">
                                <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                <br/>
                                <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                        <div class="row margin-top-60">
                            <div class="col-xs-12 col-sm-6">
                                <div id="agency-map" class="agency-map"></div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <form name="contact-from" action="#">
                                    <input name="name" type="text" class="input-full main-input" placeholder="Your name" />
                                    <input name="phone" type="text" class="input-full main-input" placeholder="Your phone" />
                                    <input name="mail" type="email" class="input-full main-input" placeholder="Your email" />
                                    <textarea name="message" class="input-full agent-textarea main-input" placeholder="Your question"></textarea>
                                    <div class="form-submit-cont">
                                        <a href="#" class="button-primary pull-right">
                                            <span>send</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-90">
                    <div class="col-xs-12 col-sm-9">
                        <h5 class="subtitle-margin">meet our</h5>
                        <h1>proffesional team<span class="special-color">.</span></h1>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="#" class="navigation-box navigation-box-next" id="team-owl-next">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                        </a>
                        <a href="#" class="navigation-box navigation-box-prev" id="team-owl-prev">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                        </a>
                    </div>
                    <div class="col-xs-12">
                        <div class="title-separator-primary"></div>
                    </div>
                </div>
                <div class="team-container">
                    <div class="owl-carousel" id="team-owl">
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent1.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
									<i class="fa fa-phone"></i>
								</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
									<i class="fa fa-envelope fa-sm"></i>
								</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>manager</h5>
                                    <h4>Mark Smith<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent2.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-phone"></i>
											</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-envelope fa-sm"></i>
											</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>Agent</h5>
                                    <h4>Michelle Jackson<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent3.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-phone"></i>
											</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-envelope fa-sm"></i>
											</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>specialist</h5>
                                    <h4>Robert Duncan<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent4.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-phone"></i>
											</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-envelope fa-sm"></i>
											</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>agent</h5>
                                    <h4>Veronica Green<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent5.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-phone"></i>
											</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-envelope fa-sm"></i>
											</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>agent</h5>
                                    <h4>Timothe Lee<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-cont">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="frontend/images/agent6.jpg" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                                    <div class="team-description">
                                        <div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-phone"></i>
											</span>
                                                <span>(0)-123-456-789</span>
                                            </div>
                                            <div class="team-desc-line">
                                                <span class="team-icon-circle">
												<i class="fa fa-envelope fa-sm"></i>
											</span>
                                                <span>apartment@domain.tld</span>
                                            </div>
                                            <div class="team-social-cont">
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="team-social">
                                                    <a class="team-icon-circle" href="#">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="team-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h5>agent</h5>
                                    <h4>Joanne Doe<span class="special-color">.</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-90">
                    <div class="col-xs-12 col-sm-9">
                        <h5 class="subtitle-margin">TOP</h5>
                        <h1>AGENCY OFFERS<span class="special-color">.</span></h1>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                        </a>
                        <a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                        </a>
                    </div>
                    <div class="col-xs-12">
                        <div class="title-separator-primary"></div>
                    </div>
                </div>
                <div class="grid-offers-container">
                    <div class="owl-carousel" id="grid-offers-owl">
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer1.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />54m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />3
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />1
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map1" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer2.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 299 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />48m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />1
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map2" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer3.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 400 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />93m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />4
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />2
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map3" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer4.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 800 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />300m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />8
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />3
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map4" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer5.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />50m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />1
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map5" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="frontend/images/grid-offer7.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 500 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="frontend/images/area-icon.png" alt="" />210m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="frontend/images/rooms-icon.png" alt="" />6
                                        </div>
                                        <div class="grid-baths">
                                            <img src="frontend/images/bathrooms-icon.png" alt="" />2
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map6" class="grid-offer-map"></div>
                                    <div class="button">
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
