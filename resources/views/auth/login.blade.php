@extends('layouts.auth')

@section('title', 'Login')
@section('description', 'Login to the admin area')

@section('content')
	
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-2 m-login--signup" id="m_login" style="background-image: url(components/assets/app/media/img//bg/bg-3.jpg);">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img src="components/assets/app/media/img//logos/logo-1.png">
						</a>
					</div>
					<div class="">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Sign In To Admin
							</h3>
							@include('notifications.status_message')
		  				    @include('notifications.errors_message')
						</div>
						<form class="m-login__form m-form" method="POST" action="{{ url('/login') }}">
							<div class="form-group m-form__group">
								{{ csrf_field() }}
								<input type="text" id="username" name="username" class="form-control m-input" placeholder="Email" value="{{ old('username') }}" required autocomplete="off">
								@if ($errors->has('username'))
									<span class="help-block">
										<strong>{{ $errors->first('username') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group m-form__group">
								<input type="password" id="password" name="password" class="form-control m-input m-login__form-input--last" placeholder="Password" required>
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<div class="row m-login__form-sub">
								<div class="col m--align-left m-login__form-left">
									<label class="m-checkbox  m-checkbox--focus">
										<input type="checkbox" value="remember-me" name="remember"> Remember Me
										<span></span>
									</label>
								</div>
								<div class="col m--align-right m-login__form-right">
									<!-- <a href="javascript:;" id="m_login_forget_password" class="m-link">
										Forget Password ?
									</a> -->
									<a href="{{ url('/password/reset') }}" class="forgot-password">Forgot password?</a>
								</div>
							</div>
							<div class="m-login__form-action">
								<button id="m_login_signin_submit" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
									Sign In
								</button>
							</div>

						</form><!-- /form -->
					</div>
					<div class="m-login__account" style="display:block;">
						<span class="m-login__account-msg">
							Don't have an account yet ?
						</span>
						&nbsp;&nbsp;
						<a href="{{ url('/register') }}" id="m_login_signup" class="m-link m-link--light m-login__account-link">
							Sign Up
						</a>
					</div>
					<!-- <div class="card-container text-center">
						<a href="{{ url('/register') }}" class="new-account">Create an account</a> or <a href="{{ url('/activation/resend') }}" class="new-account">Resend activation code</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		
		
    </div><!-- /container -->
@endsection
