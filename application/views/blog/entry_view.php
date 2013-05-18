<?php
//var_dump($entry);
echo '<h1>';
echo $entry['title'];
echo '</h1>';
echo '<h6>By ';
echo $entry['displayName'];
echo ' on ';
echo $entry['updateDate'];
echo '</h6>';
echo $entry['content'];
