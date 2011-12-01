<?php
namespace VimServiceStub;

class Event{
var $key;//int
var $chainId;//int
var $createdTime;//dateTime
var $userName;//string
var $datacenter;//DatacenterEventArgument
var $computeResource;//ComputeResourceEventArgument
var $host;//HostEventArgument
var $vm;//VmEventArgument
var $ds;//DatastoreEventArgument
var $net;//NetworkEventArgument
var $dvs;//DvsEventArgument
var $fullFormattedMessage;//string
var $changeTag;//string
}