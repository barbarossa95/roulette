@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>Dayly Raffle</h1>

                    @can('participate', 'App\Raffle')
                    <form method="POST" action="{{route('participate')}}">
                        @method('POST')
                        @csrf
                        <button class="btn btn-lg btn-success " type="submit">Participate!</button>
                    </form>
                    @else
                        <p>Oh, it seems you already participated today.</p>
                        <p>Come tomorrow</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
