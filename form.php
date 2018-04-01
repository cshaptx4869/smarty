<?php
    require_once 'ini.php';
    // 单独设置自己模版的缓存生存时间
    $smarty->caching = 2;
    $smarty->cache_lifetime = -1; // 值为-1 缓存永不过期

    $smarty->assign('one','one');
    $smarty->display('form.html');
