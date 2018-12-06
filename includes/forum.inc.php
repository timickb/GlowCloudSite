<?php
switch($currentPage) {
	case 'forum.php':
	$forum_title = 'Список тем';
	break;
	case 'forum-theme.php':
	$forum_title = 'Тема';
	break;
}
echo '<br><div class="forum_header">Форум: ';
echo $forum_title;
echo '</div>';
?>