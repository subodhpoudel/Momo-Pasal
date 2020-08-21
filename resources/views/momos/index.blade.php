@extends('layouts.app')

@section('content')
        <div class="wrapper momo-index">
            <h1> Momo Orders </h1>    
                @foreach($momos as $momo)
                <div class="momo-item">
                    <img src = "/img/order_icon.png">
                    <h4><a href="/momos/{{ $momo->id }}">{{ $momo->name }}</a></h4>
                </div>
                @endforeach

            
        </div>
@endsection        
