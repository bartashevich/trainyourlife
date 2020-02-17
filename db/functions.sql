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

/********************************/

DROP FUNCTION IF EXISTS `get_user_by_token`;

CREATE DEFINER = `php`@`%` FUNCTION `get_user_by_token`(`token` varchar(255))
 RETURNS int(1)
BEGIN
	DECLARE Value INT;

	SELECT
			users.id INTO Value
	FROM
			users
	WHERE
			users.token = token;

	RETURN Value;
END ;

/********************************/

DROP FUNCTION IF EXISTS `meal_exists`;

CREATE DEFINER = `php`@`%` FUNCTION `meal_exists`(`meal_time` varchar(255), `token` varchar(255))
 RETURNS int(1)
BEGIN
	DECLARE s INT(1);

	DECLARE user_id INT(11);
	SET user_id = get_user_by_token(token);

	#IF EXISTS (SELECT * FROM users_diet_plan WHERE users.username = username) THEN SET s = 1;
	IF user_id THEN
		IF EXISTS (SELECT users_diet_plan.id FROM users_diet_plan WHERE users_diet_plan.time = meal_time AND users_diet_plan.user_id = user_id) THEN SET s = 1;
		ELSE SET s = 0;
		END IF;

		ELSE SET s = 0;
	END IF;

	RETURN s;
END ;

/********************************/