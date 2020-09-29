<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div id="masthead">
        <div class="container">
            <?php include('heading.php'); ?>
        </div><!-- /cont -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-spacer"> </div>
                </div>
            </div>
        </div><!-- /cont -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <!--/stories-->
                        <div class="row">
                            <br>
                            <div class="col-md-6 col-sm-3 text-center">
                                <form method="post" id="send_message" action="send_message.php">
                                    <div class="control-group1">
                                        <label for="exampleFormControlSelect2">Selecciona tu Contacto:</label>
                                        <div class="controls">
                                            <select  class="friend_id" class="combo" required>
                                                <option></option>
                                                <?php
														$query = $conn->query("select members.member_id , members.firstname , members.lastname , members.image , friends.friends_id   from members  , friends
	                                                   where friends.my_friend_id = '$session_id' and members.member_id = friends.my_id
	                                                   OR friends.my_id = '$session_id' and members.member_id = friends.my_friend_id ;
	                                                   ");
															while($row = $query->fetch()){
															$friend_name = $row['firstname']." ".$row['lastname'];
															$friend_image = $row['image'];
															$id = $row['member_id'];
															?>
                                                <option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div type="text" class="control-group">
                                        <label>Tu mensaje:</label>
                                        <div class="controls">
                                            <textarea name="my_message" class="my_message" required></textarea>
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="controls">
                                            <button class="btn btn-primary"><i class="icon-envelope-alt"></i> Enviar
                                            </button>

                                        </div>
                                    </div>
                                </form>

<br>
                            </div>
                            <div id="pruebaEnvio" class="col-md-6 col-sm-9">
                                Bandeja Privada
                                <hr>
                                
                                <?php 
				$query = $conn->query("select * from message
				LEFT JOIN members on message.sender_id = members.member_id where reciever_id = '$session_id'  OR sender_id = '$session_id' group by sender_id ");
				while($row = $query->fetch()){
				$id = $row['message_id'];
				$idSend = $row['sender_id']
				
				?>


                                    <div class="mes">
                                        <br>
                                    <div class="message1">
                                        <?php echo $row['content']; ?>
                                        <div class="infoms">
                                            <div class="pull-left"><?php echo $row['date_sended']; ?></div>
                                            <div class="pull-right">enviado por:
                                                <?php echo $row['firstname']." ".$row['lastname']; ?></div>

                                        <a href="delete_message.php<?php echo '?id='.$id; ?>"
                                            class="btn btn-danger btn-xs"><i class="icon-remove-sign"></i> Eliminar</a>
                                        <a href="getUserMessage.php<?php echo '?idSend='.$idSend; ?>"
                                           class="btn btn-primary btn-xs"><i class="icon-envelope-alt"></i> Ver</a>                                    </div>
                                            </div>
                                        </div>
                                <?php } ?>
                            </div>

                        </div>
                        <hr>
                    </div>
                </div>


            </div>
            <!--/col-12-->
        </div>
    </div>


    <?php include('footer.php'); ?>

</body>

</html>