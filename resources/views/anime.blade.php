<x-layout>

    <x-slot:title>Anime</x-slot>

    <div style="margin-top: 40px"  class="container">
      <h1>Dettaglio Anime {{$anime['mal_id']}}</h1>
      <a style="display:flex;justify-content:flex-end" href="{{route('genres')}}">Torna alla Lista</a>
        <div style="margin-top: 40px" class="row">
            <div class="col-lg-3">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
            </div>
            <div class="col-lg-9 text-center"  style="margin-top: 20px">
                <div class="col-lg-12">
                    <div>
                        <h5>{{ $anime['title'] }}</h5>
                        <p>{{ $anime['synopsis'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
