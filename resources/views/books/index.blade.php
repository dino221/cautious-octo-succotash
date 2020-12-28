<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ispis iz baze</title>
</head>
<body>

@section('content')
@foreach($books as $item)
{{$item->naslov}}
@endforeach

@foreach($books as $item)
{{$item->autor}}
@endforeach

@foreach($books as $item)
{{$item->isbn}}
@endforeach

    
</body>
</html>







    
    








