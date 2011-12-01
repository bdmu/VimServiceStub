<?php
namespace VimServiceStub;

class PhysicalNic{
var $key;//string
var $device;//string
var $pci;//string
var $driver;//string
var $linkSpeed;//PhysicalNicLinkInfo
var $validLinkSpecification;//PhysicalNicLinkInfo
var $spec;//PhysicalNicSpec
var $wakeOnLanSupported;//boolean
var $mac;//string
var $fcoeConfiguration;//FcoeConfig
var $vmDirectPathGen2Supported;//boolean
var $vmDirectPathGen2SupportedMode;//string
var $resourcePoolSchedulerAllowed;//boolean
var $resourcePoolSchedulerDisallowedReason;//string
var $autoNegotiateSupported;//boolean
}