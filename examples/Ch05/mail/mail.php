<?php
if (isset($_POST['mail'])) {
	$to = $_POST['to'];
	$from = $_POST['from'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];

	$header = "From: $from \nReply-To: $from \n";
	if (mail($to, $subject, $content, $header)) {
		echo "飛鴿傳書成功！";
	} else {
		echo "嘿美受傷了Q";
	}
}
?>


