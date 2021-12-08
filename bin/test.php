<?php
include_once __DIR__.'/../vendor/autoload.php';

$ec = new \Ethereum\EcRecover();

//This data generated via web3 and metamask
$msg = 'xxbYjtVAJ5pBOJdK4F3bfiap';
$signed = '0x098097a2ddf1fe952adb2fd7ba8994069e66a63e7af1af70beaee8cd2e56ecc1dac1f8d516aa14588ca586576d24f0c2feb667d2d3f21e75e76dbc4bfd3be5d1c';

echo $ec->personal_ecRecover($msg, $signed) . "\n";