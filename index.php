<?php

// 1. Выведите на экран название всех файлов и подпапок из папки 'test'.
echo "Название всех файлов и подпапок из папки 'test': ";
	var_dump(scandir('test'));

  // 2. Выведите на экран название всех файлов, но не подпапок из папки 'test'
	echo "<br> Файлы из папки 'test': <br>";
  $arr = scandir('test');
	foreach ($arr as $key=>$value) 
	{
		$val = 'test/' . $value;
		if (is_file($val)) 
		{
			echo $value . '<br>';
		}
	}

// 3. В папке 'test' есть файлы и подпапки. Выведите на экран содержимое всех файлов, которые лежат непосредственно в папке 'test'.
	echo "Содержимое всех файлов из папки 'test': <br>";
	foreach ($arr as $key=>$value) 
	{
		$val = 'test/' . $value;
		if (is_file($val)) 
		{
			echo file_get_contents($val) . '<br>';
		}
	}
// 4. Выведите на экран название всех файлов с расширением txt из папки 'test'.
	echo "Файлы тхт из папки 'test': <br>";
	$expansion = ['txt']; 
	foreach ($arr as $key=>$value) 
	{
		if(in_array(end(explode('.', $value)), $expansion))
		{
			$val = 'test/' . $value;
			if (is_file($val)) 
			{
				echo $value . '<br>';
			}
		}
	}

	//5. Найдите все файлы из папки 'test' и вставьте в начало каждого файла полный путь к нему (текст файла должен остаться в нем и начинаться с новой строки после пути). 
	foreach ($arr as $key=>$value) 
	{
		$val = 'test/' . $value;
		if (is_file($val)) 
		{
			$text = 'C:\OSPanel\domains\homeworks\test' . PHP_EOL;
			$text .= file_get_contents($val) . PHP_EOL;
			file_put_contents($val, $text);
		}
	}
?>
