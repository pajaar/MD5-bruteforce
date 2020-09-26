<?php
// MD5 bruteforce
// github.com/pajaar

$pass = "578b996f48ab4bcad40f9ee455581e5f";
$list = "list.txt";

$lol = explode("\r\n", file_get_contents($list));
foreach($lol as $res){
if (md5($res) === $pass) {
echo "found $pass > $res";
  }
}
?>
