<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="Kode.IM - part of the KodeNet XMPP network serving Jabber accounts @kode.im">
<meta name="keywords" content="kode.im, kodenet jabber, kode.im xmpp, kode jabber, kode xmpp, jabber chat, jabber accounts, jabber registration">
<meta property="og:title" content="Kode.IM | XMPP" />
<meta property="og:description" content="Kode.IM XMPP/Jabber network" />
<meta property='og:image' content='images/kodenet-logo.png'/>

<title>Kode.IM | XMPP </title>

<link rel="icon" href="https://kode.im/favicon.ico?v=2"/>
<link rel="stylesheet" href="css/style.css"/>

</head>
<body> 

<div class="page-wrap">

<div id="superstructure">
  <div id="content">
   <h1>About Kode IM</h1>
   <p>Welcome to Kode IM! a public <a href="http://en.wikipedia.org/wiki/XMPP" target="_blank">XMPP Server</a> part of the <a href="https://www.koderoot.net/" target="_blank">KodeNet</a> XMPP network with support for Cloud Push Notifications, Blocking, File Transfers, HTTP File Uploads, Invite URLs, Message Archive Management, Multi-User Chat, Offline Storage, vCards with Avatars and <a href="https://www.koderoot.net/docs/xep/modules" target="_blank">more</a>. This XMPP server is hosted in Fremont, California - an innovative city in Silicon Valley.</p>
 
 <h1>Registration</h1>
   <p> <a href="https://im.koderoot.net/register-on-kode.im">Web Registration</a> </p>
   <p>In-band registration using a supported IM client (i.e. <a href="https://pidgin.im/" target="_blank">Pidgin</a>, <a href="https://adium.im/" target="_blank">Adium</a>)</p>

   <h1>Status</h1>
<ul>
   <li><mark>Out of beta as of December 04, 2015</mark></li>
   <li><s>Currently beta as of June 27, 2015</s></li>
   <li><s>Pending SSL certificate for kode.im domain</s></li>
<!-- <li> <a href="https://munin.koderoot.net/kodenet/kodenet/index.html#prosody">XMPP stats</a> powered by Munin </li> -->
   <li><strong>SHA1 Fingerprint</strong> FA:BC:C3:DD:BF:D9:BF:AE:97:40:A7:BB:40:5F:59:F8:69:06:51:64</li>
</ul>
<img src='https://media.koderoot.net/images/badge_jabber_at.svg' alt='xmpp.net score' /><br>
<a href='https://check.messaging.one/result.php?domain=kode.im&amp;type=server'>
  <img src='https://check.messaging.one/badge.php?domain=kode.im' alt='IM observatory score' />
</a><br>

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

<a href="https://conversations.im/omemo/" target="_blank"><img src="https://media.koderoot.net/images/omemo_logo.png" title="OMEMO Encryption Ready" width="100" height="62" /><img src="images/check-mark-green.png" alt="Green Check" /></a>

<br><br><br>

<h1>Policies</h1>
   <p><strong><i>Privacy</i></strong> No more information is collected and stored than what is absolutely necessary. This includes rosters, vCards, offline messages, etc.</p>
   <p><strong><i>Spam</i></strong> Spam and abuse including advertisements of any kind will not be tolerated on this network. For spam or abuse please email abuse@kode.email with the full details. This <a href="keys/abuse/109F92DA">public key</a> can be used for secure communication.

<h1>Contact</h1>
<p><strong>j</strong> staff@kode.im </p>
<p><strong>e</strong> contact@kode.email | <a href="keys/contact/7F300F7C">7F300F7C</a> </p>

</div></div></div><br><br>

<footer id="footer"> 
<a href="https://status.koderoot.net">
<img src="https://media.koderoot.net/images/statuspage.png" height="45" width="45" title="KodeNet Status Page" alt="Status Page"/>
</a> 
&nbsp; kode.im 2015-<?php echo date("Y") ?>&nbsp; &bullet; &nbsp; <img src="https://www.kode.im/images/copyleft.png" alt="Copyleft" />
</footer>

<!-- Piwik respects your privacy -->
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

<div id="chat">
<a href="chat">
<img src="images/chat-icon.png" height="100" width="100" title="Chat" alt="Jabber Chat Client"/></a>
</div>

</body>
</html>
