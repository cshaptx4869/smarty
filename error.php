<?php
    // 关闭所有PHP错误报告
    error_reporting(0);

    // 只能捕获系统产生的一些Warning、Notice级别的错误。
    set_error_handler('zyferror');
    function zyferror($errno, $errstr, $errfile, $errline)
    {
        var_dump('set_error_handler: ' . $errno . ':' . $errstr . ' in ' . $errfile . ' on ' . $errline . ' line .');
    }

    // 捕获PHP的错误：Fatal Error、Parse Error等
    register_shutdown_function('zyfshutdownfunc');
    function zyfshutdownfunc()
    {
        if ($error = error_get_last()) {
            var_dump('register_shutdown_function: Type:' . $error['type'] . ' Msg: ' . $error['message'] . ' in ' . $error['file'] . ' on line ' . $error['line'] );
        }
    }

    // 设置默认的异常处理程序
    set_exception_handler('zyfexception');
    function zyfexception($exception)
    {
        var_dump("set_exception_handler: Exception: " . $exception->getMessage());
    }