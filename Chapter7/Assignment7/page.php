<?php
class Page {
    public $title = "Clive's Bookstore";

    public function DisplayHead() {
        ?>
        <!DOCTYPE html>
            <html>
            <head>
                <title><?=$this->title?></title>
                <link href="layout.css" rel="stylesheet">
            </head>
            <body>
                <header>
                    <h1>Clive's Bookstore</h1>
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