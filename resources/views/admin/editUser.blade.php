@extends('admin.layout.layout')
@section('content')
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
    	@if( Session::has('flash_message'))
                <div class="alert alert-{{ Session::get('flash_level')}}">
                    {{ Session::get('flash_message')}}
                </div>
            @endif
			@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
      <a href="{{ route('index') }}">Home</a>
    </li>

    <li class="breadcrumb-item active">Users</li>
  </ol>
    <form action="{{URL::route('postEditUser',[$us->id])}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="exampleInputEmail1">Họ và tên</label>
			<input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{$us->name)}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" class="form-control" name="email" placeholder="Email" value="{{$us->email}}">
		</div>	
		<div class="form-group">
			<label for="exampleInputEmail1">Điểm</label>
			<input type="text" class="form-control" name="user_point" placeholder="Điểm" value="{{$us->user_point}}">
		</div>		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


@endsection()