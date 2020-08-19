<?php>
if(isset($_POST()))
{
$date=$_POST['date'];
$food=$_POST['food'];
$song=$_POST['song'];
$destination=$_POST['destination'];
$pov=$_POST['pov'];
$happy=$_POST['happy'];
$falls=$_POST['falls'];
$express=$_POST['express'];
$yes=$_POST['yes'];
//check input fields
if(empty($date)||empty($food)||empty($song)||empty($destination)||empty($pov)||empty($happy)||empty($falls)||empty($express)||empty($yes))
{
  echo "Please fill all the fields";
}
else{
  mail("anjalikhandelwal290@gmail.com","Birthday answers")
  echo "<script type='text/javascript'>alert(your message send successfully)
  window.history.log(-1);
  </script>";
}
}

?>
