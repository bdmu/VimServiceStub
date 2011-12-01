<?php
namespace VimServiceStub;

class KernelModuleInfo{
var $id;//int
var $name;//string
var $version;//string
var $filename;//string
var $optionString;//string
var $loaded;//boolean
var $enabled;//boolean
var $useCount;//int
var $readOnlySection;//KernelModuleSectionInfo
var $writableSection;//KernelModuleSectionInfo
var $textSection;//KernelModuleSectionInfo
var $dataSection;//KernelModuleSectionInfo
var $bssSection;//KernelModuleSectionInfo
}