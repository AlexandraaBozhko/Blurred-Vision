<?php require __DIR__ . '/../core/bootstrap.php';
    $db = new Database();
    $images = $db->getImages(100);

?>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>type</th>
                    <th>preview</th>
                    <th>categoty</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image) : ?>
                    <tr>
                        <td><?=$image['name']; ?></td>
                        <td><?=$image['type_name']; ?></td>
                        <td><?php echo '<img src="data:image/png;base64,'.base64_encode($image['image']).'" width="50" height="50"/>';?></td>
                        <td><?=$image['category']; ?></td>
                        <td><a href="/admin/edit.php?id=<?=$image['image_id']; ?>">edit</a></td>
                        <td><a href="/admin/delete.php?id=<?=$image['image_id']; ?>">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>