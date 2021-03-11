<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>
	<?php if($this->session->userdata('dil')!="tr"){?>
<a href="<?=base_url()?>dildegis/tr">Türkçe</a>
<?php } ?>
<?php if($this->session->userdata('dil')!="en"){?>
<a href="<?=base_url()?>dildegis/en">English</a>
<?php } ?>
<div id="container">
	<h1><?=$this->lang->line('baslik')?></h1>
<p><?=$this->lang->line('aciklama')?></p>
	
</div>

</body>
</html>