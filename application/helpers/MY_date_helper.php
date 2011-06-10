<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Returns actual date in mySQL format
 *
 * @param void
 * @return string
 * @author Alan Rodriguez
 **/
function mysql_now()
{
	$datestring = "%Y-%m-%d";
	$time = time();
	$date = mdate($datestring, $time);
	return $date;
}