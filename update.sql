ALTER TABLE `fantasy`.`vouchers`     ADD COLUMN `batch_id` INT(11) DEFAULT '0' NULL AFTER `paid_plan`;
CREATE TABLE `reseller_customers` (
  `id` BIGINT(21) NOT NULL AUTO_INCREMENT,
  `reseller_id` BIGINT(21) DEFAULT NULL,
  `user_id` BIGINT(21) DEFAULT NULL,
  `subscribe_date` DATETIME DEFAULT NULL,
  `trx_type` VARCHAR(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reseller_id` (`reseller_id`,`user_id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `reseller_daily_revenue` (
  `id` BIGINT(21) NOT NULL AUTO_INCREMENT,
  `reseller_id` BIGINT(21) DEFAULT NULL,
  `comission_date` DATETIME DEFAULT NULL,
  `amount` INT(11) DEFAULT '0',
  `n_status` TINYINT(3) DEFAULT '0' COMMENT '0->pending, 1->paid',
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `resellers` (
  `id` BIGINT(21) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) DEFAULT NULL,
  `email` VARCHAR(42) DEFAULT NULL,
  `birthday` DATETIME DEFAULT NULL,
  `register_date` DATETIME DEFAULT NULL,
  `address` TEXT,
  `phone` VARCHAR(42) DEFAULT NULL,
  `mobile` VARCHAR(42) DEFAULT NULL,
  `ktp` VARCHAR(42) DEFAULT NULL,
  `npwp` VARCHAR(42) DEFAULT NULL,
  `referral_code` VARCHAR(10) DEFAULT NULL,
  `n_status` TINYINT(3) DEFAULT NULL COMMENT '0->pending, 1->active, 2->disabled',
  `salt` VARCHAR(51) DEFAULT NULL,
  `username` VARCHAR(20) DEFAULT NULL,
  `password` VARCHAR(51) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `referral_code` (`referral_code`)
) ENGINE=INNODB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;