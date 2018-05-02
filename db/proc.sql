DROP PROCEDURE IF EXISTS `sp_change_info`;
DELIMITER $$
/*Thay đổi thông tin info của users*/
CREATE PROCEDURE `sp_change_info` (
	IN `user_id` INT, 
	IN `user_password` VARCHAR(191), 
	IN `user_description` VARCHAR(191), 
	IN `picture_url` VARCHAR(191))  
sp_change_info:BEGIN
	IF NOT EXISTS(SELECT * FROM users WHERE users.id = `user_id`) THEN
		LEAVE sp_change_info;
	END IF;
	Update users SET users.Password = `user_password`, users.Description =  `user_description` WHERE users.id = `user_id`;
    	SET @PICTUREID := (SELECT ID_Picture FROM userspicture WHERE ID_Users = `user_id`);
	DELETE FROM userspicture WHERE ID_Users = `user_id`;
	DELETE FROM picture WHERE id = @PICTUREID;
	INSERT INTO picture(Url,IsDelete,created_at) VALUES(`picture_url`,0,CURRENT_TIMESTAMP);
	SET @PICTUREID := (SELECT MAX(id) FROM picture);
	INSERT INTO userspicture(ID_Users,ID_Picture,IsDelete,created_at) VALUES(`user_id`,@PICTUREID,0,CURRENT_TIMESTAMP);
END$$

DELIMITER ;