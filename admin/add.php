<?php require __DIR__ . '/../core/bootstrap.php';
    $db = new Database();

    $result = null;
    if( isset( $_POST['submit'] ) )
    {
        if (empty($_FILES['image_file']['tmp_name'])) {
            echo $_FILES['image_file']['error_code'] ?? '0', ': file not found!';
            die;
        }
        $image = file_get_contents($_FILES['image_file']['tmp_name']);
        $result = $db->addImage($_POST['type_id'] ?? null, $_POST['category_id'] ?? null, $_POST['name'] ?? null, $image);
    }
    $types = $db->getImageTypes();
    $categories = $db->getImageCategories();
?>
<?php if (is_bool($result)) : ?>
    <p><?php header('Location: /admin'); ;?></p>
<?php endif; ?>
<?php if (null === $result) : ?>
    <form method="POST" enctype="multipart/form-data">
        <p>Тип: <select name="type_id">
            <?php foreach ($types as $type) : ?>
                <option value="<?=$type['id']?>"><?=$type['title']?></option>
            <?php endforeach; ?>
        </select></p>
        <p>Заголовок: <input type="text" name="name" value="" /></p>
        
        <!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
        <p>Отправить этот файл: <input name="image_file" type="file" /></p>

        <p>Категория: <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?=$category['id']?>"><?=$category['name']?></option>
            <?php endforeach; ?>
        </select></p>
        <p><input type="submit" name="submit" value="Добавить" /></p>
    </form>
    <a href="/admin">Назад</a>
<?php endif; ?>