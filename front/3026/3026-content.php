<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<footer class="type-3026">
    <div class='container'>
        <div class="upper-footer">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-12 col-xx-12">
                    <div class="single-left-footer">
                        <div class="single-left-footer-logo">
                            <a href="#">
                                <img src="http://<?php echo $url_path ?>/images/footer-logo.png" alt="footer-logo" />
                            </a>
                        </div>
                        <div class="single-left-footer-info">
                            <p class="top">
                                Repairplus brings 41 years of Digital Repairs experience right to your Device. Our Texhnicians are equipped to help you that work best.
                            </p>
                            <p class="bottom">
                                Our commitment to bring professionalism, good service & trust to the Phone repair service & maintenance business.
                            </p>
                            <div class="purchase-button">
                                <a href="#" class="btn-purchase">PURCHASE THEME</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-9 col-sm-12 col-xx-12 right-footer">
                    <div class="widget-right-footer">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="right-footer-service" id="service">
                                    <div class="title">
                                        <h3>OUR SERCICES</h3>
                                    </div>
                                    <div class="service-widget">
                                        <ul class="service-list">
                                            <li><a href="#">Smart Phone Repair</a></li>
                                            <li><a href="#">Tablets & iPad Repair</a></li>
                                            <li><a href="#">Desktop & Laptop</a></li>
                                            <li><a href="#">Game System Repair</a></li>
                                            <li><a href="#">LCD & LED TV Repair</a></li>
                                            <li><a href="#">MP3 & MP4 Player</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="right-footer-subsribe" id="subscribe">
                                    <div class="title">
                                        <h3>SUBSCRIBE US</h3>
                                    </div>
                                    <div class="subscribe-form">
                                        <p>Subscribe to our newsletter!s</p>
                                        <form action="#" accept-charset="utf-8">
                                            <input type="email" placeholder="Enter your Email.." name="email">
                                            <button type="submit">
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        <h4>We don't do mail to spam and your mail id is confidential.</h4>
                                    </div>
                                    <div class="footer-social-links">
                                        <ul>
                                            <li>
                                                <a title="facebook" href="#">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Twitter" href="#">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Google Plus" href="#">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="LinkedIn" href="#">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="right-footer-contact" id="contact">
                                    <div class="footer-contact-info">
                                        <div class="title">
                                            <h3>CONTACT INFO</h3>
                                        </div>
                                        <ul class="contact-info">
                                            <li>
                                                <div class="icon-holder">
                                                    <span class="icon-address"></span>
                                                </div>
                                                <div class="text-holder">
                                                    <span>32, Breaking Street,</span>
                                                    <br>
                                                    "2nd cros, Newyork ,USA 10002"
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder">
                                                    <span class="icon-phone"></span>
                                                </div>
                                                <div class="text-holder">
                                                    <span>CALL US</span>
                                                    <br>
                                                    "+111 111 111 111 111"
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder">
                                                    <span class="icon-mail"></span>
                                                </div>
                                                <div class="text-holder">
                                                    <span>MAIL US</span>
                                                    <br>
                                                    "Support@gmail.com"
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-holder">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text-holder">
                                                    <span>OPENING TIME</span>
                                                    <br>
                                                    "Mon - Sat: 09.00am to 18.00pm"
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="coppyright-text pull-left">
                        <p>
                            "Copyrights © 2022 All Rights Reserved by"
                            <a href="#">ThemeKalia</a>
                        </p>
                    </div>
                    <div class="payment-method pull-right">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
</div>