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
                                    <div class="control-group">
											<label>Contacto:</label>
                                          <div class="controls">
                                            <select hidden= true name="friend_id" class="combo" required>
								            <?php
                                                include('dbcon.php');
                                            $idSend = $_GET['idSend'];
                                            $friend_name = $row['firstname'];
                                                    $query = $conn->query("select * from message LEFT JOIN members on message.sender_id = members.member_id where reciever_id =  '$session_id' and sender_id = '$idSend'  group by sender_id");
															while($row = $query->fetch()){
															$friend_name = $row['firstname']." ".$row['lastname'];
															$friend_image = $row['image'];
				                                            $id = $row['sender_id'];
                                                    ?>
                                              	<option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                            <label><?php echo $friend_name; ?></label>

                                        </div>
                                    <div class="control-group">
                                        <label>Tu mensaje:</label>
                                        <div class="controls">
                                            <textarea name="my_message" class="my_message" required> </textarea>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button class="btn btn-primary"><i class="icon-envelope-alt"></i> Enviar
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="message" class="col-md-6 col-sm-9">
                                Bandeja Privada
                                <hr>
                                <?php 
				include('dbcon.php');
				$idSend = $_GET['idSend'];
				$query = $conn->query("select * from message 
                LEFT JOIN members on message.sender_id = members.member_id where reciever_id = '$session_id' and sender_id = '$idSend'
                OR reciever_id = '$idSend'  AND sender_id= '$session_id' order by message_id DESC;");
				while($row = $query->fetch()){
				?>
                                <br>
                                <div class="mes">
                                    <div class="message1"><?php echo $row['content']; ?>
                                        <div class="infoms">

                                            <div class="pull-left"><?php echo $row['date_sended']; ?></div>
                                            <div class="pull-right">enviado por:
                                                <?php echo $row['firstname']." ".$row['lastname']; ?></div>
                                        </div>

                                        <hr>
                                        <br>


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