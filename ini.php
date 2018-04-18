<?php
    header('content-type:text/html;charset=utf8');
    define('ROOT',dirname(__FILE__));
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('PRC');
    include_once ROOT.'/vendor/autoload.php';
    $smarty = new Smarty();
    $db = MySQL::getObj('127.0.0.1','root','123456','labexam');
    $mem = new Memcache();

    $smarty ->setTemplateDir(ROOT.'/templates/')
            ->setCompileDir(ROOT.'/templates_c/')
            ->setCacheDir(ROOT.'/caches/')
            ->setConfigDir(ROOT.'/configs/')
            ->addPluginsDir(ROOT.'/myplugins/');
    /**
     * 开启缓存 true or 1
     * smarty的缓存与编译:
     * 1.smarty的编译功能默认情况下是启用的,而缓存必须显示开启
     * 2.编译的过程是将模版转换为PHP脚本,若模版文件没有修改,只是减少了模版转换的开销
     * 3.缓存不仅将模版转换为PHP脚本,而且将模版内容转换成静态页面.即减少了模版转换开销,也没有了在逻辑层执行获取数据操作的开销
     */
    $smarty->caching = true;
    $smarty->cache_lifetime = 60;
    // 动态注册插件
    $smarty->registerPlugin('function','myselect','select');
    // 注册成为插件
    function select($params, $smarty){
        $str = '<select><option>-请选择-</option>';
        if(isset($params['data']) && !empty($params['data'])){
            foreach($params['data'] as $key=>$row){
                if ($row == (isset($params['selected'])?$params['selected']:''))
                    $str .= '<option selected value="'.$key.'">'.$row.'</option>';
                else
                    $str .= '<option value="'.$key.'">'.$row.'</option>';
            }
        }
        $str .= '</select>';
        return $str;
    }
    // 将php的strtotime()函数映射到Smarty调节器中
    $smarty->registerPlugin("modifier","mystrtotime", "strtotime");

    // 提示
    function reload_js($msg = NULL, $url = NULL){
        if (empty($url)){
            $url = 'yuyue.php';
        }
        $url = 'window.location.href="'.$url.'";';
        print '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        print '<script type="text/javascript">';
        if ($msg)
            printf('alert("%s");',str_replace(array("\\", "\"", "\r\n", "\r", "\n"), array("\\\\", "\\\"", "\\n", "\\n", "\\n"), $msg));
        print $url;
        print '</script></head></html>';
        exit;
    }

