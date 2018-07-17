@extends('layouts.app_voting')

@section('content')
<div class="row main-row voting-page">
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
                <!-- <p class="more-info">For more information, call Redlines Productions:<br/>0917 8733 596 / 0917 8291 844</p> -->
            </div>
            <div class="bands">
                <div class="groupshot">
                    <img class="responsive-img" src="/images/groupshot.png">
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
                    <div class="col s12 left-align double-padding force-center-align">
                        <h5 class="nominate-title">CLICK TO VIEW A STAGE</h5>
                        <p>Compare your school’s concert progress to others</p>
                    </div>
                
                    <div class="col s12 grid-container">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection