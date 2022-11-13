@extends('students.student-layout')
@section('content')

 
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Fill Up</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('update-student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputName"  name="fname" value="{{ $student->fname }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputName"  name="lname" value="{{ $student->lname }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $student->email }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"  name="password" value="{{ $student->password }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress"  name="address" value="{{ $student->address }}">
                  </div>
                  {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                     Female
                    </label>
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="exampleInputDate">Date of Birth</label>
                  <input type="date" class="form-control" id="exampleInputDate"  name="dob" value="{{ $student->dob }}">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="file" value="{{ $student->file }}">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

         
          
         

        </div>
        
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection