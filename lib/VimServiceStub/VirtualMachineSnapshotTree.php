<?php
namespace VimServiceStub;

class VirtualMachineSnapshotTree{
var $snapshot;//ManagedObjectReference
var $vm;//ManagedObjectReference
var $name;//string
var $description;//string
var $id;//int
var $createTime;//dateTime
var $state;//VirtualMachinePowerState
var $quiesced;//boolean
var $backupManifest;//string
var $childSnapshotList;//VirtualMachineSnapshotTree
var $replaySupported;//boolean
}