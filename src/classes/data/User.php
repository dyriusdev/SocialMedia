<?php

    class User {

        private int $id;
        private string $username;
        
        public function GetId() : int { return $this->id; }

        public function GetUsername() : string { return $this->username; }
    }
?>