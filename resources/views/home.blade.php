@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            You are logged in!
                        </div>
                    @endif

                    @if(\Auth::user()->is_admin === 0)
                        <div class="alert alert-danger" role="alert">
                                Anda bukan admin
                            </div>
                    
                    @else
                        
                    <div class="alert alert-success" role="alert">
                            Anda admin.
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
