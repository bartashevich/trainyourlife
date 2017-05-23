DROP PROCEDURE IF EXISTS `add_user`;

CREATE DEFINER = `php`@`%` PROCEDURE `add_user`(IN full_name varchar(255),IN username varchar(255),IN email varchar(255),IN password varchar(255),OUT result int(1))
BEGIN
	SET result = 0;
	IF username_exists(username) # IF EXISTS USER WITH THAT USERNAME
			THEN SET result = 1;
	ELSEIF email_exists(email) # IF EXISTS USER WITH THAT EMAIL
			THEN SET result = 2;
	ELSEIF password = email # PASSWORD SAME AS EMAIL
			THEN SET result = 3;
	ELSEIF password = username # PASSWORD SAME AS USERNAME
			THEN SET result = 4;
	ELSEIF CHAR_LENGTH(password) < 6	# PASSWORD LENGHT IS LESS THAN 6 CHARS
			THEN SET result = 5;
	ELSEIF email NOT LIKE '_%@_%._%' # EMAIL FORMAT
			THEN SET result = 6;
	ELSEIF CHAR_LENGTH(username) < 3	# USERNAME LENGHT IS LESS THAN 3 CHARS
			THEN SET result = 7;
	ELSE
			INSERT INTO `users` (`full_name`,`username`,`email`,`password`) VALUES (full_name, username, email, password);
	END IF;
END;

/******************************************/

DROP PROCEDURE IF EXISTS `login_user`;

CREATE DEFINER = `php`@`%` PROCEDURE `login_user`(IN login varchar(255),IN password varchar(255),IN token varchar(255),OUT result int(1))
BEGIN
	SET result = 1;
	IF login LIKE '_%@_%._%' # EMAIL FORMAT
			THEN
				IF email_exists(login)
					THEN
						IF EXISTS (SELECT users.id FROM users WHERE users.password = password AND users.email = login)
							THEN SET result = 0; UPDATE users SET users.token = token WHERE users.email = login;
						END IF;
				END IF;
	ELSEIF username_exists(login) # IF EXISTS USER WITH THAT USERNAME
			THEN
				IF EXISTS (SELECT users.id FROM users WHERE users.password = password AND users.username = login)
					THEN SET result = 0; UPDATE users SET users.token = token WHERE users.username = login;
				END IF;
	END IF;
END;

/******************************************/

DROP PROCEDURE IF EXISTS `logout_user`;

CREATE DEFINER = `php`@`%` PROCEDURE `logout_user`(IN token varchar(255),OUT result int(1))
BEGIN
	DECLARE id INT(11);
	SET id = get_user_by_token(token);

	SET result = 1;

	IF id
		THEN
			UPDATE users SET token = NULL WHERE users.id = id; SET result = 0;
	END IF;
END ;

