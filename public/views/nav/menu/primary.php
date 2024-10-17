<?php
$items = config('app.primary'); // Assuming this returns an array

// Get the current URL path using PHP's superglobals (only the request URI)
$currentPath = $_SERVER['REQUEST_URI'];

?>

<nav id="primary" class="primary-menu">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
    <ul id="primary-menu" class="menu-items">
        <?php
            foreach ($items as $name => $url) {  
                // Compare the current path with the menu item's URL (assuming $url is relative)
                $class = ($currentPath == $url) ? 'menu-item current-menu-item' : 'menu-item';
        ?>
                <li class="<?= htmlspecialchars($class, ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></a>
                </li>
        <?php } ?>
    </ul>
</nav>
