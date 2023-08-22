<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Import asset --}}
    @vite('resources/js/app.js')
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-3">Film</h1>
        <div class="row">

            {{-- Foreach HERE --}}
            @foreach ($movies as $movie)
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $movie->title }} </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{ $movie->original_title }} </h6>
                        <h6 class="card-subtitle mb-2 text-muted">Data uscita: {{ $movie->date }} </h6>
                        <h6 class="card-subtitle mb-2 text-muted">Origine: {{ $movie->nationality }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
