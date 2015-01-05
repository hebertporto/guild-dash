<h1> Action Teste - Controller Site</h1>
<?php

$ultimoAnuncio = \app\models\Anuncio::find()->orderBy('id DESC')->one();

echo $ultimoAnuncio->anuncio;
//var_dump($ultimoAnuncio);

