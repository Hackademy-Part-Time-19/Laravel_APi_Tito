<x-layout>
    <x-slot:title>Anime | Genere</x-slot>

    <div class="container">
        <div class="row">
            <h1 style="margin-top:40px;" class="text-center">Anime di genere</h1>
            @foreach ($anime as $anime)
                <div style="margin-top:40px; display:grid; padding-left:60px;" class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $anime['title'] }}</h5>
                            <p class="card-text">{{ Str::limit($anime['synopsis']), 50 }}</p>
                            <a href="{{route('anime.byId',['id'=> $anime['mal_id']])}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
