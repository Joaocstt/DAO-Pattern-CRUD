<?php

require "../vendor/autoload.php";

use app\dao\EmployeeDao;

$read = new EmployeeDao;
$funcionarios = $read->read();

?>

<main>
    <section>
        <table class="table table-light mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($funcionarios)): ?> 
                    <tr>
                        <td colspan="5">Nenhum funcionário cadastrado!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($funcionarios as $funcionario): ?>
                    <tr>
                        <td><?php echo $funcionario['id']; ?></td>
                        <td><?php echo $funcionario['nome']; ?></td>
                        <td><?php echo $funcionario['email']; ?></td>
                        <td><?php echo $funcionario['cargo']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $funcionario['id'];?>">Editar</a>
                            <a href="includes/deletar.php?id=<?php echo $funcionario['id'];?>">Deletar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>
