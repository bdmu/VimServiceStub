<?php
namespace VimServiceStub;

class ClusterDasConfigInfo{
var $enabled;//boolean
var $vmMonitoring;//string
var $hostMonitoring;//string
var $failoverLevel;//int
var $admissionControlPolicy;//ClusterDasAdmissionControlPolicy
var $admissionControlEnabled;//boolean
var $defaultVmSettings;//ClusterDasVmSettings
var $option;//OptionValue
var $heartbeatDatastore;//ManagedObjectReference
var $hBDatastoreCandidatePolicy;//string
}