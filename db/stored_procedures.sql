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

/******************************************/

DROP PROCEDURE IF EXISTS `add_meal`;

CREATE DEFINER = `php`@`%` PROCEDURE `add_meal`(IN `meal_name` varchar(255),IN `time` time,IN `avatar` varchar(255),IN `token` varchar(255),OUT `result` int(1))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	SET result = 0; # no problem

	IF user_id IS NULL THEN SET result = 1; # user doesnt exists/logged in
	ELSEIF meal_exists(time,token) THEN SET result = 2; # meal already exists
	ELSE
				INSERT INTO `users_diet_plan` (`name`,`time`,`avatar`,`user_id`) VALUES (meal_name, time, avatar, user_id);
	END IF;

END;

/******************************************/

DROP PROCEDURE IF EXISTS `get_diet_plans`;

CREATE DEFINER = `php`@`%` PROCEDURE `get_diet_plans`(IN token varchar(255))
BEGIN
	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	#SELECT users_diet_plan.name, users_diet_plan.protein INTO name, protein FROM users_diet_plan WHERE users_diet_plan.user_id = user_id;
	SELECT users_diet_plan.id, users_diet_plan.name, users_diet_plan.protein, users_diet_plan.carbs, users_diet_plan.fat, users_diet_plan.calories, users_diet_plan.time, users_diet_plan.avatar FROM users_diet_plan WHERE users_diet_plan.user_id = user_id ORDER BY users_diet_plan.time ASC;

END ;

/******************************************/