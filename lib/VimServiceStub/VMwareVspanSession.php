<?php
namespace VimServiceStub;

class VMwareVspanSession{
var $key;//string
var $name;//string
var $description;//string
var $enabled;//boolean
var $sourcePortTransmitted;//VMwareVspanPort
var $sourcePortReceived;//VMwareVspanPort
var $destinationPort;//VMwareVspanPort
var $encapsulationVlanId;//int
var $stripOriginalVlan;//boolean
var $mirroredPacketLength;//int
var $normalTrafficAllowed;//boolean
}