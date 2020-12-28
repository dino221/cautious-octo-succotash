<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azuriranje knjige</title>
</head>
<body>



<form action ="{{route('books.update', $editid->id)}}" method="post">
@method('PUT')
@csrf


    <label for="naslov">Naslov knjige:</label><br>
    <input type="text" id="naslov" name="naslov" value="{{$editid->naslov}}"><br>
    <label for="autor">Autor knjige:</label><br>
    <input type="text" id="autor" name="autor" value="{{$editid->autor}}"><br>
    <label for="autor">ISBN:</label><br>
    <input type="text" id="isbn" name="isbn" value="{{$editid->isbn}}"><br>
    <br>

    <input type="submit" value="Azuriraj"><br><br>
    
</form>

<form action ="{{route('books.destroy', $editid->id)}}" method="post">
@method('DELETE')
@csrf

    <input type="submit" value="Izbrisi">
    

</form>


</body>
</html>




