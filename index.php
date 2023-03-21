<?php
require "helpers/db/Repos.php";
require "helpers/db/Headlines.php";
require "helpers/db/Posts.php";

$posts = getAllPosts();
$repos = getAllRepos();
$headlines = getAllHeadlines();


$code = $_GET["code"];
  
require("./helpers/db/Referrals.php");

if(isset($code)){
  addVisit($code);
}
?>


<html>
	<head>
		<title>Owen Rummage - Home</title>
	</head>

	<body>
		<div style="display:flex;flex-direction:column;width:100%;height:100%;align-items:center;">
<pre>
<?php require("./helpers/partials/header.php"); ?>

WHO AM I
=========
I own and operate a bunch of stuff, the main one being the OneGrid LLC hosting
company. I also write and run some personal web apps and some server hosting
philanthropy for open source projects on the side. Im currently a senior in
high school and I love computers generally. I have taken on a more minimalist
tech approach so I still have a lot of social media accounts that I just
abandoned. I tend to just lurk in the shadows mostly. Im an avid linux user
(ArchLinux, i3, Friefox, and ST are my go-to tools) but I also dont disrespect
the windows or mac community. I try to be an all around likeable guy, and you
can usually find me at makerspaces, makerfaires, or on some IRC/Discord
servers. If you do see me out in the wild dont shy away from saying hello! I
love meeting new people. Some other pages you should check out are my <a href="/blog.php">blog</a>
and my <a href="/quotes.php">quotes book</a>.

LATEST NEWS
------------
<?php while ($row = $headlines->fetch_assoc()) {
    echo "  " .
        $row["Headline"] .
        " (" .
        explode(" ", $row["Date"])[0] .
        ")\n     * " .
        $row["Description"] .
        "\n";
} ?>

MY LATEST THOGUHTS
-------------------
<?php while ($row = $posts->fetch_assoc()) {
    echo '  * <a href="/blog.php?post=' .
        $row["ID"] .
        '">' .
        $row["Title"] .
        "</a> (" .
        explode(" ", $row["Date"])[0] .
        ")\n";
} ?>

MY PROJECTS (should auto update but arent)
------------
<?php while ($row = $repos->fetch_assoc()) {
    echo "  * <a href='" .
        $row["Link"] .
        "'>" .
        $row["Name"] .
        "</a>  " .
        $row["Description"] .
        "\n";
} ?>

WEBSITES
---------
  * <a href="https://imnotyourtech.support/">Im not your tech support!</a>
  * <a href="https://archusers.club"><s style="color: red">Arch Users Club Forum</s></a> Currently down for server migration
  * <a href="https://postshit.online"><s style="color: red">Post Shit Online</s></a> Currently down for Server Migration
  * <a href="https://192mb.life">Proof you can run a website for less than 20$/yr</a>

SOCIALS
--------
I have a few social medias but I dont check them so I wont list them here.
If you really want to talk to me the main place is my email. Emails can be sent
to <code>hello@rummage.cc</code> and ill get back to them eventually.

If you want to send me <i>encrypted</i> emails, for <i>definetlty not illegal
purposes</i> then feel free to import my GPG keys and send away!
<code>curl https://rummage.cc/me.gpg | gpg --import</code>
<!-- https://www.reddit.com/user/never_the_worst ;)  --!>



P.S. Do you like good servers? Do you want to abuse corporate america for me to
get 100$ from a company for you buying a 2$ web hosting plan? Use my affiliate
link at Interserver and do both! https://www.interserver.net/r/890212
</pre>

<!--<pre style="position:absolute; bottom:0;">An <a style="color: black; text-decoration: none;" href="https://rummage.cc">Owen Rummage</a> Production</pre>-->
    </div>
  </body>
</html>
