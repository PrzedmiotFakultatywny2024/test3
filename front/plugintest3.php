<?php

use GlpiPlugin\Test3\PluginTest3;

include ('../../../inc/includes.php'); // Ścieżka do pliku includes.php z GLPI

// Ustawienie tytułu strony; 'MyPlugin' i 'MyPage' to przykładowe nazwy twojej wtyczki i strony
Html::header(__('Test3', 'test3'), $_SERVER['PHP_SELF'], 'tools', 'PluginTest3');

echo "<div class='center'>";
echo "<h2>Witaj na mojej stronie wtyczki!</h2>";
echo "<p>Tutaj możesz umieścić dowolną treść HTML, na przykład instrukcje dotyczące Twojej wtyczki, FAQ, itp.</p>";
echo "</div>";

Html::footer();
