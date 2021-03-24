<?php
 function firstUpper($str) {
	$new_str = trim($str);
	if (strlen($new_str) ==  0) {
		return $new_str;
	}
	$new_str = strtolower($new_str);
	return ucfirst($new_str);
 }
 /*echo ('"testing String" :' . firstUpper("testing String")) . "\n";
 echo ('"   testing   String" :' . firstUpper("   testing   String")) . "\n";
 echo ('"07" :' . firstUpper("07")) . "\n";echo('"" :' . firstUpper("")) . "\n";
 echo ('true :' . firstUpper(true)) . "\n";echo('NULL :' . firstUpper(NULL)) . "\n";
 echo (firstUpper("   ...I Will Rebuild Krypton Atop His Bones.")) . "\n";
 echo (firstUpper(" 300room FOR yoUr   DESTiny   ")) . "\n";*/
?>