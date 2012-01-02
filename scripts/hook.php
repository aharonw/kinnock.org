<?php

ignore_user_abort(true);
set_time_limit(0);
$cwd = getcwd();
putenv("GIT_SSH=$cwd/jobs/git.sh");
//location of the base git repo
$baseDir = "/var/www/labs";

// $command = `sudo -u www-data GIT_SSH=/var/www/apps/jobs/git.sh git clone git@github.com:nationalfield/labs.git`;

chdir($baseDir);
$command = `git reset --hard`;
$command = `git clean -dfx`;
$command = `git pull`;

$command = `make build`;

?>
