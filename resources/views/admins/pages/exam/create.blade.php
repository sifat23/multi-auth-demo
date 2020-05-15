@extends ('layouts.app')

@section ('content')
@component ('components.error')
@endcomponent

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <a href="{{ route('admin') }}">Dashboard</a>
            > Add Exam Paper
        </h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin-exam-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="exam_name" class="form-control form-control-user" placeholder="Type Exam Name">
                </div>
                <div class="form-group">
                    <input type="text" name="time" class="form-control form-control-user" placeholder="Type Exam Time">
                </div>                
                <div class="form-group">
                    <input type="text" name="total_number" class="form-control form-control-user" placeholder="Type Total Number">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
        </div>
        <button id="click" style="display: none">
            hello
        </button>
    </div>
</div>
    
@endsection