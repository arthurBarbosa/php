<?php

$empresa = "abmWeb Treinamentos ";

// função nativa do PHP str_replace que procura a variavel escolhida e passada como primeiro parametro , e ser substituida pelo caractere escolhido e passada no segundo parametro da funçao, e no terceiro parametro da função é passada a variável na qual se deseja realizar a varredura e substituição
$empresa = str_replace("a", "@", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;
?>