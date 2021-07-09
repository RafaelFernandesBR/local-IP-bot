<?php
include "obter_json.php";
function procurar($dados) {
$ip=obter_json("http://ip-api.com/json/$dados?fields=1113821&lang=pt-BR");
$obj=json_decode($ip);

if($obj->status == "success") {

    $resultado=("IP: $obj->query
Continente: $obj->continent
País: $obj->country
Região: $obj->regionName, $obj->region
Cidade: $obj->city
Provedor: $obj->isp
Fornecedora: $obj->org
Latitude: $obj->lat
longitude: $obj->lon");

return $resultado;
}
else
{
    return "Erro, tente novamente.";
}
}
?>