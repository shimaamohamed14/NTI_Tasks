<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="my-4 row d-flex justify-content-center">
        <div class="col-8">
    <h1>hello from {{$name}}</h1>
     <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>

        </div>
        </div>
        @endsection

</body>
</html>