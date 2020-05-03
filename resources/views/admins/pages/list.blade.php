@extends ('layouts.app')

@section ('content')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>SL.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $sl=1; ?>
            @foreach($admins as $admin)
            <tr>
                <td>{{ $sl }}</td>
                <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                <td>{{ $admin->user_name }}</td>
                <td>{{ $admin->email }}</td>
            </tr>
            <?php $sl++; ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection