<?php
if ($cPage != 'index.php') {
	echo '</div>';
}
echo '<!/Тело сайта/>';
echo '</div>';
echo '<div class="footer">';
echo '<p> &copy; GlowCraft 2014-'.$cYear.'</p>';
echo '</div></body></html>';
ob_end_flush();