<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
{{-- ACA ESTAMOS LLAMANDO A QUE SE PUEDAN UTILIZAR LAS CATEGORIAS PARA LA BARRA DE FILTRO --}}


    <x-app-layout>
   {{-- Barra de filtros Fin --}}
        <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
            
            <h1 class="uppercase text-center text-3xl font-bold ">
                Categoria: {{$category->name}}
            </h1>
            @foreach ($posts as $post)

            <x-card-post :post="$post"/>
                
            @endforeach
            <div class="mt-4">
                {{$posts->links()}}
            </div>
        </div>
    </x-app-layout>
    
</body>
</html>