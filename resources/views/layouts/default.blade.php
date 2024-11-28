<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre du document</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="/css/styles.css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
=======
        <link rel="stylesheet" href="css/styles.css" media="all">
>>>>>>> 95a99597c3abab125b8f1594ca4fcf9ccc39eb43
    </head>
    <body>
        <div class="website">
            <header class="header">
                @include('includes.header')
            </header>
            <aside class="aside">
                <nav class="navigation">
<<<<<<< HEAD
                    @include('includes.menu')
=======
                    
>>>>>>> 95a99597c3abab125b8f1594ca4fcf9ccc39eb43
                </nav>
            </aside>
            <main id="main" class="main">
                @yield('contenu')
            </main>
        </div>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
</html>