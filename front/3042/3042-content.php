<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3042">
    <div class='container'>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xx-12">
                <div class="left-banner">
                    <div class="banner-content">
                        <div class="line"></div>
                        <div class="insider-line-icon">
                            <i class="icon"></i>
                        </div>
                        <div class="heading-container">
                            <div class="heading-title">
                                We Use Genuine Parts to Fix your Device
                            </div>
                        </div>
                        <div class="separator"></div>
                        <div class="content-conatiner">
                            <div class="content-heading">Low Pricing & Faster Repair Services</div>
                            <div class="content">
                                Dolor sit amet consectetur elit eiusmod tempor dunt aliqua uts enim veniam
                                <br>
                                elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat rem
                                <br>
                                tempore quis sed ipsum knostrud ipsum lorem amet consectetur adipisicing
                                <br>
                                ipsum dolor sit amet, consectetur adipisicing.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xx-12">
                                <div class="col-inner">
                                    <div class="text-wrapper">
                                        <div class="text-heading-container">
                                            <div class="text-heading-title">30min</div>
                                            <div class="text-content">Avg. Time Of Repair</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xx-12">
                                <div class="col-inner">
                                    <div class="text-wrapper">
                                        <div class="text-heading-container">
                                            <div class="text-heading-title">170+</div>
                                            <div class="text-content">Locations Count</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xx-12">
                                <div class="col-inner">
                                    <div class="text-wrapper">
                                        <div class="text-heading-container">
                                            <div class="text-heading-title">450+</div>
                                            <div class="text-content">Devices Fixed Monthly</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xx-12">
                <div class="right-banner">
                    <div class="banner-img">
                        <img src="http://<?php echo $url_path ?>/images/banner-img.png" alt="img banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>