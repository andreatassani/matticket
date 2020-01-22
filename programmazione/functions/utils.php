<?php
    class utils{
        public function uploadImage($img, $dir){
            $target_dir = $dir;
            $target_file = $target_dir . basename($img["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($img["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($img["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                $target_file = $target_dir.str_replace(" ","",$img["name"]);
                if (move_uploaded_file($img["tmp_name"], $target_file)) {
                    echo "The file ". basename( $img["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        public function getCategoryByGenre($genere){
            switch($genere){
                case 'cabaret' : return "teatro";
                case 'musical' : return "teatro";
                case 'partite' : return "sport";
                case 'manifestazioni' : return "sport";
                case 'internazionali' : return "musica";
                case 'italiane' : return "musica";
                case 'fotografia' : return "mostre";
                case 'pittura' : return "mostre";
            }
        }

        public function generateMapByPlace($place){
            $placeNoSpace = str_replace(" ","+",$place);
            $finalString = '<iframe src="http://maps.google.com/maps?q='.$placeNoSpace.'&z=10&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
            return $finalString;
        }

        public function generateDBdateANDtime($data, $n){
            $pieces = explode("T", $data);
            $pieces[1] = $pieces[1].':00.000000';
            if($n == 0){
                return $pieces[0];
            } else if($n == 1){
                return $pieces[1];
            }
        }

        public function getArrayOfPreferences($cabaret,$musical,$partite,$manifestazioni,$internazionali,$italiane,$fotografia,$pittura){
            if($cabaret == "on"){
            $array[0]=1;
            } else {
            $array[0]=0;
            }
            if($musical == "on"){
            $array[1]=1;
            } else {
            $array[1]=0;
            }
            if($partite == "on"){
            $array[2]=1;
            } else {
            $array[2]=0;
            }
            if($manifestazioni == "on"){
            $array[3]=1;
            } else {
            $array[3]=0;
            }
            if($internazionali == "on"){
            $array[4]=1;
            } else {
            $array[4]=0;
            }
            if($italiane == "on"){
            $array[5]=1;
            } else {
            $array[5]=0;
            }
            if($fotografia == "on"){
            $array[6]=1;
            } else {
            $array[6]=0;
            }
            if($pittura == "on"){
            $array[7]=1;
            } else {
            $array[7]=0;
            }
            var_dump($array);
            return $array;
        }
    }
?>