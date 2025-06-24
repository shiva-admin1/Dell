<?php
echo "Current Working Directory:\n";
$pwd = shell_exec('pwd');
echo $pwd;

echo "\nListing Directory Contents:\n";
$ls = shell_exec('ls -l');
echo $ls;
?>
