@extends('user.template.content')
@section('content')
<div class="row">
                    <div class="col-md-12 col-xl-3">
                        <div class="card profile">
                            <div class="card-body">
                                <div class="text-center"><img src="{{ asset(Session::get('nama_login')->pic)}}" alt="" class="rounded-circle img-thumbnail thumb-xl">
                                    <div class="online-circle"><i class="fa fa-circle text-success"></i></div>
                                    <h4 class="">{{Session::get('nama_login')->name}}</h4>
                                    <p class="text-muted font-12">Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                           <!-- <div class="card-body">
                                <h5 class="mt-0">Personal Information</h5>
                                <h6>About :</h6>
                                <p class="text-muted font-13">Hi I'm Mark Kearney,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                <hr>
                              
                            </div>-->
                        </div>
                    
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0 mb-3">Contact</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b>phone </b>: {{Session::get('nama_login')->phone}}</li>
                                    <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b>Email </b>: {{Session::get('nama_login')->email}}</li>
                                    <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>Alamat</b> : {{Session::get('nama_login')->address}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-9">

                        <div class="">
                            <div class="custom-tab tab-profile">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                   <!-- <li class="nav-item"><a class="nav-link pb-3 pt-0" data-toggle="tab" href="#activity" role="tab"><i class="fa fa-suitcase mr-2"></i>Activity</a></li>-->
                                    <li class="nav-item"><a class="nav-link pb-3 pt-0" data-toggle="tab" href="#settings" role="tab"><i class="fa fa-cog mr-2"></i>Settings</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4">
                                    <div class="tab-pane  active" id="settings" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="">
                                                       @if(Session::has("pesan")){!!Session::get("pesan")!!}  @endif
                                                            <form class="form-horizontal form-material mb-0" method="post" action="{{url("/simpanprofile")}}"  enctype="multipart/form-data">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Full Name" class="form-control" name="name" value="{{Session::get('nama_login')->name}}">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <input type="email" placeholder="Email" readonly="readonly" class="form-control" name="email" id="example-email" value="{{Session::get('nama_login')->email}}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="text" placeholder="Nomor Telephone/Hp" class="form-control" name="phone" value="{{Session::get('nama_login')->phone}}">
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                       <input type="file" id="input-file-now-custom-1"  class="form-control-file"  name="file">
                                                                    </div>
                                                                      
                                                                </div>
                                                                 <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="Pekerjaan" class="form-control"  name="job" value="{{Session::get('nama_login')->job}}">
                                                                    </div>
                                                                     <div class="col-md-6">
                                                                        <input type="text" placeholder="Institution" class="form-control" name="institution"  value="{{Session::get('nama_login')->institution}}" >
                                                                    </div>
                                                                   
                                                                 </div>
          
                                                                   
                                                                <div class="form-group">
                                                                    <textarea rows="5" placeholder="Address" class="form-control"  name="address">{{Session::get('nama_login')->address}}</textarea>
                                                                    <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0" >Update Profile</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>@endsection