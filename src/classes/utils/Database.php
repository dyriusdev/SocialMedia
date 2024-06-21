<?php
    use MongoDB\Client as MongoClient;
    use MongoDB\Database as MongoDatabase;

    class Database {
        
        private MongoClient $connectin;
        private MongoDatabase $db;
        
        function __construct() {
            $this->connectin = new MongoClient("mongodb://localhost:27017");
            $this->db = $this->connectin->selectDatabase("");

        }
        
        public function Create(string $collection, array $args) : void {
            $this->db->selectCollection($collection)->insertOne($args);
        }

        public function Read(string $collection, array $filter) : array {
            return array($this->db->selectCollection($collection)->find($filter));
        }
        
        public function Update(string $collection, array $filter, array $args) : void {
            $this->db->selectCollection($collection)->updateOne($filter, $args);
        }
        
        public function Delete(string $collection, array $filter) : void {
            $this->db->selectCollection($collection)->deleteOne($filter);
        }
    }
?>