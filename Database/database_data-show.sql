CREATE DATABASE data_show;

USE data_show;

CREATE TABLE `data_film`(
    `id` INT NOT NULL auto_increment,
    `judul_film` VARCHAR(100) NOT NULL,
    `tahun_rilis` INT NOT NULL,
    `genre` VARCHAR(100) NOT NULL,
    `jumlah_ep` VARCHAR(100) NOT NULL,
    `status` VARCHAR(100) NOT NULL,
    `is_verify` BOOLEAN DEFAULT false,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);