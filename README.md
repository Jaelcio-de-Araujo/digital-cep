# Busca Cep digital

Usando o método getAddressFromZipcode() e passando o cep como string é possivel encontrar praticamente qualquer bloco de endereço.
Esta bliblioteca se comunica com a API do viacep https://viacep.com.br e envia a requisição pasando o cep digitado no método getAddressFromZipcode().

~~~php
class Seach
{
    private $url = "http://viacep.com.br/ws/";
    
    public function getAddressFromZipcode(string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/im','',$zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");
        return (array) json_decode($get);
    }
}
~~~

## Exemplo básico de como usar o método:

~~~php
$busca  = new Seach;
$resultado  = $busca -> getAddressFromZipcode('06230060');
~~~
