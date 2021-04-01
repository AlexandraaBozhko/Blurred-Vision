<?php require __DIR__ . '/../core/bootstrap.php';
    $db = new Database();
    $id = !empty($_GET['id']) ? (int) $_GET['id'] : null;

    $result = null;
    if( isset( $_POST['submit'] ) )
    {
        $result = $db->updateImageById($_POST['image_id'] ?? null, $_POST['type_id'] ?? null, $_POST['name'] ?? null);
    }
    $image = $db->getImageInfoById($id);
    $types = $db->getImageTypes();
?>
<?php if (is_bool($result)) : ?>
    <p><?php echo $result ? 'updated' : 'failed'; ?></p>
<?php endif; ?>
<?php if (!empty($image)) : ?>
    <form method="POST">
        <p><input type="hidden" name="image_id" value="<?=$id?>" /></p>
        <p><select name="type_id">
            <?php foreach ($types as $type) : ?>
                <option <?php if ($type['id'] == $image['type_id']) :?>selected="selected"<?php endif; ?> value="<?=$type['id']?>"><?=$type['title']?></option>
            <?php endforeach; ?>
        </select></p>
        <input type="text" name="name" value="<?=$image['name']?>" /></p>
        <p><img src="data:image/png;base64,<?=base64_encode($image['image'])?>" height="150"/></p>
        <p><input type="hidden" name="category_id" value="<?=$image['category_id']?>" /></p>
        <p><input type="submit" name="submit" value="Сохранить" /></p>
    </form>
    <a href="/admin">Назад</a>
<?php endif; ?>