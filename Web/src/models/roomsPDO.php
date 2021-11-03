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
        $query = 'select * from habitacions';
        $llistat = array();

        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $habitacions) {
            $llistat[$habitacions["id"]] = $habitacions;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistat;
    }
    public function insert($tipus, $nom, $quantitat, $descripcio, $img1, $img2, $img3, $preu)
    {
        $query = 'INSERT INTO habitacions(tipus, nom, quantitat, descripcio, img1, img2, img3, preu) VALUES (:tipus, :nom, :quantitat, :descripcio, :img1, :img2, :img3, :preu)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':tipus' => $tipus,':nom' => $nom,':quantitat' => $quantitat,':descripcio' => $descripcio,':img1' => $img1,':img2' => $img2,':img3' => $img3,':preu' => $preu]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($id, $tipo, $nom, $quantitat, $descripcio, $img1, $img2, $img3, $preu)
    {
        $query = 'UPDATE habitacions SET tipus = :tipo, nom = :nom, quantitat = :quantitat, descripcio = :descripcio, img1 = :img1, img2 = :img2, img3 = :img3, preu = :preu WHERE id = :id';
        $update = $this->sql->prepare($query);
        $result = $update->execute([':id' => $id, ':tipo' => $tipo, ':nom' => $nom, ':quantitat' => $quantitat, ':descripcio' => $descripcio, ':img1' => $img1, ':img2' => $img2, ':img3' => $img3, ':preu' => $preu]);

        if ($update->errorCode() !== '00000') {
            $err = $update->errorInfo();
            $code = $update->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $update->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $query = 'DELETE FROM habitacions WHERE id = :id';
        $delete = $this->sql->prepare($query);
        $result = $delete->execute([':id' => $id]);

        if ($delete->errorCode() !== '00000') {
            $err = $delete->errorInfo();
            $code = $delete->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

}