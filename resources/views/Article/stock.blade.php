<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>controle</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        <div class="container ">
            <div class="row">
            <div class="col s12">
                <h1>Modifier le stock</h1>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
                    <form action="/modifierArticle" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="article">Article</label>
                        <select name="article" id="article" class="form-control">
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}">{{ $article->designation }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type_entree" value="entrée" checked>
                            <label class="form-check-label" for="type_entree">Entrée</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type_sortie" value="sortie">
                            <label class="form-check-label" for="type_sortie">Sortie</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input type="number" name="quantite" id="quantite" class="form-control" value="10" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>