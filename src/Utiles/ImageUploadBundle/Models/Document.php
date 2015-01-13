<?php

namespace Utiles\ImageUploadBundle\Models;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Entity
 */
class Document
{

    private $file;

    private $subDir;

    private $filePersistencePath;

    protected static $uploadDirectory = '%kernel.root_dir%/../uploads';

    static public function setUploadDirectory($dir)
    {
        self::$uploadDirectory = $dir;
    }

    static public function getUploadDirectory()
    {
        if (self::$uploadDirectory === null) {
            throw new \RuntimeException("Trying to access upload directory for profile files");
        }
        return self::$uploadDirectory;
    }

    public function setSubDirectory($dir)
    {
        $this->subDir = $dir;
    }

    public function getSubDirectory(){
        if($this->subDir === null){
            throw new \RuntimeException("Trying to access sub directory for profile files");
        }
        return $this->subDir;
    }

    public function setFile(File $file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return new File(self::getUploadDirectory() . "/" . $this->filePersistencePath);
    }

    public function getOriginalFileName()
    {
        return $this->file->getClientOriginalName();
    }

    public function getFilePersistencePath()
    {
        return $this->filePersistencePath;
    }

    public function processFile()
    {
        if (! ($this->file instanceof UploadedFile) ) {
            return false;
        }
        $uploadFileMover = new UploadFileMover();
        $this->filePersistencePath = $uploadFileMover->moveUploadedFile($this->file, self::getUploadDirectory());
    }
}