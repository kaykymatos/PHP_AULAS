<?php
//session_start();
//incluindo o script de conexão
include_once("conexao.php");
?>
<?php 
//Buscando Dados de Usuários 
$sqlselect =  "select * from fornecedor order by ID ASC";

// executando instrução SQL
$resultado = @mysqli_query($conexao, $sqlselect);

//Exibindo os dados da tabela usuário 
while ($registro = mysqli_fetch_assoc($resultado)) {
    echo "Id:" . $registro['id'] . "<br>";
    echo "Nome:" . $registro['nome'] . "<br>";
    echo "Email:" . $registro['email'] . "<br>";
    echo "Telefone:" . $registro['telefone'] . "<br>";
    echo "Estado:" . $registro['estado'] . "<br>";
    echo "Cidade:" . $registro['cidade'] . "<br>";
    echo "Cep:" . $registro['cep'] . "<br>";
    echo "Cargo:" . $registro['cargo'] . "<br>";
    echo "empresa:" . $registro['empresa'] . "<br><hr>";
}
//fechando conexão com o banco de dados
mysqli_close($conexao);
?>


