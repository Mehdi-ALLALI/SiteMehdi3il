<main>
    <h2>Administration des Images de la Page Description</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pageData as $data): ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($data['description'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <form method="POST" action="?controller=adminDescription&action=updateImage">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="text" name="url" value="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" required>
                            <input type="text" name="description" value="<?php echo htmlspecialchars($data['description'], ENT_QUOTES, 'UTF-8'); ?>" required>
                            <input type="submit" value="Modifier">
                        </form>
                        <a href="?controller=adminDescription&action=deleteImage&id=<?php echo $data['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Ajouter une Nouvelle Image</h3>
<form method="POST" action="?controller=adminDescription&action=createImage" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*" required>
    <input type="text" name="description" placeholder="Description" required>
    <input type="submit" value="Ajouter">
</form>

</main>
