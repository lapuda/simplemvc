<?php
define("WEB_ROOT",__DIR__.DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR);//项目根目录
define("FRAMEWORK_DIR",__DIR__.DIRECTORY_SEPARATOR."framework".DIRECTORY_SEPARATOR);//框架根目录
define("VENDOR_ROOT",__DIR__.DIRECTORY_SEPARATOR."vendors".DIRECTORY_SEPARATOR);// 类库目录

require_once VENDOR_ROOT."autoloader/src/bootloader/Autoloader.php";//引入自动装载类

// 初始化
bootloader\Autoloader::instance()
    ->addRoot(WEB_ROOT)
    ->addRoot(FRAMEWORK_DIR)
    ->addRoot(VENDOR_ROOT)
    ->init();

$engine = \Core::instance();
$engine->run();