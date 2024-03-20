<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">
        <div class="row">
          <div class="col s12">
            <h1>Liste des Articles</h1>
            <hr>
                <a href="/Ajouter" class="btn btn-primary">ajouter un article</a>
                <a href="/update" class="btn btn-info">Modifier le stock</a>
            <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Désignation</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide=1;
                        @endphp
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $article->designation }}</td>
                                <td>{{ $article->stock }}</td>
                                <td>
                                    <a href="/delete/{{ $article->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @php
                            $ide +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
          </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>