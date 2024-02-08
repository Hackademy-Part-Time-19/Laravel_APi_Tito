<x-layout>
    <style>
        body {
            background-color: #202020;
            color: white;
        }
    </style>

    <x-slot:title>Anime | Generi</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="width: 100%">
                <h1 style="margin-top:40px;" class="text-center">Liste Generi Anime</h1>
                <div style="height: 400px; display:flex; align-items:start; justify-content:space-around">
                    <ul style="margin-top:40px;">
                        @foreach ($dati as $anime)
                            <li>
                                <a href="{{ route('anime.genre', ['genre_id' => $anime['mal_id']]) }}">
                                    {{ $anime['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-layout>
