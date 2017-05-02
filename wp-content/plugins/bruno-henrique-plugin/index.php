<?php
/**
 * Created by PhpStorm.
 * User: brunoht
 * Date: 02/05/2017
 * Time: 16:15
 */

/*
 * Plugin Name: bruno-henrique-plugin
 * Description: My first shortcode
 * Version: @0.1
 * Author: Bruno Henrique
 * Author URI: http://brunoh.com.br
 */

function creation_form()
{
	?>

	<form action="">
		Nome: <input type="text" name="name_input"><br>
		Mensagem: <textarea name="message_inpute" id="" cols="30" rows="10">Sua mensagem aqui...</textarea>
	</form>

	<?php

}

add_shortcode('formulario', 'creation_form'); ?>