<script>
    $(document).ready(function() { 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        tableRole();
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