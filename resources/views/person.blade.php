
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <title>Add person</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <p>co to</p>
    {!! form($form)!!}     
     @section('ic')
<p>to jest moj fotmularz</p>
  
      @endsection
       
    </body>
</html>
 
