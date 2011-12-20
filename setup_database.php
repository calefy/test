<?php
require_once('./includes/common/CDatabase.php');

/**创建sql数据库表*/
$db = new CDatabase();

$sql = "
		/* 登录用户帐号信息 */
		CREATE TABLE IF NOT EXISTS m_user(
			uid int primary key auto_increment,
			account varchar(128) NOT NULL default '',
			password varchar(128) NOT NULL default '',
			email varchar(128) NOT NULL default '',
			username varchar(128) NOT NULL default '',
			fullname varchar(128) NOT NULL default '',
			gender tinyint NOT NULL default '0',
			birthday date NOT NULL default '0000-00-00',
			city varchar(64) NOT NULL default '',
			hometown varchar(255) NOT NULL default '',
			intro varchar(512) NOT NULL default '',
			logo varchar(128) NOT NULL default '',
			ctime timestamp NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			itime timestamp NOT NULL default '0000-00-00 00:00:00',
			ltime timestamp NOT NULL default '0000-00-00 00:00:00',
			KEY(itime),
			KEY(ltime)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		/* 学员基本信息 */
		CREATE TABLE IF NOT EXISTS m_pinfo_base(
			pid int primary key auto_increment,
			name varchar(128) NOT NULL default '',
			minzu varchar(128) NOT NULL default '',
			zhibie varchar(128) NOT NULL default '',
			shengri date NOT NULL default '0000-00-00',
			ruwu date NOT NULL default '0000-00-00',
			rudangtuan date NOT NULL default '0000-00-00',
			wenhua varchar(128) NOT NULL default '',
			identifycode varchar(128) NOT NULL default '',
			ctime timestamp NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		/* 学员入伍前信息 */
		CREATE TABLE IF NOT EXISTS m_pinfo_before(
			pid int reference key,
			xuexiao varchar(128) NOT NULL default '',
			zhuanye varchar(128) NOT NULL default '',
			xuexiaodizhi varchar(128) NOT NULL default '',
			jiangcheng varchar(512) NOT NULL default '',
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		/* 学员入伍后信息 */
		CREATE TABLE IF NOT EXISTS m_pinfo_after(
			pid int reference key,
			gugan date NOT NULL default '0000-00-00',
			gangwei varchar(128) NOT NULL default '',
			jiangcheng varchar(512) NOT NULL default '',
			biwu varchar(512) NOT NULL default '',
			zuihao varchar(128) NOT NULL default '',
			yanxi varchar(512) NOT NULL default '',
			shouxun varchar(512) NOT NULL default '',
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		/* 学员其他信息 */
		CREATE TABLE IF NOT EXISTS m_pinfo_other(
			pid int reference key,
			budui varchar(128) NOT NULL default '',
			phone varchar(128) NOT NULL default '',
			family varchar(512) NOT NULL default '',
			jiating varchar(128) NOT NULL default '',
			jiatingphone varchar(128) NOT NULL default '',
			familyhealth varchar(512) NOT NULL default '',
			techang varchar(512) NOT NULL default '',
			mubiao varchar(512) NOT NULL default '',
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		";

//$result = $db->query( $sql );
$r = $db->query($sql);
if($r){
	echo $r.' -----success';
}else{
	echo 'create db wrong.....'.mysqli_connect_errno();
}
echo '<hr/>';


?>
