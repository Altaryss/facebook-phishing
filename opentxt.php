<?php
if(!file_exists('./log.txt')){touch('log.txt', strtotime('-1 days'));}$file = file_get_contents('./log.txt', FILE_USE_INCLUDE_PATH);echo nl2br(htmlentities($file));
?>