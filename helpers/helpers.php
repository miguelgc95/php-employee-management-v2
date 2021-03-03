<?php

function debugger($item)
{
  echo '<pre>';
  print_r($item);
  echo '</pre>';
}

function getQueryStringParameters(): array
{
  parse_str(file_get_contents("php://input"), $query);
  return $query;
}
