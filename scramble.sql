/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : scramble

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 27/08/2020 00:49:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_08_25_153737_add_role_column_to_users_table', 2);

-- ----------------------------
-- Table structure for nouns
-- ----------------------------
DROP TABLE IF EXISTS `nouns`;
CREATE TABLE `nouns`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `count` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nouns
-- ----------------------------
INSERT INTO `nouns` VALUES (1, 'trick', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (2, 'limit', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (3, 'guide', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (4, 'discussion', 10, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (5, 'existence', 9, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (6, 'soup', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (7, 'smoke', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (8, 'stretch', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (9, 'destruction', 11, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (10, 'canvas', 6, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (11, 'hour', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (12, 'opinion', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (13, 'profit', 6, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (14, 'expert', 6, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (15, 'doubt', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (16, 'trouble', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (17, 'night', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (18, 'impulse', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (19, 'twist', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (20, 'cook', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (21, 'mind', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (22, 'level', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (23, 'apparatus', 9, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (24, 'person', 6, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (25, 'sense', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (26, 'education', 9, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (27, 'protest', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (28, 'fire', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (29, 'weather', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (30, 'competition', 11, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (31, 'pain', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (32, 'part', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (33, 'smile', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (34, 'building', 8, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (35, 'page', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (36, 'order', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (37, 'disgust', 7, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (38, 'bread', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (39, 'form', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (40, 'force', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (41, 'fold', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (42, 'stage', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (43, 'noise', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (44, 'land', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (45, 'body', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (46, 'error', 5, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (47, 'meat', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (48, 'rule', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (49, 'look', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (50, 'sort', 4, '2020-08-26 13:25:26', NULL);
INSERT INTO `nouns` VALUES (51, 'effect', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (52, 'act', 3, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (53, 'growth', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (54, 'reward', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (55, 'damage', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (56, 'mass', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (57, 'self', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (58, 'secretary', 9, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (59, 'development', 11, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (60, 'example', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (61, 'balance', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (62, 'name', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (63, 'rain', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (64, 'blood', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (65, 'ray', 3, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (66, 'committee', 9, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (67, 'mountain', 8, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (68, 'offer', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (69, 'base', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (70, 'flower', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (71, 'crack', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (72, 'increase', 8, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (73, 'weight', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (74, 'summer', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (75, 'river', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (76, 'tin', 3, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (77, 'love', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (78, 'relation', 8, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (79, 'nation', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (80, 'shake', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (81, 'invention', 9, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (82, 'room', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (83, 'hope', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (84, 'driving', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (85, 'servant', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (86, 'death', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (87, 'size', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (88, 'meeting', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (89, 'oil', 3, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (90, 'letter', 6, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (91, 'scale', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (92, 'substance', 9, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (93, 'produce', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (94, 'use', 3, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (95, 'move', 4, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (96, 'month', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (97, 'respect', 7, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (98, 'birth', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (99, 'price', 5, '2020-08-26 13:27:07', NULL);
INSERT INTO `nouns` VALUES (100, 'play', 4, '2020-08-26 13:27:07', NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for scores
-- ----------------------------
DROP TABLE IF EXISTS `scores`;
CREATE TABLE `scores`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(255) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `level` int(255) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of scores
-- ----------------------------
INSERT INTO `scores` VALUES (1, 4, 12, 5, '2020-08-26 16:12:09', NULL);
INSERT INTO `scores` VALUES (2, 2, 1, 5, '2020-08-26 17:41:37', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `role` enum('public','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Kiley Sauer', 'aditya52@example.org', '2020-08-25 15:39:17', '$2y$10$f29UT6XdZIwAj1ZWuAD91O1uD4niBYHmNE723u7oLENJven8HbOFy', 'rQKmTkQ01hKj4g5I8Lao0SPscnlqcTJom2QPnJICRu7j4TB4dqysqmTKTHo7', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (2, 'Tad Little', 'kuhic.reese@example.com', '2020-08-25 15:39:17', '$2y$10$IcxEhqAeOv0dlwJspb4JPuursMnz9vu8tTwVzJEWd8AjZmtS16U9a', 'i3PeG5D08kHbzfr7W7h2YYAu8OSdMyycoMdDHsQjfzeGYloRkMHreYsjPfyM', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (3, 'Sarah Sawayn', 'ted.koch@example.net', '2020-08-25 15:39:17', '$2y$10$mGnOYYLlDp7y6TnkxxRYV.4jb8/Qc583ZkZPUWndnGLtDoLbGc1qW', 'TcdaqR6N2B', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (4, 'Mellie Hoeger', 'ronaldo68@example.org', '2020-08-25 15:39:17', '$2y$10$xH.vAEPZGU2e48n2YIBFB.DMXmcH1YJPRFlCsVg4TsSU0Ve521U2C', 'LEpAz5OYJD', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (5, 'Keyon Christiansen', 'homenick.wilhelm@example.org', '2020-08-25 15:39:17', '$2y$10$SFEXYZP6jGDWwEIMrRed7ew4eyZLXSSkJoE43YUd8KmyRFiO6zcFm', '2cNOHi0HCh', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (6, 'Darwin Shields', 'leannon.tyrese@example.com', '2020-08-25 15:39:17', '$2y$10$h9EfyJ1DP7EuHT670IWXPOS79KBIoc9mdSAV5H2NDNSr02hD.49Wy', '6w8HQrteuT', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (7, 'Vita Jerde', 'haag.marjory@example.com', '2020-08-25 15:39:17', '$2y$10$wGrx2CxdSqJhLhnoRh1pcOh1EOjyn8NcXqwf5VLf748ggH0a.fUSK', 'pCJf5R54js', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (8, 'Nico Huel MD', 'rory23@example.com', '2020-08-25 15:39:17', '$2y$10$wlMqIugQv./Oet9GpsXTE.7eNu2Wfu01NrtbxYAPU3yV0RDxg5WZG', 'DMITCj4Vaj', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (9, 'Jamir Kilback', 'okon.amya@example.net', '2020-08-25 15:39:17', '$2y$10$2tuXTiPNbK59ehdlFJdlVu4cNSODv6uOICPKjvOe/Z9gr211f7mLO', 'ePlu1Hd2Fe', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (10, 'Citlalli Robel', 'bherman@example.net', '2020-08-25 15:39:17', '$2y$10$rImeLxi2k1YXxVfUDaKPn.qZKlELjlRWHTKevJg/YriKpfqS8.AQq', 'kDdRt86UiJZojWGO3nbpCgMuALbY66pR5UDYqLOfLB9cIAc8OH8wBABzAqM6', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (11, 'Prof. Junior Tremblay I', 'margot.block@example.net', '2020-08-25 15:39:17', '$2y$10$61N/2L5PhOM.iCbjecjf2uH429FhP67cFPt5x7fkakThlTwRIYB7S', 'VBOyqTdZw4', '2020-08-25 15:39:17', NULL, 'public');
INSERT INTO `users` VALUES (12, 'Abdurrahman Shifa', 'abdurrahmanshifa@gmail.com', NULL, '$2y$10$lcul2Mmq9sExhyMkOOAVeOcAPcWTSzs7zFOUxOs5I3M0nxOr0FwBW', NULL, '2020-08-26 10:09:34', '2020-08-26 10:09:34', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
