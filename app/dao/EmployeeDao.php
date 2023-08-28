<?php 

    namespace app\dao;

    use app\config\Database;
    use app\models\Employee;

    class EmployeeDao 
    {
        public function create(Employee $f) {
            
            $sql = "INSERT INTO funcionarios (nome, email, cargo) VALUES (?,?,?)";

            $stmt = Database::getConn()->prepare($sql);

            $stmt->bindValue(1, $f->getNome());
            $stmt->bindValue(2, $f->getEmail());
            $stmt->bindValue(3, $f->getCargo());

            $stmt->execute();
        }


        public function read() {

            $sql = "SELECT * FROM funcionarios";
            $stmt = Database::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }
        }

        public function update(Employee $f) {

            $sql = "UPDATE funcionarios SET nome = ?, email = ?, cargo = ? WHERE id = ?";
            
            $stmt = Database::getConn()->prepare($sql); 

            $stmt->bindValue(1, $f->getNome());
            $stmt->bindValue(2, $f->getEmail());
            $stmt->bindValue(3, $f->getCargo());
            $stmt->bindValue(4, $f->getId());

            $stmt->execute();

        }

        public function delete( int $id) {

            $sql = "DELETE FROM funcionarios WHERE id = ?";

            $stmt = Database::getConn()->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();
        }
    }

?>