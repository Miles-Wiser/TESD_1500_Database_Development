<?php
class Page {
    // Attributes
    public $content;

    public $title = "Creaturae Fictae | Home";
    public $styles = "../styles/layout.css";
    public $btnNav = array("Home" => "home.php",
                            "Tickets" => "tickets.php",
                            "Membership" => "membership.php",
                            "Animals" => "animals.php",
                            "Shop" => "shop.php",
                            "Donate" => "donate.php",);


    // Methods
    public function Display() {
        echo "<html>\n<head>\n";
        $this->DisplayTitle();
        $this->DisplayStyles();
        echo "</head>\n<body>\n";
        $this->DisplayHeader();
        echo $this->content;
        echo "</body>\n</html>";
    }

    public function DisplayTitle() {
        echo "<title>$this->title</title>",
             "<link rel='icon' href='../img/logo.png'>";
    }

    public function DisplayStyles() {
        echo "<link href='$this->styles' rel='stylesheet'>";
    }

    public function DisplayHeader() {
        ?>
        <header>
            <img src="../img/logo.png" height="125" width="125">
            <h1>Creaturae Fictae Zoo</h1>
            <?$this->DisplayMenu($this->btnNav);?>
        </header>
        <?php
    }

    public function DisplayMenu($buttons) {
        echo "<nav>";
        foreach ($buttons as $name => $url) {
            $this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url));
        }
        echo "</nav>\n";
    }

    public function IsURLCurrentPage($url) {
        if(strpos($_SERVER['PHP_SELF'],$url)===false) {
            return false;
        }
        else {
            return true;
        }
    }

    public function DisplayButton($name, $url, $active=false)
    {
        if ($active) {
            ?>
            <a href="<?=$url?>"><?=$name?></a>
            <?php
        }
    }

}

?>