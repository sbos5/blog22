<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
              crossorigin="anonymous">  
    </head>
    <body>
        <p><h6>Edycja pojazdu</h6></p>
        <div class="conteiner" >
      @if($auto)  
    <p>{{$auto->id}} -{{ $auto->marka }} - {{ $auto->model }} </p>
    <p><td><a href="{{Route('show',$id=$auto->id)}}">Powróć do listy</a></td></p>
       @else  
       <p> brak modelu</p>
       @endif
        </div>
    </body>
</html

