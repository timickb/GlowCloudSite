<?php
$query231 = mysql_query("SELECT * FROM gc_users WHERE isLogged = 1");
$num_online = mysql_num_rows($query231);
$slots = 1337;