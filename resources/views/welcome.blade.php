<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mes livres de cuisine</title>

        
        </style>
    </head>
    <body>
    <a href="{{ route('cookbooks.index') }}">Tous les livres</a>

    <div class="card my-4">
        <h5 class="card-header">Recherche</h5>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher" name="query">
                <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">Rechercher</button>
          </span>
            </div>
        </form>
    </div>
    </body>
</html>
