<!DOCTYPE html>
<html>
<head>
<title></title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
	// <![CDATA[
	$(function(){
		$("#frm").submit(function(e){
			e.preventDefault();
			$.post("sendnotifications.php", $("#frm").serialize(), function(data){
				if(data.sms_sent == 'OK'){
					alert("Message Sent");
				} else {
					alert("Message Not Sent");
				}
			}, "json");
		});
	});
	// ]]>
</script>

</head>
<body>

<form id="frm" name="frm"><input type="hidden" name="ajax" value="1" />
<h4>Text your phone a download link for our iPhone and Android apps</h4>
<input type="phone" name="phone" placeholder="Enter Your Mobile Number" />
<button type="submit">Get Link</button>
<div style="display: none;" class="error"></div>
</form>

</body>
</html>