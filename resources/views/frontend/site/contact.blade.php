@extends('layouts.frontend.master')

@section('content')

<section class="contact-page-1 no-padding">
    <div id="contact-map1"></div>
    <div class="contact1-cont">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row contact1">
                        <div class="col-sm-12">
                            <h5 class="subtitle-margin">get in touch</h5>
                            <h1>Contact Us<span class="special-color">.</span></h1>
                            <div class="title-separator-primary"></div>
                        </div>
                        <div class="col-xs-12 col-md-6 margin-top-45">
                            <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img src="frontend/images/contact-image.jpg" alt="" class="pull-left margin-top-45 hidden-md" />
                            <address class="contact-info pull-left">
                                <span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
                                <span><i class="fa fa-envelope fa-sm"></i><a href="#">email@domain.tld</a></span>
                                <span><i class="fa fa-phone"></i>01-23456789</span>
                                <span><i class="fa fa-globe"></i><a href="#">http://somedmain.tld</a></span>
                                <span><i class="fa fa-clock-o"></i>mon-fri: 8:00 - 18:00</span>
                                <span class="span-last">sat: 10:00 - 16:00</span>
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-6 margin-top-45">
                            <form name="contact-from" id="contact-form" action="#" method="get">
                                <div id="form-result"></div>
                                <input name="name" id="name" type="text" class="input-short2 main-input required,all" placeholder="Your name" />
                                <input name="phone" id="phone" type="text" class="input-short2 pull-right main-input required,all" placeholder="Your phone" />
                                <input name="mail" id="mail" type="email" class="input-full main-input required,email" placeholder="Your email" />
                                <textarea name="message" id="message" class="input-full contact-textarea main-input required,email" placeholder="Your question"></textarea>
                                <div class="form-submit-cont">
                                    <a href="#" class="button-primary pull-right" id="form-submit">
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
        </div>
    </div>
</section>

<!-- google maps initialization -->		
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        mapInit(41.6926, -87.6021, "contact-map1", "frontend/images/pin-contact.png", true, true);
    }
</script>

@endsection
