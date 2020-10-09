<?php
require 'Facebook.php';

$fb = new Facebook();

$post = $fb->createPost();
$post->setAuthor('Eduardo Nunes');
$post->setMessage('Mensagem post de teste');

echo "Author: {$post->getAuthor()}";
echo "<hr>";
echo "Message: {$post->getMessage()}";