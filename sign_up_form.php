                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h4 id="Crear"> Crea Tu Cuenta </h4> 
                               	<p> 
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="Nombre"/>
                                </p>
								<p> 
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Apellido"/>
                                </p>
								<p> 
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label id="Sexo" for="passwordsignup" class="youpasswd" data-icon=""> Sexo </label>
									<select id="passwordsignup"  name="gender">
										<option>Hombre</option>
										<option>Mujer</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Registrarte"/> 
								</p>
                                <p class="change_link">  
									¿Tienes una Cuenta?
									<a href="#tologin" class="to_register"> Inicia Sesión </a>
								</p>
                            </form>