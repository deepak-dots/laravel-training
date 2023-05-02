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
            <div class="content-wrapper">
                 <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                    <div class="col-lg-12 col-12">
                    <div class="card">
                            <div class="card-header">Add user</div>
                            <div class="card-body">
                                <form name="my-form"  action="/add-user" method="post">
                                @csrf  
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="full_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="email_id">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="phone_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="text" id="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                        <div class="col-md-6 offset-md-4">
                                        <button type="submit"  value = "Add User" class="btn btn-primary">Add User</button>
                                        </div>
                                    </div>
                                </form>
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