sdk_for_unit 1.0
===============

> 运行环境要求PHP>=7.1+

## 主要新特性

* 暂无

## 使用教程
* 基础断言测试
````
# vendor/bin/phpunit --bootstrap src/Email.php tests/EmailTest
# vendor/bin/phpunit tests/EmailTest
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 97 ms, Memory: 2.00 MB

OK (3 tests, 3 assertions)
````
* 盒子测试
````
# vendor/bin/phpunit --bootstrap src/Email.php --testdox tests
# vendor/bin/phpunit --testdox tests
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

Email
 ✔ 可以从有效的电子邮件地址创建
 ✔ 无法从无效电子邮件地址创建
 ✔ 可以用作字符串

Stack
 ✔ Push and pop

Time: 121 ms, Memory: 2.00 MB
````
* 生成覆盖率
````
vendor/bin/phpunit \
--bootstrap src/Email.php \
--coverage-html=reports/ \
--whitelist src/ \
tests/
````

## 版权信息

sdk_for_unit遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2020-2022 by Testcomposer (http://cisigo.com/)

All rights reserved。