<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<table style="" class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">path</th>
    </tr>
    </thead>
    <tbody>
    @foreach($images as $image)
        <tr>
            <th scope="row">{{$image->id}}</th>
            <td>
                <img src="{{asset('imgs/'.$image->path)}}" width="60px" alt="">
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
