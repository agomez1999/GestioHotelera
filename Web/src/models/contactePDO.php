<?php

namespace Daw;

class ContactePDO
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
    // FUNCIÓ PER INSERTAR UN NOU REGISTRE
    public function insert($Nom, $Mail, $Telefon, $Assumpte, $Missatge)
    {
        $query = 'INSERT INTO contacte(Nom, Mail, Telefon, Assumpte, Missatge) VALUES (:Nom, :Mail, :Telefon, :Assumpte, :Missatge)';
        $insert = $this->sql->prepare($query);
        $result = $insert->execute([':Nom' => $Nom,':Mail' => $Mail,':Telefon' => $Telefon,':Assumpte' => $Assumpte,':Missatge' => $Missatge]);

        if ($insert->errorCode() !== '00000') {
            $err = $insert->errorInfo();
            $code = $insert->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $insert->fetch(\PDO::FETCH_ASSOC);
    }
}