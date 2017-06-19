<?php
	$client = new SoapClient('http://localhost/php-3/soap/news.wsdl');
	try{
        $result = $client->getNewsCount();
        echo "<p>Всего овостей: $result</p>";
        $result = $client->getNewsCountByCat(1);
        echo "<p> Всего новостей в категории Политика: $result</p>";
        $result = $client->getNewsById(1);
        $news = unserialize(base64_decode($result));
        var_dump($news);
    }catch(SoapFault $e){
	    echo 'Операция '. $e->faultcode.'вернула ошибку: '. $e->getMessage();
    }
?>