<?php

    class Post {

        private int $id;
        private int $ownerId;
        private DateTime $time;
        
        public function GetId() : int { return $this->id; }

        public function GetOwner() : int {
            return $this->ownerId;
        }
    }
?>