<table id="jabatantable" class="table table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th>No</th>
            <th>Role Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $x = 1; ?>
        @foreach ($jabatan as $row)
            <tr>
                <td>{{ $x++ }}</td>
                <td>{{ $row->name }}</td>
                <td>
                    @if ($row->status == 1)
                        {{ 'Active' }}
                    @else
                        {{ 'NonActive' }}
                    @endif
                </td>
                <td><button type="button" class="btn btn-warning edit" id="editData" data-id="{{ $row->id }}"><i
                            class="fa fa-edit"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
