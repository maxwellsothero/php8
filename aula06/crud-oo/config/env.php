<?php
const DATABASE_FILE = 'dados.csv';
$databaseFilePath = dirname(__DIR__).'/'.DATABASE_FILE;

function loadFile(): array
{   
    global $databaseFilePath;
    return file($databaseFilePath);
}

function removeFile(): void
{
    global $databaseFilePath;
    unlink($databaseFilePath);
}

function openFile(): mixed
{
    global $databaseFilePath;
    return fopen($databaseFilePath,'a+');
}