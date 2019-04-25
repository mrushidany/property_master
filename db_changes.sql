
-- 25/11/2018
ALTER TABLE `staffs` ADD `gender` VARCHAR(200) NOT NULL AFTER `alternative_phone`;

-- 1/12/2018
ALTER TABLE `clients` CHANGE `name` `client_name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

-- 2/12/2018
ALTER TABLE `properties` CHANGE `name` `property_name` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `property_types` CHANGE `name` `type_name` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `property_types` CHANGE `type_name` `property_type_name` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
