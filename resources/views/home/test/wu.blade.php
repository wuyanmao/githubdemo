<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <p>姓名: <input type="text" name="name" placeholder=""></p>
    <p>年龄: <input type="text" name="age" placeholder=""></p>
    <p>邮箱; <input type="text" name="email" placeholder=""></p>
    <p>头像: <input type="file" name="avata" placeholder=""></p>
   <!-- <input type="hidden" value="_token" value="{{csrf_token()}}">-->
    {{csrf_field()}}
    <p><input type="submit" value="提交"/></p>
</form>
</body>
</html>