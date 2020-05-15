@extends ('layouts.site')
@section ('main')

<div class="container">
    <div>
        <h4>Exam Box</h4>
    </div>
   
    <div class="row">
        <div>
            <p>Name : {{ $exam->exam_name }} Total : {{ $exam->total_marks }} Time : {{ $exam->time }}</p>
        </div>
    </div>
    @foreach ($questions as $question)
        <div class="row">
            <?php $s = json_decode($question->question_string); ?>
            <div class="form-group box-pick" id="{{ $question->id }}">
                <label>{{ $s[0]->title }}</label>
                <input class="pro" type="checkbox" value="{{ $s[0]->option_one }}">{{ $s[0]->option_one }}
                <input class="pro" type="checkbox" value="{{ $s[0]->option_two }}">{{ $s[0]->option_two }}
                <input class="pro" type="checkbox" value="{{ $s[0]->option_three }}">{{ $s[0]->option_three }}
                <input class="pro" type="checkbox" value="{{ $s[0]->option_four }}">{{ $s[0]->option_four }}
            </div>
        </div>
    @endforeach
</div>
<script>
    
</script>
@endsection