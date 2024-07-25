<?php

//Working with filesystem

$dir = scandir(__DIR__);
var_dump($dir);

/*
array(28) {
  [0] =>
  string(1) "."
  [1] =>
  string(2) ".."
  [2] =>
  string(18) "0_Basic_Syntax.php"
  [3] =>
  string(16) "10_Operators.php"
  // .... etc
}
  
*/

var_dump(is_file($dir[2])); //bool(true)
var_dump(is_dir($dir[2])); //bool(false)

//mkdir('folder/bar'); // to create folder/bar 
//mkdir('folder/bar', recursive: true);  // to create folder/bar 
//mkdir('folder'); // to create folder
//rmdir('folder'); // to remove empty folder

if(file_exists('helper.txt')){
    echo filesize('helper.txt');  //0  b/c empty file

    file_put_contents("helper.txt", "hello\nworld");
   clearstatcache();
    echo filesize('helper.txt'); 
    /*
    // output
    //0 if we remove clearstatcache(); b/c  the first  echo filesize('helper.txt'); is cache and when we call again echo filesize('helper.txt'); then the previce data display
// 11 if we use clearstatcache();
    */
}else{
    echo 'file not found';
}

//or we can handel by set like this
//$file = @fopen('helper.txt', 'r');

$file = fopen('helper.txt', 'r');

var_dump($file);//resource(7) of type (stream)

while(($lins=fgets($file)) != false){
    echo $lins . "<br>";//hello
                      //world
}

$content = file_get_contents('helper.txt');
echo $content; //hello world

file_put_contents('helper1.txt','barry');

file_put_contents('helper1.txt','allen', FILE_APPEND);
 
//unlink('helper1.txt');  //to remove
//copy('helper.txt','helper1.txt');
//rename('helper.txt','helper1.txt');

fclose($file);
 