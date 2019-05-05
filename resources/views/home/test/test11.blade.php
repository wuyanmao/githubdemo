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
<form action="" method="post">
    <p>姓名: <input type="text"name="name"></p>
    <p>年龄: <input type ="text"name="age"></p>
    <p>email <input type="email"name="email"></p>
    <p>验证码 <input type="text" name="captcha"/><img src="{{Captcha::src()}}" alt=""></p>
    {{csrf_field()}}
    <input type="submit" value="提交">
</form>
</body>
</html>