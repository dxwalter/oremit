<?php


class emailUiClass {
	
	function emailUiMethod ($messageSubject, $message, $name, $contact) {

		return '

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
			"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
			<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width">
			<title>Oremti Messaging System</title>
			</head>
			<body>
			<span class="preheader"></span>
			<style type="text/css">
			.header {
			background: #8a8a8a;
			}
			.header .columns {
			padding-bottom: 0;
			}
			.header p {
			color: #fff;
			margin-bottom: 0;
			}
			.header .wrapper-inner {
			padding: 20px; /*controls the height of the header*/
			}
			.header .container {
			background: #8a8a8a;
			}
			.wrapper.secondary {
			background: #f3f3f3;
			}
			</style>

			<table align="center" class="container float-center">
			<tbody>
			<tr>
			<td>
			<table class="spacer">
			<tbody>
			<tr>
			<td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
			</tr>
			</tbody>
			</table>
			<table class="row">
			<tbody>
			<tr>
			<th class="small-12 large-12 columns first last">
			<table>
			<tr>
			<th>
			<h1>'.$messageSubject.'</h1>
			<p>
				'.$message.'
			</p>
			<table class="callout">
			<tr>
			<th class="expander"></th>
			</tr>
			</table>
			</th>
			<th class="expander"></th>
			</tr>
			</table>
			</th>
			</tr>
			</tbody>
			</table>
			<table align="center" class="wrapper secondary">
			<tr>
			<td class="wrapper-inner">
			<table class="spacer">
			<tbody>
			<tr>
			<td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
			</tr>
			</tbody>
			</table>
			<table class="row">
			<tbody>
			<tr>
			<th class="small-12 large-6 columns first">
			<table>
			<tr>
			
			<th class="small-12 large-6 columns last">
			<table>
			<tr>
			<th>
			<h5>Sender\'s Information:</h5>
			<p>Name: '.$name.'</p>
			<p>Contact: '.$contact.'</p>
			</th>
			</tr>
			</table>
			</th>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</table>
			</td>
			</tr>
			</tbody>
			</table>

			<div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
			</body>
			</html>


		';

	}

}


?>