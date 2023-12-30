<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
</head>

<body class="color">
<div class="card w-25 p-4">
    <h6 class="text-center text-danger">Đăng nhập thất bại. Vui lòng đăng nhập lại!</h6>
    <h3 class="text-center">Đăng nhập </h3>
<form action="xuly_dangnhap.php" method="POST" class="was-validated">
  <div class="mb-3 mt-3">
    <label for="tendangnhap" class="form-label">Tên đăng nhập:</label>
    <input type="text" class="form-control" id="tendangnhap" placeholder="Nhập tên đăng nhập" name="tendangnhap" required>
    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
  </div>
  <div class="mb-3">
    <label for="matkhau" class="form-label">Mật khẩu:</label>
    <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau" required>
    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
  </div>
  <button type="submit" name="btndangnhap"class="btn btn-primary">Đăng nhập</button>
</form>
</div>
</body>
</html>
