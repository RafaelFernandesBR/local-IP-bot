<?php
function obter_json($url) {
//criando o recurso cURL
$cr = curl_init();

curl_setopt($cr, CURLOPT_URL, $url);
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);

//definindo uma variável para receber o conteúdo do json...
$retorno = curl_exec($cr);

//fechando-o para liberação do sistema.
curl_close($cr); //fechamos o recurso e liberamos o sistema...

//retorno do conteúdo...
return $retorno;
}
?>