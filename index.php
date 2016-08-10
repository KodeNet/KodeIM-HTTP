<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="Kode.IM - part of the KodeNet XMPP network serving Jabber accounts @kode.im">
<meta name="keywords" content="kode.im, kodenet jabber, kode.im xmpp, kode jabber, kode xmpp, jabber chat, jabber accounts, jabber registration">

<title>Kode.IM | XMPP </title>

<link rel="icon" href="https://kode.im/favicon.ico?v=2"/>
<link rel="stylesheet" href="css/style.css"/>

</head>
<body> 

<div class="page-wrap">

<div id="superstructure">
  <div id="content">
   <h1>About Kode IM</h1>
   <p>Welcome to Kode IM! a free public <a href="http://en.wikipedia.org/wiki/XMPP" target="_blank">XMPP Server</a> running <a href="http://www.prosody.im" target="_blank">Prosody</a> with support for MUC (Multi-User Chat), Groups, Privacy Lists, Offline Storage, vCards, Compression, File Transfer capabilities and more. This XMPP server is hosted in Fremont, California - an innovative city in Silicon Valley.</p>
 
 <h1>Registration</h1>
   <p>In-band registration using a supported IM client (i.e. <a href="https://pidgin.im/" target="_blank">Pidgin</a>, <a href="https://adium.im/" target="_blank">Adium</a>)</p>

   <h1>Status</h1>
<ul>
   <li><mark>Out of beta as of December 04, 2015</mark></li>
   <li><s>Currently beta as of June 27, 2015</s></li>
   <li><s>Pending SSL certificate for kode.im domain</s></li>
<!-- <li> <a href="https://munin.koderoot.net/kodenet/kodenet/index.html#prosody">XMPP stats</a> powered by Munin </li> -->
   <li><strong>SHA1 Fingerprint</strong> FA:BC:C3:DD:BF:D9:BF:AE:97:40:A7:BB:40:5F:59:F8:69:06:51:64</li>
   <li id="uptime"><strong>Server Uptime</strong>
<?php include "/srv/http/kodenet/uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
#echo "$ut[0]$utd, $ut[1]$uth, $ut[2]$utm, $ut[3]$uts";
echo "$ut[0]$utd, $ut[1]$uth, $ut[2]$utm";
?></li>
</ul>
<a href='https://xmpp.net/result.php?domain=kode.im&amp;type=server' target="_blank"><img src='https://xmpp.net/badge.php?domain=kode.im' alt='xmpp.net score' /></a><br>

<h1>Connection</h1>
<ul>
	<li><strong>Server</strong> kode.im </li>
      	<li><strong>MUC</strong> muc.kode.im </li>
	<li><strong>Tor</strong> ihkw7qy3tok45dun.onion </li>
	<li><strong>Proxy</strong> proxy.kode.im </li>
</ul>

<h1>Security</h1>
<ul> 
   <li> SSL/TLS encryption is <a href="https://github.com/stpeter/manifesto/blob/master/manifesto.txt" target="_blank">required</a> between clients and servers (C2S) and server to server (S2S) connections </li>
   <li> The backend is configured to store <a href="https://en.wikipedia.org/wiki/Cryptographic_hash_function" target="_blank">hashed</a> and <a href="https://en.wikipedia.org/wiki/Salt_(cryptography)" target="_blank">salted</a> authentication data </li>
   <li> Use <a href="https://otr.cypherpunks.ca" target="_blank">Off-the-Record (OTR)</a> in your chat client to have fully encrypted chats   </li>
</ul>

<h1>Policies</h1>
   <p><strong><i>Privacy</i></strong> No more information is collected and stored than what is absolutely necessary. This includes rosters, vCards, offline messages, etc.</p>
   <p><strong><i>Spam</i></strong> Spam and abuse including advertisements of any kind will not be tolerated on this network. For spam or abuse please contact us with the full details. 

<h1>Contact</h1>
<p><strong>j</strong> staff@kode.im </p>
<p><strong>e</strong> contact@kode.email | <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0x3000DBF96FAF8F4F" target="_blank">6FAF8F4F</a> </p>

</div></div></div><br><br>

<footer id="footer"> 
kode.im 2015-<?php echo date("Y") ?>&nbsp; &bullet; &nbsp; <img src="https://kode.im/images/copyleft.png" alt="Copyleft" />
</footer>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.kode.im"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.koderoot.net/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 6]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//stats.koderoot.net/piwik.php?idsite=6" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<!-- Piwik Image Tracker-->
<img src="https://stats.koderoot.net/piwik.php?idsite=6&rec=1" style="border:0" alt="" />
<!-- End Piwik -->

</body>
</html>
