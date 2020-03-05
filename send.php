
<?php
  require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('11a8b14d', 'DYCPOKZvSUkVOr0F');
$client = new \Nexmo\Client($basic);

if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['phone'], $_REQUEST['text'] ) &&
  !empty( $_REQUEST['phone'] ) &&
  !empty( $_REQUEST['text'] )
 ) {
  $message = wordwrap( $_REQUEST['text'], 70 );
  $to = $_REQUEST['phone'];
  
$message = $client->message()->send([
    'to' => '88'.$to,
    'from' => '8801961902007',
    'text' => $message
]);

  print 'Message was sent to ' . $to;
 } else {
  print 'Not all information was submitted.';
 }
}
?>

<?php



 
?>
