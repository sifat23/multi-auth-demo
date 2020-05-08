@extends ('layouts.app')

@section ('content')
@component ('components.error')
@endcomponent

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <a href="{{ route('admin') }}">Dashboard</a>
            > Add Lesson
        </h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin-lesson-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="lesson_name" class="form-control form-control-user" placeholder="Type Your Lesson Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lesson_code" class="form-control form-control-user" placeholder="Type Your Lesson Code">
                </div>
                <div class="form-group">
                    <select name="class_id" class="form-control form-control-user">
                        <option value="">Select a class name</option>
                        @foreach ($classes as $class) 
                            <option value="{{ $class->id }}"> {{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea type="text" rows="5" name="lesson_description" class="form-control form-control-user"
                    placeholder="Type Your Lesson Description"></textarea>
                </div>
                
                <div class="form-group">
                    <input type="file" name="lesson_file" class="form-control form-control-user" placeholder="Select Your Lesson File">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    upload
                </button>
            </form>
        </div>
        <button id="click" style="display: none">
            hello
        </button>
    </div>
</div>
    <script type="text/javascript">
                @if($errors->any())
                $(document).ready(function(){

                    $('#click').show();
        
    
                });
                    
                @endif
    </script>
@endsection