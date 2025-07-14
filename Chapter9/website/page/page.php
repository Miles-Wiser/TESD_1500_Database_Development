<?php
class Page {
    public $title = "Devin Banking";

    public function DisplayHead() {
        ?>
        <!DOCTYPE html>
            <html>
            <head>
                <title><?=$this->title?></title>
                <link href="../styles/layout.css" rel="stylesheet">
            </head>
            <body>
                <header>
                    <h1>Devin Banking</h1>
                </header>
        <?
    }

    public function DisplayFoot() {
        ?>
        </body>
        </html>
        <?
    }
        
}
?>