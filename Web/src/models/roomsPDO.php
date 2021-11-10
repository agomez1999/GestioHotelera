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
            $llistat[$habitacio["Numero"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function selectAllRooms()
    {
        $query = 'select A.*, B.Tipo "Nom", B.Preu "Preu" from habitacio A JOIN tipoHabitacio B ON (A.Tipo = B.Id) group by A.Tipo';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["Numero"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function insert($Numero, $Tipo, $Descripcio, $Serveis, $Imatge1, $Imatge2, $Imatge3)
    {
        $query = 'INSERT INTO habitacio(Numero, Tipo, Descripcio, Serveis, Imatge1, Imatge2, Imatge3) VALUES (:Numero, :Tipo, :Descripcio, :Serveis, :Imatge1, :Imatge2, :Imatge3)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Numero' => $Numero,':Tipo' => $Tipo,':Descripcio' => $Descripcio,':Serveis' => $Serveis,':Imatge1' => $Imatge1,':Imatge2' => $Imatge2,':Imatge3' => $Imatge3]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($Numero, $Tipo, $Descripcio, $Serveis, $Imatge1, $Imatge2, $Imatge3)
    {
        $query = 'UPDATE habitacio SET Numero = :Numero, Tipo = :Tipo, Descripcio = :Descripcio, Serveis = :Serveis, Imatge1 = :Imatge1, Imatge2 = :Imatge2, Imatge3 = :Imatge3 WHERE Numero = :Numero';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':Numero' => $Numero,':Tipo' => $Tipo,':Descripcio' => $Descripcio,':Serveis' => $Serveis,':Imatge1' => $Imatge1,':Imatge2' => $Imatge2,':Imatge3' => $Imatge3]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($Numero)
    {
        $query = 'DELETE FROM habitacio WHERE Numero = :Numero';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':Numero' => $Numero]);

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
            $llistatType[$habitacions["Id"]] = $habitacions;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistatType;
    }

    public function getRoomType($Id)
    {
        $query = 'select * from tipoHabitacio where Id = :Id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':Id' => $Id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
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
        $result = $update->execute([':Id' => $Id, ':Tipo' => $Tipo, ':Preu' => $Preu]);

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

    // MOSTRAR X HABITACIONS

    public function selectIndividualRoom()
    {
        $query = 'SELECT A.*, B.Tipo "Nom", B.Preu "Preu" from habitacio A JOIN tipoHabitacio B ON (A.Tipo = B.Id) WHERE A.Tipo = 1 group by A.Tipo';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["Numero"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function selectDoubleRoom()
    {
        $query = 'SELECT A.*, B.Tipo "Nom", B.Preu "Preu" from habitacio A JOIN tipoHabitacio B ON (A.Tipo = B.Id) WHERE A.Tipo = 2 group by A.Tipo';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["Numero"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function selectDoubleViewsRoom()
    {
        $query = 'SELECT A.*, B.Tipo "Nom", B.Preu "Preu" from habitacio A JOIN tipoHabitacio B ON (A.Tipo = B.Id) WHERE A.Tipo = 3 group by A.Tipo';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["Numero"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    // COMPROVAR SI HI HA HABITACIONS DISPONIBLES

    public function selectIndividualDispoRoom()
    {
        $query = 'SELECT COUNT(TipoHabitacio) "Reserves" FROM reserves WHERE TipoHabitacio = 1 GROUP BY TipoHabitacio';
        $nReserves = $this->sql->query($query, \PDO::FETCH_ASSOC);

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $nReserves->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectDoubleDispoRoom()
    {
        $query = 'SELECT COUNT(TipoHabitacio) "Reserves" FROM reserves WHERE TipoHabitacio = 2 GROUP BY TipoHabitacio';
        $nReserves = $this->sql->query($query, \PDO::FETCH_ASSOC);

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $nReserves->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectDoubleViewsDispoRoom()
    {
        $query = 'SELECT COUNT(TipoHabitacio) "Reserves" FROM reserves WHERE TipoHabitacio = 3 GROUP BY TipoHabitacio';
        $nReserves = $this->sql->query($query, \PDO::FETCH_ASSOC);

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $nReserves->fetch(\PDO::FETCH_ASSOC);
    }
}