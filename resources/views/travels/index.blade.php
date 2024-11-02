
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Travels</h1>
<div>
    @if (session()->has('success'))
        <div>
        {{session('success')}}
</div>
    @endif
</div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Days</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        <tr>
        @foreach ($travels as $travel)
        <tr>
           <td>{{$travel->id}}</td>
           <td>{{$travel->name}}</td>
           <td>{{$travel->date}}</td>
           <td>{{$travel->days}}</td>
           <td>{{$travel->description}}</td>
           <td>
                <a href="{{route('travel.edit', ['travel' => $travel])}}">Edit</a>
</td>
            <td>
                <form method="post" action="{{route('travel.destroy',['travel'=>$travel])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" />
                </form>
            </td>
</tr>
        @endforeach
</td>
    
</td>
</table>
</div>
</body>
</html>
