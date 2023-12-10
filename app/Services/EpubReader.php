<?php

namespace App\Services;

use ePub\Reader;

class EpubReader
{   
    private $epub;
    private $chapters;

    public function setChapters() {
        $this->chapters = $this->epub->navigation->chapters;
    }

    public function getChapterFiles() {
        $chapterFiles = [];
        foreach($this->chapters as $chapter) {
            $chapterFiles[] = $chapter->src;
        }
        return $chapterFiles;
    }
    public function main() {
        $file_path = '/home/coder-eb/downloads/crime.epub';
        $reader = new Reader();
        $this->epub = $reader->load($file_path);
        return $this->epub;

        $this->setChapters();
        $chapterFiles = $this->getChapterFiles();
        return file_get_contents($chapterFiles[0]);
    

        return $this->epub;
    }
} 