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
    // FUNCIÓ PER LLISTAR TOTES LES DADES DE LA TAULA RESERVES
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
    // CRUD | Autocomplete editar
    public function getReservaById($Id) 
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
    // CRUD | Delete
    public function delete($Id) 
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
    // CRUD | UPDATE
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
    // CRUD | INSERT
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
    // INSERTAR NOU CLIENT QUAN ES FA UNA RESERVA
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
    // FUNCIÓ PER VINCULAR LA RESERVA AMB EL CLIENT DES DE LA TAULA RESERVA-CLIENT
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
    // FUNCIÓ PER SELECCIONAR A TOTS ELS CLIENTS
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
    // FUNCIÓ PER AGAFAR L'ÚLTIM ID DEL CLIENT
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
    // FUNCIÓ PER OBTENIR L'ID DEL USUARI QUE ESTÀ LOGAT
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
    // FUNCIÓ PER OBTENIR L'ÚLTIM ID DE RESERVA
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
    // FUNCIÓ PER OBTENIR LES DADES DE LA RESERVA
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
    // FUNCIÓ PER VINCULAR UN CLIENT AMB ID DE LOGIN
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
    // FUNCIÓ PER OBTENIR TOTES LES DADES DE LA RESERVA I EL CLIENT
    public function getReservaUser($IdLogin)
    {
        $query = 'SELECT A.Nom "NomClient", A.Cognom, A.Email, A.Tarjeta, A.CP, A.Poblacio, A.Telefon, A.DNI, A.Missatge, 
                     C.Arrivada, C.Sortida, C.Persones, C.Id "IdReserva",
                     D.Tipo "NomHabitacio", D.Preu
                     FROM client A 
                     JOIN reserva_client B ON(A.Id = B.IdClient) 
                     JOIN reserves C ON(C.Id = B.IdReserva) 
                     JOIN tipoHabitacio D ON(C.TipoHabitacio = D.Id) 
                     WHERE A.IdLogin = :IdLogin';
                     
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':IdLogin' => $IdLogin]);

        $llistat = [];
        while ($reserva = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $llistaReserves[] = $reserva;
        }

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }


        return $llistaReserves;
    }
}