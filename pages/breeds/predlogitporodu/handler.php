
<!doctype html> <head> 
</head> 

<style>
	p{
		text-align: center; font-family: serif; font-size: 150%;color:white;
	} 
	h2 {color:white;
	}
	
	
 </style>
 <body>
 <h2 align="center"> Список предложенных пород: </h2>
 <p>
<?php
//$file_pb = "H:\Main Home Tom\Мои Документы\Мои рисунки и видео\Рисунки\Кошки Юльки\siteofcats\pages\breeds\predlogit_porodu";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   

$cat = $_POST['cat'];
$cat=trim($cat);
if (strlen(trim($cat)) > 0)
{
$f=fopen("catt.txt",'a+');

//записываем текст в файл
fwrite($f, $cat.PHP_EOL);
fclose($f);
}
//потом его можно прочитать из файла
$f1=fopen("catt.txt",'a+');
//echo  $cat."<br />"; 
while(!feof($f1))
{
    $str = htmlentities(fgets($f1));
    echo $str."<br>";
}
fclose($f1);

}
?>
</p> 
</body> 
</html>