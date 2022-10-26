<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($users as $item)

    <p> {{\Carbon\Carbon::parse($item->schedule_date)->toDateString()}} {{\Carbon\Carbon::parse($item->schedule_date)->format('g:i a')}}</p>
        
    @endforeach
    
</body>
</html>