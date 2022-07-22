<?php


namespace App\Services\StorageService;


class DemoStorageService implements IStorageService {
    public function createFile(string $fileName)
    {
        var_dump("create new file {$fileName}");
    }

    public function renameFile(string $oldFileName, string $newFileName)
    {
        var_dump("rename file {$newFileName} from {$oldFileName}");
    }
    public function removeFile(string $fileName)
    {
        var_dump("remove file {$fileName}");
    }
}
