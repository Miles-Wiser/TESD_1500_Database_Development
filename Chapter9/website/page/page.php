<?php
class Page {
    public $title = "Strand Banking";
    public $moreStyle = false;
    public $style1;

    public function DisplayHead() {
        ?>
        <!DOCTYPE html>
            <html>
            <head>
                <title><?=$this->title?></title>
                <link href="../styles/layout.css" rel="stylesheet">
                <link href="../images/favicon.png" rel="icon" type="image/png">
                <?php
                if ($this->moreStyle)
                    echo "\n<link href='../styles/$this->style1' rel='stylesheet'>\n";
                ?>
            </head>
            <body>
                <header>
                    <img src="../images/logo.png" >
                    <h1 class="header">Strand Banking</h1>
                    <nav class="header">
                        <a href="#">Accounts</a>
                        <a href="#">Loans & Cards</a>
                        <a href="#">Investments</a>
                        <a href="#">Services</a>
                        <a href="#">Business</a>
                        <a id="login" href="index.php">Login</a>
                    </nav>  
                </header>
        <?php
    }

    public function DisplayFoot() {
        ?>
            <footer>
                <div class="contact">
                    <p>Service Center</p>
                    <p><a href="tel:#">1-818-497-9722</a></p>
                </div>
                <div class="contact">
                    <p>Routing Number</p>
                    <p>0515 3184 5</p>
                </div>
                <div class="contact">
                    <p>Download Our App</p>
                    <div class="appStore">
                        <a href="#"><img src="../images/pear_market_logo.png" alt="Fictional Pear Market Logo" width="45px"></a>
                        <label>Pear Market</label>
                    </div>
                    <div class="appStore">
                        <a href="#"><img alt="Fictional Googol Pause Logo"></a>
                        <label>Googol Pause</label>
                    </div>
                </div>
            </footer>
        </body>
        </html>
        <?php
    }     
}
?>