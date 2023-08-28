<?php

require "../vendor/autoload.php";

use app\dao\EmployeeDao;
use app\models\Employee;

if(isset($_GET['id'])) {

   if(isset($_POST['nome'],$_POST['email'], $_POST['cargo'])) {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cargo = $_POST['cargo'];

        if(empty($nome) || empty($email) || empty($cargo)) {
            header("Location: index.php");
        }

        else {
            $employee = new Employee;
            $editEmployee = new EmployeeDao;
        
            $employee->setId($id);
            $employee->setNome($nome);
            $employee->setEmail($email);
            $employee->setCargo($cargo);
            $editEmployee->update($employee); 
            
            header("Location: index.php");
        }
   }

} 

else {
    header("Location: index.php");
}

?>

<main>  

    <h1>Editar funcionário</h1>

    <section>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe seu nome">
            </div>
            <div class="form-group mt-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Informe seu e-mail">
            </div>

            <div class="form-group mt-2">
                <label>Cargo</label>
                <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Informe seu cargo">
            </div>
       
            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </form>
    </section>

</main>