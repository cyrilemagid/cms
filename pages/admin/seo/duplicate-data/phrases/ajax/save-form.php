<?
	if (!$_POST['_token']) print_a($_POST);
	else unset($_POST['_token']);
	if ($_POST['dup_phrase_data_ide']) {
		$ide = $_POST['dup_phrase_data_ide'];
		unset ($_POST['dup_phrase_data_ide']);
		$update = aql::update("dup_phrase_data",$_POST,$ide);
		if ($update === true) exit('Saved');
		else print_a($_POST);
	}
	else {
		$insert = aql::update("dup_phrase_data",$_POST);
		if ($insert[0]['dup_phrase_data_id']) exit('Inserted');
		else print_a($_POST);
	}
?>