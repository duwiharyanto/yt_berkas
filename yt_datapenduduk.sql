/*
 Navicat Premium Data Transfer

 Source Server         : PHPMYADMIN
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : yt_datapenduduk

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 28/03/2020 15:59:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level`  (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level_status` bit(1) NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `level_dashboard` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`level_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES (1, 'Administrator', b'1', '2020-02-16 21:22:59', 'dashboard/dashboard');
INSERT INTO `level` VALUES (2, 'User', b'1', '2020-02-15 08:59:01', 'dashboard/dashboard');
INSERT INTO `level` VALUES (3, 'notulen', b'1', '2020-02-15 08:53:02', 'notulen/index');
INSERT INTO `level` VALUES (11, 'Manajer', b'1', '2020-03-27 21:55:34', 'Dashboard/dashboard');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_iduser` int(11) NULL DEFAULT NULL,
  `log_aksi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `log_level` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 242 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES (1, 1, 'login', '2020-01-02 03:40:03', '1');
INSERT INTO `log` VALUES (2, 1, 'login', '2020-01-02 03:40:04', '1');
INSERT INTO `log` VALUES (3, 34, 'login', '2020-01-02 03:40:04', '1');
INSERT INTO `log` VALUES (7, 1, 'password salah', '2020-01-02 03:40:06', '3');
INSERT INTO `log` VALUES (8, 1, 'password salah', '2020-01-02 03:40:07', '3');
INSERT INTO `log` VALUES (9, 1, 'password salah', '2020-01-02 03:40:07', '3');
INSERT INTO `log` VALUES (12, 35, 'password salah', '2020-01-02 03:40:08', '3');
INSERT INTO `log` VALUES (13, 1, 'login', '2020-01-02 05:34:00', '1');
INSERT INTO `log` VALUES (14, 1, 'logout', '2020-01-02 03:38:55', '3');
INSERT INTO `log` VALUES (15, 1, 'login', '2020-01-02 05:33:59', '1');
INSERT INTO `log` VALUES (16, 1, 'logout', '2020-01-02 05:34:09', '3');
INSERT INTO `log` VALUES (17, 1, 'login', '2020-01-02 05:34:13', '1');
INSERT INTO `log` VALUES (18, 1, 'logout', '2020-01-02 06:07:28', '3');
INSERT INTO `log` VALUES (19, 35, 'login', '2020-01-02 06:07:33', '1');
INSERT INTO `log` VALUES (20, 35, 'logout', '2020-01-02 06:07:39', '3');
INSERT INTO `log` VALUES (21, 4, 'login', '2020-01-02 06:07:42', '1');
INSERT INTO `log` VALUES (22, 4, 'logout', '2020-01-02 06:07:55', '3');
INSERT INTO `log` VALUES (23, 29, 'password salah', '2020-01-02 06:07:58', '3');
INSERT INTO `log` VALUES (24, 29, 'password salah', '2020-01-02 06:08:02', '3');
INSERT INTO `log` VALUES (25, 1, 'login', '2020-01-02 06:08:06', '1');
INSERT INTO `log` VALUES (26, 1, 'logout', '2020-01-02 06:08:25', '3');
INSERT INTO `log` VALUES (27, 29, 'login', '2020-01-02 06:08:28', '1');
INSERT INTO `log` VALUES (28, 1, 'password salah', '2020-01-02 06:12:54', '3');
INSERT INTO `log` VALUES (29, 1, 'login', '2020-01-02 06:13:03', '1');
INSERT INTO `log` VALUES (30, 1, 'login', '2020-01-03 03:06:13', '1');
INSERT INTO `log` VALUES (32, 1, 'login', '2020-01-03 03:45:31', '1');
INSERT INTO `log` VALUES (33, 1, 'logout', '2020-01-03 03:48:28', '3');
INSERT INTO `log` VALUES (34, 1, 'login', '2020-01-03 04:06:01', '1');
INSERT INTO `log` VALUES (35, 1, 'logout', '2020-01-03 04:08:25', '3');
INSERT INTO `log` VALUES (36, 1, 'login', '2020-01-03 04:08:28', '1');
INSERT INTO `log` VALUES (37, 1, 'logout', '2020-01-03 04:08:37', '3');
INSERT INTO `log` VALUES (38, 1, 'login', '2020-01-03 04:08:48', '1');
INSERT INTO `log` VALUES (40, 1, 'login', '2020-01-03 04:10:15', '1');
INSERT INTO `log` VALUES (41, 1, 'logout', '2020-01-03 04:14:44', '3');
INSERT INTO `log` VALUES (42, 1, 'login', '2020-01-03 04:17:12', '1');
INSERT INTO `log` VALUES (43, 1, 'logout', '2020-01-03 04:18:20', '3');
INSERT INTO `log` VALUES (44, 1, 'login', '2020-01-03 06:13:46', '1');
INSERT INTO `log` VALUES (45, 1, 'logout', '2020-01-03 06:16:43', '3');
INSERT INTO `log` VALUES (46, 1, 'login', '2020-01-06 05:44:51', '1');
INSERT INTO `log` VALUES (47, 1, 'logout', '2020-01-06 20:22:39', '3');
INSERT INTO `log` VALUES (48, 1, 'login', '2020-01-06 20:22:45', '1');
INSERT INTO `log` VALUES (49, 1, 'login', '2020-01-07 18:18:02', '1');
INSERT INTO `log` VALUES (50, 1, 'login', '2020-01-09 13:39:02', '1');
INSERT INTO `log` VALUES (51, 1, 'login', '2020-01-10 10:45:11', '1');
INSERT INTO `log` VALUES (52, 1, 'logout', '2020-01-10 10:54:19', '3');
INSERT INTO `log` VALUES (53, 1, 'login', '2020-01-14 10:49:03', '1');
INSERT INTO `log` VALUES (54, 1, 'logout', '2020-01-14 11:05:20', '3');
INSERT INTO `log` VALUES (55, 1, 'login', '2020-01-14 11:09:09', '1');
INSERT INTO `log` VALUES (56, 1, 'logout', '2020-01-14 11:10:13', '3');
INSERT INTO `log` VALUES (57, 1, 'login', '2020-01-14 11:28:23', '1');
INSERT INTO `log` VALUES (58, 1, 'logout', '2020-01-14 11:53:38', '3');
INSERT INTO `log` VALUES (59, 1, 'login', '2020-01-20 13:21:25', '1');
INSERT INTO `log` VALUES (60, 1, 'login', '2020-01-24 10:46:31', '1');
INSERT INTO `log` VALUES (61, 1, 'login', '2020-02-01 09:11:33', '1');
INSERT INTO `log` VALUES (62, 1, 'logout', '2020-02-01 09:36:46', '3');
INSERT INTO `log` VALUES (63, 1, 'login', '2020-02-01 09:36:50', '1');
INSERT INTO `log` VALUES (64, 1, 'logout', '2020-02-01 11:11:06', '3');
INSERT INTO `log` VALUES (65, 1, 'login', '2020-02-01 11:11:16', '1');
INSERT INTO `log` VALUES (66, 1, 'logout', '2020-02-01 11:11:37', '3');
INSERT INTO `log` VALUES (67, 29, 'password salah', '2020-02-01 11:11:40', '3');
INSERT INTO `log` VALUES (68, 29, 'login', '2020-02-01 11:11:44', '1');
INSERT INTO `log` VALUES (69, 1, 'login', '2020-02-05 13:15:29', '1');
INSERT INTO `log` VALUES (70, 1, 'logout', '2020-02-05 13:16:05', '3');
INSERT INTO `log` VALUES (71, 29, 'password salah', '2020-02-05 13:16:08', '3');
INSERT INTO `log` VALUES (72, 29, 'login', '2020-02-05 13:16:12', '1');
INSERT INTO `log` VALUES (73, 1, 'login', '2020-02-06 11:46:40', '1');
INSERT INTO `log` VALUES (74, 1, 'login', '2020-02-06 16:08:37', '1');
INSERT INTO `log` VALUES (75, 1, 'login', '2020-02-07 08:43:09', '1');
INSERT INTO `log` VALUES (76, 1, 'logout', '2020-02-07 10:15:44', '3');
INSERT INTO `log` VALUES (77, 37, 'login', '2020-02-07 10:15:52', '1');
INSERT INTO `log` VALUES (78, 37, 'logout', '2020-02-07 10:33:55', '3');
INSERT INTO `log` VALUES (79, 37, 'login', '2020-02-07 10:34:01', '1');
INSERT INTO `log` VALUES (80, 37, 'logout', '2020-02-07 10:35:37', '3');
INSERT INTO `log` VALUES (81, 37, 'login', '2020-02-07 10:35:42', '1');
INSERT INTO `log` VALUES (82, NULL, 'logout', '2020-02-07 15:55:57', '3');
INSERT INTO `log` VALUES (83, 1, 'login', '2020-02-07 16:28:01', '1');
INSERT INTO `log` VALUES (84, 1, 'logout', '2020-02-07 16:28:07', '3');
INSERT INTO `log` VALUES (85, 37, 'login', '2020-02-07 16:28:13', '1');
INSERT INTO `log` VALUES (86, 37, 'login', '2020-02-10 09:54:57', '1');
INSERT INTO `log` VALUES (87, 37, 'logout', '2020-02-10 10:12:24', '3');
INSERT INTO `log` VALUES (88, 37, 'login', '2020-02-10 10:12:31', '1');
INSERT INTO `log` VALUES (89, 37, 'login', '2020-02-11 10:32:28', '1');
INSERT INTO `log` VALUES (90, 37, 'logout', '2020-02-11 11:44:40', '3');
INSERT INTO `log` VALUES (91, 37, 'login', '2020-02-11 12:58:19', '1');
INSERT INTO `log` VALUES (92, 37, 'logout', '2020-02-11 13:07:18', '3');
INSERT INTO `log` VALUES (93, 1, 'login', '2020-02-11 16:10:34', '1');
INSERT INTO `log` VALUES (94, 1, 'logout', '2020-02-11 16:13:29', '3');
INSERT INTO `log` VALUES (95, 1, 'login', '2020-02-11 16:13:41', '1');
INSERT INTO `log` VALUES (96, 1, 'logout', '2020-02-11 16:15:17', '3');
INSERT INTO `log` VALUES (97, 1, 'login', '2020-02-15 08:22:06', '1');
INSERT INTO `log` VALUES (98, 1, 'logout', '2020-02-15 09:07:30', '3');
INSERT INTO `log` VALUES (99, 37, 'login', '2020-02-15 09:10:27', '1');
INSERT INTO `log` VALUES (100, 37, 'logout', '2020-02-15 09:10:32', '3');
INSERT INTO `log` VALUES (101, 1, 'login', '2020-02-15 09:10:35', '1');
INSERT INTO `log` VALUES (102, 1, 'logout', '2020-02-15 09:19:29', '3');
INSERT INTO `log` VALUES (103, 37, 'login', '2020-02-15 09:19:35', '1');
INSERT INTO `log` VALUES (104, 37, 'logout', '2020-02-15 09:21:37', '3');
INSERT INTO `log` VALUES (105, 1, 'login', '2020-02-15 09:21:40', '1');
INSERT INTO `log` VALUES (106, 1, 'logout', '2020-02-15 09:22:49', '3');
INSERT INTO `log` VALUES (107, 1, 'login', '2020-02-15 09:22:52', '1');
INSERT INTO `log` VALUES (108, 1, 'login', '2020-02-15 10:17:29', '1');
INSERT INTO `log` VALUES (109, 1, 'logout', '2020-02-15 10:24:03', '3');
INSERT INTO `log` VALUES (110, 1, 'login', '2020-02-15 10:24:06', '1');
INSERT INTO `log` VALUES (111, 1, 'logout', '2020-02-15 10:27:17', '3');
INSERT INTO `log` VALUES (112, 1, 'login', '2020-02-15 10:27:20', '1');
INSERT INTO `log` VALUES (113, 1, 'logout', '2020-02-15 10:28:06', '3');
INSERT INTO `log` VALUES (114, 37, 'login', '2020-02-15 10:28:15', '1');
INSERT INTO `log` VALUES (115, 37, 'logout', '2020-02-15 10:28:43', '3');
INSERT INTO `log` VALUES (116, 37, 'login', '2020-02-15 10:28:51', '1');
INSERT INTO `log` VALUES (117, 37, 'logout', '2020-02-15 10:29:27', '3');
INSERT INTO `log` VALUES (118, 1, 'login', '2020-02-15 10:29:30', '1');
INSERT INTO `log` VALUES (119, 1, 'logout', '2020-02-15 10:31:54', '3');
INSERT INTO `log` VALUES (120, 1, 'login', '2020-02-15 10:31:59', '1');
INSERT INTO `log` VALUES (121, 1, 'logout', '2020-02-15 10:33:42', '3');
INSERT INTO `log` VALUES (122, 1, 'login', '2020-02-15 10:33:52', '1');
INSERT INTO `log` VALUES (123, 1, 'logout', '2020-02-15 10:39:27', '3');
INSERT INTO `log` VALUES (124, 36, 'login', '2020-02-15 10:39:35', '1');
INSERT INTO `log` VALUES (125, 36, 'logout', '2020-02-15 10:39:44', '3');
INSERT INTO `log` VALUES (126, 1, 'login', '2020-02-15 10:39:49', '1');
INSERT INTO `log` VALUES (127, 36, 'login', '2020-02-15 11:21:09', '1');
INSERT INTO `log` VALUES (128, 1, 'login', '2020-02-15 12:45:36', '1');
INSERT INTO `log` VALUES (129, 1, 'logout', '2020-02-15 15:13:59', '3');
INSERT INTO `log` VALUES (130, 1, 'login', '2020-02-15 15:39:09', '1');
INSERT INTO `log` VALUES (131, 1, 'logout', '2020-02-15 17:02:04', '3');
INSERT INTO `log` VALUES (132, 1, 'login', '2020-02-15 19:36:05', '1');
INSERT INTO `log` VALUES (133, 1, 'login', '2020-02-16 18:53:35', '1');
INSERT INTO `log` VALUES (134, 1, 'logout', '2020-02-16 21:20:43', '3');
INSERT INTO `log` VALUES (135, 1, 'login', '2020-02-16 21:20:46', '1');
INSERT INTO `log` VALUES (136, 1, 'logout', '2020-02-16 21:21:14', '3');
INSERT INTO `log` VALUES (137, 1, 'login', '2020-02-16 21:21:18', '1');
INSERT INTO `log` VALUES (138, 1, 'logout', '2020-02-16 21:22:10', '3');
INSERT INTO `log` VALUES (139, 1, 'login', '2020-02-16 21:22:14', '1');
INSERT INTO `log` VALUES (140, 1, 'logout', '2020-02-16 21:22:39', '3');
INSERT INTO `log` VALUES (141, 1, 'login', '2020-02-16 21:22:43', '1');
INSERT INTO `log` VALUES (142, 1, 'logout', '2020-02-16 21:23:03', '3');
INSERT INTO `log` VALUES (143, 1, 'login', '2020-02-16 21:23:07', '1');
INSERT INTO `log` VALUES (144, 1, 'login', '2020-02-17 15:42:39', '1');
INSERT INTO `log` VALUES (145, 1, 'login', '2020-02-18 11:41:17', '1');
INSERT INTO `log` VALUES (146, 1, 'login', '2020-02-19 08:35:16', '1');
INSERT INTO `log` VALUES (147, 1, 'login', '2020-02-19 11:02:02', '1');
INSERT INTO `log` VALUES (148, 1, 'login', '2020-02-19 15:37:54', '1');
INSERT INTO `log` VALUES (149, 1, 'logout', '2020-02-19 16:24:59', '3');
INSERT INTO `log` VALUES (150, 1, 'login', '2020-02-19 16:34:19', '1');
INSERT INTO `log` VALUES (151, 1, 'logout', '2020-02-19 17:00:36', '3');
INSERT INTO `log` VALUES (152, 1, 'login', '2020-02-20 08:13:06', '1');
INSERT INTO `log` VALUES (153, 1, 'login', '2020-02-25 13:56:36', '1');
INSERT INTO `log` VALUES (154, 1, 'password salah', '2020-02-26 10:27:11', '3');
INSERT INTO `log` VALUES (155, 1, 'login', '2020-02-26 10:27:15', '1');
INSERT INTO `log` VALUES (156, 1, 'login', '2020-02-27 11:02:42', '1');
INSERT INTO `log` VALUES (157, 1, 'login', '2020-02-27 15:33:44', '1');
INSERT INTO `log` VALUES (158, 1, 'login', '2020-02-29 10:11:49', '1');
INSERT INTO `log` VALUES (159, 1, 'login', '2020-02-29 14:06:33', '1');
INSERT INTO `log` VALUES (160, 1, 'login', '2020-02-29 14:25:14', '1');
INSERT INTO `log` VALUES (161, 1, 'login', '2020-02-29 16:14:54', '1');
INSERT INTO `log` VALUES (162, 1, 'login', '2020-03-02 11:40:30', '1');
INSERT INTO `log` VALUES (163, 1, 'logout', '2020-03-02 11:40:42', '3');
INSERT INTO `log` VALUES (164, 1, 'login', '2020-03-02 11:43:24', '1');
INSERT INTO `log` VALUES (165, 1, 'logout', '2020-03-02 11:43:29', '3');
INSERT INTO `log` VALUES (166, 1, 'login', '2020-03-03 16:03:12', '1');
INSERT INTO `log` VALUES (167, 1, 'login', '2020-03-04 15:49:08', '1');
INSERT INTO `log` VALUES (168, 1, 'logout', '2020-03-04 16:47:26', '3');
INSERT INTO `log` VALUES (169, 1, 'login', '2020-03-05 16:57:42', '1');
INSERT INTO `log` VALUES (170, 1, 'login', '2020-03-09 10:34:08', '1');
INSERT INTO `log` VALUES (171, 1, 'login', '2020-03-09 15:45:42', '1');
INSERT INTO `log` VALUES (172, 1, 'login', '2020-03-10 09:49:51', '1');
INSERT INTO `log` VALUES (173, 1, 'login', '2020-03-10 16:05:27', '1');
INSERT INTO `log` VALUES (174, 1, 'logout', '2020-03-10 16:44:11', '3');
INSERT INTO `log` VALUES (175, 1, 'login', '2020-03-11 07:44:12', '1');
INSERT INTO `log` VALUES (176, 1, 'logout', '2020-03-11 09:29:25', '3');
INSERT INTO `log` VALUES (177, 1, 'login', '2020-03-11 16:09:12', '1');
INSERT INTO `log` VALUES (178, 1, 'login', '2020-03-14 10:42:31', '1');
INSERT INTO `log` VALUES (179, 1, 'login', '2020-03-14 10:44:21', '1');
INSERT INTO `log` VALUES (180, 1, 'login', '2020-03-16 15:00:19', '1');
INSERT INTO `log` VALUES (181, 1, 'login', '2020-03-17 07:56:49', '1');
INSERT INTO `log` VALUES (182, 1, 'logout', '2020-03-17 11:54:37', '3');
INSERT INTO `log` VALUES (183, 1, 'login', '2020-03-17 11:55:35', '1');
INSERT INTO `log` VALUES (184, 1, 'logout', '2020-03-17 11:57:30', '3');
INSERT INTO `log` VALUES (185, 1, 'login', '2020-03-17 12:55:04', '1');
INSERT INTO `log` VALUES (186, 1, 'login', '2020-03-18 11:27:10', '1');
INSERT INTO `log` VALUES (187, 1, 'logout', '2020-03-18 11:31:27', '3');
INSERT INTO `log` VALUES (188, 1, 'login', '2020-03-18 15:36:28', '1');
INSERT INTO `log` VALUES (189, 1, 'logout', '2020-03-18 16:00:51', '3');
INSERT INTO `log` VALUES (190, 1, 'login', '2020-03-18 16:06:25', '1');
INSERT INTO `log` VALUES (191, 1, 'logout', '2020-03-18 16:06:36', '3');
INSERT INTO `log` VALUES (192, 1, 'login', '2020-03-18 16:17:00', '1');
INSERT INTO `log` VALUES (193, 1, 'login', '2020-03-19 08:56:29', '1');
INSERT INTO `log` VALUES (194, 1, 'login', '2020-03-19 11:06:57', '1');
INSERT INTO `log` VALUES (195, 1, 'logout', '2020-03-19 11:48:11', '3');
INSERT INTO `log` VALUES (196, 1, 'login', '2020-03-19 12:49:47', '1');
INSERT INTO `log` VALUES (197, 1, 'login', '2020-03-23 13:50:38', '1');
INSERT INTO `log` VALUES (198, 1, 'logout', '2020-03-23 13:51:08', '3');
INSERT INTO `log` VALUES (199, 1, 'login', '2020-03-23 13:51:12', '1');
INSERT INTO `log` VALUES (200, 1, 'logout', '2020-03-23 14:06:06', '3');
INSERT INTO `log` VALUES (201, 1, 'login', '2020-03-23 14:09:00', '1');
INSERT INTO `log` VALUES (202, 1, 'logout', '2020-03-23 14:09:03', '3');
INSERT INTO `log` VALUES (203, 1, 'login', '2020-03-23 14:09:08', '1');
INSERT INTO `log` VALUES (204, 1, 'logout', '2020-03-23 14:09:18', '3');
INSERT INTO `log` VALUES (205, 1, 'login', '2020-03-23 14:09:35', '1');
INSERT INTO `log` VALUES (206, 1, 'logout', '2020-03-23 14:09:44', '3');
INSERT INTO `log` VALUES (207, 1, 'login', '2020-03-23 14:11:57', '1');
INSERT INTO `log` VALUES (208, 1, 'logout', '2020-03-23 14:12:16', '3');
INSERT INTO `log` VALUES (209, 1, 'login', '2020-03-23 14:15:48', '1');
INSERT INTO `log` VALUES (210, 1, 'logout', '2020-03-23 14:23:01', '3');
INSERT INTO `log` VALUES (211, 1, 'login', '2020-03-23 14:23:05', '1');
INSERT INTO `log` VALUES (212, 1, 'logout', '2020-03-23 14:25:48', '3');
INSERT INTO `log` VALUES (213, 1, 'login', '2020-03-23 14:25:52', '1');
INSERT INTO `log` VALUES (214, 1, 'login', '2020-03-23 20:56:14', '1');
INSERT INTO `log` VALUES (215, 1, 'logout', '2020-03-23 22:23:32', '3');
INSERT INTO `log` VALUES (216, 1, 'login', '2020-03-25 17:11:19', '1');
INSERT INTO `log` VALUES (217, 1, 'logout', '2020-03-25 17:48:36', '3');
INSERT INTO `log` VALUES (218, 1, 'login', '2020-03-25 17:48:44', '1');
INSERT INTO `log` VALUES (219, 1, 'logout', '2020-03-25 19:57:38', '3');
INSERT INTO `log` VALUES (220, 1, 'login', '2020-03-25 19:57:44', '1');
INSERT INTO `log` VALUES (221, 1, 'logout', '2020-03-25 20:22:42', '3');
INSERT INTO `log` VALUES (222, 1, 'login', '2020-03-25 21:05:39', '1');
INSERT INTO `log` VALUES (223, 1, 'login', '2020-03-27 10:35:34', '1');
INSERT INTO `log` VALUES (224, 1, 'login', '2020-03-27 19:44:54', '1');
INSERT INTO `log` VALUES (225, 1, 'login', '2020-03-27 19:54:09', '1');
INSERT INTO `log` VALUES (226, 1, 'logout', '2020-03-27 19:54:13', '3');
INSERT INTO `log` VALUES (227, 29, 'password salah', '2020-03-27 20:01:45', '3');
INSERT INTO `log` VALUES (228, 1, 'login', '2020-03-27 20:01:49', '1');
INSERT INTO `log` VALUES (229, 1, 'logout', '2020-03-27 20:01:54', '3');
INSERT INTO `log` VALUES (230, NULL, 'logout', '2020-03-27 20:02:26', '3');
INSERT INTO `log` VALUES (231, 1, 'login', '2020-03-27 20:02:35', '1');
INSERT INTO `log` VALUES (232, 1, 'logout', '2020-03-27 20:02:37', '3');
INSERT INTO `log` VALUES (233, 37, 'login', '2020-03-27 21:52:00', '1');
INSERT INTO `log` VALUES (234, 37, 'logout', '2020-03-27 21:56:14', '3');
INSERT INTO `log` VALUES (235, 1, 'login', '2020-03-28 09:13:15', '1');
INSERT INTO `log` VALUES (236, 1, 'login', '2020-03-28 11:30:38', '1');
INSERT INTO `log` VALUES (237, 1, 'logout', '2020-03-28 11:32:46', '3');
INSERT INTO `log` VALUES (238, 1, 'login', '2020-03-28 11:32:49', '1');
INSERT INTO `log` VALUES (239, 1, 'login', '2020-03-28 13:37:22', '1');
INSERT INTO `log` VALUES (240, 1, 'logout', '2020-03-28 13:46:08', '3');
INSERT INTO `log` VALUES (241, 1, 'login', '2020-03-28 13:46:15', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_ikon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_is_mainmenu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_akses_level` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_urutan` int(5) NULL DEFAULT NULL,
  `menu_status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_akses` int(2) NULL DEFAULT NULL,
  `menu_baru` int(2) NULL DEFAULT NULL,
  `menu_label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 169 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (9, 'user', 'flaticon-layers', '102', 'setting/user', '1', 1, '1', 1, NULL, NULL);
INSERT INTO `menu` VALUES (102, 'setting', 'flaticon-settings', '0', 'setting', '1,3', 90, '1', 1, 0, NULL);
INSERT INTO `menu` VALUES (103, 'dashboard', 'flaticon-home', '0', 'dashboard/dashboard', '1,11', 1, '1', 1, 0, NULL);
INSERT INTO `menu` VALUES (104, 'log', ' flaticon-time', '0', 'log/log', '1', 91, '1', 1, 2, NULL);
INSERT INTO `menu` VALUES (105, 'logout', 'flaticon-arrow', '0', 'login/logout', '1,2,3', 99, '1', 1, NULL, NULL);
INSERT INTO `menu` VALUES (111, 'level', 'flaticon-setting', '102', 'setting/level', '1', 2, '1', 1, NULL, NULL);
INSERT INTO `menu` VALUES (112, 'menu_akses', 'flaticon-setting', '102', 'setting/menuakses', '1', 3, '1', 1, NULL, NULL);
INSERT INTO `menu` VALUES (113, 'backup', 'flaticon-setting', '102', 'setting/backup', '1', 4, '1', 1, 2, NULL);
INSERT INTO `menu` VALUES (114, 'import', 'flaticon-file', '0', 'import/admin', '1', 6, '0', 1, NULL, NULL);
INSERT INTO `menu` VALUES (116, 'sistem', 'flaticon-seting', '102', 'setting/sistem', '1', 5, '1', 1, 2, NULL);
INSERT INTO `menu` VALUES (152, 'font_awesome', 'flaticon-file', '102', 'setting/fontawesome', '1', 8, '1', 1, 0, NULL);
INSERT INTO `menu` VALUES (165, 'registrasi', 'flaticon-file', '0', 'Registrasi/Registrasi', '1,2', 1, '', 1, 1, NULL);
INSERT INTO `menu` VALUES (166, 'registrasi', 'flaticon-file', '165', 'Registrasi/Registrasidetail', '1', 1, '0', 1, NULL, NULL);
INSERT INTO `menu` VALUES (167, 'warga', 'flaticon-file', '0', 'Warga', '1', 5, '1', 1, NULL, NULL);
INSERT INTO `menu` VALUES (168, 'data_warga', 'flaticon-file', '167', 'Warga/Warga', '1', 1, '1', 1, NULL, NULL);

-- ----------------------------
-- Table structure for reg_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `reg_kegiatan`;
CREATE TABLE `reg_kegiatan`  (
  `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kegiatan_tanggal` date NULL DEFAULT NULL,
  `kegiatan_tempat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`kegiatan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for reg_registrasi
-- ----------------------------
DROP TABLE IF EXISTS `reg_registrasi`;
CREATE TABLE `reg_registrasi`  (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_kegiatanid` int(11) NULL DEFAULT NULL,
  `reg_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reg_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reg_notlp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reg_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `reg_foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`reg_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_namasistem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `setting_namatempat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `setting_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `setting_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `setting_notlp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `setting_logo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `setting_namapemilik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`setting_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'Dashboard', 'Array Motion', 'Jl.bantul Km 10', 'haryanto.duwi@gmail.com', '085725818424', 'd17eecb86d82aadff65edf6a6e062697.png', 'Duwi haryanto');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_level` int(5) NULL DEFAULT NULL,
  `user_terdaftar` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `user_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_status` bit(1) NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `user_foto` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Duwi Haryanto', 1, '2018-09-28 17:00:00', 'Admin@gmail.com', b'1', '0000-00-00 00:00:00', '0f399c2d6fa3cc467c01736f16eb0334.jpg');
INSERT INTO `user` VALUES (3, 'haryanto', '8e7173cb9b869db115f77688e70b8ff7', 'haryanto duwi', 3, '2018-10-20 17:00:00', 'admin@gmail.com', b'1', '0000-00-00 00:00:00', NULL);
INSERT INTO `user` VALUES (12, 'mita', 'bae3d929b274a4cd35c38fe92f059f1a', 'mita', 1, '2019-12-30 12:38:01', 'mitaduwi@gmail.com', b'1', '0000-00-00 00:00:00', NULL);
INSERT INTO `user` VALUES (29, 'duwi', '3155e562d357a7c301d2ccafadb05e17', 'duwi haryanto', 10, '2019-12-30 14:14:49', 'haryanto.duwi@gmail.com', b'1', '0000-00-00 00:00:00', NULL);
INSERT INTO `user` VALUES (35, 'mika', '07af613eea059030daaed3bde1fd1ce7', 'mika', 1, '2019-12-31 07:45:32', 'mika@gmail.com', b'1', '2020-01-02 10:15:30', NULL);
INSERT INTO `user` VALUES (36, 'hanabi', 'd43fcce13f4c88fd28c279cc2859f579', 'hanabi', 3, '2020-01-06 17:23:31', 'hanabi@gmail.com', b'1', '2020-01-06 17:23:31', NULL);
INSERT INTO `user` VALUES (37, 'manajer', '69b731ea8f289cf16a192ce78a37b4f0', 'manajer', 11, '2020-03-27 21:51:47', 'manajer@gmail.com', NULL, '2020-03-27 21:51:47', NULL);

-- ----------------------------
-- Table structure for warga
-- ----------------------------
DROP TABLE IF EXISTS `warga`;
CREATE TABLE `warga`  (
  `warga_id` int(11) NOT NULL AUTO_INCREMENT,
  `warga_nomorrumah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_statustempattinggal` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_statusktp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_domisili` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_jaminankesehatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_nomorjaminankesehatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_sktm` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_nomorkk` int(100) NULL DEFAULT NULL,
  `warga_nomorktp` int(100) NULL DEFAULT NULL,
  `warga_nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_hubungankeluarga` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_alamatktp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `warga_janiskelamin` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_tempatlahir` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `warga_tanggallahir` date NULL DEFAULT NULL,
  `warga_nomorhp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_statusnomor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_agama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_golongandarah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_hobi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_statusperkawainan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_pendidikanterakhir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_pekerjaan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_alamatbekerja` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `warga_npwp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warga_nonpwp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`warga_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 484 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
