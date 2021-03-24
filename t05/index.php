<?php

class StrFrequency
{

	public $strF = "";

	function __construct($str)
	{
		$this->strF = $str;
	}

	function letterFrequencies()
	{
		$lStr = strtoupper($this->strF);
		$symbol = count_chars($lStr, 1);
		$rarr = new stdClass;
		foreach ($symbol as $k => $v) {
			if (preg_match("/^[a-zA-Z]$/", chr($k))) {
				$rarr->{chr($k)} = $v;
			}
		}
		return $rarr;
	}

	function wordFrequencies()
	{
		$lStr = strtoupper($this->strF);
		$word = str_word_count($lStr, 1);
		$rarr = new stdClass;
		foreach ($word as $k) {
			$rarr->{$k} = substr_count($lStr, $k, 0, strlen($lStr));
		}
		return $rarr;
	}

	function reverseString()
	{
		$lStr = preg_replace('/[^a-zA-z]/i', ' ', $this->strF);
		return strrev($lStr);
	}
};

// function test($string)
// {
// 	$obj = new StrFrequency($string);
// 	$symbol = $obj->letterFrequencies();
// 	echo "Letters in " . $string . "\n";
// 	foreach ($symbol as $k => $v) {
// 		echo "Letter " . $k . " is repeated " . $v . " times\n";
// 	}
// 	$symbol = $obj->wordFrequencies();
// 	echo "Words in " . $string . "\n";
// 	foreach ($symbol as $k => $v) {
// 		echo "Word " . $k . " is repeated " . $v . " times\n";
// 	}
// 	echo "Reverse the string: " . $string . "\n";
// 	echo $obj->reverseString() . "\n";
// }

// echo "*************\n";

// test("Face it, Harley-- you and your Puddin' are kaput!");
// echo "*************\n";

// test("  Test test 123 45 !0 f   HeLlO wOrLd  ");
// echo "*************\n";
// test("");
