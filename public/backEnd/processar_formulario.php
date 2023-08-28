<?php
    
    require "../bootstrap.php";

    use app\dao\EmployeeDao;
    use app\models\Employee;

    if(isset($_POST['nome'], $_POST['email'], $_POST['cargo'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cargo = $_POST['cargo'];

        if(empty($nome) || empty($email) || empty($cargo)) {
            header("Location: ../cadastrar.php");
            die();
        }
        else {
            $funcionario = new Employee;

            $funcionario->setNome($nome);
            $funcionario->setEmail($email);
            $funcionario->setCargo($cargo);

            $funcionarioDao = new EmployeeDao;
            
            $funcionarioDao->create($funcionario);

            header("Location: ../index.php");


        }
    }

?>