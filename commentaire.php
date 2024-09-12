<?php
    class commentaire
    {
        private $id;
        public $id_article;
		public $commentaire;
        public $pseudo;
    

        function __construct($id, $id_article, $commentaire, $pseudo){
			$this->id=$id;
			$this->id_article=$id_article;

			$this->commentaire=$commentaire;
			$this->pseudo=$pseudo;
		}

        function setid(string $id){
			$this->id=$id;
		}
        function setid_article(string $id_article){
			$this->id_article=$id_article;
		}
        function setcommentaire(string $commentaire){
			$this->commentaire=$commentaire;
        }
		function setpseudo(string $pseudo){
			$this->pseudo=$pseudo;
        }

        function getid(){
			return $this->id;
		}
        function getid_article(){
			return $this->id_article;
		}
        function getcommentaire(){
			return $this->commentaire;
		}
		function getpseudo(){
			return $this->pseudo;
		}
        
    }
    

?>