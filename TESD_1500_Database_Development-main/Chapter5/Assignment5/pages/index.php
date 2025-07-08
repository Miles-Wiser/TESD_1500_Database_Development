<?php
require 'header.php';
?>
    <form action="display.php" method="post">
        <input type="text" id="num1" name="num1" placeholder="First Number">
        <input type="text" id="num2" name="num2" placeholder="Second Number">
        <select id="operator" name="operator">
            <option value="0" label="&plus;"></option>
            <option value="1" label="&minus;"></option>
            <option value="2" label="&times;"></option>
            <option value="3" label="&divide;"></option>
        </datalist>
        <input type="submit">
    </form>
<?php
require 'footer.php';
?>