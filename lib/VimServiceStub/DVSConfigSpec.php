<?php
namespace VimServiceStub;

class DVSConfigSpec{
var $configVersion;//string
var $name;//string
var $numStandalonePorts;//int
var $maxPorts;//int
var $uplinkPortPolicy;//DVSUplinkPortPolicy
var $uplinkPortgroup;//ManagedObjectReference
var $defaultPortConfig;//DVPortSetting
var $host;//DistributedVirtualSwitchHostMemberConfigSpec
var $extensionKey;//string
var $description;//string
var $policy;//DVSPolicy
var $vendorSpecificConfig;//DistributedVirtualSwitchKeyedOpaqueBlob
var $contact;//DVSContactInfo
var $switchIpAddress;//string
}