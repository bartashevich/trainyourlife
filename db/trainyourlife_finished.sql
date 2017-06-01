/*
Navicat MySQL Data Transfer

Source Server         : ihc
Source Server Version : 50549
Source Host           : 138.68.190.160:3306
Source Database       : trainyourlife

Target Server Type    : MYSQL
Target Server Version : 50549
File Encoding         : 65001

Date: 2017-06-01 11:45:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for exercise_group
-- ----------------------------
DROP TABLE IF EXISTS `exercise_group`;
CREATE TABLE `exercise_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exercise_group
-- ----------------------------
INSERT INTO `exercise_group` VALUES ('1', 'Chest', '/img/chest-workout.jpg');
INSERT INTO `exercise_group` VALUES ('2', 'Legs', '/img/leg-workout.jpg');
INSERT INTO `exercise_group` VALUES ('3', 'Abs', '/img/abs-workout.jpg');
INSERT INTO `exercise_group` VALUES ('4', 'Butt', '/img/butt-workout.jpg');
INSERT INTO `exercise_group` VALUES ('5', 'Arm', '/img/arm-workout.jpg');
INSERT INTO `exercise_group` VALUES ('6', 'Back', '/img/back-workout.jpg');

-- ----------------------------
-- Table structure for exercise_history
-- ----------------------------
DROP TABLE IF EXISTS `exercise_history`;
CREATE TABLE `exercise_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `quanty` int(11) NOT NULL,
  `unit` char(3) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exercise_history
-- ----------------------------
INSERT INTO `exercise_history` VALUES ('2', '28', 'Chest Press', '20', 'rep', '2017-05-28 13:33:16');
INSERT INTO `exercise_history` VALUES ('3', '28', 'Chest Press', '34', 'rep', '2017-05-28 13:41:31');
INSERT INTO `exercise_history` VALUES ('4', '28', 'Chest Press', '20', 'rep', '2017-05-28 13:44:02');
INSERT INTO `exercise_history` VALUES ('5', '28', 'RUN', '60', 'min', '2017-05-28 13:45:13');
INSERT INTO `exercise_history` VALUES ('6', '29', 'Bike ride', '69', 'min', '2017-05-28 13:50:18');
INSERT INTO `exercise_history` VALUES ('7', '28', 'Chest Press', '15', 'rep', '2017-05-28 13:58:16');
INSERT INTO `exercise_history` VALUES ('8', '28', 'Chest Press', '16', 'min', '2017-05-28 13:58:32');
INSERT INTO `exercise_history` VALUES ('9', '28', 'Legs raises', '12', 'rep', '2017-05-28 19:40:16');
INSERT INTO `exercise_history` VALUES ('10', '28', 'Legs raises', '14', 'rep', '2017-05-28 19:40:26');
INSERT INTO `exercise_history` VALUES ('11', '28', 'RUN', '23', 'min', '2017-05-28 19:59:00');
INSERT INTO `exercise_history` VALUES ('12', '28', 'RUN', '23', 'min', '2017-05-29 05:20:01');
INSERT INTO `exercise_history` VALUES ('13', '28', 'Chest Press', '20', 'min', '2017-05-29 05:27:55');
INSERT INTO `exercise_history` VALUES ('14', '28', 'Chest Press', '29', 'rep', '2017-05-29 05:28:17');
INSERT INTO `exercise_history` VALUES ('15', '30', 'Chest Press', '10', 'rep', '2017-05-29 19:15:52');
INSERT INTO `exercise_history` VALUES ('16', '29', 'Bike ride', '25', 'min', '2017-05-30 19:00:19');
INSERT INTO `exercise_history` VALUES ('17', '29', 'Bike ride', '25', 'min', '2017-05-30 19:01:20');
INSERT INTO `exercise_history` VALUES ('18', '33', 'Chest Press', '12', 'rep', '2017-05-30 19:10:04');
INSERT INTO `exercise_history` VALUES ('19', '33', 'Running', '20', 'min', '2017-05-30 19:10:23');
INSERT INTO `exercise_history` VALUES ('20', '33', 'Running', '25', 'min', '2017-05-30 19:16:32');
INSERT INTO `exercise_history` VALUES ('21', '34', 'Running', '19', 'min', '2017-05-31 04:51:22');

-- ----------------------------
-- Table structure for exercise_list
-- ----------------------------
DROP TABLE IF EXISTS `exercise_list`;
CREATE TABLE `exercise_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_group_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exercise_list
-- ----------------------------
INSERT INTO `exercise_list` VALUES ('1', '1', 'Chest Press', 'rep');
INSERT INTO `exercise_list` VALUES ('2', '2', 'Legs raises', 'rep');

-- ----------------------------
-- Table structure for food_list
-- ----------------------------
DROP TABLE IF EXISTS `food_list`;
CREATE TABLE `food_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `protein` double(11,2) DEFAULT NULL,
  `carbs` double(11,2) DEFAULT NULL,
  `fat` double(11,2) DEFAULT NULL,
  `calories` double(11,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of food_list
-- ----------------------------
INSERT INTO `food_list` VALUES ('15', 'Egg Whites', 'unit', '13.00', '1.10', '11.00', '155.00');
INSERT INTO `food_list` VALUES ('16', 'Greek Yogurt', 'g', '10.00', '3.60', '0.40', '59.00');
INSERT INTO `food_list` VALUES ('17', 'Oatmeal', 'g', '2.40', '12.00', '1.40', '68.00');

-- ----------------------------
-- Table structure for login_history
-- ----------------------------
DROP TABLE IF EXISTS `login_history`;
CREATE TABLE `login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login_history
-- ----------------------------
INSERT INTO `login_history` VALUES ('3', '24', 'login', '2017-05-21 06:56:28');
INSERT INTO `login_history` VALUES ('4', '26', 'register', '2017-05-21 07:10:01');
INSERT INTO `login_history` VALUES ('5', '27', 'register', '2017-05-21 07:38:41');
INSERT INTO `login_history` VALUES ('6', '28', 'register', '2017-05-23 04:55:03');
INSERT INTO `login_history` VALUES ('7', '28', 'login', '2017-05-23 04:55:13');
INSERT INTO `login_history` VALUES ('8', '28', 'login', '2017-05-23 05:47:26');
INSERT INTO `login_history` VALUES ('9', '28', 'login', '2017-05-23 05:48:15');
INSERT INTO `login_history` VALUES ('10', '28', 'login', '2017-05-23 05:48:23');
INSERT INTO `login_history` VALUES ('11', '28', 'login', '2017-05-23 05:48:48');
INSERT INTO `login_history` VALUES ('12', '28', 'login', '2017-05-23 05:48:58');
INSERT INTO `login_history` VALUES ('13', '28', 'login', '2017-05-23 05:49:20');
INSERT INTO `login_history` VALUES ('14', '28', 'login', '2017-05-23 05:49:27');
INSERT INTO `login_history` VALUES ('15', '28', 'login', '2017-05-23 07:45:01');
INSERT INTO `login_history` VALUES ('16', '28', 'login', '2017-05-23 07:45:16');
INSERT INTO `login_history` VALUES ('17', '28', 'login', '2017-05-24 08:18:01');
INSERT INTO `login_history` VALUES ('18', '28', 'login', '2017-05-24 08:18:07');
INSERT INTO `login_history` VALUES ('19', '28', 'login', '2017-05-24 08:18:39');
INSERT INTO `login_history` VALUES ('20', '28', 'login', '2017-05-24 09:25:30');
INSERT INTO `login_history` VALUES ('21', '28', 'login', '2017-05-24 09:52:10');
INSERT INTO `login_history` VALUES ('22', '28', 'login', '2017-05-25 04:54:51');
INSERT INTO `login_history` VALUES ('23', '28', 'login', '2017-05-25 10:44:07');
INSERT INTO `login_history` VALUES ('24', '28', 'login', '2017-05-25 10:44:39');
INSERT INTO `login_history` VALUES ('25', '28', 'login', '2017-05-25 10:58:09');
INSERT INTO `login_history` VALUES ('26', '28', 'login', '2017-05-25 10:58:40');
INSERT INTO `login_history` VALUES ('27', '28', 'login', '2017-05-25 10:58:56');
INSERT INTO `login_history` VALUES ('28', '28', 'login', '2017-05-25 11:10:33');
INSERT INTO `login_history` VALUES ('29', '28', 'login', '2017-05-25 11:27:02');
INSERT INTO `login_history` VALUES ('30', '28', 'login', '2017-05-25 20:02:27');
INSERT INTO `login_history` VALUES ('31', '28', 'login', '2017-05-25 20:37:57');
INSERT INTO `login_history` VALUES ('32', '29', 'register', '2017-05-25 21:07:55');
INSERT INTO `login_history` VALUES ('33', '29', 'login', '2017-05-25 21:08:16');
INSERT INTO `login_history` VALUES ('34', '28', 'login', '2017-05-25 21:54:40');
INSERT INTO `login_history` VALUES ('35', '29', 'login', '2017-05-25 22:15:30');
INSERT INTO `login_history` VALUES ('36', '28', 'login', '2017-05-26 15:13:49');
INSERT INTO `login_history` VALUES ('37', '29', 'login', '2017-05-26 15:20:28');
INSERT INTO `login_history` VALUES ('38', '29', 'login', '2017-05-26 16:47:35');
INSERT INTO `login_history` VALUES ('39', '28', 'login', '2017-05-26 17:11:52');
INSERT INTO `login_history` VALUES ('40', '28', 'login', '2017-05-27 04:24:08');
INSERT INTO `login_history` VALUES ('41', '28', 'login', '2017-05-27 05:28:50');
INSERT INTO `login_history` VALUES ('42', '29', 'login', '2017-05-27 05:41:48');
INSERT INTO `login_history` VALUES ('43', '29', 'login', '2017-05-27 05:44:50');
INSERT INTO `login_history` VALUES ('44', '28', 'login', '2017-05-27 12:36:42');
INSERT INTO `login_history` VALUES ('45', '29', 'login', '2017-05-27 12:44:41');
INSERT INTO `login_history` VALUES ('46', '29', 'login', '2017-05-27 13:36:26');
INSERT INTO `login_history` VALUES ('47', '28', 'login', '2017-05-27 16:58:05');
INSERT INTO `login_history` VALUES ('48', '28', 'login', '2017-05-27 17:13:20');
INSERT INTO `login_history` VALUES ('49', '28', 'login', '2017-05-27 17:13:24');
INSERT INTO `login_history` VALUES ('50', '29', 'login', '2017-05-27 17:19:09');
INSERT INTO `login_history` VALUES ('51', '28', 'login', '2017-05-27 19:15:23');
INSERT INTO `login_history` VALUES ('52', '29', 'login', '2017-05-27 19:54:17');
INSERT INTO `login_history` VALUES ('53', '29', 'login', '2017-05-27 19:55:08');
INSERT INTO `login_history` VALUES ('54', '28', 'login', '2017-05-27 21:33:33');
INSERT INTO `login_history` VALUES ('55', '28', 'login', '2017-05-28 06:11:51');
INSERT INTO `login_history` VALUES ('56', '29', 'login', '2017-05-28 08:37:27');
INSERT INTO `login_history` VALUES ('57', '28', 'login', '2017-05-28 09:27:13');
INSERT INTO `login_history` VALUES ('58', '29', 'login', '2017-05-28 10:36:47');
INSERT INTO `login_history` VALUES ('59', '28', 'login', '2017-05-28 11:29:12');
INSERT INTO `login_history` VALUES ('60', '28', 'login', '2017-05-28 13:41:54');
INSERT INTO `login_history` VALUES ('61', '29', 'login', '2017-05-28 13:46:47');
INSERT INTO `login_history` VALUES ('62', '28', 'login', '2017-05-28 16:38:53');
INSERT INTO `login_history` VALUES ('63', '29', 'login', '2017-05-28 17:45:16');
INSERT INTO `login_history` VALUES ('64', '29', 'login', '2017-05-28 19:45:05');
INSERT INTO `login_history` VALUES ('65', '28', 'login', '2017-05-29 04:59:26');
INSERT INTO `login_history` VALUES ('66', '28', 'login', '2017-05-29 05:10:24');
INSERT INTO `login_history` VALUES ('67', '28', 'login', '2017-05-29 05:10:46');
INSERT INTO `login_history` VALUES ('68', '30', 'register', '2017-05-29 07:46:28');
INSERT INTO `login_history` VALUES ('69', '28', 'login', '2017-05-29 10:50:45');
INSERT INTO `login_history` VALUES ('70', '28', 'login', '2017-05-29 11:51:50');
INSERT INTO `login_history` VALUES ('71', '28', 'login', '2017-05-29 14:14:22');
INSERT INTO `login_history` VALUES ('72', '28', 'login', '2017-05-29 17:53:33');
INSERT INTO `login_history` VALUES ('73', '30', 'login', '2017-05-29 19:07:41');
INSERT INTO `login_history` VALUES ('74', '28', 'login', '2017-05-29 19:18:16');
INSERT INTO `login_history` VALUES ('75', '30', 'login', '2017-05-29 19:21:49');
INSERT INTO `login_history` VALUES ('76', '28', 'login', '2017-05-30 07:07:30');
INSERT INTO `login_history` VALUES ('77', '28', 'login', '2017-05-30 09:15:29');
INSERT INTO `login_history` VALUES ('78', '28', 'login', '2017-05-30 09:25:06');
INSERT INTO `login_history` VALUES ('79', '28', 'login', '2017-05-30 09:45:05');
INSERT INTO `login_history` VALUES ('80', '28', 'login', '2017-05-30 17:42:15');
INSERT INTO `login_history` VALUES ('81', '31', 'register', '2017-05-30 17:43:44');
INSERT INTO `login_history` VALUES ('82', '31', 'login', '2017-05-30 17:44:07');
INSERT INTO `login_history` VALUES ('83', '29', 'login', '2017-05-30 17:45:42');
INSERT INTO `login_history` VALUES ('84', '32', 'register', '2017-05-30 17:45:50');
INSERT INTO `login_history` VALUES ('85', '32', 'login', '2017-05-30 17:46:24');
INSERT INTO `login_history` VALUES ('86', '32', 'login', '2017-05-30 17:46:31');
INSERT INTO `login_history` VALUES ('87', '32', 'login', '2017-05-30 17:46:32');
INSERT INTO `login_history` VALUES ('88', '28', 'login', '2017-05-30 18:10:46');
INSERT INTO `login_history` VALUES ('89', '28', 'login', '2017-05-30 18:16:40');
INSERT INTO `login_history` VALUES ('90', '28', 'login', '2017-05-30 18:17:13');
INSERT INTO `login_history` VALUES ('91', '28', 'login', '2017-05-30 18:17:30');
INSERT INTO `login_history` VALUES ('92', '28', 'login', '2017-05-30 18:22:13');
INSERT INTO `login_history` VALUES ('93', '29', 'login', '2017-05-30 18:28:30');
INSERT INTO `login_history` VALUES ('94', '28', 'login', '2017-05-30 18:36:29');
INSERT INTO `login_history` VALUES ('95', '28', 'login', '2017-05-30 18:45:27');
INSERT INTO `login_history` VALUES ('96', '29', 'login', '2017-05-30 18:59:37');
INSERT INTO `login_history` VALUES ('97', '29', 'login', '2017-05-30 18:59:52');
INSERT INTO `login_history` VALUES ('98', '29', 'login', '2017-05-30 19:05:56');
INSERT INTO `login_history` VALUES ('99', '29', 'login', '2017-05-30 19:06:02');
INSERT INTO `login_history` VALUES ('100', '33', 'register', '2017-05-30 19:07:58');
INSERT INTO `login_history` VALUES ('101', '33', 'login', '2017-05-30 19:08:19');
INSERT INTO `login_history` VALUES ('102', '33', 'login', '2017-05-30 19:16:56');
INSERT INTO `login_history` VALUES ('103', '34', 'register', '2017-05-31 04:49:42');
INSERT INTO `login_history` VALUES ('104', '34', 'login', '2017-05-31 04:50:11');
INSERT INTO `login_history` VALUES ('105', '34', 'login', '2017-05-31 04:54:42');
INSERT INTO `login_history` VALUES ('106', '34', 'login', '2017-05-31 04:55:15');
INSERT INTO `login_history` VALUES ('107', '29', 'login', '2017-05-31 09:05:35');

-- ----------------------------
-- Table structure for logo_exercise
-- ----------------------------
DROP TABLE IF EXISTS `logo_exercise`;
CREATE TABLE `logo_exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logo_exercise
-- ----------------------------
INSERT INTO `logo_exercise` VALUES ('1', '/img/exercise-plan1.png');
INSERT INTO `logo_exercise` VALUES ('2', '/img/exercise-plan2.jpg');
INSERT INTO `logo_exercise` VALUES ('3', '/img/exercise-plan3.png');

-- ----------------------------
-- Table structure for logo_meal
-- ----------------------------
DROP TABLE IF EXISTS `logo_meal`;
CREATE TABLE `logo_meal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logo_meal
-- ----------------------------
INSERT INTO `logo_meal` VALUES ('1', '/img/lunch-logo.lpg');
INSERT INTO `logo_meal` VALUES ('2', '/img/meal-logo.jpg');
INSERT INTO `logo_meal` VALUES ('3', '/img/meal-logo2.jpg');
INSERT INTO `logo_meal` VALUES ('4', '/img/meal-logo3.jpg');
INSERT INTO `logo_meal` VALUES ('5', '/img/meal-logo4.png');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `height` int(3) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'awdaw', 'dawd', 'awdaw', 'dawdaw', null, null);
INSERT INTO `users` VALUES ('4', 'dwadaw', 'dawdaw', 'dawd', 'awdawdaw', null, null);
INSERT INTO `users` VALUES ('5', 'awdaw', 'dawdaw', 'daw', 'asd', null, null);
INSERT INTO `users` VALUES ('6', 'awdawd', 'awdawd', 'aw', 'asd', null, null);
INSERT INTO `users` VALUES ('7', 'asdaw', 'dawdaw', 'dawd', 'asd', null, null);
INSERT INTO `users` VALUES ('8', 'adwadaw', 'dawd', 'awd', 'asd', null, null);
INSERT INTO `users` VALUES ('9', 'wadaw', 'dawd', 'awdawd', 'awdawd', null, null);
INSERT INTO `users` VALUES ('10', 'test', 'test', 'test', 'test', null, null);
INSERT INTO `users` VALUES ('11', 'test', 'test', 'test', 'test', null, null);
INSERT INTO `users` VALUES ('12', 'test', 'test', 'test', 'test', null, null);
INSERT INTO `users` VALUES ('13', 'test', 'test', 'test', 'test', null, null);
INSERT INTO `users` VALUES ('14', '2', '2', '2', '2', null, null);
INSERT INTO `users` VALUES ('15', '2', '3', '3', '2', null, null);
INSERT INTO `users` VALUES ('17', '2', 'userna2me', 'xasd@asdx.c', 'olao2d', null, null);
INSERT INTO `users` VALUES ('18', '22', 'usa', 'xasdd@asddx.c', 'olado2d', null, null);
INSERT INTO `users` VALUES ('19', 'denis boy', 'denis_best2', 'bartashevich2@ua.pt', 'asdasd', null, null);
INSERT INTO `users` VALUES ('20', 'Denis Best', 'denisbest', 'bartashevich32@ua.pt', 'asdsdd', null, null);
INSERT INTO `users` VALUES ('21', 'LOL', 'LOL', 'lol@lol.com', 'a8f5f167f44f4964e6c998dee827110c', null, '9f8e6c13ae3b204ecd9662d8e8ad0a83');
INSERT INTO `users` VALUES ('22', 'Denis Best', 'denis_bartas', 'bartashevich@ua.pt', 'a8f5f167f44f4964e6c998dee827110c', null, '440691973c85ff5f0ca1e9f01511065d');
INSERT INTO `users` VALUES ('23', 'My Name\'s Are', 'username', 'username@ua.pt', 'a8f5f167f44f4964e6c998dee827110c', null, null);
INSERT INTO `users` VALUES ('24', 'awdawdaw', 'test_account', 'test@ua.pt', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, 'ad80490216f1608e809bbf8f79785f55');
INSERT INTO `users` VALUES ('25', 'awdawdwad', 'awdawdwad', 'awdaw@awdwa.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, null);
INSERT INTO `users` VALUES ('26', 'dwadaw', 'awdawdawd', 'awdaw@awd.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, null);
INSERT INTO `users` VALUES ('27', 'Denis Bartashevich', 'den.boy', 'den.boy@hotmail.com', 'a8f5f167f44f4964e6c998dee827110c', null, null);
INSERT INTO `users` VALUES ('28', 'Test', 'testtest', 'test@hotmail.com', '05a671c66aefea124cc08b76ea6d30bb', null, null);
INSERT INTO `users` VALUES ('29', 'Hsshs', 'mobile', 'mobeli@has.xom', '8dca24098d7495debf91dc634ab57690', null, 'c1959859f9b9c34a8c9adc82e77f16fe');
INSERT INTO `users` VALUES ('30', 'Leonardo', 'Oliveira', 'leo.rafa96@hotmail.com', '0364c00506e5ef56f6e2bd438cdd83f4', null, null);
INSERT INTO `users` VALUES ('31', 'Hehe', 'Ola', 'dierduarte@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', null, 'ad7baf3a87d7f705bdf3ae63e5d9dbff');
INSERT INTO `users` VALUES ('32', 'David Almeida', 'davidmoreiraalmeida@hotmail.com', 'davidmoreiraalmeida@hotmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, '9327a273a02cf0130aa5cafdfaefe273');
INSERT INTO `users` VALUES ('33', 'Denis', 'denis1', 'den.barta@hotmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', null, null);
INSERT INTO `users` VALUES ('34', 'Denis Bart', 'denis3', 'denis@ua.pt', 'e807f1fcf82d132f9bb018ca6738a19f', null, '1b71e2b460b007bbd26bc659e7f41082');

-- ----------------------------
-- Table structure for users_diet_plan
-- ----------------------------
DROP TABLE IF EXISTS `users_diet_plan`;
CREATE TABLE `users_diet_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `protein` double(11,2) DEFAULT '0.00',
  `carbs` double(11,2) DEFAULT '0.00',
  `fat` double(11,2) DEFAULT '0.00',
  `calories` double(11,2) DEFAULT '0.00',
  `time` time DEFAULT NULL,
  `avatar` varchar(255) DEFAULT '/img/default_meal.jpg',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_diet_plan
-- ----------------------------
INSERT INTO `users_diet_plan` VALUES ('12', 'Break fast', '29', '56.34', '10.22', '1.78', '298.08', '09:00:00', '/img/lunch-logo.lpg', '2017-05-27 20:13:21');
INSERT INTO `users_diet_plan` VALUES ('13', 'Breakfast', '28', '12.30', '4.43', '0.49', '72.57', '08:00:00', '/img/lunch-logo.lpg', '2017-05-27 20:10:46');
INSERT INTO `users_diet_plan` VALUES ('15', 'Lunch', '29', '0.00', '0.00', '0.00', '0.00', '15:39:00', '/img/meal-logo.jpg', '2017-05-28 10:39:44');
INSERT INTO `users_diet_plan` VALUES ('16', 'Lunch', '28', '25.00', '9.00', '1.00', '147.50', '13:20:00', '/img/lunch-logo.lpg', '2017-05-29 05:14:51');
INSERT INTO `users_diet_plan` VALUES ('17', 'Biscuit', '30', '0.00', '0.00', '0.00', '0.00', '22:00:00', '/img/meal-logo4.png', '2017-05-29 19:08:02');
INSERT INTO `users_diet_plan` VALUES ('18', 'Morning', '33', '39.00', '3.30', '33.00', '465.00', '08:00:00', '/img/meal-logo.jpg', '2017-05-30 19:14:30');
INSERT INTO `users_diet_plan` VALUES ('20', 'Lunch', '33', '9.00', '56.00', '70.00', '300.00', '13:00:00', '/img/lunch-logo.lpg', '2017-05-30 19:14:01');
INSERT INTO `users_diet_plan` VALUES ('21', 'Morning', '34', '27.60', '148.00', '26.10', '702.00', '08:00:00', '/img/meal-logo.jpg', '2017-05-31 04:53:01');

-- ----------------------------
-- Table structure for users_diet_plan_food
-- ----------------------------
DROP TABLE IF EXISTS `users_diet_plan_food`;
CREATE TABLE `users_diet_plan_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diet_plan_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quanty` double DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `protein` double(11,2) DEFAULT NULL,
  `carbs` double(11,2) DEFAULT NULL,
  `fat` double(11,2) DEFAULT NULL,
  `calories` double(11,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diet_plan_id` (`diet_plan_id`),
  CONSTRAINT `diet_plan_id` FOREIGN KEY (`diet_plan_id`) REFERENCES `users_diet_plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_diet_plan_food
-- ----------------------------
INSERT INTO `users_diet_plan_food` VALUES ('14', '12', 'Egg Whites', '5', 'unit', '11.00', '0.70', '0.20', '52.00');
INSERT INTO `users_diet_plan_food` VALUES ('15', '13', 'Greek Yogurt', '123', 'g', '10.00', '3.60', '0.40', '59.00');
INSERT INTO `users_diet_plan_food` VALUES ('16', '12', 'Oatmeal', '56', 'g', '2.40', '12.00', '1.40', '68.00');
INSERT INTO `users_diet_plan_food` VALUES ('17', '16', 'Greek Yogurt', '250', 'g', '10.00', '3.60', '0.40', '59.00');
INSERT INTO `users_diet_plan_food` VALUES ('18', '17', 'Greek Yogurt', '0', 'g', '10.00', '3.60', '0.40', '59.00');
INSERT INTO `users_diet_plan_food` VALUES ('19', '17', 'Oatmeal', '0', 'g', '2.40', '12.00', '1.40', '68.00');
INSERT INTO `users_diet_plan_food` VALUES ('21', '18', 'Egg Whites', '3', 'unit', '13.00', '1.10', '11.00', '155.00');
INSERT INTO `users_diet_plan_food` VALUES ('22', '20', 'Banana', '1', 'unit', '9.00', '56.00', '70.00', '300.00');
INSERT INTO `users_diet_plan_food` VALUES ('23', '21', 'Oatmeal', '150', 'g', '2.40', '12.00', '1.40', '68.00');
INSERT INTO `users_diet_plan_food` VALUES ('24', '21', 'Banana', '2', 'unit', '12.00', '65.00', '12.00', '300.00');

-- ----------------------------
-- Table structure for users_exercise_plan
-- ----------------------------
DROP TABLE IF EXISTS `users_exercise_plan`;
CREATE TABLE `users_exercise_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number_of_exercises` int(11) DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_exercise_plan
-- ----------------------------
INSERT INTO `users_exercise_plan` VALUES ('4', '28', 'Plan #2', '2', '/img/exercise-plan2.jpg', '2017-05-28 19:58:22');
INSERT INTO `users_exercise_plan` VALUES ('5', '29', 'Teat', '1', '/img/exercise-plan3.png', '2017-05-28 10:37:47');
INSERT INTO `users_exercise_plan` VALUES ('6', '30', 'I Will survive', '1', '/img/exercise-plan3.png', '2017-05-29 19:14:58');
INSERT INTO `users_exercise_plan` VALUES ('7', '33', 'Morning', '1', '/img/exercise-plan3.png', '2017-05-30 19:10:49');
INSERT INTO `users_exercise_plan` VALUES ('9', '34', 'Morning', '1', '/img/exercise-plan3.png', '2017-05-31 04:51:38');

-- ----------------------------
-- Table structure for users_exercise_plan_activity
-- ----------------------------
DROP TABLE IF EXISTS `users_exercise_plan_activity`;
CREATE TABLE `users_exercise_plan_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_plan_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quanty` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `exercise_plan_id` (`exercise_plan_id`),
  CONSTRAINT `exercise_plan_id` FOREIGN KEY (`exercise_plan_id`) REFERENCES `users_exercise_plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_exercise_plan_activity
-- ----------------------------
INSERT INTO `users_exercise_plan_activity` VALUES ('7', '5', 'Bike ride', '25', 'min', '2017-05-30 19:00:19');
INSERT INTO `users_exercise_plan_activity` VALUES ('9', '4', 'Legs raises', '14', 'rep', '2017-05-28 19:40:26');
INSERT INTO `users_exercise_plan_activity` VALUES ('10', '4', 'Chest Press', '29', 'rep', '2017-05-29 05:28:17');
INSERT INTO `users_exercise_plan_activity` VALUES ('12', '6', 'Chest Press', '10', 'rep', '2017-05-29 19:15:52');
INSERT INTO `users_exercise_plan_activity` VALUES ('14', '7', 'Running', '25', 'min', '2017-05-30 19:16:32');
INSERT INTO `users_exercise_plan_activity` VALUES ('16', '9', 'Running', '19', 'min', '2017-05-31 04:51:22');

-- ----------------------------
-- Table structure for users_weight_history
-- ----------------------------
DROP TABLE IF EXISTS `users_weight_history`;
CREATE TABLE `users_weight_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_weight_history
-- ----------------------------
INSERT INTO `users_weight_history` VALUES ('5', '28', '70', '2017-05-28');
INSERT INTO `users_weight_history` VALUES ('6', '28', '71', '2017-05-27');
INSERT INTO `users_weight_history` VALUES ('7', '28', '80', '2017-05-30');
INSERT INTO `users_weight_history` VALUES ('10', '28', '25', '2017-06-05');
INSERT INTO `users_weight_history` VALUES ('11', '28', '50', '2017-06-14');
INSERT INTO `users_weight_history` VALUES ('12', '30', '23', '2017-05-29');
INSERT INTO `users_weight_history` VALUES ('13', '28', '5', '2017-05-12');
INSERT INTO `users_weight_history` VALUES ('14', '28', '-5', '2017-05-17');
INSERT INTO `users_weight_history` VALUES ('15', '29', '70', '2017-05-30');
INSERT INTO `users_weight_history` VALUES ('16', '29', '40', '2017-05-10');
INSERT INTO `users_weight_history` VALUES ('17', '29', '75', '2017-05-31');
INSERT INTO `users_weight_history` VALUES ('18', '33', '70', '2017-05-30');
INSERT INTO `users_weight_history` VALUES ('19', '33', '73', '2017-05-28');
INSERT INTO `users_weight_history` VALUES ('20', '33', '80', '2017-05-23');
INSERT INTO `users_weight_history` VALUES ('21', '33', '80', '2017-04-26');
INSERT INTO `users_weight_history` VALUES ('22', '34', '70', '2017-05-31');
INSERT INTO `users_weight_history` VALUES ('23', '34', '75', '2017-05-29');
INSERT INTO `users_weight_history` VALUES ('24', '34', '80', '2017-05-25');

-- ----------------------------
-- Procedure structure for add_exercise_to_history
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_exercise_to_history`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_exercise_to_history`(IN plan_id INT(11), IN exercise_name VARCHAR(255), IN quanty DOUBLE, IN unit VARCHAR(255), IN token VARCHAR(255), OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSE 
				UPDATE users_exercise_plan_activity SET quanty = quanty, unit = unit WHERE exercise_plan_id = plan_id AND users_exercise_plan_activity.`name` = exercise_name;
				INSERT INTO `exercise_history` (`exercise_name`,`quanty`,`unit`,`user_id`) VALUES (exercise_name, quanty, unit, user_id);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_exercise_to_plan
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_exercise_to_plan`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_exercise_to_plan`(IN plan_name VARCHAR(255),IN `exercise_name` varchar(255),IN `quanty` double,IN `unit` varchar(255),IN `token` varchar(255),OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	DECLARE plan_id INT(11);

	SET user_id = get_user_by_token(token);
	SET plan_id = get_plan_by_name(plan_name,user_id);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF plan_id IS NULL THEN SET result = 2; # plan doesnt exists
	ELSE 
				INSERT INTO `users_exercise_plan_activity` (`exercise_plan_id`,`name`,`quanty`,`unit`) VALUES (plan_id, exercise_name, quanty, unit);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_food_to_meal
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_food_to_meal`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_food_to_meal`(IN `time` time,IN `food_name` varchar(255),IN `quanty` double,IN `unit` varchar(255),IN `protein` double,IN `carbs` double,IN `fat` double,IN `calories` double,IN `token` varchar(255),OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	DECLARE meal_id INT(11);

	SET user_id = get_user_by_token(token);
	SET meal_id = get_meal_by_time(time,user_id);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF meal_id IS NULL THEN SET result = 2; # meal doesnt exists
	ELSE 
				INSERT INTO `users_diet_plan_food` (`diet_plan_id`,`name`,`quanty`,`unit`,`protein`,`carbs`,`fat`,`calories`) VALUES (meal_id, food_name, quanty, unit, protein, carbs, fat, calories);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_meal
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_meal`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_meal`(IN `meal_name` varchar(255),IN `time` time,IN `avatar` varchar(255),IN `token` varchar(255),OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF get_meal_by_time(time,user_id) THEN SET result = 2; # meal already exists
	ELSE 
				INSERT INTO `users_diet_plan` (`name`,`time`,`avatar`,`user_id`) VALUES (meal_name, time, avatar, user_id);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_plan
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_plan`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_plan`(IN `name` varchar(255),IN `avatar` varchar(255),IN `token` varchar(255),OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF get_plan_by_name(name,user_id) THEN SET result = 2; # meal already exists
	ELSE 
				INSERT INTO `users_exercise_plan` (`name`,`avatar`,`user_id`) VALUES (name, avatar, user_id);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_user
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_user`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_user`(IN full_name varchar(255),IN username varchar(255),IN email varchar(255),IN password varchar(255),OUT result int(1))
BEGIN
	SET result = 0;
	IF username_exists(username) # IF EXISTS USER WITH THAT USERNAME
			THEN SET result = 1;
	ELSEIF email_exists(email) # IF EXISTS USER WITH THAT EMAIL
			THEN SET result = 2;
	ELSEIF password = email # PASSWORD SAME AS EMAIL
			THEN SET result = 3;
	ELSEIF password = username # PASSWORD SAME AS USERNAME
			THEN SET result = 4;
	ELSEIF CHAR_LENGTH(password) < 6	# PASSWORD LENGHT IS LESS THAN 6 CHARS
			THEN SET result = 5;
	ELSEIF email NOT LIKE '_%@_%._%' # EMAIL FORMAT
			THEN SET result = 6;
	ELSEIF CHAR_LENGTH(username) < 3	# USERNAME LENGHT IS LESS THAN 3 CHARS
			THEN SET result = 7;
	ELSE
			INSERT INTO `users` (`full_name`,`username`,`email`,`password`) VALUES (full_name, username, email, password);
	END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for add_weight
-- ----------------------------
DROP PROCEDURE IF EXISTS `add_weight`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `add_weight`(IN weight DOUBLE, IN date date, IN token VARCHAR(255), OUT result INT(1))
BEGIN
	DECLARE user_id INT(11);

	SET user_id = get_user_by_token(token);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF EXISTS (SELECT users_weight_history.id FROM users_weight_history WHERE users_weight_history.date = date AND users_weight_history.user_id = user_id) THEN SET result = 2; #weight for that date exists
	ELSE 
				INSERT INTO `users_weight_history` (`weight`,`date`,`user_id`) VALUES (weight, date, user_id);
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for del_exercise_from_plan
-- ----------------------------
DROP PROCEDURE IF EXISTS `del_exercise_from_plan`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `del_exercise_from_plan`(IN exercise_id INT(11), IN token VARCHAR(255), OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);

	SET user_id = get_user_by_token(token);

	IF EXISTS (SELECT users_exercise_plan_activity.id FROM users_exercise_plan_activity INNER JOIN users_exercise_plan ON users_exercise_plan_activity.exercise_plan_id = users_exercise_plan.id WHERE users_exercise_plan_activity.id = exercise_id AND users_exercise_plan.user_id = user_id) THEN 
				DELETE FROM users_exercise_plan_activity WHERE users_exercise_plan_activity.id = exercise_id;
				SET result = 0;
	ELSE 
				SET result = 1;
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for del_food_from_meal
-- ----------------------------
DROP PROCEDURE IF EXISTS `del_food_from_meal`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `del_food_from_meal`(IN food_id INT(11), IN token VARCHAR(255), OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);

	SET user_id = get_user_by_token(token);

	IF EXISTS (SELECT users_diet_plan_food.id FROM users_diet_plan_food INNER JOIN users_diet_plan ON users_diet_plan_food.diet_plan_id = users_diet_plan.id WHERE users_diet_plan_food.id = food_id AND users_diet_plan.user_id = user_id) THEN 
				DELETE FROM users_diet_plan_food WHERE users_diet_plan_food.id = food_id;
				SET result = 0;
	ELSE 
				SET result = 1;
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for del_meal
-- ----------------------------
DROP PROCEDURE IF EXISTS `del_meal`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `del_meal`(IN time time, IN token VARCHAR(255), OUT result int(1))
BEGIN
	DECLARE user_id INT(11);
	DECLARE meal_id INT(11);

	SET user_id = get_user_by_token(token);
	SET meal_id = get_meal_by_time(time,user_id);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF meal_id IS NULL THEN SET result = 2; # meal doesnt exists
	ELSE 
				DELETE FROM users_diet_plan WHERE id = meal_id;
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for del_plan
-- ----------------------------
DROP PROCEDURE IF EXISTS `del_plan`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `del_plan`(IN plan_name VARCHAR(255), IN token VARCHAR(255), OUT result int(1))
BEGIN
	DECLARE user_id INT(11);
	DECLARE plan_id INT(11);

	SET user_id = get_user_by_token(token);
	SET plan_id = get_plan_by_name(plan_name,user_id);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesn't exists/logged in
	ELSEIF plan_id IS NULL THEN SET result = 2; # plan doesnt exists
	ELSE 
				DELETE FROM users_exercise_plan WHERE id = plan_id;
	END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_current_weight
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_current_weight`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_current_weight`(IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT
		users_weight_history.weight
	FROM
		users_weight_history
	WHERE
		users_weight_history.user_id = user_id
	ORDER BY
		users_weight_history.date DESC
	LIMIT 1;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_daily_nutrition
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_daily_nutrition`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_daily_nutrition`(IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT
		Sum(users_diet_plan.protein) AS protein_sum,
		Sum(users_diet_plan.carbs) AS carbs_sum,
		Sum(users_diet_plan.fat) AS fat_sum,
		Sum(users_diet_plan.calories) AS calories_sum
	FROM
		users_diet_plan
	WHERE
		users_diet_plan.user_id = user_id;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_diet_plans
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_diet_plans`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_diet_plans`(IN token varchar(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT users_diet_plan.id, users_diet_plan.name, users_diet_plan.protein, users_diet_plan.carbs, users_diet_plan.fat, users_diet_plan.calories, users_diet_plan.time, users_diet_plan.avatar FROM users_diet_plan WHERE users_diet_plan.user_id = user_id ORDER BY users_diet_plan.time ASC;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_by_group
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_by_group`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_by_group`(IN exercise_group INT(11))
BEGIN
	IF exercise_group = 0 THEN
		SELECT
			exercise_list.exercise_group_id,
			exercise_list.`name`,
			exercise_list.id,
			exercise_list.unit
		FROM
			exercise_list;
	ELSE
		SELECT
			exercise_list.exercise_group_id,
			exercise_list.`name`,
			exercise_list.id,
			exercise_list.unit
		FROM
			exercise_list
		WHERE
			exercise_list.exercise_group_id = exercise_group;
	END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_by_id
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_by_id`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_by_id`(IN exercise_id INT(11))
BEGIN
	SELECT
		users_exercise_plan_activity.`name`,
		users_exercise_plan_activity.quanty,
		users_exercise_plan_activity.unit,
		users_exercise_plan_activity.exercise_plan_id
	FROM
		users_exercise_plan_activity
	WHERE
		users_exercise_plan_activity.id = exercise_id;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_from_list_by_id
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_from_list_by_id`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_from_list_by_id`(IN exercise_id INT(11))
BEGIN
	SELECT
		exercise_list.`name`,
		exercise_list.unit,
		exercise_list.exercise_group_id
	FROM
		exercise_list
	WHERE
		exercise_list.id = exercise_id;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_group_list
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_group_list`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_group_list`()
BEGIN
	SELECT
		exercise_group.`name`,
		exercise_group.id,
		exercise_group.avatar
	FROM
		exercise_group
	ORDER BY
		exercise_group.`name`;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_history_by_name
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_history_by_name`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_history_by_name`(IN exercise_name VARCHAR(255), IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT
		exercise_history.id,
		exercise_history.quanty,
		exercise_history.unit,
		exercise_history.`timestamp`,
		exercise_history.exercise_name
	FROM
		exercise_history
	WHERE
		exercise_history.exercise_name = exercise_name AND
		exercise_history.user_id = user_id
	ORDER BY timestamp DESC
	LIMIT 10;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_in_plan
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_in_plan`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_in_plan`(IN plan_id INT(11))
BEGIN

	SELECT users_exercise_plan_activity.id, users_exercise_plan_activity.`name`, users_exercise_plan_activity.quanty, users_exercise_plan_activity.unit FROM users_exercise_plan_activity WHERE users_exercise_plan_activity.exercise_plan_id = plan_id;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_logo
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_logo`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_logo`()
BEGIN
	SELECT logo_exercise.source, logo_exercise.id FROM logo_exercise;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_exercise_plans
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_exercise_plans`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_exercise_plans`(IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT users_exercise_plan.id, users_exercise_plan.`name`, users_exercise_plan.number_of_exercises, users_exercise_plan.avatar FROM users_exercise_plan WHERE users_exercise_plan.user_id = user_id;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_food_by_id
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_food_by_id`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_food_by_id`(IN food_id INT(11))
BEGIN
	SELECT
		food_list.id,
		food_list.`name`,
		food_list.unit,
		food_list.protein,
		food_list.carbs,
		food_list.fat,
		food_list.calories
	FROM
		food_list
	WHERE
		food_list.id = food_id;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_food_in_meal
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_food_in_meal`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_food_in_meal`(IN meal_id int(11))
BEGIN

	SELECT users_diet_plan_food.id, users_diet_plan_food.`name`, users_diet_plan_food.quanty, users_diet_plan_food.unit, users_diet_plan_food.protein, users_diet_plan_food.carbs, users_diet_plan_food.fat, users_diet_plan_food.calories FROM users_diet_plan_food WHERE users_diet_plan_food.diet_plan_id = meal_id;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_food_list
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_food_list`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_food_list`()
BEGIN
	SELECT
		food_list.id,
		food_list.`name`,
		food_list.unit,
		food_list.protein,
		food_list.carbs,
		food_list.fat,
		food_list.calories
	FROM
		food_list;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_meal_logo
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_meal_logo`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_meal_logo`()
BEGIN
	SELECT logo_meal.source, logo_meal.id FROM logo_meal;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_users_exercises
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_users_exercises`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_users_exercises`(IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT DISTINCT
		users_exercise_plan_activity.`name`
	FROM
		users_exercise_plan_activity
	INNER JOIN users_exercise_plan ON users_exercise_plan_activity.exercise_plan_id = users_exercise_plan.id
	WHERE
		users_exercise_plan.user_id = user_id;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_users_weight
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_users_weight`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_users_weight`(IN token VARCHAR(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);
	
	SELECT
		users_weight_history.weight,
		users_weight_history.date
	FROM
		users_weight_history
	WHERE
		users_weight_history.user_id = user_id
	ORDER BY date DESC;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_weight_statistics_daily
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_weight_statistics_daily`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_weight_statistics_daily`(IN token VARCHAR(255), IN def_year INT(4), IN def_month INT(2))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT
		weight,
		DAY(`date`) as day
	FROM
		users_weight_history
	WHERE
		users_weight_history.user_id = user_id AND YEAR(`date`) = def_year AND MONTH(`date`) = def_month
	GROUP BY 
		YEAR(`date`), MONTH(`date`), DAY(`date`);
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for get_weight_statistics_monthly
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_weight_statistics_monthly`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `get_weight_statistics_monthly`(IN token VARCHAR(255), IN def_year INT(4))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SELECT
		min(weight) as min_weight,
		max(weight) as max_weight,
		avg(weight) as avg_weight,
		MONTH(`date`) as month
	FROM
		users_weight_history
	WHERE
		users_weight_history.user_id = user_id AND YEAR(`date`) = def_year
	GROUP BY 
		YEAR(`date`), MONTH(`date`);
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for login_user
-- ----------------------------
DROP PROCEDURE IF EXISTS `login_user`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `login_user`(IN login varchar(255),IN password varchar(255),IN token varchar(255),OUT result int(1))
BEGIN
	SET result = 1;
	IF login LIKE '_%@_%._%' # EMAIL FORMAT
			THEN
				IF email_exists(login)
					THEN 
						IF EXISTS (SELECT users.id FROM users WHERE users.password = password AND users.email = login)
							THEN SET result = 0; UPDATE users SET users.token = token WHERE users.email = login;
						END IF;
				END IF;
	ELSEIF username_exists(login) # IF EXISTS USER WITH THAT USERNAME
			THEN 
				IF EXISTS (SELECT users.id FROM users WHERE users.password = password AND users.username = login)
					THEN SET result = 0; UPDATE users SET users.token = token WHERE users.username = login;
				END IF;
	END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for logout_user
-- ----------------------------
DROP PROCEDURE IF EXISTS `logout_user`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `logout_user`(IN token varchar(255),OUT result int(1))
BEGIN
	DECLARE id INT(11);
	SET id = get_user_by_token(token);

	SET result = 1;

	IF id
		THEN 
			UPDATE users SET token = NULL WHERE users.id = id; SET result = 0;
	END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for update_meal_nutrition
-- ----------------------------
DROP PROCEDURE IF EXISTS `update_meal_nutrition`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` PROCEDURE `update_meal_nutrition`(IN meal_id INT(11))
BEGIN
	DECLARE protein_sum DOUBLE;
	DECLARE carbs_sum DOUBLE;
	DECLARE fat_sum DOUBLE;
	DECLARE calories_sum DOUBLE;

	SELECT 
		SUM(if(unit = 'g', (quanty*(protein/100)), (quanty*protein))) as protein_sum,
		SUM(if(unit = 'g', (quanty*(carbs/100)), (quanty*carbs))) as carbs_sum,
		SUM(if(unit = 'g', (quanty*(fat/100)), (quanty*fat))) as fat_sum,
		SUM(if(unit = 'g', (quanty*(calories/100)), (quanty*calories))) as calories_sum
	INTO
		protein_sum,
		carbs_sum,
		fat_sum,
		calories_sum
	FROM
		users_diet_plan_food
	WHERE
		users_diet_plan_food.diet_plan_id = meal_id;

	IF protein_sum IS NULL THEN SET protein_sum = 0;END IF;
	IF carbs_sum IS NULL THEN SET carbs_sum = 0;END IF;
	IF fat_sum IS NULL THEN SET fat_sum = 0;END IF;
	IF calories_sum IS NULL THEN SET calories_sum = 0;END IF;



	UPDATE users_diet_plan
		SET 
			users_diet_plan.protein = protein_sum,
			users_diet_plan.carbs = carbs_sum,
			users_diet_plan.fat = fat_sum,
			users_diet_plan.calories = calories_sum
	WHERE users_diet_plan.id = meal_id;

END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for email_exists
-- ----------------------------
DROP FUNCTION IF EXISTS `email_exists`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` FUNCTION `email_exists`(`email` varchar(255)) RETURNS int(1)
BEGIN
	DECLARE s INT(1);

	IF EXISTS (SELECT * FROM users WHERE users.email = email) THEN SET s = 1;
	ELSE SET S = 0;

	END IF;

	RETURN s;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for get_meal_by_time
-- ----------------------------
DROP FUNCTION IF EXISTS `get_meal_by_time`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` FUNCTION `get_meal_by_time`(`meal_time` time, `user_id` int(11)) RETURNS int(11)
BEGIN
	DECLARE Value INT;

	SELECT users_diet_plan.id INTO Value
	FROM users_diet_plan 
	WHERE users_diet_plan.time = meal_time AND users_diet_plan.user_id = user_id;

	RETURN Value;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for get_plan_by_name
-- ----------------------------
DROP FUNCTION IF EXISTS `get_plan_by_name`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` FUNCTION `get_plan_by_name`(name VARCHAR(255), user_id INT(11)) RETURNS int(11)
BEGIN
	DECLARE Value INT;

	SELECT users_exercise_plan.id INTO Value
	FROM users_exercise_plan 
	WHERE users_exercise_plan.name = name AND users_exercise_plan.user_id = user_id;

	RETURN Value;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for get_user_by_token
-- ----------------------------
DROP FUNCTION IF EXISTS `get_user_by_token`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` FUNCTION `get_user_by_token`(`token` varchar(255)) RETURNS int(11)
BEGIN
	DECLARE Value INT;

	SELECT
			users.id INTO Value
	FROM
			users
	WHERE
			users.token = token;

	RETURN Value;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for username_exists
-- ----------------------------
DROP FUNCTION IF EXISTS `username_exists`;
DELIMITER ;;
CREATE DEFINER=`php`@`%` FUNCTION `username_exists`(`username` varchar(255)) RETURNS int(1)
BEGIN
	DECLARE s INT(1);

	IF EXISTS (SELECT * FROM users WHERE users.username = username) THEN SET s = 1;
	ELSE SET S = 0;

	END IF;

	RETURN s;
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_on_register`;
DELIMITER ;;
CREATE TRIGGER `update_on_register` AFTER INSERT ON `users` FOR EACH ROW BEGIN
   INSERT INTO login_history (user_id,action) VALUES (NEW.id,'register');
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_on_login`;
DELIMITER ;;
CREATE TRIGGER `update_on_login` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
   INSERT INTO login_history (user_id,action) VALUES (NEW.id,'login');
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_nutrition_on_insert`;
DELIMITER ;;
CREATE TRIGGER `update_nutrition_on_insert` AFTER INSERT ON `users_diet_plan_food` FOR EACH ROW BEGIN
   CALL update_meal_nutrition(NEW.diet_plan_id);
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_nutrition_on_update`;
DELIMITER ;;
CREATE TRIGGER `update_nutrition_on_update` AFTER UPDATE ON `users_diet_plan_food` FOR EACH ROW BEGIN
   CALL update_meal_nutrition(NEW.diet_plan_id);
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_nutrition_on_delete`;
DELIMITER ;;
CREATE TRIGGER `update_nutrition_on_delete` AFTER DELETE ON `users_diet_plan_food` FOR EACH ROW BEGIN
   CALL update_meal_nutrition(OLD.diet_plan_id);
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_exercise_numero_on_insert`;
DELIMITER ;;
CREATE TRIGGER `update_exercise_numero_on_insert` AFTER INSERT ON `users_exercise_plan_activity` FOR EACH ROW BEGIN
   DECLARE exer_num INT(11);
   
   SELECT count(*) into exer_num FROM users_exercise_plan_activity WHERE exercise_plan_id = NEW.exercise_plan_id;

   UPDATE users_exercise_plan SET number_of_exercises = exer_num WHERE id=NEW.exercise_plan_id;
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_exercise_number_on_update`;
DELIMITER ;;
CREATE TRIGGER `update_exercise_number_on_update` AFTER UPDATE ON `users_exercise_plan_activity` FOR EACH ROW BEGIN
   DECLARE exer_num INT(11);
   
   SELECT count(*) into exer_num FROM users_exercise_plan_activity WHERE exercise_plan_id = NEW.exercise_plan_id;

   UPDATE users_exercise_plan SET number_of_exercises = exer_num WHERE id=NEW.exercise_plan_id;
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `update_exercise_number_on_delete`;
DELIMITER ;;
CREATE TRIGGER `update_exercise_number_on_delete` AFTER DELETE ON `users_exercise_plan_activity` FOR EACH ROW BEGIN
   DECLARE exer_num INT(11);
   
   SELECT count(*) into exer_num FROM users_exercise_plan_activity WHERE exercise_plan_id = OLD.exercise_plan_id;

   UPDATE users_exercise_plan SET number_of_exercises = exer_num WHERE id=OLD.exercise_plan_id;
END
;;
DELIMITER ;
SET FOREIGN_KEY_CHECKS=1;
