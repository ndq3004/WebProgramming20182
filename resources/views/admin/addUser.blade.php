@extends('admin.layout.layout')
@section('content')
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('index') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
    <form action="{{URL::route('postAddUser')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="exampleInputEmail1">Họ và tên</label>
			<input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{old('name')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
		</div>	
		<div class="form-group">
			<label for="exampleInputEmail1">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Nhập lại Password</label>
			<input type="password" class="form-control" name="confirm_password" placeholder="Password" value="{{old('password')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Điểm</label>
			<input type="text" class="form-control" name="user_point" placeholder="Điểm" value="{{old('user_point')}}">
		</div>		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


@endsection()