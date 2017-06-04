ADD NEW SYSTEM
	--add the system in the table systems
	--e.g:
	INSERT INTO `systems` (`entity`, `name`, `type`) VALUES ('INTAPPSRV1', 'intappsrv1', 'SYSTEMS');

	--add the system in the table networks as a column
	--e.g:
	ALTER TABLE `network` ADD `intappsrv1` VARCHAR(50) NULL DEFAULT NULL;


ADD NEW USER
	--add the staff in the table staff
	--e.g:
	INSERT INTO `staff` (`names`, `email`, `phone`) VALUES ('Vincent Omondi', 'vincent.omondi@example.com', '0710157897');



