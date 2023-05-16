<?php
date_default_timezone_set ('Asia/Tokyo');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  file_put_contents('msglog.html', '<p>', FILE_APPEND);
  file_put_contents('msglog.html', date('Y-m-d H:i:s'), FILE_APPEND);
  file_put_contents('msglog.html', '-', FILE_APPEND);
  $data = $_POST['name'];
  file_put_contents('msglog.html', $data, FILE_APPEND);
  file_put_contents('msglog.html', ':', FILE_APPEND);
  $data = $_POST['sub'];
  file_put_contents('msglog.html', $data, FILE_APPEND);
  file_put_contents('msglog.html', '</p>', FILE_APPEND);
  echo 'Data saved successfully!';
}
?>