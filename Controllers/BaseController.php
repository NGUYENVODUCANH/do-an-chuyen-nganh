<?php

class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    /**
     * path name : folderName.fileName
     * Lấy từ sau thư mục View
     */
    protected function view($viewPath)
    {
        $viewPath = self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';
        die($viewPath);
        require($path);
    }
}