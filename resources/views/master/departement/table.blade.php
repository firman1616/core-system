<table id="deptTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Dept</th>
            <th>Nama Dept</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $x=1; ?>
        @foreach ($dept as $row)
            <tr>
                <td>{{$x++}} </td>
                <td>{{ $row->kode_dept }}</td>
                <td>{{ $row->name }}</td>
                <td>
                    @if ($row->status == '1')
                        {{ 'Active' }}
                    @else
                        {{ 'NonActive' }}
                    @endif
                </td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
