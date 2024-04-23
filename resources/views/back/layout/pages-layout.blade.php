<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->


        @stack('stylesheets')
	</head>
	<body>


		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>

			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">

					</div>
				</div>

				<form action="{{ route('admin.logout_handler') }}" id="adminLogoutForm" method="POST">@csrf</form>

@if (Auth::guard('admin')->check())
<div class="user-info-dropdown">
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
            <span class="user-icon">
                <img src="/back/vendors/images/photo1.jpg" alt="" />
            </sleft-sidepan>
            <span class="user-name">Admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
            <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a> -->
            <!-- <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('adminLogoutForm').submit();"><i class="dw dw-logout"></i> Log Out</a>
        </div>
    </div>
</div>
@elseif( Auth::guard('seller')->check() )
<div class="user-info-dropdown">
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
            <span class="user-icon">
                <!-- <img src="/back/vendors/images/photo1.jpg" alt="" /> -->
            </span>
            <span class="user-name">Admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
            <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
            <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
            <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
        </div>
    </div>
</div>
@endif


			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Настройки
					<span class="btn-block font-weight-400 font-12"
						></span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

	

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Застосувати
						</button>
					</div>
				</div>
			</div>
		</div>
<!-- логооооо -->
		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="/back/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						
						@if(Route::is('admin.*'))
						<li>
							<a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-home"></span
								><span class="mtext">Профіль</span>
							</a>
						</li>
						
						
						<li>
							<a href="{{ route('admin.login') }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Головна</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Settings</div>
						</li>
						
							<a
								href=""
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon fa fa-user"></span>
								<span class="mtext"
									>Prifile
									</span>
							</a>
						</li>
						@else
						<!-- <li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-home"></span
								><span class="mtext">Home</span>
							</a>
						</li>
						
						
						
						
						

						
					
						
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Settings</div>
						</li>
						
							<a
								href=""
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon fa fa-user"></span>
								<span class="mtext"
									>Prifile
									</span>
							</a>
						</li> -->
						@endif
						
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>blank</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="https://www.pinterest.com/pin/1015139572249795081/sent/?invite_code=d18691373d8e46f38aefd65bf24a6e8c&sender=1096697084167485394&sfo=1">Home</a> 
										</li>
<!-- поміняти наповнення  -->
										<li class="breadcrumb-item active" aria-current="page">
											blank
										</li>
									</ol>
								</nav>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30"></div>
                        @yield('content')
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					тут є контент
					<!-- <a href="" target="_blank"
						>Ankit Hingarajiya</a
					> -->
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
            @stack('scripts')
	</body>
</html>