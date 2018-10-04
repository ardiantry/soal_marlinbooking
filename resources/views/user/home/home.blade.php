@extends('user.template.content')
@section('content')



		<div class="row">

			<div class="col-md-12 col-xl-9">
			  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
			</div>

			<div class="cql-md-12 col-lg-12 col-xl-3">
				<div class="card">
					<div class="card-body">
						<h5 class="mt-0 mb-3">Chat</h5>
						<div class="input-group custom-input">
								<input class="form-control todo-list-input" placeholder="Add task" id="formchat" type="text"> 
								<span class="input-group-append"></span> 
								<button class="btn btn-primary add-new-todo-btn" id="sendChat" >Send</button>
							</div>
						<div class="activity mt-3">
							
							
							
						</div>
						
						</div>
				</div>
			</div>
		</div>


@endsection