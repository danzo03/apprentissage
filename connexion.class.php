<?php include_once 'fonction.php';

class connexion{
    
    private $nom; 
    private $password;
    private $bdd;
    
    public function __construct($nom,$password) {
        $this->nom = $nom;
        $this->password = $password;
        $this->bdd = bdd();
    }
    
    public function verif(){
        
        $requete = $this->bdd->prepare('SELECT * FROM connexion WHERE nom = :nom');
        $requete->execute(array('nom'=> $this->nom));
        $reponse = $requete->fetch();
        if($reponse){
            
            if($this->password == $reponse['password']){
                return 'ok';
            }
            else {
                $erreur = 'Le mot de passe est incorrect';
                return $erreur;
            }
            
            
        }
        else {
            $erreur = 'Le nom est inéxistant';
            return $erreur;
         }
        
        
    }
    
    public function session(){
        $requete = $this->bdd->prepare('SELECT id FROM connexion WHERE nom = :nom ');
        $requete->execute(array('nom'=>  $this->nom));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['nom'] = $this->nom;
        
        return 1;
    }
    
    
}