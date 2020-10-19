<?php
session_start();
$pageTitle ='Home';
require_once('Header.html');
//$_SESSION['SESS_user'] = $user;


?>
<?php
echo "<br><br>";
echo "<div class = \"Home_Content\">";

echo "<div class=\"Card\"><img src=\"Imagery/HTML5_Logo.png\" /><div class=\"Card-Word\"><h3><a href=\"#\">Learn HTML</a></h3><p>With HTML you can create your own Web site.

This tutorial teaches you everything about HTML.

HTML is easy to learn.</div></div>";


echo "<div class=\"Card\"><img src=\"Imagery/CSS3_logo.png\" /><div class=\"Card-Word\"><h3><a href=\"#\">Learn CSS</a></h3><p>CSS is a stylesheet language that describes the presentation of an HTML and

describes how elements must be rendered on screen.

</p></div></div>";

echo "<div class=\"Card\"><img src=\"Imagery/Javascr.png\" /><div class=\"Card-Word\"><h3><a href=\"#\">Learn JAVASCRIPT</a></h3><p>JavaScript is the programming language of HTML and the Web.

Programming makes computers do what you want them to do.

</p></div></div>";

echo "<div class=\"Card\"><img src=\"Imagery/php1.png\"/><div class=\"Card-Word\"><h3><a href=\"#\">Learn PHP</a></h3><p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

</p></div></div>";

echo "</div>";


require_once('footer.html');
?>