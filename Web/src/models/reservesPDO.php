<?php

namespace Daw;

class ReservesPDO
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
        $query = 'select * from reserves';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $reserves) {
            $llistat[] = $reserves;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function getReservaById($Id) // CRUD | Autocomplete editar
    {
        $query = 'select * from reserves where Id=:Id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':Id' => $Id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($Id) // CRUD | Delete
    {
        $query = 'DELETE FROM reserves WHERE Id = :Id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':Id' => $Id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function update($Id, $Arrivada, $Sortida, $Persones, $Tipo)
    {
        $query = 'UPDATE reserves SET Id = :Id, Arrivada = :Arrivada, Sortida = :Sortida, Persones = :Persones, TipoHabitacio = :Tipo WHERE Id = :Id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':Id' => $Id, ':Arrivada' => $Arrivada, ':Sortida' => $Sortida, ':Persones' => $Persones, ':Tipo' => $Tipo]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function insert($Arrivada, $Sortida, $Persones, $Tipo)
    {
        $query = 'INSERT INTO reserves(Arrivada, Sortida, Persones, TipoHabitacio) VALUES (:Arrivada, :Sortida, :Persones, :TipoHabitacio)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Arrivada' => $Arrivada,':Sortida' => $Sortida,':Persones' => $Persones, ':TipoHabitacio' => $Tipo]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertClient($Nom, $Cognom, $Email, $Tarjeta, $CP, $Poblacio, $Telefon, $DNI, $Missatge)
    {
        $query = 'INSERT INTO client(Nom, Cognom, Email, Tarjeta, CP, Poblacio, Telefon, DNI, Missatge) VALUES (:Nom, :Cognom, :Email, :Tarjeta, :CP, :Poblacio, :Telefon, :DNI, :Missatge)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Nom' => $Nom,':Cognom' => $Cognom,':Email' => $Email, ':Tarjeta' => $Tarjeta, ':CP' => $CP, ':Poblacio' => $Poblacio, ':Telefon' => $Telefon, ':DNI' => $DNI, ':Missatge' => $Missatge]);
        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertReservaClient($IdClient, $IdReserva)
    {
        $query = 'INSERT INTO reserva_client(IdClient, IdReserva) VALUES (:IdClient, :IdReserva)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':IdClient' => $IdClient,':IdReserva' => $IdReserva]);
        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectClient()
    {
        $query = 'select * from client';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $client) {
            $llistat[] = $client;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function getClientId()
    {
        $query = 'SELECT MAX(Id) "ClientId" FROM client';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $client) {
            $llistat[] = $client;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function getLoginId($user)
    {
        $query = 'SELECT id "LoginId" FROM loginDB where usuari = :user';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function getReservaId()
    {
        $query = 'SELECT MAX(Id) "ReservaId" FROM reserves';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $client) {
            $llistat[] = $client;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function getReserva()
    {
        $query = 'SELECT C.*, B.* FROM reserva_client A JOIN reserves B ON(A.IdReserva = B.Id) JOIN client C ON(C.Id = A.IdClient)';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $client) {
            $llistat[] = $client;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }

    public function updateClient($IdLogin)
    {
        $query = 'UPDATE client SET IdLogin = :IdLogin ORDER BY Id DESC LIMIT 1';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':IdLogin' => $IdLogin]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }
}