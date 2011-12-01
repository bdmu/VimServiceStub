<?php
namespace VimServiceStub;

class HostListSummary{
var $host;//ManagedObjectReference
var $hardware;//HostHardwareSummary
var $runtime;//HostRuntimeInfo
var $config;//HostConfigSummary
var $quickStats;//HostListSummaryQuickStats
var $overallStatus;//ManagedEntityStatus
var $rebootRequired;//boolean
var $customValue;//CustomFieldValue
var $managementServerIp;//string
var $maxEVCModeKey;//string
var $currentEVCModeKey;//string
}