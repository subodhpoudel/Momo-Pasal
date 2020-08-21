@extends('layouts.app')

@section('content')
        <div class="momo-details">
                <h1> Order for {{ $momo->name }} </h1>
                <p class="type">Type:
                <ul class="momos">
                        <li class="types">
                                {{ $momo->type }} 
                        </li>
                        <li class="types">
                                {{ $momo->cookingStyle }}
                        </li>
                </ul>
                </p>
                <p class="plates">Plates: {{  $momo->plates }}</p>
                <p class="colddrinks">Cold Drinks:</p>
                <ul>
                @foreach($momo->colddrinks as $colddrink)
                        <li> {{ $colddrink }} </li>
                @endforeach        
                </ul>
        
                <form action ="{{  route('momos.destroy', $momo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                        <button> Complete Order </button>
                </form>
        </div>
        <a href="{{ route('momos.index') }}" class="back">Back to all momos</a>
@endsection        
