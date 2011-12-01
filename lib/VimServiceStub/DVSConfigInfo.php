<?php
namespace VimServiceStub;

class DVSConfigInfo{
var $uuid;//string
var $name;//string
var $numStandalonePorts;//int
var $numPorts;//int
var $maxPorts;//int
var $uplinkPortPolicy;//DVSUplinkPortPolicy
var $uplinkPortgroup;//ManagedObjectReference
var $defaultPortConfig;//DVPortSetting
var $host;//DistributedVirtualSwitchHostMember
var $productInfo;//DistributedVirtualSwitchProductSpec
var $targetInfo;//DistributedVirtualSwitchProductSpec
var $extensionKey;//string
var $vendorSpecificConfig;//DistributedVirtualSwitchKeyedOpaqueBlob
var $policy;//DVSPolicy
var $description;//string
var $configVersion;//string
var $contact;//DVSContactInfo
var $switchIpAddress;//string
var $createTime;//dateTime
var $networkResourceManagementEnabled;//boolean
}