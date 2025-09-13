<?php
// --- BỘ ĐẾM TRUY CẬP ---
$file = "counter.txt";

// Nếu chưa có file thì tạo với giá trị ban đầu = 0
if(!file_exists($file)){
    file_put_contents($file, 0);
}

// Đọc số lượt truy cập hiện tại
$counter = (int)file_get_contents($file);

// Tăng lên 1 mỗi khi có người vào web
$counter++;

// Ghi lại vào file
file_put_contents($file, $counter);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảo trì Website</title>

  <!-- Open Graph -->
  <meta property="og:title" content="Website đang bảo trì 🚧">
  <meta property="og:description" content="Chúng tôi đang nâng cấp để mang đến trải nghiệm tốt hơn. Vui lòng quay lại sau!">
  <meta property="og:image" content="https://s14.gifyu.com/images/bTCGR.gif">
  <meta property="og:url" content="https://yourdomain.com/">
  <meta property="og:type" content="website">

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    .container {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
    }
    .logo {
      width: 150px;
      height: 150px;
      margin-bottom: 20px;
    }
    h1 { font-size: 2rem; margin-bottom: 10px; }
    .counter {
      margin-top: 20px;
      font-size: 1.2rem;
      background: rgba(0,0,0,0.4);
      padding: 10px 20px;
      border-radius: 8px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="logo.gif" alt="Logo" class="logo">
    <h1>🚧 Website đang bảo trì 🚧</h1>
    <p>Chúng tôi đang nâng cấp để mang đến trải nghiệm tốt hơn.<br>Vui lòng quay lại sau!</p>
    <div class="counter">👀 Tổng số lượt truy cập: <b><?= $counter ?></b></div>
  </div>
</body>
</html>
