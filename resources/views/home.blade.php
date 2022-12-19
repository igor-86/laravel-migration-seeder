@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Treni lista</h1>
        <ul>
            @foreach ($trains as $item)
                <li>
                    <h3>{{ $item->agency }}</h3>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
