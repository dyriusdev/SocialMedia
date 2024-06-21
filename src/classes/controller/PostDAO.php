<?php
    class PostDAO {

        public static function GetOwner(Database $db, Post $post) {
            $result = $db->Read("", ["id" => $post->GetOwner()]);
        }
    }
?>