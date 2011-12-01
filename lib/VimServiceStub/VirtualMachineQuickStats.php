<?php
namespace VimServiceStub;

class VirtualMachineQuickStats{
var $overallCpuUsage;//int
var $overallCpuDemand;//int
var $guestMemoryUsage;//int
var $hostMemoryUsage;//int
var $guestHeartbeatStatus;//ManagedEntityStatus
var $distributedCpuEntitlement;//int
var $distributedMemoryEntitlement;//int
var $staticCpuEntitlement;//int
var $staticMemoryEntitlement;//int
var $privateMemory;//int
var $sharedMemory;//int
var $swappedMemory;//int
var $balloonedMemory;//int
var $consumedOverheadMemory;//int
var $ftLogBandwidth;//int
var $ftSecondaryLatency;//int
var $ftLatencyStatus;//ManagedEntityStatus
var $compressedMemory;//long
var $uptimeSeconds;//int
var $ssdSwappedMemory;//long
}