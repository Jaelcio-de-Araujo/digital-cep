# Busca Cep digital

Usando o método getAddressFromZipcode() e passando e cep como string é possivel encontrar praticamente qualquer bloco de endereço.

## Exemplo básico de como usar o método:

~~~php
$busca  = new Seach;

$resultado  = $busca -> getAddressFromZipcode('06230060');

print_r($resultado);
~~~
