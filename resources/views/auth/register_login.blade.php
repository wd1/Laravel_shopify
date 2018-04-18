@extends('layouts.auth')

@section('title', 'Register')
@section('description', 'Register to the admin area')

@section('content')
	<div class="row">
		<div class="m-grid m-grid--hor m-grid--root m-page col-sm-6">
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
										Register
									</h3>
									@include('notifications.status_message')
								@include('notifications.errors_message')
									<div class="m-login__desc">
										Enter your details to create your account:
									</div>
								</div>
								<form class="m-login__form m-form" method="POST" action="{{ url('/register') }}">
									<!-- <div class="form-group m-form__group">
										{{ csrf_field() }}
										<input type="text" id="username" name="username" class="form-control m-input" placeholder="Username" value="{{ old('username') }}" style="display:none;">
										@if ($errors->has('username'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
									<div class="form-group m-form__group">
										<input type="text" id="first_name" name="first_name" class="form-control m-input" placeholder="First name" value="{{ old('first_name') }}"  required autofocus>
										@if ($errors->has('first_name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
									<div class="form-group m-form__group">
										<input type="text" id="last_name" name="last_name" class="form-control m-input" placeholder="Last name" value="{{ old('last_name') }}" required autofocus>
										@if ($errors->has('last_name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
									<div class="form-group m-form__group">
										<input class="form-control m-input" type="text" placeholder="Store Name" name="storename">
									</div> -->
									<div class="form-group m-form__group">
										<input type="email" id="email" name="email" class="form-control m-input" placeholder="Email address" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
									<div class="form-group m-form__group">
										<input type="password" id="password" name="password" class="form-control m-input" placeholder="Password" required>
										@if ($errors->has('password'))
											<span class="help-block">
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
										<button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" type="submit">Register</button>
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
		<div class="m-grid m-grid--hor m-grid--root m-page col-sm-6">
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
									Link Existing Account
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
									<input type="password" id="signin_password" name="password" class="form-control m-input m-login__form-input--last" placeholder="Password" required>
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
						
						<!-- <div class="card-container text-center">
							<a href="{{ url('/register') }}" class="new-account">Create an account</a> or <a href="{{ url('/activation/resend') }}" class="new-account">Resend activation code</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
	</div>

@endsection
