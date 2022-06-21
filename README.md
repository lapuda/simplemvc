# simplemvc
a simple php mvc framework



### 一、 使用方法
```
 根目录下执行 git clone https://github.com/lapuda/autoloader.git vendors/autoloader
```
#### 1. 载入自动装载类
```
define("WEB_ROOT",__DIR__.DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR);//项目根目录
define("FRAMEWORK_DIR",__DIR__.DIRECTORY_SEPARATOR."framework".DIRECTORY_SEPARATOR);//框架根目录
define("VENDOR_ROOT",__DIR__.DIRECTORY_SEPARATOR."vendors".DIRECTORY_SEPARATOR);// 类库目录

require_once VENDOR_ROOT."autoloader/src/bootloader/Autoloader.php";//引入自动装载类
 
```
#### 2. 初始化

```
 // 初始化
bootloader\Autoloader::instance()
    ->addRoot(WEB_ROOT)
    ->addRoot(FRAMEWORK_DIR)
    ->addRoot(VENDOR_ROOT)
    ->init();

$engine = \Core::instance();
$engine->run();
 
```

### 3. 使用

``` 
 在 app 下编写 相关的controller 
```

### 二 、注意事项

 注意：
 1. 命名空间必须以controller 开始
 2. 访问 /xx 或 /xx/xxx
 ```
 controller 样例
 <?php

namespace controller\user;

use controller\Controller;
use http\Response;

class Agent extends Controller {
   
    function run() {
        $this->response->outputJson(Response::HTTP_OK,$this->request->getUserAgent());
    }
}
```