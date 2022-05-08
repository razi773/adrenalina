<?php 
class Cliennt {
    private ?int $id  ;
    private ?string $nom =null  ;
    private ?string $prenom  =null ;
    private ?string $Adresse =null ;
    private ?int $Num ;
    private ?int $types ;
    private ?int $RIB ;
   

    
    
    function __construct($id, $nom, $prenom, $Adresse, $Num,$types,$RIB){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->Adresse=$Adresse;
        $this->Num=$Num;
        $this->types=$types;
        $this->RIB =$RIB;
        
    }
    /**
     * Get the value of nom
     */ 
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;

        return $this;
    }
    /**
     * Get the value of prenom
     */ 
    public function getid()
    {
        return $this->id;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setid($id)
    {
        $this->id= $id;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getNum()
    {
        return $this->Num;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setNum($Num)
    {
        $this->Num = $Num;

        return $this;
    }

    public function gettypes()
    {
        return $this->types;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function settypes($types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getRIB()
    {
        return $this->RIB;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setRIB($RIB)
    {
        $this->RIB = $RIB;

        return $this;
    }

    
}
?>
