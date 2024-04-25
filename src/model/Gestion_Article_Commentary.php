<?php
class GestionArticle{
    private PDO $cnx;

    function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }


    function GetListeArticle(): array{
            
    }
    function GetListeCommentary(int $id_news): array{
        $dsn ='pgsql:host=192.168.30.110;dbname=Ligue_1;password=P@ssw0rdsio;user=postgres;port=9876';
        $cnx = new PDO($dsn);

        $res= $this->cnx->prepare("Select * from List_Commentary( ? )");
        $res->execute([$id_news]);
        
        foreach($res as $row ){
            $tabresultat[] = new Commentary($id_news, $row['desc_com'], $row['id_uti']);
        }
        $tab_commentary = [];
        
        
        return $tab_commentary;
    }
}

?>