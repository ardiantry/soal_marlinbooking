@include('user.template.header')

@if(Session::has("nama_login")!=false)
	@include('user.template.navbar')
	@include('user.template.sidebar')
	@include('user.template.Breadcrumb')
@endif


@yield('content')


@if(Session::has("nama_login")!=false)
	@include('user.template.footer_content')

@endif



@include('user.template.footer')