<?php
function redirect($url) {
	header("Location:$url");
}
function flash_message($type) {
	switch($type) {
		case 'order_submit_msg':
			return '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>訂單送出成功，將立即為您處理，感謝您的購買:)</strong></div>';
			break;
	}
}
?>