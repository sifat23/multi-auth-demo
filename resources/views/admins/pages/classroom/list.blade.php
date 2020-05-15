@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <a href="{{ route('admin') }}">Dashboard</a>
            > List Class
        </h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin-class-store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="class_name" class="form-control form-control-user" placeholder="Type Your Class Name">
                </div>
                <div class="form-group">
                    <input type="text" name="class_genre" class="form-control form-control-user" placeholder="Type Your Class Genre">
                </div>
                <div class="form-group">
                    <input type="text" name="class_code" class="form-control form-control-user" placeholder="Type Your Class Code">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
@endsection