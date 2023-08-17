<?php
include "connection.php";

if (isset($_POST['submit'])) {
   switch ($_POST['submit']) {
      case 'staff':
         $staff_id = $_POST['staff_id'];
         $first_name = $_POST['first_name'];
         $surname = $_POST['surname'];
         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];;
         $type = $_POST['type'];
         $password = $_POST['password'];

         // Hash the password
         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         /* IMAGE UPLOAD END */
         if ($_FILES['profile_avatar']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['profile_avatar']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $profile_avatar = uniqid() . $_FILES['profile_avatar']['name'];
            $target = $targetDirectory . $profile_avatar;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         }

         $sql = "INSERT INTO `registration`( `staff_id`, `first_name`, `surname`, `profile_avatar`, `last_name`, `email`, `phone_number`, `password`, `gender`, `type`)
         value('$staff_id', '$first_name', '$surname', '$profile_avatar', '$last_name', '$email', '$phone_number', '$hashedPassword', '$gender', '$type')";

         $result = mysqli_query($con, $sql);

         if ($result) {
            header("location: ../../staffCreateView.php?status=Valid&message=Record%20Created%20Successfully");
            exit(0);
         } else {
            header("location: ../../staffCreateView.php?status=Invalid&message=Record%20Not%20Created");
            exit(0);
         }

         break;
      case 'staffUpdate':
         $id = $_GET['id'];
         $staff_id = $_POST['staff_id'];
         $first_name = $_POST['first_name'];
         $surname = $_POST['surname'];
         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];;
         $type = $_POST['type'];
         $password = $_POST['password'];
         $update = date("Y-m-d h:i:s A");
         // Hash the password
         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         // Check if a new image file was uploaded
         if ($_FILES['profile_avatar']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['profile_avatar']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $profile_avatar = uniqid() . $_FILES['profile_avatar']['name'];
            $target = $targetDirectory . $profile_avatar;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         } else {
            // Use the existing image name from the database
            $sql = "SELECT * FROM registration WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $profile_avatar = $row['profile_avatar'];
         }

         if (!empty($password)) {
            $sql = "UPDATE `registration` SET  `staff_id`='$staff_id',  `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender',`phone_number`='$phone_number', `email`='$email',   `password`='$hashedPassword',`profile_avatar`='$profile_avatar', `type`='$type', `updated_at`='$update' WHERE id=$id";
         } else {
            $sql = "UPDATE `registration` SET  `staff_id`='$staff_id',  `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender',`phone_number`='$phone_number', `email`='$email', `profile_avatar`='$profile_avatar', `type`='$type',`updated_at`='$update' WHERE id=$id";
         }

         $result = mysqli_query($con, $sql);

         if ($result) {
            header("location: ../../staffUpdateView.php?id=$id&status=Valid&message=Record%20Updated%20Successfully");
            exit(0);
         } else {
            header("location: ../../staffUpdateView.php?id=$id&status=Invalid&message=Record%20Not%20Updated");
            exit(0);
         }
         break;

      case 'profile':
         $id = $_POST['id'];
         $req_id = $_POST['staff_id'];
         $staff_id = $_POST['staff_id'];
         $first_name = $_POST['first_name'];
         $surname = $_POST['surname'];
         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];
         $type = $_POST['type'];
         $profile_avatar = '';

         $password = $_POST['password'];
         $update = date("Y-m-d h:i:s A");

         // Hash the password

         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         // Check if a new image file was uploaded
         if ($_FILES['profile_avatar']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['profile_avatar']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $profile_avatar = uniqid() . $_FILES['profile_avatar']['name'];
            $target = $targetDirectory . $profile_avatar;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         } else {
            // Use the existing image name from the database
            $sql = "SELECT * FROM registration WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $profile_avatar = $row['profile_avatar'];
         }

         if (!empty($password)) {
            $sql = "UPDATE `registration` SET  `staff_id`='$staff_id',  `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender',`phone_number`='$phone_number', `email`='$email',   `password`='$hashedPassword',`profile_avatar`='$profile_avatar', `type`='$type', `updated_at`='$update' WHERE staff_id=$req_id";
         } else {
            $sql = "UPDATE `registration` SET  `staff_id`='$staff_id',  `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender',`phone_number`='$phone_number', `email`='$email', `profile_avatar`='$profile_avatar', `type`='$type',`updated_at`='$update' WHERE staff_id=$req_id";
         }

         $result = mysqli_query($con, $sql);

         if ($result) {
            if ($type == "Executive") {
               header("location: ../../eprofileView.php?id=$id&status=Valid&message=Profile%20Updated%20Successfully");
            } elseif ($type == "Admin") {
               header("location: ../../sprofileView.php?id=$id&status=Valid&message=Profile%20Updated%20Successfully");
            }
         } else {
            header("location: ../../dashboard.php?id=$id&status=Invalid&message=Profile%20Not%20Updated");
         }
         break;
      case 'applicant':
         $applicant_id = $_POST['applicant_id'];
         $title = $_POST['title'];
         $first_name = $_POST['first_name'];
         $surname = $_POST['surname'];

         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $date_of_birth = $_POST['date_of_birth'];
         $country = $_POST['country'];

         $state = $_POST['state'];
         $city = $_POST['city'];
         $ward = $_POST['ward'];
         $polling_unit = $_POST['polling_unit'];

         $residential_address = $_POST['residential_address'];
         $address = $_POST['address'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];
         $identification = $_POST['identification'];
         $qualification = $_POST['qualifications'];
         $name_of_school = $_POST['name_of_school'];
         $course = $_POST['course'];
         $other_course = $_POST['other_course'];
         $date_of_award = $_POST['date_of_award'];

         $password = $_POST['password'];
         // Hash the password
         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         $no_of_credits = $_POST['no_of_credits'];
         $name_of_kin = $_POST['name_of_kin'];
         $relationship_kin = $_POST['relationship_kin'];

         /* IMAGE UPLOAD END */
         if ($_FILES['profile_avatar']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['profile_avatar']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $profile_avatar = uniqid() . $_FILES['profile_avatar']['name'];
            $target = $targetDirectory . $profile_avatar;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         }

         /* IMAGE UPLOAD END */
         if ($_FILES['id_photo']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['id_photo']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $id_photo = uniqid() . $_FILES['id_photo']['name'];
            $target = $targetDirectory . $id_photo;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['id_photo']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         }

         $marital_status = $_POST['marital_status'];
         $kin_address = $_POST['kin_address'];
         $kin_phone = $_POST['kin_phone'];

         $sql = "INSERT INTO `applicants`( `applicant_id`, `title`, `first_name`, `surname`, `profile_avatar`, `id_photo`,`last_name`, `gender`, `date_of_birth`, `country`, `state`, `city`, `ward`, `polling_unit`, `residential_address`, `address`, `phone_number`, `email`, `identification`, `qualifications`, `name_of_school`, `course`, `other_course`, `date_of_award`, `password`, `no_of_credits`,`name_of_kin`, `relationship_kin`, `marital_status`, `kin_address`, `kin_phone`)
         value('$applicant_id', '$title', '$first_name', '$surname', '$profile_avatar', '$id_photo', '$last_name', '$gender', '$date_of_birth', '$country', '$state', '$city', '$ward', '$polling_unit', '$residential_address', '$address', '$phone_number', '$email', '$identification', '$qualification', '$name_of_school', '$course', '$other_course', '$date_of_award', '$hashedPassword', '$no_of_credits', '$name_of_kin', '$relationship_kin', '$marital_status', '$kin_address', '$kin_phone')";

         $result = mysqli_query($con, $sql);

         if ($result) {
            header("location: ../../applicantCreateView.php?status=Valid&message=Record%20Created%20Successfully");
            exit(0);
         } else {
            header("location: ../../applicantCreateView.php?status=Invalid&message=Record%20Not%20Created");
            exit(0);
         }
         break;

      case 'applicantUpdate':
         $MainApp = $_POST['MainApp'];
         $id = $_POST['id'];
         $applicant_id = $_POST['applicant_id'];
         $title = $_POST['title'];
         $first_name = $_POST['first_name'];
         $surname = $_POST['surname'];

         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $date_of_birth = $_POST['date_of_birth'];
         $country = $_POST['country'];

         $state = $_POST['state'];
         $city = $_POST['city'];
         $ward = $_POST['ward'];
         $polling_unit = $_POST['polling_unit'];

         $residential_address = $_POST['residential_address'];
         $address = $_POST['address'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];
         $identification = $_POST['identification'];
         $qualifications = $_POST['qualifications'];
         $name_of_school = $_POST['name_of_school'];
         $course = $_POST['course'];
         $other_course = $_POST['other_course'];
         $date_of_award = $_POST['date_of_award'];

         $password = $_POST['password'];
         // Hash the password
         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         $no_of_credits = $_POST['no_of_credits'];
         $name_of_kin = $_POST['name_of_kin'];
         $relationship_kin = $_POST['relationship_kin'];

         /* IMAGE UPLOAD END */
         if ($_FILES['profile_avatar']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['profile_avatar']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $profile_avatar = uniqid() . $_FILES['profile_avatar']['name'];
            $target = $targetDirectory . $profile_avatar;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         } else {
            // Use the existing image name from the database
            $sql = "SELECT * FROM applicants WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $profile_avatar = $row['profile_avatar'];
         }

         /* IMAGE UPLOAD END */
         if ($_FILES['id_photo']['size'] > 0) {
            // Get the temporary file path
            $tmpFilePath = $_FILES['id_photo']['tmp_name'];

            // Maximum file size in bytes (e.g., 1MB = 1048576 bytes)
            $maxFileSize = 105; // Adjust this value as per your requirements

            // Define the target directory and file path
            $targetDirectory = '../../assets/images/';
            $id_photo = uniqid() . $_FILES['id_photo']['name'];
            $target = $targetDirectory . $id_photo;

            // Load the image based on its file type
            $extension = pathinfo($_FILES['id_photo']['name'], PATHINFO_EXTENSION);

            if ($extension === 'png') {
               $originalImage = imagecreatefrompng($tmpFilePath);
            } elseif (in_array($extension, ['jpg', 'jpeg'])) {
               $originalImage = imagecreatefromjpeg($tmpFilePath);
            } else {
               // Invalid file format
               die('Invalid file format.');
            }

            // Maximum dimensions for the resized image
            $maxWidth = 800; // Adjust as needed
            $maxHeight = 800; // Adjust as needed

            // Get the original image dimensions
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            // Calculate the new dimensions while maintaining aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;

            if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
               if ($aspectRatio > ($maxWidth / $maxHeight)) {
                  $newWidth = $maxWidth;
                  $newHeight = $maxWidth / $aspectRatio;
               } else {
                  $newHeight = $maxHeight;
                  $newWidth = $maxHeight * $aspectRatio;
               }
            }

            // Create a new image with the resized dimensions
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

            // Compress the image by reducing the quality until the file size is below the maximum
            $compressedImage = $resizedImage;
            $quality = 80; // Initial quality value (adjust as needed)
            $compressedFilePath = $tmpFilePath; // Temporary file path

            while (filesize($compressedFilePath) > $maxFileSize && $quality > 10) {
               // Reduce the image quality
               $quality -= 10;

               // Save the compressed image to a temporary file
               switch ($extension) {
                  case 'jpg':
                  case 'jpeg':
                     imagejpeg($compressedImage, $compressedFilePath, $quality);
                     break;
                  case 'png':
                     imagepng($compressedImage, $compressedFilePath, 9 - (int)($quality / 10));
                     break;
               }
            }

            // Move the final compressed image to the target directory
            move_uploaded_file($compressedFilePath, $target);

            // Free up memory by destroying the images
            imagedestroy($originalImage);
            imagedestroy($resizedImage);
            imagedestroy($compressedImage);
         } else {
            // Use the existing image name from the database
            $sql = "SELECT * FROM applicants WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $id_photo = $row['id_photo'];
         }

         $marital_status = $_POST['marital_status'];
         $kin_address = $_POST['kin_address'];
         $kin_phone = $_POST['kin_phone'];

         if (!empty($password)) {
            $sql = "UPDATE `applicants` SET  `applicant_id`='$applicant_id', `title`='$title', `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender', `date_of_birth`='$date_of_birth', `country`='$country', `state`='$state', `city`='$city', `ward`='$ward', `polling_unit`='$polling_unit',`residential_address`='$residential_address', `address`='$address', `phone_number`='$phone_number', `email`='$email', `identification`='$identification', `qualifications`='$qualifications', `name_of_school`='$name_of_school', `course`='$course', `other_course`='$other_course', `date_of_award`='$date_of_award', `password`='$hashedPassword', `no_of_credits`='$no_of_credits', `name_of_kin`='$name_of_kin', `relationship_kin`='$relationship_kin',  `profile_avatar`='$profile_avatar', `id_photo`='$id_photo', `marital_status`='$marital_status', `kin_address`='$kin_address', `kin_phone`='$kin_phone' WHERE id=$id";
         } else {
            $sql = "UPDATE `applicants` SET  `applicant_id`='$applicant_id', `title`='$title', `first_name`='$first_name', `surname`='$surname', `last_name`='$last_name', `gender`='$gender', `date_of_birth`='$date_of_birth', `country`='$country', `state`='$state', `city`='$city', `ward`='$ward', `polling_unit`='$polling_unit',`residential_address`='$residential_address', `address`='$address', `phone_number`='$phone_number', `email`='$email', `identification`='$identification', `qualifications`='$qualifications', `name_of_school`='$name_of_school', `course`='$course', `other_course`='$other_course', `date_of_award`='$date_of_award', `no_of_credits`='$no_of_credits', `name_of_kin`='$name_of_kin', `relationship_kin`='$relationship_kin',  `profile_avatar`='$profile_avatar', `id_photo`='$id_photo', `marital_status`='$marital_status', `kin_address`='$kin_address', `kin_phone`='$kin_phone' WHERE id=$id";
         }


         $result = mysqli_query($con, $sql);

         if ($result) {
            if ($MainApp = 'main') {
               header("location: ../../aapplicantUpdateView.php?id=$id&status=Valid&message=Record%20Updated%20Successfully");
            }else {
               header("location: ../../applicantUpdateView.php?id=$id&status=Valid&message=Record%20Updated%20Successfully");
            }
            exit(0);
         } else {
            if ($MainApp = 'main') {
               header("location: ../../aapplicantUpdateView.php?id=$id&status=Invalid&message=Record%20Not%20Updated");
            }else {
               header("location: ../../applicantUpdateView.php?id=$id&status=Invalid&message=Record%20Not%20Updated");
            }
            exit(0);
         }

         break;
      
      default:

         break;
   }
}
