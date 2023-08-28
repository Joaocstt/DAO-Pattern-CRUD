<?php 

    require "../../vendor/autoload.php";
    
    use app\dao\EmployeeDao;    

   if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];

        $delete_funcionario = new EmployeeDao;

        $delete_funcionario->delete($id);

        header("Location: ../index.php");

   }
   else {
        header("Location: ../index.php");
   }

?>