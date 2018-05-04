DROP PROCEDURE IF EXISTS `sp_change_info`;
DROP PROCEDURE IF EXISTS `sp_create_order`;
DELIMITER $$
/*Thay đổi thông tin info của usersm xóa củ và làm lại cái mới picture, userpicture*/
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

/*Tạo hóa đơn, tự động cập nhật danh sách còn trong cart trong OrderProduct của user*/
CREATE PROCEDURE `sp_create_order` (
	IN `vDescription` varchar(191), 
	IN `vID_Promotion` int(10), 
	IN `vID_DeliveryPlace` int(10), 
	IN `vID_User` int(10),
	IN `vConfirmDate` date,
	IN `vIsPaied` tinyint(1),
	IN `vIsDelivered` tinyint(1),
	IN `vIsDelete` tinyint(1)
)  
BEGIN
	INSERT INTO `order`(Description,ID_Promotion,ID_DeliveryPlace,ID_User,ConfirmDate,IsPaied,IsDelivered,IsDelete,CreateDate) VALUES(`vDescription`,`vID_Promotion`,`vID_DeliveryPlace`,`vID_User`,`vConfirmDate`,`vIsPaied`,`vIsDelivered`,`vIsDelete`,CURRENT_TIMESTAMP);
	SET @OrID := (SELECT MAX(id) FROM `order`);
	UPDATE `orderproduct` SET IsInCart = 0, ID_Order = @OrID WHERE IsDelete = 0 AND ID_User = `vID_User` AND `IsInCart` = 1;
END$$

DELIMITER ;