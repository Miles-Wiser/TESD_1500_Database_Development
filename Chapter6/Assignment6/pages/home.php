<?php
require "page.php";

// images
$witches = "../img/witches_brew.jpg";
$bardify = "../img/bardify.jpg";
$portal = "../img/portalrun.jpg";

// paragraphs
$intro = "<p>Step beyond the veil of the ordinary and into a world where dragons".
         "soar, unicorns graze, and phoenixes rise from shimmering ash. Nestled in".
         "the heart of the Enchanted Wilds, Creaturae Fictae Zoo is the world's".
         "premier sanctuary for magical and legendary creatures from across realms,".
         "timelines, and forgotten fables.</p>";
$cameras = "<p>Whether you're a scholar of the arcane, a curious child of the stars,".
         "or simply seeking wonder, our zoo invites you to marvel at:</p>";

$homepage = new Page();
$homepage->content = "<main>\n".
                     "<h2>Where Myth Comes to Life</h2>$intro".
                     "<h2>Beastly Cameras</h2>\n$cameras".
                     "<ul>".
                     "<li>Dragon Cave</li>".
                     "<li>Unicorn Meadow</li>".
                     "<li>Manticore Enclosure</li>".
                     "<li>Crawling Critters</li>".
                     "</ul>".
                     "<h2>Our Partners</h2>".
                     "<div id='partners'>".
                        "<figure>".
                            "<img src='$witches' height='100px' width='100px'>".
                            "<figcaption>Witches' Brew Coffee</figcaption>".
                        "</figure>".
                        "<figure>".
                            "<img src='$bardify' height='100px' width='100px'>".
                            "<figcaption>Bardify</figcaption>".
                        "</figure>".
                        "<figure>".
                            "<img src='$portal' height='100px' width='100px'>".
                            "<figcaption>PortalRun</figcaption>".
                        "</figure>".
                     "</div>".
                     "</main>\n";

$homepage->Display();
?>