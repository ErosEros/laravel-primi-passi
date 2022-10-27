<!DOCTYPE html>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eros</title>
</head>
<body>
    @php
        $menu = ['home','service','contact','social']
    @endphp

    <h1>HELLO WORLD!</h1>
    @foreach ($menu as $item)
        <div>
            <ul>
                <li>{{$item}}</li>
                </ul>
            </div>


    @endforeach


</body>
</html>
