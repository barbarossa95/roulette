@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>CONGRATS!</h1>
                    <h2>You won a {{ $prize->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
