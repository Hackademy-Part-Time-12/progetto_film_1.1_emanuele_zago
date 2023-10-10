<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">Lista dei Film di un certo attore</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-12 col-md-4 my-2">
                <x-card />

            </div>
            @endforeach
        </div>

    </div>
    
</x-layout>