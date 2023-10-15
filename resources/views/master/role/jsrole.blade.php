<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableRole();

        $('#idRole').val('');
        $('#save-data').val("add-role");
        $('#Roleform').trigger("reset");

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
                data: $('#Roleform').serialize(),
                url: "{{ url('roleStoreOrUpdate') }}",
                type: "POST",
                datatype: 'json',
                success: function(data) {
                    $('#Roleform').trigger("reset");
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data Berhasil disimpan',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    tableRole();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('$save-data').html('Save changes');
                }
            });
        });
    })



    function tableRole() {
        $.ajax({
            url: "{{ url('tableRole') }}",
            type: "GET",
            success: function(data) {
                $('#role-table').html(data.html);
                $('#roleTable').DataTable({
                    "processing": true,
                    "responsive": true,
                });
            }
        });
    }
</script>
