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
    // FUNCIÓ PER OBTENIR TOTES LES DADES DE LA HABITACIÓ
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
    // FUNCIÓ PER SELECCIONAR TOTES LES DADES DE LES HABITACIONS I DELS TIPUS D'HABITACIÓ
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
    // FUNCIÓ PER INSERTAR UNA NOVA HABITACIÓ
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
    // FUNCIÓ PER ACTUALITZAR UNA HABITACIÓ
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
    // FUNCIÓ PER ELIMINAR UNA HABITACIÓ
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

    // FUNCIÓ PER VEURE TOTES LES DADES DE LA TAULA TIPO HABITACIÓ
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
    // FUNCIÓ 
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

    public function insertRoomType($Id, $Tipo, $nOcupants, $Metres, $Preu)
    {
        $query = 'INSERT INTO tipoHabitacio(Id, Tipo, nOcupants, Metres, Preu) VALUES (:Id, :Tipo, :nOcupants, :Metres, :Preu)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Id' => $Id,':Tipo' => $Tipo,':nOcupants' => $nOcupants, ':Metres' => $Metres, ':Preu' => $Preu]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }
    public function updateRoomType($Id, $Tipo, $nOcupants, $Metres, $Preu)
    {
        $query = 'UPDATE tipoHabitacio SET Tipo = :Tipo, nOcupants = :nOcupants, Metres = :Metres, Preu = :Preu WHERE Id = :Id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':Id' => $Id, ':Tipo' => $Tipo, ':nOcupants' => $nOcupants, ':Metres' => $Metres, ':Preu' => $Preu]);

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

    public function getRoomById($Numero)
    {
        $query = 'SELECT * FROM habitacio WHERE Numero=:Numero;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':Numero' => $Numero]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function getRoomTypeById($Id)
    {
        $query = 'select * from tipoHabitacio where Id=:Id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':Id' => $Id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    // TOQUE 10/11/2021 NIT

    public function getRooms() 
    {
        $query = 'SELECT A.*, COUNT(A.Tipo) AS Num, B.Tipo AS Nom, B.nOcupants, B.Preu FROM habitacio A JOIN tipoHabitacio B ON(A.Tipo = B.Id) GROUP BY A.Tipo';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacio) {
            $llistat[$habitacio["Tipo"]] = $habitacio;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function selectDispoRoom($tipo)
    {
        $query = 'SELECT COUNT(TipoHabitacio) "Reserves" FROM reserves WHERE TipoHabitacio = :tipo';
        $result = $this->sql->prepare($query);
        $nReserves = $result->execute([':tipo' => $tipo]);

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectRoomByType($tipo)
    {
        $query = 'SELECT A.*, B.Tipo "Nom", B.nOcupants, B.Preu FROM habitacio A JOIN tipoHabitacio B ON(A.Tipo = B.Id) WHERE A.Tipo = :tipo';
        $result = $this->sql->prepare($query);
        $nReserves = $result->execute([':tipo' => $tipo]);

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

}