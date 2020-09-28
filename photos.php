<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
<?php include('navbar.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="panel col-md-12">

            <h2 id="po">Mis Fotos</h2>
            <div>
                <form id="photos" method="POST" enctype="multipart/form-data">
                    <div class="input-file-uploader">
                        <input type="file" name="image" id="input01UPhoto" class="btn-link"
                               title="Seleccionar foto" accept="image/*" required/>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-info"><i class="icon-upload"></i>
                        Publicar foto
                    </button>
                </form>

                <?php
                if (isset($_POST['submit'])) {

                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                    $location = "upload/" . $_FILES["image"]["name"];
                    $conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
                    ?>
                    <script>
                        window.location = 'photos.php';
                    </script>
                    <?php
                }
                ?>
            </div>

            <div class="row">
                <hr>
                <?php
                $query = $conn->query("select * from photos where member_id='$session_id'");
                while ($row = $query->fetch()) {
                    $id = $row['photos_id'];
                    ?>
                    <div class="photo-container col-xl-2 col-lg-3 col-md-3 col-sm-4 col-1 text-right">
                        <img class="photo" src="<?php echo $row['location']; ?>"
                             alt="No se pudo cargar la foto <?php echo '?id=' . $id; ?>" width="100%"/>
                        <hr>
                        <a class="btn btn-link" href="delete_photos.php<?php echo '?id=' . $id; ?>">
                            <i class="icon-remove"></i>
                            Eliminar
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div><!--/col-12-->
    </div>
</div>


<?php include('footer.php'); ?>

</body>
