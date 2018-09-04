@extends('layouts.app_voting')

@section('content')
<div class="row main-row school-page">
    <div class="col lfh no-padding s12 l6 top-section">
        <div class="lfw shw full-height-inner center-align center-container valign-wrapper">
            <div class="full-width header">
                <img class="logo" src="/images/BYOC_logo_v2.png">
                <p>BITE AND SLURP YOUR WAY<br/>TO A FREE CONCERT</p>
                <div class="band-container">
                    <h4>GRACENOTE</h4>
                    <h4>DECEMBER AVENUE</h4>
                    <h4>AUTOTELIC</h4>
                    <h6>& more</h6>
                </div>
                <a class="modal-trigger" href="#learnmore">Learn more</a>
                <!-- <p class="more-info">For more information, call Redlines Productions:<br/>0917 8733 596 / 0917 8291 844</a> -->
                </p>
            </div>
            
        </div>
        <div class="bands">
                <div class="groupshot">
                    <img class="responsive-img" src="/images/groupshot.png">
                </div>
            </div>
    </div>
    <div class="col s12 l6 no-padding bottom-section center-align">
    
        <div class="school-top-section">
            <div class="row padding school-top-container" >
                <!-- old -->
                <div class="col s12 l5 school-top-details" style="padding: 15px 0; display: none">
                    <div class="school-logo"></div>
                    <div class="school-place"></div>
                    <div class="school-name"></div>
                    <!-- <div class="switch-button">Switch to List View</div> -->
                </div>
                <!-- end of old -->
                <div class="col s12 school-pre-details no-padding">
                    <div class="school-logo"></div>
                    <div class="school-name"></div>
                    <div class="back-button"></div>
                </div>

                <div class="col s12 pre-launch-stage">
                    <img class="responsive-img" src="/images/stage-pre-launch.png">
                </div>

                <div class="col s12 pre-launch-icon">
                    <img class="responsive-img" src="/images/pre-launch-icons.png">
                </div>

                <div class="switch-button">Switch to List View</div>

                <!-- <div class="col s12 stage school-stage-view"></div>
                <div class="col s12 stage school-list-view">
                    list view
                </div>
                <div class="col bar s12">
                    <div class="valign-wrapper col s12 l8">
                        <div class="bar-container s12 l6">
                            <div class="bar-progress">
                                <div class="percent-container"><span class="percent">60%</span><span class="bar-prompt">until milestone<br/>complete</span></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="school-bottom-section">
            <div class="counter">
                <div class="counter-container"></div>
            </div>
            <div class="row no-margin">
                <div class="col s12 double-padding b-c">
                <h5 class="nominate-title">BRING #AUTOGRACEAVENUE TO YOU</h5>
                <p>Use this barcode each time you buy a Slurpee & Big Bite combo to earn points for your school. Make sure to tell your friends - only the top 8 schools get a free concert.</p>
                <div class="barcode-area" >barcode area</div>
                <div class="col s7 right-align no-margin right-padding">
                        <a class="btn btn-small default-button barcode-download" download>Download
                            <i class="material-icons left">file_download</i>
                        </a>
                </div>
                <div class="col s5 left-align no-margin left-padding">
                <div class="soc-media-container">
                    
                    <a class="fb-share" target="_blank"><img src="/images/facebook.png"></a>
                    <a class="twitter-share" target="_blank" href="https://twitter.com/share"><img src="/images/twitter.png"></a>
                    <!-- <a href="http://www.instagram.com/711ph"><img src="/images/instagram.png"></a> -->
                </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection