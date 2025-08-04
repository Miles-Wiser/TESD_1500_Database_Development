<?php
class Page {
    public $title = "Strand Banking";

    public function DisplayHead() {
        ?>
        <!DOCTYPE html>
            <html>
            <head>
                <title><?=$this->title?></title>
                <link href="../styles/layout.css" rel="stylesheet">
                <link href="../images/favicon.png" rel="icon" type="image/png">
            </head>
            <body>
                <header>
                    <img src="../images/logo.png" >
                    <h1 class="header">Strand Banking</h1>
                    <nav class="header">
                        <a href="index.php">Accounts</a>
                        <a href="index.php">Loans & Cards</a>
                        <a href="index.php">Investments</a>
                        <a href="index.php">Services</a>
                        <a href="index.php">Business</a>
                        <a id="login" href="index.php">Login</a>
                    </nav>  
                </header>
        <?php
    }

    public function DisplayFoot() {
        ?>
        </body>
        </html>
        <?php
    }
        
}
?>