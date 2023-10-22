<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableJabatan()
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
