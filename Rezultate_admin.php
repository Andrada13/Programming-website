<!DOCTYPE html>
<html>

<head>
    <title>Gestiunea rezultatelor admin</title>
    <link rel="stylesheet" href="adminpage_style.css">
</head>

<body>

    <div class="admin">
        <h2 align="center">Pagina destinata adminilor pentru publicarea rezultatelor</h2>
    </div>

    <div>
        <form method="POST" action="add_rezultat.php">
            <div class="input-group">
                <label>Nume : </label><input type="text" name="username">

            </div>
            <div class="input-group">
                <label>Email : </label><input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Nota Informatica : </label><input type="text" name="nota_info">

            </div>
            <div class="input-group">
                <label>Nota Matematica : </label><input type="text" name="nota_mate">

                <div class="input-group">
                    <button class="btn" type="submit" name="add">Adauga</button>
                </div>

            </div>
        </form>

    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>Nume</th>
                <th>Email</th>
                <th>Nota Informatica</th>
                <th>Nota Matematica</th>
                <th>Media</th>
                <th colspan="2">Action</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                include('rezultate_connect.php');
                $query = mysqli_query($conn, "select * from `accounts`");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['nota_info']; ?></td>
                        <td><?php echo $row['nota_mate']; ?></td>
                        <td><?php echo $row['media']; ?></td>
                        <td>
                            <a href="edit_rezultat.php?id=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
                            <a href="delete_rezultat.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <p>Te poti deconecta aici :
        <a href="admin.html" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Deconecteaza-te
        </a>
    </p>
</body>

</html>