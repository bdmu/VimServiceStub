<?php
namespace VimServiceStub;

class ConfigTarget{
var $numCpus;//int
var $numCpuCores;//int
var $numNumaNodes;//int
var $smcPresent;//boolean
var $datastore;//VirtualMachineDatastoreInfo
var $network;//VirtualMachineNetworkInfo
var $distributedVirtualPortgroup;//DistributedVirtualPortgroupInfo
var $distributedVirtualSwitch;//DistributedVirtualSwitchInfo
var $cdRom;//VirtualMachineCdromInfo
var $serial;//VirtualMachineSerialInfo
var $parallel;//VirtualMachineParallelInfo
var $sound;//VirtualMachineSoundInfo
var $usb;//VirtualMachineUsbInfo
var $floppy;//VirtualMachineFloppyInfo
var $legacyNetworkInfo;//VirtualMachineLegacyNetworkSwitchInfo
var $scsiPassthrough;//VirtualMachineScsiPassthroughInfo
var $scsiDisk;//VirtualMachineScsiDiskDeviceInfo
var $ideDisk;//VirtualMachineIdeDiskDeviceInfo
var $maxMemMBOptimalPerf;//int
var $resourcePool;//ResourcePoolRuntimeInfo
var $autoVmotion;//boolean
var $pciPassthrough;//VirtualMachinePciPassthroughInfo
}