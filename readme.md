## Laravel 教程 - 电商实战进阶

 Laravel Shop 基础上进一步构建一个更加强大的电商系统。包含以下功能：高性能无限级分类、众筹商品管理、众筹商品下单逻辑、众筹商品结束逻辑、使用分期付款支付订单、计算分期付款逾期费、分期付款订单的退款、给商品增加属性、使用 Elasticsearch 重构商品搜索模块、分面搜索、相似商品查询（类似于亚马逊的『商品推荐』功能）、Elasticsearch 的索引迁移、秒杀商品管理、秒杀商品下单逻辑、秒杀接口性能优化、编写部署脚本、多机部署实现负载均衡。

## 涉及到以下知识

- 高性能无限级类目数据库结构；
- Ngrok 内网穿透；
- Laravel-Admin 下拉框异步加载数据；
- 面包屑导航的概念；
- 使用递归构建类目树；
- 使用 ViewComposer 剥离与控制器无关的逻辑；
- 众筹的业务逻辑；
- 众筹的数据库结构；
- 通过代码封装减少重复代码；
- 众筹的下单逻辑；
- Carbon 类设置语言；
- 众筹的结束逻辑；
- 使用异步任务优化定时任务；
- 分期付款的业务逻辑；
- 分期付款的数据库结构；
- 涉及到金钱的数值计算方式
- 使用分期付款支付商品订单；
- 分期还款的逻辑；
- 逾期费计算逻辑；
- 使用 chunkById() 减少内存占用；
- 分期付款的退款逻辑；
- 商品添加属性和长标题；
- Elasticsearch 的基础概念；
- Elasticsearch 的 API 调用方式；
- 在 Laravel 中调用 Elasticsearch 接口；
- 通过 Elasticsearch API 创建索引；
- 使用 PHP 代码将数据库中的商品数据添加到 Elasticsearch 索引中；
- Elasticsearch 查询语法入门；
- 将搜索功能改用 Elasticsearch 构建；
- 分面搜索的概念；
- Elasticsearch 聚合查询；
- Elasticsearch 对象数组数据存储方式；
- Elasticsearch 分析器的概念；
- 自定义 Elasticsearch 分析器；
- Elasticsearch 实现同义词搜索；
- 通过 Elasticsearch 的 should 条件实现相似商品的搜索；
- Elasticsearch 索引别名的概念；
- Elasticsearch 索引结构无缝迁移方案；
- 用 Laravel 实现Elasticsearch 索引结构无缝迁移；
- 在 Ubuntu 16.04 的服务器中安装 Laravel 项目的运行环境；
- 线上环境手动部署代码的具体步骤；
