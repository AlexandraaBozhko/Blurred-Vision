<?php require __DIR__ . '/../core/bootstrap.php';
    $db = new Database();
    $id = !empty($_GET['id']) ? (int) $_GET['id'] : null;

    if( isset( $_POST['delete'] ) )
    {
        $id = $_POST['image_id'] ?? null;
        $result = false;
        if (null !== $id) {
            $result = $db->deleteImageById($id);
        }

        echo $result ? '<b>Удалено</b></br>' : '<b>Ошибка удаления!</b></br>';
        echo '<a href="/admin">Назад</a>';
    }
    $image = $db->getImageById($id);
?>

<?php if (!empty($image)) : ?>
    <img src="data:image/png;base64,<?=base64_encode($image)?>" width="500" height="600"/>
    <form method="POST">
        <input type="hidden" name="image_id" value="<?=$id?>" />
        <input type="submit" name="delete" value="Удалить" />
    </form>
<?php endif; ?>