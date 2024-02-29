<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div><input type="text" id="uid" name="uid" value=""></div>
        <div><input type="text" id="upw" name="upw" value=""></div>
        <div><input type="text" id="uname" name="uname" value=""></div>
        <div><input type="text" id="uage" name="uage" value=""></div>
        <button type="submit">저장하기</button>
    </form>

</body>
</html>