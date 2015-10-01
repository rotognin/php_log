# Gravação de log

<h2>Classe para gravação e manipulação/visualização de log.</h2>

<b>Essa é uma versão inicial apenas com a função de gravação.</b>

Com essa classe você poderá gravar de forma simples os logs que desejar durante o 
uso de seus projetos.

A classe principal é a gravaLog. Classe estática com três parâmetros:
 - $texto -> O texto que irá na linha de log
 - $id -> Opcional. Um identificador que irá no início da linha. Pode ser usado para 
diferenciar de onde o log está sendo chamado. Exemplos: "EST" para gravações do módulo Estoque, 
"COM" para compras, "ROT-CNPJ" para a rotina de verificação de CNPJ, etc.
 - $nivel - Opcional. O nível irá acrescentar um ponto "." antes da data de gravação. Pode ser 
utilizado para subitens dentro do log.

O arquivo "config.ini" possui as configurações necessárias para o log. Há comentários no próprio 
arquivo explicando cada diretiva de configuração.

Exemplo de uso da classe: <br>
<code>$texto = 'Erro na leitura da tabela de usuários.'; </code><br>
<code>$id = 'USU_ERR'; </code><br>
<code>$nivel = 2; </code><br>
<code>Log::gravaLog($texto, $id, $nivel); </code><br>

No arquivo será gravado da seguinte maneira: <br>
<code>USU_ERR ..01/10/2015 - 19:14:30 - Erro na leitura da tabela de usuários.</code>

Essa classe será expandida com funções de leituras, backup do log ao atingir um determinado 
tamanho em bytes, e funções adicionais para extração de informações do arquivo txt.

Quaisquer sugestões e/ou críticas serão bem-vindas.