# click
Click to'lov tizimi uchun modul
================== CLICK UZ ==========================

Modulni backend ga tashlab ishlatish mumkin.

Ishlatilishi:

Avval mysqlda transactions hosil qilamiz:

    CREATE TABLE `click_transactions` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` int(11) DEFAULT NULL,
      `click_trans_id` int(11) NOT NULL,
      `amount` int(11) NOT NULL,
      `click_paydoc_id` int(11) NOT NULL,
      `service_id` int(11) DEFAULT NULL,
      `sign_time` varchar(255) DEFAULT NULL,
      `status` tinyint(6) DEFAULT NULL,
      `create_time` int(11) DEFAULT NULL,
      PRIMARY KEY (`id`),
      KEY `user_id` (`user_id`),
      CONSTRAINT `click_transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


KEyin modulni backend papkasiga tashlab modulni tanishtiramiz

So'ng moduli o'zimizga sozlab ishlatamiz.'
Tez orada to'liq dokumentatsiyani joylaymiz
