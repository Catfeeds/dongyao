/*
Navicat MySQL Data Transfer

Source Server         : manong_yaho_cc
Source Server Version : 50554
Source Host           : 47.91.231.52:3306
Source Database       : manong_yaho_cc

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2019-01-11 13:36:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dy_config
-- ----------------------------
DROP TABLE IF EXISTS `dy_config`;
CREATE TABLE `dy_config` (
  `id` int(10) NOT NULL,
  `bktime` datetime DEFAULT NULL COMMENT '报名开始时间',
  `bjtime` datetime DEFAULT NULL COMMENT '报名结束时间',
  `gbtime` datetime DEFAULT NULL COMMENT '公布时间',
  `tktime` datetime DEFAULT NULL COMMENT '投票开始时间',
  `tjtime` datetime DEFAULT NULL COMMENT '投票结束时间',
  `addtime` datetime DEFAULT NULL COMMENT '修改时间',
  `member` varchar(255) DEFAULT NULL COMMENT '升级会员金额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_config
-- ----------------------------
INSERT INTO `dy_config` VALUES ('1', '2018-09-01 00:00:00', '2018-09-25 00:00:00', '2018-10-07 00:00:00', '2018-09-28 09:00:00', '2018-10-05 16:00:00', '2018-09-26 17:18:36', '199');

-- ----------------------------
-- Table structure for dy_friend
-- ----------------------------
DROP TABLE IF EXISTS `dy_friend`;
CREATE TABLE `dy_friend` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL COMMENT '用户的id',
  `friendpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `friendname` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `addtime` datetime DEFAULT NULL COMMENT '投票时间',
  `fid` int(10) DEFAULT NULL COMMENT '好友id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_friend
-- ----------------------------
INSERT INTO `dy_friend` VALUES ('37', '77', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', 'SS', '2018-09-26 16:54:53', '30');
INSERT INTO `dy_friend` VALUES ('36', '75', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', 'SS', '2018-09-25 16:52:18', '30');
INSERT INTO `dy_friend` VALUES ('34', '68', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', 'SS', '2018-09-24 16:50:11', '30');
INSERT INTO `dy_friend` VALUES ('35', '74', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', 'SS', '2018-09-25 16:52:15', '30');

-- ----------------------------
-- Table structure for dy_login
-- ----------------------------
DROP TABLE IF EXISTS `dy_login`;
CREATE TABLE `dy_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `addlogin` datetime DEFAULT NULL COMMENT '登陆时间',
  `userid` int(10) DEFAULT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_login
-- ----------------------------
INSERT INTO `dy_login` VALUES ('37', 'solo', '2018-12-24 17:23:07', '35');
INSERT INTO `dy_login` VALUES ('36', 'solo', '2018-12-24 17:20:18', '35');
INSERT INTO `dy_login` VALUES ('38', 'solo', '2018-12-25 10:05:54', '35');
INSERT INTO `dy_login` VALUES ('39', 'solo', '2018-12-25 13:42:20', '35');
INSERT INTO `dy_login` VALUES ('40', 'solo', '2018-12-25 13:49:09', '35');
INSERT INTO `dy_login` VALUES ('41', 'solo', '2018-12-25 13:49:37', '35');
INSERT INTO `dy_login` VALUES ('42', 'solo', '2018-12-25 13:50:00', '35');
INSERT INTO `dy_login` VALUES ('43', 'solo', '2018-12-25 14:16:27', '35');
INSERT INTO `dy_login` VALUES ('44', 'solo', '2018-12-25 14:22:49', '35');
INSERT INTO `dy_login` VALUES ('45', 'solo', '2018-12-26 08:37:49', '35');
INSERT INTO `dy_login` VALUES ('46', 'solo', '2018-12-26 08:43:22', '35');
INSERT INTO `dy_login` VALUES ('47', 'solo', '2018-12-26 08:43:26', '35');
INSERT INTO `dy_login` VALUES ('48', 'solo', '2018-12-26 08:43:27', '35');
INSERT INTO `dy_login` VALUES ('49', 'solo', '2018-12-26 08:43:27', '35');
INSERT INTO `dy_login` VALUES ('50', 'solo', '2018-12-26 08:43:27', '35');
INSERT INTO `dy_login` VALUES ('51', 'solo', '2018-12-26 08:43:27', '35');
INSERT INTO `dy_login` VALUES ('52', 'solo', '2018-12-26 08:43:27', '35');
INSERT INTO `dy_login` VALUES ('53', 'solo', '2018-12-26 08:43:28', '35');
INSERT INTO `dy_login` VALUES ('54', 'solo', '2018-12-26 08:43:28', '35');
INSERT INTO `dy_login` VALUES ('55', 'solo', '2018-12-26 08:43:28', '35');
INSERT INTO `dy_login` VALUES ('56', 'solo', '2018-12-26 08:43:28', '35');
INSERT INTO `dy_login` VALUES ('57', 'solo', '2018-12-26 08:44:01', '35');
INSERT INTO `dy_login` VALUES ('58', 'solo', '2018-12-26 08:44:54', '35');
INSERT INTO `dy_login` VALUES ('59', 'solo', '2018-12-26 18:25:12', '35');
INSERT INTO `dy_login` VALUES ('60', 'solo', '2018-12-27 16:07:48', '35');
INSERT INTO `dy_login` VALUES ('61', 'solo', '2018-12-27 16:24:37', '35');
INSERT INTO `dy_login` VALUES ('62', 'solo', '2018-12-27 16:33:05', '35');
INSERT INTO `dy_login` VALUES ('63', 'solos', '2018-12-27 17:26:01', '35');
INSERT INTO `dy_login` VALUES ('64', 'solos', '2018-12-27 17:28:43', '35');
INSERT INTO `dy_login` VALUES ('65', 'solos', '2018-12-27 17:29:01', '35');
INSERT INTO `dy_login` VALUES ('66', 'solos', '2018-12-27 17:29:38', '35');
INSERT INTO `dy_login` VALUES ('67', 'solos', '2018-12-27 17:36:08', '35');
INSERT INTO `dy_login` VALUES ('68', 'solos', '2018-12-27 17:51:29', '35');
INSERT INTO `dy_login` VALUES ('69', 'solos', '2018-12-27 17:53:07', '35');
INSERT INTO `dy_login` VALUES ('70', 'solos', '2018-12-27 17:54:46', '35');
INSERT INTO `dy_login` VALUES ('71', 'solos', '2018-12-27 20:00:56', '35');
INSERT INTO `dy_login` VALUES ('72', 'solos', '2018-12-28 08:43:47', '35');
INSERT INTO `dy_login` VALUES ('73', 'solos', '2019-01-02 16:03:55', '35');
INSERT INTO `dy_login` VALUES ('74', 'admin', '2019-01-02 16:10:06', '36');
INSERT INTO `dy_login` VALUES ('75', 'kiistar', '2019-01-02 19:14:11', '37');
INSERT INTO `dy_login` VALUES ('76', 'solos', '2019-01-04 09:08:32', '35');
INSERT INTO `dy_login` VALUES ('77', 'admin', '2019-01-04 09:46:59', '36');
INSERT INTO `dy_login` VALUES ('78', 'admin', '2019-01-04 15:27:01', '36');
INSERT INTO `dy_login` VALUES ('79', 'solos', '2019-01-04 17:02:59', '35');
INSERT INTO `dy_login` VALUES ('80', 'admin', '2019-01-05 08:32:15', '36');
INSERT INTO `dy_login` VALUES ('81', 'sanlang', '2019-01-05 09:08:06', '38');
INSERT INTO `dy_login` VALUES ('82', 'mini', '2019-01-05 09:12:22', '39');
INSERT INTO `dy_login` VALUES ('83', 'sanlang', '2019-01-05 09:18:39', '38');
INSERT INTO `dy_login` VALUES ('84', 'admin', '2019-01-05 16:05:59', '36');
INSERT INTO `dy_login` VALUES ('85', 'admin', '2019-01-05 16:53:17', '36');
INSERT INTO `dy_login` VALUES ('86', 'xiaoxiao', '2019-01-05 17:05:40', '40');
INSERT INTO `dy_login` VALUES ('87', 'xiaoxiao', '2019-01-05 17:17:50', '40');
INSERT INTO `dy_login` VALUES ('88', 'admin', '2019-01-05 17:52:16', '36');
INSERT INTO `dy_login` VALUES ('89', 'admin', '2019-01-05 17:53:40', '36');
INSERT INTO `dy_login` VALUES ('90', 'admin', '2019-01-06 08:31:07', '36');
INSERT INTO `dy_login` VALUES ('91', 'admin', '2019-01-06 09:06:48', '36');
INSERT INTO `dy_login` VALUES ('92', 'admin', '2019-01-06 10:27:46', '36');
INSERT INTO `dy_login` VALUES ('93', 'solos', '2019-01-06 10:40:10', '35');
INSERT INTO `dy_login` VALUES ('94', 'admin', '2019-01-06 10:53:37', '36');
INSERT INTO `dy_login` VALUES ('95', 'yuyu', '2019-01-06 11:28:40', '41');
INSERT INTO `dy_login` VALUES ('96', 'admin', '2019-01-07 09:22:01', '36');
INSERT INTO `dy_login` VALUES ('97', 'admin', '2019-01-08 08:32:10', '36');
INSERT INTO `dy_login` VALUES ('98', 'admin', '2019-01-08 10:43:24', '36');
INSERT INTO `dy_login` VALUES ('99', 'yuyu', '2019-01-08 14:23:13', '41');
INSERT INTO `dy_login` VALUES ('100', 'yuyu', '2019-01-08 18:40:24', '41');
INSERT INTO `dy_login` VALUES ('101', 'admin', '2019-01-09 10:25:20', '36');
INSERT INTO `dy_login` VALUES ('102', 'admin', '2019-01-09 10:28:16', '36');
INSERT INTO `dy_login` VALUES ('103', 'admin', '2019-01-09 10:38:51', '36');
INSERT INTO `dy_login` VALUES ('104', 'admin', '2019-01-09 13:46:27', '36');
INSERT INTO `dy_login` VALUES ('105', 'admin', '2019-01-09 14:03:36', '36');
INSERT INTO `dy_login` VALUES ('106', 'admin', '2019-01-09 14:03:36', '36');
INSERT INTO `dy_login` VALUES ('107', 'admin', '2019-01-09 14:03:47', '36');
INSERT INTO `dy_login` VALUES ('108', 'admin', '2019-01-09 14:04:07', '36');
INSERT INTO `dy_login` VALUES ('109', 'admin', '2019-01-09 17:25:35', '36');
INSERT INTO `dy_login` VALUES ('110', 'admin', '2019-01-09 17:25:35', '36');
INSERT INTO `dy_login` VALUES ('111', 'admin', '2019-01-09 17:35:41', '36');
INSERT INTO `dy_login` VALUES ('112', 'admin', '2019-01-10 08:37:05', '36');
INSERT INTO `dy_login` VALUES ('113', 'admin', '2019-01-10 08:37:05', '36');
INSERT INTO `dy_login` VALUES ('114', 'yuyu', '2019-01-10 10:33:28', '41');
INSERT INTO `dy_login` VALUES ('115', 'admin', '2019-01-10 15:14:41', '36');
INSERT INTO `dy_login` VALUES ('116', 'yuyu', '2019-01-10 15:14:58', '41');
INSERT INTO `dy_login` VALUES ('117', 'admin', '2019-01-11 08:36:31', '36');

-- ----------------------------
-- Table structure for dy_notice
-- ----------------------------
DROP TABLE IF EXISTS `dy_notice`;
CREATE TABLE `dy_notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) DEFAULT NULL COMMENT '用户id',
  `addtime` varchar(255) DEFAULT NULL COMMENT '消息时间',
  `desc` varchar(255) DEFAULT NULL COMMENT '消息内容',
  `money` varchar(255) DEFAULT NULL COMMENT '开通金额',
  `username` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_notice
-- ----------------------------
INSERT INTO `dy_notice` VALUES ('96', '41', '01-10', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg');
INSERT INTO `dy_notice` VALUES ('97', '36', '01-10', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg');
INSERT INTO `dy_notice` VALUES ('99', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg');
INSERT INTO `dy_notice` VALUES ('100', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_notice` VALUES ('101', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_notice` VALUES ('102', '36', '01-11', '续费有误,请联系客服', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_notice` VALUES ('103', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_notice` VALUES ('104', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_notice` VALUES ('105', '36', '01-11', '您的会员组续费成功', '199', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');

-- ----------------------------
-- Table structure for dy_signup
-- ----------------------------
DROP TABLE IF EXISTS `dy_signup`;
CREATE TABLE `dy_signup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `babyname` varchar(255) DEFAULT NULL COMMENT '孩子姓名',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话',
  `song` varchar(255) DEFAULT NULL COMMENT '歌曲',
  `age` int(10) DEFAULT NULL COMMENT '年龄',
  `city` varchar(255) DEFAULT NULL COMMENT '市',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `video` varchar(255) DEFAULT NULL COMMENT '视频地址',
  `detailed` varchar(255) DEFAULT NULL COMMENT '参赛宣言',
  `votes` int(10) DEFAULT '0' COMMENT '票数',
  `status` varchar(255) DEFAULT '1' COMMENT '1待审核  2通过',
  `addtime` datetime DEFAULT NULL COMMENT '添加时间',
  `uid` int(10) DEFAULT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_signup
-- ----------------------------
INSERT INTO `dy_signup` VALUES ('73', 'SS', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', 'NN', '13658952270', '唱歌', '4', null, '山东省济南市', null, '123', '6', '2', '2018-09-26 16:48:13', '30');
INSERT INTO `dy_signup` VALUES ('68', 'A ', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLzMxclt5bicHhLhtmZf4gSa75cTDA2Ic19rfx1jicicQHkWTt4CzOBMFgmmqFo6epm0cLFS9yCIdB2A/132', '秀芹', '15054123666', '追梦赤子心', '8', '芜湖市', '安徽省', 'http://tou.dongyaods.com/public/uploads/20180926/56b41eb5bb5434f20db659c081dcc9c9.mp4', '我就是我', '2', '2', '2018-09-26 14:19:25', '3');
INSERT INTO `dy_signup` VALUES ('89', null, 'http://tou.dongyaods.com/static/upload/3e2447351fb83c32/47bf85dfce8af27a.jpg', '11', null, null, null, null, '123', '', '123', '132', '2', '2018-09-27 08:41:14', null);
INSERT INTO `dy_signup` VALUES ('90', null, 'http://tou.dongyaods.com/static/upload/3e2447351fb83c32/47bf85dfce8af27a.jpg', '11', null, null, null, null, '1', '', '1', '11', '1', '2018-09-27 09:21:53', null);

-- ----------------------------
-- Table structure for dy_up
-- ----------------------------
DROP TABLE IF EXISTS `dy_up`;
CREATE TABLE `dy_up` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) DEFAULT NULL COMMENT '用户id',
  `addtime` varchar(255) DEFAULT NULL COMMENT '消息时间',
  `price` int(10) DEFAULT '0' COMMENT '充值积分',
  `money` int(10) DEFAULT '0' COMMENT '充值余额',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名称',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_up
-- ----------------------------
INSERT INTO `dy_up` VALUES ('101', '41', '2019-01-08 18:03:37', '20', '0', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg');
INSERT INTO `dy_up` VALUES ('100', '41', '2019-01-08 18:03:34', '10', '0', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg');
INSERT INTO `dy_up` VALUES ('104', '36', '2019-01-10 09:20:45', '100', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg');
INSERT INTO `dy_up` VALUES ('99', '41', '2019-01-08 18:03:33', '10', '0', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg');
INSERT INTO `dy_up` VALUES ('102', '41', '2019-01-08 18:03:41', '30', '0', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg');
INSERT INTO `dy_up` VALUES ('103', '41', '2019-01-08 18:03:44', '40', '0', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg');
INSERT INTO `dy_up` VALUES ('105', '36', '2019-01-11 08:56:45', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg');
INSERT INTO `dy_up` VALUES ('106', '36', '2019-01-11 09:28:37', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('107', '36', '2019-01-11 09:29:01', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('108', '36', '2019-01-11 09:29:04', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('109', '36', '2019-01-11 09:29:06', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('110', '36', '2019-01-11 09:29:07', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('111', '36', '2019-01-11 09:29:08', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('112', '36', '2019-01-11 09:29:09', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('113', '36', '2019-01-11 09:29:10', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('114', '36', '2019-01-11 09:29:10', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('115', '36', '2019-01-11 09:29:11', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('116', '36', '2019-01-11 09:29:12', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');
INSERT INTO `dy_up` VALUES ('117', '36', '2019-01-11 09:29:14', '10', '0', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg');

-- ----------------------------
-- Table structure for dy_users
-- ----------------------------
DROP TABLE IF EXISTS `dy_users`;
CREATE TABLE `dy_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `addtime` datetime DEFAULT NULL COMMENT '添加时间',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `email` varchar(255) DEFAULT NULL COMMENT '电子邮箱',
  `phone` varchar(20) DEFAULT NULL COMMENT '电话',
  `qq` varchar(20) DEFAULT NULL COMMENT 'qq',
  `descr` varchar(255) DEFAULT NULL COMMENT '签名',
  `gender` int(11) DEFAULT NULL COMMENT '性别',
  `members` int(10) DEFAULT NULL COMMENT '会员组:1普通会员  2钻石会员',
  `money` varchar(255) DEFAULT NULL COMMENT '余额(RMB)',
  `price` int(10) DEFAULT NULL COMMENT '积分',
  `opentime` int(10) DEFAULT '0' COMMENT '会员升级时间',
  `duetotime` int(10) DEFAULT '0' COMMENT '会员到期时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_users
-- ----------------------------
INSERT INTO `dy_users` VALUES ('35', 'solos', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', '2018-12-27 16:50:57', 'f5bb0c8de146c67b44babbf4e6584cc0', '976448617@qq.com', '15054129664', '976448617', '用代码掌控世界.', '1', '1', '10', '480', '0', '0');
INSERT INTO `dy_users` VALUES ('36', 'admin', 'http://manong.yaho.cc/public/uploads/20190111/d0089556d5e1f520af05f4633d6c0875.jpg', '2019-01-11 09:07:28', 'f5bb0c8de146c67b44babbf4e6584cc0', '976448617@qq.com', '135062399611', '20153684112', '无所谓、谁都好、', '1', '2', '8686', '230', '1547169382', '1578455722');
INSERT INTO `dy_users` VALUES ('37', 'kiistar', null, '2019-01-02 19:14:05', 'f5bb0c8de146c67b44babbf4e6584cc0', 'kiistar@163.com', null, null, null, null, '1', '10', '100', '0', '0');
INSERT INTO `dy_users` VALUES ('38', 'sanlang', 'http://manong.yaho.cc/public/uploads/20190105/2c16bb58fd5a86db26e084e551f2367c.jpg', '2019-01-05 09:07:59', '3fd6ebe43dab8b6ce6d033a5da6e6ac5', '903762348@qq.com', null, null, null, null, '2', '', '90', '0', '0');
INSERT INTO `dy_users` VALUES ('39', 'mini', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', '2019-01-05 09:12:16', '3fd6ebe43dab8b6ce6d033a5da6e6ac5', '5632365558@qq.com', null, null, null, null, '1', '0', '50', '0', '0');
INSERT INTO `dy_users` VALUES ('40', 'xiaoxiao', null, '2019-01-05 17:05:34', '3fd6ebe43dab8b6ce6d033a5da6e6ac5', '976448617@qq.com', null, null, null, null, '1', '0', '0', '0', '0');
INSERT INTO `dy_users` VALUES ('41', 'yuyu', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', '2019-01-06 11:29:20', '3fd6ebe43dab8b6ce6d033a5da6e6ac5', '63521648@qq.com', '18335290473', '9652684@qq.com', '时间就是金钱、', '1', '2', '0', '0', '1546930580', '1578465898');

-- ----------------------------
-- Table structure for dy_video
-- ----------------------------
DROP TABLE IF EXISTS `dy_video`;
CREATE TABLE `dy_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `video` varchar(255) DEFAULT NULL COMMENT '视频地址',
  `total` varchar(255) DEFAULT NULL COMMENT '标题',
  `pic` varchar(255) DEFAULT NULL COMMENT '封面',
  `uid` int(10) DEFAULT NULL COMMENT '用户id',
  `status` varchar(255) DEFAULT NULL COMMENT '1为发布  2未发布',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_video
-- ----------------------------
INSERT INTO `dy_video` VALUES ('45', 'http://bd.toupiao.com/public/uploads/20180911/f51b701074b1a542d7f684296830db53.mp4', '撞脸TFBOYS 非偶像派活力炸裂《成长维他命》', 'http://bd.toupiao.com/static/upload/c4fe8d9161877988/de217601fd085cc0.jpg', '40', '2', '2018-09-11 16:26:57');
INSERT INTO `dy_video` VALUES ('41', 'http://bd.toupiao.com/public/uploads/20180911/f51b701074b1a542d7f684296830db53.mp4', '杨锡州真情告白《dear friend》引全场泪崩', 'http://bd.toupiao.com/static/upload/1f0784cdc3e1fec6/5a1bf5501eab5a69.jpg', '12', '2', '2018-09-11 15:55:37');
INSERT INTO `dy_video` VALUES ('42', 'http://bd.toupiao.com/public/uploads/20180911/f51b701074b1a542d7f684296830db53.mp4', '曹格励志金曲《fly》引全场尖叫', 'http://bd.toupiao.com/static/upload/544ab24ab1ccb43a/dbd54c6be042cb20.jpg', '12', '2', '2018-09-11 15:55:15');

-- ----------------------------
-- Table structure for store_announ
-- ----------------------------
DROP TABLE IF EXISTS `store_announ`;
CREATE TABLE `store_announ` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '公告标题',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '使用状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_announ
-- ----------------------------
INSERT INTO `store_announ` VALUES ('52', '976448617 ', '0', '1', '0', '2019-01-03 16:24:37', '一天前开通了会员');
INSERT INTO `store_announ` VALUES ('53', 'solo', '0', '1', '0', '2019-01-03 16:36:00', '2天前开通了超级会员');
INSERT INTO `store_announ` VALUES ('54', 'admin', '0', '1', '0', '2019-01-03 16:48:10', '1天前开通了白银会员');

-- ----------------------------
-- Table structure for store_audit
-- ----------------------------
DROP TABLE IF EXISTS `store_audit`;
CREATE TABLE `store_audit` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '产品标题',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '使用状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `userid` int(10) DEFAULT NULL COMMENT '用户id',
  `addtime` varchar(255) DEFAULT NULL COMMENT '插入时间',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名称',
  `pid` int(10) DEFAULT NULL COMMENT '产品顶级分类+',
  `goods_id` int(11) DEFAULT NULL COMMENT '产品id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_audit
-- ----------------------------
INSERT INTO `store_audit` VALUES ('68', '最新网狐荣耀版整理、编译和搭建教程', '0', '1', '0', '2019-01-03 13:45:47', '35', '2019-01-03 13:45:47', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '6', '44');
INSERT INTO `store_audit` VALUES ('69', 'WPS Office（*VIP*）v11.3.3直装/破解/稻壳/会员', '0', '1', '0', '2019-01-03 13:45:52', '35', '2019-01-03 13:45:52', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '5', '43');
INSERT INTO `store_audit` VALUES ('70', '[版本A]人人商城源码v2 3.10.8支持3.9.43升级上来开源修复积分商城运费未支付却显示', '0', '1', '0', '2019-01-03 13:45:55', '35', '2019-01-03 13:45:55', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '3', '42');
INSERT INTO `store_audit` VALUES ('71', '连环夺bao游戏源码，带控制库存机器人真正运营级别', '0', '1', '0', '2019-01-03 13:45:57', '35', '2019-01-03 13:45:57', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '2', '41');
INSERT INTO `store_audit` VALUES ('72', '本然良品微信公排理财福利三级分销商城系统源码|基于ThinkPHP开发+安装教程', '0', '1', '0', '2019-01-03 13:46:00', '35', '2019-01-03 13:46:00', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '1', '40');
INSERT INTO `store_audit` VALUES ('73', '微擎微赞模块:志汇-超级外卖 餐饮外卖扫码点餐小程序5.9.3 解密开源版微信源码', '0', '1', '0', '2019-01-03 13:46:01', '35', '2019-01-03 13:46:01', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '4', '39');
INSERT INTO `store_audit` VALUES ('74', '【微擎微赞模块】米波现场7.1.0 支持3D签到 微现场大屏幕 互动 留言墙', '0', '1', '1', '2019-01-03 13:46:03', null, '2019-01-03 13:46:03', null, null, '3', '38');
INSERT INTO `store_audit` VALUES ('75', '爆款抖音运营推广全攻略：如何打造爆款，轻松赚钱！', '0', '1', '0', '2019-01-03 13:46:05', '35', '2019-01-03 13:46:05', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '4', '37');
INSERT INTO `store_audit` VALUES ('76', '1', '0', '1', '0', '2019-01-07 15:27:04', '36', '2019-01-07 15:27:04', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '1', '46');
INSERT INTO `store_audit` VALUES ('77', '2', '0', '1', '0', '2019-01-07 15:30:21', '36', '2019-01-07 15:30:21', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '1', '47');
INSERT INTO `store_audit` VALUES ('78', '1', '0', '1', '0', '2019-01-07 15:59:05', '36', '2019-01-07 15:59:05', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '6', '49');
INSERT INTO `store_audit` VALUES ('79', '1', '0', '1', '0', '2019-01-07 16:26:24', '36', '2019-01-07 16:26:24', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '3', '50');
INSERT INTO `store_audit` VALUES ('80', '1', '0', '1', '0', '2019-01-07 16:43:23', '36', '2019-01-07 16:43:23', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '5', '52');
INSERT INTO `store_audit` VALUES ('81', '11', '0', '1', '0', '2019-01-07 16:57:55', '36', '2019-01-07 16:57:55', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '4', '54');

-- ----------------------------
-- Table structure for store_database
-- ----------------------------
DROP TABLE IF EXISTS `store_database`;
CREATE TABLE `store_database` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `database` varchar(255) DEFAULT '' COMMENT '数据库名称',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '数据库排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '数据库状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_database
-- ----------------------------
INSERT INTO `store_database` VALUES ('1', '织梦cms', '0', '1', '1', '2018-12-16 12:31:58');
INSERT INTO `store_database` VALUES ('2', 'mysql', '0', '1', '1', '2018-12-16 12:48:16');
INSERT INTO `store_database` VALUES ('3', 'Mysql', '0', '1', '1', '2018-12-16 12:50:52');
INSERT INTO `store_database` VALUES ('4', 'Access', '4', '1', '0', '2018-12-16 13:04:23');
INSERT INTO `store_database` VALUES ('5', 'Mssqi', '2', '1', '0', '2018-12-16 13:05:04');
INSERT INTO `store_database` VALUES ('6', 'Oracle', '3', '1', '0', '2018-12-16 13:05:26');
INSERT INTO `store_database` VALUES ('7', 'Mysql', '1', '1', '0', '2018-12-16 13:06:08');
INSERT INTO `store_database` VALUES ('8', '其他', '5', '1', '0', '2018-12-17 10:58:09');

-- ----------------------------
-- Table structure for store_express
-- ----------------------------
DROP TABLE IF EXISTS `store_express`;
CREATE TABLE `store_express` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `express_title` varchar(50) DEFAULT '' COMMENT '快递公司名称',
  `express_code` varchar(50) DEFAULT '' COMMENT '快递公司代码',
  `express_desc` text COMMENT '快递公司描述',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态(0.无效,1.有效)',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '排序',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COMMENT='商城快递配置';

-- ----------------------------
-- Records of store_express
-- ----------------------------
INSERT INTO `store_express` VALUES ('5', 'AAE全球专递', 'aae', '顺丰快递公司', '0', '0', '0', '2017-09-12 11:53:40');
INSERT INTO `store_express` VALUES ('6', '安捷快递', 'anjie', '', '0', '0', '0', '2017-09-13 15:27:26');
INSERT INTO `store_express` VALUES ('7', '安信达快递', 'anxindakuaixi', null, '0', '0', '0', '2017-09-13 16:05:19');
INSERT INTO `store_express` VALUES ('8', '彪记快递', 'biaojikuaidi', null, '0', '0', '0', '2017-09-13 16:05:26');
INSERT INTO `store_express` VALUES ('9', 'BHT', 'bht', '', '0', '0', '0', '2017-09-13 16:05:37');
INSERT INTO `store_express` VALUES ('10', '百福东方国际物流', 'baifudongfang', null, '0', '0', '0', '2017-09-13 16:05:41');
INSERT INTO `store_express` VALUES ('11', '中国东方（COE）', 'coe', null, '0', '0', '0', '2017-09-13 16:05:48');
INSERT INTO `store_express` VALUES ('12', '长宇物流', 'changyuwuliu', null, '0', '0', '0', '2017-09-13 16:05:58');
INSERT INTO `store_express` VALUES ('13', '大田物流', 'datianwuliu', null, '0', '0', '0', '2017-09-13 16:06:06');
INSERT INTO `store_express` VALUES ('14', '德邦物流', 'debangwuliu', null, '1', '1', '0', '2017-09-13 16:06:14');
INSERT INTO `store_express` VALUES ('15', 'DHL', 'dhl', null, '0', '0', '0', '2017-09-13 16:06:24');
INSERT INTO `store_express` VALUES ('16', 'DPEX', 'dpex', null, '0', '0', '0', '2017-09-13 16:06:29');
INSERT INTO `store_express` VALUES ('17', 'd速快递', 'dsukuaidi', null, '0', '0', '0', '2017-09-13 16:06:34');
INSERT INTO `store_express` VALUES ('18', '递四方', 'disifang', null, '0', '0', '0', '2017-09-13 16:06:40');
INSERT INTO `store_express` VALUES ('19', 'EMS快递', 'ems', '', '1', '0', '0', '2017-09-13 16:06:47');
INSERT INTO `store_express` VALUES ('20', 'FEDEX（国外）', 'fedex', null, '0', '0', '0', '2017-09-13 16:06:56');
INSERT INTO `store_express` VALUES ('21', '飞康达物流', 'feikangda', null, '0', '0', '0', '2017-09-13 16:07:03');
INSERT INTO `store_express` VALUES ('22', '凤凰快递', 'fenghuangkuaidi', null, '0', '0', '0', '2017-09-13 16:07:10');
INSERT INTO `store_express` VALUES ('23', '飞快达', 'feikuaida', null, '0', '0', '0', '2017-09-13 16:07:16');
INSERT INTO `store_express` VALUES ('24', '国通快递', 'guotongkuaidi', null, '0', '0', '0', '2017-09-13 16:07:27');
INSERT INTO `store_express` VALUES ('25', '港中能达物流', 'ganzhongnengda', null, '0', '0', '0', '2017-09-13 16:07:33');
INSERT INTO `store_express` VALUES ('26', '广东邮政物流', 'guangdongyouzhengwuliu', null, '0', '0', '0', '2017-09-13 16:08:22');
INSERT INTO `store_express` VALUES ('27', '共速达', 'gongsuda', null, '0', '0', '0', '2017-09-13 16:08:48');
INSERT INTO `store_express` VALUES ('28', '汇通快运', 'huitongkuaidi', null, '0', '0', '0', '2017-09-13 16:08:56');
INSERT INTO `store_express` VALUES ('29', '恒路物流', 'hengluwuliu', null, '0', '0', '0', '2017-09-13 16:09:02');
INSERT INTO `store_express` VALUES ('30', '华夏龙物流', 'huaxialongwuliu', null, '0', '0', '0', '2017-09-13 16:09:12');
INSERT INTO `store_express` VALUES ('31', '海红', 'haihongwangsong', null, '0', '0', '0', '2017-09-13 16:09:20');
INSERT INTO `store_express` VALUES ('32', '海外环球', 'haiwaihuanqiu', null, '0', '0', '0', '2017-09-13 16:09:27');
INSERT INTO `store_express` VALUES ('33', '佳怡物流', 'jiayiwuliu', null, '0', '0', '0', '2017-09-13 16:09:35');
INSERT INTO `store_express` VALUES ('34', '京广速递', 'jinguangsudikuaijian', null, '0', '0', '0', '2017-09-13 16:09:42');
INSERT INTO `store_express` VALUES ('35', '急先达', 'jixianda', null, '0', '0', '0', '2017-09-13 16:09:49');
INSERT INTO `store_express` VALUES ('36', '佳吉物流', 'jjwl', null, '0', '0', '0', '2017-09-13 16:10:01');
INSERT INTO `store_express` VALUES ('37', '加运美物流', 'jymwl', null, '0', '0', '0', '2017-09-13 16:10:13');
INSERT INTO `store_express` VALUES ('38', '金大物流', 'jindawuliu', null, '0', '0', '0', '2017-09-13 16:10:22');
INSERT INTO `store_express` VALUES ('39', '嘉里大通', 'jialidatong', null, '0', '0', '0', '2017-09-13 16:10:33');
INSERT INTO `store_express` VALUES ('40', '晋越快递', 'jykd', null, '0', '0', '0', '2017-09-13 16:10:40');
INSERT INTO `store_express` VALUES ('41', '快捷速递', 'kuaijiesudi', null, '0', '0', '0', '2017-09-13 16:10:49');
INSERT INTO `store_express` VALUES ('42', '联邦快递（国内）', 'lianb', null, '0', '0', '0', '2017-09-13 16:10:58');
INSERT INTO `store_express` VALUES ('43', '联昊通物流', 'lianhaowuliu', null, '0', '0', '0', '2017-09-13 16:11:07');
INSERT INTO `store_express` VALUES ('44', '龙邦物流', 'longbanwuliu', null, '0', '0', '0', '2017-09-13 16:11:15');
INSERT INTO `store_express` VALUES ('45', '立即送', 'lijisong', null, '0', '0', '0', '2017-09-13 16:11:25');
INSERT INTO `store_express` VALUES ('46', '乐捷递', 'lejiedi', null, '0', '0', '0', '2017-09-13 16:11:36');
INSERT INTO `store_express` VALUES ('47', '民航快递', 'minghangkuaidi', null, '0', '0', '0', '2017-09-13 16:11:45');
INSERT INTO `store_express` VALUES ('48', '美国快递', 'meiguokuaidi', null, '0', '0', '0', '2017-09-13 16:11:53');
INSERT INTO `store_express` VALUES ('49', '门对门', 'menduimen', null, '0', '0', '0', '2017-09-13 16:12:01');
INSERT INTO `store_express` VALUES ('50', 'OCS', 'ocs', null, '0', '0', '0', '2017-09-13 16:12:10');
INSERT INTO `store_express` VALUES ('51', '配思货运', 'peisihuoyunkuaidi', null, '0', '0', '0', '2017-09-13 16:12:18');
INSERT INTO `store_express` VALUES ('52', '全晨快递', 'quanchenkuaidi', null, '0', '0', '0', '2017-09-13 16:12:26');
INSERT INTO `store_express` VALUES ('53', '全峰快递', 'quanfengkuaidi', null, '0', '0', '0', '2017-09-13 16:12:34');
INSERT INTO `store_express` VALUES ('54', '全际通物流', 'quanjitong', null, '0', '0', '0', '2017-09-13 16:12:41');
INSERT INTO `store_express` VALUES ('55', '全日通快递', 'quanritongkuaidi', null, '0', '0', '0', '2017-09-13 16:12:49');
INSERT INTO `store_express` VALUES ('56', '全一快递', 'quanyikuaidi', null, '0', '0', '0', '2017-09-13 16:12:56');
INSERT INTO `store_express` VALUES ('57', '如风达', 'rufengda', null, '0', '0', '0', '2017-09-13 16:13:03');
INSERT INTO `store_express` VALUES ('58', '三态速递', 'santaisudi', null, '0', '0', '0', '2017-09-13 16:13:15');
INSERT INTO `store_express` VALUES ('59', '盛辉物流', 'shenghuiwuliu', null, '0', '0', '0', '2017-09-13 16:13:22');
INSERT INTO `store_express` VALUES ('60', '申通', 'shentong', null, '0', '0', '0', '2017-09-13 16:13:34');
INSERT INTO `store_express` VALUES ('61', '顺丰', 'shunfeng', '', '1', '0', '0', '2017-09-13 16:13:41');
INSERT INTO `store_express` VALUES ('62', '速尔物流', 'sue', null, '0', '0', '0', '2017-09-13 16:13:48');
INSERT INTO `store_express` VALUES ('63', '盛丰物流', 'shengfeng', null, '0', '0', '0', '2017-09-13 16:13:55');
INSERT INTO `store_express` VALUES ('64', '赛澳递', 'saiaodi', null, '0', '0', '0', '2017-09-13 16:14:02');
INSERT INTO `store_express` VALUES ('65', '天地华宇', 'tiandihuayu', null, '0', '0', '0', '2017-09-13 16:14:11');
INSERT INTO `store_express` VALUES ('66', '天天快递', 'tiantian', null, '0', '0', '0', '2017-09-13 16:14:19');
INSERT INTO `store_express` VALUES ('67', 'TNT', 'tnt', null, '0', '0', '0', '2017-09-13 16:14:26');
INSERT INTO `store_express` VALUES ('68', 'UPS', 'ups', null, '0', '0', '0', '2017-09-13 16:14:29');
INSERT INTO `store_express` VALUES ('69', '万家物流', 'wanjiawuliu', null, '0', '0', '0', '2017-09-13 16:14:37');
INSERT INTO `store_express` VALUES ('70', '文捷航空速递', 'wenjiesudi', null, '0', '0', '0', '2017-09-13 16:14:46');
INSERT INTO `store_express` VALUES ('71', '伍圆', 'wuyuan', null, '0', '0', '0', '2017-09-13 16:14:52');
INSERT INTO `store_express` VALUES ('72', '万象物流', 'wxwl', null, '0', '0', '0', '2017-09-13 16:15:00');
INSERT INTO `store_express` VALUES ('73', '新邦物流', 'xinbangwuliu', null, '0', '0', '0', '2017-09-13 16:15:06');
INSERT INTO `store_express` VALUES ('74', '信丰物流', 'xinfengwuliu', null, '0', '0', '0', '2017-09-13 16:15:15');
INSERT INTO `store_express` VALUES ('75', '亚风速递', 'yafengsudi', null, '0', '0', '0', '2017-09-13 16:15:23');
INSERT INTO `store_express` VALUES ('76', '一邦速递', 'yibangwuliu', null, '0', '0', '0', '2017-09-13 16:15:30');
INSERT INTO `store_express` VALUES ('77', '优速物流', 'youshuwuliu', null, '0', '0', '0', '2017-09-13 16:15:36');
INSERT INTO `store_express` VALUES ('78', '邮政包裹挂号信', 'youzhengguonei', null, '0', '3', '0', '2017-09-13 16:15:44');
INSERT INTO `store_express` VALUES ('79', '邮政国际包裹挂号信', 'youzhengguoji', null, '0', '2', '0', '2017-09-13 16:15:51');
INSERT INTO `store_express` VALUES ('80', '远成物流', 'yuanchengwuliu', null, '0', '0', '0', '2017-09-13 16:15:57');
INSERT INTO `store_express` VALUES ('81', '圆通速递', 'yuantong', null, '1', '1', '0', '2017-09-13 16:16:03');
INSERT INTO `store_express` VALUES ('82', '源伟丰快递', 'yuanweifeng', null, '0', '0', '0', '2017-09-13 16:16:10');
INSERT INTO `store_express` VALUES ('83', '元智捷诚快递', 'yuanzhijiecheng', null, '0', '0', '0', '2017-09-13 16:16:17');
INSERT INTO `store_express` VALUES ('84', '韵达快运', 'yunda', null, '0', '0', '0', '2017-09-13 16:16:24');
INSERT INTO `store_express` VALUES ('85', '运通快递', 'yuntongkuaidi', null, '0', '0', '0', '2017-09-13 16:16:33');
INSERT INTO `store_express` VALUES ('86', '越丰物流', 'yuefengwuliu', null, '0', '0', '0', '2017-09-13 16:16:40');
INSERT INTO `store_express` VALUES ('87', '源安达', 'yad', null, '0', '0', '0', '2017-09-13 16:16:47');
INSERT INTO `store_express` VALUES ('88', '银捷速递', 'yinjiesudi', null, '0', '0', '0', '2017-09-13 16:16:56');
INSERT INTO `store_express` VALUES ('89', '宅急送', 'zhaijisong', null, '0', '0', '0', '2017-09-13 16:17:03');
INSERT INTO `store_express` VALUES ('90', '中铁快运', 'zhongtiekuaiyun', null, '0', '0', '0', '2017-09-13 16:17:10');
INSERT INTO `store_express` VALUES ('91', '中通速递', 'zhongtong', '', '0', '0', '0', '2017-09-13 16:17:16');
INSERT INTO `store_express` VALUES ('92', '中邮物流', 'zhongyouwuliu', null, '0', '0', '0', '2017-09-13 16:17:27');
INSERT INTO `store_express` VALUES ('93', '忠信达', 'zhongxinda', null, '0', '0', '0', '2017-09-13 16:17:34');
INSERT INTO `store_express` VALUES ('94', '芝麻开门', 'zhimakaimen', null, '0', '0', '0', '2017-09-13 16:17:41');

-- ----------------------------
-- Table structure for store_goods
-- ----------------------------
DROP TABLE IF EXISTS `store_goods`;
CREATE TABLE `store_goods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) DEFAULT '0' COMMENT '品牌类ID  0为无',
  `cate_id` bigint(20) DEFAULT '0' COMMENT '产品分类id',
  `language_id` varchar(100) DEFAULT '0' COMMENT '开发语言类ID  0为无',
  `database_id` varchar(100) DEFAULT '0' COMMENT '数据库类ID  0为无',
  `label` varchar(255) DEFAULT '' COMMENT '标签',
  `downloads` bigint(1) DEFAULT '0' COMMENT '下载次数',
  `goods_title` varchar(255) DEFAULT '' COMMENT '产品名称',
  `goods_content` text COMMENT '产品详细描述',
  `goods_logo` varchar(255) DEFAULT '' COMMENT '产品封面',
  `goods_image` text COMMENT '演示图片地址',
  `goods_video` varchar(500) DEFAULT NULL COMMENT '演示地址',
  `goods_desc` varchar(500) DEFAULT '' COMMENT '产品简述',
  `price` bigint(20) unsigned DEFAULT '0' COMMENT '售价(积分)',
  `click` bigint(20) unsigned DEFAULT '0' COMMENT '点击量',
  `favorite_num` bigint(20) unsigned DEFAULT '0' COMMENT '收藏次数',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '数据排序',
  `status` bigint(1) unsigned DEFAULT '0' COMMENT '状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `recommend` int(11) DEFAULT '2' COMMENT '推荐2为否  1为是',
  `file` varchar(255) DEFAULT NULL COMMENT '压缩包地址',
  `user_id` int(10) DEFAULT NULL COMMENT '用户的id',
  `pid` int(11) DEFAULT NULL COMMENT '上级id',
  `addtime` varchar(255) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COMMENT='商城商品主表';

-- ----------------------------
-- Records of store_goods
-- ----------------------------
INSERT INTO `store_goods` VALUES ('13', '1', '2', 'PHP', 'Mysql', '红色', '24', '最新红色永利1:1棋牌组件+双端APP+完整数据+代理管理,完整运营版本', '<p>最新<a href=\"https://www.codesceo.com/search/keyword-%E7%BA%A2%E8%89%B2%E6%B0%B8%E5%88%A9\" target=\"_blank\">红色</a><a href=\"https://www.codesceo.com/search/keyword-%E6%B0%B8%E5%88%A9\" target=\"_blank\">永利</a><a href=\"https://www.codesceo.com/search/keyword-1:1\" target=\"_blank\">1:1</a><a href=\"https://www.codesceo.com/search/keyword-%E6%A3%8B%E7%89%8C%E7%BB%84%E4%BB%B6\" target=\"_blank\">棋牌</a><a href=\"https://www.codesceo.com/search/keyword-%E7%BB%84%E4%BB%B6\" target=\"_blank\">组件</a>+<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%8C%E7%AB%AFAPP\" target=\"_blank\">双端APP</a>+完整<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>+代理<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a>,完整<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%90%E8%90%A5%E7%89%88%E6%9C%AC\" target=\"_blank\">运营版本</a>。带完善的<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a><a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F\" target=\"_blank\">管理系统</a>，带全面<a href=\"https://www.codesceo.com/search/keyword-%E6%8E%A8%E5%B9%BF%E7%B3%BB%E7%BB%9F\" target=\"_blank\">推广系统</a>，带代理管理系统，控制和代理和原来的一样，别处搭建的价格一般3W以上。很多人在找的版本，放出来了！</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%AD%90%E6%B8%B8%E6%88%8F\" target=\"_blank\">子游戏</a>详情:百人<a href=\"https://www.codesceo.com/search/keyword-%E7%89%8C%E4%B9%9D\" target=\"_blank\">牌九</a>,龙凤斗,百人<a href=\"https://www.codesceo.com/search/keyword-%E7%89%9B%E7%89%9B\" target=\"_blank\">牛牛</a>,<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%8C%E5%85%AB%E6%9D%A0\" target=\"_blank\">二八杠</a>,<a href=\"https://www.codesceo.com/search/keyword-%E6%96%97%E5%9C%B0%E4%B8%BB\" target=\"_blank\">斗地主</a>,<a href=\"https://www.codesceo.com/search/keyword-%E7%99%BE%E5%AE%B6\" target=\"_blank\">百家</a>乐,<a href=\"https://www.codesceo.com/search/keyword-%E7%BA%A2%E9%BB%91%E5%A4%A7%E6%88%98\" target=\"_blank\">红黑大战</a>,蛟龙出海,通比牛牛,抢庄牛牛,李逵劈鱼,<a href=\"https://www.codesceo.com/search/keyword-%E6%89%8E%E9%87%91%E8%8A%B1\" target=\"_blank\">扎</a><a href=\"https://www.codesceo.com/search/keyword-%E9%87%91%E8%8A%B1\" target=\"_blank\">金花</a>水果拉霸</p>\r\n', 'http://manong.yaho.cc/static/upload/68417add94292894/2a8f5643c1b87fc0.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '最新红色永利1:1棋牌组件+双端APP+完整数据+代理管理,完整运营版本。带完善的后台管理系统，带全面推广系统，带代理管理系统，控制和代理和原来的一样，别处搭建的价格一般3W以上。很多人在找的版本，放出来了！\r\n\r\n子游戏详情:百人牌九,龙凤斗,百人牛牛,二八杠,斗地主,百家乐,红黑大战,蛟龙出海,通比牛牛,抢庄牛牛,李逵劈鱼,扎金花 水果拉霸', '20', '250', '0', '0', '1', '0', '2018-12-25 16:32:08', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '2', '12-24');
INSERT INTO `store_goods` VALUES ('14', '1', '9', 'PHP', 'Mysql', '修复,模板,美化', '39', '善恶模板源码二次美化修复版', '<p>善恶自用的模板二次美化修复版！</p>\r\n\r\n<p>修复评论图标不显示，<br />\r\n修复搜索问题<br />\r\n等大量 bug 问题，就不一一举例了。。。<br />\r\n安装方法：将源码上传好，浏览器上输入 域名/install 访问，进行安装即可。<br />\r\n善恶自用的模板二次美化修复版！<br />\r\n修复评论图标不显示，<br />\r\n修复导航问题，<br />\r\n修复搜索问题<br />\r\n等大量 bug 问题，就不一一举例了。。。<br />\r\n安装方法：将源码上传好，浏览器上输入 域名/install 访问，进行安装即可。<br />\r\n善恶自用的模板二次美化修复版！<br />\r\n修复评论图标不显示，<br />\r\n修复搜索问题<br />\r\n等大量 bug 问题，就不一一举例了。。。<br />\r\n安装方法：将源码上传好，浏览器上输入 域名/install 访问，进行安装即可。<br />\r\n善恶自用的模板二次美化修复版！<br />\r\n修复评论图标不显示，<br />\r\n修复导航问题，<br />\r\n修复搜索问题<br />\r\n等大量 bug 问题，就不一一举例了。。。<br />\r\n安装方法：将源码上传好，浏览器上输入 域名/install 访问，进行安装即可。</p>\r\n', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '善恶自用的模板二次美化修复版！\r\n\r\n修复评论图标不显示，\r\n\r\n修复导航问题，\r\n\r\n修复搜索问题\r\n\r\n等大量 bug 问题，就不一一举例了。。。\r\n\r\n安装方法：将源码上传好，浏览器上输入 域名/install 访问，进行安装即可。', '10', '475', '1', '0', '1', '0', '2018-12-26 17:57:49', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('15', '1', '10', 'PHP', 'Mysql', '分销', '24', '微信小说分销源码|基于ThinkPHP框架开发微信小说分销源码下载|内附600多部热门小说', '<p><a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%B0%8F%E8%AF%B4\" target=\"_blank\">微信小说</a><a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E6%BA%90%E7%A0%81\" target=\"_blank\">分销源码</a>基于<a href=\"https://www.codesceo.com/search/keyword-Thinkphp\" target=\"_blank\">Think</a><a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a>框架开发的<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%B0%8F%E8%AF%B4\" target=\"_blank\">微信小说</a><a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E7%B3%BB%E7%BB%9F\" target=\"_blank\">分销系统</a><a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a>源码，是一款基于<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">微信</a><a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">公众号</a>平台开发的小说<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E7%B3%BB%E7%BB%9F\" target=\"_blank\">分销系统</a>源码，</p>\r\n\r\n<p>底层采用<a href=\"https://www.codesceo.com/search/keyword-thinkPHP\" target=\"_blank\">thinkPHP</a>框架作为基础开发，小说分销系统源码<strong>自带600多部热门小说</strong>，<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a>后可直接上线运营，加入了<a href=\"https://www.codesceo.com/search/keyword-%E6%89%B9%E9%87%8F\" target=\"_blank\">批量</a>改价<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，</p>\r\n\r\n<p>短域名推广防封，资源邦独家送火车头企业版+入库<a href=\"https://www.codesceo.com/search/keyword-%E6%8E%A5%E5%8F%A3\" target=\"_blank\">接口</a>，支持<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%80%E9%94%AE%E9%87%87%E9%9B%86\" target=\"_blank\">一键采集</a>小说资源！</p>\r\n\r\n<p>本源码主要是基于<a href=\"https://www.codesceo.com/search/keyword-thinkPHP\" target=\"_blank\">thinkPHP</a>3.2开发的小说分销<a href=\"https://www.codesceo.com/search/keyword-%E5%B0%8F%E8%AF%B4%E7%BD%91%E7%AB%99\" target=\"_blank\">小说</a><a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E7%AB%99\" target=\"_blank\">网站</a><a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E\" target=\"_blank\">商城</a>系统，<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">微信</a><a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">公众号</a>支持吸粉强制关注，</p>\r\n\r\n<p>小说<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E6%BA%90%E7%A0%81\" target=\"_blank\">分销源码</a>带充值套餐<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，网上其他同类源码基本都是加密的，本源码全部<a href=\"https://www.codesceo.com/search/keyword-%E5%BC%80%E6%BA%90\" target=\"_blank\">开源</a>解密无加密，支持二开！！！</p>\r\n\r\n<p>源码支持积分充值功能，阅读<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E7%AB%A0\" target=\"_blank\">文章</a>需要使用积分购买才能阅读，这也是小说分销系统的赚钱之道。同时还支持<a href=\"https://www.codesceo.com/search/keyword-%E4%BC%9A%E5%91%98%E5%8A%9F%E8%83%BD\" target=\"_blank\">会员功能</a>，</p>\r\n\r\n<p>支持半年会员、年费会员、终身会员等，具体<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\">内容</a>可自行<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a><a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\">设置</a>，满足读者的会员需求。</p>\r\n', 'http://manong.yaho.cc/static/upload/c81679f01d1a0647/38e118309d7a4d90.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '微信小说分销源码基于ThinkPHP框架开发的微信小说分销系统PHP源码，是一款基于微信公众号平台开发的小说分销系统源码，\r\n\r\n底层采用thinkPHP框架作为基础开发，小说分销系统源码自带600多部热门小说，安装后可直接上线运营，加入了批量改价功能，\r\n\r\n短域名推广防封，资源邦独家送火车头企业版+入库接口，支持一键采集小说资源！\r\n\r\n本源码主要是基于thinkPHP3.2开发的小说分销小说网站商城系统，微信公众号支持吸粉强制关注，\r\n\r\n小说分销源码带充值套餐功能，网上其他同类源码基本都是加密的，本源码全部开源解密无加密，支持二开！！！\r\n\r\n源码支持积分充值功能，阅读文章需要使用积分购买才能阅读，这也是小说分销系统的赚钱之道。同时还支持会员功能，\r\n\r\n支持半年会员、年费会员、终身会员等，具体内容可自行后台设置，满足读者的会员需求。', '10', '109', '1', '0', '1', '0', '2018-12-26 17:57:39', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('16', '1', '3', 'PHP', 'Mysql', '全名', '40', '全民经纪人赏金业务员 1.1.3 后台模块+前端小程序源码下载 解密开源版', '<p><br />\r\n版本号：1.1.3 - 商业版</p>\r\n\r\n<p>1.新增后台添加设置页面顶部标题</p>\r\n\r\n<p>2.新增后台设置LOGO</p>\r\n\r\n<p>3.修复编辑器图片小程序不展示问题</p>\r\n\r\n<p>4.修复小程序首页项目重复问题</p>\r\n\r\n<p>5.修复编译器图片小程序不展示问题</p>\r\n', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '\r\n版本号：1.1.3 - 商业版\r\n\r\n1.新增后台添加设置页面顶部标题\r\n\r\n2.新增后台设置LOGO\r\n\r\n3.修复编辑器图片小程序不展示问题\r\n\r\n4.修复小程序首页项目重复问题\r\n\r\n5.修复编译器图片小程序不展示问题\r\n\r\n', '10', '48', '0', '0', '1', '0', '2018-12-25 16:49:34', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '3', '12-24');
INSERT INTO `store_goods` VALUES ('17', '1', '4', 'PHP', 'Mysql', '视频', '21', '陌陌真钱棋牌游戏详细搭建视频教程', '<p>大家好，今天给大家带来的是最新的<a href=\"https://www.codesceo.com/search/keyword-%E9%99%8C%E9%99%8C%E6%A3%8B%E7%89%8C\" target=\"_blank\">陌陌棋牌</a><a href=\"https://www.codesceo.com/search/keyword-%E6%9E%B6%E8%AE%BE%E6%95%99%E7%A8%8B\" target=\"_blank\">架设教程</a></p>\r\n\r\n<p>好了，废话就不多说了，开始</p>\r\n\r\n<p>运行系统:<a href=\"https://www.codesceo.com/search/keyword-windows\" target=\"_blank\">windows</a>2008</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>库:sql&nbsp;<a href=\"https://www.codesceo.com/search/keyword-server\" target=\"_blank\">server</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-2014\" target=\"_blank\">2014</a></p>\r\n\r\n<p>IIS控制<a href=\"https://www.codesceo.com/search/keyword-%E9%9D%A2%E6%9D%BF\" target=\"_blank\">面板</a>&nbsp; &nbsp; &nbsp;<a href=\"https://www.codesceo.com/search/keyword-.net\" target=\"_blank\">.net</a>4.5</p>\r\n\r\n<p>一:数据库<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a></p>\r\n\r\n<p>在安装之前自己安装好iis控制面板和.net4.5 ，<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\">关闭</a>防火墙，或者放行1433<a href=\"https://www.codesceo.com/search/keyword-%E7%AB%AF%E5%8F%A3\" target=\"_blank\">端口</a>&nbsp;</p>\r\n', 'http://manong.yaho.cc/static/upload/ddc816ff6b103bcd/aaee7e72b078f517.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '大家好，今天给大家带来的是最新的陌陌棋牌架设教程\r\n\r\n好了，废话就不多说了，开始\r\n\r\n运行系统:windows2008\r\n\r\n数据库:sql server 2014\r\n\r\nIIS控制面板     .net4.5\r\n\r\n一:数据库安装\r\n\r\n在安装之前自己安装好iis控制面板和.net4.5 ，关闭防火墙，或者放行1433端口 ', '10', '13', '0', '0', '1', '0', '2018-12-25 17:13:27', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '4', '12-24');
INSERT INTO `store_goods` VALUES ('18', '1', '5', 'PHP', 'Mysql', '工具', '10', '霸屏天下源码APP端 朋友圈微信广告系统源码 霸屏天下打造朋友圈商业广告源码', '<p><a href=\"https://www.codesceo.com/search/keyword-%E9%9C%B8%E5%B1%8F%E5%A4%A9%E4%B8%8B\" target=\"_blank\">霸屏天下</a>APP推广奖励<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\">模式</a>开发</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1、只需要押金99元。每天发圈得8元，把你的<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E6%9C%8B%E5%8F%8B%E5%9C%88\" target=\"_blank\">微信</a><a href=\"https://www.codesceo.com/search/keyword-%E6%9C%8B%E5%8F%8B%E5%9C%88\" target=\"_blank\">朋友圈</a>打造成<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>提款机。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2、<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\">分享</a>好友成为会员可得奖励，一级8元，二级还有8元。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3、一级会员发圈你可以得4元/每天，分享10个就40元/每天，100个就400元/每天，分享越多，收益越多！</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4、二级会员发圈你还可以得2元/每天，分享10个就20元/天，100个就200元/每天</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5、会员可以投放广告，投放成功可得30%的广告奖励！收入日结，提现秒到！</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ps:本源码为APP端，没有提供<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>，只供给大家学习使用。请大家自己<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\">下载</a>测试。</p>\r\n', 'http://manong.yaho.cc/static/upload/bd111a5399bd3ec7/06afc7e9efc7be13.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '霸屏天下APP推广奖励模式开发\r\n\r\n             1、只需要押金99元。每天发圈得8元，把你的微信朋友圈打造成自动提款机。\r\n\r\n             2、分享好友成为会员可得奖励，一级8元，二级还有8元。\r\n\r\n             3、一级会员发圈你可以得4元/每天，分享10个就40元/每天，100个就400元/每天，分享越多，收益越多！\r\n\r\n             4、二级会员发圈你还可以得2元/每天，分享10个就20元/天，100个就200元/每天\r\n\r\n             5、会员可以投放广告，投放成功可得30%的广告奖励！收入日结，提现秒到！\r\n\r\n\r\n\r\n         Ps:本源码为APP端，没有提供后台，只供给大家学习使用。请大家自己下载测试。', '10', '26', '0', '0', '1', '0', '2018-12-26 17:56:59', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '5', '12-24');
INSERT INTO `store_goods` VALUES ('19', '1', '6', '其他', 'Mysql', '技术,文章,核心', '10', '苹果免费签名教程-ios免费签名教程', '<p>找别人IOS签名最少要1000-3000 而且还是骗子多，看了此教程从此命运把握在自己手里，想怎么签名就怎么签名而且还<a href=\"https://www.codesceo.com/search/keyword-%E5%85%8D%E8%B4%B9\" target=\"_blank\">免费</a>的<br />\r\n我们先装好 VM 和 OSX10.10.3, 大同小异的步骤请翻看以前的<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E7%AB%A0\" target=\"_blank\">文章</a>, 这里就不详细说了, 只说一说<a href=\"https://www.codesceo.com/search/keyword-%E7%BB%86%E8%8A%82\" target=\"_blank\">细节</a>： 在本文最下面提供了 macOS Sierra 10.12 PB1 for VMware 和 Xcode7.3.1 的<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\">下载</a>连接<br />\r\n1.<br />\r\na.从上面网盘下载回来的 Yosemite Install(14D131).cdr 需要把后缀名改为 iso, 如 Yosemite Install(14D131).iso,这样 VM 才会识别这个镜像。<br />\r\nb.配置好虚拟机后， 启动时有可能报这个<a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\">错误</a>：<br />\r\n<br />\r\n接下来你的应用就会在你的真机上起飞了！！<br />\r\n打算长期运营的话，建议去购买个苹果开发者账户。<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%98%E5%AE%9D\" target=\"_blank\">淘宝</a>上 600 多就可以了<br />\r\n弄个企业的也只是需要补到 3000.<br />\r\n大家不要相信苹果签名是多么难的事情。如果你想简单点在淘宝上个人和公司账户也只要 600 多，弄个企业的也只是需要补到 3000.（<a href=\"https://www.codesceo.com/search/keyword-%E5%8C%85%E5%90%AB\" target=\"_blank\">包含</a>其他的证书）<br />\r\n如果你只是自己想真机调试。上面的教程足以。想分发给别人。通过上面的教程也能做到。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>教程文档地址：&nbsp; &nbsp;https://pan.baidu.com/s/1K8uEWRBA5255HDLnL8Liqw</p>\r\n', 'http://manong.yaho.cc/static/upload/ba19c16afce1ba21/a52a87cb01c2432f.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '找别人IOS签名最少要1000-3000 而且还是骗子多，看了此教程从此命运把握在自己手里，想怎么签名就怎么签名而且还免费的\r\n我们先装好 VM 和 OSX10.10.3, 大同小异的步骤请翻看以前的文章, 这里就不详细说了, 只说一说细节： 在本文最下面提供了 macOS Sierra 10.12 PB1 for VMware 和 Xcode7.3.1 的下载连接', '10', '47', '0', '0', '1', '0', '2018-12-28 14:40:55', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('20', '1', '7', 'PHP', 'Mysql', '源码', '11', '最新在线视频聚合app+ios+后台管理', '<p><strong>环境&nbsp;<a href=\"https://www.codesceo.com/search/keyword-Apache\" target=\"_blank\">Apache</a>2.2 - 2.4 &nbsp;<a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a><a href=\"https://www.codesceo.com/search/keyword-5.6\" target=\"_blank\">5.6</a>&nbsp;&nbsp;<a href=\"https://www.codesceo.com/search/keyword-MysqL\" target=\"_blank\">MysqL</a></strong></p>\r\n\r\n<p><strong>一、此版本为原生<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%8C%E7%AB%AFAPP\" target=\"_blank\">双端APP</a>；（安卓+苹果）</strong></p>\r\n\r\n<p><strong>二、<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>支持更换轮播图和广告位配置；</strong></p>\r\n\r\n<p><strong>三、支持央视、卫视频道；</strong></p>\r\n\r\n<p><strong>四、系统广告位较多，可加<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%98%E5%AE%9D\" target=\"_blank\">淘宝</a>客和小说；</strong></p>\r\n\r\n<p><strong>五、可无限<a href=\"https://www.codesceo.com/search/keyword-%E7%94%9F%E6%88%90\" target=\"_blank\">生成</a>卡密，<a href=\"https://www.codesceo.com/search/keyword-Excel\" target=\"_blank\">Excel</a>导出；</strong></p>\r\n\r\n<p><strong>六、<a href=\"https://www.codesceo.com/search/keyword-%E5%BD%B1%E8%A7%86\" target=\"_blank\">影视</a>APP双端+<a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a><a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>&nbsp;带无限级代理<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E7%B3%BB%E7%BB%9F\" target=\"_blank\">分销系统</a>&nbsp;</strong></p>\r\n\r\n<p><strong>七、后台<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\">定义</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A7%86%E9%A2%91%E8%A7%A3%E6%9E%90\" target=\"_blank\">视频解析</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8E%A5%E5%8F%A3\" target=\"_blank\">接口</a>，IOS版可使用企业证书<a href=\"https://www.codesceo.com/search/keyword-%E6%89%93%E5%8C%85\" target=\"_blank\">打包</a></strong></p>\r\n\r\n<p><strong>八、强大的代理<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%94%80%E7%B3%BB%E7%BB%9F\" target=\"_blank\">分销系统</a>，帮助您<a href=\"https://www.codesceo.com/search/keyword-%E5%BF%AB%E9%80%9F\" target=\"_blank\">快速</a>推广</strong></p>\r\n\r\n<p><strong>九、qq登陆，在线卡密购买，集成第三方支付qq，<a href=\"https://www.codesceo.com/search/keyword-%E6%94%AF%E4%BB%98%E5%AE%9D\" target=\"_blank\">支付宝</a>微信</strong></p>\r\n', 'http://manong.yaho.cc/static/upload/2f85e8892c41956f/d30947c926bb47e4.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '环境 Apache2.2 - 2.4  PHP5.6  MysqL\r\n\r\n一、此版本为原生双端APP；（安卓+苹果）\r\n\r\n二、后台支持更换轮播图和广告位配置；\r\n\r\n三、支持央视、卫视频道；\r\n\r\n四、系统广告位较多，可加淘宝客和小说；\r\n\r\n五、可无限生成卡密，Excel导出；\r\n\r\n六、影视APP双端+PHP后台 带无限级代理分销系统 \r\n\r\n七、后台自定义视频解析接口，IOS版可使用企业证书打包\r\n\r\n八、强大的代理分销系统，帮助您快速推广\r\n\r\n九、qq登陆，在线卡密购买，集成第三方支付qq，支付宝微信', '10', '35', '0', '0', '1', '0', '2018-12-26 17:57:09', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('21', '1', '7', 'PHP', 'Mysql', '付费', '11', 'wordpress付费主题reborn原生解密, V4.6.1', '<p>主题通用特性</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-htm\" target=\"_blank\">htm</a>l5、<a href=\"https://www.codesceo.com/search/keyword-CSS\" target=\"_blank\">CSS</a>3使用标准语言编写，支持IE10以上<a href=\"https://www.codesceo.com/search/keyword-%E6%B5%8F%E8%A7%88%E5%99%A8\" target=\"_blank\">浏览器</a></p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%93%8D%E5%BA%94\" target=\"_blank\">响应</a>式在<a href=\"https://www.codesceo.com/search/keyword-%E6%A1%8C%E9%9D%A2\" target=\"_blank\">桌面</a>、平板、手机端均以最佳<a href=\"https://www.codesceo.com/search/keyword-%E7%8A%B6%E6%80%81\" target=\"_blank\">状态</a><a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>。也可<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\">分享</a>到微信<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>哦！</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\">定义</a>&nbsp;超过60多个<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a><a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\">定义</a><a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\">设置</a>，让你的<a href=\"https://www.codesceo.com/search/keyword-%E7%AB%99%E7%82%B9\" target=\"_blank\">站点</a><a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>众不同</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-LOGO\" target=\"_blank\">LOGO</a><a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\">设置</a>支持<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8A%E4%BC%A0\" target=\"_blank\">上传</a>您自己的<a href=\"https://www.codesceo.com/search/keyword-LOGO\" target=\"_blank\">LOGO</a>并显示</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E9%A6%96%E9%A1%B5\" target=\"_blank\">首页</a>滚动<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E7%AB%A0\" target=\"_blank\">文章</a>可自定义<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%BB%E6%84%8F\" target=\"_blank\">任意</a>多个<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E7%AB%A0\" target=\"_blank\">文章</a>并滚动显示（可<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\">关闭</a>）</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E7%B1%BB\" target=\"_blank\">分类</a>滚动文章<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>随机筛选本<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E7%B1%BB\" target=\"_blank\">分类</a>的5篇文章并滚动显示（可<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\">关闭</a>）</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\">内容</a>页头大图每篇文章均可自定义文章<a href=\"https://www.codesceo.com/search/keyword-%E5%A4%B4%E9%83%A8\" target=\"_blank\">头部</a>大图</p>\r\n\r\n<p>页脚可自定义描述<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E5%AD%97\" target=\"_blank\">文字</a>、备案信息</p>\r\n\r\n<p>侧边栏支持<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%BB%E6%84%8F\" target=\"_blank\">任意</a><a href=\"https://www.codesceo.com/search/keyword-%E9%93%BE%E6%8E%A5\" target=\"_blank\">链接</a>、社交媒体、<a href=\"https://www.codesceo.com/search/keyword-%E6%A0%87%E7%AD%BE\" target=\"_blank\">标签</a>的显示</p>\r\n\r\n<p>回复<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\">下载</a>可强制要求<a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\">用户</a>评<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BA%E6%96%87\" target=\"_blank\">论文</a>章后才提供<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\">下载</a>地址</p>\r\n\r\n<p>多<a href=\"https://www.codesceo.com/search/keyword-%E8%8F%9C%E5%8D%95\" target=\"_blank\">菜单</a><a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\">模式</a>提供主<a href=\"https://www.codesceo.com/search/keyword-%E8%8F%9C%E5%8D%95\" target=\"_blank\">菜单</a>、文章分类菜单、相册分类菜单，全方位满足需要</p>\r\n\r\n<p>相册本主题不仅可显示文章，同时还提供相册的展示，<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>可<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8A%E4%BC%A0\" target=\"_blank\">上传</a>也可使用外链</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E8%AF%84%E8%AE%BA\" target=\"_blank\">评论</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>情本主题自带<a href=\"https://www.codesceo.com/search/keyword-%E8%AF%84%E8%AE%BA\" target=\"_blank\">评论</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>情<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，无需<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E4%BB%B6\" target=\"_blank\">插件</a>在<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>即可设置</p>\r\n\r\n<p>评论验证本主题无需<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E4%BB%B6\" target=\"_blank\">插件</a>自带评论<a href=\"https://www.codesceo.com/search/keyword-%E9%AA%8C%E8%AF%81%E7%A0%81\" target=\"_blank\">验证码</a><a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，后台启用即可生效</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E7%99%BE%E5%BA%A6%E7%86%8A%E6%8E%8C%E5%8F%B7\" target=\"_blank\">百度熊掌号</a>原生支持<a href=\"https://www.codesceo.com/search/keyword-%E7%99%BE%E5%BA%A6%E7%86%8A%E6%8E%8C%E5%8F%B7\" target=\"_blank\">百度熊掌号</a>，无需任何插件即可一键提交。一键改造页面及启用熊掌号粉丝关注功能</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\">内容</a>回复可见&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%8C%87%E5%AE%9A\" target=\"_blank\">指定</a>某些内容需要读者评论后才可查看，让读者<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>你互动</p>\r\n\r\n<p>语音朗读使用百度<a href=\"https://www.codesceo.com/search/keyword-%E8%AF%AD%E9%9F%B3%E5%90%88%E6%88%90\" target=\"_blank\">语音合成</a>来为您阅读文章</p>\r\n\r\n<p>防采集防复制&nbsp;在文章中随机插入预设的<a href=\"https://www.codesceo.com/search/keyword-%E7%89%88%E6%9D%83\" target=\"_blank\">版权</a>信息或脏<a href=\"https://www.codesceo.com/search/keyword-%E5%AD%97%E7%AC%A6%E4%B8%B2\" target=\"_blank\">字符串</a>，显示时<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>隐藏，被人复制/采集后会显示出来</p>\r\n\r\n<p><a>折叠隐藏</a></p>\r\n\r\n<p>标签</p>\r\n', 'http://manong.yaho.cc/static/upload/b057c3a6f3eedc98/46e6d43094441f79.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '主题通用特性\r\n\r\nhtml5、CSS3使用标准语言编写，支持IE10以上浏览器\r\n\r\n响应式在桌面、平板、手机端均以最佳状态显示。也可分享到微信显示哦！\r\n\r\n自定义 超过60多个后台自定义设置，让你的站点与众不同\r\n\r\nLOGO设置支持上传您自己的LOGO并显示\r\n\r\n首页滚动文章可自定义任意多个文章并滚动显示（可关闭）\r\n\r\n分类滚动文章自动随机筛选本分类的5篇文章并滚动显示（可关闭）\r\n\r\n内容页头大图每篇文章均可自定义文章头部大图\r\n\r\n页脚可自定义描述文字、备案信息\r\n\r\n侧边栏支持任意链接、社交媒体、标签的显示\r\n\r\n回复下载可强制要求用户评论文章后才提供下载地址\r\n\r\n多菜单模式提供主菜单、文章分类菜单、相册分类菜单，全方位满足需要\r\n\r\n相册本主题不仅可显示文章，同时还提供相册的展示，图片可上传也可使用外链\r\n\r\n评论表情本主题自带评论表情功能，无需插件在后台即可设置\r\n\r\n评论验证本主题无需插件自带评论验证码功能，后台启用即可生效\r\n\r\n百度熊掌号原生支持百度熊掌号，无需任何插件即可一键提交。一键改造页面及启用熊掌号粉丝关注功能\r\n\r\n内容回复可见 指定某些内容需要', '10', '24', '0', '0', '1', '0', '2018-12-26 17:57:30', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('22', '1', '10', 'PHP', 'Mysql', '最新', '10', '某站千元买的最新视频打赏三套', '<ul>\r\n	<li>最后更新：2018-12-23</li>\r\n</ul>\r\n\r\n<p><a href=\"javascript:download();\">立即下载</a><a rel=\"nofollow\" target=\"_blank\">无演示</a><a href=\"javascript:dr_favorite(\'code\', 859);\">收藏</a></p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>如下,最新更新.</p>\r\n\r\n<p>1.最新<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" target=\"_blank\">添加</a>返佣系统,支持单个代理社<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\">设置</a>返佣多少个点.</p>\r\n\r\n<p>2.<a href=\"https://www.codesceo.com/search/keyword-%E6%89%B9%E9%87%8F\" target=\"_blank\">批量</a><a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8A%E4%BC%A0\" target=\"_blank\">上传</a>视频,云转码一键<a href=\"https://www.codesceo.com/search/keyword-%E8%8E%B7%E5%8F%96\" target=\"_blank\">获取</a><a href=\"https://www.codesceo.com/search/keyword-%E6%A0%87%E9%A2%98\" target=\"_blank\">标题</a>,视频地址,<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>地址,复制粘贴,直接<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8A%E4%BC%A0\" target=\"_blank\">上传</a>,方便.</p>\r\n\r\n<p>3.支持<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>一键<a href=\"https://www.codesceo.com/search/keyword-%E4%BF%AE%E6%94%B9\" target=\"_blank\">修改</a>所有视频价格,更加灵活选择价格,代理操作更方便.原版是没有<a href=\"https://www.codesceo.com/search/keyword-%E4%BF%AE%E6%94%B9\" target=\"_blank\">修改</a>价格这个选项的.</p>\r\n\r\n<p>4.<a href=\"https://www.codesceo.com/search/keyword-%E6%89%B9%E9%87%8F\" target=\"_blank\">批量</a><a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" target=\"_blank\">删除</a>,代理片库,公共片库.方便<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a>.</p>\r\n\r\n<p>5.支持自己上传打赏界面的背景图案,原版是没有的,是采集上传视频的<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>,或者上传的图片作为背景.</p>\r\n\r\n<p>6.<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" target=\"_blank\">添加</a>各种<a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" target=\"_blank\">删除</a><a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>,例如,删除订单,删除历史订单,删除提现记录,扣量订单.等等等.</p>\r\n\r\n<p>7.添加了域名池,批量添加落地域名,可以<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>检测域名是否被微信检测屏蔽,<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>删除并<a href=\"https://www.codesceo.com/search/keyword-%E6%9B%BF%E6%8D%A2\" target=\"_blank\">替换</a>.全自动托管无需熬夜值守.</p>\r\n\r\n<p>8.添加各大社交<a href=\"https://www.codesceo.com/search/keyword-%E8%BD%AF%E4%BB%B6\" target=\"_blank\">软件</a>,<a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E9%A1%B5\" target=\"_blank\">网页</a>等等等,短连接直接唤醒微信在微信内支付观看视频.</p>\r\n\r\n<p>9.添加代理推广<a href=\"https://www.codesceo.com/search/keyword-%E9%93%BE%E6%8E%A5\" target=\"_blank\">链接</a>,代理下线<a href=\"https://www.codesceo.com/search/keyword-%E7%BB%9F%E8%AE%A1\" target=\"_blank\">统计</a>等等.</p>\r\n\r\n<p>10.添加盒子,地址填上去上传<a href=\"https://www.codesceo.com/search/keyword-%E9%93%BE%E6%8E%A5\" target=\"_blank\">链接</a>,即可<a href=\"https://www.codesceo.com/search/keyword-%E7%94%9F%E6%88%90\" target=\"_blank\">生成</a><a href=\"https://www.codesceo.com/search/keyword-%E5%85%8D%E8%B4%B9\" target=\"_blank\">免费</a>视频.</p>\r\n\r\n<p>11.平台超强防封,凡是购买<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" target=\"_blank\">产品</a>赠送防封<a href=\"https://www.codesceo.com/search/keyword-%E6%96%B9%E6%B3%95\" target=\"_blank\">方法</a>一套,并告知如何减少封群,封号.</p>\r\n', 'http://manong.yaho.cc/static/upload/6e8feb5b889a22e2/f99a4a4849cf8ece.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '最后更新：2018-12-23\r\n功能如下,最新更新.\r\n\r\n1.最新添加返佣系统,支持单个代理社设置返佣多少个点.\r\n\r\n2.批量上传视频,云转码一键获取标题,视频地址,图片地址,复制粘贴,直接上传,方便.\r\n\r\n3.支持后台一键修改所有视频价格,更加灵活选择价格,代理操作更方便.原版是没有修改价格这个选项的.\r\n\r\n4.批量删除,代理片库,公共片库.方便管理.\r\n\r\n5.支持自己上传打赏界面的背景图案,原版是没有的,是采集上传视频的图片,或者上传的图片作为背景.\r\n\r\n6.添加各种删除数据,例如,删除订单,删除历史订单,删除提现记录,扣量订单.等等等.\r\n\r\n7.添加了域名池,批量添加落地域名,可以自动检测域名是否被微信检测屏蔽,自动删除并替换.全自动托管无需熬夜值守.\r\n\r\n8.添加各大社交软件,网页等等等,短连接直接唤醒微信在微信内支付观看视频.\r\n\r\n9.添加代理推广链接,代理下线统计等等.\r\n\r\n10.添加盒子,地址填上去上传链接,即可生成免费视频.\r\n\r\n11.平台超强防封,凡是购买产品赠送防封方法一套,并告知如何减少封群,封号.', '10', '15', '0', '0', '1', '0', '2018-12-26 17:57:19', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('23', '1', '9', 'PHP', 'Mysql', '口红', '10', '口红机3.3版+口红机wap登陆插件1.3版|抖抖赢口红源码|闯关插口红H5游戏源码', '<ul>\r\n	<li>最后更新：2018-12-21</li>\r\n</ul>\r\n\r\n<p><a href=\"javascript:download();\">立即下载</a><a href=\"https://s.we7.cc/module-16103.html\" rel=\"nofollow\" target=\"_blank\">演示地址</a><a href=\"javascript:dr_favorite(\'code\', 856);\">收藏</a></p>\r\n\r\n<p xss=\"removed\">最新<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%A3%E7%BA%A2%E6%9C%BA\" target=\"_blank\">口红机</a>3.3版+<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%A3%E7%BA%A2%E6%9C%BA\" target=\"_blank\">口红机</a><a href=\"https://www.codesceo.com/search/keyword-wap\" target=\"_blank\">wap</a><a href=\"https://www.codesceo.com/search/keyword-%E7%99%BB%E9%99%86%E6%8F%92%E4%BB%B6\" target=\"_blank\">登陆</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E4%BB%B6\" target=\"_blank\">插件</a>1.3，<a href=\"https://www.codesceo.com/search/keyword-%E6%8A%96%E6%8A%96%E8%B5%A2%E5%8F%A3%E7%BA%A2\" target=\"_blank\">抖抖</a><a href=\"https://www.codesceo.com/search/keyword-%E8%B5%A2%E5%8F%A3%E7%BA%A2\" target=\"_blank\">赢口红</a>源码，<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AF%E5%85%B3%E6%8F%92%E5%8F%A3%E7%BA%A2\" target=\"_blank\">闯关</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E5%8F%A3%E7%BA%A2\" target=\"_blank\">插口红</a><a href=\"https://www.codesceo.com/search/keyword-H5%E6%B8%B8%E6%88%8F\" target=\"_blank\">H5游戏</a>源码</p>\r\n\r\n<p xss=\"removed\">目前网上最新版本了，朋友购买的官方版本<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\">分享</a>给大家了！</p>\r\n\r\n<p xss=\"removed\">前几天自己也做了一段时间 一天赚几百还是可以的。大神每天赚几千几万的很多。<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" target=\"_blank\">产品</a>和<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>ui都可以更换，有想法的可以换换思路</p>\r\n', 'http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '最后更新：2018-12-21\r\n最新口红机3.3版+口红机wap登陆插件1.3，抖抖赢口红源码，闯关插口红H5游戏源码\r\n\r\n目前网上最新版本了，朋友购买的官方版本分享给大家了！\r\n\r\n前几天自己也做了一段时间 一天赚几百还是可以的。大神每天赚几千几万的很多。产品和图片ui都可以更换，有想法的可以换换思路\r\n\r\n', '10', '26', '0', '0', '1', '0', '2018-12-26 14:22:56', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-25');
INSERT INTO `store_goods` VALUES ('24', '1', '9', 'PHP', 'Mysql', '源码', '20', '最新PHP授权验证更新系统V2.7定制版完整版网站源码下载', '<ul>\r\n	<li>最后更新：2018-12-21</li>\r\n</ul>\r\n\r\n<p><a href=\"javascript:download();\">立即下载</a><a rel=\"nofollow\" target=\"_blank\">无演示</a><a href=\"javascript:dr_favorite(\'code\', 854);\">收藏</a></p>\r\n\r\n<p>最新<a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8E%88%E6%9D%83\" target=\"_blank\">授权</a>验证<a href=\"https://www.codesceo.com/search/keyword-%E6%9B%B4%E6%96%B0%E7%B3%BB%E7%BB%9F\" target=\"_blank\">更新系统</a>V2.7完整版源码<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\">分享</a>，一键<a href=\"https://www.codesceo.com/search/keyword-%E6%9B%B4%E6%96%B0%E7%B3%BB%E7%BB%9F\" target=\"_blank\">更新系统</a>，一键卡密<a href=\"https://www.codesceo.com/search/keyword-%E7%94%9F%E6%88%90\" target=\"_blank\">生成</a>自助<a href=\"https://www.codesceo.com/search/keyword-%E6%8E%88%E6%9D%83\" target=\"_blank\">授权</a><a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，域名ip双重验证<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>等等</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>程序复制至根目录&nbsp;</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%AF%BC%E5%85%A5\" target=\"_blank\">导入</a><a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>，配置data/<a href=\"https://www.codesceo.com/search/keyword-config\" target=\"_blank\">config</a>.<a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" target=\"_blank\">文件</a></p>\r\n\r\n<p>$safe = &#39;123456&#39;;//此处为安全码，不在<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>库之中</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\">后台</a>地址：http://域名/<a href=\"https://www.codesceo.com/search/keyword-admin.php\" target=\"_blank\">admin.php</a>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>配置根目录下<a href=\"https://www.codesceo.com/search/keyword-update\" target=\"_blank\">update</a>.php</p>\r\n\r\n<p>$file_dir = &#39;http://你的域名/upgrade&#39;; //<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%9C%E7%A8%8B\" target=\"_blank\">远程</a><a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" target=\"_blank\">升级</a>补丁存放目录</p>\r\n\r\n<p>upgrade为补丁存放目录 建议改复杂一点</p>\r\n\r\n<p>验证<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>为&nbsp; 此<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>必须放在php<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" target=\"_blank\">文件</a>前面 &lt;?php 验证代码</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>授权中心相关：</p>\r\n\r\n<p>upgrade 目录是补丁目录 放到自己的<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%8D%E5%8A%A1%E5%99%A8\" target=\"_blank\">服务器</a>上 比如 http://域名/upgrade</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-update\" target=\"_blank\">update</a>.php 负责 授权检查 和 更新版本检查</p>\r\n\r\n<p>版本都是 依次递增</p>\r\n\r\n<p>1.1&nbsp;<a href=\"https://www.codesceo.com/search/keyword-1.2\" target=\"_blank\">1.2</a>&nbsp;1.3 不能跳跃</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%A2%E6%88%B7%E7%AB%AF\" target=\"_blank\">客户端</a>也是依次<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" target=\"_blank\">升级</a></p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%A2%E6%88%B7%E7%AB%AF\" target=\"_blank\">客户端</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E5%BD%93%E5%89%8D\" target=\"_blank\">当前</a>版本是 1.1 就先升级到&nbsp;<a href=\"https://www.codesceo.com/search/keyword-1.2\" target=\"_blank\">1.2</a>&nbsp;再升级到 1.3</p>\r\n\r\n<p>所以 在授权<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a>中心&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" target=\"_blank\">添加</a>版本的时候 必须按照规律来 版本号 必须如此</p>\r\n\r\n<p>更新包 很简单 参考下upgrade 下面的 1.1.zip</p>\r\n\r\n<p>命名<a href=\"https://www.codesceo.com/search/keyword-%E6%A0%BC%E5%BC%8F\" target=\"_blank\">格式</a>&nbsp;升级文件为了防止猜出来 可以自己随意命名 zip<a href=\"https://www.codesceo.com/search/keyword-%E6%A0%BC%E5%BC%8F\" target=\"_blank\">格式</a></p>\r\n\r\n<p>客户端版本号 就按照 之前定的前缀 就行 在<a href=\"https://www.codesceo.com/search/keyword-%E6%9F%A5%E8%AF%A2\" target=\"_blank\">查询</a>的时候 我已经做<a href=\"https://www.codesceo.com/search/keyword-%E5%A4%84%E7%90%86\" target=\"_blank\">处理</a>了</p>\r\n\r\n<p>你确定下 你的前缀 还得<a href=\"https://www.codesceo.com/search/keyword-%E4%BF%AE%E6%94%B9\" target=\"_blank\">修改</a>&nbsp;version.php 里面的版本号 自己想一下 确定下&nbsp;</p>\r\n\r\n<p>更新包的&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE%E5%BA%93\" target=\"_blank\">数据库</a>更新<a href=\"https://www.codesceo.com/search/keyword-%E8%84%9A%E6%9C%AC\" target=\"_blank\">脚本</a>&nbsp;update.sql sql<a href=\"https://www.codesceo.com/search/keyword-%E8%AF%AD%E5%8F%A5\" target=\"_blank\">语句</a>&nbsp;自己写 务必检查好 客户端升级的时候 直接执行</p>\r\n\r\n<p>更新包 每次更新完成后 都全部<a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" target=\"_blank\">删除</a>&nbsp;防止客户拿到更新包</p>\r\n\r\n<p>更新包<a href=\"https://www.codesceo.com/search/keyword-%E5%88%B6%E4%BD%9C\" target=\"_blank\">制作</a>&nbsp;必须严谨 测试后 再<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%91%E5%B8%83\" target=\"_blank\">发布</a></p>\r\n\r\n<p>授权域名 为顶级域名 不限制二级域名</p>\r\n\r\n<p>授权时间 格式 2019-01-01 这样填写</p>\r\n\r\n<p>微信平台<a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E7%AB%99\" target=\"_blank\">网站</a>相关</p>\r\n\r\n<p>升级动作 已经<a href=\"https://www.codesceo.com/search/keyword-%E5%8C%85%E5%90%AB\" target=\"_blank\">包含</a>&nbsp;授权检查</p>\r\n', 'http://manong.yaho.cc/static/upload/c81679f01d1a0647/38e118309d7a4d90.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '最后更新：2018-12-21\r\n最新PHP授权验证更新系统V2.7完整版源码分享，一键更新系统，一键卡密生成自助授权功能，域名ip双重验证功能等等\r\n\r\n\r\n\r\n程序复制至根目录 \r\n\r\n导入数据，配置data/config.PHP 文件\r\n\r\n$safe = \'123456\';//此处为安全码，不在数据库之中\r\n\r\n后台地址：http://域名/admin.php ', '101', '28', '0', '0', '1', '0', '2018-12-26 14:24:17', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('25', '1', '10', 'PHP', 'Mysql', '微信', '10', '最新微信付费进群收费进群系统源码微信收费入群', '<p>本程序最大的好处是<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>定位客户<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%AC%E5%9C%B0\" target=\"_blank\">本地</a>地区（微信不能定位</p>\r\n\r\n<p>），如客户是上海IP就<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>上海同城，是北京IP就<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>北京同城，特别适合吸各种粉丝，比如红包粉，男狼粉，女吃货粉，等等。</p>\r\n\r\n<p>源码优点：<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\">自动</a>定位<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%AC%E5%9C%B0\" target=\"_blank\">本地</a>地区（微信不能定位），时间随即，人数随即，独有收款<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a></p>\r\n\r\n<p>其他用途各大神自由发挥~~</p>\r\n\r\n<p>程序独有收款<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>，个人收款二维码,,（个人收款<a href=\"https://www.codesceo.com/search/keyword-%E6%97%A0%E6%B3%95\" target=\"_blank\">无法</a>自动加群）</p>\r\n\r\n<p>搭建简单，有<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a>教程，无需<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">公众号</a>,只有手机端,</p>\r\n', 'http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '本程序最大的好处是自动定位客户本地地区（微信不能定位\r\n\r\n），如客户是上海IP就显示上海同城，是北京IP就显示北京同城，特别适合吸各种粉丝，比如红包粉，男狼粉，女吃货粉，等等。\r\n\r\n源码优点：自动定位本地地区（微信不能定位），时间随即，人数随即，独有收款功能\r\n\r\n其他用途各大神自由发挥~~\r\n\r\n程序独有收款功能，个人收款二维码,,（个人收款无法自动加群）\r\n\r\n搭建简单，有安装教程，无需公众号,只有手机端,', '10', '19', '0', '0', '1', '0', '2018-12-26 17:56:44', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-24');
INSERT INTO `store_goods` VALUES ('26', '1', '30', '其他', 'Mysql', 'cms,组合查询,多个模块', '10', 'POScms组合查询多个模块数据，多个模块一起查询显示', '<p>默认<a href=\"https://www.codesceo.com/search/keyword-%E6%A0%87%E7%AD%BE\" target=\"_blank\">标签</a>只能<a href=\"https://www.codesceo.com/search/keyword-%E6%9F%A5%E8%AF%A2\" target=\"_blank\">查询</a>一个<a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>，如果遇到一次性查询多个表的情况就<a href=\"https://www.codesceo.com/search/keyword-%E6%97%A0%E6%B3%95\" target=\"_blank\">无法</a>实现了</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E5%9C%BA%E6%99%AF\" target=\"_blank\">场景</a>1、<a href=\"https://www.codesceo.com/search/keyword-%E5%A4%9A%E4%B8%AA%E6%A8%A1%E5%9D%97\" target=\"_blank\">多个模块</a>news、mall、down等等</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E8%B0%83%E7%94%A8\" target=\"_blank\">调用</a>这几个模块最新10条<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>，是一起<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>，一次性查询出来再排序。</p>\r\n\r\n<p>场景2、多个<a href=\"https://www.codesceo.com/search/keyword-%E7%AB%99%E7%82%B9\" target=\"_blank\">站点</a>模块news</p>\r\n\r\n<p>调用站点1，站点2，站点N的最新10条新闻，一起显示，一次性查询排序。</p>\r\n\r\n<p><img alt=\"3a9bc92509.png\" id=\"c933211a487c5a75f3dea9257be0864b_img_9444\" src=\"https://img.codesceo.com/20181026/1540551820850372.png\" title=\"1540551820850372.png\" /></p>\r\n\r\n<p><strong>示例<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>：</strong></p>\r\n\r\n<p>一个<a href=\"https://www.codesceo.com/search/keyword-list\" target=\"_blank\">list</a>标签 同时查询news和mall模块的最新20条数据，按时间排序</p>\r\n', 'http://manong.yaho.cc/static/upload/322e21968a379685/66243a7afc7fc585.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '默认标签只能查询一个表，如果遇到一次性查询多个表的情况就无法实现了\r\n\r\n场景1、多个模块news、mall、down等等\r\n\r\n调用这几个模块最新10条数据，是一起显示，一次性查询出来再排序。\r\n\r\n场景2、多个站点模块news\r\n\r\n调用站点1，站点2，站点N的最新10条新闻，一起显示，一次性查询排序。', '10', '69', '0', '0', '1', '0', '2018-12-27 14:55:03', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('27', '1', '31', '其他', 'Mysql', '特效,特效', '10', '使用:before选择器给你的Logo添加扫光特效', '<p>在知更鸟大神的<a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E7%AB%99\" target=\"_blank\">网站</a>看到他的Begin主题<a href=\"https://www.codesceo.com/search/keyword-LOGO\" target=\"_blank\">LOGO</a>有<a href=\"https://www.codesceo.com/search/keyword-%E6%89%AB%E5%85%89%E7%89%B9%E6%95%88\" target=\"_blank\">扫光特效</a>，看起来还是比较炫的。研究了一下，<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%91%E7%8E%B0\" target=\"_blank\">发现</a>是用:before<a href=\"https://www.codesceo.com/search/keyword-%E9%80%89%E6%8B%A9%E5%99%A8\" target=\"_blank\">选择器</a>实现的扫光效果，现在把<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>甩出来，觉得好看的可以在自己的<a href=\"https://www.codesceo.com/search/keyword-%E7%AB%99%E7%82%B9\" target=\"_blank\">站点</a>上试一试。</p>\r\n\r\n<p><img id=\"c24375f423c8e902c9cf63dbcf512039_img_3696\" src=\"https://img.codesceo.com/201803/1761728544.png\" /></p>\r\n\r\n<p>在知更鸟大神的网站看到他的Begin主题Logo有扫光特效，看起来还是比较炫的。研究了一下，发现是用:<a href=\"https://www.codesceo.com/search/keyword-before%E9%80%89%E6%8B%A9%E5%99%A8\" target=\"_blank\">before选择器</a>实现的扫光效果，现在把代码甩出来，觉得好看的可以在自己的站点上试一试。</p>\r\n', 'http://manong.yaho.cc/static/upload/c3f0ffe5bf85df72/075f200c96a3afe8.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '在知更鸟大神的网站看到他的Begin主题LOGO有扫光特效，看起来还是比较炫的。研究了一下，发现是用:before选择器实现的扫光效果，现在把代码甩出来，觉得好看的可以在自己的站点上试一试。\r\n\r\n\r\n\r\n在知更鸟大神的网站看到他的Begin主题Logo有扫光特效，看起来还是比较炫的。研究了一下，发现是用:before选择器实现的扫光效果，现在把代码甩出来，觉得好看的可以在自己的站点上试一试。', '10', '19', '1', '0', '1', '0', '2018-12-27 14:58:34', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('28', '1', '32', '其他', 'Mysql', '红包', '10', '价值3000元的自动唤醒支付宝红包原理', '', 'http://manong.yaho.cc/static/upload/b5f3395dd9b73a06/e4e6eb9f265aa963.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '', '10', '17', '1', '0', '1', '0', '2019-01-02 11:58:22', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('29', '1', '33', '其他', 'Mysql', '设计', '10', '图形用户界面设计与语音用户界面设计的关系', '<p><img alt=\"201809191105029391.jpg\" id=\"c933211a487c5a75f3dea9257be0864b_img_8475\" src=\"https://img.codesceo.com/20180920/1537457472187808.jpg\" title=\"1537457472187808.jpg\" /></p>\r\n\r\n<p>随着人工智能的越发火热，越来越多公司开始研发人工智能<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" target=\"_blank\">产品</a>，其中对话AI产品尤其被大家所关注。<a href=\"https://www.codesceo.com/search/keyword-%E5%BD%93%E5%89%8D\" target=\"_blank\">当前</a>十分火爆的智能音箱就属于人工智能对话AI产品，其主要交互方式是语音对话，所以语音交互开始被广泛关注。本文尝试探讨的课题，即是<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E5%BD%A2\" target=\"_blank\">图形</a><a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\">用户</a><a href=\"https://www.codesceo.com/search/keyword-%E7%95%8C%E9%9D%A2%E8%AE%BE%E8%AE%A1\" target=\"_blank\">界面设计</a><a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>语音用户界面设计的关系。</p>\r\n\r\n<h2>GUI与VUI的概念</h2>\r\n\r\n<p>本文中GUI (Graph&nbsp;<a href=\"https://www.codesceo.com/search/keyword-use\" target=\"_blank\">use</a>r Interface) 指的是图形用户界面，包括我们现在所熟知的界面交互设计和视觉设计。本文中VUI (Voice User Interface) 指的是语音用户界面。</p>\r\n\r\n<p>GUI是道格&middot;恩格尔巴特（<a href=\"https://www.codesceo.com/search/keyword-%E9%BC%A0%E6%A0%87\" target=\"_blank\">鼠标</a>发明者）提出的概念，自从 80 年代苹果推出第一款搭载GUI的电脑后，至今为止GUI一直是人机交互的代<a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>。VUI前身是IVR &mdash;&mdash; 交互式语音应答系统，比如： 10086 的语音应答系统。</p>\r\n\r\n<p>21 世纪初，IVR系统已逐渐普及。起初，&ldquo;按键+语音&rdquo;的混合形式（&ldquo;请按&lsquo;1&rsquo;号键，或说&lsquo;1&rsquo;)，成为了人们和很多公司沟通的常见方式。</p>\r\n\r\n<p>简而言之，VUI主要指的是人通过自然语言与<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%A1%E7%AE%97%E6%9C%BA\" target=\"_blank\">计算机</a>进行交互。由此可见，GUI和VUI指的都是用户与计算机进行交互，区别在于交互方式不同，前者通过图形界面进行交互，后者通过自然语言进行交互。</p>\r\n\r\n<h2>VUI更加自然</h2>\r\n\r\n<p>GUI&mdash;&mdash;用户与系统在肢体上、感知上、概念上联系的所有部分的总和。所谓肢体上指的是用户点击<a href=\"https://www.codesceo.com/search/keyword-%E6%8C%89%E9%92%AE\" target=\"_blank\">按钮</a>、操作键盘和鼠标；感知上指的是视觉、听觉和触觉；概念上指的是认知。</p>\r\n\r\n<p>用户与计算机进行交互，主要通过手指操作硬件进行输入，主要通过视觉感知<a href=\"https://www.codesceo.com/search/keyword-%E8%8E%B7%E5%8F%96\" target=\"_blank\">获取</a><a href=\"https://www.codesceo.com/search/keyword-%E8%BE%93%E5%87%BA\" target=\"_blank\">输出</a>。整个交互<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\">模式</a>是人为创造的，对人类是陌生的，是非自然的，学习成本较高。</p>\r\n\r\n<p>对于VUI来说，用户与计算机的交互方式是自然语音，就像人与人进行沟通。用户通过声带发声进行输入，通过听觉进行感知，交互模式是自然的，学习成本较低，老人和小孩都能<a href=\"https://www.codesceo.com/search/keyword-%E5%BF%AB%E9%80%9F\" target=\"_blank\">快速</a>学会。</p>\r\n\r\n<h2>VUI信息量较小</h2>\r\n\r\n<p>GUI所能表达的信息量往往较大，更加丰富，维度更广（包括时间和空间）。因为人类的视觉可感知到的信息更加丰富，也更加立体。在图形界面上不止可以展示<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E5%AD%97\" target=\"_blank\">文字</a>，还可以展示<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>和<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%A8%E7%94%BB\" target=\"_blank\">动画</a>，信息输出更加丰富、生动和高效。当然，如果输出的信息越丰富，认知成本也会越大，也更难快速抓住关键信息。</p>\r\n\r\n<p>VUI信息输出的载体是自然语言，靠听觉进行感知。因此，VUI在<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%95%E4%BD%8D\" target=\"_blank\">单位</a>时间内所能输出的信息量较小，较单一，且只涉及时间维度。正因为如此，VUI的语音一定要简洁高效，切记废话，要让用户在短时间内快速获知核心信息。由于语音信息密度小，用户在获取语音信息的时候也会更加专注和轻松，不会被附加信息所干扰。</p>\r\n\r\n<h2>GUI的设计目标和部分设计<a href=\"https://www.codesceo.com/search/keyword-%E5%8E%9F%E5%88%99\" target=\"_blank\">原则</a>同样适用于VUI</h2>\r\n\r\n<p>VUI同样属于用户体验设计范畴，只不过交互形式发生了变化，而人本化的设计目标和基于认知的设计原则不变。</p>\r\n\r\n<p>1. 易于理解和使用</p>\r\n\r\n<p>VUI同样需要易于理解和使用，同样需要遵循可见性、一致性、熟悉性和启示性。可见性&mdash;&mdash;尝试保证事物可见，让用户感知到哪些<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\">功能</a>是可用的，知道系统的当前<a href=\"https://www.codesceo.com/search/keyword-%E7%8A%B6%E6%80%81\" target=\"_blank\">状态</a>。</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>可见性不单单指视觉可见，对于VUI来说，可见性主要指听觉&ldquo;可见&rdquo;，目的是让用户察觉到它。</p>\r\n	</li>\r\n	<li>\r\n	<p>一致性&mdash;&mdash;在使用设计特征时保持一致，在相同系统和标准工作流程下保持一致。对于VUI来说，一致性包括人格一致、说法一致、<a href=\"https://www.codesceo.com/search/keyword-%E9%9F%B3%E6%95%88\" target=\"_blank\">音效</a>一致等。</p>\r\n	</li>\r\n	<li>\r\n	<p>熟悉性&mdash;&mdash;使用用户熟悉的事物，目的是让用户在使用产品时有熟悉感，而不是陌生感。熟悉感会让用户感到亲切和自信，否则会感到不安和焦虑。对于VUI来说，熟悉性指的是系统反馈的语音是让用户感到熟悉的、亲切的，就像朋友在与自己聊天。</p>\r\n	</li>\r\n	<li>\r\n	<p>启示性&mdash;&mdash;一个优秀的设计是能够清楚地看出它是用来做什么的。比如：把按钮设计成可按压的样子，那么人们在使用时就会按下它。对于VUI来说，启示性指的是系统要巧妙地给用户<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%90%E7%A4%BA\" target=\"_blank\">提示</a>，启发用户更熟练地与系统进行交互。</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>比如：如果用户说：&ldquo;我想听Barenaked Ladies的歌曲《<a href=\"https://www.codesceo.com/search/keyword-Call\" target=\"_blank\">Call</a>&nbsp;and Answer》。&rdquo; 然后VUI回应：&ldquo;播放Barenaked Ladies的《Call and Answer》。&rdquo;这样下次用户可能就会直接说：&ldquo;播放Barenaked Ladies的《Call and Answer》。&rdquo;</p>\r\n\r\n<p>2. 安全、信任的</p>\r\n\r\n<p>VUI同样需要让用户感到安全并信任系统，让用户感到控制感，知道他们在做什么和怎么去做。</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>控制&mdash;&mdash;清楚何人或何物处于控制之中，并允许用户进行控制。对于VUI来说，就是要给用户充分的控制权。比如：在播放<a href=\"https://www.codesceo.com/search/keyword-%E9%9F%B3%E4%B9%90\" target=\"_blank\">音乐</a>时，需要支持语音控制音量、上一首、下一首、收藏、取消收藏、切换播放模式等操作，让用户可以完全解放双手。</p>\r\n	</li>\r\n	<li>\r\n	<p>反馈&mdash;&mdash;快速地从系统向人反馈信息，从而用户可以了解他们的操作所带来的影响，恒定而一致的反馈会促进控制的感觉。对于VUI来说，需要给用户充分且恰当的语音、音效等反馈，让用户及时感知到系统状态。就像人与人交流时，如果A说了句话，B没有回应，那么A就会感到没有被尊重，这是很糟糕的体验。</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"https://www.codesceo.com/search/keyword-%E6%81%A2%E5%A4%8D\" target=\"_blank\">恢复</a>&mdash;&mdash;支持快速和有效的恢复操作，尤其是从失误和<a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\">错误</a>的操作中。对于VUI来说，同样要避免单行线式的操作路径，需要给用户<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%94%E5%9B%9E\" target=\"_blank\">返回</a>、恢复的机会，比如：有语音收藏歌曲功能，就一定也要有语音取消收藏功能。</p>\r\n	</li>\r\n	<li>\r\n	<p>约束&mdash;&mdash;提供一些约束从而用户不会进行不合适的操作，尤其是，可以通过限制性允许的操作和对危险操作的确认来防止用户产生严重的错误。对于VUI来说，对于某些有风险的操作，也需要给用户一定的约束。比如：当用户说：&ldquo;把音量调大最大&rdquo;时，系统最好让用户进行二次确认：&ldquo;音量最大会非常响，确定要调到最大吗？&rdquo;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>3. 灵活、愉悦的</p>\r\n\r\n<p>用户体验设计的目标之一就是要让用户感到愉悦，因此情感化设计被不断提起。人工智能对话AI产品的设计目标当然也是要让用户感到愉悦。</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>灵活性&mdash;&mdash;允许多种方式，适应具有不同经验和兴趣的用户。为用户提供可以改变事物外观和行为的机会，从而实现系统的个性化。比如：如果可以让用户选择或切换系统的人格（端庄稳重还是俏皮可爱），用户的满意度肯定会因此加分。</p>\r\n	</li>\r\n	<li>\r\n	<p>风格&mdash;&mdash;设计需要是时髦且吸引人的。对于VUI来说，需要系统的音色和语气是吸引人的，不管是端庄稳重、俏皮可爱，还是温柔舒缓，总之需要有魅力。有魅力才能让用户动感情，喜欢上这个系统。</p>\r\n	</li>\r\n	<li>\r\n	<p>趣味性&mdash;&mdash;一个吸引人的系统必须是文雅的、友好的、有趣的、令人愉悦的。对于VUI来说，需要在对话中尝试<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" target=\"_blank\">添加</a>一些趣味性。我们都喜欢幽默的人，自然也会喜欢幽默的系统。这主要取决于系统语料的质量，需要语料是丰富且有趣的。当然什么事都需要把握好尺度，过分了就会显得不真诚。</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>关于作者</p>\r\n\r\n<p>人工智能交互<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E8%AE%A1%E5%B8%88\" target=\"_blank\">设计师</a>，来网易前做B端通信<a href=\"https://www.codesceo.com/search/keyword-%E8%BD%AF%E4%BB%B6\" target=\"_blank\">软件</a>和C端网盘软件。在网易做过游戏交互设计，现在在网易三音云音箱研发团队，负责音箱APP的交互设计。喜欢游戏、运动和电影。</p>\r\n', 'http://manong.yaho.cc/static/upload/0882529bed95a46c/2c7caa9fcf1b79a4.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '随着人工智能的越发火热，越来越多公司开始研发人工智能产品，其中对话AI产品尤其被大家所关注。当前十分火爆的智能音箱就属于人工智能对话AI产品，其主要交互方式是语音对话，所以语音交互开始被广泛关注。本文尝试探讨的课题，即是图形用户界面设计与语音用户界面设计的关系', '10', '42', '1', '0', '1', '0', '2018-12-27 15:13:18', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('30', '1', '34', '其他', 'Mysql', '专业', '10', '如何像专业人员那样在openSUSE上安装和更新软件？opensuse安装软件详细教程源码', '<p><strong>YaST2</strong>是<a href=\"https://www.codesceo.com/search/keyword-%E5%A4%84%E7%90%86\" target=\"_blank\">处理</a><a href=\"https://www.codesceo.com/search/keyword-%E8%BD%AF%E4%BB%B6\" target=\"_blank\">软件</a>包的强大<a href=\"https://www.codesceo.com/search/keyword-%E5%B7%A5%E5%85%B7\" target=\"_blank\">工具</a>。您可以<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a>或<a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" target=\"_blank\">删除</a>软件包，更新甚至是保护软件包以防被删除或<a href=\"https://www.codesceo.com/search/keyword-%E4%BF%AE%E6%94%B9\" target=\"_blank\">修改</a>。openS<a href=\"https://www.codesceo.com/search/keyword-use\" target=\"_blank\">use</a>带了大量的软件包，还有更多的软件包可以通过为YaST软件<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a><a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" target=\"_blank\">添加</a>附加软件源来简单方便地安装。</p>\r\n\r\n<p>你可能在考虑迁移到 SUSE 或 openSUSE ，这有诸多原因。对一些人来说，将&nbsp;<a href=\"https://www.codesceo.com/search/keyword-linux\" target=\"_blank\">linux</a>&nbsp;整合到商业环境中是合情合理的步骤（ SUSE 收费支持服务很出众， openSUSE 社区总是乐于帮助）。对另一些人来说， SUSE 或 openSUSE 是市面上对高级<a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\">用户</a>最友好的 Linux 发行版之一。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<dl>\r\n	<dt>软件<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8D%E7%A7%B0\" target=\"_blank\">名称</a>：</dt>\r\n	<dd><strong>OpenSUSE Tumbleweed&nbsp;<a href=\"https://www.codesceo.com/search/keyword-2017\" target=\"_blank\">2017</a>&nbsp;官方正式版 32/64位</strong></dd>\r\n	<dt>软件大小：</dt>\r\n	<dd>4.7GB</dd>\r\n	<dt>更新时间：</dt>\r\n	<dd>2017-07-19</dd>\r\n</dl>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<dl>\r\n	<dt>软件名称：</dt>\r\n	<dd><strong>OpenSUSE Leap 42.2 官方正式版 32/64位</strong></dd>\r\n	<dt>软件大小：</dt>\r\n	<dd>4.7GB</dd>\r\n	<dt>更新时间：</dt>\r\n	<dd>2017-07-19</dd>\r\n</dl>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>不管你为何考虑迁移到 SUSE 生态系统（无论是通过 SUSE 还是 openSUSE ），大胆迁移之前最好要知道完成任务所需要的工具。幸运的是，<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>整个 Linux 社区一样，程序包管理是一项对用户极其友好的任务――如果你知道所要找的<a href=\"https://www.codesceo.com/search/keyword-%E5%AF%B9%E8%B1%A1\" target=\"_blank\">对象</a>。</p>\r\n\r\n<p>一些发行版让<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86%E8%BD%AF%E4%BB%B6\" target=\"_blank\">管理软件</a>的过程变得极其容易。就拿&nbsp;<a href=\"https://www.codesceo.com/search/keyword-Ubuntu\" target=\"_blank\">Ubuntu</a>&nbsp;Linux 来说吧！启动器（ Launcher ）上处于最显眼<a href=\"https://www.codesceo.com/search/keyword-%E4%BD%8D%E7%BD%AE\" target=\"_blank\">位置</a>的是 Ubuntu 软件中心<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E6%A0%87\" target=\"_blank\">图标</a>。点击该图标，即可<a href=\"https://www.codesceo.com/search/keyword-%E6%90%9C%E7%B4%A2\" target=\"_blank\">搜索</a>有待安装的成千上万个应用程序。如果是 openSUSE ，你不会<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%91%E7%8E%B0\" target=\"_blank\">发现</a>那个启动器位于很显眼的位置，不过这个工具很容易找到，也很容易使用。</p>\r\n\r\n<p>不妨从 GUI 的角度深入探究 openSUSE 的程序包管理世界。读完本文后，你应该能够轻松安装软件、更新机器，甚至添加软件库（那样你就能安装第三方应用程序了）。</p>\r\n\r\n<p><strong>你只需要 YaST2</strong></p>\r\n\r\n<p>SUSE 界一个很出众的<a href=\"https://www.codesceo.com/search/keyword-%E5%9C%B0%E6%96%B9\" target=\"_blank\">地方</a>在于，它们将绝大多数的系统管理集中于一个名为 YaST2 （另一个<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\">设置</a>工具）的工具。你可以从 YaST2 里面处理许多事情――其中一件事就是管理系系统上的软件。</p>\r\n\r\n<p>我准备使用最新版本的 openSUSE和 KDE&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%A1%8C%E9%9D%A2\" target=\"_blank\">桌面</a>。如果你选择了 GNOME 桌面环境，这不会改变 YaST （只是改变你如何找到 YaST2 ）。</p>\r\n\r\n<p>找到 YaST2 的最容易的方式就是，打开 KDE &ldquo; K &rdquo;<a href=\"https://www.codesceo.com/search/keyword-%E8%8F%9C%E5%8D%95\" target=\"_blank\">菜单</a>，在搜索栏中输入&ldquo; yast &rdquo;（见图 1 ）。 YaST2 项出现后，点击它，即可启动这款工具。</p>\r\n\r\n<p align=\"center\"><img alt=\"如何像专业人员那样在openSUSE上安装和更新软件？\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/d7a6632864.jpg\" width=\"580\" /></p>\r\n\r\n<p>图 1 ：从 KDE 菜单打开 YasST2 配置工具</p>\r\n\r\n<p>一旦 YaST2 打开，点击左侧<a href=\"https://www.codesceo.com/search/keyword-%E5%AF%BC%E8%88%AA\" target=\"_blank\">导航</a><a href=\"https://www.codesceo.com/search/keyword-%E9%9D%A2%E6%9D%BF\" target=\"_blank\">面板</a>上的 Software （软件）项（见图 2 ），就可以<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a>所有可用的与软件相关的项。</p>\r\n\r\n<p align=\"center\"><img alt=\"如何像专业人员那样在openSUSE上安装和更新软件？\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/07b43f6539.jpg\" width=\"580\" /></p>\r\n\r\n<p>图 2 ：你可以准备开始使用 YaST2 来管理软件了</p>\r\n\r\n<p><strong>安装软件</strong></p>\r\n\r\n<p>想演示的第一点就是如何安装一款软件。这相当简单。从 YaST2 的 Software （软件）部分，点击 Software Management （软件管理），等待软件<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F\" target=\"_blank\">管理系统</a>打开。</p>\r\n\r\n<p>1. 在搜索栏中输入你想要安装的那个软件的名称。</p>\r\n\r\n<p>2. 点击&nbsp;<a href=\"https://www.codesceo.com/search/keyword-search\" target=\"_blank\">search</a>&nbsp;（搜索）。</p>\r\n\r\n<p>3. 软件出现在主面板中后，点击相关的复选框（见图 3 ）。</p>\r\n\r\n<p>4. 点击 Accept （接受）。</p>\r\n\r\n<p>5. 浏览依赖项（会出现弹出式<a href=\"https://www.codesceo.com/search/keyword-%E7%AA%97%E5%8F%A3\" target=\"_blank\">窗口</a>）。</p>\r\n\r\n<p>6. 如果依赖项可以接受，点击 Continue （继续）。</p>\r\n\r\n<p>7. 让安装过程完成。</p>\r\n\r\n<p>8. 软件安装完毕后，点击 Finish （完成）。</p>\r\n\r\n<p align=\"center\"><img alt=\"如何像专业人员那样在openSUSE上安装和更新软件？\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/eeee50e682.jpg\" width=\"580\" /></p>\r\n\r\n<p>图 3 ：安装 Audacity 记录软件</p>\r\n\r\n<p>就是这样！你已在 openSUSE 上正式安装好了第一款软件。</p>\r\n\r\n<p><strong>更新软件</strong></p>\r\n\r\n<p>你用 YaST2 能做的最重要的事情之一就是<a href=\"https://www.codesceo.com/search/keyword-%E6%9B%B4%E6%96%B0%E7%B3%BB%E7%BB%9F\" target=\"_blank\">更新系统</a>。更新版至关重要，因为它们常常含有安全补丁和修正版。可以从 YaST2 的同一个子部分（软件）里面来处理更新版。在该子部分里面，你会找到一个项名为&nbsp;<a href=\"https://www.codesceo.com/search/keyword-online\" target=\"_blank\">online</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-update\" target=\"_blank\">update</a>&nbsp;（在线更新）。点击该项， YaST2 会检查可用的更新版。检查完毕后，系统会显示完整<a href=\"https://www.codesceo.com/search/keyword-%E5%88%97%E8%A1%A8\" target=\"_blank\">列</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>，列出了可用更新版（见图 4 ）。</p>\r\n\r\n<p align=\"center\"><img alt=\"如何像专业人员那样在openSUSE上安装和更新软件？\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/9775be1299.jpg\" width=\"580\" /></p>\r\n\r\n<p>使用 YaST2 更新系统。</p>\r\n\r\n<p>默认情况下，所有可用的<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" target=\"_blank\">升级</a>版将被选中以处理。你可以梳理程序包列表，不想升级的任何程序包就别选择。不过，如果你决定从升级列表中删除程序包，要知道它们也会影响其他升级版。要是觉得列表没<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\">问题</a>，点击Accept（接受），升级就会开始。</p>\r\n\r\n<p>注意：在一些情况下（正如升级任何Adobe程序包那样），你可能只好接受最终用户许可证协议（EULA）。可能还有冲突解决需要处理。想解决任何问题，看到依赖项解决办法时，点击Continue（继续）。如果更新了<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E6%A0%B8\" target=\"_blank\">内核</a>，YaST会告知你有必要重启。想在该提醒之后继续下一步，你就得点击Continue（继续，见图5）。</p>\r\n', 'http://manong.yaho.cc/static/upload/74a657f845e6a6d0/3e0d7afaba8477ff.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', 'YaST2是处理软件包的强大工具。您可以安装或删除软件包，更新甚至是保护软件包以防被删除或修改。openSuse带了大量的软件包，还有更多的软件包可以通过为YaST软件管理添加附加软件源来简单方便地安装。\r\n\r\n你可能在考虑迁移到 SUSE 或 openSUSE ，这有诸多原因。对一些人来说，将 linux 整合到商业环境中是合情合理的步骤（ SUSE 收费支持服务很出众， openSUSE 社区总是乐于帮助）。对另一些人来说， SUSE 或 openSUSE 是市面上对高级用户最友好的 Linux 发行版之一。\r\n\r\n软件名称：\r\nOpenSUSE Tumbleweed 2017 官方正式版 32/64位\r\n软件大小：', '10', '20', '0', '0', '1', '0', '2018-12-27 15:20:57', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('31', '2', '35', '其他', '其他', 'sql', '10', 'Sql Server2012 使用IP地址登录服务器的配置图文教程', '<p>最近在使用<a href=\"https://www.codesceo.com/search/keyword-NFine\" target=\"_blank\">NFine</a>Base框架+c#做一个系统的时候，在使用sql&nbsp;<a href=\"https://www.codesceo.com/search/keyword-server\" target=\"_blank\">server</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-2012\" target=\"_blank\">2012</a>&nbsp;连接<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a>库的时候 ，遇到几个<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\">问题</a>。</p>\r\n\r\n<p><strong>一.</strong></p>\r\n\r\n<p>就是在<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%AC%E5%9C%B0\" target=\"_blank\">本地</a>或者<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%9C%E7%A8%8B\" target=\"_blank\">远程</a>连接别人的数据库的时候，以ip地址作为<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%8D%E5%8A%A1%E5%99%A8\" target=\"_blank\">服务器</a><a href=\"https://www.codesceo.com/search/keyword-%E5%90%8D%E7%A7%B0\" target=\"_blank\">名称</a>&nbsp;以SQL Server 身份验证（即输入<a href=\"https://www.codesceo.com/search/keyword-%E7%99%BB%E5%BD%95\" target=\"_blank\">登录</a>名和<a href=\"https://www.codesceo.com/search/keyword-%E5%AF%86%E7%A0%81\" target=\"_blank\">密码</a>）的方式登录数据库 总会出现<a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\">错误</a></p>\r\n\r\n<p>比如说会<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%90%E7%A4%BA\" target=\"_blank\">提示</a>一下错误：</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\">用户</a>&nbsp;&#39;sa&#39; 登录失败，该用户<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>可信 SQL Server 连接无关联。</p>\r\n\r\n<p>但是使用&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%A1%E7%AE%97%E6%9C%BA\" target=\"_blank\">计算机</a>名\\实例名 这种方式就可以登录</p>\r\n\r\n<p>\\<img alt=\"\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/db6b120638.png\" /></p>\r\n\r\n<p>最后<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%91%E7%8E%B0\" target=\"_blank\">发现</a>还是数据库的配置问题，解决方案如下：</p>\r\n\r\n<p>我使用的是<a href=\"https://www.codesceo.com/search/keyword-win10\" target=\"_blank\">win10</a>&nbsp;系统 数据库是sql server 2012</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E9%BC%A0%E6%A0%87\" target=\"_blank\">鼠标</a>移动到win 键上 点击鼠标左键，找到<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a>的sql server 2012 如下图 所示：</p>\r\n\r\n<p><img alt=\"\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/8c40c38702.png\" /></p>\r\n\r\n<p>在这里还有一个问题，就是在这里边 你是<a href=\"https://www.codesceo.com/search/keyword-%E6%97%A0%E6%B3%95\" target=\"_blank\">无法</a>直接找到&nbsp;<a href=\"https://www.codesceo.com/search/keyword-sqlserver\" target=\"_blank\">sqlserver</a>&nbsp;数据库的 那个 配置<a href=\"https://www.codesceo.com/search/keyword-%E5%B7%A5%E5%85%B7\" target=\"_blank\">工具</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" target=\"_blank\">文件</a>夹的，对于win7系统在这里可以直接看到一个 配置工具 文件夹，里面有SQL SERVER 配置<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a>器 ，对于这种情况，其实可以直接在win10 的启动文件夹下找到，在 点开的sql server 2012 文件夹下 选中 SQL Server Data Tools 点击右键，如下图所示：</p>\r\n\r\n<p><img alt=\"\" src=\"https://damifen-1253821166.cossh.myqcloud.com/201712/f166490212.png\" /></p>\r\n', 'http://manong.yaho.cc/static/upload/2c81159ec35d4648/12b03f86d58bbd15.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '最近在使用NFineBase框架+c#做一个系统的时候，在使用sql server 2012 连接数据库的时候 ，遇到几个问题。\r\n\r\n一.\r\n\r\n就是在本地或者远程连接别人的数据库的时候，以ip地址作为服务器名称 以SQL Server 身份验证（即输入登录名和密码）的方式登录数据库 总会出现错误\r\n\r\n比如说会提示一下错误：', '10', '15', '0', '0', '1', '0', '2018-12-27 15:31:14', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('32', '2', '36', '其他', '其他', '小程序', '10', 'RhaPHP 1.5.0 发布，支持小程序', '<p>Rha<a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\">PHP</a>&nbsp;是微信平台<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\">管理</a>系统，支持多<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\">公众号</a>管理，<a href=\"https://www.codesceo.com/search/keyword-%E5%B0%8F%E7%A8%8B%E5%BA%8F\" target=\"_blank\">小程序</a>开发，APP<a href=\"https://www.codesceo.com/search/keyword-%E6%8E%A5%E5%8F%A3\" target=\"_blank\">接口</a>开发，平台独立且<a href=\"https://www.codesceo.com/search/keyword-%E5%BF%AB%E9%80%9F\" target=\"_blank\">快速</a>简洁易用。灵活的扩展应用<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%BA%E5%88%B6\" target=\"_blank\">机制</a>，具有容易上手，几乎融合微信接口，简单的<a href=\"https://www.codesceo.com/search/keyword-%E8%B0%83%E7%94%A8\" target=\"_blank\">调用</a>对<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%8C%E6%AC%A1%E5%BC%80%E5%8F%91\" target=\"_blank\">二次开发</a><a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\">与</a>开发扩展应用模块大大提高开发效率，降低企业商家运营成本。扩展应用模块化，机制灵活，<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>简单并快速上手。基于<a href=\"https://www.codesceo.com/search/keyword-thinkPHP\" target=\"_blank\">thinkPHP</a>5强力<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E6%A0%B8\" target=\"_blank\">内核</a>驱动与<a href=\"https://www.codesceo.com/search/keyword-LayUI\" target=\"_blank\">LayUI</a>前端框架，支持&nbsp;<a href=\"https://www.codesceo.com/search/keyword-linux\" target=\"_blank\">linux</a>/<a href=\"https://www.codesceo.com/search/keyword-windows\" target=\"_blank\">windows</a>/Mac。</p>\r\n\r\n<p>本次更新<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\">内容</a>如下：</p>\r\n\r\n<p>#支持了小程序开发</p>\r\n\r\n<p>#增加小程序客服消息</p>\r\n\r\n<p>#增加小程序<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\">数据</a><a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E6%9E%90\" target=\"_blank\">分析</a></p>\r\n\r\n<p>#增加小程序会员管理</p>\r\n\r\n<p>#增加<a href=\"https://www.codesceo.com/search/keyword-API\" target=\"_blank\">API</a><a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\">错误</a>代码友好<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%90%E7%A4%BA\" target=\"_blank\">提示</a></p>\r\n\r\n<p>#重写了同步粉丝提高了同步速度</p>\r\n\r\n<p>#增加了同步粉丝报错缺失<a href=\"https://www.codesceo.com/search/keyword-%E5%AD%97%E6%AE%B5\" target=\"_blank\">字段</a></p>\r\n\r\n<p>#修复UE编辑器<a href=\"https://www.codesceo.com/search/keyword-%E5%85%BC%E5%AE%B9\" target=\"_blank\">兼容</a>与选择<a href=\"https://www.codesceo.com/search/keyword-%E7%B4%A0%E6%9D%90\" target=\"_blank\">素材</a>群发成功后<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" target=\"_blank\">图片</a>不<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\">显示</a></p>\r\n\r\n<p>#LAYUI<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E9%A1%B5\" target=\"_blank\">分页</a>移出TP内核</p>\r\n\r\n<p>#修复access_token已经<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%87%E6%9C%9F\" target=\"_blank\">过期</a>并没有及时更新BUG</p>\r\n\r\n<p>#小程序公众号的应用都支持了二级<a href=\"https://www.codesceo.com/search/keyword-%E8%8F%9C%E5%8D%95\" target=\"_blank\">菜单</a></p>\r\n\r\n<p>#增加各<a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\">表</a>的应需的<a href=\"https://www.codesceo.com/search/keyword-%E7%B4%A2%E5%BC%95\" target=\"_blank\">索引</a></p>\r\n\r\n<p>#修复getAddonInfo&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E6%8C%87%E5%AE%9A\" target=\"_blank\">指定</a>addonName和mid时仍然从<a href=\"https://www.codesceo.com/search/keyword-%E5%BD%93%E5%89%8D\" target=\"_blank\">当前</a>mid取配置的<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\">问题</a>(感谢：wuzhuoqing)</p>\r\n\r\n<p>#修复社区反馈与Q群反馈的BUG。</p>\r\n\r\n<p>简洁、好用、快速、项目开发快几倍</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-RhaPHP\" target=\"_blank\">RhaPHP</a>微信平台管理系统，支持多公众号管理，小程序开发，APP接口开发，平台独立且快速简洁易用。灵活的扩展应用机制，具有容易上手，几乎融合微信接口，简单的调用对二次开发与开发扩展应用模块大大提高开发效率，降低企业商家运营成本。扩展应用模块化，机制灵活，代码简单并快速上手。基于<a href=\"https://www.codesceo.com/search/keyword-thinkPHP5\" target=\"_blank\">thinkPHP5</a>强力内核驱动与LAYUI前端框架，支持 Linux/Windows/Mac。</p>\r\n', 'http://manong.yaho.cc/static/upload/35b4cc244151ae1e/6f07a7ffa0ecc17c.png', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', 'RhaPHP 是微信平台管理系统，支持多公众号管理，小程序开发，APP接口开发，平台独立且快速简洁易用。灵活的扩展应用机制，具有容易上手，几乎融合微信接口，简单的调用对二次开发与开发扩展应用模块大大提高开发效率，降低企业商家运营成本。扩展应用模块化，机制灵活，代码简单并快速上手。基于thinkPHP5强力内核驱动与LayUI前端框架，支持 linux/windows/Mac。\r\n\r\n本次更新内容如下', '10', '20', '0', '0', '1', '0', '2018-12-27 15:32:33', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('33', '2', '37', '其他', '其他', '宝塔', '10', '宝塔面板手动破解为专业版的方法', '<p>运营还是支持正版，这个可以自己玩一下，还是挺简单的</p>\r\n\r\n<p>首先<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\">安装</a><a href=\"https://www.codesceo.com/search/keyword-%E9%9D%A2%E6%9D%BF\" target=\"_blank\">面板</a><a href=\"https://www.codesceo.com/search/keyword-%E5%85%8D%E8%B4%B9\" target=\"_blank\">免费</a>版</p>\r\n\r\n<p>然后<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" target=\"_blank\">升级</a>专业版</p>\r\n\r\n<p>wget -O&nbsp;<a href=\"https://www.codesceo.com/search/keyword-update\" target=\"_blank\">update</a>.sh http://download.bt.cn/install/update_pro.sh &amp;&amp; bash update.sh pro</p>\r\n\r\n<p>找到路径/www/<a href=\"https://www.codesceo.com/search/keyword-server\" target=\"_blank\">server</a>/panel/class 找到<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" target=\"_blank\">文件</a>名或者直接<a href=\"https://www.codesceo.com/search/keyword-%E6%90%9C%E7%B4%A2\" target=\"_blank\">搜索</a>：common.py</p>\r\n\r\n<p>搜索<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" target=\"_blank\">代码</a>164行</p>\r\n\r\n<p>data = panelAuth().get_order_status(None)</p>\r\n\r\n<p><a href=\"https://www.codesceo.com/search/keyword-%E6%9B%BF%E6%8D%A2\" target=\"_blank\">替换</a>成</p>\r\n\r\n<p>data = {&#39;status&#39; : True,&#39;msg&#39; : {&#39;end<a href=\"https://www.codesceo.com/search/keyword-Tim\" target=\"_blank\">Tim</a>e&#39; : 32503651199 }}</p>\r\n\r\n<p>完成后，进入 /www/server/panel/data 新建一个文件 文件名为：<a href=\"https://www.codesceo.com/search/keyword-use\" target=\"_blank\">use</a>rInfo.<a href=\"https://www.codesceo.com/search/keyword-json\" target=\"_blank\">json</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\">内容</a>空的，如果存在这个文件的删掉重新新建文件。</p>\r\n\r\n<p>最后输入<a href=\"https://www.codesceo.com/search/keyword-%E5%91%BD%E4%BB%A4\" target=\"_blank\">命令</a>&nbsp;/etc/init.d/bt restart 重启宝塔 完美嗨皮！！</p>\r\n\r\n<p>注意：安装前请<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\">关闭</a>宝塔<a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E9%A1%B5\" target=\"_blank\">网页</a>&nbsp; 防止<a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\">错误</a></p>\r\n\r\n<p>如果使用失败，请<a href=\"https://www.codesceo.com/search/keyword-%E6%81%A2%E5%A4%8D\" target=\"_blank\">恢复</a>成免费版 代码为</p>\r\n\r\n<p>wget -O update.sh http://download.bt.cn/install/update.sh &amp;&amp; bash update.sh free</p>\r\n\r\n<p>侵犯<a href=\"https://www.codesceo.com/search/keyword-%E7%89%88%E6%9D%83\" target=\"_blank\">版权</a>可耻！</p>\r\n', 'http://manong.yaho.cc/static/upload/2be888f2c382631c/3462df5607c98280.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '运营还是支持正版，这个可以自己玩一下，还是挺简单的\r\n\r\n首先安装面板免费版\r\n\r\n然后升级专业版\r\n\r\nwget -O update.sh http://download.bt.cn/install/update_pro.sh && bash update.sh pro\r\n\r\n找到路径/www/server/panel/class 找到文件名或者直接搜索：common.py\r\n\r\n搜索代码164行\r\n\r\ndata = panelAuth().get_order_status(None)\r\n\r\n替换成\r\n\r\ndata = {\'status\' : True,\'msg\' : {\'endTime\' : 32503651199 }}\r\n\r\n完成后，进入 /www/server/pa', '10', '30', '2', '0', '1', '0', '2018-12-27 15:33:33', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-24');
INSERT INTO `store_goods` VALUES ('34', '0', '11', 'Java', 'Oracle', '棋牌,棋牌,棋牌', '1', '金州水鱼天下(有俱乐部功能)棋牌游戏完整组件下载', '<p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\"><a href=\"https://www.codesceo.com/search/keyword-%E9%87%91%E5%B7%9E%E6%B0%B4%E9%B1%BC%E5%A4%A9%E4%B8%8B\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">金州水鱼天下</a>&nbsp;金州<a href=\"https://www.codesceo.com/search/keyword-%E6%A3%8B%E7%89%8C%E6%B8%B8%E6%88%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">棋牌游戏</a>完整<a href=\"https://www.codesceo.com/search/keyword-%E7%BB%84%E4%BB%B6\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">组件</a><a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">下载</a><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>此款金州水鱼带酒馆（类似<a href=\"https://www.codesceo.com/search/keyword-%E4%BF%B1%E4%B9%90%E9%83%A8\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">俱乐部</a>）支持6人-8人<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>金州水鱼游戏灵感来源于兴义<a href=\"https://www.codesceo.com/search/keyword-%E6%9C%AC%E5%9C%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">本地</a>常用的行酒令玩法，在喝酒时可以避免扑克牌被打湿、没有扑克牌就不能玩水鱼的烦恼。更尊重游戏本身流程，避免出现换牌、少牌等不公平现像。</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">一、金州水鱼玩法<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模式</a>，【轮庄模式】【随机分配模式】【抢庄模式】。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>【抢庄模式】 1分 2分 3分 4分抢庄，如果同时有两个人抢庄分数一样，系统随机分配最高分数的玩家当庄。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>【轮庄模式】每局按照顺序选择一名玩家为庄家，其他为闲家！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>【随机分配庄家模式】一局随机抽取一名玩家为庄家，其他为闲家！</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">二、金州水鱼游戏赔付：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>根据庄家抢庄的倍数来设定，如房间底分1分，庄家4倍抢庄，闲家下1分 闲家输则赔4分。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>倍数说明：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>【强攻2倍】【密牌开3倍】【密牌认2倍】【水鱼4倍】【水鱼天下8倍】。</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">三：金州水鱼牌型大小<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>单边大小规则：豹子(2张同点牌)&gt;A8九&gt;9花&gt;9&gt;&gt;8花&gt;8&gt;7花&gt;7&gt;6花&gt;6&gt;5花&gt;5&gt;4花&gt;4&gt;3花&gt;3&gt;2花&gt;2&gt;1花&gt;1&gt;臭十<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>单张大小规则：A&gt;K&gt;Q&gt;J&gt;9&gt;8&gt;7&gt;6&gt;5&gt;4&gt;3&gt;2</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">金州水鱼单边牌型同点大小规则：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>带A组合的同点最大，如 A7八大于8花牌型，如果同为A7八牌型，比A点花色，黑桃&gt;红桃&gt;梅花&gt;方块（花色大小下同）<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>同点同牌型比单张大牌花型，如 黑桃A梅花8 比 红桃A黑桃8 ，黑桃A梅花8赢，因为黑桃A比红桃A大<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>同点不同牌型：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>比单边单张较大点数大小 （A点在组合牌型中是最大的，但在单点里面是最小的。）<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>例：A7(8)&gt;8K&gt;62(8)&gt;53(8)<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>穿小规则：如果两张牌加起来点数超过十点，则计算个位数点数为最终点数，但小于同点没穿的牌型。如 98七 小于 43七。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>同穿规则：如果庄闲相比的点数同点同穿，则比单张大牌点数，点数一样比花型 如 76三 小于 85三 （8比7大）<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>臭十：如果庄闲相比的点数都为臭十，双花臭十大于普通臭十，双方为普通臭十比单张大牌点数，点数一样比花型 如 64臭十 小于 73臭十 小于 QJ双花臭十（6小于7）<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>双花臭十：如果庄闲相比的点数都为双花臭十，则先比花点，花点一样比花型 如 黑桃K黑桃J臭十 小于 方块K方块Q臭十 （Q比J大）</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\"><a href=\"http://www.arm8.net/tag/%e9%87%91%e5%b7%9e%e6%b0%b4%e9%b1%bc/\" title=\"【查看含有[金州水鱼]标签的文章】\" target=\"_blank\" style=\"color: rgb(255, 102, 102); text-decoration-line: none; box-sizing: border-box; margin: 0px; padding: 0px; transition: all 0.5s ease 0s;\">金州水鱼</a>玩法介绍：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>1.每局按玩法模式选择一名玩家为庄家，其他为闲家！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>2.每局每门牌发四张，四张牌分为大小两边牌，每两张牌凑点数相加！相加的点数由闲家<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">与</a>庄家比牌，牌大的一边获胜！四张牌匹配自己要<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">设置</a>的点数。如果是一样的牌则为豹子。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>例如：4张牌为4点6点9点与花牌！可选择9点+6点和4点和花牌，或者选择9点+花牌和6点+4点的自由组合！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>3.金州水鱼最大牌为A点，任何牌型带A牌的最大！其次是K Q J 9 8 7 6 5 4 3 2 以此排列，穿牌为最小牌面！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>例如：A+8和9+K A+8是大牌！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>9+8和3+4 9+8是小牌！</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">金州水鱼获胜规则：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>1.4张牌，两边牌都大于对方，杀可胜利！你获得分！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>2.4张牌，两边牌其中有一边牌小于对方，选择杀,对方选择反！ 则失败！你失去分！如果对方选择信，你获得分！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>3.4张牌，两边牌其中有一边牌小于对方，选择走,对方选择反！ 则胜利！你获得分！如果对方选择信,双方不扣不加分！如果选择杀,对方选择反！ 则失败！你失去分！如果选择杀,对方信！ 则胜利！你获得分！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>4.4张牌，两边牌都小于对方，选择走,对方选择反！ 则失败！你失去分！如果对方选择信,双方不扣不加分！如果选择杀,对方选择反！ 则失败！你失去分！如果选择杀,对方信！ 则胜利！你获得分！<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>5.水鱼，庄家两边牌杀闲家则庄赢，庄家有一边牌比闲家大则走信，庄家两边牌小于闲家则赔。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>6.水鱼天下，庄家无条件杀闲家，即使闲家同样拿水鱼天下且牌点比庄家大！！！（例：庄家4个2，闲家4个K，庄赢！）</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">四.<a href=\"http://www.arm8.net/tag/%e9%87%91%e5%b7%9e%e6%a3%8b%e7%89%8c/\" title=\"【查看含有[金州棋牌]标签的文章】\" target=\"_blank\" style=\"color: rgb(255, 102, 102); text-decoration-line: none; box-sizing: border-box; margin: 0px; padding: 0px; transition: all 0.5s ease 0s;\">金州棋牌</a>特殊规则<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>1.水鱼天下：四张同样点数的牌为水鱼天下，四张AAAA为天牌是游戏里最大的牌<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>2.水鱼：由两个豹子组成,例如：AA+88、KK+QQ<a href=\"https://www.codesceo.com/search/keyword-%E7%B1%BB%E5%9E%8B\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">类型</a>的牌为水鱼。</p><p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\">五.金州水鱼牌型玩法：<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>庄家有、杀 、走 、认赔、 选项。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>闲家有、信 、反、 密牌 、强攻 、密赔 、选项。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"/>如果闲家选择密牌，庄家可以选择 认赔或者开。</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181227/0b6070acc60c5cd858e44ecffed39ad5.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '<p style=\"margin-top: 0.8em; margin-bottom: 0.8em; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; color: rgb(51, 51, 51); line-height: 1.9; font-family: &quot;Microsoft Yahei&quot;; background-color: rgb(255, 255, 255);\"><a href=\"https://www.codesceo.com/search/keyword-%E9%87%91%E5%B7%9E%E6%B0%B4%E9%B1%BC%E5%A4%A9%E4%B8%8B\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">金州水鱼天下</a>&nbsp;金州<a href=\"https://www.', '0', '29', '0', '0', '1', '0', '2018-12-27 20:21:46', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '2', '12-24');
INSERT INTO `store_goods` VALUES ('35', '0', '14', '功能增强', '0', '插件,源码,插件', '0', '微擎微赞通用模块:付费阅读 v5.2.2 解密开源版微信源码下载', '<p>修复<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E7%AB%A0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">文章</a><a href=\"https://www.codesceo.com/search/keyword-%E5%88%97%E8%A1%A8\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">列</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">表</a><a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">问题</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">修复<a href=\"https://www.codesceo.com/search/keyword-%E9%AA%8C%E8%AF%81%E7%A0%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">验证码</a>问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">修复部分<a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">用户</a>更新版本失败问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">文章<a href=\"https://www.codesceo.com/search/keyword-%E8%AF%A6%E6%83%85%E9%A1%B5\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">详情页</a>不<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">显示</a>输入的空格和回车</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">修复上个版本遗留问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">增加是否直接显示留言</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">修复个人中心<a href=\"https://www.codesceo.com/search/keyword-%E5%8F%91%E5%B8%83\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">发布</a>文章时后显示不出回车 空格等问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">修复上个版本带有多余<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">文件</a>问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">增加作者pc端发布文章<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">功能</a>；</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181227/8e1c1465ef0a001b3915a4c6fc221ec8.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '微擎微赞通用模块:付费阅读 v5.2.2 解密开源版微信源码下载\n\n版本号：5.2.2 – 标准版\n\n修复文章列表问题\n\n修复验证码问题\n\n修复部分用户更新版本失败问题\n\n文章详情页不显示输入的空格和回车\n\n修复上个版本遗留问题\n\n增加是否直接显示留言\n\n修复个人中心发布文章时后显示不出回车 空格等问题\n\n修复上个版本带有多余文件问题\n\n增加作者pc端发布文章功能；', '0', '9', '1', '0', '1', '0', '2018-12-27 20:50:55', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '3', '12-27');
INSERT INTO `store_goods` VALUES ('36', '0', '20', '视频', '0', '龙虎,龙虎,龙虎', '0', 'H5龙虎斗微信游戏源码 视频搭建教程', '<p>安装完VC运行库打开upupw<br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">先S5<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">关闭</a>全部服务&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">在S1 开启全部服务</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">出现这种情况&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%94%E5%9B%9E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">返回</a>主界面 按4</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">然后输入K 解除</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><a href=\"https://www.codesceo.com/search/keyword-%E9%87%8D%E5%A4%8D\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">重复</a>上面步骤</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">输入3 绑定防域名</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">用游戏域名打开<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">后台</a>&nbsp;xiao.lanhuzeng.cn/admin</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">&nbsp;帐号admin&nbsp;&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E5%AF%86%E7%A0%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">密码</a>123456&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">D:\\longhu\\vhosts\\lhl.bxcxzn.cn&nbsp;&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">公众号</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8E%88%E6%9D%83\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">授权</a>放在这个目录下</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181228/9cff9e3d5604e46497ec99d87b84bf54.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', 'H5龙虎斗微信游戏源码 文字+视频搭建教程\n\n先安装VC运行库 \n\n安装完VC运行库打开upupw\n\n先S5关闭全部服务 \n\n在S1 开启全部服务\n\n出现这种情况 返回主界面 按4\n\n然后输入K 解除\n\n重复上面步骤\n\n输入3 绑定防域名\n\n用游戏域名打开后台 xiao.lanhuzeng.cn/admin\n\n 帐号admin  密码123456 \n\nD:\\longhu\\vhosts\\lhl.bxcxzn.cn  公众号授权放在这个目录下', '0', '6', '0', '0', '1', '0', '2018-12-28 09:40:48', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '4', '12-28');
INSERT INTO `store_goods` VALUES ('37', '0', '18', '文档', '0', '文档,文档,源码', '0', '爆款抖音运营推广全攻略：如何打造爆款，轻松赚钱！', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; list-style: none; word-break: normal; word-wrap: break-word; color: rgb(51, 51, 51); font-family: 微软雅黑; text-size-adjust: none; line-height: 34px; background-color: rgb(255, 255, 255);\">需要一个 WORD 文档，没有的可以去<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">下载</a>！</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: normal; box-sizing: border-box; list-style: none; word-break: normal; word-wrap: break-word; color: rgb(51, 51, 51); font-family: 微软雅黑; text-size-adjust: none; line-height: 34px; background-color: rgb(255, 255, 255);\">下面我通过这三点提纲，进行梳理<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">分享</a>：<br style=\"box-sizing: border-box; text-size-adjust: none; word-wrap: break-word; word-break: normal;\"/><a href=\"https://www.codesceo.com/search/keyword-%E6%8A%96%E9%9F%B3\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">抖音</a>基本操作和玩法;<br style=\"box-sizing: border-box; text-size-adjust: none; word-wrap: break-word; word-break: normal;\"/><a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">内容</a>运营核心关键点;<br style=\"box-sizing: border-box; text-size-adjust: none; word-wrap: break-word; word-break: normal;\"/>如何提高抖音打开率。</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181228/f2f3bf4de9ff0f717b030b716c1d86e8.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '需要一个 WORD 文档，没有的可以去下载！\n\n下面我通过这三点提纲，进行梳理分享：\n抖音基本操作和玩法;\n内容运营核心关键点;\n如何提高抖音打开率。', '0', '5', '0', '0', '1', '0', '2018-12-28 09:50:10', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '4', '12-28');
INSERT INTO `store_goods` VALUES ('38', '0', '14', '游戏娱乐', '0', '源码,微擎,微擎', '0', '【微擎微赞模块】米波现场7.1.0 支持3D签到 微现场大屏幕 互动 留言墙', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(33, 25, 34); font-family: &quot;Segoe UI&quot;, Tahoma, &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, Simsun; font-size: 13px;\"><a href=\"https://www.codesceo.com/search/keyword-%E7%B1%B3%E6%B3%A2%E7%8E%B0%E5%9C%BA\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">米波现场</a>独立<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8E%E5%8F%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">后台</a>版微现场大屏幕<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E6%93%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微擎</a>无<a href=\"https://www.codesceo.com/search/keyword-%E6%8E%88%E6%9D%83\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">授权</a>原版V7.1.0，支持3D<a href=\"https://www.codesceo.com/search/keyword-%E7%AD%BE%E5%88%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">签到</a>&nbsp;微现场大屏幕 互动 留言墙等，<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%A4%A7%E5%B1%8F%E5%B9%95\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微信大屏幕</a>微<a href=\"https://www.codesceo.com/search/keyword-%E5%A9%9A%E5%BA%86\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">婚庆</a>年会微信墙<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%8C%E7%BE%8E%E8%BF%90%E8%90%A5\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">完美运营</a>版</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">11月28日 亲测可用</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">关于创建<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%90%E7%A4%BA\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">提示</a>请选择活动<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">功能</a>的<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">问题</a>，需要在系统<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">设置</a>-价格设置，填写价格即可，然后新建活动就可以选择了，直接下一步到支付的时候无视直接下一步就好了，如下图。</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181228/d290202bff4750fe608c89ef40f0847e.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '米波现场独立后台版微现场大屏幕微擎无授权原版V7.1.0，支持3D签到 微现场大屏幕 互动 留言墙等，微信大屏幕微婚庆年会微信墙完美运营版\n\n11月28日 亲测可用\n\n关于创建提示请选择活动功能的问题，需要在系统设置-价格设置，填写价格即可，然后新建活动就可以选择了，直接下一步到支付的时候无视直接下一步就好了，如下图。', '0', '1', '0', '0', '1', '0', '2018-12-28 09:53:47', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '3', '12-28');
INSERT INTO `store_goods` VALUES ('39', '0', '17', '文档', '0', '文档,文档,文档', '0', '微擎微赞模块:志汇-超级外卖 餐饮外卖扫码点餐小程序5.9.3 解密开源版微信源码', '<p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\"><a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E6%93%8E\" target=\"_blank\" style=\"color: rgb(119, 119, 119); text-decoration-line: none; outline: 0px;\">微擎</a><a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E8%B5%9E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微赞</a>模块:<a href=\"https://www.codesceo.com/search/keyword-%E5%BF%97%E6%B1%87\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">志汇</a>-<a href=\"https://www.codesceo.com/search/keyword-%E8%B6%85%E7%BA%A7%E5%A4%96%E5%8D%96\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">超级外卖</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-%E9%A4%90%E9%A5%AE%E5%A4%96%E5%8D%96\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">餐饮外卖</a><a href=\"https://www.codesceo.com/search/keyword-%E6%89%AB%E7%A0%81%E7%82%B9%E9%A4%90\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">扫码点餐</a><a href=\"https://www.codesceo.com/search/keyword-%E5%B0%8F%E7%A8%8B%E5%BA%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">小程序</a>5.9.3 解密<a href=\"https://www.codesceo.com/search/keyword-%E5%BC%80%E6%BA%90\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">开源</a>版<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E6%BA%90%E7%A0%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微信源码</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">版本号：5.9.3 - 超级餐饮<a href=\"https://www.codesceo.com/search/keyword-%E8%90%A5%E9%94%80\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">营销</a>版&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">备注：需要重新<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8A%E4%BC%A0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">上传</a>小程序&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">1.<a href=\"https://www.codesceo.com/search/keyword-%E4%BC%98%E5%8C%96\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">优化</a>商品详情<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">关闭</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8C%89%E9%92%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">按钮</a>的<a href=\"https://www.codesceo.com/search/keyword-%E4%BD%8D%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">位置</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">2.优化商家点<a href=\"https://www.codesceo.com/search/keyword-%E6%A0%B8%E9%94%80\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">核销</a>完成后没有<a href=\"https://www.codesceo.com/search/keyword-%E8%BF%94%E5%9B%9E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">返回</a>动作</p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">3.优化各类订单付款<a href=\"https://www.codesceo.com/search/keyword-%E7%8A%B6%E6%80%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">状态</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">4.优化拒绝订单连续点击<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">问题</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">5.优化大量订单导出出现崩溃问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">6.优化其他<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">内容</a></p><p style=\"white-space: normal;\"><br/></p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181228/8de8724f862f163ff3d93093a320b19c.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '微擎微赞模块:志汇-超级外卖 餐饮外卖扫码点餐小程序5.9.3 解密开源版微信源码\n\n版本号：5.9.3 - 超级餐饮营销版 \n\n备注：需要重新上传小程序 \n\n1.优化商品详情关闭按钮的位置\n\n2.优化商家点核销完成后没有返回动作\n\n3.优化各类订单付款状态\n\n4.优化拒绝订单连续点击问题\n\n5.优化大量订单导出出现崩溃问题\n\n6.优化其他内容\n\n​', '10', '3', '0', '0', '1', '0', '2018-12-28 10:02:15', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '4', '12-28');
INSERT INTO `store_goods` VALUES ('40', '1', '7', 'PHP', 'Mssqi', 'think,think,think', '0', '本然良品微信公排理财福利三级分销商城系统源码|基于ThinkPHP开发+安装教程', '<p style=\"margin-top: 0px; margin-bottom: 18px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; word-wrap: break-word; color: rgb(85, 85, 85); font-family: &quot;Microsoft Yahei&quot;; font-size: 15px; background-color: rgb(255, 255, 255);\">基于<a href=\"https://www.codesceo.com/search/keyword-Thinkphp\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">Think</a><a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">PHP</a>开发的本然良品微信公排理财复利系统+<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%89%E7%BA%A7%E5%88%86%E9%94%80\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">三级分销</a><a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">商城</a><a href=\"https://www.codesceo.com/search/keyword-PHP\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">PHP</a>源码，底层基于TinkPHP3.2.3框架进行开发的微信公排理财复利、<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%89%E7%BA%A7%E5%88%86%E9%94%80\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">三级分销</a><a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E%E7%B3%BB%E7%BB%9F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"></a><a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">商城</a>系统。</p><p style=\"margin-top: 0px; margin-bottom: 18px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; word-wrap: break-word; color: rgb(85, 85, 85); font-family: &quot;Microsoft Yahei&quot;; font-size: 15px; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-weight: 700;\">测试环境：PHP5.4+<a href=\"https://www.codesceo.com/search/keyword-MysqL\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">MysqL</a>&nbsp;，</span><span style=\"font-weight: 700;\">程序<a href=\"https://www.codesceo.com/search/keyword-%E5%8C%85%E5%90%AB\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">包含</a>源码+介绍+<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">安装</a>教程+完整<a href=\"https://www.codesceo.com/search/keyword-%E6%95%B0%E6%8D%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">数据</a></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; font-size: 12px; line-height: 30px; color: rgb(68, 68, 68); font-family: 微软雅黑; background-color: rgb(255, 255, 255);\"><strong style=\"margin: 0px; padding: 0px;\"><span style=\"font-size: 16px; margin: 0px; padding: 0px;\"></span></strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">微信公排系统：二二复制、三三复制、四四复制、五五复制..<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">定义</a><a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">设置</a>复制的数量</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">一、微信端系统主页面<a href=\"https://www.codesceo.com/search/keyword-%E9%A2%9C%E8%89%B2\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">颜色</a>可以<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">定义</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">二、以<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微信商城</a>为主线路，防止微信官方封杀<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">公众号</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）成为分销商的形式有3种：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">无条件成为分销商（也就是直接关注<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">公众号</a>就可以成为分销商）</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">在商城消费多少金额可以成为分销商</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">在商城购买制定的<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">产品</a>可以成分销商</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）自定义分销级别</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">商城采用1-9级的分销<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模式</a>（也可以分销商自己购买返佣金），分销级别、分销佣金完全可以自定义，想用几级用几级，方便灵活</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（3）分销佣金自定义</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">1-9级的分销佣金可以自己随心<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">设置</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（4）魔法推广专属二维码</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">二维码、微信<a href=\"https://www.codesceo.com/search/keyword-%E5%A4%B4%E5%83%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">头像</a>、<a href=\"https://www.codesceo.com/search/keyword-%E5%BE%AE%E4%BF%A1%E6%98%B5%E7%A7%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">微信昵称</a>的大小、<a href=\"https://www.codesceo.com/search/keyword-%E4%BD%8D%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">位置</a>完全自定义，只要你在市面上看到的推广二维码，全部都可以做出来</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（5）消息<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E6%9D%BF\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模板</a>自定义</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">1-9级的下级、下下级、下下下级关注、购买等<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E6%9D%BF\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模板</a>消息<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">内容</a>和<a href=\"https://www.codesceo.com/search/keyword-%E9%A2%9C%E8%89%B2\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">颜色</a>都可以根据自己喜欢的来设置</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">三、参加公排的<a href=\"https://www.codesceo.com/search/keyword-%E7%8A%B6%E6%80%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">状态</a>可以开启或<a href=\"https://www.codesceo.com/search/keyword-%E5%85%B3%E9%97%AD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">关闭</a>，由您说了算</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">四、积分<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">功能</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）关注送积分</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）<a href=\"https://www.codesceo.com/search/keyword-%E7%AD%BE%E5%88%B0\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">签到</a>送积分</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（3）购买<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">产品</a>送积分，返佣返积分</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（4）<a href=\"https://www.codesceo.com/search/keyword-%E7%A7%AF%E5%88%86%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">积分商城</a>，获得的积分可以在商城兑换礼品</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（5）使用积分可以参加抽奖</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（6）使用积分参加公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">五、商城代金券<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">功能</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）可以购买代金券参加公排，本然良品<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模式</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）代金券的面值可以自由设定，可以自由设置代金券的购买金额</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（3）代金券可以设置库存和有限期</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（4）代金券可以设置在商城满金额使用，或无门槛使用</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">六、参加公排的条件：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）可以在商城消费<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%BB%E6%84%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">任意</a>一款产品参加公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）可以购买<a href=\"https://www.codesceo.com/search/keyword-%E6%8C%87%E5%AE%9A\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">指定</a>的产品参加公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">七、国际公排、<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" target=\"_blank\" style=\"color: rgb(119, 119, 119); text-decoration-line: none; outline: 0px;\">自动</a>下滑、人人**</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">八、单点卡位、多点卡位</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）单点卡位：购买一个<a href=\"https://www.codesceo.com/search/keyword-%E6%8C%87%E5%AE%9A\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">指定</a>的产品或<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%BB%E6%84%8F\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">任意</a>消费，可以在公排系统中占一个<a href=\"https://www.codesceo.com/search/keyword-%E4%BD%8D%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">位置</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）多点卡位：购买多个指定的产品或<a href=\"https://www.codesceo.com/search/keyword-%E9%87%8D%E5%A4%8D\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">重复</a>消费，可以在公排系统中占多个位置</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">七、二二复制、三三复制、四四复制、五五复制......自定义设置复制的数量</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">九、1-12层，自由设置出局的层数</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">十、1-12层层数的红包金额自定义设定</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">十一、出局之后，可以自定义设置复排的资格条件</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（1）可以直接<a href=\"https://www.codesceo.com/search/keyword-%E5%85%8D%E8%B4%B9\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">免费</a>进入下一轮公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（2）<a href=\"https://www.codesceo.com/search/keyword-%E9%87%8D%E5%A4%8D\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">重复</a>购买进入下一轮公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">（3）只能参加一次公排，<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8D%E6%94%AF%E6%8C%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">不支持</a>进入下一轮公排</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">十二、佣金和返现红包秒到，也可以设置必须通过审核才能发放</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">十三、多级<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">管理</a>员<a href=\"https://www.codesceo.com/search/keyword-%E6%9D%83%E9%99%90%E8%AE%BE%E7%BD%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">权限设置</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">不同级别的<a href=\"https://www.codesceo.com/search/keyword-%E7%AE%A1%E7%90%86\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">管理</a>员，可以操作不同的功能，方便管理</p>', 'http://manong.yaho.cc/public/uploads/20181228/1bb1811354ef55742801719ff33c76d5.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '基于ThinkPHP开发的本然良品微信公排理财复利系统+三级分销商城PHP源码，底层基于TinkPHP3.2.3框架进行开发的微信公排理财复利、三级分销商城系统。', '20', '9', '0', '0', '1', '0', '2018-12-28 10:08:49', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '1', '12-28');
INSERT INTO `store_goods` VALUES ('41', '0', '11', 'Java', 'Oracle', '连环,连环,连环', '2', '连环夺bao游戏源码，带控制库存机器人真正运营级别', '<p><span style=\"font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">连环夺bao</span><a href=\"https://www.codesceo.com/search/keyword-%E6%B8%B8%E6%88%8F%E6%BA%90%E7%A0%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">游戏源码</a><span style=\"font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">，带控制库存机器人真正</span><a href=\"https://www.codesceo.com/search/keyword-%E8%BF%90%E8%90%A5%E7%BA%A7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">运营级</a><span style=\"font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">别</span></p>', 'http://manong.yaho.cc/public/uploads/20181228/55d1ce142723fe1b7115621c5392d941.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '连环夺bao游戏源码，带控制库存机器人真正运营级别', '20', '19', '0', '0', '1', '0', '2018-12-28 10:14:55', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '2', '12-28');
INSERT INTO `store_goods` VALUES ('42', '0', '14', '电子商务', '0', '积分,积分,积分', '0', '[版本A]人人商城源码v2 3.10.8支持3.9.43升级上来开源修复积分商城运费未支付却显示', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">[版本A]人人<a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E%E6%BA%90%E7%A0%81\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"></a><a href=\"https://www.codesceo.com/search/keyword-%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">商城</a>源码v2 3.10.8支持3.9.43<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">升级</a>上来<a href=\"https://www.codesceo.com/search/keyword-%E5%BC%80%E6%BA%90\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">开源</a>修复<a href=\"https://www.codesceo.com/search/keyword-%E7%A7%AF%E5%88%86%E5%95%86%E5%9F%8E\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">积分商城</a>运费未支付却<a href=\"https://www.codesceo.com/search/keyword-%E6%98%BE%E7%A4%BA\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">显示</a>无需支付的<a href=\"https://www.codesceo.com/search/keyword-%E9%97%AE%E9%A2%98\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">问题</a></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">更新<a href=\"https://www.codesceo.com/search/keyword-%E6%97%A5%E5%BF%97\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">日志</a>：修复店铺弹幕<a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">用户</a>昵称存在回车<a href=\"https://www.codesceo.com/search/keyword-%E7%AC%A6%E5%8F%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">符号</a>导致报错的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复会员中心<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">自</a><a href=\"https://www.codesceo.com/search/keyword-%E5%AE%9A%E4%B9%89\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">定义</a>装修之后<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E4%BA%AB\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">分享</a>信息不正确的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复商品详情显示的全返详情不对的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复微信官方已<a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">删除</a>的<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E6%9D%BF\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">模板</a>消息<a href=\"https://www.codesceo.com/search/keyword-%E9%80%9A%E7%9F%A5\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">通知</a>类别调整</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复积分商城订单导出订单没有街道信息的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">新增多商户商品详情底部<a href=\"https://www.codesceo.com/search/keyword-%E8%AF%A6%E6%83%85%E9%A1%B5\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">详情页</a>固定信息展示开关</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复会员的余额记录显示<a href=\"https://www.codesceo.com/search/keyword-%E9%87%8D%E5%A4%8D\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">重复</a>的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复<a href=\"https://www.codesceo.com/search/keyword-%E6%8B%BC%E5%9B%A2\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">拼团</a>订单详情订单规格不显示的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复<a href=\"https://www.codesceo.com/search/keyword-%E5%BA%97%E9%93%BA%E8%A3%85%E4%BF%AE\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">店铺装修</a>商品详情页关注条显示不正常的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E4%BB%B6\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">插件</a>鉴权<a href=\"https://www.codesceo.com/search/keyword-%E6%96%B9%E6%B3%95\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">方法</a>一处问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复自定义页面公告显示不正确的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复<a href=\"https://www.codesceo.com/search/keyword-%E5%85%AC%E4%BC%97%E5%8F%B7\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">公众号</a><a href=\"https://www.codesceo.com/search/keyword-%E7%BB%84%E4%BB%B6\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">组件</a>权限问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复积分商城运费未支付却显示无需支付的问题</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">修复积分商城删除<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E6%A0%87\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">图标</a>显示<a href=\"https://www.codesceo.com/search/keyword-%E9%94%99%E8%AF%AF\" target=\"_blank\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">错误</a>的问题</p><p><br/></p>', 'http://manong.yaho.cc/public/uploads/20181228/67e258a17956b56a121706d68e00c8ce.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '[版本A]人人商城源码v2 3.10.8支持3.9.43升级上来开源修复积分商城运费未支付却显示无需支付的问题\n更新日志：修复店铺弹幕用户昵称存在回车符号导致报错的问题\n修复会员中心自定义装修之后分享信息不正确的问题\n修复商品详情显示的全返详情不对的问题', '20', '16', '0', '0', '1', '0', '2018-12-28 10:26:39', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '3', '12-28');
INSERT INTO `store_goods` VALUES ('43', '1', '26', '其他', 'Mysql', 'WPS,源码,WPS', '0', 'WPS Office（*VIP*）v11.3.3直装/破解/稻壳/会员', '<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\"><a href=\"https://www.codesceo.com/search/keyword-%E8%BD%AF%E4%BB%B6\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">软件</a><a href=\"https://www.codesceo.com/search/keyword-%E5%90%8D%E7%A7%B0\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">名称</a>：<a href=\"https://www.codesceo.com/search/keyword-WPS\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">WPS</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-Office\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">Office</a></p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">软件版本：v1<a href=\"https://www.codesceo.com/search/keyword-1.2\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">1.2</a>.3_<a href=\"https://www.codesceo.com/search/keyword-%E7%A0%B4%E8%A7%A3\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">破解</a>_稻壳_会员版</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">软件语言：<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%AD%E6%96%87\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">中文</a></p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">软件大小：38M</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">软件包名：cn.wps.moffice_eng</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">支持系统：<a href=\"https://www.codesceo.com/search/keyword-Android\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">Android</a>&nbsp;2.2+及更高版本</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">此版本感谢XDA大神破解，特点如下：</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;高级版本<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9F%E8%83%BD\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">功能</a><a href=\"https://www.codesceo.com/search/keyword-%E8%A7%A3%E9%94%81\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">解锁</a></p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;<a href=\"https://www.codesceo.com/search/keyword-%E8%BD%AC%E6%8D%A2\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">转换</a><a href=\"https://www.codesceo.com/search/keyword-PDF\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">PDF</a><a href=\"https://www.codesceo.com/search/keyword-%E6%A0%BC%E5%BC%8F\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">格式</a>解锁</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;PDF签名解锁</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;移除全部广告和活动项</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;禁用<a href=\"https://www.codesceo.com/search/keyword-%E5%88%86%E6%9E%90\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">分析</a></p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">*崭新<a href=\"https://www.codesceo.com/search/keyword-%E7%95%8C%E9%9D%A2%E8%AE%BE%E8%AE%A1\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">界面设计</a>全面开启，操作得到更大幅度的提高和<a href=\"https://www.codesceo.com/search/keyword-%E4%BC%98%E5%8C%96\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">优化</a>*</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">最佳安卓<a href=\"https://www.codesceo.com/search/keyword-%E5%8A%9E%E5%85%AC%E8%BD%AF%E4%BB%B6\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">办公软件</a>，个人版永久<a href=\"https://www.codesceo.com/search/keyword-%E5%85%8D%E8%B4%B9\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">免费</a>，体积小、速度快；独有手机阅读<a href=\"https://www.codesceo.com/search/keyword-%E6%A8%A1%E5%BC%8F\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">模式</a>，<a href=\"https://www.codesceo.com/search/keyword-%E5%AD%97%E4%BD%93\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">字体</a>清晰翻页流畅；完美支持微软Office、PDF等23种文档格式；文档漫游功能，让你离开电脑一样办公。</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\"><a href=\"https://www.codesceo.com/search/keyword-%E7%94%A8%E6%88%B7\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">用户</a>多：全球用户&nbsp;<a href=\"https://www.codesceo.com/search/keyword-500\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">500</a>,000,000！</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">口碑好：Google Play 超过490,000五星评价。</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">排名高：全球APP总榜同类<a href=\"https://www.codesceo.com/search/keyword-%E4%BA%A7%E5%93%81\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">产品</a>排名No.1。</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">【更新<a href=\"https://www.codesceo.com/search/keyword-%E5%86%85%E5%AE%B9\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">内容</a>】：<a href=\"https://www.codesceo.com/search/keyword-2018\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">2018</a>-09-11</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;新增：PDF文档支持<a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">添加</a><a href=\"https://www.codesceo.com/search/keyword-%E7%A9%BA%E7%99%BD\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">空白</a>页、<a href=\"https://www.codesceo.com/search/keyword-%E5%88%A0%E9%99%A4\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">删除</a>页面、调整页面顺序</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;优化：可直接在PDF文档内进行<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E6%9C%AC\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">文本</a>框输入</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;新增：天气预报，轻松了解天气信息&nbsp;</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E5%AD%97\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">文字</a><a href=\"https://www.codesceo.com/search/keyword-%E5%A4%84%E7%90%86\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">处理</a>：支持组合<a href=\"https://www.codesceo.com/search/keyword-%E5%AF%B9%E8%B1%A1\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">对象</a>编辑，处理文档更方便</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;新增：支持将多张<a href=\"https://www.codesceo.com/search/keyword-%E5%9B%BE%E7%89%87\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">图片</a>转为一个演示文档，方便整理和传阅课件/会议内容</p>\r\n\r\n<p microsoft=\"\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: \" yahei=\"\">&middot;新增：可通过WPS将系统图库内的图片转为<a href=\"https://www.codesceo.com/search/keyword-%E8%A1%A8\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">表</a>格文档</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://manong.yaho.cc/public/uploads/20181228/5bac44da785bdab544bea5d5048e69ff.jpg', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '软件名称：WPS Office\r\n\r\n软件版本：v11.2.3_破解_稻壳_会员版\r\n软件语言：中文\r\n软件大小：38M\r\n软件包名：cn.wps.moffice_eng\r\n支持系统：Android 2.2+及更高版本', '10', '3', '0', '0', '1', '0', '2018-12-28 14:48:47', '2', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '5', '12-28');
INSERT INTO `store_goods` VALUES ('44', '1', '33', '其他', 'Mysql', '荣耀', '0', '最新网狐荣耀版整理、编译和搭建教程', '<p><span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">一、<a href=\"https://www.codesceo.com/search/keyword-%E5%AE%89%E8%A3%85\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">安装</a><a href=\"https://www.codesceo.com/search/keyword-visual\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">visual</a>&nbsp;<a href=\"https://www.codesceo.com/search/keyword-studio\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">studio</a>&nbsp;2015，在百度就能<a href=\"https://www.codesceo.com/search/keyword-%E6%90%9C%E7%B4%A2\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">搜索</a>到<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8B%E8%BD%BD\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">下载</a>地址，在教程最后，会给大家包括所有<a href=\"https://www.codesceo.com/search/keyword-%E5%B7%A5%E5%85%B7\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">工具</a>在内的集成包。因为visual studio 2015体积比较大，而且安装过程很漫长，在这里不做安装演示。百度有很多关于它安装的过程的教程，其实很简单，就是下一步就行了。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">二、安装JDK1.8，下载jdk1.8，然后双击安装，下一步直到安装完成，安装的时候记住安装目录，我的全部默认安装，目录为C:\\Program Files\\<a href=\"https://www.codesceo.com/search/keyword-Java\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">Java</a>\\Jdk1.8。安装完成后，进行环境变量的配置。系统变量中进行JAVA_HOME、CLASSPATH、Path三个变量的配置，有的编辑，没有的新建。新建JAVA_HOME对应C:\\Program Files\\Java\\Jdk1.8、新建CLASSPATH对应.;%JAVA_HOME%\\lib;%JAVA_HOME%\\lib\\tools.jar、编辑Path的最后加上;%JAVA_HOME%\\bin;%JAVA_HOME%\\jre\\bin。最后打开CMD<a href=\"https://www.codesceo.com/search/keyword-%E7%AA%97%E5%8F%A3\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">窗口</a>进行测试是否安装成功。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">三、把winrar加入环境变量，使winrar可以在<a href=\"https://www.codesceo.com/search/keyword-%E5%91%BD%E4%BB%A4\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">命令</a>行下直接运行。;C:\\Program Files\\WinRAR</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">四、安装cocos，这里我们使用的是<a href=\"https://www.codesceo.com/search/keyword-cocos2d\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">cocos2d</a>-x 3.10，3.10版本，Cocos2d-x<a href=\"https://www.codesceo.com/search/keyword-%E4%B8%8E\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">与</a>cocos整合<a href=\"https://www.codesceo.com/search/keyword-%E5%8D%87%E7%BA%A7\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">升级</a>为Cocos引擎，下载后是exe程序，双击直接安装，很简单。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">五、安装<a href=\"https://www.codesceo.com/search/keyword-babel\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">babel</a>ua<a href=\"https://www.codesceo.com/search/keyword-%E6%8F%92%E4%BB%B6\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">插件</a>，这里我们选择的是babelua-compat-1.06-<a href=\"https://www.codesceo.com/search/keyword-VS2015\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">VS2015</a>这个版本，正好与我们安装的visual studio 2015相对应。下载后，双击<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E4%BB%B6\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">文件</a>，就可以安装到vs2015。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">六、下载<a href=\"https://www.codesceo.com/search/keyword-%E8%87%AA%E5%8A%A8\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">自动</a><a href=\"https://www.codesceo.com/search/keyword-%E6%8F%90%E7%A4%BA\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">提示</a>补全词典，我还下载了cocos2dx-3.10-<a href=\"https://www.codesceo.com/search/keyword-API\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">API</a>.lua，把下载的词典放到，我的文档下面的BabeLua\\Completion文件夹中，再进入lua项目，输入<a href=\"https://www.codesceo.com/search/keyword-%E4%BB%A3%E7%A0%81\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">代码</a>时就有相应的提示了。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">七、安装<a href=\"https://www.codesceo.com/search/keyword-Python\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">Python</a>-2.7.10，双击安装，下一步直到完成，在安装时选择一下目录，我安装到了c盘的python27目录。安装完后进行环境变量的配置。在系统变量的path最后加上;C:\\Python27，pyghon安装完成。打开CMD窗口进行测试。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">八、安装ant 1.9.6，下载ant 1.9.6，解压，这里我们解压到C盘的ant196目录。然后配置环境变量，没有的项创建，有的项编辑。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">ANT_HOME C:\\ant196</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">path C:\\ant196\\bin</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">classpath C:\\ant196\\lib</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">【<a href=\"https://www.codesceo.com/search/keyword-%E6%96%87%E6%9C%AC\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">文本</a>教程】最新<a href=\"https://www.codesceo.com/search/keyword-%E7%BD%91%E7%8B%90\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">网狐</a>荣耀版整理、编译和<a href=\"https://www.codesceo.com/search/keyword-%E6%90%AD%E5%BB%BA%E6%95%99%E7%A8%8B\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">搭建教程</a></span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">九、安装adt，下载ADT后解压，我们这里解压到C盘的adt-bundle-<a href=\"https://www.codesceo.com/search/keyword-windows\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">windows</a>-x86-<a href=\"https://www.codesceo.com/search/keyword-2014\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">2014</a>0624目录。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">运行eclipse，打开help，install new software，<a href=\"https://www.codesceo.com/search/keyword-%E5%90%8D%E7%A7%B0\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">名称</a>输入adt_plugin，adt插件的<a href=\"https://www.codesceo.com/search/keyword-%E7%AB%99%E7%82%B9\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">站点</a>为：</span><span microsoft=\"\" style=\"font-family: \" yahei=\"\">https://dl-ssl.google.com/</span><a href=\"https://www.codesceo.com/search/keyword-Android\" microsoft=\"\" style=\"white-space: normal; color: rgb(51, 51, 51); text-decoration-line: none; font-family: \" target=\"_blank\" yahei=\"\">Android</a><span microsoft=\"\" style=\"font-family: \" yahei=\"\">/eclipse/</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">将&ldquo;com.android.ide.eclipse.ndk_23.0.2.1259578.jar&rdquo;复制到&quot;C:\\adt-bundle-windows-x86-20140624\\eclipse\\plugins\\com.android.ide.eclipse.ndk_23.0.2.1259578.jar&quot;</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\"><a href=\"https://www.codesceo.com/search/keyword-%E6%B7%BB%E5%8A%A0\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">添加</a>环境变量 ANDROID_SDK_ROOT 为：C:\\adt-bundle-windows-x86-20140624\\sdk;</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">十、安装NDK</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">把android-ndk-r10d-windows-x86_64复制到要安装的目录，双击android-ndk-r10d-windows-x86_64进行解压。这里我们解压后的目录为c盘的android-ndk-r10d目录。</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">启动&quot;C:\\adt-bundle-windows-x86-20140624\\eclipse\\eclipse.exe&quot;</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">选择<a href=\"https://www.codesceo.com/search/keyword-%E8%8F%9C%E5%8D%95\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">菜单</a>栏上的[Window-&gt;Perferences-&gt;Android-&gt;NDK]<a href=\"https://www.codesceo.com/search/keyword-%E8%AE%BE%E7%BD%AE\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\" target=\"_blank\">设置</a>&nbsp;NDK Loaction 为C:\\android-ndk-r10d；</span><br microsoft=\"\" style=\"white-space: normal; font-size: 14px; word-wrap: break-word; color: rgb(68, 68, 68); font-family: \" yahei=\"\" />\r\n<span microsoft=\"\" style=\"font-size: 14px; color: rgb(68, 68, 68); font-family: \" yahei=\"\">添加环境变量 NDK_ROOT 为：C:\\android-ndk-r10d 在环境变量 PATH 下追加 ：%NDK_ROOT%;</span></p>\r\n', 'http://manong.yaho.cc/public/uploads/20181228/0e9bf8d1822465a5fab15a10ecd5157a.png', 'http://manong.yaho.cc/static/upload/a4288389a59ffb67/cadef7548d762c85.jpg|http://manong.yaho.cc/static/upload/8482efbdda2f7f63/4b71ea29fe88c418.jpg|http://manong.yaho.cc/static/upload/f10b755e844f4936/683a2ed975e3db36.jpg', '', '一、安装visual studio 2015，在百度就能搜索到下载地址，在教程最后，会给大家包括所有工具在内的集成包。因为visual studio 2015体积比较大，而且安装过程很漫长，在这里不做安装演示。百度有很多关于它安装的过程的教程，其实很简单，就是下一步就行了。', '10', '17', '1', '0', '1', '0', '2018-12-28 14:49:20', '1', 'http://manong.yaho.cc/public/uploads/20181225/6deb42bae6041e10bb5bd69601c31771.zip', '35', '6', '12-28');
INSERT INTO `store_goods` VALUES ('45', '1', '7', 'Jsp', 'Mssqi', '源码', '0', '1', '<p>1</p>', 'http://manong.yaho.cc/public/uploads/20190104/c4731e5b5d1873b04d9c05948bccb9d7.jpg', '1', '', '1', '1', '0', '0', '0', '0', '0', '2019-01-04 17:04:13', '2', 'http://manong.yaho.cc/public/uploads/20190104/32a078e1f022dc4c6f9923acc09387de.zip', '36', '1', '01-04');
INSERT INTO `store_goods` VALUES ('46', '1', '7', 'Html', 'Mssqi', '1', '0', '1', '<p>11</p>', 'http://manong.yaho.cc/public/uploads/20190107/68a10d9e6651e52ead57e670d064202b.jpg', 'http://manong.yaho.cc/public/uploads/20190107/d27135833a4670257c9c54c7b18b895b.jpg|http://manong.yaho.cc/public/uploads/20190107/f2781f86f5c45313ce31f599d95e22f6.jpg|', '1', '11', '1', '3', '0', '0', '1', '0', '2019-01-07 15:26:47', '2', 'http://manong.yaho.cc/public/uploads/20190107/791e5e37f1d4d8651fab436ad0d0f0a3.zip', '36', '1', '01-07');
INSERT INTO `store_goods` VALUES ('47', '1', '7', 'Jsp', 'Access', '2', '0', '2', '<p>2</p>', 'http://manong.yaho.cc/public/uploads/20190107/db1b49bf11185cc05f81123c12bf8244.jpg', 'http://manong.yaho.cc/public/uploads/20190107/6aeaf3ca2566301d7759590fe589ab62.jpg|http://manong.yaho.cc/public/uploads/20190107/0ecf41536c995072d55411956b43df4d.jpg|http://manong.yaho.cc/public/uploads/20190107/cc60181e8f7c0f671a53aa6d636f4269.jpg', '2', '2', '2', '4', '1', '0', '1', '0', '2019-01-07 15:30:13', '2', 'http://manong.yaho.cc/public/uploads/20190107/37796d623759994c6ce0f774476a78dc.zip', '36', '1', '01-07');
INSERT INTO `store_goods` VALUES ('48', '0', '11', 'Java', 'Mssqi', '1', '0', '1', '<p>1</p>', 'http://manong.yaho.cc/public/uploads/20190107/00aeb822e78680b2bd90e777962b537a.jpg', 'http://manong.yaho.cc/public/uploads/20190107/4d9feac8ef54b94e1f30bcecc0d9cd18.jpg|http://manong.yaho.cc/public/uploads/20190107/721e850bb0bd93f0e372521aa12470a4.jpg|http://manong.yaho.cc/public/uploads/20190107/bdf478ca84126444e2d330dc6db50dfb.jpg', '1', '1', '1', '0', '0', '0', '0', '0', '2019-01-07 15:45:19', '2', 'http://manong.yaho.cc/public/uploads/20190107/42f8af22d3688d0346d8cbbe9f57de96.zip', '36', '2', '01-07');
INSERT INTO `store_goods` VALUES ('49', '0', '30', '0', '0', '1,1', '0', '11111', '<p>1</p>', 'http://manong.yaho.cc/public/uploads/20190107/46522da5c249a2a709b083a64a63bbd0.jpg', null, null, '', '0', '9', '1', '0', '1', '0', '2019-01-07 15:57:47', '2', null, '36', '6', '01-07');
INSERT INTO `store_goods` VALUES ('50', '0', '14', '游戏娱乐', '0', '1', '0', '1', '<p>11</p>', 'http://manong.yaho.cc/public/uploads/20190107/2c1e19c7492103bf24b57c98f7739e1d.jpg', 'http://manong.yaho.cc/public/uploads/20190107/49f0552da6fd4412a9541860415a0002.jpg|http://manong.yaho.cc/public/uploads/20190107/9ad31fd44e464c8838ec880be40416f2.jpg|http://manong.yaho.cc/public/uploads/20190107/ccf98d7d7e65d52fe21129857900b12b.jpg', '1', '11', '1', '3', '1', '0', '1', '0', '2019-01-07 16:13:46', '2', 'http://manong.yaho.cc/public/uploads/20190107/df31a2458c82c8d9f5e2743e5195d292.zip', '36', '3', '01-07');
INSERT INTO `store_goods` VALUES ('52', '0', '23', 'MAC', '0', '1', '0', '1', '<p>1</p>', 'http://manong.yaho.cc/public/uploads/20190107/a99d4783908e53ff6d8f5e8042460036.jpg', 'http://manong.yaho.cc/public/uploads/20190107/7f022a686018bfd4edea396c763a97bf.jpg|http://manong.yaho.cc/public/uploads/20190107/a57e7b63dca54ad668fc07c071080bc5.jpg|http://manong.yaho.cc/public/uploads/20190107/8c2a69744d1df2768ed1598787c82a4b.jpg', '1', '1', '10', '2', '1', '0', '1', '0', '2019-01-07 16:42:42', '2', 'http://manong.yaho.cc/public/uploads/20190107/f3bcd94ff3e890e5a67299bf105dfe7b.zip', '36', '5', '01-07');
INSERT INTO `store_goods` VALUES ('54', '0', '17', '视频', '0', '11', '0', '11', '<p>11</p>', 'http://manong.yaho.cc/public/uploads/20190107/59d0da42e5522c9c37195ecd57773dfa.jpg', 'http://manong.yaho.cc/public/uploads/20190107/78bb0f2c72805b1ae64536139cbda708.jpg|http://manong.yaho.cc/public/uploads/20190107/442cb6a3b011b7bdfe7801b5076fcc7f.jpg|http://manong.yaho.cc/public/uploads/20190107/db30274c0dc2989a1813365702261537.jpg', null, '11', '1', '7', '1', '0', '1', '0', '2019-01-07 16:57:16', '2', 'http://manong.yaho.cc/public/uploads/20190107/bd6acef6c29acdb49837e2fb16ec468c.zip', '36', '4', '01-07');
INSERT INTO `store_goods` VALUES ('55', '0', '12', 'Java', 'Access', '源码，分类，语言', '0', '1', '<p>11</p>', 'http://manong.yaho.cc/public/uploads/20190108/598251229866d5b0a3bd5506d75f4b28.jpg', 'http://manong.yaho.cc/public/uploads/20190108/004e51ebc0c6de3327650b95ae91192b.jpg|http://manong.yaho.cc/public/uploads/20190108/c52c71bbc9be3f2a961cc592ba3139c8.jpg|http://manong.yaho.cc/public/uploads/20190108/2bb9caeecb147eab1b7214e942365921.jpg', '1', '11', '1', '0', '0', '0', '0', '0', '2019-01-08 08:38:17', '2', 'http://manong.yaho.cc/public/uploads/20190108/86b2686ddd186270ea3c1f32716f9356.zip', '36', '2', '01-08');
INSERT INTO `store_goods` VALUES ('56', '0', '14', '游戏娱乐', '0', '11', '0', '11', '<p>11</p>', 'http://manong.yaho.cc/public/uploads/20190108/d7e0d9165a9d0c839b0214fbfbadebc1.jpg', 'http://manong.yaho.cc/public/uploads/20190108/c2bf6b0c2e841d510b568a012a0c34d0.jpg|http://manong.yaho.cc/public/uploads/20190108/c6f45ff8f9844abcdb5da9927c6b5366.jpg|http://manong.yaho.cc/public/uploads/20190108/cfe33d6206a53164ff1470c521da36ea.jpg', '11', '11', '1', '0', '0', '0', '0', '0', '2019-01-08 08:40:46', '2', 'http://manong.yaho.cc/public/uploads/20190108/4cac1d6bda185ab963e9e75a8e488e29.zip', '36', '3', '01-08');
INSERT INTO `store_goods` VALUES ('57', '0', '0', '0', '0', '微擎,升级,安装失败', '0', '11', '<p>11</p>\r\n', 'http://manong.yaho.cc/public/uploads/20190108/2615d89edc2b4692283a354887b26629.jpg', '', null, '', '0', '0', '0', '0', '0', '0', '2019-01-10 14:16:02', '2', '', '36', '0', '01-08');

-- ----------------------------
-- Table structure for store_goods_brand
-- ----------------------------
DROP TABLE IF EXISTS `store_goods_brand`;
CREATE TABLE `store_goods_brand` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `brand_logo` varchar(1024) DEFAULT '' COMMENT '品牌logo',
  `brand_cover` varchar(1024) DEFAULT '' COMMENT '品牌封面',
  `brand_title` varchar(255) DEFAULT '' COMMENT '商品品牌名称',
  `brand_desc` text COMMENT '商品品牌描述',
  `brand_detail` text COMMENT '品牌图文信息',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '商品分类排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '商品状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_goods_brand
-- ----------------------------
INSERT INTO `store_goods_brand` VALUES ('1', '', '', '织梦', null, null, '0', '1', '0', '2018-12-17 10:18:06');
INSERT INTO `store_goods_brand` VALUES ('2', '', '', '其他', null, null, '10', '1', '0', '2018-12-17 10:58:27');

-- ----------------------------
-- Table structure for store_goods_cate
-- ----------------------------
DROP TABLE IF EXISTS `store_goods_cate`;
CREATE TABLE `store_goods_cate` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) unsigned DEFAULT '0' COMMENT '上级分类编号',
  `brand_id` bigint(20) DEFAULT '0' COMMENT '品牌ID',
  `cate_title` varchar(255) DEFAULT '' COMMENT '商品分类名称',
  `cate_desc` text COMMENT '商品分类',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '商品分类排序',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '商品状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `url` varchar(255) DEFAULT NULL COMMENT '模块名字',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COMMENT='商城商品分类';

-- ----------------------------
-- Records of store_goods_cate
-- ----------------------------
INSERT INTO `store_goods_cate` VALUES ('1', '0', '0', '网站源码', '网站源码', '2', '1', '0', '2018-12-15 15:31:14', '/index/lists/index');
INSERT INTO `store_goods_cate` VALUES ('2', '0', '0', '游戏源码', '游戏源码', '3', '1', '0', '2018-12-15 15:37:01', '/index/lists/game');
INSERT INTO `store_goods_cate` VALUES ('3', '0', '0', '插件模块', '插件模块', '4', '1', '0', '2018-12-15 15:37:14', '/index/lists/plugin');
INSERT INTO `store_goods_cate` VALUES ('4', '0', '0', '视频教程', '视频教程', '5', '1', '0', '2018-12-15 15:37:24', '/index/lists/video');
INSERT INTO `store_goods_cate` VALUES ('5', '0', '0', '精品工具', '精品工具', '6', '1', '0', '2018-12-15 15:37:40', '/index/lists/tool');
INSERT INTO `store_goods_cate` VALUES ('6', '0', '0', '技术文章', '技术文章', '7', '1', '0', '2018-12-15 15:37:50', '/index/technology/all');
INSERT INTO `store_goods_cate` VALUES ('7', '1', '0', '企业公司', '企业公司', '0', '1', '0', '2018-12-15 15:38:17', null);
INSERT INTO `store_goods_cate` VALUES ('8', '1', '0', '新闻博客', '新闻博客', '0', '1', '0', '2018-12-15 15:38:36', null);
INSERT INTO `store_goods_cate` VALUES ('9', '1', '0', '电子商务', '电子商务', '0', '1', '0', '2018-12-15 15:38:53', null);
INSERT INTO `store_goods_cate` VALUES ('10', '1', '0', '其他源码', '其他源码', '0', '1', '0', '2018-12-17 10:59:47', null);
INSERT INTO `store_goods_cate` VALUES ('11', '2', '0', '棋牌游戏', '棋牌游戏', '0', '1', '0', '2018-12-26 10:22:30', null);
INSERT INTO `store_goods_cate` VALUES ('12', '2', '0', '手游源码', '手游源码', '0', '1', '0', '2018-12-26 10:22:45', null);
INSERT INTO `store_goods_cate` VALUES ('13', '2', '0', '页游源码', '页游源码\r\n', '0', '1', '0', '2018-12-26 10:23:12', null);
INSERT INTO `store_goods_cate` VALUES ('14', '3', '0', '微擎微赞', '微擎微赞', '0', '1', '0', '2018-12-27 09:57:44', null);
INSERT INTO `store_goods_cate` VALUES ('15', '3', '0', '其他插件', '其他插件', '0', '1', '0', '2018-12-27 09:58:04', null);
INSERT INTO `store_goods_cate` VALUES ('16', '3', '0', '帝国cms', '帝国cms', '0', '1', '0', '2018-12-27 09:58:25', null);
INSERT INTO `store_goods_cate` VALUES ('17', '4', '0', '编程语言', '编程语言', '0', '1', '0', '2018-12-27 09:59:38', null);
INSERT INTO `store_goods_cate` VALUES ('18', '4', '0', '前端开发', '前端开发', '0', '1', '0', '2018-12-27 09:59:48', null);
INSERT INTO `store_goods_cate` VALUES ('19', '4', '0', '游戏开发', '游戏开发', '0', '1', '0', '2018-12-27 10:00:04', null);
INSERT INTO `store_goods_cate` VALUES ('20', '4', '0', '硬件开发', '硬件开发', '0', '1', '0', '2018-12-27 10:00:18', null);
INSERT INTO `store_goods_cate` VALUES ('21', '4', '0', '平面设计', '平面设计', '0', '1', '0', '2018-12-27 10:00:33', null);
INSERT INTO `store_goods_cate` VALUES ('22', '4', '0', '生活兴趣', '生活兴趣', '0', '1', '0', '2018-12-27 10:00:46', null);
INSERT INTO `store_goods_cate` VALUES ('23', '5', '0', '营销软件', '营销软件', '0', '1', '0', '2018-12-27 10:01:41', null);
INSERT INTO `store_goods_cate` VALUES ('24', '5', '0', '游戏娱乐', '游戏娱乐', '0', '1', '0', '2018-12-27 10:01:57', null);
INSERT INTO `store_goods_cate` VALUES ('25', '5', '0', '应用软件', '应用软件', '0', '1', '0', '2018-12-27 10:02:09', null);
INSERT INTO `store_goods_cate` VALUES ('26', '5', '0', '网络办公', '网络办公', '0', '1', '0', '2018-12-27 10:02:27', null);
INSERT INTO `store_goods_cate` VALUES ('27', '5', '0', '企业办公', '企业办公', '0', '1', '0', '2018-12-27 10:02:43', null);
INSERT INTO `store_goods_cate` VALUES ('30', '6', '0', 'CMS教程', 'CMS教程', '0', '1', '0', '2018-12-27 11:20:54', '/index/technology/first');
INSERT INTO `store_goods_cate` VALUES ('31', '6', '0', '网页制作', '网页制作', '0', '1', '0', '2018-12-27 14:56:52', '/index/technology/second');
INSERT INTO `store_goods_cate` VALUES ('32', '6', '0', '编程开发', '编程开发', '0', '1', '0', '2018-12-27 15:04:23', '/index/technology/third');
INSERT INTO `store_goods_cate` VALUES ('33', '6', '0', '平面设计', '平面设计', '0', '1', '0', '2018-12-27 15:12:11', '/index/technology/fourth');
INSERT INTO `store_goods_cate` VALUES ('34', '6', '0', '操作系统', '操作系统', '0', '1', '0', '2018-12-27 15:17:19', '/index/technology/fifth');
INSERT INTO `store_goods_cate` VALUES ('35', '6', '0', '数据库类', '数据库类', '0', '1', '0', '2018-12-27 15:21:57', '/index/technology/sixth');
INSERT INTO `store_goods_cate` VALUES ('36', '6', '0', '源码咨询', '源码咨询', '0', '1', '0', '2018-12-27 15:22:30', '/index/technology/seventh');
INSERT INTO `store_goods_cate` VALUES ('37', '6', '0', '其他文章', '其他文章', '0', '1', '0', '2018-12-27 15:23:43', '/index/technology/eighth');
INSERT INTO `store_goods_cate` VALUES ('38', '0', '0', '首页', '', '1', '1', '1', '2019-01-03 10:07:36', '/');

-- ----------------------------
-- Table structure for store_goods_list
-- ----------------------------
DROP TABLE IF EXISTS `store_goods_list`;
CREATE TABLE `store_goods_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` bigint(20) unsigned DEFAULT '0' COMMENT '商品ID',
  `goods_spec` varchar(255) DEFAULT '' COMMENT '商品规格名称',
  `goods_number` bigint(20) unsigned DEFAULT '0' COMMENT '商品礼品-商品数量',
  `market_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '销售价格',
  `selling_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '商品价格',
  `goods_stock` bigint(20) unsigned DEFAULT '0' COMMENT '商品库存统计',
  `goods_sale` bigint(20) unsigned DEFAULT '0' COMMENT '已销售数量',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '商品状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城商品列表';

-- ----------------------------
-- Records of store_goods_list
-- ----------------------------

-- ----------------------------
-- Table structure for store_goods_spec
-- ----------------------------
DROP TABLE IF EXISTS `store_goods_spec`;
CREATE TABLE `store_goods_spec` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(255) DEFAULT '' COMMENT '语言名称',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '语言状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='商城商品规格';

-- ----------------------------
-- Records of store_goods_spec
-- ----------------------------
INSERT INTO `store_goods_spec` VALUES ('1', 'Mysqls', '0', '1', '0', '2018-12-16 12:38:02');

-- ----------------------------
-- Table structure for store_goods_stock
-- ----------------------------
DROP TABLE IF EXISTS `store_goods_stock`;
CREATE TABLE `store_goods_stock` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` bigint(20) unsigned DEFAULT '0' COMMENT '商品ID',
  `goods_spec` varchar(255) DEFAULT '' COMMENT '商品属性',
  `goods_stock` bigint(20) unsigned DEFAULT '0' COMMENT '商品库存',
  `stock_desc` varchar(255) DEFAULT '' COMMENT '商品库存描述',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '数据排序',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '商品状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城商品库存';

-- ----------------------------
-- Records of store_goods_stock
-- ----------------------------

-- ----------------------------
-- Table structure for store_label
-- ----------------------------
DROP TABLE IF EXISTS `store_label`;
CREATE TABLE `store_label` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) DEFAULT '' COMMENT '关键字名称',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '语言状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_label
-- ----------------------------
INSERT INTO `store_label` VALUES ('37', '源码', '0', '1', '0', '2019-01-07 17:38:54');
INSERT INTO `store_label` VALUES ('38', '游戏', '0', '1', '0', '2019-01-07 17:38:54');
INSERT INTO `store_label` VALUES ('39', '分享', '0', '1', '0', '2019-01-07 17:38:54');
INSERT INTO `store_label` VALUES ('41', '分类', '0', '1', '0', '2019-01-08 08:37:24');
INSERT INTO `store_label` VALUES ('42', '语言', '0', '1', '0', '2019-01-08 08:37:24');
INSERT INTO `store_label` VALUES ('45', 'dz插件', '0', '1', '0', '2019-01-08 08:42:13');
INSERT INTO `store_label` VALUES ('46', '插件', '0', '1', '0', '2019-01-08 08:42:13');
INSERT INTO `store_label` VALUES ('47', '飞鸟打卡', '0', '1', '0', '2019-01-08 08:42:13');
INSERT INTO `store_label` VALUES ('48', '视频教程', '0', '1', '0', '2019-01-08 08:47:28');
INSERT INTO `store_label` VALUES ('49', '搭建教程', '0', '1', '0', '2019-01-08 08:47:28');
INSERT INTO `store_label` VALUES ('50', '教程', '0', '1', '0', '2019-01-08 08:47:28');
INSERT INTO `store_label` VALUES ('51', '朋友圈', '0', '1', '0', '2019-01-08 08:50:47');
INSERT INTO `store_label` VALUES ('52', '微信', '0', '1', '0', '2019-01-08 08:50:48');
INSERT INTO `store_label` VALUES ('53', '天下', '0', '1', '0', '2019-01-08 08:50:48');
INSERT INTO `store_label` VALUES ('54', '微擎', '0', '1', '0', '2019-01-08 08:54:24');
INSERT INTO `store_label` VALUES ('55', '升级', '0', '1', '0', '2019-01-08 08:54:24');
INSERT INTO `store_label` VALUES ('56', '安装失败', '0', '1', '0', '2019-01-08 08:54:25');
INSERT INTO `store_label` VALUES ('57', '第一', '0', '1', '0', '2019-01-10 15:03:26');
INSERT INTO `store_label` VALUES ('58', '第二', '0', '1', '0', '2019-01-10 15:03:26');
INSERT INTO `store_label` VALUES ('59', '第三', '0', '1', '0', '2019-01-10 15:03:26');

-- ----------------------------
-- Table structure for store_language
-- ----------------------------
DROP TABLE IF EXISTS `store_language`;
CREATE TABLE `store_language` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(255) DEFAULT '' COMMENT '语言名称',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '语言状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `pid` int(10) DEFAULT NULL COMMENT '上级的id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_language
-- ----------------------------
INSERT INTO `store_language` VALUES ('1', '织梦cms', '0', '1', '1', '2018-12-16 12:31:58', '1');
INSERT INTO `store_language` VALUES ('2', 'mysql', '0', '1', '1', '2018-12-16 12:48:16', '1');
INSERT INTO `store_language` VALUES ('3', 'Mysql', '0', '1', '1', '2018-12-16 12:50:52', '1');
INSERT INTO `store_language` VALUES ('4', 'Html', '4', '1', '0', '2018-12-16 13:04:23', '1');
INSERT INTO `store_language` VALUES ('5', 'Jsp', '2', '1', '0', '2018-12-16 13:05:04', '1');
INSERT INTO `store_language` VALUES ('6', 'Python', '3', '1', '0', '2018-12-16 13:05:26', '1');
INSERT INTO `store_language` VALUES ('7', '.NET', '1', '1', '0', '2018-12-16 13:06:08', '1');
INSERT INTO `store_language` VALUES ('8', 'PHP', '0', '1', '0', '2018-12-16 13:34:33', '1');
INSERT INTO `store_language` VALUES ('9', 'ASP', '5', '1', '0', '2018-12-16 13:36:41', '1');
INSERT INTO `store_language` VALUES ('10', 'node', '6', '1', '0', '2018-12-16 13:37:02', '1');
INSERT INTO `store_language` VALUES ('11', 'Javascript', '7', '1', '0', '2018-12-16 13:38:01', '1');
INSERT INTO `store_language` VALUES ('12', '其他', '8', '1', '0', '2018-12-16 13:39:19', '1');
INSERT INTO `store_language` VALUES ('23', '功能增强', '0', '1', '0', '2018-12-27 09:23:57', '3');
INSERT INTO `store_language` VALUES ('24', 'Java', '0', '1', '0', '2018-12-27 09:35:24', '2');
INSERT INTO `store_language` VALUES ('25', '视频', '0', '1', '0', '2018-12-27 09:53:43', '4');
INSERT INTO `store_language` VALUES ('26', '文档', '0', '1', '0', '2018-12-27 09:53:52', '4');
INSERT INTO `store_language` VALUES ('27', '游戏娱乐', '0', '1', '0', '2018-12-27 09:58:46', '3');
INSERT INTO `store_language` VALUES ('28', '电子商务', '0', '1', '0', '2018-12-27 09:58:59', '3');
INSERT INTO `store_language` VALUES ('29', '积分营销', '0', '1', '0', '2018-12-27 09:59:13', '3');
INSERT INTO `store_language` VALUES ('30', '其他', '0', '1', '0', '2018-12-27 10:01:13', '4');
INSERT INTO `store_language` VALUES ('31', 'Windows', '0', '1', '0', '2018-12-27 10:03:06', '5');
INSERT INTO `store_language` VALUES ('32', 'MAC', '0', '1', '0', '2018-12-27 10:03:18', '5');
INSERT INTO `store_language` VALUES ('33', 'Linux', '0', '1', '0', '2018-12-27 10:03:27', '5');
INSERT INTO `store_language` VALUES ('34', 'Android', '0', '1', '0', '2018-12-27 10:03:48', '5');
INSERT INTO `store_language` VALUES ('35', 'IOS', '0', '1', '0', '2018-12-27 10:03:59', '5');
INSERT INTO `store_language` VALUES ('36', '其他', '0', '1', '0', '2018-12-27 10:04:10', '5');

-- ----------------------------
-- Table structure for store_link
-- ----------------------------
DROP TABLE IF EXISTS `store_link`;
CREATE TABLE `store_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '链接标题',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '语言排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '使用状态(1有效,0无效)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `url` varchar(255) DEFAULT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COMMENT='产品品牌';

-- ----------------------------
-- Records of store_link
-- ----------------------------
INSERT INTO `store_link` VALUES ('37', '百度', '0', '1', '1', '2019-01-03 09:38:39', 'www.baidu.com');
INSERT INTO `store_link` VALUES ('38', '1', '3', '1', '1', '2019-01-03 09:41:49', '1');
INSERT INTO `store_link` VALUES ('39', '1', '2', '1', '1', '2019-01-03 09:41:54', '1');
INSERT INTO `store_link` VALUES ('40', '1', '1', '1', '1', '2019-01-03 09:41:59', '1');
INSERT INTO `store_link` VALUES ('41', '百度', '0', '1', '1', '2019-01-03 09:42:49', 'www.baodu.com');
INSERT INTO `store_link` VALUES ('42', '码农网', '1', '1', '0', '2019-01-03 09:43:35', 'manong.yaho.cc');
INSERT INTO `store_link` VALUES ('43', '网站源码', '2', '1', '0', '2019-01-03 09:43:46', 'http://manong.yaho.cc/index/lists/index');
INSERT INTO `store_link` VALUES ('44', '游戏源码', '3', '1', '0', '2019-01-03 09:44:07', 'http://manong.yaho.cc/index/lists/game');
INSERT INTO `store_link` VALUES ('45', '插件模块', '4', '1', '0', '2019-01-03 09:44:23', 'http://manong.yaho.cc/index/lists/plugin');
INSERT INTO `store_link` VALUES ('46', '视频教程', '5', '1', '0', '2019-01-03 09:44:42', 'http://manong.yaho.cc/index/lists/video');
INSERT INTO `store_link` VALUES ('47', '精品工具', '6', '1', '0', '2019-01-03 09:44:56', 'http://manong.yaho.cc/index/lists/tool');
INSERT INTO `store_link` VALUES ('48', '技术文章', '7', '1', '0', '2019-01-03 09:45:04', 'http://manong.yaho.cc/index/technology/all');

-- ----------------------------
-- Table structure for store_member
-- ----------------------------
DROP TABLE IF EXISTS `store_member`;
CREATE TABLE `store_member` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `openid` varchar(100) DEFAULT '' COMMENT '会员微信OPENID',
  `phone` varchar(16) DEFAULT '' COMMENT '会员手机号',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码',
  `nickname` varchar(20) DEFAULT '' COMMENT '会员昵称',
  `headimg` varchar(500) DEFAULT '' COMMENT '会员头像',
  `sex` char(2) DEFAULT '' COMMENT '性别',
  `level` tinyint(2) unsigned DEFAULT '1' COMMENT '会员级别',
  `remark` varchar(500) DEFAULT '' COMMENT '会员个性签名',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '会员状态(1有效,0无效)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_store_member_openid` (`openid`) USING BTREE,
  KEY `index_store_member_phone` (`phone`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城会员信息';

-- ----------------------------
-- Records of store_member
-- ----------------------------

-- ----------------------------
-- Table structure for store_member_address
-- ----------------------------
DROP TABLE IF EXISTS `store_member_address`;
CREATE TABLE `store_member_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mid` bigint(20) unsigned DEFAULT '0' COMMENT '会员ID',
  `username` varchar(20) DEFAULT '' COMMENT '收货人姓名',
  `phone` varchar(16) DEFAULT '' COMMENT '收货手机号',
  `province` varchar(50) DEFAULT '' COMMENT '收货地址省份',
  `city` varchar(50) DEFAULT '' COMMENT '收货地址城市',
  `area` varchar(255) DEFAULT '' COMMENT '收货地址区域',
  `address` varchar(255) DEFAULT '' COMMENT '收货详细地址',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态(0无效, 1新快递)',
  `is_default` tinyint(1) unsigned DEFAULT '1' COMMENT '默认收货地址',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城会员收货地址';

-- ----------------------------
-- Records of store_member_address
-- ----------------------------

-- ----------------------------
-- Table structure for store_order
-- ----------------------------
DROP TABLE IF EXISTS `store_order`;
CREATE TABLE `store_order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned DEFAULT '1' COMMENT '订单类型(1普通订单,2积分订单)',
  `mid` bigint(20) unsigned DEFAULT '0' COMMENT '会员ID',
  `order_no` char(10) DEFAULT '' COMMENT '订单号',
  `freight_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '快递费',
  `goods_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '商品总金额(不含快递费)',
  `real_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '真实支付金额(商品金额+快递金额)',
  `is_pay` tinyint(1) unsigned DEFAULT '0' COMMENT '订单支付状态(0.未支付,1.已支付)',
  `pay_type` varchar(255) DEFAULT '' COMMENT '支付方式 (wechat微信支付, alipay支付宝支付)',
  `pay_no` varchar(100) DEFAULT '' COMMENT '商户交易号',
  `pay_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '实际支付金额',
  `pay_at` datetime DEFAULT NULL COMMENT '支付时间',
  `desc` text COMMENT '订单描述',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '订单状态(0.无效,1.新订单,2.待发货,3.已发货,4.已收货,5.已完成,6.已退货及退款)',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_store_order_order_no` (`order_no`) USING BTREE,
  KEY `index_store_order_status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城订单主表';

-- ----------------------------
-- Records of store_order
-- ----------------------------

-- ----------------------------
-- Table structure for store_order_express
-- ----------------------------
DROP TABLE IF EXISTS `store_order_express`;
CREATE TABLE `store_order_express` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mid` bigint(20) unsigned DEFAULT '0' COMMENT '会员ID',
  `type` tinyint(1) unsigned DEFAULT '0' COMMENT '快递类型(0.订单快递,1.退货快递)',
  `order_no` char(10) DEFAULT '' COMMENT '订单编号',
  `company_title` varchar(50) DEFAULT '' COMMENT '物流公司名称',
  `company_code` varchar(50) DEFAULT '' COMMENT '物流公司编码',
  `username` varchar(20) DEFAULT '' COMMENT '收货人姓名',
  `phone` varchar(16) DEFAULT '' COMMENT '收货手机号',
  `province` varchar(50) DEFAULT NULL COMMENT '收货地址省份',
  `city` varchar(50) DEFAULT '' COMMENT '收货地址城市',
  `area` varchar(255) DEFAULT '' COMMENT '收货地址区域',
  `address` varchar(255) DEFAULT '' COMMENT '收货详细地址',
  `send_no` varchar(50) DEFAULT '' COMMENT '实际物流公司单号',
  `send_company_title` varchar(50) DEFAULT '' COMMENT '实际发货快递公司',
  `send_company_code` varchar(50) DEFAULT '' COMMENT '实际发货快递代码',
  `send_username` varchar(255) DEFAULT '' COMMENT '寄件人名称',
  `send_phone` varchar(16) DEFAULT '' COMMENT '寄件人手机号',
  `send_province` varchar(50) DEFAULT '' COMMENT '寄件人地址省份',
  `send_city` varchar(50) DEFAULT '' COMMENT '寄件人地址城市',
  `send_area` varchar(255) DEFAULT '' COMMENT '寄件人地址区域',
  `send_address` varchar(255) DEFAULT '' COMMENT '寄件人详细地址',
  `send_at` datetime DEFAULT NULL COMMENT '快递发货时间',
  `desc` text COMMENT '发货描述',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态(0.无效,1.新快递,2.已签收,3.签收失败)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城订单快递';

-- ----------------------------
-- Records of store_order_express
-- ----------------------------

-- ----------------------------
-- Table structure for store_order_goods
-- ----------------------------
DROP TABLE IF EXISTS `store_order_goods`;
CREATE TABLE `store_order_goods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mid` bigint(20) unsigned DEFAULT '0' COMMENT '会员ID',
  `order_no` char(10) DEFAULT '' COMMENT '订单编号',
  `goods_id` bigint(20) DEFAULT '0' COMMENT '商品ID',
  `goods_title` varchar(255) DEFAULT '' COMMENT '商品标签',
  `goods_spec` varchar(255) DEFAULT '' COMMENT '商品规格',
  `goods_logo` varchar(255) DEFAULT '' COMMENT '商品LOGO',
  `goods_image` text COMMENT '商品图片地址',
  `market_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '市场价格',
  `selling_price` decimal(20,2) unsigned DEFAULT '0.00' COMMENT '商品销售价格',
  `price_field` varchar(20) DEFAULT 'selling_price' COMMENT '计价字段',
  `number` bigint(20) unsigned DEFAULT '0' COMMENT '订单商品数量',
  `status` bigint(1) unsigned DEFAULT '1' COMMENT '商品状态(1有效,0无效)',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_store_order_list_order_no` (`order_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城订单关联商品';

-- ----------------------------
-- Records of store_order_goods
-- ----------------------------

-- ----------------------------
-- Table structure for store_orders
-- ----------------------------
DROP TABLE IF EXISTS `store_orders`;
CREATE TABLE `store_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `orderon` int(11) DEFAULT NULL COMMENT '订单号',
  `goods_id` int(11) DEFAULT NULL COMMENT '产品id',
  `goods_title` varchar(255) DEFAULT '' COMMENT '产品名称',
  `goods_logo` varchar(255) DEFAULT '' COMMENT '产品封面',
  `price` bigint(20) unsigned DEFAULT '0' COMMENT '售价(积分)',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '数据排序',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `pid` int(11) DEFAULT NULL COMMENT '产品分类id',
  `addtime` varchar(255) DEFAULT NULL COMMENT '添加时间',
  `userid` int(10) DEFAULT NULL COMMENT '下载用户id',
  `fid` int(11) DEFAULT NULL COMMENT '发布者id',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `username` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  `members` int(3) DEFAULT NULL COMMENT '会员等级   1普通会员   2钻石会员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COMMENT='商城商品主表';

-- ----------------------------
-- Records of store_orders
-- ----------------------------
INSERT INTO `store_orders` VALUES ('104', '27694318', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 08:56:53', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('105', '40625197', '15', '微信小说分销源码|基于ThinkPHP框架开发微信小说分销源码下载|内附600多部热门小说', 'http://manong.yaho.cc/static/upload/c81679f01d1a0647/38e118309d7a4d90.jpg', '10', '0', '0', '1', '2019-01-05 08:57:19', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('106', '9476281', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 09:00:11', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('107', '73126549', '21', 'wordpress付费主题reborn原生解密, V4.6.1', 'http://manong.yaho.cc/static/upload/b057c3a6f3eedc98/46e6d43094441f79.jpg', '10', '0', '0', '1', '2019-01-05 09:00:45', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('108', '25798406', '21', 'wordpress付费主题reborn原生解密, V4.6.1', 'http://manong.yaho.cc/static/upload/b057c3a6f3eedc98/46e6d43094441f79.jpg', '10', '0', '0', '1', '2019-01-05 09:02:30', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('109', '90546812', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 09:13:00', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('110', '54823769', '15', '微信小说分销源码|基于ThinkPHP框架开发微信小说分销源码下载|内附600多部热门小说', 'http://manong.yaho.cc/static/upload/c81679f01d1a0647/38e118309d7a4d90.jpg', '10', '0', '0', '1', '2019-01-05 09:13:13', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('111', '63148527', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 09:20:30', '38', '35', 'http://manong.yaho.cc/public/uploads/20190105/2c16bb58fd5a86db26e084e551f2367c.jpg', 'sanlang', '1');
INSERT INTO `store_orders` VALUES ('112', '13059428', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-05 10:59:12', '38', '35', 'http://manong.yaho.cc/public/uploads/20190105/2c16bb58fd5a86db26e084e551f2367c.jpg', 'sanlang', '2');
INSERT INTO `store_orders` VALUES ('113', '59348071', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 10:59:56', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('114', '60715389', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-05 11:04:16', '38', '35', 'http://manong.yaho.cc/public/uploads/20190105/2c16bb58fd5a86db26e084e551f2367c.jpg', 'sanlang', '2');
INSERT INTO `store_orders` VALUES ('115', '31708465', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 11:04:30', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('116', '7263185', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 11:06:29', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('117', '73190826', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-05 11:09:11', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('118', '30124875', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-05 11:16:08', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('119', '95832461', '41', '连环夺bao游戏源码，带控制库存机器人真正运营级别', 'http://manong.yaho.cc/public/uploads/20181228/55d1ce142723fe1b7115621c5392d941.jpg', '20', '0', '0', '2', '2019-01-05 11:16:26', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('120', '6348192', '41', '连环夺bao游戏源码，带控制库存机器人真正运营级别', 'http://manong.yaho.cc/public/uploads/20181228/55d1ce142723fe1b7115621c5392d941.jpg', '0', '0', '0', '2', '2019-01-05 11:16:42', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('121', '1527643', '17', '陌陌真钱棋牌游戏详细搭建视频教程', 'http://manong.yaho.cc/static/upload/ddc816ff6b103bcd/aaee7e72b078f517.jpg', '10', '0', '0', '4', '2019-01-05 11:46:33', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('122', '97186035', '17', '陌陌真钱棋牌游戏详细搭建视频教程', 'http://manong.yaho.cc/static/upload/ddc816ff6b103bcd/aaee7e72b078f517.jpg', '0', '0', '0', '4', '2019-01-05 11:46:36', '39', '35', 'http://manong.yaho.cc/public/uploads/20190105/b749e4f81a6a625bc87dc6f66d9f4fe3.jpg', 'mini', '1');
INSERT INTO `store_orders` VALUES ('123', '60812975', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-05 15:09:51', '38', '35', 'http://manong.yaho.cc/public/uploads/20190105/2c16bb58fd5a86db26e084e551f2367c.jpg', 'sanlang', '2');
INSERT INTO `store_orders` VALUES ('124', '50264738', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '10', '0', '0', '1', '2019-01-05 17:06:26', '40', '35', null, 'xiaoxiao', '1');
INSERT INTO `store_orders` VALUES ('125', '6421739', '41', '连环夺bao游戏源码，带控制库存机器人真正运营级别', 'http://manong.yaho.cc/public/uploads/20181228/55d1ce142723fe1b7115621c5392d941.jpg', '0', '0', '0', '2', '2019-01-06 08:46:14', '36', '35', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('126', '17598643', '54', '11', 'http://manong.yaho.cc/public/uploads/20190107/59d0da42e5522c9c37195ecd57773dfa.jpg', '0', '0', '0', '4', '2019-01-07 16:58:18', '36', '36', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '2');
INSERT INTO `store_orders` VALUES ('127', '26579083', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-08 15:00:41', '41', '35', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', 'yuyu', '2');
INSERT INTO `store_orders` VALUES ('128', '92076134', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-08 18:15:15', '41', '35', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', 'yuyu', '2');
INSERT INTO `store_orders` VALUES ('129', '98627435', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '0', '1', '2019-01-08 18:38:36', '41', '35', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', 'yuyu', '1');

-- ----------------------------
-- Table structure for store_orders_collection
-- ----------------------------
DROP TABLE IF EXISTS `store_orders_collection`;
CREATE TABLE `store_orders_collection` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL COMMENT '产品id',
  `goods_title` varchar(255) DEFAULT '' COMMENT '产品名称',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '数据排序',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `addtime` varchar(255) DEFAULT NULL COMMENT '评论时间',
  `userid` int(10) DEFAULT NULL COMMENT '收藏用户id',
  `pid` int(11) DEFAULT NULL COMMENT '产品分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COMMENT='商城商品主表';

-- ----------------------------
-- Records of store_orders_collection
-- ----------------------------
INSERT INTO `store_orders_collection` VALUES ('136', '17', '陌陌真钱棋牌游戏详细搭建视频教程', '0', '0', '2019-01-05 18:16:21', '36', '4');
INSERT INTO `store_orders_collection` VALUES ('139', '15', '微信小说分销源码|基于ThinkPHP框架开发微信小说分销源码下载|内附600多部热门小说', '0', '0', '2019-01-05 18:40:30', '36', '1');
INSERT INTO `store_orders_collection` VALUES ('140', '29', '图形用户界面设计与语音用户界面设计的关系', '0', '0', '2019-01-06 10:26:37', '36', '6');
INSERT INTO `store_orders_collection` VALUES ('141', '27', '使用:before选择器给你的Logo添加扫光特效', '0', '0', '2019-01-06 10:26:50', '36', '6');
INSERT INTO `store_orders_collection` VALUES ('142', '28', '价值3000元的自动唤醒支付宝红包原理', '0', '0', '2019-01-06 10:37:48', '36', '6');
INSERT INTO `store_orders_collection` VALUES ('143', '33', '宝塔面板手动破解为专业版的方法', '0', '0', '2019-01-06 10:37:56', '36', '6');
INSERT INTO `store_orders_collection` VALUES ('144', '33', '宝塔面板手动破解为专业版的方法', '0', '0', '2019-01-06 10:40:17', '35', '6');
INSERT INTO `store_orders_collection` VALUES ('145', '47', '2', '0', '0', '2019-01-07 15:31:01', '36', '1');
INSERT INTO `store_orders_collection` VALUES ('146', '49', '11111', '0', '0', '2019-01-07 16:00:01', '36', '6');
INSERT INTO `store_orders_collection` VALUES ('147', '50', '1', '0', '0', '2019-01-07 16:26:51', '36', '3');
INSERT INTO `store_orders_collection` VALUES ('149', '54', '11', '0', '0', '2019-01-07 16:58:11', '36', '4');
INSERT INTO `store_orders_collection` VALUES ('150', '35', '微擎微赞通用模块:付费阅读 v5.2.2 解密开源版微信源码下载', '0', '0', '2019-01-08 14:30:52', '41', '3');
INSERT INTO `store_orders_collection` VALUES ('152', '44', '最新网狐荣耀版整理、编译和搭建教程', '0', '0', '2019-01-11 08:40:20', '36', '6');

-- ----------------------------
-- Table structure for store_orders_comments
-- ----------------------------
DROP TABLE IF EXISTS `store_orders_comments`;
CREATE TABLE `store_orders_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL COMMENT '产品id',
  `goods_title` varchar(255) DEFAULT '' COMMENT '产品名称',
  `goods_logo` varchar(255) DEFAULT '' COMMENT '产品封面',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '数据排序',
  `is_deleted` bigint(1) unsigned DEFAULT '0' COMMENT '删除状态(1删除,0未删除)',
  `addtime` varchar(255) DEFAULT NULL COMMENT '评论时间',
  `userid` int(10) DEFAULT NULL COMMENT '下载用户id',
  `userpic` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `username` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  `members` int(3) DEFAULT NULL COMMENT '会员等级   1普通会员   2钻石会员',
  `comments` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COMMENT='商城商品主表';

-- ----------------------------
-- Records of store_orders_comments
-- ----------------------------
INSERT INTO `store_orders_comments` VALUES ('128', '15', '微信小说分销源码|基于ThinkPHP框架开发微信小说分销源码下载|内附600多部热门小说', 'http://manong.yaho.cc/static/upload/c81679f01d1a0647/38e118309d7a4d90.jpg', '0', '0', '2019-01-05 18:40:47', '36', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2', '阿萨德', '1');
INSERT INTO `store_orders_comments` VALUES ('129', '41', '连环夺bao游戏源码，带控制库存机器人真正运营级别', 'http://manong.yaho.cc/public/uploads/20181228/55d1ce142723fe1b7115621c5392d941.jpg', '0', '0', '2019-01-06 08:46:26', '36', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2', 'asd', '2');
INSERT INTO `store_orders_comments` VALUES ('130', '26', 'POScms组合查询多个模块数据，多个模块一起查询显示', 'http://manong.yaho.cc/static/upload/322e21968a379685/66243a7afc7fc585.jpg', '0', '0', '2019-01-06 10:22:58', '36', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2', 'asd', '6');
INSERT INTO `store_orders_comments` VALUES ('131', '27', '使用:before选择器给你的Logo添加扫光特效', 'http://manong.yaho.cc/static/upload/c3f0ffe5bf85df72/075f200c96a3afe8.jpg', '0', '0', '2019-01-06 10:23:14', '36', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2', 'nihao', '6');
INSERT INTO `store_orders_comments` VALUES ('132', '29', '图形用户界面设计与语音用户界面设计的关系', 'http://manong.yaho.cc/static/upload/0882529bed95a46c/2c7caa9fcf1b79a4.jpg', '0', '0', '2019-01-06 10:23:23', '36', 'http://manong.yaho.cc/public/uploads/20190102/88d2bfc820ea24dde2561afb31b03764.jpg', 'admin', '2', '123', '6');
INSERT INTO `store_orders_comments` VALUES ('133', '33', '宝塔面板手动破解为专业版的方法', 'http://manong.yaho.cc/static/upload/2be888f2c382631c/3462df5607c98280.jpg', '0', '0', '2019-01-06 10:40:27', '35', 'http://manong.yaho.cc/public/uploads/20181227/5839a4b2cd862ee239b07d14e1668597.jpg', 'solos', '1', '很好啊', '6');
INSERT INTO `store_orders_comments` VALUES ('134', '49', '11111', 'http://manong.yaho.cc/public/uploads/20190107/46522da5c249a2a709b083a64a63bbd0.jpg', '0', '0', '2019-01-07 16:00:06', '36', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '2', 'asd', '6');
INSERT INTO `store_orders_comments` VALUES ('135', '54', '11', 'http://manong.yaho.cc/public/uploads/20190107/59d0da42e5522c9c37195ecd57773dfa.jpg', '0', '0', '2019-01-07 16:58:25', '36', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '2', 'asd', '4');
INSERT INTO `store_orders_comments` VALUES ('136', '30', '如何像专业人员那样在openSUSE上安装和更新软件？opensuse安装软件详细教程源码', 'http://manong.yaho.cc/static/upload/74a657f845e6a6d0/3e0d7afaba8477ff.jpg', '0', '0', '2019-01-08 09:38:23', '36', 'http://manong.yaho.cc/public/uploads/20190107/a603ac53413856f10fb27874af809007.jpg', 'admin', '2', '阿萨德', '6');
INSERT INTO `store_orders_comments` VALUES ('138', '14', '善恶模板源码二次美化修复版', 'http://manong.yaho.cc/static/upload/00af7d242fafc73f/643f2d85900be40f.jpg', '0', '0', '2019-01-08 15:02:15', '41', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', 'yuyu', '2', '还可以', '1');
INSERT INTO `store_orders_comments` VALUES ('139', '26', 'POScms组合查询多个模块数据，多个模块一起查询显示', 'http://manong.yaho.cc/static/upload/322e21968a379685/66243a7afc7fc585.jpg', '0', '0', '2019-01-10 15:15:15', '41', 'http://manong.yaho.cc/public/uploads/20190106/714acb3ff173bda56a9992a40440c1d0.jpg', 'yuyu', '2', '非常好', '6');
INSERT INTO `store_orders_comments` VALUES ('140', '44', '最新网狐荣耀版整理、编译和搭建教程', 'http://manong.yaho.cc/public/uploads/20181228/0e9bf8d1822465a5fab15a10ecd5157a.png', '0', '0', '2019-01-11 08:40:28', '36', 'http://manong.yaho.cc/public/uploads/20190108/17491f39ee5c84d4ced2519404df8101.jpg', 'admin', '2', '非常好呢', '6');

-- ----------------------------
-- Table structure for system_auth
-- ----------------------------
DROP TABLE IF EXISTS `system_auth`;
CREATE TABLE `system_auth` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL COMMENT '权限名称',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态(1:禁用,2:启用)',
  `sort` smallint(6) unsigned DEFAULT '0' COMMENT '排序权重',
  `desc` varchar(255) DEFAULT NULL COMMENT '备注说明',
  `create_by` bigint(11) unsigned DEFAULT '0' COMMENT '创建人',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_system_auth_title` (`title`) USING BTREE,
  KEY `index_system_auth_status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统权限表';

-- ----------------------------
-- Records of system_auth
-- ----------------------------

-- ----------------------------
-- Table structure for system_auth_node
-- ----------------------------
DROP TABLE IF EXISTS `system_auth_node`;
CREATE TABLE `system_auth_node` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `auth` bigint(20) unsigned DEFAULT NULL COMMENT '角色ID',
  `node` varchar(200) DEFAULT NULL COMMENT '节点路径',
  PRIMARY KEY (`id`),
  KEY `index_system_auth_auth` (`auth`) USING BTREE,
  KEY `index_system_auth_node` (`node`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统角色与节点绑定';

-- ----------------------------
-- Records of system_auth_node
-- ----------------------------

-- ----------------------------
-- Table structure for system_config
-- ----------------------------
DROP TABLE IF EXISTS `system_config`;
CREATE TABLE `system_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '配置编码',
  `value` varchar(500) DEFAULT NULL COMMENT '配置值',
  PRIMARY KEY (`id`),
  KEY `index_system_config_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='系统参数配置';

-- ----------------------------
-- Records of system_config
-- ----------------------------
INSERT INTO `system_config` VALUES ('1', 'app_name', '码农网');
INSERT INTO `system_config` VALUES ('2', 'site_name', '码农网');
INSERT INTO `system_config` VALUES ('3', 'app_version', '3.0 dev');
INSERT INTO `system_config` VALUES ('4', 'site_copy', '版权所有 2014-2018 码农网');
INSERT INTO `system_config` VALUES ('5', 'browser_icon', 'http://manong.yaho.cc/static/upload/cf08c5afc5a980ee/10542fefc5a85acf.png');
INSERT INTO `system_config` VALUES ('6', 'tongji_baidu_key', '');
INSERT INTO `system_config` VALUES ('7', 'miitbeian', '粤ICP备16006642号-2');
INSERT INTO `system_config` VALUES ('8', 'storage_type', 'local');
INSERT INTO `system_config` VALUES ('9', 'storage_local_exts', 'png,jpg,rar,doc,icon,mp4');
INSERT INTO `system_config` VALUES ('10', 'storage_qiniu_bucket', '');
INSERT INTO `system_config` VALUES ('11', 'storage_qiniu_domain', '');
INSERT INTO `system_config` VALUES ('12', 'storage_qiniu_access_key', '');
INSERT INTO `system_config` VALUES ('13', 'storage_qiniu_secret_key', '');
INSERT INTO `system_config` VALUES ('14', 'storage_oss_bucket', 'cuci');
INSERT INTO `system_config` VALUES ('15', 'storage_oss_endpoint', 'oss-cn-beijing.aliyuncs.com');
INSERT INTO `system_config` VALUES ('16', 'storage_oss_domain', 'cuci.oss-cn-beijing.aliyuncs.com');
INSERT INTO `system_config` VALUES ('17', 'storage_oss_keyid', '用你自己的吧');
INSERT INTO `system_config` VALUES ('18', 'storage_oss_secret', '用你自己的吧');
INSERT INTO `system_config` VALUES ('34', 'wechat_appid', 'wxfabb6142860596f0');
INSERT INTO `system_config` VALUES ('35', 'wechat_appkey', '9890a0d7c91801a609d151099e95b61a');
INSERT INTO `system_config` VALUES ('36', 'storage_oss_is_https', 'http');
INSERT INTO `system_config` VALUES ('37', 'wechat_type', 'api');
INSERT INTO `system_config` VALUES ('38', 'wechat_token', 'test');
INSERT INTO `system_config` VALUES ('39', 'wechat_appsecret', '60a46296fb8cfb21d42ff407d7d44118');
INSERT INTO `system_config` VALUES ('40', 'wechat_encodingaeskey', 'BJIUzE0gqlWy0GxfPp4J1oPTBmOrNDIGPNav1YFH5Z5');
INSERT INTO `system_config` VALUES ('41', 'wechat_thr_appid', 'wx2a24cd6645682ee0');
INSERT INTO `system_config` VALUES ('42', 'wechat_thr_appkey', 'b4932c539dbd97628bf5b31afa92ed15');
INSERT INTO `system_config` VALUES ('43', 'desc', '本站资源均来自互联网或会员发布，如果侵犯了您的权益请与我们联系，我们将在24小时内处理！');
INSERT INTO `system_config` VALUES ('44', 'url', 'manong.yaho.cc');
INSERT INTO `system_config` VALUES ('45', 'logo', '');
INSERT INTO `system_config` VALUES ('46', 'xdesc', '本文由 码农网 -manong.yaho.cc- 发布，转载请注明出处，如有问题请联系我们！');

-- ----------------------------
-- Table structure for system_log
-- ----------------------------
DROP TABLE IF EXISTS `system_log`;
CREATE TABLE `system_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` char(15) NOT NULL DEFAULT '' COMMENT '操作者IP地址',
  `node` char(200) NOT NULL DEFAULT '' COMMENT '当前操作节点',
  `username` varchar(32) NOT NULL DEFAULT '' COMMENT '操作人用户名',
  `action` varchar(200) NOT NULL DEFAULT '' COMMENT '操作行为',
  `content` text NOT NULL COMMENT '操作内容描述',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COMMENT='系统操作日志表';

-- ----------------------------
-- Records of system_log
-- ----------------------------
INSERT INTO `system_log` VALUES ('1', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-07 09:10:14');
INSERT INTO `system_log` VALUES ('2', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-08 08:56:54');
INSERT INTO `system_log` VALUES ('3', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-10 10:33:08');
INSERT INTO `system_log` VALUES ('4', '::1', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-10 10:35:26');
INSERT INTO `system_log` VALUES ('5', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-10 10:36:09');
INSERT INTO `system_log` VALUES ('6', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-11 08:30:20');
INSERT INTO `system_log` VALUES ('7', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-12 08:42:56');
INSERT INTO `system_log` VALUES ('8', '::1', 'wechat/config/index', 'admin', '微信管理', '修改微信接口参数成功', '2018-09-12 14:21:20');
INSERT INTO `system_log` VALUES ('9', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-12 17:05:54');
INSERT INTO `system_log` VALUES ('10', '39.82.175.119', 'wechat/config/index', 'admin', '微信管理', '修改微信接口参数成功', '2018-09-12 17:21:09');
INSERT INTO `system_log` VALUES ('11', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-13 15:25:41');
INSERT INTO `system_log` VALUES ('12', '39.82.175.119', 'wechat/config/index', 'admin', '微信管理', '修改微信接口参数成功', '2018-09-13 15:50:02');
INSERT INTO `system_log` VALUES ('13', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 15:51:04');
INSERT INTO `system_log` VALUES ('14', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 15:52:00');
INSERT INTO `system_log` VALUES ('15', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 15:54:00');
INSERT INTO `system_log` VALUES ('16', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 15:54:18');
INSERT INTO `system_log` VALUES ('17', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 17:10:26');
INSERT INTO `system_log` VALUES ('18', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-13 17:16:06');
INSERT INTO `system_log` VALUES ('19', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-14 08:37:13');
INSERT INTO `system_log` VALUES ('20', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-15 08:32:45');
INSERT INTO `system_log` VALUES ('21', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-15 17:10:28');
INSERT INTO `system_log` VALUES ('22', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-15 17:32:18');
INSERT INTO `system_log` VALUES ('23', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-15 17:32:20');
INSERT INTO `system_log` VALUES ('24', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-15 17:32:29');
INSERT INTO `system_log` VALUES ('25', '183.160.102.208', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 09:48:49');
INSERT INTO `system_log` VALUES ('26', '183.160.42.120', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 10:10:58');
INSERT INTO `system_log` VALUES ('27', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 15:28:23');
INSERT INTO `system_log` VALUES ('28', '124.64.17.29', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 15:55:53');
INSERT INTO `system_log` VALUES ('29', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 16:58:56');
INSERT INTO `system_log` VALUES ('30', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 16:59:04');
INSERT INTO `system_log` VALUES ('31', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:01:44');
INSERT INTO `system_log` VALUES ('32', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:02:42');
INSERT INTO `system_log` VALUES ('33', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:03:04');
INSERT INTO `system_log` VALUES ('34', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:04:05');
INSERT INTO `system_log` VALUES ('35', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:04:43');
INSERT INTO `system_log` VALUES ('36', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:04:46');
INSERT INTO `system_log` VALUES ('37', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:05:34');
INSERT INTO `system_log` VALUES ('38', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:06:01');
INSERT INTO `system_log` VALUES ('39', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:07:30');
INSERT INTO `system_log` VALUES ('40', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:07:38');
INSERT INTO `system_log` VALUES ('41', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:08:30');
INSERT INTO `system_log` VALUES ('42', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:08:38');
INSERT INTO `system_log` VALUES ('43', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:09:41');
INSERT INTO `system_log` VALUES ('44', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:09:48');
INSERT INTO `system_log` VALUES ('45', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:10:03');
INSERT INTO `system_log` VALUES ('46', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:10:10');
INSERT INTO `system_log` VALUES ('47', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:13:44');
INSERT INTO `system_log` VALUES ('48', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:13:52');
INSERT INTO `system_log` VALUES ('49', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:17:04');
INSERT INTO `system_log` VALUES ('50', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:17:16');
INSERT INTO `system_log` VALUES ('51', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:17:38');
INSERT INTO `system_log` VALUES ('52', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:18:04');
INSERT INTO `system_log` VALUES ('53', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:18:24');
INSERT INTO `system_log` VALUES ('54', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:18:31');
INSERT INTO `system_log` VALUES ('55', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:19:10');
INSERT INTO `system_log` VALUES ('56', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:19:20');
INSERT INTO `system_log` VALUES ('57', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:19:40');
INSERT INTO `system_log` VALUES ('58', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:20:16');
INSERT INTO `system_log` VALUES ('59', '39.82.175.119', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2018-09-17 17:20:30');
INSERT INTO `system_log` VALUES ('60', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-17 17:20:37');
INSERT INTO `system_log` VALUES ('61', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-18 14:53:13');
INSERT INTO `system_log` VALUES ('62', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-18 14:59:21');
INSERT INTO `system_log` VALUES ('63', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 09:43:48');
INSERT INTO `system_log` VALUES ('64', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 10:36:36');
INSERT INTO `system_log` VALUES ('65', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 11:00:14');
INSERT INTO `system_log` VALUES ('66', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 14:58:23');
INSERT INTO `system_log` VALUES ('67', '183.160.105.164', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 16:03:37');
INSERT INTO `system_log` VALUES ('68', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 16:04:09');
INSERT INTO `system_log` VALUES ('69', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 16:20:32');
INSERT INTO `system_log` VALUES ('70', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 16:21:39');
INSERT INTO `system_log` VALUES ('71', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 16:24:28');
INSERT INTO `system_log` VALUES ('72', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-26 21:01:02');
INSERT INTO `system_log` VALUES ('73', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-26 21:01:56');
INSERT INTO `system_log` VALUES ('74', '39.82.175.119', 'wechat/menu/edit', 'admin', '微信管理', '发布微信菜单成功', '2018-09-26 21:02:29');
INSERT INTO `system_log` VALUES ('75', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 08:39:43');
INSERT INTO `system_log` VALUES ('76', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 11:28:15');
INSERT INTO `system_log` VALUES ('77', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 11:29:12');
INSERT INTO `system_log` VALUES ('78', '39.82.175.119', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 11:44:26');
INSERT INTO `system_log` VALUES ('79', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 12:08:07');
INSERT INTO `system_log` VALUES ('80', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 13:37:12');
INSERT INTO `system_log` VALUES ('81', '183.160.101.74', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-09-27 13:42:04');
INSERT INTO `system_log` VALUES ('82', '123.233.124.103', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-11-01 14:18:07');
INSERT INTO `system_log` VALUES ('83', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-15 09:53:50');
INSERT INTO `system_log` VALUES ('84', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-15 14:05:29');
INSERT INTO `system_log` VALUES ('85', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-16 12:23:24');
INSERT INTO `system_log` VALUES ('86', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-17 09:30:11');
INSERT INTO `system_log` VALUES ('87', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-18 19:16:25');
INSERT INTO `system_log` VALUES ('88', '::1', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-21 17:56:55');
INSERT INTO `system_log` VALUES ('89', '113.120.5.17', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-21 21:43:55');
INSERT INTO `system_log` VALUES ('90', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-22 18:02:32');
INSERT INTO `system_log` VALUES ('91', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-25 08:34:56');
INSERT INTO `system_log` VALUES ('92', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-25 11:54:00');
INSERT INTO `system_log` VALUES ('93', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-25 14:19:37');
INSERT INTO `system_log` VALUES ('94', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-25 14:37:15');
INSERT INTO `system_log` VALUES ('95', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-26 08:36:32');
INSERT INTO `system_log` VALUES ('96', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-26 09:25:30');
INSERT INTO `system_log` VALUES ('97', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-26 14:17:24');
INSERT INTO `system_log` VALUES ('98', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-26 18:26:28');
INSERT INTO `system_log` VALUES ('99', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-27 08:32:32');
INSERT INTO `system_log` VALUES ('100', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-27 20:23:58');
INSERT INTO `system_log` VALUES ('101', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-28 08:42:52');
INSERT INTO `system_log` VALUES ('102', '218.98.42.21', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2018-12-28 16:04:28');
INSERT INTO `system_log` VALUES ('103', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-02 11:25:26');
INSERT INTO `system_log` VALUES ('104', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-03 08:27:50');
INSERT INTO `system_log` VALUES ('105', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-04 15:11:05');
INSERT INTO `system_log` VALUES ('106', '123.232.66.89', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2019-01-04 15:11:31');
INSERT INTO `system_log` VALUES ('107', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-04 15:11:45');
INSERT INTO `system_log` VALUES ('108', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-05 08:47:01');
INSERT INTO `system_log` VALUES ('109', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-05 14:56:38');
INSERT INTO `system_log` VALUES ('110', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-05 17:18:34');
INSERT INTO `system_log` VALUES ('111', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-06 08:27:08');
INSERT INTO `system_log` VALUES ('112', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-07 09:31:18');
INSERT INTO `system_log` VALUES ('113', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-08 08:29:21');
INSERT INTO `system_log` VALUES ('114', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-08 14:28:25');
INSERT INTO `system_log` VALUES ('115', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-09 09:08:41');
INSERT INTO `system_log` VALUES ('116', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-09 09:27:21');
INSERT INTO `system_log` VALUES ('117', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-09 09:28:10');
INSERT INTO `system_log` VALUES ('118', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-09 09:28:55');
INSERT INTO `system_log` VALUES ('119', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-09 13:45:30');
INSERT INTO `system_log` VALUES ('120', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-09 14:07:45');
INSERT INTO `system_log` VALUES ('121', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-10 08:35:04');
INSERT INTO `system_log` VALUES ('122', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-10 11:38:22');
INSERT INTO `system_log` VALUES ('123', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 13:49:38');
INSERT INTO `system_log` VALUES ('124', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 13:51:50');
INSERT INTO `system_log` VALUES ('125', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 13:52:14');
INSERT INTO `system_log` VALUES ('126', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 13:52:25');
INSERT INTO `system_log` VALUES ('127', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:10:54');
INSERT INTO `system_log` VALUES ('128', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:12:38');
INSERT INTO `system_log` VALUES ('129', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-10 14:15:36');
INSERT INTO `system_log` VALUES ('130', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:27:38');
INSERT INTO `system_log` VALUES ('131', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:44:15');
INSERT INTO `system_log` VALUES ('132', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:52:21');
INSERT INTO `system_log` VALUES ('133', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 14:53:22');
INSERT INTO `system_log` VALUES ('134', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-10 14:57:48');
INSERT INTO `system_log` VALUES ('135', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 15:09:28');
INSERT INTO `system_log` VALUES ('136', '123.232.66.89', 'admin/config/index', 'admin', '系统管理', '系统参数配置成功', '2019-01-10 15:10:10');
INSERT INTO `system_log` VALUES ('137', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-11 09:46:20');
INSERT INTO `system_log` VALUES ('138', '123.232.66.89', 'admin/login/out', 'admin', '系统管理', '用户退出系统成功', '2019-01-11 09:49:55');
INSERT INTO `system_log` VALUES ('139', '123.232.66.89', 'admin/login/index', 'admin', '系统管理', '用户登录系统成功', '2019-01-11 09:50:05');

-- ----------------------------
-- Table structure for system_menu
-- ----------------------------
DROP TABLE IF EXISTS `system_menu`;
CREATE TABLE `system_menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `node` varchar(200) NOT NULL DEFAULT '' COMMENT '节点代码',
  `icon` varchar(100) NOT NULL DEFAULT '' COMMENT '菜单图标',
  `url` varchar(400) NOT NULL DEFAULT '' COMMENT '链接',
  `params` varchar(500) DEFAULT '' COMMENT '链接参数',
  `target` varchar(20) NOT NULL DEFAULT '_self' COMMENT '链接打开方式',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '菜单排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态(0:禁用,1:启用)',
  `create_by` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '创建人',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_system_menu_node` (`node`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COMMENT='系统菜单表';

-- ----------------------------
-- Records of system_menu
-- ----------------------------
INSERT INTO `system_menu` VALUES ('1', '0', '系统设置', '', '', '#', '', '_self', '9000', '1', '10000', '2018-01-19 15:27:00');
INSERT INTO `system_menu` VALUES ('2', '10', '后台菜单', '', 'fa fa-leaf', 'admin/menu/index', '', '_self', '10', '1', '10000', '2018-01-19 15:27:17');
INSERT INTO `system_menu` VALUES ('3', '10', '系统参数', '', 'fa fa-modx', 'admin/config/index', '', '_self', '20', '1', '10000', '2018-01-19 15:27:57');
INSERT INTO `system_menu` VALUES ('4', '11', '访问授权', '', 'fa fa-group', 'admin/auth/index', '', '_self', '20', '1', '10000', '2018-01-22 11:13:02');
INSERT INTO `system_menu` VALUES ('5', '11', '用户管理', '', 'fa fa-user', 'admin/user/index', '', '_self', '10', '1', '0', '2018-01-23 12:15:12');
INSERT INTO `system_menu` VALUES ('6', '11', '访问节点', '', 'fa fa-fort-awesome', 'admin/node/index', '', '_self', '30', '1', '0', '2018-01-23 12:36:54');
INSERT INTO `system_menu` VALUES ('7', '0', '后台首页', '', '', 'admin/index/main', '', '_self', '1000', '1', '0', '2018-01-23 13:42:30');
INSERT INTO `system_menu` VALUES ('8', '16', '系统日志', '', 'fa fa-code', 'admin/log/index', '', '_self', '10', '1', '0', '2018-01-24 13:52:58');
INSERT INTO `system_menu` VALUES ('9', '10', '文件存储', '', 'fa fa-stop-circle', 'admin/config/file', '', '_self', '30', '1', '0', '2018-01-25 10:54:28');
INSERT INTO `system_menu` VALUES ('10', '1', '系统管理', '', '', '#', '', '_self', '200', '1', '0', '2018-01-25 18:14:28');
INSERT INTO `system_menu` VALUES ('11', '1', '访问权限', '', '', '#', '', '_self', '300', '1', '0', '2018-01-25 18:15:08');
INSERT INTO `system_menu` VALUES ('16', '1', '日志管理', '', '', '#', '', '_self', '400', '1', '0', '2018-02-10 16:31:15');
INSERT INTO `system_menu` VALUES ('17', '0', '微信管理', '', '', '#', '', '_self', '8000', '1', '0', '2018-03-06 14:42:49');
INSERT INTO `system_menu` VALUES ('18', '17', '公众号配置', '', '', '#', '', '_self', '0', '1', '0', '2018-03-06 14:43:05');
INSERT INTO `system_menu` VALUES ('19', '18', '微信授权绑定', '', 'fa fa-cog', 'wechat/config/index', '', '_self', '0', '1', '0', '2018-03-06 14:43:26');
INSERT INTO `system_menu` VALUES ('20', '18', '关注默认回复', '', 'fa fa-comment-o', 'wechat/keys/subscribe', '', '_self', '0', '1', '0', '2018-03-06 14:44:45');
INSERT INTO `system_menu` VALUES ('21', '18', '无反馈默认回复', '', 'fa fa-commenting', 'wechat/keys/defaults', '', '_self', '0', '1', '0', '2018-03-06 14:45:55');
INSERT INTO `system_menu` VALUES ('22', '18', '微信关键字管理', '', 'fa fa-hashtag', 'wechat/keys/index', '', '_self', '0', '1', '0', '2018-03-06 14:46:23');
INSERT INTO `system_menu` VALUES ('23', '17', '微信服务定制', '', '', '#', '', '_self', '0', '1', '0', '2018-03-06 14:47:11');
INSERT INTO `system_menu` VALUES ('24', '23', '微信菜单管理', '', 'fa fa-gg-circle', 'wechat/menu/index', '', '_self', '0', '1', '0', '2018-03-06 14:47:39');
INSERT INTO `system_menu` VALUES ('25', '23', '微信图文管理', '', 'fa fa-map-o', 'wechat/news/index', '', '_self', '0', '1', '0', '2018-03-06 14:48:14');
INSERT INTO `system_menu` VALUES ('26', '17', '微信粉丝管理', '', 'fa fa-user', '#', '', '_self', '0', '1', '0', '2018-03-06 14:48:33');
INSERT INTO `system_menu` VALUES ('27', '26', '微信粉丝列表', '', 'fa fa-users', 'wechat/fans/index', '', '_self', '20', '1', '0', '2018-03-06 14:49:04');
INSERT INTO `system_menu` VALUES ('28', '26', '微信黑名单管理', '', 'fa fa-user-times', 'wechat/fans_block/index', '', '_self', '30', '1', '0', '2018-03-06 14:49:22');
INSERT INTO `system_menu` VALUES ('29', '26', '微信标签管理', '', 'fa fa-tags', 'wechat/tags/index', '', '_self', '10', '1', '0', '2018-03-06 14:49:39');
INSERT INTO `system_menu` VALUES ('32', '0', '源码商城', '', '', '#', '', '_self', '2000', '1', '0', '2018-03-20 16:46:07');
INSERT INTO `system_menu` VALUES ('33', '32', '源码管理', '', '', '#', '', '_self', '0', '1', '0', '2018-03-20 16:46:21');
INSERT INTO `system_menu` VALUES ('34', '33', '产品(已审核)', '', 'fa fa-modx', 'store/goods/index', '', '_self', '1', '1', '0', '2018-03-20 16:46:45');
INSERT INTO `system_menu` VALUES ('36', '33', '分类管理', '', 'fa fa-product-hunt', 'store/goods_cate/index', '', '_self', '2', '1', '0', '2018-03-20 16:47:50');
INSERT INTO `system_menu` VALUES ('37', '33', '系统品牌', '', 'fa fa-scribd', 'store/goods_brand/index', '', '_self', '3', '1', '0', '2018-03-20 16:48:05');
INSERT INTO `system_menu` VALUES ('38', '32', '订单管理', '', '', '#', '', '_self', '0', '0', '0', '2018-04-21 15:07:36');
INSERT INTO `system_menu` VALUES ('39', '38', '订单列表', '', 'fa fa-adjust', 'store/order/index', '', '_self', '0', '0', '0', '2018-04-21 15:07:54');
INSERT INTO `system_menu` VALUES ('40', '32', '商城配置', '', '', '#', '', '_self', '0', '0', '0', '2018-04-21 15:08:17');
INSERT INTO `system_menu` VALUES ('41', '40', '参数管理', '', '', '#', '', '_self', '0', '0', '0', '2018-04-21 15:08:25');
INSERT INTO `system_menu` VALUES ('42', '40', '快递公司', '', 'fa fa-mixcloud', 'store/express/index', '', '_self', '0', '0', '0', '2018-04-21 15:08:50');
INSERT INTO `system_menu` VALUES ('43', '0', '源', '', 'fa fa-barcode', '#', '', '_self', '0', '0', '0', '2018-09-07 09:10:49');
INSERT INTO `system_menu` VALUES ('44', '43', '分类管理', '', 'fa fa-bookmark-o', '#', '', '_self', '0', '0', '0', '2018-09-07 09:11:22');
INSERT INTO `system_menu` VALUES ('45', '44', '报名列表(待审核)', '', 'fa fa-close', 'vote/goods/index', '', '_self', '1', '0', '0', '2018-09-07 09:12:13');
INSERT INTO `system_menu` VALUES ('46', '44', '报名列表(已审核)', '', 'fa fa-check', '/vote/goods/nolist', '', '_self', '2', '0', '0', '2018-09-08 11:32:55');
INSERT INTO `system_menu` VALUES ('47', '0', '用户管理', '', '', '#', '', '_self', '0', '0', '0', '2018-09-08 14:21:36');
INSERT INTO `system_menu` VALUES ('48', '47', '用户列表', '', 'fa fa-user', '/vote/user/index', '', '_self', '0', '0', '0', '2018-09-08 14:22:07');
INSERT INTO `system_menu` VALUES ('49', '44', '添加分类', '', 'fa fa-arrows', '/vote/goods/add', '', '_self', '0', '0', '0', '2018-09-08 19:12:17');
INSERT INTO `system_menu` VALUES ('50', '44', '精彩视频', '', 'fa fa-pause-circle', 'vote/goods/wonderful', '', '_self', '3', '0', '0', '2018-09-11 14:32:35');
INSERT INTO `system_menu` VALUES ('51', '44', '时间设置', '', 'fa fa-clock-o', '/vote/goods/setupthe', '', '_self', '0', '0', '0', '2018-09-26 10:40:48');
INSERT INTO `system_menu` VALUES ('52', '33', '数据库类', '', 'fa fa-usb', '/store/goods_database/index', '', '_self', '4', '1', '0', '2018-12-16 12:44:15');
INSERT INTO `system_menu` VALUES ('53', '33', '语言管理', '', 'fa fa-book', '/store/goods_language/index', '', '_self', '5', '1', '0', '2018-12-16 13:30:55');
INSERT INTO `system_menu` VALUES ('54', '33', '产品(未审核)', '', 'fa fa-close', '/store/goods/notaudit', '', '_self', '0', '1', '0', '2018-12-28 14:24:47');
INSERT INTO `system_menu` VALUES ('55', '32', '用户管理', '', '', '#', '', '_self', '0', '1', '0', '2018-12-28 15:13:21');
INSERT INTO `system_menu` VALUES ('56', '55', '用户列表', '', 'fa fa-users', '/store/user/index', '', '_self', '0', '1', '0', '2018-12-28 15:15:29');
INSERT INTO `system_menu` VALUES ('57', '32', '友情链接', '', '', '#', '', '_self', '6', '1', '0', '2019-01-03 09:23:55');
INSERT INTO `system_menu` VALUES ('58', '57', '友情列表', '', 'fa fa-child', '/store/link/index', '', '_self', '7', '1', '0', '2019-01-03 09:25:04');
INSERT INTO `system_menu` VALUES ('59', '32', '审核记录', '', '', '#', '', '_self', '0', '1', '0', '2019-01-03 10:36:11');
INSERT INTO `system_menu` VALUES ('60', '59', '上传审核', '', 'fa fa-level-up', '/store/audit/index', '', '_self', '0', '1', '0', '2019-01-03 10:45:04');
INSERT INTO `system_menu` VALUES ('61', '32', '公告管理', '', '', '#', '', '_self', '0', '1', '0', '2019-01-03 16:07:37');
INSERT INTO `system_menu` VALUES ('62', '61', '公告列表', '', 'fa fa-archive', '/store/announ/index', '', '_self', '0', '1', '0', '2019-01-03 16:08:32');
INSERT INTO `system_menu` VALUES ('63', '59', '下载记录', '', 'fa fa-level-down', '/store/audit/download', '', '_self', '0', '1', '0', '2019-01-04 15:13:09');
INSERT INTO `system_menu` VALUES ('64', '59', '评论管理', '', 'fa fa-bolt', '/store/audit/comments', '', '_self', '0', '1', '0', '2019-01-05 17:19:44');
INSERT INTO `system_menu` VALUES ('65', '32', '充值记录', '', '', '#', '', '_self', '0', '1', '0', '2019-01-08 17:51:32');
INSERT INTO `system_menu` VALUES ('66', '65', '积分充值', '', 'fa fa-asterisk', '/store/toup/price', '', '_self', '0', '1', '0', '2019-01-08 17:52:03');
INSERT INTO `system_menu` VALUES ('69', '65', '开通记录', '', 'fa fa-bell-slash', '/store/toup/up', '', '_self', '0', '1', '0', '2019-01-10 08:39:59');

-- ----------------------------
-- Table structure for system_node
-- ----------------------------
DROP TABLE IF EXISTS `system_node`;
CREATE TABLE `system_node` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `node` varchar(100) DEFAULT NULL COMMENT '节点代码',
  `title` varchar(500) DEFAULT NULL COMMENT '节点标题',
  `is_menu` tinyint(1) unsigned DEFAULT '0' COMMENT '是否可设置为菜单',
  `is_auth` tinyint(1) unsigned DEFAULT '1' COMMENT '是否启动RBAC权限控制',
  `is_login` tinyint(1) unsigned DEFAULT '1' COMMENT '是否启动登录控制',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_system_node_node` (`node`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COMMENT='系统节点表';

-- ----------------------------
-- Records of system_node
-- ----------------------------
INSERT INTO `system_node` VALUES ('13', 'admin', '系统设置', '0', '1', '1', '2018-05-04 11:02:34');
INSERT INTO `system_node` VALUES ('14', 'admin/auth', '权限管理', '0', '1', '1', '2018-05-04 11:06:55');
INSERT INTO `system_node` VALUES ('15', 'admin/auth/index', '权限列表', '1', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('16', 'admin/auth/apply', '权限配置', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('17', 'admin/auth/add', '添加权限', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('18', 'admin/auth/edit', '编辑权限', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('19', 'admin/auth/forbid', '禁用权限', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('20', 'admin/auth/resume', '启用权限', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('21', 'admin/auth/del', '删除权限', '0', '1', '1', '2018-05-04 11:06:56');
INSERT INTO `system_node` VALUES ('22', 'admin/config', '系统配置', '0', '1', '1', '2018-05-04 11:08:18');
INSERT INTO `system_node` VALUES ('23', 'admin/config/index', '系统参数', '1', '1', '1', '2018-05-04 11:08:25');
INSERT INTO `system_node` VALUES ('24', 'admin/config/file', '文件存储', '1', '1', '1', '2018-05-04 11:08:27');
INSERT INTO `system_node` VALUES ('25', 'admin/log', '日志管理', '0', '1', '1', '2018-05-04 11:08:43');
INSERT INTO `system_node` VALUES ('26', 'admin/log/index', '日志管理', '1', '1', '1', '2018-05-04 11:08:43');
INSERT INTO `system_node` VALUES ('28', 'admin/log/del', '日志删除', '0', '1', '1', '2018-05-04 11:08:43');
INSERT INTO `system_node` VALUES ('29', 'admin/menu', '系统菜单', '0', '1', '1', '2018-05-04 11:09:54');
INSERT INTO `system_node` VALUES ('30', 'admin/menu/index', '菜单列表', '1', '1', '1', '2018-05-04 11:09:54');
INSERT INTO `system_node` VALUES ('31', 'admin/menu/add', '添加菜单', '0', '1', '1', '2018-05-04 11:09:55');
INSERT INTO `system_node` VALUES ('32', 'admin/menu/edit', '编辑菜单', '0', '1', '1', '2018-05-04 11:09:55');
INSERT INTO `system_node` VALUES ('33', 'admin/menu/del', '删除菜单', '0', '1', '1', '2018-05-04 11:09:55');
INSERT INTO `system_node` VALUES ('34', 'admin/menu/forbid', '禁用菜单', '0', '1', '1', '2018-05-04 11:09:55');
INSERT INTO `system_node` VALUES ('35', 'admin/menu/resume', '启用菜单', '0', '1', '1', '2018-05-04 11:09:55');
INSERT INTO `system_node` VALUES ('36', 'admin/node', '节点管理', '0', '1', '1', '2018-05-04 11:10:20');
INSERT INTO `system_node` VALUES ('37', 'admin/node/index', '节点列表', '1', '1', '1', '2018-05-04 11:10:20');
INSERT INTO `system_node` VALUES ('38', 'admin/node/clear', '清理节点', '0', '1', '1', '2018-05-04 11:10:21');
INSERT INTO `system_node` VALUES ('39', 'admin/node/save', '更新节点', '0', '1', '1', '2018-05-04 11:10:21');
INSERT INTO `system_node` VALUES ('40', 'admin/user', '系统用户', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('41', 'admin/user/index', '用户列表', '1', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('42', 'admin/user/auth', '用户授权', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('43', 'admin/user/add', '添加用户', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('44', 'admin/user/edit', '编辑用户', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('45', 'admin/user/pass', '修改密码', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('46', 'admin/user/del', '删除用户', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('47', 'admin/user/forbid', '禁用启用', '0', '1', '1', '2018-05-04 11:10:43');
INSERT INTO `system_node` VALUES ('48', 'admin/user/resume', '启用用户', '0', '1', '1', '2018-05-04 11:10:44');
INSERT INTO `system_node` VALUES ('49', 'store', '商城管理', '0', '1', '1', '2018-05-04 11:11:28');
INSERT INTO `system_node` VALUES ('50', 'store/express', '快递公司管理', '0', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('51', 'store/express/index', '快递公司列表', '1', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('52', 'store/express/add', '添加快递公司', '0', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('53', 'store/express/edit', '编辑快递公司', '0', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('54', 'store/express/del', '删除快递公司', '0', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('55', 'store/express/forbid', '禁用快递公司', '0', '1', '1', '2018-05-04 11:11:39');
INSERT INTO `system_node` VALUES ('56', 'store/express/resume', '启用快递公司', '0', '1', '1', '2018-05-04 11:11:40');
INSERT INTO `system_node` VALUES ('57', 'store/order', '订单管理', '0', '1', '1', '2018-05-04 11:12:14');
INSERT INTO `system_node` VALUES ('58', 'store/order/index', '订单列表', '1', '1', '1', '2018-05-04 11:12:17');
INSERT INTO `system_node` VALUES ('59', 'store/order/address', '修改地址', '0', '1', '1', '2018-05-04 11:12:19');
INSERT INTO `system_node` VALUES ('76', 'wechat', '微信管理', '0', '1', '1', '2018-05-04 11:14:59');
INSERT INTO `system_node` VALUES ('78', 'wechat/config', '微信对接管理', '0', '1', '1', '2018-05-04 11:16:20');
INSERT INTO `system_node` VALUES ('79', 'wechat/config/index', '微信对接配置', '1', '1', '1', '2018-05-04 11:16:23');
INSERT INTO `system_node` VALUES ('80', 'wechat/fans', '微信粉丝管理', '0', '1', '1', '2018-05-04 11:16:31');
INSERT INTO `system_node` VALUES ('81', 'wechat/fans/index', '微信粉丝列表', '1', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('82', 'wechat/fans/backadd', '微信粉丝拉黑', '0', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('83', 'wechat/fans/tagset', '设置粉丝标签', '0', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('84', 'wechat/fans/tagadd', '添加粉丝标签', '0', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('85', 'wechat/fans/tagdel', '删除粉丝标签', '0', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('86', 'wechat/fans/sync', '同步粉丝列表', '0', '1', '1', '2018-05-04 11:16:32');
INSERT INTO `system_node` VALUES ('87', 'wechat/fans_block', '粉丝黑名单管理', '0', '1', '1', '2018-05-04 11:17:25');
INSERT INTO `system_node` VALUES ('88', 'wechat/fans_block/index', '粉丝黑名单列表', '1', '1', '1', '2018-05-04 11:17:50');
INSERT INTO `system_node` VALUES ('89', 'wechat/fans_block/backdel', '移除粉丝黑名单', '0', '1', '1', '2018-05-04 11:17:51');
INSERT INTO `system_node` VALUES ('90', 'wechat/keys', '微信关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('91', 'wechat/keys/index', '关键字列表', '1', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('92', 'wechat/keys/add', '添加关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('93', 'wechat/keys/edit', '编辑关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('94', 'wechat/keys/del', '删除关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('95', 'wechat/keys/forbid', '禁用关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('96', 'wechat/keys/resume', '启用关键字', '0', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('97', 'wechat/keys/subscribe', '关注回复', '1', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('98', 'wechat/keys/defaults', '默认回复', '1', '1', '1', '2018-05-04 11:18:09');
INSERT INTO `system_node` VALUES ('99', 'wechat/menu', '微信菜单管理', '0', '1', '1', '2018-05-04 11:18:57');
INSERT INTO `system_node` VALUES ('100', 'wechat/menu/index', '微信菜单展示', '1', '1', '1', '2018-05-04 11:19:10');
INSERT INTO `system_node` VALUES ('101', 'wechat/menu/edit', '编辑微信菜单', '0', '1', '1', '2018-05-04 11:19:22');
INSERT INTO `system_node` VALUES ('102', 'wechat/menu/cancel', '取消微信菜单', '0', '1', '1', '2018-05-04 11:19:26');
INSERT INTO `system_node` VALUES ('103', 'wechat/news/index', '微信图文列表', '1', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('104', 'wechat/news/select', '微信图文选择', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('105', 'wechat/news/image', '微信图片选择', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('106', 'wechat/news/add', '添加微信图文', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('107', 'wechat/news/edit', '编辑微信图文', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('108', 'wechat/news/del', '删除微信图文', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('109', 'wechat/news/push', '推送微信图文', '0', '1', '1', '2018-05-04 11:19:28');
INSERT INTO `system_node` VALUES ('110', 'wechat/news', '微信图文管理', '0', '1', '1', '2018-05-04 11:19:35');
INSERT INTO `system_node` VALUES ('111', 'wechat/tags', '微信粉丝标签管理', '0', '1', '1', '2018-05-04 11:20:28');
INSERT INTO `system_node` VALUES ('112', 'wechat/tags/index', '粉丝标签列表', '1', '1', '1', '2018-05-04 11:20:28');
INSERT INTO `system_node` VALUES ('113', 'wechat/tags/add', '添加粉丝标签', '0', '1', '1', '2018-05-04 11:20:28');
INSERT INTO `system_node` VALUES ('114', 'wechat/tags/edit', '编辑粉丝标签', '0', '1', '1', '2018-05-04 11:20:29');
INSERT INTO `system_node` VALUES ('115', 'wechat/tags/del', '删除粉丝标签', '0', '1', '1', '2018-05-04 11:20:29');
INSERT INTO `system_node` VALUES ('116', 'wechat/tags/sync', '同步粉丝标签', '0', '1', '1', '2018-05-04 11:20:29');
INSERT INTO `system_node` VALUES ('117', 'store/goods', '商品管理', '0', '1', '1', '2018-05-04 11:29:55');
INSERT INTO `system_node` VALUES ('118', 'store/goods/index', '商品列表', '1', '1', '1', '2018-05-04 11:29:56');
INSERT INTO `system_node` VALUES ('119', 'store/goods/add', '添加商品', '0', '1', '1', '2018-05-04 11:29:56');
INSERT INTO `system_node` VALUES ('120', 'store/goods/edit', '编辑商品', '0', '1', '1', '2018-05-04 11:29:56');
INSERT INTO `system_node` VALUES ('121', 'store/goods/del', '删除商品', '0', '1', '1', '2018-05-04 11:29:56');
INSERT INTO `system_node` VALUES ('122', 'store/goods/forbid', '下架商品', '0', '1', '1', '2018-05-04 11:29:56');
INSERT INTO `system_node` VALUES ('123', 'store/goods/resume', '上架商品', '0', '1', '1', '2018-05-04 11:29:57');
INSERT INTO `system_node` VALUES ('124', 'store/goods_brand', '商品品牌管理', '0', '1', '1', '2018-05-04 11:30:44');
INSERT INTO `system_node` VALUES ('125', 'store/goods_brand/index', '商品品牌列表', '1', '1', '1', '2018-05-04 11:30:52');
INSERT INTO `system_node` VALUES ('126', 'store/goods_brand/add', '添加商品品牌', '0', '1', '1', '2018-05-04 11:30:55');
INSERT INTO `system_node` VALUES ('127', 'store/goods_brand/edit', '编辑商品品牌', '0', '1', '1', '2018-05-04 11:30:56');
INSERT INTO `system_node` VALUES ('128', 'store/goods_brand/del', '删除商品品牌', '0', '1', '1', '2018-05-04 11:30:56');
INSERT INTO `system_node` VALUES ('129', 'store/goods_brand/forbid', '禁用商品品牌', '0', '1', '1', '2018-05-04 11:30:56');
INSERT INTO `system_node` VALUES ('130', 'store/goods_brand/resume', '启用商品品牌', '0', '1', '1', '2018-05-04 11:30:56');
INSERT INTO `system_node` VALUES ('131', 'store/goods_cate', '商品分类管理', '0', '1', '1', '2018-05-04 11:31:19');
INSERT INTO `system_node` VALUES ('132', 'store/goods_cate/index', '商品分类列表', '1', '1', '1', '2018-05-04 11:31:23');
INSERT INTO `system_node` VALUES ('133', 'store/goods_cate/add', '添加商品分类', '0', '1', '1', '2018-05-04 11:31:23');
INSERT INTO `system_node` VALUES ('134', 'store/goods_cate/edit', '编辑商品分类', '0', '1', '1', '2018-05-04 11:31:23');
INSERT INTO `system_node` VALUES ('135', 'store/goods_cate/del', '删除商品分类', '0', '1', '1', '2018-05-04 11:31:24');
INSERT INTO `system_node` VALUES ('136', 'store/goods_cate/forbid', '禁用商品分类', '0', '1', '1', '2018-05-04 11:31:24');
INSERT INTO `system_node` VALUES ('137', 'store/goods_cate/resume', '启用商品分类', '0', '1', '1', '2018-05-04 11:31:24');
INSERT INTO `system_node` VALUES ('138', 'store/goods_spec', '商品规格管理', '0', '1', '1', '2018-05-04 11:31:47');
INSERT INTO `system_node` VALUES ('139', 'store/goods_spec/index', '商品规格列表', '1', '1', '1', '2018-05-04 11:31:47');
INSERT INTO `system_node` VALUES ('140', 'store/goods_spec/add', '添加商品规格', '0', '1', '1', '2018-05-04 11:31:47');
INSERT INTO `system_node` VALUES ('141', 'store/goods_spec/edit', '编辑商品规格', '0', '1', '1', '2018-05-04 11:31:48');
INSERT INTO `system_node` VALUES ('142', 'store/goods_spec/del', '删除商品规格', '0', '1', '1', '2018-05-04 11:31:48');
INSERT INTO `system_node` VALUES ('143', 'store/goods_spec/forbid', '禁用商品规格', '0', '1', '1', '2018-05-04 11:31:48');
INSERT INTO `system_node` VALUES ('144', 'store/goods_spec/resume', '启用商品规格', '0', '1', '1', '2018-05-04 11:31:48');
INSERT INTO `system_node` VALUES ('145', 'vote', '投票管理', '0', '1', '1', '2018-09-10 10:34:08');
INSERT INTO `system_node` VALUES ('146', 'vote/goods', '投票模块', '0', '1', '1', '2018-09-10 10:34:36');
INSERT INTO `system_node` VALUES ('147', 'vote/goods/index', '报名列表(未审核)', '0', '0', '1', '2018-09-10 10:34:50');
INSERT INTO `system_node` VALUES ('148', 'vote/goods/nolist', '报名列表(已审核)', '0', '0', '1', '2018-09-10 10:34:53');

-- ----------------------------
-- Table structure for system_sequence
-- ----------------------------
DROP TABLE IF EXISTS `system_sequence`;
CREATE TABLE `system_sequence` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL COMMENT '序号类型',
  `sequence` char(50) NOT NULL COMMENT '序号值',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_system_sequence_unique` (`type`,`sequence`) USING BTREE,
  KEY `index_system_sequence_type` (`type`),
  KEY `index_system_sequence_number` (`sequence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统序号表';

-- ----------------------------
-- Records of system_sequence
-- ----------------------------

-- ----------------------------
-- Table structure for system_user
-- ----------------------------
DROP TABLE IF EXISTS `system_user`;
CREATE TABLE `system_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户登录名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户登录密码',
  `qq` varchar(16) DEFAULT NULL COMMENT '联系QQ',
  `mail` varchar(32) DEFAULT NULL COMMENT '联系邮箱',
  `phone` varchar(16) DEFAULT NULL COMMENT '联系手机号',
  `desc` varchar(255) DEFAULT '' COMMENT '备注说明',
  `login_num` bigint(20) unsigned DEFAULT '0' COMMENT '登录次数',
  `login_at` datetime DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态(0:禁用,1:启用)',
  `authorize` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态(1:删除,0:未删)',
  `create_by` bigint(20) unsigned DEFAULT NULL COMMENT '创建人',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_system_user_username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=utf8 COMMENT='系统用户表';

-- ----------------------------
-- Records of system_user
-- ----------------------------
INSERT INTO `system_user` VALUES ('10000', 'admin', '4c9d0f13203df4bdff410f8beef9abf4', '22222222', '786199846@qq.com', '15054129665', '', '23065', '2019-01-11 09:50:05', '1', '', '0', null, '2015-11-13 15:14:22');

-- ----------------------------
-- Table structure for wechat_fans
-- ----------------------------
DROP TABLE IF EXISTS `wechat_fans`;
CREATE TABLE `wechat_fans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `appid` char(50) DEFAULT '' COMMENT '公众号Appid',
  `unionid` char(100) DEFAULT '' COMMENT 'unionid',
  `openid` char(100) DEFAULT '' COMMENT '用户的标识,对当前公众号唯一',
  `spread_openid` char(100) DEFAULT '' COMMENT '推荐人OPENID',
  `spread_at` datetime DEFAULT NULL COMMENT '推荐时间',
  `tagid_list` varchar(100) DEFAULT '' COMMENT '标签id',
  `is_black` tinyint(1) unsigned DEFAULT '0' COMMENT '是否为黑名单用户',
  `subscribe` tinyint(1) unsigned DEFAULT '0' COMMENT '用户是否关注该公众号(0:未关注, 1:已关注)',
  `nickname` varchar(200) DEFAULT '' COMMENT '用户的昵称',
  `sex` tinyint(1) unsigned DEFAULT NULL COMMENT '用户的性别,值为1时是男性,值为2时是女性,值为0时是未知',
  `country` varchar(50) DEFAULT '' COMMENT '用户所在国家',
  `province` varchar(50) DEFAULT '' COMMENT '用户所在省份',
  `city` varchar(50) DEFAULT '' COMMENT '用户所在城市',
  `language` varchar(50) DEFAULT '' COMMENT '用户的语言,简体中文为zh_CN',
  `headimgurl` varchar(500) DEFAULT '' COMMENT '用户头像',
  `subscribe_time` bigint(20) unsigned DEFAULT '0' COMMENT '用户关注时间',
  `subscribe_at` datetime DEFAULT NULL COMMENT '关注时间',
  `remark` varchar(50) DEFAULT '' COMMENT '备注',
  `expires_in` bigint(20) unsigned DEFAULT '0' COMMENT '有效时间',
  `refresh_token` varchar(200) DEFAULT '' COMMENT '刷新token',
  `access_token` varchar(200) DEFAULT '' COMMENT '访问token',
  `subscribe_scene` varchar(200) DEFAULT '' COMMENT '扫码关注场景',
  `qr_scene` varchar(100) DEFAULT '' COMMENT '二维码场景值',
  `qr_scene_str` varchar(200) DEFAULT '' COMMENT '二维码场景内容',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_wechat_fans_spread_openid` (`spread_openid`) USING BTREE,
  KEY `index_wechat_fans_openid` (`openid`) USING BTREE,
  KEY `index_wechat_fans_unionid` (`unionid`),
  KEY `index_wechat_fans_is_back` (`is_black`),
  KEY `index_wechat_fans_subscribe` (`subscribe`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='微信粉丝';

-- ----------------------------
-- Records of wechat_fans
-- ----------------------------
INSERT INTO `wechat_fans` VALUES ('1', 'wx2a24cd6645682ee0', '', 'oaGGF1F6osB0MkCmwRMjl6NqRL-g', '', null, '', '0', '0', '', null, '', '', '', '', '', '0', null, '', '0', '', '', '', '', '', '2018-09-12 17:13:01');
INSERT INTO `wechat_fans` VALUES ('2', 'wxfabb6142860596f0', '', 'opg9D1u8BWqmgd4AimzxYtm_42rE', '', null, '', '0', '1', 'A \\ud83d\\udca5     ༄ཉི拼命三郎ཉྀ࿐', '1', '中国', '山西', '大同', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLzMxclt5bicHhLhtmZf4gSa75cTDA2Ic19rfx1jicicQHkWTt4CzOBMFgmmqFo6epm0cLFS9yCIdB2A/132', '1537948730', '2018-09-26 15:58:50', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-13 15:58:53');
INSERT INTO `wechat_fans` VALUES ('3', 'wxfabb6142860596f0', '', 'opg9D1oZWGvbquSpW6UFeKh6laXY', '', null, '', '0', '1', '洋洋 \\ud83d\\udd12', '2', '中国', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKx5ahRUaamzl6GOYQeInnHZCOaTb5u2wwbalKN8sysAd94PibcTsibNwhv4ev3F2hZjhpsFHeicZT9g/132', '1536825577', '2018-09-13 15:59:37', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-13 15:59:38');
INSERT INTO `wechat_fans` VALUES ('4', 'wxfabb6142860596f0', '', 'opg9D1mHvElJLn42RViT8neP4leU', '', null, '', '0', '1', 'qw', '1', '中国', '河北', '保定', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/PiajxSqBRaEIQWFFtJFyXmKbbLHwG6Ka18jWyf09pWyYwNf3uH1xIPEv8PajoFLPPukzJdl35P3lVVOFib97iaHDg/132', '1537351407', '2018-09-19 18:03:27', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-13 16:11:41');
INSERT INTO `wechat_fans` VALUES ('5', 'wxfabb6142860596f0', '', 'opg9D1pcLzrtANcxDNMZsfYqYtss', '', null, '', '0', '1', 'Mr.Wang', '1', '中国', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/aS6CsxCTmb6olg4VqmLZVDyEtGvibP30FelEEDruyVDx8OFfgxiabeqkYKibURBb9WSkicibWosPgsFhib8CF4TQ2icOw/132', '1537002676', '2018-09-15 17:11:16', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-15 17:07:34');
INSERT INTO `wechat_fans` VALUES ('6', 'wxfabb6142860596f0', '', 'opg9D1oOZqOPakBkv0NBaAk6Jzqs', '', null, '', '0', '1', '卓伊凡', '1', '马尔代夫', '阿杜', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTI34wGCsR2gplVUF5EwkkxibAem6JGoicniattwQKcKfcQTXQLp0Qn43jd3ibToicsS66YtlqYZnI9UpsQ/132', '1537003931', '2018-09-15 17:32:11', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-15 17:32:12');
INSERT INTO `wechat_fans` VALUES ('7', 'wxfabb6142860596f0', '', 'opg9D1hv5R9tCkMAnN5xqVUZe0pA', '', null, '', '0', '1', '肖伟明', '1', '中国', '安徽', '合肥', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/4ghjqIuobCLf7Zm4eb8ergluR1FaXrOBtgtY33eO6hgAu5PQcJDJ0noREbcQbLrZzSV8RXCzM61Yic6g6OrYib3w/132', '1537004006', '2018-09-15 17:33:26', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-15 17:33:27');
INSERT INTO `wechat_fans` VALUES ('8', 'wxfabb6142860596f0', '', 'opg9D1sRU_r9MRiERT9JM0YM00Kw', '', null, '', '0', '1', 'M', '2', '安道尔', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83epqvibP6bjbcic6gXlLQLeck9oJ7T2ia1ibicCrumVicSxNLRts4oMFA2nYobDfIlqH8XvR9Le870QslWXg/132', '1537149004', '2018-09-17 09:50:04', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-17 09:50:05');
INSERT INTO `wechat_fans` VALUES ('9', 'wxfabb6142860596f0', '', 'opg9D1pIYT1CUtIj9gilT2fEqXqY', '', null, '', '0', '1', 'Poison', '2', '瑞士', '苏黎世', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKTQR3t55eLdoiakRtB2GjUGt63nTia5SeWkwTm9uuLwjaCq0sTr6icPpkFVWnwvVQdgNJAickyic7ks1Q/132', '1537150551', '2018-09-17 10:15:51', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-17 10:15:52');
INSERT INTO `wechat_fans` VALUES ('10', 'wxfabb6142860596f0', '', 'opg9D1lEgK4Fllj67M3s4Y91r7ag', '', null, '', '0', '1', 'SS', '2', '中国', '山东', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKDRfib8wy7A2n28RPIY862UOKezrV5oef5zNSspvibwzXzSOdvUQx9QicVJsa2XNGqglg8bzic1uZ1SA/132', '1537179570', '2018-09-17 18:19:30', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-17 18:19:31');
INSERT INTO `wechat_fans` VALUES ('11', 'wxfabb6142860596f0', '', 'opg9D1u_tpAX0HaSab6DWDOQ4Fqw', '', null, '', '0', '1', '微莉臻尼', '1', '中国', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJ7l0FQCbc2Wv7YRicCELU0fxcL5E18jbQ6dIwMbqO7u6V2ZEGxibqSd2nibJWDNys1hYjXAXhJ1WGTA/132', '1537180389', '2018-09-17 18:33:09', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-17 18:33:10');
INSERT INTO `wechat_fans` VALUES ('12', 'wxfabb6142860596f0', '', 'opg9D1gdrUPbgMCR0FbpyxC1FI-g', '', null, '', '0', '1', 'Amazing.', '1', '中国', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJibBZXuUbHyR0cXb7O74EAVcpKsAUGDkMsdUCKJs6FwNkm2zY4V9e8hdbfD6ZicfgQ6a0XRABQnDNA/132', '1537335486', '2018-09-19 13:38:06', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 13:38:08');
INSERT INTO `wechat_fans` VALUES ('13', 'wxfabb6142860596f0', '', 'opg9D1lwA97fAFOTDGtBNF_CbMCU', '', null, '', '0', '1', '    stone', '1', '中国', '天津', '河西', 'en', 'http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83eoGwhmNqXFCc8xaYNB5NicZLzSKrrWMsDVUibyyE60DO5L4M1Ixm7LIOl1ibtweS4NqZicXDmrAGic39QQ/132', '1537335810', '2018-09-19 13:43:30', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 13:43:30');
INSERT INTO `wechat_fans` VALUES ('14', 'wxfabb6142860596f0', '', 'opg9D1gzqs4xIa9wxwMkNg_jpTjk', '', null, '', '0', '1', '金沃斯班主任Valerie 崔鹏', '2', '中国', '天津', '南开', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/0Ep4qOVJkGibJh9GASt2zJ88heAXp6KQxNbzu40fvUOzfbwKJicKmm7Z9n2ckhMLmUwU17kF2ibVP01HKaMd8ibhCQ/132', '1537336522', '2018-09-19 13:55:22', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 13:55:22');
INSERT INTO `wechat_fans` VALUES ('15', 'wxfabb6142860596f0', '', 'opg9D1mt-Ukt_jPci01od_lqa_s0', '', null, '', '0', '1', '\\ud83c\\udf19', '0', '', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/p4aiaiciawK9EmjTHvKwZKibjNmN8l0rxHqmqVsN0RICjMp3S3Fw9xE76NElJpDpU54VQ2gIN8Zpg3jLicw9WVY6ogA/132', '1537336642', '2018-09-19 13:57:22', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 13:57:22');
INSERT INTO `wechat_fans` VALUES ('16', 'wxfabb6142860596f0', '', 'opg9D1tSaxu4i6vMEDG07uUDe2s4', '', null, '', '0', '1', '李莹莹', '2', '中国', '天津', '和平', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIzIqda1e7kPRyfW6ffytNxgmQiawXyhdYNSItCduvlWEibVzv0q1nTfhsh733Acnf2w7jWBEKJWicqA/132', '1537343174', '2018-09-19 15:46:14', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 15:46:14');
INSERT INTO `wechat_fans` VALUES ('17', 'wxfabb6142860596f0', '', 'opg9D1o0L3LNQf9LV9Z5rkfCZ6gE', '', null, '', '0', '1', '吕坤', '1', '中国', '上海', '浦东新区', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/yiaiatUAVRAR2hLcMjtcjlcvPWFzYW6ok4o8NLAZiasbeRpicb7gacolD3IO1d7DbkFUT7zgXMiajsmevsY4evReYXA/132', '1537350208', '2018-09-19 17:43:28', '', '0', '', '', 'ADD_SCENE_OTHERS', '0', '', '2018-09-19 17:43:28');
INSERT INTO `wechat_fans` VALUES ('18', 'wxfabb6142860596f0', '', 'opg9D1soDeHg-IVHXOdRureAp2W4', '', null, '', '0', '1', '橙暖不冬', '1', '中国', '山东', '济南', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKRx58W5tJck4Fn2sWwrV0A57K8X4MUib07wJmmMicCrIYWyrhmkXadw4PkUp4gCWvArRzn7yswS8UA/132', '1537350649', '2018-09-19 17:50:49', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-19 17:50:49');
INSERT INTO `wechat_fans` VALUES ('19', 'wxfabb6142860596f0', '', 'opg9D1itdL6BU19CAEMjPpm_7ObY', '', null, '', '0', '1', '超级张天宇', '1', '德国', '柏林', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqiaMzLBn0wU7VmnCM1h3cPG3YdLz2zjD7R7ibfp65aHLN5TBAHVTRib0icumyynl4vYcKdZ6B8ibbLcew/132', '1537406034', '2018-09-20 09:13:54', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 09:13:56');
INSERT INTO `wechat_fans` VALUES ('20', 'wxfabb6142860596f0', '', 'opg9D1ja0h28N8iXUxHyGbW64bA0', '', null, '', '0', '1', '大笑笑\\ud83d\\udc2f', '2', '中国', '天津', '南开', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJaAibvRwiaO19wKl538dPic3hTp85mpzvBfVpte95jia2UezQib6AFcWhrEWc8Y3psGmvomSHnAicogyuA/132', '1537408411', '2018-09-20 09:53:31', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 09:53:32');
INSERT INTO `wechat_fans` VALUES ('21', 'wxfabb6142860596f0', '', 'opg9D1rsrkjIkGcLjz2b1hCpK91U', '', null, '', '0', '1', 'Song', '1', '中国', '安徽', '合肥', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83eq3NOeibUkRNLISSHtkPXaXYZzeAJQalDPAE9zlua0GNKVxOzgjsddc3CvoOxb2pXyPSibkIU7x66Ng/132', '1537423330', '2018-09-20 14:02:10', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 14:02:11');
INSERT INTO `wechat_fans` VALUES ('22', 'wxfabb6142860596f0', '', 'opg9D1us2jFbRkk__r6MHKEQVUnY', '', null, '', '0', '1', 'Allen', '1', '中国', '安徽', '铜陵', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKnILSXam1GxMNm2Wk9m0oxH4EibHoFeII5LOGTUa9Rd2Vs3HArwl2qeTYPOz6SINray2rEKqO4WhA/132', '1537424023', '2018-09-20 14:13:43', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 14:13:43');
INSERT INTO `wechat_fans` VALUES ('23', 'wxfabb6142860596f0', '', 'opg9D1mSY6uovDv3Mlj_E_73AtFg', '', null, '', '0', '1', 'Leo', '1', '中国', '安徽', '合肥', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIehfRMBzibXeGSvYNedLf845nVjLueB0kJBq06vsiaRV1TMwoVMh7UMRQkewUtjdc488SJ7FYLYwuQ/132', '1537424119', '2018-09-20 14:15:19', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 14:15:20');
INSERT INTO `wechat_fans` VALUES ('24', 'wxfabb6142860596f0', '', 'opg9D1kEESsvfnYCush3Y0znYop0', '', null, '', '0', '1', 'Steven、', '2', 'KR', 'Seoul', 'Seoul', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/WUtFj16INxO18cQbZ8MaokE7ibfD6IRGpgfibt9lQticRCdGJwrhuMdjiczkXdMOXS06iaQjWpxhicicgRk5O18xPMAHg/132', '1537424217', '2018-09-20 14:16:57', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 14:16:57');
INSERT INTO `wechat_fans` VALUES ('25', 'wxfabb6142860596f0', '', 'opg9D1h8L7wJ8E5QegXDjj3BpgGI', '', null, '', '0', '0', 'Tommy17719495428', '1', '南乔治亚岛和南桑德韦奇岛', '', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJM9pLb3nLta3TanoqtI6ibosibyDzIwjZicZtn8PyDGjh5WywupoSsJso1P8yDm464bdxbykzkFAzQw/132', '1537424467', '2018-09-20 14:21:07', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 14:21:08');
INSERT INTO `wechat_fans` VALUES ('26', 'wxfabb6142860596f0', '', 'opg9D1svpquMtb1-vOSZan-RRXbE', '', null, '', '0', '1', '苏瑾诺', '2', '法国', '阿尔勒', '', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/88DtYRuOEBkSW0PASpPTWlXA6gC1QMNyYZQn0m187jicbkKZFEoPKhNlzSm4epXFU2gq7ticblsLlcPgyfLoibxwg/132', '1537440362', '2018-09-20 18:46:02', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 18:46:04');
INSERT INTO `wechat_fans` VALUES ('27', 'wxfabb6142860596f0', '', 'opg9D1kkq6S109RM__M7mNCfrexc', '', null, '', '0', '1', 'iso', '1', '中国', '香港', '九龙城区', 'zh_CN', 'http://thirdwx.qlogo.cn/mmopen/vi_32/J2loTTJYhe0Qcw1Fz5g48icnTCXXZLhfRDfFWNkKibWJOVq8dcm9picGcc2vfIxQKabLnicnhdE2BURcB8iceicqciaXA/132', '1537452352', '2018-09-20 22:05:52', '', '0', '', '', 'ADD_SCENE_QR_CODE', '0', '', '2018-09-20 22:05:54');

-- ----------------------------
-- Table structure for wechat_fans_tags
-- ----------------------------
DROP TABLE IF EXISTS `wechat_fans_tags`;
CREATE TABLE `wechat_fans_tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签ID',
  `appid` char(50) DEFAULT NULL COMMENT '公众号APPID',
  `name` varchar(35) DEFAULT NULL COMMENT '标签名称',
  `count` int(11) unsigned DEFAULT NULL COMMENT '总数',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建日期',
  KEY `index_wechat_fans_tags_id` (`id`) USING BTREE,
  KEY `index_wechat_fans_tags_appid` (`appid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信会员标签';

-- ----------------------------
-- Records of wechat_fans_tags
-- ----------------------------

-- ----------------------------
-- Table structure for wechat_keys
-- ----------------------------
DROP TABLE IF EXISTS `wechat_keys`;
CREATE TABLE `wechat_keys` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `appid` char(100) DEFAULT '' COMMENT '公众号APPID',
  `type` varchar(20) DEFAULT '' COMMENT '类型，text 文件消息，image 图片消息，news 图文消息',
  `keys` varchar(100) DEFAULT NULL COMMENT '关键字',
  `content` text COMMENT '文本内容',
  `image_url` varchar(255) DEFAULT '' COMMENT '图片链接',
  `voice_url` varchar(255) DEFAULT '' COMMENT '语音链接',
  `music_title` varchar(100) DEFAULT '' COMMENT '音乐标题',
  `music_url` varchar(255) DEFAULT '' COMMENT '音乐链接',
  `music_image` varchar(255) DEFAULT '' COMMENT '音乐缩略图链接',
  `music_desc` varchar(255) DEFAULT '' COMMENT '音乐描述',
  `video_title` varchar(100) DEFAULT '' COMMENT '视频标题',
  `video_url` varchar(255) DEFAULT '' COMMENT '视频URL',
  `video_desc` varchar(255) DEFAULT '' COMMENT '视频描述',
  `news_id` bigint(20) unsigned DEFAULT NULL COMMENT '图文ID',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '排序字段',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '0 禁用，1 启用',
  `create_by` bigint(20) unsigned DEFAULT NULL COMMENT '创建人',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_wechat_keys_appid` (`appid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='微信关键字';

-- ----------------------------
-- Records of wechat_keys
-- ----------------------------
INSERT INTO `wechat_keys` VALUES ('1', '', 'text', 'subscribe', '呵呵', 'http://plugs.ctolog.com/theme/default/img/image.png', '', '音乐标题', '', 'http://plugs.ctolog.com/theme/default/img/image.png', '音乐描述', '视频标题', '', '视频描述', '0', '0', '1', null, '2018-09-12 14:21:34');

-- ----------------------------
-- Table structure for wechat_menu
-- ----------------------------
DROP TABLE IF EXISTS `wechat_menu`;
CREATE TABLE `wechat_menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `index` bigint(20) DEFAULT NULL,
  `pindex` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `type` varchar(24) NOT NULL DEFAULT '' COMMENT '菜单类型 null主菜单 link链接 keys关键字',
  `name` varchar(256) NOT NULL DEFAULT '' COMMENT '菜单名称',
  `content` text NOT NULL COMMENT '文字内容',
  `sort` bigint(20) unsigned DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态(0禁用1启用)',
  `create_by` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '创建人',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_wechat_menu_pindex` (`pindex`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='微信菜单配置';

-- ----------------------------
-- Records of wechat_menu
-- ----------------------------
INSERT INTO `wechat_menu` VALUES ('12', '1', '0', 'view', '中国新歌声', 'http://tou.dongyaods.com/home', '0', '1', '0', '2018-09-26 21:02:28');

-- ----------------------------
-- Table structure for wechat_news
-- ----------------------------
DROP TABLE IF EXISTS `wechat_news`;
CREATE TABLE `wechat_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` varchar(100) DEFAULT '' COMMENT '永久素材MediaID',
  `local_url` varchar(300) DEFAULT '' COMMENT '永久素材显示URL',
  `article_id` varchar(60) DEFAULT '' COMMENT '关联图文ID，用，号做分割',
  `is_deleted` tinyint(1) unsigned DEFAULT '0' COMMENT '是否删除',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `create_by` bigint(20) DEFAULT NULL COMMENT '创建人',
  PRIMARY KEY (`id`),
  KEY `index_wechat_news_artcle_id` (`article_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信图文表';

-- ----------------------------
-- Records of wechat_news
-- ----------------------------

-- ----------------------------
-- Table structure for wechat_news_article
-- ----------------------------
DROP TABLE IF EXISTS `wechat_news_article`;
CREATE TABLE `wechat_news_article` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' COMMENT '素材标题',
  `local_url` varchar(300) DEFAULT '' COMMENT '永久素材显示URL',
  `show_cover_pic` tinyint(4) unsigned DEFAULT '0' COMMENT '是否显示封面 0不显示，1 显示',
  `author` varchar(20) DEFAULT '' COMMENT '作者',
  `digest` varchar(300) DEFAULT '' COMMENT '摘要内容',
  `content` longtext COMMENT '图文内容',
  `content_source_url` varchar(200) DEFAULT '' COMMENT '图文消息原文地址',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `create_by` bigint(20) DEFAULT NULL COMMENT '创建人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信素材表';

-- ----------------------------
-- Records of wechat_news_article
-- ----------------------------

-- ----------------------------
-- Table structure for wechat_news_image
-- ----------------------------
DROP TABLE IF EXISTS `wechat_news_image`;
CREATE TABLE `wechat_news_image` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `md5` varchar(32) DEFAULT '' COMMENT '文件md5',
  `local_url` varchar(300) DEFAULT '' COMMENT '本地文件链接',
  `media_url` varchar(300) DEFAULT '' COMMENT '远程图片链接',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `index_wechat_news_image_md5` (`md5`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信服务器图片';

-- ----------------------------
-- Records of wechat_news_image
-- ----------------------------

-- ----------------------------
-- Table structure for wechat_news_media
-- ----------------------------
DROP TABLE IF EXISTS `wechat_news_media`;
CREATE TABLE `wechat_news_media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `appid` varchar(100) DEFAULT '' COMMENT '公众号ID',
  `md5` varchar(32) DEFAULT '' COMMENT '文件md5',
  `type` varchar(20) DEFAULT '' COMMENT '媒体类型',
  `media_id` varchar(100) DEFAULT '' COMMENT '永久素材MediaID',
  `local_url` varchar(300) DEFAULT '' COMMENT '本地文件链接',
  `media_url` varchar(300) DEFAULT '' COMMENT '远程图片链接',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信素材表';

-- ----------------------------
-- Records of wechat_news_media
-- ----------------------------
