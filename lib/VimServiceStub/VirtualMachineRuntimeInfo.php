<?php
namespace VimServiceStub;

class VirtualMachineRuntimeInfo{
var $device;//VirtualMachineDeviceRuntimeInfo
var $host;//ManagedObjectReference
var $connectionState;//VirtualMachineConnectionState
var $powerState;//VirtualMachinePowerState
var $faultToleranceState;//VirtualMachineFaultToleranceState
var $dasVmProtection;//VirtualMachineRuntimeInfoDasProtectionState
var $toolsInstallerMounted;//boolean
var $suspendTime;//dateTime
var $bootTime;//dateTime
var $suspendInterval;//long
var $question;//VirtualMachineQuestionInfo
var $memoryOverhead;//long
var $maxCpuUsage;//int
var $maxMemoryUsage;//int
var $numMksConnections;//int
var $recordReplayState;//VirtualMachineRecordReplayState
var $cleanPowerOff;//boolean
var $needSecondaryReason;//string
var $minRequiredEVCModeKey;//string
var $consolidationNeeded;//boolean
}