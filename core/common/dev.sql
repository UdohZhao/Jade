# 后台用户表{id，用户名，密码，时间，状态（正常，冻结）}
CREATE TABLE `admin_user`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '后台用户表主键id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>冻结',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 用户表{id，关联客服用户表主键id，手机号码，密码，时间，状态（正常，冻结）}
CREATE TABLE `user`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户表主键id',
  `suid` int(11) UNSIGNED NOT NULL COMMENT '关联客服用户表主键id',
  `phone` char(11) NOT NULL COMMENT '手机号码',
  `password` char(32) NOT NULL COMMENT '密码',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>冻结',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 用户信息表{id，关联用户表主键id，头像路径，昵称，账户余额}
CREATE TABLE `userinfo`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户信息表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `avatar_path` varchar(255) NOT NULL COMMENT '头像路径',
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `remaining` decimal(14,2) UNSIGNED NOT NULL COMMENT '账户余额',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 新闻表{id，关联文章表主键id，标题，封面图片路径，内容，时间，类型（普通，链接付费章节）}
CREATE TABLE `news`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '新闻表主键id',
  `aid` int(11) UNSIGNED NOT NULL COMMENT '关联文章表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `coverimg_path` varchar(255) NOT NULL COMMENT '封面图片路径',
  `content` varchar(20000) DEFAULT '' COMMENT '内容',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>普通，1>链接付费章节',
  PRIMARY KEY (`id`),
  KEY (`aid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 行业动态表{id，封面图片路径，标题，内容，时间}
CREATE TABLE `industry_dynamics`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '新闻表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `coverimg_path` varchar(255) NOT NULL COMMENT '封面图片路径',
  `content` varchar(20000) NOT NULL COMMENT '内容',
  `ctime` char(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 目录表{id，标题，排序，类型（毛料，成品）}
CREATE TABLE `catalogue`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '目录表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>毛料，1>成品',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 文章表{id，关联目录表主键id，标题，内容，阅读定价，时间，类型（付费阅读，工作号免费阅读）}
CREATE TABLE `article`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '文章表主键id',
  `cid` int(11) UNSIGNED NOT NULL COMMENT '目录表主键id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` varchar(50000) NOT NULL COMMENT '内容',
  `price` decimal(14,2) UNSIGNED NOT NULL COMMENT '阅读定价',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>付费阅读，1>工作号免费阅读',
  PRIMARY KEY (`id`),
  KEY (`cid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 阅读消费表{id，关联用户表主键id，关联文章表主键id，消费金额，时间，类型（付费阅读，工作号免费阅读）}
CREATE TABLE `read_expense`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '阅读消费表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `aid` int(11) UNSIGNED NOT NULL COMMENT '关联文章表主键id',
  `money` decimal(14,2) UNSIGNED NOT NULL COMMENT '消费金额',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>付费阅读，1>工作号免费阅读',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`aid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 商品表{id，名称，搜索关键字，封面图片路径（序列化数组），规格（序列化数组），市场价，促销价，详情，库存，时间，商品类型（正常，热点），类型（毛料，成品），状态（上架，下架）}
CREATE TABLE  `goods`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品表主键id',
  `cname` varchar(255) NOT NULL COMMENT '名称',
  `keywords` varchar(255) NOT NULL COMMENT '搜索关键字',
  `cover_path` varchar(500) NOT NULL COMMENT '封面图片路径（序列化数组）',
  `specification` varchar(255) NOT NULL COMMENT '规格（序列化数组）',
  `market_price` decimal(14,2) UNSIGNED NOT NULL COMMENT '市场价',
  `promotion_price` decimal(14,2) UNSIGNED NOT NULL COMMENT '促销价',
  `details` varchar(50000) NOT NULL COMMENT '详情',
  `inventory` smallint(9) UNSIGNED NOT NULL COMMENT '库存',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `gtype` tinyint(1) UNSIGNED NOT NULL COMMENT '商品类型？0>正常，1>热点',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>毛料，1>成品',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>上架，1>下架',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 商品评价表{id，关联用户表主键id，关联商品表主键id，商品规格，内容，时间，类型（好评，中评，差评）}
CREATE TABLE `goods_estimate`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品评价表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `gid` int(11) UNSIGNED NOT NULL COMMENT '关联商品表主键id',
  `specification` varchar(255) NOT NULL COMMENT '商品规格',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>好评，1>中评，2>差评',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`gid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 购物车表{id，关联用户表主键id，关联商品表主键id，规格，数量，时间}
CREATE TABLE `shop_cart`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '购物车表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `gid` int(11) UNSIGNED NOT NULL COMMENT '关联商品表主键id',
  `specification` varchar(255) NOT NULL COMMENT '规格',
  `quantity` tinyint(3) UNSIGNED NOT NULL COMMENT '数量',
  `ctime` char(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`gid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 收货地址表{id，关联用户表主键id，收货人，联系电话，收货地址，状态（正常，默认）}
CREATE TABLE `receiver_address`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '收货地址表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `consignee` varchar(25) NOT NULL COMMENT '收货人',
  `contact_number` varchar(25) NOT NULL COMMENT '联系电话',
  `address` varchar(255) NOT NULL COMMENT '收货地址',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>默认',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 订单表{id，关联用户表主键id，商品封面路径（序列化数组），商品名称（序列化数组），商品规格（序列化数组），购买数量（序列化数组），商品单价（序列化数组），合计价格，订单编号，收货信息，买家留言，下单时间，发货时间，操作时间，类型（0>待付款，1>待发货，2>待收货，3>待评价，4>售后），状态（0>正常，1>取消订单，2>订单超时，3>申请退款，4>退款失败，5>退款成功）}
CREATE TABLE `indent`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '订单表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `goods_coverpath` varchar(1000) NOT NULL COMMENT '商品封面路径（序列化数组）',
  `goods_name` varchar(1000) NOT NULL COMMENT '商品名称（序列化数组）',
  `goods_specification` varchar(1000) NOT NULL COMMENT '商品规格（序列化数组）',
  `goods_quantity` varchar(1000) NOT NULL COMMENT '购买数量（序列化数组）',
  `goods_price` varchar(1000) NOT NULL COMMENT '商品单价（序列化数组）',
  `total_price` decimal(14,2) UNSIGNED NOT NULL COMMENT '合计价格',
  `serial_number` varchar(50) NOT NULL COMMENT '订单编号',
  `receiver_info` varchar(500) NOT NULL COMMENT '收货信息',
  `message` varchar(255) NOT NULL COMMENT '买家留言',
  `dtime` char(10) NOT NULL COMMENT '下单时间',
  `stime` char(10) NOT NULL COMMENT '发货时间',
  `ctime` char(10) NOT NULL COMMENT '操作时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>待付款，1>待发货，2>待收货，3>待评价，4>售后',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>取消订单，2>订单超时，3>申请退款，4>退款失败，5>退款成功',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 客服用户表{id，父级id，工作号，姓名，收入金额，时间，状态（正常，冻结）}
CREATE TABLE `service_user`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '客服用户表主键id',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '父级id',
  `jobnumber` varchar(25) NOT NULL COMMENT '工作号',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `income` decimal(14,2) UNSIGNED NOT NULL COMMENT '收入金额',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>冻结',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 站点配置表{id，版权所有，提成百分比，充值百分比，状态（开启站点，关闭站点）}
CREATE TABLE `website_config`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '站点配置表主键id',
  `copyright` varchar(255) NOT NULL COMMENT '版权所有',
  `royalties` tinyint(3) UNSIGNED NOT NULL COMMENT '提成百分比',
  `pay` tinyint(3) UNSIGNED NOT NULL COMMENT '充值百分比',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>开启站点，1>关闭站点',
  `ctime` char(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 充值记录表{id，关联用户表主键id，金额，时间，类型（正常充值，工作号优惠充值）}
CREATE TABLE `pay_record`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '充值记录表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户表主键id',
  `money` decimal(14,2) UNSIGNED NOT NULL COMMENT '金额',
  `ctime` char(10) NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>正常充值，1>工作号优惠充值',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 客服打款记录{id，关联客服用户表主键id，金额，时间}
CREATE TABLE `remittance_record`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '充值记录表主键id',
  `suid` int(11) UNSIGNED NOT NULL COMMENT '关联客服用户表主键id',
  `money` decimal(14,2) UNSIGNED NOT NULL COMMENT '金额',
  `ctime` char(10) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY (`suid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;





