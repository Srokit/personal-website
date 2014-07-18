<?php
	$formErrors = array();
	
	function checkForm($form){
		foreach($form as $formKey => $formVal){
			$formKey = htmlspecialchars(trim($formKey));
			$formVal = htmlspecialchars(trim($formVal));
			$formErrors[$formKey] = null;
		}
		foreach($form as $formKey => $formVal){
			if($formVal == "")
				$formErrors[$formKey] = "* Fill out this field";
			elseif(preg_math("/\s/", $formVal) and $formKey != "name")
				$formErrors[$formKey] = "* No spaces allowed";
		}
	}
?>