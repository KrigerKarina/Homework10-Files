<?php 
  mkdir('test');
  rename('test', 'www');
  rmdir('www');
  $arr = ['file1', 'file2', 'file3'];
  foreach ($arr as $value) {
    mkdir("./test/$value");
  }
?>
