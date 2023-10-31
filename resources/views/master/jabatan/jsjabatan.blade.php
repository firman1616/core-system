<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableJabatan();

        $('#LvTitle').html("Tambah Data Level");
        $('#save-data').val("add-level");
        $('#id').val('');
        $('#Jabatanform').trigger("reset");

        // Tambah dan ubah data
        $('#save-data').click(function(e) {
            e.preventDefault();
            // $(this).html('Sending ...');
            // $('#DeptModal').modal('hide');
            Swal.fire({
                icon: 'info',
                title: 'Data Sedang diproses',
                showConfirmButton: false,
                // timer: 3000
            })

            $.ajax({
                data: $('#Jabatanform').serialize(),
                url: "{{ url('jabatanStoreOrUpdate') }}",
                type: "POST",
                datatype: 'json',
                success: function(data) {
                    $('#DeptForm').trigger("reset");
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data Berhasil disimpan',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    tableJabatan();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('$save-data').html('Save changes');
                }
            });
        });

        // delete function
        // $('body').on('click', '.delete', function(e) {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             var id = $(this).data('id');
        //             $.ajax({
        //                 url: "{{ url('deptDestroy') }}/" + id,
        //                 // data: { id: id },
        //                 type: 'DELETE'
        //             });                   
        //             Swal.fire(
        //                 'Deleted!',
        //                 'Data berhasil dihapus.',
        //                 'success'
        //             )
        //             tableJabatan();
        //         }
        //     })
        // });

        // edit function
        $('body').on('click','.edit',function (e) {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ url('jabatanEdit') }}/" + id,
                type: 'GET',
                success: function (res) {
                    $('#id').val(res.result.id);
                    $('#levelname').val(res.result.name);
                    $('#status').val(res.result.status);
                }
            })
        })

    });

    function tableJabatan() {
        $.ajax({
            url: "{{ url('tableJabatan') }}",
            type: "GET",
            success: function(data) {
                $('#jabatan-table').html(data.html);
                $('#jabatantable').DataTable({
                    "processing": true,
                    "responsive": true,
                });
            }
        });
    }
</script>