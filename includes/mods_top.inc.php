<?php 
include(DB.'mods.db.php');
if ($totalRows_mods > 0) {
	if ($go != "mods") {
		foreach ($mods_display as $mid) {
			$mods = mod_display($mid,$section,$go,$row_user['userLevel'],1,$section);
			if ($mods != "") include($mods);
		} 
	}
}
?>