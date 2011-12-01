<?php
namespace VimServiceStub;

class ScheduledTaskInfo{
var $scheduledTask;//ManagedObjectReference
var $entity;//ManagedObjectReference
var $lastModifiedTime;//dateTime
var $lastModifiedUser;//string
var $nextRunTime;//dateTime
var $prevRunTime;//dateTime
var $state;//TaskInfoState
var $error;//LocalizedMethodFault
var $result;//anyType
var $progress;//int
var $activeTask;//ManagedObjectReference
var $taskObject;//ManagedObjectReference
}