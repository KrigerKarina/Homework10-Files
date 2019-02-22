<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php 
  $test = 'Привет, мир!' . PHP_EOL;
  file_put_contents('test.txt', $test, FILE_APPEND);
  echo file_get_contents('./test.txt') . '<br>';
  rename('./test.txt', 'mir.txt');
  copy('./mir.txt', 'world.txt');
  $bite = filesize('./world.txt');
  echo $bite . ' байт <br>';
  $mbite = $bite*0.000001;
  echo $mbite . ' мегабайт <br>';
  $gbite = $mbite*0.001; 
  echo $gbite . ' гигабайт <br>';
  unlink('world.txt');
  var_dump(file_exists('world.txt'));
  var_dump(file_exists('mir.txt'));
?>
