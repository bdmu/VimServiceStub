<?php
namespace VimServiceStub;

class VirtualMachineConfigOption{
var $version;//string
var $description;//string
var $guestOSDescriptor;//GuestOsDescriptor
var $guestOSDefaultIndex;//int
var $hardwareOptions;//VirtualHardwareOption
var $capabilities;//VirtualMachineCapability
var $datastore;//DatastoreOption
var $defaultDevice;//VirtualDevice
var $supportedMonitorType;//string
var $supportedOvfEnvironmentTransport;//string
var $supportedOvfInstallTransport;//string
}