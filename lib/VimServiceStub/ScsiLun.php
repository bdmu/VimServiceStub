<?php
namespace VimServiceStub;

class ScsiLun{
var $key;//string
var $uuid;//string
var $descriptor;//ScsiLunDescriptor
var $canonicalName;//string
var $displayName;//string
var $lunType;//string
var $vendor;//string
var $model;//string
var $revision;//string
var $scsiLevel;//int
var $serialNumber;//string
var $durableName;//ScsiLunDurableName
var $alternateName;//ScsiLunDurableName
var $standardInquiry;//byte
var $queueDepth;//int
var $operationalState;//string
var $capabilities;//ScsiLunCapabilities
var $vStorageSupport;//string
}