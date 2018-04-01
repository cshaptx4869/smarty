<?php
    require_once 'ini.php';

    // 不开启缓存
    $smarty->caching = false;
    $smarty->display('child.html');