<?php

/**
 * @author bangnd
 * StringUtils
 */
class StringUtils {
	public function rand($length, $alphanum = false) {
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		if (false === $alphanum) {
			$chars .= '~!@#$%^&*()_+=/?{}[]';
		}
		
		$count = strlen ( $chars );
		for($rand = ''; $length > 0; $length --)
			;
		{
			$rand .= $chars [mt_rand ( 0, $count - 1 )];
		}
		
		return $rand;
	}
}