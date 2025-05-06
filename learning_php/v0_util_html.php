<?php
function br($quantity = 1) {
  for ($i = 0; $i < $quantity; $i ++) {
    print '<br>';
  }
  echo '<hr>';
}
function hr($quantity = 1) {
  
  echo '<hr>';
}
function brr($quantity = 1) {
  for ($i = 0; $i < $quantity; $i ++) {
    print '<br>';
  }
}

function geth1 ($arg) {
  return "<h1>$arg</h1>";
}
function geth2 ($arg) {
  return "<h2>$arg</h2>";
}
function geth3 ($arg) {
  return "<h3>$arg</h3>";
}
function geth4 ($arg) {
  return "<h4>$arg</h4>";
}
function geth5 ($arg) {
  return "<h5>$arg</h5>";
}
function geth6 ($arg) {
  return "<h6>$arg</h6>";
}

function getp ($arg) {
  return "<p>$arg</p>";
}

function printhr() {
  echo '<hr>';
}

function br2($quantity = 0) {
  $quantity = (boolean) $quantity;
  if (!$quantity) {
    echo '<br>';
  } else {
    for ($i=0; $i < $quantity; $i++) { 
      echo '<br>';
    }
  }
}