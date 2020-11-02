<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>确认注册链接</title>
</head>
<body>
  <h1>感谢你在xxx上进行注册</h1>

  <p>
    请点击下面链接完成注册
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>如果不是本人操作请忽略此件</p>

</body>
</html>
