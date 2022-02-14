<?php
$id = $_POST['id_candidate'];
$mysql = new mysqli('localhost', 'root', '', 'putin');
$sql = "SELECT `votes` FROM `candidates` WHERE `id`='$id'";
$old_votes = $mysql->query($sql)->fetch_assoc();
$new_votes = (int)$old_votes['votes'];
$new_votes++;
$sql = "UPDATE `candidates` SET `votes`=$new_votes WHERE `id`='$id'";
$mysql->query($sql);
echo $new_votes;
