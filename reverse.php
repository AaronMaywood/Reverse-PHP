<?php
// 入力された文章 
$sentence = "PHP is a powerful scripting language";

// 文章をスペースで区切って配列に変換する 
$wordsArray = explode(' ', $sentence);

// 配列の順序を逆にする 
$reversedArray = array_reverse($wordsArray);

// 配列を再びスペースで結合して新しい文章にする 
$reversedSentence = implode(' ', $reversedArray);

// 結果を出力 
echo "元の文章: " . $sentence . "<br>";
echo "単語を逆にした文章: " . $reversedSentence;