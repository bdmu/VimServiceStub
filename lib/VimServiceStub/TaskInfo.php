<?php
namespace VimServiceStub;

class TaskInfo{
var $key;//string
var $task;//ManagedObjectReference
var $description;//LocalizableMessage
var $name;//string
var $descriptionId;//string
var $entity;//ManagedObjectReference
var $entityName;//string
var $locked;//ManagedObjectReference
var $state;//TaskInfoState
var $cancelled;//boolean
var $cancelable;//boolean
var $error;//LocalizedMethodFault
var $result;//anyType
var $progress;//int
var $reason;//TaskReason
var $queueTime;//dateTime
var $startTime;//dateTime
var $completeTime;//dateTime
var $eventChainId;//int
var $changeTag;//string
var $parentTaskKey;//string
var $rootTaskKey;//string
}