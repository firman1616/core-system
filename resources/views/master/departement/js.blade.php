<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableDepartement();

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.tambah-data').click(function() {
            $('#save-data').val("add-dept");
            $('#id').val('');
            $('#DeptForm').trigger("reset");
            $('#DeptTitle').html("Tambah Data Dept");
            $('#DeptModal').modal('show');
        })

        $('#save-data').click(function(e) {
            e.preventDefault();
            // $(this).html('Sending ...');
            $('#DeptModal').modal('hide');
            Swal.fire({
                icon: 'info',
                title: 'Data Sedang diproses',
                showConfirmButton: false,
                // timer: 3000
            })
            var table = $('#deptTable').DataTable();

            $.ajax({
                data: $('#DeptForm').serialize(),
                url: "{{ url('deptStore') }}",
                type: "POST",
                datatype: 'json',
                success: function(data) {
                    $('#DeptForm').trigger("reset");
                    tableDepartement();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil Ditambahkan',
                        showConfirmButton: false,
                        timer: 3000
                    })
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('$save-data').html('Save changes');
                }
            });
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