<!DOCTYPE html>
<html>

<head>
    <title>Gestiunea anunturilor admin</title>
    <link rel="stylesheet" href="adminpage_style.css">
</head>

<body>


    <div class="admin">
        <h2>Pagina destinata adminilor pentru adaugarea, editarea sau stergrea anunturilor</h2>
    </div>

    <div>
        <form method="POST" action="add_anunt.php">
            <div class="input-group">
                <label>Categorie anunt : </label><input type="text" name="categorie">
            </div>
            <div class="input-group">
                <label>Anunt : </label><input type="text" name="descriere">

                <div class="input-group">
                    <button class="btn" type="submit" name="add">Adauga</button>
                </div>

            </div>
        </form>




        </form>

    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>Categorie anunt</th>
                <th>Anunt</th>
                <th colspan="2">Action</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                include('admin_connect.php');
                $query = mysqli_query($conn, "select * from `user`");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['categorie']; ?></td>
                        <td><?php echo $row['descriere']; ?></td>
                        <td>
                            <a href="edit_anunt.php?id=<?php echo $row['userid']; ?>" class="edit_btn">Edit</a>
                            <a href="delete_anunt.php?id=<?php echo $row['userid']; ?>" class="del_btn">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>



    <div>
        <h4 class="deconectare"> Te poti deconecta aici :
            <a href="admin.html" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Deconecteaza-te
            </a>
        </h4>
    </div>


</body>

</html>