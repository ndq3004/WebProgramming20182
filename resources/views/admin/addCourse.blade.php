@extends('admin.layout.layout')
@section('content')
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('index') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">Courses</li>
  </ol>
  <form action="{{URL::route('postAddCourse')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="exampleInputEmail1">Tên Khóa Học</label>
			<input type="text" class="form-control" name="name" placeholder="Tên Khóa Học" value="{{old('name')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Level</label>
			<input type="text" class="form-control" name="level" placeholder="Level" value="{{old('level')}}">
		</div>	
		<div class="form-group">
			<label for="exampleInputEmail1">Link</label>
			<input type="text" class="form-control" name="link" placeholder="Link" value="{{old('link')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Thông tin</label>
			<input type="text" class="form-control" name="description" placeholder="Thông tin" value="{{old('description')}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Bài học số</label>
			<input type="text" class="form-control" name="number_lession" placeholder="Bài học số" value="{{old('number_lession')}}">
		</div>	
		<div class="form-group">
			<label for="exampleInputEmail1">Mức độ</label>
			<input type="text" class="form-control" name="type" placeholder="Type" value="{{old('type')}}">
		</div>				
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


@endsection()