<?php
class GestionUser{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }
    function sendToDB(User $user){
        $dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
        $cnx = new PDO($dsn);
        
        $test = $user->getMdp();
        
    }
}
?>