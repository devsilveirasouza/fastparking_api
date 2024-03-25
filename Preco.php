<?php

use App\Core\Model;

class Preco {

    public $id;
    public $primeiraHora;
    public $demaisHoras;

    public function getUltimoPrecoInserido() {

        $sql = "SELECT * FROM preco ORDER BY id DESC LIMIT 1";

        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch(PDO::FETCH_OBJ); 

            return $resultado;
        } else {
            return null;
        }
    }

    public function inserir() {
        $sql = "INSERT INT preco (primeira_hora, demais_horas) VALUES (?, ?)";

        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->primeiraHora);
        $stmt->bindValue(2, $this->demaisHoras);

        if ($stmt->execute()) {
            $this->id = Model::getConn()->lastInsertId();
            return $this;
        } else {
            print_r($stmt->errorInfo());
            return null;
        }
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM preco WHERE id = ?";

        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        
        if ($stmt->execute()) {
            $preco = $stmt->fetch(PDO::FETCH_OBJ);  

            if (!$preco) {
                return null;
            } 

            $this->id = $preco->id;
            $this->primeiraHora = $preco->primeiraHora;
            $this->demaisHoras = $preco->demaisHoras;

            return $this;
        } else {
            return null;
        }
    }

}