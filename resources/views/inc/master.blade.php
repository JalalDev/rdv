<!DOCTYPE html>
<html lang="en">
	<head><base href="../"/>
		<title>@yield('title') - {{ config('app.name') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				@include('inc.header')
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div class="app-container container-xxl d-flex flex-row-fluid">
						@include('inc.sidebar')
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<div class="d-flex flex-column flex-column-fluid">
								<div id="kt_app_toolbar" class="app-toolbar d-flex pb-3 pb-lg-5">
									<div class="d-flex flex-stack flex-row-fluid">
										<div class="d-flex flex-column flex-row-fluid">
											<div class="page-title d-flex align-items-center me-3">
												<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-lg-2x gap-2">
													<span>@yield('title')</span>
												</h1>
											</div>
										</div>
										<div class="d-flex align-self-center flex-center flex-shrink-0">
											<a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<i class="ki-outline ki-plus-square fs-2"></i>
												<span>Invite</span>
											</a>
											<a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
											<span class="d-none d-sm-inline">Target</span></a>
										</div>
									</div>
								</div>
								<div id="kt_app_content" class="app-content flex-column-fluid">
                                    @yield('content')
								</div>
							</div>
							<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">{{ date('Y') }}&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">{{ config('app.name') }} • {{ config('app.company') }}</a>
								</div>
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
	</body>
</html>
