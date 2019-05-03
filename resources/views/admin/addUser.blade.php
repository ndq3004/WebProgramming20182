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


@endsection()