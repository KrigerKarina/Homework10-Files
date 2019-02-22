<?php
//1. Удалите из папки 'test' все файлы размером более 1мб = 1000000байт..
	$arr = scandir('test');
	foreach ($arr as $key=>$value) 
	{
		$val = 'test/' . $value;
		if (is_file($val)) 
		{
			if(filesize($val)>1000000){
				unlink($val);
			}
		}
	}

//2. Имеется папка с файлами, узнать размер этой папки
	$arr = scandir('test');
	$size = 0;
	foreach ($arr as $key=>$value) 
	{
		$val = 'test/' . $value;
		if (is_file($val)) 
		{
			$size +=filesize($val);
		}
	}
	echo 'Размер папки с файлами  равен' . $size . ' байт <br>';
?>
