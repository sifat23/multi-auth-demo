@extends ('layouts.site')
@section ('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> User Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session_status }}
                        </div>
                    @endif

                    You are logged in as User!
                </div>
                @component ('components.who')
                @endcomponent
            </div>
        </div>
    </div>
</div>
@endsection