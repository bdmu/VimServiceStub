<?php
namespace VimServiceStub;

class StoragePlacementSpec{
var $type;//string
var $priority;//VirtualMachineMovePriority
var $vm;//ManagedObjectReference
var $podSelectionSpec;//StorageDrsPodSelectionSpec
var $cloneSpec;//VirtualMachineCloneSpec
var $cloneName;//string
var $configSpec;//VirtualMachineConfigSpec
var $relocateSpec;//VirtualMachineRelocateSpec
var $resourcePool;//ManagedObjectReference
var $host;//ManagedObjectReference
var $folder;//ManagedObjectReference
}