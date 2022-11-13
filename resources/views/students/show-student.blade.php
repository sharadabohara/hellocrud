@extends('students.student-layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Showing Student Details according to id</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Image</th>
                      
                    </tr>
                    </thead>  
                    <tbody>
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->lname }}</td>
                        <td> {{ $student->email }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>
                          <img src="{{ asset('uploads/students/'.$student->file) }}" width="70px" height="70px" alt="Image">
                      </td>
                     
                    </tr>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection