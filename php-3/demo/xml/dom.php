<?php
header("Content-Type: text/html;charset=utf-8");
$xmlDoc = new DOMDocument('1.0', 'utf-8');
$xmlDoc->load("catalog.xml");
$xmlDoc->preserveWhiteSpace = false;
$x = $xmlDoc->documentElement;
//echo $x->nodeType;
$books = $x->childNodes;
//var_dump($books);
//echo $x->textContent;
?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
		//Парсинг
        foreach ($books AS $book) {
            if($book->nodeType == 1){
                echo '<tr>';
                foreach ($book->childNodes as $item) {
                    if($item->nodeType == 1) {
                        echo '<td>' . $item->textContent . '</td>';
                    }
                }
                echo '</tr>';
            }
        }
	?>
	</table>
	</body>
</html>