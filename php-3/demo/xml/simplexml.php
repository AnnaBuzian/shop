<?php
header("Content-Type: text/html;charset=utf-8");	
$sxml = simplexml_load_file('catalog.xml');
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
        foreach ($sxml as $cat){
            echo '<tr>';
            foreach ($cat as $book) {
                echo '<td>'. $book.'</td>';
            }
            echo '</tr>';
        }
	?>
	</table>
	</body>
</html>