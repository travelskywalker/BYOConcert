@extends('layouts.app_voting')

@section('content')
<div class="row main-row voting-page">
    <div class="col lfh no-padding s12 l6 top-section">
        <div class="lfw shw full-height-inner center-align center-container">
            <div class="full-width header">
                <img class="logo" src="/images/BYOC_logo_v2.png"><br>
                <a class="modal-trigger l-more" href="#learnmore">Learn more</a>
                
                <!-- <p>BITE AND SLURP YOUR WAY<br/>TO A FREE CONCERT</p>
                <div class="band-container">
                    <h4>GRACENOTE</h4>
                    <h4>DECEMBER AVENUE</h4>
                    <h4>AUTOTELIC</h4>
                    <h6>& more</h6>
                </div> -->
                
                <!-- <p class="more-info">For more information, call Redlines Productions:<br/>0917 8733 596 / 0917 8291 844</p> -->
            </div>
            <div class="bands">
                <div class="groupshot">
                    <!-- <img class="responsive-img slider" id="img_1" src="/images/sliders/Bands.gif">
                    <img class="responsive-img" id="img_1" src="/images/sliders/Bands.gif">
                    <img class="responsive-img" id="img_1" src="/images/sliders/Bands.gif">
                    <img class="responsive-img" id="img_1" src="/images/sliders/Bands.gif"> -->
                    <div class="carousel carousel-slider">
                        <a class="carousel-item"><img src="/images/sliders/Bands.png"></a>
                        <a class="carousel-item"><img src="/images/sliders/BigbiteSlurpee.png"></a>
                        <a class="carousel-item"><img src="/images/sliders/Prizes.png"></a>
                        <a class="carousel-item"><img src="/images/sliders/50k.png"></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col s12 l6 no-padding bottom-section">
        <div class="full-height-inner center-align center-container valign-wrapper">
            <div class="svh">
                <div class="counter">
                    <div class="counter-container"></div>
                </div>
                <div class="row full-width schools">
                    <div class="col s12 double-padding force-center-align">
                        <h5 class="nominate-title">HOW CLOSE ARE YOU TO A FREE CONCERT?</h5>
                        <p>Find your school's stage to check your progress.</p>
                    </div>
                
                    <div class="col s12 grid-container"></div>
                    <div class="col s12">
                        <p>Only the top 8 schools will get a FREE concert</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection