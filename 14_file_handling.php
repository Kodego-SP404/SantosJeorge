<?php

/* ---------- File Handling --------- */

/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
 */

$file = "text.txt";

if (file_exists($file)) {
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    // fread() reads the file and returns the content as a string on success, or FALSE on failure.
    // fclose() closes the file resource on success, or FALSE on failure.
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, "w");

    $contents = "William " . PHP_EOL . "Jestoni" . PHP_EOL . "Reyn" . PHP_EOL . "Ryan";
    fwrite($handle, $contents);
    fclose($handle);
}

/*
r    - Open a file for read only. File pointer starts at the beginning of the file
w    - Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a    - Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x    - Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -    Open a file for read/write. File pointer starts at the beginning of the file
w+ -    Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -    Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+    - Creates a new file for read/write. Returns FALSE and an error if file already exists
 */