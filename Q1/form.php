<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['Username'];

        // photo
        $file = $_FILES['Photo'];

        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTmpLocation = $file['tmp_name'];
        $fileError = $file['error'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        // resume
        $file2 = $_FILES['Resume'];

        $fileName2 = $file2['name'];
        $fileType2 = $file2['type'];
        $fileTmpLocation2 = $file2['tmp_name'];
        $fileError2 = $file2['error'];

        $fileExt2 = explode('.', $fileName2);
        $fileActualExt2 = strtolower(end($fileExt2));

        // upload process
        $allowedExtns = array("png", "pdf");

        if (in_array($fileActualExt, $allowedExtns) && in_array($fileActualExt2, $allowedExtns)) {
            if ($fileError === 0 || $fileError2 === 0) {
                $fileDirectory = $username."/"."documents/";

                // photo upload
                $fileNameNew = "photo".".".$fileActualExt;
                $fileDestination = $fileDirectory.$fileNameNew;

                if (!is_dir($fileDirectory)) {
                    mkdir($fileDirectory, 0777, true);
                }

                move_uploaded_file($fileTmpLocation, $fileDestination);

                // resume upload
                $fileNameNew2 = "resume".".".$fileActualExt2;
                $fileDestination2 = $fileDirectory.$fileNameNew2;

                if (!is_dir($fileDirectory)) {
                    mkdir($fileDirectory, 0777, true);
                }

                move_uploaded_file($fileTmpLocation2, $fileDestination2);

                echo "Photo and Resume successfully uploaded to server at path - ".$fileDirectory;

            } else {
                echo "There was an error in uploading files";
            }
        } else {
            echo "Only PNG and PDF files are allowed";
        }
    }

?>