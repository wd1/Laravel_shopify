
@extends('layouts.admin')

@section('title', 'Nymbl - Design Library')
@section('description', 'This is the Design Library page')

@section('content')

		<div class="m-portlet col-sm-10" style="margin:auto;">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Billing Form
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<label class="col-lg-2 col-form-label">Card#:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control m-input" placeholder="Enter card number">
							<span class="m-form__help">Please enter your card number</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-2 col-form-label">Card Exp:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control m-input" placeholder="Enter Card Exp">
							<span class="m-form__help">Please enter your card exp</span>
						</div>
					</div>
                    <div class="form-group m-form__group row">
						<label class="col-lg-2 col-form-label">CCV:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control m-input" placeholder="Enter CCV">
							<span class="m-form__help">Please enter your CCV</span>
						</div>
					</div>	
                    <div class="form-group m-form__group row">
						<label class="col-lg-2 col-form-label">Zip Code:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control m-input" placeholder="Enter Code">
							<span class="m-form__help">Please enter your Code</span>
						</div>
					</div>	
                    <div class="form-group m-form__group row">
						<label class="col-lg-2 col-form-label">Cardholder:</label>
						<div class="col-lg-6">
							<input type="email" class="form-control m-input" placeholder="Enter Cardholder">
							<span class="m-form__help">Please enter your Cardholder</span>
						</div>
					</div>					
							            
	            </div>
	            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions--solid">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-6">
								<button type="reset" class="btn btn-success">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		
@endsection