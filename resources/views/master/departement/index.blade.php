@extends('layout.content')

@push('css')
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}  ">
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}  ">
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}  ">
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $sub_title }}</h3>
                            </div>
                            <div class="card-body">
                                {{-- <button class="btn btn-primary tambah-data"><i class="fas fa-plus"></i> | Tambah
                                    Data</button> --}}
                                <div id="div-table-departement"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-6">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><label for="title" id="DeptTitle"></label></h3>
                            </div>
                             <div class="card-body">
                                <form id="DeptForm" name="DeptForm" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="id" id="id">
                                    <div class="form-group">
                                        <label for="name">Kode Dept</label>
                                        <input type="text" class="form-control" id="kodeDept" name="kodeDept" placeholder="Kode"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="name">Name Dept</label>
                                        <input type="text" class="form-control" id="namaDept" name="namaDept" placeholder="Name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">NonActive</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="save-data">Save changes</button>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    {{-- <div class="modal fade" id="DeptModalEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="DeptFormEdit" name="DeptFormEdit" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title"><label for="title" id="DeptTitle"></label></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name">Kode Dept</label>
                            <input type="text" class="form-control" id="kodeDept" name="kodeDept" placeholder="Kode"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name Dept</label>
                            <input type="text" class="form-control" id="namaDept" name="namaDept" placeholder="Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">NonActive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="save-data">Save changes</button>
                    </div>
                </form>
            </div>
            
        </div>
        
    </div> --}}
@endsection


@push('js')
    <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}  "></script>
    <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}  "></script>
    <script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}  "></script>
    <script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}  "></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}  "></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}  "></script>

    @include('master.departement.js')
@endpush
