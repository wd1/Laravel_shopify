@extends('layouts.auth')

@section('title', 'Resend Activation Key')
@section('description', 'Resend the activation key')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-2 m-login--signup" id="m_login" style="background-image: url({!! asset('components/assets/app/media/img//bg/bg-3.jpg') !!};">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img src="{!! asset('components/assets/app/media/img//logos/logo-1.png') !!}">
						</a>
						</div>
					<div class="">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Forgotten Password ?
							</h3>
							<div class="m-login__desc">
								Enter your email to reset your password:
								@if (session('status'))
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										{{ session('status') }}
									</div>
								@endif
								@if ($errors->has('email'))
									<div class="alert alert-danger fade in">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										{{ $errors->first('email') }}
									</div>
								@endif
							</div>
						</div>
						<form class="m-login__form m-form"  method="POST" action="{{ url('/password/email') }}">
							<div class="form-group m-form__group">
								{{ csrf_field() }}
								<input type="email" id="email" name="email" class="form-control m-input" placeholder="Email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="m-login__form-action">
								<button id="m_login_forget_password_submit"  type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
									Request
								</button>
								&nbsp;&nbsp;
								<a href="{{ url('/login') }}" id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
									Cancel
								</a>
							</div>
						</form>
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
				</div>
			</div>
		</div>
	</div>
	
@endsection