<?php


namespace App\Services\StorageService;


interface IStorageService {
    public function createFile(string $fileName);
    public function renameFile(string $oldFileName, string $newFileName);
    public function removeFile(string $fileName);
}