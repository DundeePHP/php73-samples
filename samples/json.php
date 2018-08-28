<?php

try {
  json_decode("{", false, 512, JSON_THROW_ON_ERROR);
}
catch (\JsonException $exception) {
  echo $exception->getMessage(); // echoes "Syntax error"
}