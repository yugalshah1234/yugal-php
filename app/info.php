<?php
openlog('php', LOG_CONS | LOG_NDELAY | LOG_PID, LOG_USER | LOG_PERROR);
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}
function callback1($number) {
 checkNum($number);
}
function callback2($number) {
  callback1($number);
}
function callback3($number) {
  callback2($number);
}



function divideByZero() {
  echo 10/0;
}
callback3(2);
divideByZero();
closelog();
?>
