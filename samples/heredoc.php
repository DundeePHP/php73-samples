<?php

$foo = ['foo', 'bar', <<<EOT
  baz
    -  hello world! --
  ahoy
  EOT, 'qux', 'quux'
]; 
var_dump($foo);