<?php
namespace VimServiceStub;

class DistributedVirtualPort{
var $key;//string
var $config;//DVPortConfigInfo
var $dvsUuid;//string
var $portgroupKey;//string
var $proxyHost;//ManagedObjectReference
var $connectee;//DistributedVirtualSwitchPortConnectee
var $conflict;//boolean
var $conflictPortKey;//string
var $state;//DVPortState
var $connectionCookie;//int
var $lastStatusChange;//dateTime
}