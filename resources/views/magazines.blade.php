<x-layout>
    <x-slot:title>Magazines</x-slot>

    <h1 style="margin
    :40px;" class="text-center">Riviste</h1>
    <ol class="list-group list-group-numbered">
        @foreach ($dati as $magazine)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$magazine['name']}}</div>
                    <a target="blank" href="{{$magazine['url']}}">More</a>
                </div>
                <span  class="badge bg-primary rounded-pill">{{$magazine['count']}}</span>
            </li>
        @endforeach
    </ol>
</x-layout>
