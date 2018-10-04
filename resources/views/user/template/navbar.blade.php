<!-- Top Bar Start -->
	<div class="topbar">
		<!-- LOGO -->
		<div class="topbar-left">
			<a href="{{url("/home")}}" class="logo">
				<span>
					<img src="{{ asset('images/logo-sm.png')}}" alt="logo-small" class="logo-sm"> 
				</span>
				<span>
					<img src="{{ asset('images/logo.png')}}" alt="logo-large" class="logo-lg">
				</span>
			</a>
		</div>
		<!-- Navbar -->
		<nav class="navbar-custom">
			<!-- Search input -->
			<div class="search-wrap" id="search-wrap">
				<div class="search-bar">
					<input class="search-input" type="search" placeholder="Search here..">
					<a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">
						<i class="mdi mdi-close-circle"></i>
					</a>
				</div>
			</div>
			<ul class="list-unstyled topbar-nav float-right mb-0">
				<li>
					<a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);" data-target="#search-wrap">
						<i class="mdi mdi-magnify nav-icon"></i>
					</a>
				</li>
				<li class="dropdown">
					<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="mdi mdi-bell-outline nav-icon"></i> 
						<span class="badge badge-danger badge-pill noti-icon-badge">1</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg">
						<!-- item-->
						<h6 class="dropdown-item-text">Notifications (1)</h6>
						<div class="slimscroll notification-list">
							<!-- item--> 
							<a href="javascript:void(0);" class="dropdown-item notify-item active">
								<div class="notify-icon bg-success">
									<i class="mdi mdi-cart-outline"></i>
								</div>
								<p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
							</a>
						</div>
						<!-- All--> 
						<a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
					</div>
				</li>
				<li class="hidden-sm">
					<a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">
						<i class="mdi mdi-fullscreen nav-icon"></i>
					</a>
				</li>
				<li class="dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<img src="{{ asset(Session::get('nama_login')->pic)}}" alt="profile-user" class="rounded-circle"> 
							<span class="ml-1 nav-user-name hidden-sm">{{Session::get('nama_login')->name}} 
								<i class="mdi mdi-chevron-down"></i>
							</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{url("/profile")}}">
							<i class="dripicons-user text-muted mr-2"></i> Profile
						</a>  
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{url("/log-out")}}">
							<i class="dripicons-exit text-muted mr-2"></i> Logout
						</a>
					</div>
				</li>
			</ul>
			<ul class="list-unstyled topbar-nav mb-0">
				<li>
					<button class="button-menu-mobile nav-link waves-effect waves-light"><i class="mdi mdi-menu nav-icon"></i></button>
				</li>
				<!--<li class="hidden-sm">
					<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="mdi mdi-library-plus mr-2"></i>Tools 
						<i class="mdi mdi-chevron-down"></i>
					</a>
					<div class="dropdown-menu">
						<a href="javascript:void(0);" class="dropdown-item">Photoshop </a>
						
						 <a href="javascript:void(0);" class="dropdown-item">Visual Studio </a>
					
						 <a href="javascript:void(0);" class="dropdown-item">Sublime Text 3 </a>
					 
						 <a href="javascript:void(0);" class="dropdown-item">Phpstorm</a>
					</div>
				</li>
				<li class="hidden-sm">
					<a class="nav-link waves-effect waves-light" href="http://themesbrand.com/amezia/landing/index.html" target="_blank">
						<i class="mdi mdi-airplane mr-2"></i>Landing
					</a>
				</li>-->
			</ul>
		</nav>
		<!-- end navbar-->
	</div>
	<!-- Top Bar End -->