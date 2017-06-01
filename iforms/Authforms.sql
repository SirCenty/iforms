TABLES
network,
users,


CREATE TABLE `authforms`.`users` (

`id` INT(100) NOT NULL AUTO_INCREMENT,
`names` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB;



CREATE TABLE `authforms`.`network` (
`id` INT(100) NOT NULL AUTO_INCREMENT,
`user` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
`reqtype` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
`names` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`emails` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`phone_number` VARCHAR(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
`job_title` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`department` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`current_user_id` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`work_location` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`request_date` DATETIME(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`employee_no` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`type_of_user` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`systemaccess` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`paynet` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`paynetslan` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`interswitch` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`interswitchgroup` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`prime` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`online` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`fraudguard` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`ist` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`intsqlsrv` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`intsqlsrv1` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`officedb` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`realimedb` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`cencon` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`extsqlsrv` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`router` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`network_switch` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`firewall` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`access_control` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`pastel` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`terminal_server` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`intranet` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`tranwall_tc` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`other` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`purpose` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`authorizers` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`auth1` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`auth2` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`auth3` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`auth4` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
`implement` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `network`(`user`, `reqtype`,`names`, `emails`, `phone_number`, `job_title`, `department`, `current_user_id`, `work_location`, `request_date`, `employee_no`, `type_of_user`, `systemaccess`, `paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realimedb`, `cencon`, `extsqlsrv`, `router`, `network_switch`, `firewall`, `access_control`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `other`, `purpose`, `authorizers`, `auth1`, `auth2`, `auth3`, `auth4`) 
VALUES 				('centy', 'New User','names','emails','phone_number','job_title','department','current_user_id','work_location',CURRENT_TIMESTAMP,'employee_no','type_of_user', 'Domains, Databases', 'paynet','paynetslan','interswitch','interswitchgroup','prime','online','fraudguard','ist','intsqlsrv','intsqlsrv1','officedb','realimedb','cencon','extsqlsrv','router','network_switch','firewall','access_control','pastel','terminal_server','intranet','tranwall_tc','other','n classical Latin literature from 45 pr.ne, which means that it is more than 2000 years. Richard McClintock, a Latin professor at Hampden-Sydney College in Vir','Vincent, Chaplin, John, Kate','VO','NA','NW','MK');


INSERT INTO `network`(`user`, `reqtype`,`names`, `emails`, `phone_number`, `job_title`, `department`, `current_user_id`, `work_location`, `request_date`, `employee_no`, `type_of_user`, `systemaccess`, `paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realimedb`, `cencon`, `extsqlsrv`, `router`, `network_switch`, `firewall`, `access_control`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `other`, `purpose`, `authorizers`, `auth1`, `auth2`, `auth3`, `auth4`, `a1`, `a2`, `a3`, `a4`, `implement`) 
VALUES 				('centy', 'New User','names','emails','phone_number','job_title','department','current_user_id','work_location',CURRENT_TIMESTAMP,'employee_no','type_of_user', 'Domains, Databases', 'paynet','paynetslan','interswitch','interswitchgroup','prime','online','fraudguard','ist','intsqlsrv','intsqlsrv1','officedb','realimedb','cencon','extsqlsrv','router','network_switch','firewall','access_control','pastel','terminal_server','intranet','tranwall_tc','other','n classical Latin literature from 45 pr.ne, which means that it is more than 2000 years. Richard McClintock, a Latin professor at Hampden-Sydney College in Vir','Vincent, Chaplin, John, Kate','VO','NA','NW','MK');