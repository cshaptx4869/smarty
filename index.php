<?php
    require_once 'ini.php';

    // 开启缓存
    $smarty -> cache_lifetime = 300;
    // 判断模板文件是否被缓存 (如果一个模板有多个实例 比如:分页 则传递第二个参数 指定缓存号)
    if (!$smarty -> isCached('index.html',$_SERVER['REQUEST_URI'])){
        // 从数据库获取数据
        $page = isset($_GET['page'])?$_GET['page']:0;
        if ($page < 0 ) $page = 0;
        $curpage = 10;
        $limit = $page.','.$curpage;
        $articles = $db -> fetchAll('tblarticle',['limit'=> $limit]);
        $data = $db->fetchAll('tblarticle');
        $count = count($data);
        $totalpage = ceil($count/$curpage);
        if ($page > $totalpage) $page = $totalpage;

        $smarty->assign('page',$page);
        $smarty->assign('totalpage',$totalpage);
        $smarty ->assign('articles',$articles);
        echo '我是从数据库中取得的数据';
    }
    $smarty->display('index.html',$_SERVER['REQUEST_URI']);