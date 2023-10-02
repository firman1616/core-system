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
                        title: 'Data Berhasil Ditambahkan',
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
            if (confirm('Yakin ingin menghapus data ini ?') == true) {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ url('deptDestroy') }}/" + id,
                    // data: { id: id },
                    type: 'DELETE'
                });
                tableDepartement();
            }
        });
    });

    function tableDepartement() {
        $.ajax({
            url: "{{ url('tableDepartement') }}",
            type: "GET",
            success: function(data) {
                $('#div-table-departement').html(data.html);
                $('#deptTable').DataTable({});
            }
        });
    }
</script>