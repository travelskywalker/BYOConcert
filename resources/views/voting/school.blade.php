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
            <div class="bands">
                <div class="groupshot">
                    <img class="responsive-img" src="/images/groupshot.png">
                </div>
            </div>
        </div>
        
    </div>
    <div class="col s12 l6 no-padding bottom-section ">
    
        <div class="school-top-section">
            <div class="row padding school-top-container" >
                <div class="col s12 l5 school-top-details" style="padding: 15px 0;">
                    <div class="school-logo">logo</div>
                    <div class="school-place">1st place</div>
                    <div class="school-name">Dela Salle Univrsity</div>
                    <div class="switch-button">Switch to List View</div>
                </div>
                <div class="col s12 l7 stage school-stage-view">
                    stage view
                </div>
                <div class="col s12 l7 stage school-list-view">
                    list view
                </div>
                <div class="col bar s12">
                    <div class="valign-wrapper col s12 l8">
                        <div class="bar-container s12 l6">
                            <div class="bar-progress">
                                <span class="percent">60%</span><span class="bar-prompt">until milestone<br/>complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-bottom-section">
            <div class="counter">
                <div class="counter-container"></div>
            </div>
            <div class="row no-margin">
                <div class="col s12 double-padding b-c">
                <h5 class="nominate-title">HELP BUILD THIS STAGE</h5>
                <p>Use this barcode each time you buy a Slurpee & Big Bite combo to earn points for your school.</p>
                <p style="
                            border: 1px solid;
                            height: 50px;
                        ">barcode area</p>
                <div class="col s7 left-align no-margin no-padding">
                        <a class="btn default-button barcode-download">Download
                            <i class="material-icons left">file_download</i>
                        </a>
                </div>
                <div class="col s5 right-align no-margin no-padding">
                <div class="soc-media-container">
                    <a href="http://www.facebook.com/711philippines"><img src="/images/facebook.png"></a>
                    <a href="http://www.twitter.com/711philippines"><img src="/images/twitter.png"></a>
                    <a href="http://www.instagram.com/711ph"><img src="/images/instagram.png"></a>
                </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection