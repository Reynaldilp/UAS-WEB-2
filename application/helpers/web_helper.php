<?php 


function cek_login(){
	$u = get_instance();
	if (!$u->session->userdata('npm')){
		redirect('Auth');
	} 
}