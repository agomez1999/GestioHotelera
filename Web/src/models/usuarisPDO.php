<?php

namespace Daw;

class UsuarisPDO
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
            die('Ha fallat la connexió: ' . $e->getMessage() . " $usuari");
        }
    }

    public function getUser($user)
    {
        $query = 'select id, usuari, contrasenya, rol from loginDB where usuari=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectAll()
    {
        $query = 'select * from loginDB';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $usuari) {
            $llistat[$usuari["id"]] = $usuari;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $llistat;
    }

    public function insert($user, $password)
    {
        $query = 'INSERT INTO loginDB(usuari, contrasenya, rol) VALUES (:user, :password, 3)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':user' => $user,':password' => $password]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($id, $user, $password, $rol)
    {
        $query = 'UPDATE loginDB SET usuari = :user, contrasenya = :password, rol = :rol WHERE id = :id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':id' => $id, ':user' => $user, ':password' => $password, ':rol' => $rol]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $query = 'DELETE FROM loginDB WHERE id = :id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':id' => $id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

}

?>