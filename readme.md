## 关于
代码仓库 - 一个代码记录小工具， 基于 [laravel 5.5](https://laravel.com)。



## 系统要求


    PHP >= 7.0.0
    PHP OpenSSL 扩展
    PHP PDO 扩展
    PHP Mbstring 扩展
    PHP Tokenizer 扩展
    PHP XML 扩展


## 简介
- 配置 .env.example 文件里的 DB_USERNAME,DB_PASSWORD，将 .evn.example 重命名为 .evn 。
- 执行命令 php artisan key:generate ，配置 .env 里的 APP_KEY。
- sql文件在 /database/sqls/create.sql
- 路由在 /routes/web.php
- 控制器在 /app/Http/Controllers/
- 模型在 /app/Model/
- 模板在 /resources/views/
- js文件在 /public/js/
- css文件在 /public/css/


## License

under [MIT license](https://opensource.org/licenses/MIT).
