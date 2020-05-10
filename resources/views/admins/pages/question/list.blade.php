@extends ('layouts.app')

@section ('content')
@component ('components.error')
@endcomponent

<div>
    <div>
        <!-- <h4>{{ $exam->exam_name }}</h4> -->
        <button id="add-question" class="btn btn-primary btn-user">
            add question
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>
        <div>
        </div>
    </div>
</div>
<div>
    @foreach ($allQuestions as $question)
    <?php
        $s = json_decode($question->question_string);
    ?>
    <div>
        <h6><?= $s[0]->title; ?></h6>
        <h6><?= $s[0]->option_one; ?></h6>
        <h6><?= $s[0]->option_two; ?></h6>
        <h6><?= $s[0]->option_three; ?></h6>
        <h6><?= $s[0]->option_four; ?></h6>
    </div>
    @endforeach
</div>


<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('admin-exam-questions-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="hidden" name="examID" value="{{ $exam->id}}">
                </div>
                <div class="form-group">
                    <label>Type Question Here</label>
                    <input type="text" name="question_name" class="form-control form-control-user" placeholder="Type Exam Name">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" name="option_one" class="form-control form-control-user" placeholder="Type Exam Time">
                        </div>    
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" name="option_two" class="form-control form-control-user" placeholder="Type Exam Time">
                        </div>    
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" name="option_three" class="form-control form-control-user" placeholder="Type Exam Time">
                        </div>    
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" name="option_four" class="form-control form-control-user" placeholder="Type Exam Time">
                        </div>    
                    </div>
                </div>            
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

