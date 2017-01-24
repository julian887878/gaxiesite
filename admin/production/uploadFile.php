<?php
class uploadFile {
    protected $db;
    
    public function __construct($db) {
        $this->setDb($db);
    }
    public function setDb(PDO $db) {
        $this->db=$db;
    }
    
    
    
  public function getList()
    {
        $list=array();
        $q=  $this->db->query("SELECT * FROM accueil_sliderPrincipal");
        while ($data=$q->fetch(PDO::FETCH_ASSOC))
        {
            $list[]=$data;
            
        }
        return $list;
    }
    
    public function getButton()
    {
$button = array();
$q = $this->db->query("SELECT * FROM accueil_sliderPrincipal");
while ($data=$q->fetch(PDO::FETCH_ASSOC))
{
    $button[]=$data;
}
return $button;
    }
    
    
Public function upload(array $accueil_sliderPrincipal, $id)
{
    $accueil_sliderPrincipal = current($accueil_sliderPrincipal);
    
    $nameFichier = strtr($accueil_sliderPrincipal['name'], 'ÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
    $nameFichier = preg_replace('/([^.a-z0-9]+)/i', '-', $nameFichier);
    
    $nameFichier = date("G-i-s").$nameFichier;
    
    $nameFichier = strtolower($nameFichier);
    
    $types=array('image/jpeg','image/jpg','image/gif','image/png');//Tableau de format accepté
    
    if (!in_array($accueil_sliderPrincipal['type'], $types))//On verifie que le type de fichier est correcte
    {
        $erreur = 'Le fichier est pas valide';
    }
    
    if ($accueil_sliderPrincipal['size']>=8000000)//On teste la taille de l'image
    {
        $erreur =  "La taille du fichier est trop grande";
    }
    
    if (!isset($erreur))//S'il ny a pas d'erreur on lance l'upload
    {

        move_uploaded_file($accueil_sliderPrincipal['tmp_name'], 'public/image/'.$nameFichier);
        
        $q=  $this->db->prepare('UPDATE accueil_sliderPrincipal SET image=:name WHERE id=:id');
        $q->bindValue('name',$nameFichier);
        $q->bindValue('id',$id);
        $q->execute();

        echo "<SCRIPT LANGUAGE='JavaScript'> document.location.href='index.php?cas=afficherPageUtilisateur&categorie=moncompte'
            </SCRIPT>";
    }
    else
    {
        echo $erreur;
    }
    }


public function modif($id,$name) {
       $sql = 'UPDATE accueil_sliderPrincipal SET image='.$name.' WHERE id='.$id;
       echo $sql;
       $this->db->exec($sql);
       unlink('public/image/'.$name);
echo "<SCRIPT LANGUAGE='JavaScript'> document.location.href='index.php?cas=afficherPageUtilisateur&categorie=moncompte'
            </SCRIPT>";
}
}
?>