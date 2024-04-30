<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Management</title>
    <link rel="stylesheet" href="desain.css">
</head>
<body>
    <h2>Add Item</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Item name">
        <input class="button" type="submit" name="submit_add" value="Add">
    </form>

    <?php include_once 'add_item.php'; ?>
    <br><br>
    <h2>Item List</h2>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php
        include_once 'view_items.php';
        $items = view_items($pdo);
        foreach ($items as $item) {
            echo "<tr>";
            echo "<td>" . $item['id'] . "</td>";
            echo "<td>" . $item['name'] . "</td>";
            echo "<td>";
            echo "<a href='update_item.php?id=" . $item['id'] . "'>Update </a><span>/</span>";
            echo "<a href='delete_item.php?id=" . $item['id'] . "'> Delete</a>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>