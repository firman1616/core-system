<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableJabatan();

        // $('#idRole').val('');
        $('#save-data').val("add-level");
        $('#Jabatanform').trigger("reset");

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
                    $('#Jabatanform').trigger("reset");
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

        $('body').on('click', '#editData', function(e) {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ url('jabatanEdit') }}/" + id,
                type: 'GET',
                success: function(res) {
                    $('#id').val(res.result.id);
                    $('#levelname').val(res.result.name);
                    $('#status').val(res.result.status);
                }
            })
        })
    })

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
