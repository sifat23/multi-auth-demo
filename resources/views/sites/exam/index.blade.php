@extends ('layouts.site')
@section ('main')

<div class="container">
    <div class="row">
        <h4>Exam Box</h4>
        <div>
        </div>
    </div>
    @foreach ($exams as $exam)
        <div class="row">
            <h5><a href="{{ url('test/'.$exam->id) }}">{{ $exam->exam_name }}</a></h5>
        </div>
    @endforeach
</div>
@endsection