<?php

use App\Core\Model;

class Preco
{

    public $id;
    public $primeiraHora;
    public $demaisHoras;

    public function buscarUltimoInserido()
    {

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

    public function inserir()
    {

        $sql = "INSERT INTO PRECO (primeira_hora, demais_horas) VALUES (?, ?)";

        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->primeiraHora);
        $stmt->bidValue(2, $this->demaisHoras);

        if ($stmt->execute()) {

            $this->id = Model::getConn()->lastInsertId();
            return $this->id;
        } else {
            print_r($stmt->errorInfo());
            return null;
        }
    }
}
