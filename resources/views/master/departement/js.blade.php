@push('ajax')
    <script>
        alert();
        $(document).ready(function() {
            // var datatable = $('#dept').DataTable();
            // $('#dept').DataTable({
            //     processing: true,
            //     serverside: true,
            //     ajax: "{{ url('dept') }}",
            //     columns: [{
            //             data: 'DT_RowIndex',
            //             name: 'DT_RowIndex',
            //             orderable: false,
            //             searchable: false
            //         },
            //         {
            //             data: 'kode_dept',
            //             name: 'Kode Dept'
            //         }, {
            //             data: 'name',
            //             name: 'Nama Dept'
            //         }, {
            //             data: 'status',
            //             name: 'Status'
            //         }
            //     ]
            // })


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#deptTable').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "processing": true,
                // serverSide: true,
                // url: "{{ url('dept') }}",
                // type: "GET",
                // columns: [{
                //         data: 'DT_RowIndex',
                //         name: 'No'
                //     },
                //     {
                //         data: 'kode_dept',
                //         name: 'kodeDept'
                //     },
                //     {
                //         data: 'name',
                //         name: 'nameDept'
                //     },
                //     {
                //         data: 'status',
                //         name: 'Status'
                //     },
                //     {
                //         data: 'action',
                //         name: 'action',
                //     },
                // ]
            });

            // $('#deptTable').DataTable({
            //     processing: true,
            //     serverSide: true,
            //     url: "{{ url('dept') }}",
            //     type: "GET",
            //     columns: [{
            //         data: 'DT_RowIndex',
            //         name: 'DT_RowIndex',
            //         orderable: false,
            //         searchable: false
            //     }, {
            //         data: 'kode_dept',
            //         name: 'Kode Dept'
            //     }, {
            //         data: 'name',
            //         name: 'Nama Dept'
            //     }, {
            //         data: 'action',
            //         name: 'Aksi'
            //     }]
            // });

            $('.tambah-data').click(function() {
                $('#save-data').val("add-dept");
                $('#id').val('');
                $('#DeptForm').trigger("reset");
                $('#DeptTitle').html("Tambah Data Dept");
                $('#DeptModal').modal('show');
            })

            $('#save-data').click(function(e) {
                e.preventDefault();
                $(this).html('Sending ...');
                var table = $('#deptTable').DataTable();

                $.ajax({
                    data: $('#DeptForm').serialize(),
                    url: "{{ url('deptStore') }}",
                    type: "POST",
                    datatype: 'json',
                    success: function(data) {
                        $('#DeptForm').trigger("reset");
                        $('#DeptModal').modal('hide');
                        // table.DataTable().ajax.reload();
                        // table.ajax.reload(function(json) {
                        //     $('#DeptForm').val(json.lastInput);
                        // });
                        window.location.reload();
                        // var oTable = $('#dept').dataTable();
                        // oTable.ajax.reload();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('$save-data').html('Save changes');
                    }
                });
            });
        });
    </script>
@endpush
