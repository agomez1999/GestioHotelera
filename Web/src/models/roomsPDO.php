<?php

namespace Daw;

class RoomsPDO
{
    private $sql;

    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $clau = $config['pass'];
        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function selectAll()
    {
        $query = 'select * from habitacio';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["id"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }
    public function insert($Numero, $Tipo, $Descripcio, $Serveis, $imatge1, $iamtge2, $imatge3)
    {
        $query = 'INSERT INTO habitacio(Numero, Tipo, Descripcio, Serveis, imatge1, imatge2, imatge3) VALUES (:Numero, :Tipo, :Descripcio, :Serveis, :imatge1, :imatge2, :imatge3)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Numero' => $Numero,':Tipo' => $Tipo,':Descripcio' => $Descripcio,':Serveis' => $Serveis,':imatge1' => $imatge1,':imatge2' => $imatge2,':imatge3' => $imatge3]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($Numero, $Tipo, $Descripcio, $Serveis, $imatge1, $iamtge2, $imatge3)
    {
        $query = 'UPDATE habitacio SET Numero = :Numero, Tipo = :Tipo, Descripcio = :Descripcio, Serveis = :Serveis, imatge1 = :imatge1, imatge2 = :imatge2, imatge3 = :imatge3 WHERE id = :id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':Numero' => $Numero,':Tipo' => $Tipo,':Descripcio' => $Descripcio,':Serveis' => $Serveis,':imatge1' => $imatge1,':imatge2' => $imatge2,':imatge3' => $imatge3]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $query = 'DELETE FROM habitacio WHERE id = :id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':id' => $id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    // TAULA TIPO HABITACIÓ
    public function selectRoomType()
    {
        $query = 'select * from tipoHabitacio';
        $llistatType = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacions) {
            $llistatType[$habitacions["id"]] = $habitacions;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistatType;
    }

    public function insertRoomType($Id, $Tipo, $Preu)
    {
        $query = 'INSERT INTO tipoHabitacio(Id, Tipo, Preu) VALUES (:Id, :Tipo, :Preu)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Id' => $Id,':Tipo' => $Tipo,':Preu' => $Preu]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }
    public function updateRoomType($Id, $Tipo, $Preu)
    {
        $query = 'UPDATE tipoHabitacio SET Tipo = :Tipo, Preu = :Preu WHERE Id = :Id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':id' => $id, ':tipo' => $tipo, ':nom' => $nom, ':quantitat' => $quantitat, ':descripcio' => $descripcio, ':img1' => $img1, ':img2' => $img2, ':img3' => $img3, ':preu' => $preu]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function deleteRoomType($Id)
    {
        $query = 'DELETE FROM tipoHabitacio WHERE Id = :Id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':Id' => $Id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
}