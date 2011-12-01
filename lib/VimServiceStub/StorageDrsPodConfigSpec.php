<?php
namespace VimServiceStub;

class StorageDrsPodConfigSpec{
var $enabled;//boolean
var $ioLoadBalanceEnabled;//boolean
var $defaultVmBehavior;//string
var $loadBalanceInterval;//int
var $defaultIntraVmAffinity;//boolean
var $spaceLoadBalanceConfig;//StorageDrsSpaceLoadBalanceConfig
var $ioLoadBalanceConfig;//StorageDrsIoLoadBalanceConfig
var $rule;//ClusterRuleSpec
var $option;//StorageDrsOptionSpec
}