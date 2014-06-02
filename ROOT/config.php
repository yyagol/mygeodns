<?php 
# this file holds the DB connection settings

# set the database host 
$DB_HOST='localhost';

# set the database user name 
$DB_USER='mygeodns';

#set the database user password
$DB_PASSWORD='mypassword';

#set the database name 
$DB_NAME='mygeodns';

if(!$DB_HOST and !$DB_USER and !$DB_PASSWORD and !$DB_NAME)
{
	include 'content/no-config.html';
	die();
}

?>