<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableDepartement();

        $('#DeptTitle').html("Tambah Data Dept");
        $('#save-data').val("add-dept");
        $('#id').val('');
        $('#DeptForm').trigger("reset");

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
                data: $('#DeptForm').serialize(),
                url: "{{ url('deptStore') }}",
                type: "POST",
                datatype: 'json',
                success: function(data) {
                    $('#DeptForm').trigger("reset");
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data Berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    tableDepartement();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('$save-data').html('Save changes');
                }
            });
        });

        // delete function
        $('body').on('click', '.delete', function(e) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('deptDestroy') }}/" + id,
                        // data: { id: id },
                        type: 'DELETE'
                    });                   
                    Swal.fire(
                        'Deleted!',
                        'Data berhasil dihapus.',
                        'success'
                    )
                    tableDepartement();
                }
            })
        });


    });

    function tableDepartement() {
        $.ajax({
            url: "{{ url('tableDepartement') }}",
            type: "GET",
            success: function(data) {
                $('#div-table-departement').html(data.html);
                $('#deptTable').DataTable({
                    "processing": true,
                    "responsive": true,
                });
            }
        });
    }
</script>