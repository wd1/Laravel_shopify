
@extends('layouts.admin')

@section('title', 'Nymbl - Design Library')
@section('description', 'This is the Design Library page')

@section('content')

		<div class="m-grid m-grid--hor m-grid--root m-page" style="padding:0px 70px;">
			<!-- BEGIN: Header -->
			<header class="m-grid__item    m-header "  data-minimize="minimize" data-minimize-mobile="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand m-brand--mobile">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="{{route('admin.dashboard')}}" class="m-brand__logo-wrapper">
										<img alt="" style="width:31px;" src="assets/css/demo/demo9/media/img/logo/dashboardfavicon.png"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="" class="m-brand__icon m-brand__toggler m-brand__toggler--left   m_aside_left_toggler">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
							<div class="m-stack m-stack--ver m-stack--desktop">
								<div class="m-stack__item m-stack__item--middle m-stack__item--fit">
									<!-- BEGIN: Aside Left Toggle -->
									<a href="javascript:;" id="" class="m-aside-left-toggler m-aside-left-toggler--left m_aside_left_toggler">
										<span></span>
									</a>
									<!-- END: Aside Left Toggle -->
								</div>
								<div class="m-stack__item m-stack__item--fluid">
									<!-- BEGIN: Horizontal Menu -->
									<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
										<i class="la la-close"></i>
									</button>
									<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
										<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
											<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
												<a  href="{{route('admin.dashboard')}}" class="m-menu__link">
													<span class="m-menu__item-here"></span>
													<i class="m-menu__link-icon flaticon-analytics"></i>
													<span class="m-menu__link-text">
														Dashboard
													</span>
													
												</a>
												
											</li>
											<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
												<a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__item-here"></span>
													<i class="m-menu__link-icon flaticon-notes"></i>
													<span class="m-menu__link-text">
														Reports
													</span>
													<i class="m-menu__hor-arrow la la-angle-down"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px">
													<span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<div class="m-menu__subnav">
														<ul class="m-menu__content">
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		Finance Reports
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-map"></i>
																			<span class="m-menu__link-text">
																				Annual Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-user"></i>
																			<span class="m-menu__link-text">
																				HR Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-clipboard"></i>
																			<span class="m-menu__link-text">
																				IPO Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-graphic-1"></i>
																			<span class="m-menu__link-text">
																				Finance Margins
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-graphic-2"></i>
																			<span class="m-menu__link-text">
																				Revenue Reports
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		Project Reports
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Coca Cola CRM
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Delta Airlines Booking Site
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Malibu Accounting
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Vineseed Website Rewamp
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Zircon Mobile App
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Mercury CMS
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li class="m-menu__item">
												<a  href="{{route('admin.designlibrary')}}" class="m-menu__link">
													<span class="m-menu__item-here"></span>
													<i class="m-menu__link-icon flaticon-tabs"></i>
													<span class="m-menu__link-text">
														Library
													</span>
													<!-- <i class="m-menu__hor-arrow la la-angle-down"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i> -->
												</a>
												<!-- <div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center" >
													<span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<div class="m-menu__subnav">
														<ul class="m-menu__content">
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		Finance Reports
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-map"></i>
																			<span class="m-menu__link-text">
																				Annual Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-user"></i>
																			<span class="m-menu__link-text">
																				HR Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-clipboard"></i>
																			<span class="m-menu__link-text">
																				IPO Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-graphic-1"></i>
																			<span class="m-menu__link-text">
																				Finance Margins
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-icon flaticon-graphic-2"></i>
																			<span class="m-menu__link-text">
																				Revenue Reports
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		Project Reports
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Coca Cola CRM
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Delta Airlines Booking Site
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Malibu Accounting
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Vineseed Website Rewamp
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Zircon Mobile App
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--line">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Mercury CMS
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		HR Reports
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Staff Directory
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Client Directory
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Salary Reports
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Staff Payslips
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Corporate Expenses
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																				<span></span>
																			</i>
																			<span class="m-menu__link-text">
																				Project Expenses
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="m-menu__item">
																<h3 class="m-menu__heading m-menu__toggle">
																	<span class="m-menu__link-text">
																		Reporting Apps
																	</span>
																	<i class="m-menu__ver-arrow la la-angle-right"></i>
																</h3>
																<ul class="m-menu__inner">
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Report Adjusments
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Sources & Mediums
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Reporting Settings
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Conversions
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Report Flows
																			</span>
																		</a>
																	</li>
																	<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																		<a  href="{{route('admin.blank')}}" class="m-menu__link ">
																			<span class="m-menu__link-text">
																				Audit & Logs
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</div> -->
											</li>
											<!-- <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
												
												<a href="{{ route('auth0login') }}" class="m-menu__link m-menu__toggle">
													<span class="m-menu__item-here"></span>
													<i class="m-menu__link-icon flaticon-stopwatch"></i>
													<span class="m-menu__link-text">
														Link Account
													</span>
												</a>
											</li> -->
										</ul>
									</div>
									<!-- END: Horizontal Menu -->
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--middle m-stack__item--center">
							<!-- BEGIN: Brand -->
							<a href="{{route('admin.dashboard')}}" class="m-brand m-brand--desktop">
								<img alt="" style="width:31px;" src="assets/css/demo/demo9/media/img/logo/dashboardfavicon.png"/>
							</a>
							<!-- END: Brand -->
						</div>
						<div class="m-stack__item m-stack__item--right">
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="
	m-nav__item m-nav__item--focus m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" 
	data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-search-1"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form  class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable" data-max-height="300" data-mobile-max-height="200">
															<div class="m-dropdown__content"></div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-nav__item--accent m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<span class="m-dropdown__header-title">
															9 New
														</span>
														<span class="m-dropdown__header-subtitle">
															User Notifications
														</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																		Alerts
																	</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
																		Events
																	</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
																		Logs
																	</a>
																</li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																	<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																					<span class="m-list-timeline__text">
																						12 new users registered
																					</span>
																					<span class="m-list-timeline__time">
																						Just now
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						System shutdown
																						<span class="m-badge m-badge--success m-badge--wide">
																							pending
																						</span>
																					</span>
																					<span class="m-list-timeline__time">
																						14 mins
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						New invoice received
																					</span>
																					<span class="m-list-timeline__time">
																						20 mins
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						DB overloaded 80%
																						<span class="m-badge m-badge--info m-badge--wide">
																							settled
																						</span>
																					</span>
																					<span class="m-list-timeline__time">
																						1 hr
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						System error -
																						<a href="#" class="m-link">
																							Check
																						</a>
																					</span>
																					<span class="m-list-timeline__time">
																						2 hrs
																					</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span href="" class="m-list-timeline__text">
																						New order received
																						<span class="m-badge m-badge--danger m-badge--wide">
																							urgent
																						</span>
																					</span>
																					<span class="m-list-timeline__time">
																						7 hrs
																					</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						Production server down
																					</span>
																					<span class="m-list-timeline__time">
																						3 hrs
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						Production server up
																					</span>
																					<span class="m-list-timeline__time">
																						5 hrs
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																	<div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">
																						New order received
																					</a>
																					<span class="m-list-timeline__time">
																						Just now
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																					<a href="" class="m-list-timeline__text">
																						New invoice received
																					</a>
																					<span class="m-list-timeline__time">
																						20 mins
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">
																						Production server up
																					</a>
																					<span class="m-list-timeline__time">
																						5 hrs
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">
																						New order received
																					</a>
																					<span class="m-list-timeline__time">
																						7 hrs
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">
																						System shutdown
																					</a>
																					<span class="m-list-timeline__time">
																						11 mins
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">
																						Production server down
																					</a>
																					<span class="m-list-timeline__time">
																						3 hrs
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																	<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																		<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																			<span class="">
																				All caught up!
																				<br>
																				No new logs.
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__username m--hidden-mobile">
													{{ Auth::user()->first_name }}
												</span>
												<span class="m-topbar__userpic">
													<img src="assets/css/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<img src="assets/css/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	{{ Auth::user()->email }}
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="{{route('admin.billing')}}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-coins"></i>
																		<span class="m-nav__link-text">
																			Billing
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{route('admin.faq')}}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			FAQ
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Support
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
																		Logout
																	</a>
                                                                    
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li id="m_quick_sidebar_toggle" class="m-nav__item m-nav__item--info m-nav__item--qs">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon m-nav__link-icon-alt">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-chat"></i>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-body m-portlet col-sm-10" style="margin:auto;">
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
			<form action="store" method="POST" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
				{{ csrf_field() }}
				<script
					src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
					data-key="<?php echo config('services.stripe.key') ?>"
					data-amount="999"
					data-name="Web Coder Pro, Ltd"
					data-description="widget"
					data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
					data-locale="auto"
					data-currency="gbp">
				</script>
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
			<!-- end:: Body -->
<!-- begin::Footer -->
			<footer class="m-grid__item  m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2018 &copy; Nymbl. All Rights Reserved.
								<a href="" class="m-link">
									
								</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								
								<li class="m-nav__item m-nav__item--last">
									<a href="{{route('admin.faq')}}" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
					<i class="la la-close"></i>
				</span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
							Messages
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
							Settings
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
							Logs
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="components/assets/app/media/img//users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Hi Bob. What time will be the meeting ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Hi Megan. It's at 2.30PM
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="components/assets/app/media/img//users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Will the development team be joining ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes sure. I invited them as well
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">
									2:30PM
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="components/assets/app/media/img//users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. For the Coca-Cola Mobile App project as well ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes, sure.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Please also prepare the quotation for the Loop CRM project as well.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">
									3:15PM
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>
												M
											</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. I will prepare it.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Thanks Megan. I will see you later.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="components/assets/app/media/img//users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Sure. See you in the meeting soon.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__seperator"></div>
							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
						<div class="m-list-settings">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">
									General Settings
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Email Notifications
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Site Tracking
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										SMS Alerts
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Storage
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">
									System Settings
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										System Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Error Reporting
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Applications Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Servers
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
						<div class="m-list-timeline">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									System Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
											<span class="m-badge m-badge--warning m-badge--wide">
												important
											</span>
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoice received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
											<span class="m-badge m-badge--success m-badge--wide">
												resolved
											</span>
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
											<span class="m-badge m-badge--danger m-badge--wide">
												pending
											</span>
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Applications Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
											<span class="m-badge m-badge--info m-badge--wide">
												urgent
											</span>
										</a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoices received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
											<span class="m-badge m-badge--info m-badge--wide">
												pending
											</span>
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Server Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
										</a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoice received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
										</a>
										<span class="m-list-timeline__time">
											1117 hrs
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
					<i class="la la-cart-arrow-down"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
					<i class="la la-code-fork"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
					<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul>
		
@endsection