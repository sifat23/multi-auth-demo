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
           @foreach ($lessons as $lesson)
                <div>
                    {{ $lesson->lesson_name }}

                    <iframe src="https://player.vimeo.com/video/417763748" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
           @endforeach
        </div>
    </div>
</div>
@endsection