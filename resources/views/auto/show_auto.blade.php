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
        <p><h4>Wykaz pojazdów</h4> </p>
        <div class="container">
            <table  class="table" border="2px">
        @foreach ($auto as $klas)
        <tr>
        <p><td>{{$klas->id}}</td><td>{{ $klas->marka }}</td><td>{{ $klas->model }}</td>
        <td><a href="{{Route('show_id',$id=$klas->id)}}">Edit</a>
        </td><td><a href="{{Route('auto_up',$id=$klas->id)}}">update</a></td>
            <td><a href="{{Route('auto_de',$id=$klas->id)}}">delete</a></td></p>
            </tr>
        @endforeach
            </table>
            <td><a href="{{Route('nowy',$id=$klas->id)}}">Utwórz nowe auto</a></td></p>
        </div>
    </body>
</html>



