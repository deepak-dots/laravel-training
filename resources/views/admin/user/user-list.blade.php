<!doctype html>
<html>
<head>
   @include('admin.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="container">
            <header class="row">
                @include('admin.includes.header')
              
            </header>
            @include('admin.includes.sidebar');
            <div id="main" class="row">
            <div class="content-wrapper" style="width:100%">
                 <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-12 col-12">
                      <div class="card">
                            <div class="card-header">User List</div>
                            <div class="card-body">
                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Full Name</th>
                                  <th>Email</th>
                                  <th>Phone number</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($users as $user)
                                <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td> <a href ='/edit-user/{{ $user->id }}' class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a></td>
                                <td><a href ='delete/{{ $user->id }}' class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            </div>
                        </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            </div>
            <footer class="row">
                @include('admin.includes.footer')
            </footer>
        </div>
    </div>
</body>
</html>