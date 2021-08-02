<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sistema Clinica Estetica TCC - Unigranrio | web installer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="<?php echo base_url();?>template/install/install.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="<?php echo base_url();?>template/install/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/install/sliding.form.js"></script>
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1 a{
            color:#ccc;
            font-size:26px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
			text-decoration:none;
        }
    </style>
    <body>
    	<center><br>
        	<h1>
            	<a href="http://codecanyon.net/user/joyontaroy?ref=joyontaroy" target="_blank">
                	Sistema Clinica Estetica TCC - Unigranrio
                </a>
            </h1>
            <img src="uploads/logo.png" />

            
        </center>
        <div id="content">
        	<?php if($this->session->flashdata('installation_result') == 'failed'):?>
            	<div class="result_error">Falha na instalação devido a configurações inválidas</div>
            <?php endif;?>
            <div id="wrapper">
                <div id="steps">
                    <?php echo form_open('install/do_install' , array('id' => 'formElem' , 'name' => 'formElem'));?>
                        <fieldset class="step">
                            <legend>Bem Vindo ao Instalador WEB</legend>
                            <br><br><br><br><br><br>
                            <p>
                            	
                                Instale em Alguns cliques
                                <br>
                                Insira as configs de Banco de Dados e Administrador
                                <br>
                                E inicie a instalação
                                
                                
                            </p>
                                <ol style="clear:both;margin-top:100px;margin-left:50px; text-align:left;">
                                	<li><span style="color:#900;font-weight:bold;">Requisito</span> - 
                                    	application/config/database.php permissão de <span style="color:#063;font-weight:bold;">escrita</span></li>
                                	<li><span style="color:#900;font-weight:bold;">Requisito</span> - 
                                    	application/config/routes.php permissão de  <span style="color:#063;font-weight:bold;">escrita</span></li>
                                </ol>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Database settings</legend>
                            <p>
                                <label for="name">Database Name</label>
                                <input id="db_name" name="db_name" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">User name</label>
                                <input id="db_uname" name="db_uname" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="phone">Password</label>
                                <input id="db_password" name="db_password" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="website">Host Name</label>
                                <input id="db_hname" name="db_hname" type="text" AUTOCOMPLETE=OFF value="localhost" />
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Settings</legend>
                            <p>
                                <label for="namecard"> Nome Da Clinica</label>
                                <textarea  name="system_name" AUTOCOMPLETE=OFF></textarea>
                            </p>
                            <p>
                                <label for="cardnumber">Admin email</label>
                                <input id="email" name="email" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="secure">Login password</label>
                                <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                            </p>
                        </fieldset>
						<fieldset class="step">
                            <legend>Confirmar</legend>
							<p>
								
                        Tudo no formulário foi preenchido corretamente
                        se todas as etapas tiverem um ícone de marca de verificação verde.
                        Um ícone de marca de seleção vermelho indica que algum campo
                        está faltando ou é preenchido com dados inválidos.
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Instalar</button>
                            </p>
                        </fieldset>
                    <?php echo form_close();?>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Bem-Vindo</a>
                        </li>
                        <li>
                            <a href="#">Database settings</a>
                        </li>
                        <li>
                            <a href="#">Admin settings</a>
                        </li>
						<li>
                            <a href="#">Install</a>
                        </li>
                    </ul>
                </div>
                <!--steps finishes here-->
            </div>
            
            <!---------facebook like page---------->
         
			<!---------facebook like page--------->
            
        </div>
    </body>
</html>