<?php 

    namespace app\models;

    class Employee 
    {
        private int $id; 
        private string $nome; 
        private string $email;
        private string $cargo;


        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function getCargo() {
            return $this->cargo;
        }
     
    }

?>