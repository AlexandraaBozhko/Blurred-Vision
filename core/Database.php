<?php 

class Database {


    private $instance;

    public function __construct() 
    {
        $username = "root";
        $password = "";

        $this->instance = new PDO("mysql:host=localhost;dbname=portfolio", $username, $password);
    }

        public function getImageById(int $id): ?string
        {
            $query = "select image from image WHERE id = ?"; 

            $stmt = $this->instance->prepare( $query );
            
            // bind the id of the image you want to select
            $stmt->bindParam(1, $id);
            $stmt->execute();
            
            // to verify if a record is found
            return  $stmt->rowCount() ? $stmt->fetch(PDO::FETCH_ASSOC)['image'] : null;
        }

        
        public function getImagesByType(int $type): array
        {
            $query = "SELECT i.name, i.image, i.date, it.name as type_name FROM image i INNER JOIN image_type it ON i.type_id = it.id WHERE type_id = ?"; 

            $stmt = $this->instance->prepare( $query );
            
            $stmt->bindParam(1, $type);
            $stmt->execute();
            
            return  $stmt->rowCount() ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
        }

        public function getRandomImagesArrayByType(int $category, int $limit): array
        {
            $limit += 5;
            $query = "
                SELECT i.name, i.image, i.date, it.name as type_name 
                FROM image i INNER JOIN image_type it ON i.type_id = it.id 
                WHERE category_id = ? 
                LIMIT {$limit}
            ";

            $stmt = $this->instance->prepare( $query );
            
            $stmt->bindParam(1, $category);
            $stmt->execute();
            
            // return random image by type
            $data = $stmt->rowCount() ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
            shuffle($data);

            return $data;
        }

        public function getImages(int $limit = 20): array
        {
            $query = "
                SELECT i.id as image_id, i.name, i.image, i.date, it.name as type_name, c.name as category
                FROM image i INNER JOIN image_type it ON i.type_id = it.id INNER JOIN category c ON i.category_id = c.id 
                LIMIT {$limit}
            ";

            $stmt = $this->instance->prepare( $query );
            $stmt->execute();
            
            // return random image by type
            $data = $stmt->rowCount() ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];

            return $data;
        }


}