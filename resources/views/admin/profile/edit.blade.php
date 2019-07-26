<!-- @extends('base_layout.master_layout')

@section('title')
	<h4 style="font-family:Helvetica " >Edit Profile <span style="color: red">{{ $admin->name }}</span></h4>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">

		<div class="form-group">
		<form action="{{route('profile.update',['id' => $admin->id])}}" method="POST" enctype="multipart/form-data" >
			@csrf
			{{ method_field('PUT') }}
			<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}" >
				<div class="col-md-9 " style ="text-align: center;">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;" >
                                  	<img src="{{asset('/admin_uploads').'/'.$admin->image}}" alt="">
                                  </div>
                                       <div>
                                             <span class="btn red btn-outline btn-file">
                                             <span class="fileinput-new">Select image </span>
                                              <span class="fileinput-exists"> Change </span><br>
                                              <input type="file" name="image"> </span>

                                             <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a><br>
                                                </div>
                                                <span class="error">{{$errors->first('image')}}</span><br>
                                             </div>
                                            </div>                                            
                                          </div>
                                        </div>
									</div>

			<div class="col-lg-3 {{$errors->has('name') ? 'has-error' : ''}} ">
				<label for="description">Name</label>
				<input type="text" name="name" class ="form-control" value="{{ $admin->name }}" placeholder="Name">
				<span class="error">{{$errors->first('name')}}</span><br>
			</div>	
		
		<div class="col-lg-3 {{$errors->has('username') ? 'has-error' : ''}} ">
			<label for="description">Username</label>
				<input type="text" name="username" class ="form-control" value="{{ $admin->username }}" placeholder="username">
				<span class="error">{{$errors->first('username')}}</span><br>
			</div>
			
			<div class="col-lg-3 {{$errors->has('email') ? 'has-error' : ''}} ">
			<label for="description">Email</label>
				<input type="text" name="email" class ="form-control" value="{{ $admin->email }}" placeholder="Email">
				<span class="error">{{$errors->first('email')}}</span><br>
			</div>

			<div class="form-group col-md-9 {{$errors->has('description') ? 'has-error' : ''}} ">
				<label for="description">description</label>
				<textarea
				      id="desc" type="text" name="description" class ="form-control" cols="5" rows="5" >{{ $admin->description }}
				</textarea><span class="error">{{$errors->first('description')}}</span><br>
			</div>


			<div class="col-lg-5 {{$errors->has('address') ? 'has-error' : ''}} ">
				<label for="description">Address</label>
				<input type="text" name="address" class ="form-control" value="{{ $admin->address }}" placeholder="address">
				<span class="error">{{$errors->first('address')}}</span><br>
			</div>
			<div class="col-lg-3 {{$errors->has('facebook') ? 'has-error' : ''}} ">
				<label for="description">Facebook</label>
				<input type="text" name="facebook" class ="form-control" value="{{ $admin->facebook }}" placeholder="facebook">
				<span class="error">{{$errors->first('facebook')}}</span><br>
			</div><br>

			<div class="col-lg-3 {{$errors->has('twitter') ? 'has-error' : ''}} ">
				<label for="description">Twitter</label>
				<input type="text" name="twitter" class ="form-control" value="{{ $admin->twitter }}" placeholder="twitter">
				<span class="error">{{$errors->first('twitter')}}</span><br>
			</div><br>
			<div class="col-lg-3 {{$errors->has('age') ? 'has-error' : ''}} ">
				<label for="description">Age</label>
				<input type="text" name="age" class ="form-control" value="{{ $admin->age }}" placeholder="age">
				<span class="error">{{$errors->first('age')}}</span><br>
			</div><br>
			<div class="form-group col-lg-12">
                    <button class="btn btn-success" type="submit">
                     	Edit Profile  
                     </button>
                </div>
		</form>
		</div>
		</div>
	</div>
@endsection
@section('style')
   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection

@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script>
$(document).ready(function() {
  $('#desc').summernote();
});
</script>

@endsection -->