<?php
require_once('./includes/common/CDatabase.php');

/**创建sql数据库表*/
$db = new CDatabase();

$sql = "
		CREATE TABLE IF NOT EXISTS m_user(
			uid int NOT NULL default '0',
			account varchar(128) NOT NULL default '',
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
			PRIMARY KEY (uid),
			KEY(itime),
			KEY(ltime)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8
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
