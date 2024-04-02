<?php
 = "/var/www/html/customer_uploads/";
 =  . basename(["fileUpload"]["name"]);
 = 1;
 = strtolower(pathinfo(, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists()) {
    echo "Sorry, file already exists.";
     = 0;
}

// Check file size (you can adjust this as needed)
if (["fileUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
     = 0;
}

// Allow only certain file formats (you can adjust this as needed)
if ( != "jpg" &&  != "png" &&  != "jpeg"
    &&  != "gif" &&  != "pdf") {
    echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
     = 0;
}

// Check if  is set to 0 by an error
if ( == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file(["fileUpload"]["tmp_name"], )) {
        echo "The file " . basename(["fileUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
