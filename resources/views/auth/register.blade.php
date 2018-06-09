@extends('layouts.auth')

@section('title', 'Register')
@section('description', 'Register to the admin area')

@section('content')
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-2 m-login--signup" id="m_login" style="background-image: url(components/assets/app/media/img//bg/bg-3.jpg);">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img  width="100" src="assets/css/demo/demo9/media/img/logo/dashboardfavicon.png">
						</a>
					</div>
					<div class="">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign Up
								</h3>
								@include('notifications.status_message')
		 					    <!-- @include('notifications.errors_message') -->
								 @if(session()->has('errors'))
									<div class="" style="text-align:center; color:red; padding-top:20px;">
										<h4>Please fix errors below</h4>
									</div>
								@endif
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form" method="POST" action="{{ url('/register') }}">
								<div class="form-group m-form__group">
									{{ csrf_field() }}
									<input type="text" id="username" name="username" class="form-control m-input" placeholder="Username" value="{{ old('username') }}" style="display:none;">
									@if ($errors->has('username'))
										<span class="help-block form-control-feedback">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<input type="text" id="first_name" name="first_name" class="form-control m-input" placeholder="First name" value="{{ old('first_name') }}"  required autofocus>
									@if ($errors->has('first_name'))
										<span class="help-block form-control-feedback" style="color:red;">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<input type="text" id="last_name" name="last_name" class="form-control m-input" placeholder="Last name" value="{{ old('last_name') }}" required autofocus>
									@if ($errors->has('last_name'))
										<span class="help-block form-control-feedback" style="color:red;">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Store Name" name="storename">
								</div>
								<div class="form-group m-form__group">
									<input type="email" id="email" name="email" class="form-control m-input" placeholder="Email address" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
										<span class="help-block form-control-feedback" style="color:red;">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<input type="password" id="password" name="password" class="form-control m-input" placeholder="Password" required>
									@if ($errors->has('password'))
										<span class="help-block form-control-feedback" style="color:red;">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<input type="password" id="password-confirm" name="password_confirmation" class="form-control m-input m-login__form-input--last" placeholder="Confirm Password" required>
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree">
											I Agree the
											<a href="#" class="m-link m-link--focus">
												terms and conditions
											</a>
											.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" type="submit">Sign up</button>
									&nbsp;&nbsp;
									<a  href="{{ url('/login') }}" id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Cancel
									</a>
								</div>
							</form>
						</div>
					

				</div>
			</div>
		</div>
	</div>


@endsection
