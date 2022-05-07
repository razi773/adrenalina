<?php 
class produit {
    private ?int $id_produit  ;
    private ?float $prix  ;
    private ?int $quantite   ;
    private ?string $nom = null;
    private ?string $description1 ;
    private ?string $Image1 ;
    private ?int $id_type;
   

    
    
    function __construct($id_produit, $nom, $prix, $quantite, $description1, $id_type ){
        $this->id_produit=$id_produit;
        $this->prix=$prix;
        $this->quantite=$quantite;
        $this->nom=$nom;
        $this->description1=$description1;
        $this->Image1=$Image1;
        $this->id_type=$id_type;
       
      
        
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

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    
    /**
     * Get the value of prenom
     */ 
    public function getid_produit()
    {
        return $this->id_produit;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setid_produit($id_produit)
    {
        $this->id_produit= $id_produit;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getquantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setquantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
    public function getdescription1()
    {
        return $this->description1;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setdescription1($description1)
    {
        $this->description1 = $description1;

        return $this;
    }
    public function getImage1()
    {
        return $this->Image1;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setImage1($Image1)
    {
        $this->Image1 = $Image1;

        return $this;
    }
    public function getid_type()
    {
        return $this->id_type;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setid_type($id_type)
    {
        $this->id_type = $id_type;

        return $this;
    }
}
?>