<?php

function SequenciaCrescente($array){
  //foreach que reinicializa a cópia do array principal, a cada iteração é testado por completo uma remoção
  foreach ($array as $key => $value){
    $possivel = true;
    $array_copy = $array;
    unset($array_copy[$key]); //aqui se remove um de cada vez um elemento do array principal, para iniciar os testes

    foreach($array_copy as $key => $value2){  //foreach para comparar todos os elementos da cópia, se achar algo não ordenado, 
      //significa que removendo esse elemento o array continua sem estar em ordem crescente, dando um break
      // reiniciando o processo - remover o proximo elemento da lista e fazer novamente a verificação.
      if (array_key_exists($key + 1, $array_copy)){
        if ($array_copy[$key] > $array_copy[$key + 1]){
          $possivel = false;
          break;
        }
      }
    }
    if ($possivel){
      return 'true';
    }
  }
  return 'false';
}
$array = [/*insira os numeros aqui, separados por vígulas*/];
$resultado = SequenciaCrescente($array);
echo $resultado;