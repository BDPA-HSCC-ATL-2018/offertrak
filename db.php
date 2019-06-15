<?php $dbh = new mysqli ('localhost','root','','job_application');

if (!$dbh->error) {
  echo "it worked.";
}
else {
  echo "it didn't work.";
} ?>
