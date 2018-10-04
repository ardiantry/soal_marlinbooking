@extends('user.template.content')
@section('content')
    <div class="row">
        <div class="col-lg-3 pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">
                    <h3 class="text-center m-0"><a href="#" class="logo logo-admin"><img src="{{ asset('images/logo-sm.png') }}" height="60" alt="logo" class="my-3"></a></h3>
                    <div class="px-3">
                        <h4 class="text-muted font-18 mb-2 text-center">Free Register</h4>
                        

                         @if(Session::has("pesan"))
                        {!!Session::get("pesan")!!}
                        @endif
                        <form class="form-horizontal my-4"  method="post" action="{{url("/proses-register")}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o"></i></span></div>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="{{Session::get("input")['username']}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Email Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope-o"></i></span></div>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" value="{{Session::get("input")['email']}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3"><i class="fa fa-lock"></i></span></div>
                                    <input type="password" name="password"  class="form-control" id="userpassword" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Confirm Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon4"><i class="fa fa-key"></i></span></div>
                                    <input type="password" name="re_password" class="form-control" id="confirmpassword" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline"><span class="font-13 text-muted mb-0">By registering you agree to the Amezia <a href="#">Terms of Use</a></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="m-3 text-center bg-light p-3 text-primary">
                        <h4 class="">Already have an account ?</h4>
                        <p class="font-13">Login <span>Amezia</span> Now</p><a href="{{url("/login")}}" class="btn btn-primary waves-effect waves-light">Log In</a></div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">© 2018 Amezia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-center text-white">
                    <h4 class="mt-3">Welcome To <span class="text-warning">AMEZIA</span></h4>
                    <h1 class="">Let's Get Started</h1>
                    <p class="font-14 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                    <div class="border w-25 mx-auto border-warning"></div>
                </div>
            </div>
        </div>
    </div>
@endsection