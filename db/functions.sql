DROP FUNCTION IF EXISTS `email_exists`;

CREATE DEFINER = `php`@`%` FUNCTION `email_exists`(`email` varchar(255))
 RETURNS int(1)
BEGIN
	DECLARE s INT(1);

	IF EXISTS (SELECT * FROM users WHERE users.email = email) THEN SET s = 1;
	ELSE SET S = 0;

	END IF;

	RETURN s;
END;

/********************************/

DROP FUNCTION IF EXISTS `username_exists`;

CREATE DEFINER = `php`@`%` FUNCTION `username_exists`(`username` varchar(255))
 RETURNS int(1)
BEGIN
	DECLARE s INT(1);

	IF EXISTS (SELECT * FROM users WHERE users.username = username) THEN SET s = 1;
	ELSE SET S = 0;

	END IF;

	RETURN s;
END;