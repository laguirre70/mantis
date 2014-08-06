<?php
	$g_hostname = '';
	$g_db_type = 'mysql';
	$g_database_name = '';
	$g_db_username = '';
	$g_db_password = '';

# --- Email Configuration ---
$g_phpMailer_method		= PHPMAILER_METHOD_SMTP; # or PHPMAILER_METHOD_MAIL, PHPMAILER_METHOD_SENDMAIL, changeg on 3/14/2014
$g_smtp_host			= '';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= '';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= '';					# used with PHPMAILER_METHOD_SMTP
$g_administrator_email  = 'leo@goconcierge.net';
$g_webmaster_email      = 'leo@goconcierge.net';
$g_from_email           = 'mantis@goconcierge.net';	# the "From: " field in emails
$g_return_path_email    = 'leo@goconcierge.net';	# the return address for bounced mail
# $g_from_name			= 'Mantis Bug Tracker';
# $g_email_receive_own	= OFF;
# $g_email_send_using_cronjob = OFF;

?>
