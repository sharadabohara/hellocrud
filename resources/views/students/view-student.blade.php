@extends('students.student-layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with Student Data with images</h3>
                </div>
                @if($message=Session::get('status'))
                <div class="alert alert-success">
                  <p>{{ $message }}</p>
                </div>
                @endif
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Date of Birth</th>
                      <th>Image</th>
                      <th>Show</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    @foreach ($student as $students )
                    
                    <tbody>
                    <tr>
                      <td>{{ $students->id }}</td>
                      <td>{{ $students->fname }}</td>
                      <td>{{ $students->lname }}</td>
                      <td> {{ $students->email }}</td>
                      <td>{{ $students->address }}</td>
                      <td>{{ $students->dob }}</td>
                      
                      <td>
                        <img src="{{ asset('uploads/students/'.$students->file) }}" width="70px" height="70px" alt="Image">
                    </td>
                    <td>
                      <a href="{{ url('show-student/'.$students->id) }}" class="btn btn-primary btn-sm">Show</a>
                  </td>
                  <td>
                      <a href="{{ url('edit-student/'.$students->id) }}" class="btn btn-primary btn-sm">Edit</a>
                 </td>
                 <td>
                     <a href="{{ url('destroy-student/'.$students->id) }}" class="btn btn-danger btn-sm">Delete</a>
                 </td>

                    </tr>
                    
                    </tbody>

                    @endforeach
                    
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