<?php

function change_permissions($filename) {
    if (is_dir($filename))
        return "This Is Directory And Only Files Allowed<br>";

    $file_info = pathinfo($filename);
    
    if ($file_info['extension'] !== "txt")
        return "File Extension Is Not Txt<br>";

    chmod($filename, 0700);

    return "Permissions Changed<br>";
}

if (!file_exists("Elzero")) mkdir("Elzero");
touch("Work.docx");
touch("Result.txt");

// --- Test Cases ---
echo change_permissions("Elzero");     // Output: This Is Directory And Only Files Allowed
echo change_permissions("Work.docx");  // Output: File Extension Is Not Txt
echo change_permissions("Result.txt"); // Output: Permissions Changed
?>