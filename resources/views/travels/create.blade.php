
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Create a Travel</h1>
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        

        @endif
<div>
<form method="post" action="{{route('travel.store')}}">
@csrf
@method('post')
<div>  
<label>Destination</label>
<input type="text" name="name" placeholder="tujuan wisata" />
</div>
<div>
<label>Date</label>
<input type="date" name="date" placeholder="Tanggal rencana" />
</div>
<div>
<label>Days</label>
<input type="integer" name="days" placeholder="Berapa lama" />
</div>
<div>
<label>Description</label>
<input type="text" name="description" placeholder="Description" />
</div>
<div>
<input type="submit" value="Save a New Travel" />
</form>

</div>
</body>
</html>
