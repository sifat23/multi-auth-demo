@extends ('layouts.app')

@section ('content')
@component ('components.error')
@endcomponent


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
            @foreach($exams as $exam)
            <tr>
                <td>{{ $sl }}</td>
                <td>{{ $exam->exam_name }}</td>
                <td>{{ $exam->time }}</td>
                <td>{{ $exam->total_mark }}</td>
                <th>
                    <a href="{{ url('/admin/exams/'.$exam->id) }}" class="btn btn-primary btn-user">
                        see questions 
                    </a>
                </th>
            </tr>
            <?php $sl++; ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection