<?php
session_start();

if(isset($_POST['username'])
  && isset($_POST['pwd'])
  && $_POST['username'] === 'test'
  && $_POST['pwd'] === 'pwd') {
    
  }
