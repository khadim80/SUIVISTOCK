<?php
    class Produit {
        private $id;
        private $nom;
        private $ref;
        private $qtStock;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of ref
         */ 
        public function getRef()
        {
                return $this->ref;
        }

        /**
         * Set the value of ref
         *
         * @return  self
         */ 
        public function setRef($ref)
        {
                $this->ref = $ref;

                return $this;
        }

        /**
         * Get the value of qtStock
         */ 
        public function getQtStock()
        {
                return $this->qtStock;
        }

        /**
         * Set the value of qtStock
         *
         * @return  self
         */ 
        public function setQtStock($qtStock)
        {
                $this->qtStock = $qtStock;

                return $this;
        }
    }
    
?>