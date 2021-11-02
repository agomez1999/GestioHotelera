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
    public function insert($tipus, $nom, $quantitat, $descripcio, $img1, $img2, $img3)
    {
        $query = 'INSERT INTO habitacions(tipus, nom, quantitat, descripcio, img1, img2, img3) VALUES (:tipus, :nom, :quantitat, :descripcio, :img1, :img2, :img3)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':tipus' => $tipus,':nom' => $nom,':quantitat' => $quantitat,':descripcio' => $descripcio,':img1' => $img1,':img2' => $img2,':img3' => $img3]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }
}