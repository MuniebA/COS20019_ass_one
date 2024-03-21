<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>File Uploader</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student_id" value="101233250">
    <input type="hidden" name="name" value="Munieb Awad ELsheikhidris">
    
    <label for="file_name">File Name:</label><br>
    <input type="text" id="file_name" name="file_name" value=""><br><br>
    
    <label for="file">Select a file:</label>
    <input type="file" id="file" name="file"><br><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
    
    <label for="date">Date:</label>
    <input type="text" id="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br><br>
    
    <label for="keywords">Keywords (separated by a semicolon):</label><br>
    <input type="text" id="keywords" name="keywords"><br><br>
    
    <input type="submit" name="submit" value="Upload">
</form>

<a href="get_files.php">File Manager</a>

</body>
</html>
