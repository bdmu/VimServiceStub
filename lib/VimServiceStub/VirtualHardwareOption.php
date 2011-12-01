<?php
namespace VimServiceStub;

class VirtualHardwareOption{
var $hwVersion;//int
var $virtualDeviceOption;//VirtualDeviceOption
var $deviceListReadonly;//boolean
var $numCPU;//int
var $numCoresPerSocket;//IntOption
var $numCpuReadonly;//boolean
var $memoryMB;//LongOption
var $numPCIControllers;//IntOption
var $numIDEControllers;//IntOption
var $numUSBControllers;//IntOption
var $numUSBXHCIControllers;//IntOption
var $numSIOControllers;//IntOption
var $numPS2Controllers;//IntOption
var $licensingLimit;//string
var $numSupportedWwnPorts;//IntOption
var $numSupportedWwnNodes;//IntOption
var $resourceConfigOption;//ResourceConfigOption
}