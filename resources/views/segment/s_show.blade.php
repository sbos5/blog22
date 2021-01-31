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
    p><h4>Wykaz segmentów pojazdów</h4> </p>
        <div class="container">
            <table  class="table" border="2px">
        @foreach ($segm as $klas)
        <tr>
        <p><td>{{$klas->id}}</td><td>{{ $klas->segment }}</td>
        <td><a href="{{Route('show_id',$id=$klas->id)}}">Edit</a>
        </td><td><a href="{{Route('show_id',$id=$klas->id)}}">update</a></td>
            <td><a href="{{Route('show_id',$id=$klas->id)}}">delete</a></td></p>
            </tr>
        @endforeach
            </table>
            <td><a href="{{Route('s_nowy'}}">Utwórz nowe segment</a></td></p>
        </div>

    </body>

