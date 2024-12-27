<?php
function errorDetect($data)
{
    $jmlhNum1 = 0;
    $index = 0;
    while (isset($data[$index])) {
        if ($data[$index] == "1") {
            $jmlhNum1 += 1;
        }
        $index++;
    }

    if ($jmlhNum1 % 2 == 0) {

        $paritas = 0;

        $str = $data;

        $d = str_split((string)$str);


        echo "Word Diterima: " . implode("", $d) . $paritas . PHP_EOL;

        echo "*** TRANSMISSION SUCCEEDED ***".PHP_EOL;
    } else if ($jmlhNum1 % 2 == 1) {

        $paritas = 1;

        $str = $data;

        $d = str_split((string)$str);

        echo "Word Diterima: " . implode("", $d) . $paritas . PHP_EOL;

        echo "*** TRANSMISSION ERROR ***".PHP_EOL;;
    }
}
