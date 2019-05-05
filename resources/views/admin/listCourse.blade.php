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
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Courses</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Discription</th>
                    <th>Link</th>
                    <th>number-lession</th>
                  </tr>

                  
                </thead>
                <tbody>
                  @foreach ($course as $kh)
                  <tr>
                    <td>{{ $kh->id }}</td>
                    <td>{{ $kh->name }}</td>
                    <td>{{ $kh->level }}</td>
                    <td>{{ $kh->discription }}</td>
                    <td>{{ $kh->link }}</td>
                    <td>{{ $kh->number_lession }}</td>
                  </tr>
                  @endforeach

                </tbody>
                
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <a class="navbar-brand mr-1" href="index.html">
          <img src="../image/logo.png" alt="" class="logo">
          <h6 class="nameweb"> Learning English</h6>
        </a>
        <h6 class="hotline">Hotline: 0989999999</h6>
        <!-- <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div> -->
      </footer>

    </div>
@endsection()