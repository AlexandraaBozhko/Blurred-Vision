<?php 

class Database {


    private $instance;

    public function __construct()
    {
        $db = parse_url(getenv('CLEARDB_DATABASE_URL') ?: "mysql:host=localhost;dbname=portfolio");
        $db['dbname'] = ltrim($db['path'], '/');
        $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
        $user = $db['user'] ?: 'root';
        $password = $db['pass'] ?: '';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
        );

        $this->instance = new PDO($dsn, $user, $password, $options);
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

        public function getImageInfoById(int $id): ?array
        {
            $query = "select * from image WHERE id = ?"; 

            $stmt = $this->instance->prepare( $query );
            
            // bind the id of the image you want to select
            $stmt->bindParam(1, $id);
            $stmt->execute();
            
            // to verify if a record is found
            return  $stmt->rowCount() ? $stmt->fetch(PDO::FETCH_ASSOC) : null;
        }

        public function deleteImageById(int $id): bool
        {
            $query = "delete from image WHERE id = ?"; 

            $stmt = $this->instance->prepare( $query );
            $stmt->bindParam(1, $id);
            return $stmt->execute();
        }

        public function addImage(int $typeId, int $categoryId, string $name, string $image): bool
        {
            $query = "INSERT INTO image SET type_id = ?, name = ?, category_id = ?, image = ?, date = ?"; 
            $now = date('Y/m/d');

            $stmt = $this->instance->prepare( $query );
            $stmt->bindParam(1, $typeId);
            $stmt->bindParam(2, $name);
            $stmt->bindParam(3, $categoryId);
            $stmt->bindParam(4, $image);
            $stmt->bindParam(5, $now);

            return $stmt->execute();
        }

        public function updateImageById(int $id, int $typeId, string $name): bool
        {
            $query = "Update image SET type_id = ?, name = ? WHERE id = ?"; 

            $stmt = $this->instance->prepare( $query );
            $stmt->bindParam(1, $typeId);
            $stmt->bindParam(2, $name);
            $stmt->bindParam(3, $id);

            return $stmt->execute();
        }
        
        public function getImagesByType(int $type): array
        {
            $query = "SELECT i.name, i.image, i.date, it.name as type_name FROM image i INNER JOIN image_type it ON i.type_id = it.id WHERE type_id = ?"; 

            $stmt = $this->instance->prepare( $query );
            
            $stmt->bindParam(1, $type);
            $stmt->execute();
            
            return  $stmt->rowCount() ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
        }

        public function getImageTypes(): array
        {
            $query = "SELECT * FROM image_type"; 

            $stmt = $this->instance->prepare( $query );
            $stmt->execute();
            
            return  $stmt->rowCount() ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
        }

        public function getImageCategories(): array
        {
            $query = "SELECT * FROM category"; 

            $stmt = $this->instance->prepare( $query );
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
                SELECT i.id as image_id, i.name, i.image, i.date, it.name as type_name, it.title, c.name as category
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