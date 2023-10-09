@extends('layout.content')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row ">
        {{-- add data --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{$titleform}} </h3>
        
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" id="Roleform">
                    <div class="form-group">
                        <label for="name">Role Name</label>
                        <input type="text" class="form-control" id="rolename">
                    </div>
                    <div class="form-group">
                        <label for="name">Role Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">NonActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>
                </div>
                <!-- /.card-body -->
              </div>
        </div>

        {{-- list data --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{$subtitle}} </h3>
        
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  Start creating your amazing application!
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  Footer
                </div>
                <!-- /.card-footer-->
              </div>
        </div>
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection