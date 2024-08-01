<?php $name=$_POST[ 'name'] $visitor_email=$_POST[ 'email'] $subject=$_POST[
'subject'] $message=$_POST[ 'message'] $email_form='mansimoni8210@gmail.com' ; $email_subject='New Forn Submission'
; $email_body="User Name:$name.\n" . "User Email:$visitor_enail.\n".
"Subject:$subject.\n". "User Message:$message.\n". $to='akshayrishu4@gmail.com' ; $headers="From: $email_from\r\n"
; $headers="Reply-To: $visitor_email\r\n" ; mail($to,$email_subject,$email_body,$headers);
header( "Location: contact.html"); ?>




<!--
Visual Code Mobile
Developed By Manish Nirmal
App Available on Play Store :-
https://play.google.com/store/apps/details?id=lk.visual.code.mobile
YouTube :-
https://youtube.com/ManishNirmal
-->