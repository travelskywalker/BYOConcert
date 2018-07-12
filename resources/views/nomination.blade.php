@extends('layouts.app')

@section('content')

<div class="row full-height">
	<div class="nomination-page-1 col s12 l6 center-align shh lfh half-height no-padding valign-wrapper">
		<div class="lfw shw full-height-inner center-align center-container valign-wrapper">
			<div class="full-width">
				<img class="logo" src="/images/BYOC_logo_v2.png">
				<p>BITE AND SLURP YOUR WAY<br/>TO A FREE CONCERT</p>
				<div class="band-container">
					<h4>GRACENOTE</h4>
					<h4>DECEMBER AVENUE</h4>
					<h4>AUTOTELIC</h4>
					<h6>& more</h6>
				</div>

				<p class="more-info">For more information, call Redlines Productions:<br/>0917 8733 596 / 0917 8291 844</a>
				</p>
			</div>
		</div>
	</div>
	<div class="nomination-page-2 col s12 l6 center-align shh lfh no-padding">
		<div class="full-height-inner center-align center-container valign-wrapper">
			<form class="col s12 l8 offset-l2" id="nomination_form" method="POST" action="{{ route('submit-nomination') }}"> @csrf
			<div class="svh">
					<div class="full-width left-align padding">
						<div class="col s12">
							<h5 class="nominate-title">Suggest your School</h5>
						</div>
						<div class="input-field col s12">
				          <input id="name" name="name" type="text" class="validate browser-default s12" placeholder="Your Full Name" autocomplete="off">
				        </div>
				        <div class="input-field col s12">
				        	<div class="suggestion">
				          	subok
				          </div>
				          <input id="school" name="school_name" type="text" class="validate browser-default s12" placeholder="School Name" autocomplete="off">
				          
				        </div>
						<p class="col s12 tnc">
							<label>
							<input class="with-gap s12" name="tnc" id="tnc_radio" type="radio" style="width: 20px"/>
							<span>By submitting your information, you are therefore agreeing to our <a class="tnc-text modal-trigger" href="#tnc">Terms & Conditions and Privacy Policy.</span>
							</label>
						</p>
				        <div class="submit input-field col s12 center-align">
				        	<a class="btn default-button submit-nomination">Submit
							    <i class="material-icons left">keyboard_return</i>
							  </a>
				        </div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection