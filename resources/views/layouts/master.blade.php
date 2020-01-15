<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
</head>
<body>
   @section('menu')
   <header>
   <h1>Titre temporaire</h1>
   <nav>
   <!-- Menu ici -->
   </nav>
   </header>
   @show
   <!--************ Contenu de la page ************-->
   @yield('content')

   @section('footer')
   <footer>
   <!-- footer ici -->
   </footer>
   @show
</body>
</html>