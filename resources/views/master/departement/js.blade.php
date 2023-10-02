<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableDepartement();

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
                    tableDepartement();
                    // table.DataTable().ajax.reload();
                    // table.ajax.reload(function(json) {
                    //     $('#DeptForm').val(json.lastInput);
                    // });
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