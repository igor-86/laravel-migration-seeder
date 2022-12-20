@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Treni</h2>
        <ul>
            @foreach ($trains as $item)
                <li>
                    <h3>{{ $item->agency }}</h3>
                    <div class="station">
                        <p class="mb-0"> Stazione partenza: {{ $item->st_start }}</p>
                        <p class="ms-3 mb-0"> Stazione arrivo: {{ $item->st_arrive }}</p>
                        <div class="code ms-3">
                            <p>Code</p>
                            <p>{{ $item->code_train }}</p>
                        </div>
                        <p class="ms-3 mb-0"> Partenza: {{ $item->time_start }}</p>
                        <p class="ms-3 mb-0"> Arrivo: {{ $item->time_arrive }}</p>
                        @if ($item->cancel)
                            <p class="ms-3 mb-0">Cancellato</p>
                        @endif
                        <a class="btn btn-primary ms-3" href="#" role="button">More</a>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
