@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="container">
                <div class="row">Panel de control</div>

                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido a tu panel de control!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
