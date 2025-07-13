<?php
    require ("page.php");

    class AnimalsPage extends Page {
        public $title = "Creaturae Fictae | Beasts";

        public function Display() {
            echo "<html>\n<head>\n";
            $this->DisplayTitle();
            $this->DisplayStyles();
            echo "</head>\n<body>\n";
            $this->DisplayHeader();
            echo $this->content;
            echo "</body>\n</html>";
        }
    }

    // Animal Entries
    $dragonH2 = "<h2>Dragons - Lords of Flame and Sky</h2>";
    $dragonP = "<p>Towering, winged, and wise beyond centuries, dragons are the".
               "beating heart of the Draconian Spires. Our collection spans the".
               "chromatic scale: crimson fire-drakes, emerald forest-guardians,".
               "sapphire ice-breathers, and even the elusive Voidscale, known to".
               "whisper riddles in dreams.<br> Guests are invited to watch daily".
               "flight shows (weather-permitting and assuming the dragons are in".
               "the mood).</p>";

    $chimeraH2 = "<h2>Chimeras - Three Heads, One Heart, No Chill</h2>";
    $chimeraP = "<p>Hailing from ancient Grecian myths and bad decisions, chimeras".
                "are majestic (and slightly unhinged) creatures with the body of a".
                "lion, the head of a goat sprouting from the back, and a tail that".
                "is, yes, a living snake.<br>Observe as they bicker with themselves,".
                "hunt enchanted meatballs, and occasionally burst into spontaneous".
                "arguments in Ancient Common.</p>";
    
    $unicornH2 = "<h2>Unicorns - The Grace of Light</h2>";
    $unicornP = "<p>Elegant, elusive, and entirely too aware of their own beauty,".
                "our unicorns reside in the moonlit glades of the Celestial Pasture.".
                "Known for their shimmering coats, glowing horns, and general".
                "disapproval of loud cell phone users, these creatures are a symbol of".
                "purity.<br>Visitors may witness healing rituals, starlight dances,".
                "and occasional flirtations with rainbows.</p>";

    $animals = new AnimalsPage();

    $animals -> content = $dragonH2.$dragonP.$chimeraH2.$chimeraP.$unicornH2.$unicornP;

  $animals->Display();

?>