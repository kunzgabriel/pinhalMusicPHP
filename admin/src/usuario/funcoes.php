<?php

//Inserir
function inserir_usuario($login,$senha){

    //chamamos nossa conexão com o banco.
    require "../../conectaPDO.php";

    try {

     $sql = "insert login set usuario = :login, senha = :senha";


/**uma vez feita a consulta ela é otimizada pelo banco e pode ser executada N vezes o que muda são os argumentos, seu uso evita problema com sql injection desde que usado corretamente.


O uso correto seria, definir uma intorrogação(ou formato parametro :name) para cada valor e passar um array para execute() por praticidade, isso também pode ser feito com bindValue() ou bindParam() caso exista alguma necessidade.

No bindParam() o argumento esperado é uma referência (variável ou constante) e não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método. Já bindValue() pode receber referências e valores como argumento.
**/

$stmt = $dbPDO->prepare($sql);


    $stmt->bindParam(':login',$login,PDO::PARAM_STR);//PARAM_INT
    $stmt->bindParam(':senha',$senha,PDO::PARAM_STR,8);


    if (!$stmt->execute()) {
      return 
      "Erro no cadastro de usuario"; //$stmt->errorInfo()); visualizar erro de retorno.

  }else{
   return 
   get_success_msg("Usuário Cadastrado com Sucesso");
}


$dbPDO = null;

}
catch(PDOException $e) {
        // imprimimos a nossa excecao
    echo $e->getMessage();
}
}                     



function list_usuario(){

    //chamamos nossa conexão com o banco.
    require "../../conectaPDO.php";

    $sql = "select id,usuario from login order by id asc";

    $stmt = $dbPDO->prepare($sql);

    if (!$stmt->execute()){
        return
        get_error_msg("Erro na listagem");
    }else{
        return
        //Retorna uma matriz contendo todas as linhas do conjunto de resultados
        //https://www.php.net/manual/en/pdostatement.fetchall
        $dados_usuario = $stmt->fetchAll();
    }
    
    $dbPDO = null;
}

function editar_usuario($id, $senhaAntiga, $senhaNova){


    //chamamos nossa conexão com o banco.
    require "../../conectaPDO.php";

    try {

     $sql = "select * from login where id= :id and senha= :senha";

     $stmt = $dbPDO->prepare($sql);

    $stmt->bindParam(':id',$id,PDO::PARAM_INT);//PARAM_INT
    $stmt->bindParam(':senha',$senhaAntiga,PDO::PARAM_STR,8);


    if (!$stmt->execute()) {
     return 
       get_error_msg("Erro na validação de senha"); //$stmt->errorInfo()); visualizar erro de retorno.
       exit();

   }else{
    $result = $stmt->fetchAll();

    if (!$result) {
     return 
     get_error_msg("Senha informada está invalida.");
     exit();
 }

 if ($result[0]['senha'] == $senhaAntiga) {

     $sqlUpdate = "update login set senha = :senha where id= :id";

     $stmt = $dbPDO->prepare($sqlUpdate);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);//PARAM_INT
            $stmt->bindParam(':senha',$senhaNova,PDO::PARAM_STR,8);

            if (!$stmt->execute()) {
              return 
       get_error_msg("Erro na alteração de senha"); //$stmt->errorInfo()); visualizar erro de retorno.

   }else{
       return 
       get_success_msg("Senha Alterada!.");
   }

}

//fecha else
}


$dbPDO = null;



}
catch(PDOException $e) {
        // imprimimos a nossa excecao
    echo $e->getMessage();
}



}




function excluir_usuario($id){

 //chamamos nossa conexão com o banco.
    require "../../conectaPDO.php";

    try {

     $sql = "delete from login where id= :id";

     $stmt = $dbPDO->prepare($sql);


    $stmt->bindParam(':id',$id,PDO::PARAM_INT);


    if (!$stmt->execute()) {
      return 
      0;

  }else{
   return 
  1;
}


$dbPDO = null;

}
catch(PDOException $e) {
        // imprimimos a nossa excecao
    echo $e->getMessage();
}



}




/*teste mysqli  SQLInjection = ';drop table teste #*/


?>