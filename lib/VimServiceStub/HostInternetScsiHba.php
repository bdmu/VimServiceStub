<?php
namespace VimServiceStub;

class HostInternetScsiHba{
var $isSoftwareBased;//boolean
var $canBeDisabled;//boolean
var $networkBindingSupport;//HostInternetScsiHbaNetworkBindingSupportType
var $discoveryCapabilities;//HostInternetScsiHbaDiscoveryCapabilities
var $discoveryProperties;//HostInternetScsiHbaDiscoveryProperties
var $authenticationCapabilities;//HostInternetScsiHbaAuthenticationCapabilities
var $authenticationProperties;//HostInternetScsiHbaAuthenticationProperties
var $digestCapabilities;//HostInternetScsiHbaDigestCapabilities
var $digestProperties;//HostInternetScsiHbaDigestProperties
var $ipCapabilities;//HostInternetScsiHbaIPCapabilities
var $ipProperties;//HostInternetScsiHbaIPProperties
var $supportedAdvancedOptions;//OptionDef
var $advancedOptions;//HostInternetScsiHbaParamValue
var $iScsiName;//string
var $iScsiAlias;//string
var $configuredSendTarget;//HostInternetScsiHbaSendTarget
var $configuredStaticTarget;//HostInternetScsiHbaStaticTarget
var $maxSpeedMb;//int
var $currentSpeedMb;//int
}