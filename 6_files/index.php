<?php
    $path ='dir1/myfile.php'; 
    $file = 'file1.txt';
/*
    //return filename
    echo basename($path);

    //return filename without ext
    echo basename($path, '.php');

    //return the dir name from path
    echo dirname($path);

    //Check if file exists
    echo file_exists('file.txt');

    //get absolute path
    echo realpath($file);

    //check to see if file
    echo is_file($file);

    //check if writable
    echo is_writable($file);

    
    //is readable
    echo is_readable($file);
    
    //get filesize
    echo filesize($file);

    //create a directory
    mkdir('testing');

    //remove dir if empty
    rmdir('testing');

        //copy file
    echo copy('file1.txt', 'file2.txt');

    //rename file
    rename('myfile.txt', 'myfile3.txt');

    //delete file
    unlink('myfile3.txt');


    //Write from file to string
    echo file_get_contents($file);

    //Write string to file (replace)
    echo file_put_contents($file, 'Godbye World');

    //připsání
    $current = file_get_contents($file);
    $current .= ' Goodbye World';
    file_put_contents($file, $current);

  //  Open file for reading
    $handle = fopen($file, 'r');                //do $handle vepíšu funkce otevřít soubor (soubor, 'ke čtení)
    $data = fread($handle, filesize($file));    //do $data uložím přečtené z handlu a velkost souboru
    echo $data;
  */
    //open file for writing
    
    $handle = fopen('file2.txt', 'w');   // vztvoření a otevření doc ke psaní
    $txt = "John Doe\n";                  //proměnná text 9co chci napsat
    fwrite($handle, $txt);              //vepsání $txt do dokumentu
    $txt = 'Steve Smith';   
    fwrite($handle, $txt);
    fclose($handle);                    //uzav5ření doc



