#create db
CREATE DB pc_healthcheck_campaing;

#create table
CREATE TABLE `sk`.`pc_healthcheck_campaing` ( `name` VARCHAR(100) NOT NULL , `phone` INT(15) NOT NULL , `device` VARCHAR(100) NOT NULL , `interested` TINYINT NOT NULL , `appointment_date` TEXT NOT NULL , `appointment_time` TEXT NOT NULL , `remarks` TEXT NOT NULL , `whatsapp_message_sent` TEXT NOT NULL , `sms_message_sent` TEXT NOT NULL , `address` TEXT NOT NULL ) ENGINE = InnoDB COMMENT = 'table to store pc health check campaing';

