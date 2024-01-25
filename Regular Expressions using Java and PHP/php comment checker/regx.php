<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $filePath = $_FILES['file']['tmp_name']; // retrieving the file path
        if (empty($filePath)) { // Check if path is exisits
            echo "Please add the file";
            return;
        } 
        $txt_file = fopen($filePath,'r');
        $text = fread($txt_file, filesize($filePath)); // reading text from file. 

        removeComments($text);

        fclose($txt_file);
    }

    /**
     * @param str contains text that was read from the file 
     * prints all invalid comments & the result text after removing comments. 
     */
    function removeComments($str) {
        $regExToRemoveValidCmt = '/\/\*[\s\S]*?\*\/|\/\/.*/';
        $result = preg_replace($regExToRemoveValidCmt, '', $str); // Remove all valid comments

        $invalidComment2 = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*\*\n))/'; // For multiline comment ending with **
        $invalidComment3 = '/\/[ X][\s\S]*?\*\/|\/\*[\s\S]*?[^X]\n/'; // For the mutiline comment that didt end and at start single slash without a star following. (Has to be done after removing valid comments)
        
        preg_match_all($invalidComment2, $str, $matches);
        $resultMatch2 = $matches;
        preg_match_all($invalidComment3, $result, $matches);
        $fArray = array_merge($resultMatch2, $matches);

        echo "##################################";
        echo "<br>";
        echo "<br>";
        echo "INVALID COMMENTS";
        echo "<br>";
        echo "<br>";
        echo "##################################";
        echo "<br>";
        echo "<br>";
        
        foreach ($fArray as &$value) {
            foreach ($value as &$value2) {
                echo "------------------------------";
                echo "<br>";
                echo '<PRE>'.$value2. '</PRE>';
                echo "------------------------------";
                echo "<br>";
            }
        }

        echo "##################################";
        echo "<br>";
        echo "<br>";
        echo "RESULT AFTER REMOVING COMMENTS";
        echo "<br>";
        echo "<br>";
        echo "##################################";
        echo "<br>";
        echo "<br>";
        echo '<PRE>'. $result .'</PRE>';
    }
?>