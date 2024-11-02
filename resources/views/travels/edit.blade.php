
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
        </div>
    <form method="post" action="{{route('travel.update', ['travel'=> $travel])}}">
    @csrf
    @method('put')
    <div>
        <label>Destination</label>
        <input type="text" name="name" placeholder="tujuan wisata" value="{{$travel->name}}"/>
    </div>
    <div>
        <label>Date</label>
        <input type="date" name="date" placeholder="tanggal rencana" value="{{$travel->date}}"/>
    </div>
    <div>
        <label>Days</label>
        <input type="integer" name="days" placeholder="lama hari" value="{{$travel->days}}"/>
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$travel->description}}"/>
    </div>
    <div>
        <input type="submit" value="Update" />
</div>
    </body>
    </html>
