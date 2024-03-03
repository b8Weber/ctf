DROP DATABASE IF EXISTS `ctf`;
CREATE DATABASE `ctf` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use ctf;
-- ----------------------------
-- Table structure for flag
-- ----------------------------
DROP TABLE IF EXISTS `flag`;
CREATE TABLE `flag`  (
  `flag1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `flag2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `flag3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `flag4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of flag
-- ----------------------------
INSERT INTO `flag` VALUES ('Husectf{bN008_i3_S0_Vu1n3rab13}', 'Husectf{SQL_fake_flag_are_you_sure?}', 'Husectf{h0joiiiij7y6-hjkl-i8hj-yt76-9io909hy}', 'Husectf{SQL_1s_s0_funny!!!}');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'f0161ed9c90c17f9daa665449164bcc0');
INSERT INTO `user` VALUES (2, 'root', '8562ae3bef9bc9fb0a3c5fa8b2996cf0');
INSERT INTO `user` VALUES (3, 'flag', 'flag{this_F0ke_flag!!!}');
INSERT INTO `user` VALUES (4, 'bN00b', 'b304c06f34fec4d3f7f5267517e42ab7');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salary` int(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '鲍晴天', 'qingtian@huse.com', 3000);
INSERT INTO `users` VALUES (2, '刘帅', 'liushuai@huse.com', 4500);
INSERT INTO `users` VALUES (3, '戈帅', 'geshuai@huse.com', 2700);
INSERT INTO `users` VALUES (4, '火火', 'huohuo@huse.com', 10000);
INSERT INTO `users` VALUES (5, '强哥', 'qiangge@@huse.com', 6000);

SET FOREIGN_KEY_CHECKS = 1;
