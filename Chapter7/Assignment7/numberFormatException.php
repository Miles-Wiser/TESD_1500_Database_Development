<?php

class numberFormatException extends Exception
{
  function __toString()
  {
       return "numberFormatException ". $this->getCode()
              . ": ". $this->getMessage()."<br />"." in "
              . $this->getFile(). " on line ". $this->getLine()
              . "<br />";
   }
}

?>