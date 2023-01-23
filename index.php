<?php  include './db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>

<body>
    <h1>Todo</h1>
    <form action="addTodo.php" method="POST">
        <input type="text" name="todo-input" placeholder="add a todo">
        <button type="submit" name="submit">Add
        </button>
    </form>
    <?php
    $sql = "SELECT * FROM todos";
    $query = mysqli_query($conn, $sql);
    ?>

    <!-- create a div that shows all task that are created -->
    <?php
    while ($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $task = $row['task'];
  
    ?>
        <div class="todo">
            <div class="todo-item">
                <?php echo $task; ?>
            </div>
            <div class="actions">
                <div class="delete">
                    <a href="delete.php?id=<?php echo $id; ?>">
                        <i class="bx bx-trash"></i>
                    </a>
                </div>
                <div class="check">
                    <a href="check.php?id=<?php echo $id; ?>">
                        <i class="bx bx-check"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>