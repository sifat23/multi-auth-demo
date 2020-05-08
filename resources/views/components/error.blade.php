<div id="error-box">
    <h6 class="error-title">Oops! We Found Some Error Here</h6>
    <ul id="error-copy" class="error-list">
        @if($errors->any())
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>
</div>