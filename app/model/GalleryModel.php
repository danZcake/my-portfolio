<?php

class GalleryModel
{
    public function getGalleryImages($dbSrc)
    {
        $imgs = array();
        $res  = array();

        $filePath = "csvDB/" . $dbSrc . '.csv';

        if (!file_exists($filePath)) {
            die("CSV file not found: " . $filePath);
        }

        $file = fopen($filePath, "r") or die("Cannot open file");

        // First row = headers
        $templateArr = fgetcsv($file);

        if ($templateArr === false) {
            fclose($file);
            return []; // no headers, return empty
        }

        $index = 0;
        while (($elems = fgetcsv($file)) !== false) {
            $storageArray = array();

            for ($i = 0; $i < count($templateArr); $i++) {
                $storageArray[$templateArr[$i]] = isset($elems[$i]) ? $elems[$i] : null;
            }

            $res[$index++] = $storageArray;
        }

        fclose($file);

        foreach ($res as $value) {
            if (isset($value["rel"], $value["src"], $value["alt"])) {
                $imgs[] = array(
                    "rel" => $value["rel"],
                    "src" => $value["src"],
                    "alt" => $value["alt"]
                );
            }
        }

        return $imgs;
    }
}
