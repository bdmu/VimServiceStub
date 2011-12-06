<?php

namespace VimServiceStub;



class VimService 
 {
 var $soapClient;
 
private static $classmap = array('DynamicArray'=>'VimServiceStub\DynamicArray'
,'DynamicData'=>'VimServiceStub\DynamicData'
,'DynamicProperty'=>'VimServiceStub\DynamicProperty'
,'ArrayOfDynamicProperty'=>'VimServiceStub\ArrayOfDynamicProperty'
,'KeyAnyValue'=>'VimServiceStub\KeyAnyValue'
,'ArrayOfKeyAnyValue'=>'VimServiceStub\ArrayOfKeyAnyValue'
,'LocalizableMessage'=>'VimServiceStub\LocalizableMessage'
,'ArrayOfLocalizableMessage'=>'VimServiceStub\ArrayOfLocalizableMessage'
,'HostCommunication'=>'VimServiceStub\HostCommunication'
,'HostNotConnected'=>'VimServiceStub\HostNotConnected'
,'HostNotReachable'=>'VimServiceStub\HostNotReachable'
,'InvalidArgument'=>'VimServiceStub\InvalidArgument'
,'InvalidRequest'=>'VimServiceStub\InvalidRequest'
,'InvalidType'=>'VimServiceStub\InvalidType'
,'ManagedObjectNotFound'=>'VimServiceStub\ManagedObjectNotFound'
,'MethodNotFound'=>'VimServiceStub\MethodNotFound'
,'NotEnoughLicenses'=>'VimServiceStub\NotEnoughLicenses'
,'NotImplemented'=>'VimServiceStub\NotImplemented'
,'NotSupported'=>'VimServiceStub\NotSupported'
,'RequestCanceled'=>'VimServiceStub\RequestCanceled'
,'SecurityError'=>'VimServiceStub\SecurityError'
,'SystemError'=>'VimServiceStub\SystemError'
,'UnexpectedFault'=>'VimServiceStub\UnexpectedFault'
,'LocalizedMethodFault'=>'VimServiceStub\LocalizedMethodFault'
,'MethodFault'=>'VimServiceStub\MethodFault'
,'ArrayOfMethodFault'=>'VimServiceStub\ArrayOfMethodFault'
,'RuntimeFault'=>'VimServiceStub\RuntimeFault'
,'ManagedObjectReference'=>'VimServiceStub\ManagedObjectReference'
,'ArrayOfString'=>'VimServiceStub\ArrayOfString'
,'ArrayOfAnyType'=>'VimServiceStub\ArrayOfAnyType'
,'ArrayOfManagedObjectReference'=>'VimServiceStub\ArrayOfManagedObjectReference'
,'ArrayOfBoolean'=>'VimServiceStub\ArrayOfBoolean'
,'ArrayOfByte'=>'VimServiceStub\ArrayOfByte'
,'ArrayOfInt'=>'VimServiceStub\ArrayOfInt'
,'ArrayOfLong'=>'VimServiceStub\ArrayOfLong'
,'ArrayOfShort'=>'VimServiceStub\ArrayOfShort'
,'InvalidCollectorVersion'=>'VimServiceStub\InvalidCollectorVersion'
,'InvalidProperty'=>'VimServiceStub\InvalidProperty'
,'PropertyFilterSpec'=>'VimServiceStub\PropertyFilterSpec'
,'ArrayOfPropertyFilterSpec'=>'VimServiceStub\ArrayOfPropertyFilterSpec'
,'PropertySpec'=>'VimServiceStub\PropertySpec'
,'ArrayOfPropertySpec'=>'VimServiceStub\ArrayOfPropertySpec'
,'ObjectSpec'=>'VimServiceStub\ObjectSpec'
,'ArrayOfObjectSpec'=>'VimServiceStub\ArrayOfObjectSpec'
,'SelectionSpec'=>'VimServiceStub\SelectionSpec'
,'ArrayOfSelectionSpec'=>'VimServiceStub\ArrayOfSelectionSpec'
,'TraversalSpec'=>'VimServiceStub\TraversalSpec'
,'ObjectContent'=>'VimServiceStub\ObjectContent'
,'ArrayOfObjectContent'=>'VimServiceStub\ArrayOfObjectContent'
,'UpdateSet'=>'VimServiceStub\UpdateSet'
,'PropertyFilterUpdate'=>'VimServiceStub\PropertyFilterUpdate'
,'ArrayOfPropertyFilterUpdate'=>'VimServiceStub\ArrayOfPropertyFilterUpdate'
,'ObjectUpdate'=>'VimServiceStub\ObjectUpdate'
,'ArrayOfObjectUpdate'=>'VimServiceStub\ArrayOfObjectUpdate'
,'PropertyChange'=>'VimServiceStub\PropertyChange'
,'ArrayOfPropertyChange'=>'VimServiceStub\ArrayOfPropertyChange'
,'MissingProperty'=>'VimServiceStub\MissingProperty'
,'ArrayOfMissingProperty'=>'VimServiceStub\ArrayOfMissingProperty'
,'MissingObject'=>'VimServiceStub\MissingObject'
,'ArrayOfMissingObject'=>'VimServiceStub\ArrayOfMissingObject'
,'WaitOptions'=>'VimServiceStub\WaitOptions'
,'RetrieveOptions'=>'VimServiceStub\RetrieveOptions'
,'RetrieveResult'=>'VimServiceStub\RetrieveResult'
,'DestroyPropertyFilterRequestType'=>'VimServiceStub\DestroyPropertyFilterRequestType'
,'CreateFilterRequestType'=>'VimServiceStub\CreateFilterRequestType'
,'RetrievePropertiesRequestType'=>'VimServiceStub\RetrievePropertiesRequestType'
,'CheckForUpdatesRequestType'=>'VimServiceStub\CheckForUpdatesRequestType'
,'WaitForUpdatesRequestType'=>'VimServiceStub\WaitForUpdatesRequestType'
,'CancelWaitForUpdatesRequestType'=>'VimServiceStub\CancelWaitForUpdatesRequestType'
,'WaitForUpdatesExRequestType'=>'VimServiceStub\WaitForUpdatesExRequestType'
,'RetrievePropertiesExRequestType'=>'VimServiceStub\RetrievePropertiesExRequestType'
,'ContinueRetrievePropertiesExRequestType'=>'VimServiceStub\ContinueRetrievePropertiesExRequestType'
,'CancelRetrievePropertiesExRequestType'=>'VimServiceStub\CancelRetrievePropertiesExRequestType'
,'CreatePropertyCollectorRequestType'=>'VimServiceStub\CreatePropertyCollectorRequestType'
,'DestroyPropertyCollectorRequestType'=>'VimServiceStub\DestroyPropertyCollectorRequestType'
,'AboutInfo'=>'VimServiceStub\AboutInfo'
,'AuthorizationDescription'=>'VimServiceStub\AuthorizationDescription'
,'Permission'=>'VimServiceStub\Permission'
,'ArrayOfPermission'=>'VimServiceStub\ArrayOfPermission'
,'AuthorizationRole'=>'VimServiceStub\AuthorizationRole'
,'ArrayOfAuthorizationRole'=>'VimServiceStub\ArrayOfAuthorizationRole'
,'AuthorizationPrivilege'=>'VimServiceStub\AuthorizationPrivilege'
,'ArrayOfAuthorizationPrivilege'=>'VimServiceStub\ArrayOfAuthorizationPrivilege'
,'BoolPolicy'=>'VimServiceStub\BoolPolicy'
,'Capability'=>'VimServiceStub\Capability'
,'ClusterComputeResourceSummary'=>'VimServiceStub\ClusterComputeResourceSummary'
,'ComputeResourceSummary'=>'VimServiceStub\ComputeResourceSummary'
,'ComputeResourceConfigInfo'=>'VimServiceStub\ComputeResourceConfigInfo'
,'ComputeResourceHostSPBMLicenseInfo'=>'VimServiceStub\ComputeResourceHostSPBMLicenseInfo'
,'ArrayOfComputeResourceHostSPBMLicenseInfo'=>'VimServiceStub\ArrayOfComputeResourceHostSPBMLicenseInfo'
,'ComputeResourceConfigSpec'=>'VimServiceStub\ComputeResourceConfigSpec'
,'CustomFieldDef'=>'VimServiceStub\CustomFieldDef'
,'ArrayOfCustomFieldDef'=>'VimServiceStub\ArrayOfCustomFieldDef'
,'CustomFieldValue'=>'VimServiceStub\CustomFieldValue'
,'ArrayOfCustomFieldValue'=>'VimServiceStub\ArrayOfCustomFieldValue'
,'CustomFieldStringValue'=>'VimServiceStub\CustomFieldStringValue'
,'CustomizationSpecInfo'=>'VimServiceStub\CustomizationSpecInfo'
,'ArrayOfCustomizationSpecInfo'=>'VimServiceStub\ArrayOfCustomizationSpecInfo'
,'CustomizationSpecItem'=>'VimServiceStub\CustomizationSpecItem'
,'DatastoreSummary'=>'VimServiceStub\DatastoreSummary'
,'DatastoreInfo'=>'VimServiceStub\DatastoreInfo'
,'DatastoreCapability'=>'VimServiceStub\DatastoreCapability'
,'DatastoreHostMount'=>'VimServiceStub\DatastoreHostMount'
,'ArrayOfDatastoreHostMount'=>'VimServiceStub\ArrayOfDatastoreHostMount'
,'DatastoreMountPathDatastorePair'=>'VimServiceStub\DatastoreMountPathDatastorePair'
,'ArrayOfDatastoreMountPathDatastorePair'=>'VimServiceStub\ArrayOfDatastoreMountPathDatastorePair'
,'Description'=>'VimServiceStub\Description'
,'DiagnosticManagerLogDescriptor'=>'VimServiceStub\DiagnosticManagerLogDescriptor'
,'ArrayOfDiagnosticManagerLogDescriptor'=>'VimServiceStub\ArrayOfDiagnosticManagerLogDescriptor'
,'DiagnosticManagerLogHeader'=>'VimServiceStub\DiagnosticManagerLogHeader'
,'DiagnosticManagerBundleInfo'=>'VimServiceStub\DiagnosticManagerBundleInfo'
,'ArrayOfDiagnosticManagerBundleInfo'=>'VimServiceStub\ArrayOfDiagnosticManagerBundleInfo'
,'DVSContactInfo'=>'VimServiceStub\DVSContactInfo'
,'DVSNetworkResourceManagementCapability'=>'VimServiceStub\DVSNetworkResourceManagementCapability'
,'DVSFeatureCapability'=>'VimServiceStub\DVSFeatureCapability'
,'DVSCapability'=>'VimServiceStub\DVSCapability'
,'DVSSummary'=>'VimServiceStub\DVSSummary'
,'DVSPolicy'=>'VimServiceStub\DVSPolicy'
,'DVSUplinkPortPolicy'=>'VimServiceStub\DVSUplinkPortPolicy'
,'DVSNameArrayUplinkPortPolicy'=>'VimServiceStub\DVSNameArrayUplinkPortPolicy'
,'DVSConfigSpec'=>'VimServiceStub\DVSConfigSpec'
,'DVSCreateSpec'=>'VimServiceStub\DVSCreateSpec'
,'DVSConfigInfo'=>'VimServiceStub\DVSConfigInfo'
,'EVCMode'=>'VimServiceStub\EVCMode'
,'ArrayOfEVCMode'=>'VimServiceStub\ArrayOfEVCMode'
,'ElementDescription'=>'VimServiceStub\ElementDescription'
,'ArrayOfElementDescription'=>'VimServiceStub\ArrayOfElementDescription'
,'EnumDescription'=>'VimServiceStub\EnumDescription'
,'ArrayOfEnumDescription'=>'VimServiceStub\ArrayOfEnumDescription'
,'ExtendedDescription'=>'VimServiceStub\ExtendedDescription'
,'ExtendedElementDescription'=>'VimServiceStub\ExtendedElementDescription'
,'ExtensionServerInfo'=>'VimServiceStub\ExtensionServerInfo'
,'ArrayOfExtensionServerInfo'=>'VimServiceStub\ArrayOfExtensionServerInfo'
,'ExtensionClientInfo'=>'VimServiceStub\ExtensionClientInfo'
,'ArrayOfExtensionClientInfo'=>'VimServiceStub\ArrayOfExtensionClientInfo'
,'ExtensionTaskTypeInfo'=>'VimServiceStub\ExtensionTaskTypeInfo'
,'ArrayOfExtensionTaskTypeInfo'=>'VimServiceStub\ArrayOfExtensionTaskTypeInfo'
,'ExtensionEventTypeInfo'=>'VimServiceStub\ExtensionEventTypeInfo'
,'ArrayOfExtensionEventTypeInfo'=>'VimServiceStub\ArrayOfExtensionEventTypeInfo'
,'ExtensionFaultTypeInfo'=>'VimServiceStub\ExtensionFaultTypeInfo'
,'ArrayOfExtensionFaultTypeInfo'=>'VimServiceStub\ArrayOfExtensionFaultTypeInfo'
,'ExtensionPrivilegeInfo'=>'VimServiceStub\ExtensionPrivilegeInfo'
,'ArrayOfExtensionPrivilegeInfo'=>'VimServiceStub\ArrayOfExtensionPrivilegeInfo'
,'ExtensionResourceInfo'=>'VimServiceStub\ExtensionResourceInfo'
,'ArrayOfExtensionResourceInfo'=>'VimServiceStub\ArrayOfExtensionResourceInfo'
,'ExtensionHealthInfo'=>'VimServiceStub\ExtensionHealthInfo'
,'ExtensionOvfConsumerInfo'=>'VimServiceStub\ExtensionOvfConsumerInfo'
,'Extension'=>'VimServiceStub\Extension'
,'ArrayOfExtension'=>'VimServiceStub\ArrayOfExtension'
,'ReplicationVmProgressInfo'=>'VimServiceStub\ReplicationVmProgressInfo'
,'HbrManagerReplicationVmInfo'=>'VimServiceStub\HbrManagerReplicationVmInfo'
,'HostServiceTicket'=>'VimServiceStub\HostServiceTicket'
,'HostSystemReconnectSpec'=>'VimServiceStub\HostSystemReconnectSpec'
,'HttpNfcLeaseDatastoreLeaseInfo'=>'VimServiceStub\HttpNfcLeaseDatastoreLeaseInfo'
,'ArrayOfHttpNfcLeaseDatastoreLeaseInfo'=>'VimServiceStub\ArrayOfHttpNfcLeaseDatastoreLeaseInfo'
,'HttpNfcLeaseHostInfo'=>'VimServiceStub\HttpNfcLeaseHostInfo'
,'ArrayOfHttpNfcLeaseHostInfo'=>'VimServiceStub\ArrayOfHttpNfcLeaseHostInfo'
,'HttpNfcLeaseInfo'=>'VimServiceStub\HttpNfcLeaseInfo'
,'HttpNfcLeaseDeviceUrl'=>'VimServiceStub\HttpNfcLeaseDeviceUrl'
,'ArrayOfHttpNfcLeaseDeviceUrl'=>'VimServiceStub\ArrayOfHttpNfcLeaseDeviceUrl'
,'HttpNfcLeaseManifestEntry'=>'VimServiceStub\HttpNfcLeaseManifestEntry'
,'ArrayOfHttpNfcLeaseManifestEntry'=>'VimServiceStub\ArrayOfHttpNfcLeaseManifestEntry'
,'ImportSpec'=>'VimServiceStub\ImportSpec'
,'ArrayOfImportSpec'=>'VimServiceStub\ArrayOfImportSpec'
,'InheritablePolicy'=>'VimServiceStub\InheritablePolicy'
,'IntPolicy'=>'VimServiceStub\IntPolicy'
,'KeyValue'=>'VimServiceStub\KeyValue'
,'ArrayOfKeyValue'=>'VimServiceStub\ArrayOfKeyValue'
,'LicenseAssignmentManagerLicenseAssignment'=>'VimServiceStub\LicenseAssignmentManagerLicenseAssignment'
,'ArrayOfLicenseAssignmentManagerLicenseAssignment'=>'VimServiceStub\ArrayOfLicenseAssignmentManagerLicenseAssignment'
,'LicenseSource'=>'VimServiceStub\LicenseSource'
,'LicenseServerSource'=>'VimServiceStub\LicenseServerSource'
,'LocalLicenseSource'=>'VimServiceStub\LocalLicenseSource'
,'EvaluationLicenseSource'=>'VimServiceStub\EvaluationLicenseSource'
,'LicenseFeatureInfo'=>'VimServiceStub\LicenseFeatureInfo'
,'ArrayOfLicenseFeatureInfo'=>'VimServiceStub\ArrayOfLicenseFeatureInfo'
,'LicenseReservationInfo'=>'VimServiceStub\LicenseReservationInfo'
,'ArrayOfLicenseReservationInfo'=>'VimServiceStub\ArrayOfLicenseReservationInfo'
,'LicenseAvailabilityInfo'=>'VimServiceStub\LicenseAvailabilityInfo'
,'ArrayOfLicenseAvailabilityInfo'=>'VimServiceStub\ArrayOfLicenseAvailabilityInfo'
,'LicenseDiagnostics'=>'VimServiceStub\LicenseDiagnostics'
,'LicenseUsageInfo'=>'VimServiceStub\LicenseUsageInfo'
,'LicenseManagerEvaluationInfo'=>'VimServiceStub\LicenseManagerEvaluationInfo'
,'HostLicensableResourceInfo'=>'VimServiceStub\HostLicensableResourceInfo'
,'LicenseManagerLicenseInfo'=>'VimServiceStub\LicenseManagerLicenseInfo'
,'ArrayOfLicenseManagerLicenseInfo'=>'VimServiceStub\ArrayOfLicenseManagerLicenseInfo'
,'LocalizationManagerMessageCatalog'=>'VimServiceStub\LocalizationManagerMessageCatalog'
,'ArrayOfLocalizationManagerMessageCatalog'=>'VimServiceStub\ArrayOfLocalizationManagerMessageCatalog'
,'LongPolicy'=>'VimServiceStub\LongPolicy'
,'MethodDescription'=>'VimServiceStub\MethodDescription'
,'NetworkSummary'=>'VimServiceStub\NetworkSummary'
,'NumericRange'=>'VimServiceStub\NumericRange'
,'ArrayOfNumericRange'=>'VimServiceStub\ArrayOfNumericRange'
,'OvfConsumerOvfSection'=>'VimServiceStub\OvfConsumerOvfSection'
,'ArrayOfOvfConsumerOvfSection'=>'VimServiceStub\ArrayOfOvfConsumerOvfSection'
,'OvfConsumerOstNode'=>'VimServiceStub\OvfConsumerOstNode'
,'ArrayOfOvfConsumerOstNode'=>'VimServiceStub\ArrayOfOvfConsumerOstNode'
,'OvfDeploymentOption'=>'VimServiceStub\OvfDeploymentOption'
,'ArrayOfOvfDeploymentOption'=>'VimServiceStub\ArrayOfOvfDeploymentOption'
,'OvfManagerCommonParams'=>'VimServiceStub\OvfManagerCommonParams'
,'OvfValidateHostParams'=>'VimServiceStub\OvfValidateHostParams'
,'OvfValidateHostResult'=>'VimServiceStub\OvfValidateHostResult'
,'OvfParseDescriptorParams'=>'VimServiceStub\OvfParseDescriptorParams'
,'OvfParseDescriptorResult'=>'VimServiceStub\OvfParseDescriptorResult'
,'OvfNetworkInfo'=>'VimServiceStub\OvfNetworkInfo'
,'ArrayOfOvfNetworkInfo'=>'VimServiceStub\ArrayOfOvfNetworkInfo'
,'OvfCreateImportSpecParams'=>'VimServiceStub\OvfCreateImportSpecParams'
,'OvfResourceMap'=>'VimServiceStub\OvfResourceMap'
,'ArrayOfOvfResourceMap'=>'VimServiceStub\ArrayOfOvfResourceMap'
,'OvfNetworkMapping'=>'VimServiceStub\OvfNetworkMapping'
,'ArrayOfOvfNetworkMapping'=>'VimServiceStub\ArrayOfOvfNetworkMapping'
,'OvfCreateImportSpecResult'=>'VimServiceStub\OvfCreateImportSpecResult'
,'OvfFileItem'=>'VimServiceStub\OvfFileItem'
,'ArrayOfOvfFileItem'=>'VimServiceStub\ArrayOfOvfFileItem'
,'OvfCreateDescriptorParams'=>'VimServiceStub\OvfCreateDescriptorParams'
,'OvfCreateDescriptorResult'=>'VimServiceStub\OvfCreateDescriptorResult'
,'OvfFile'=>'VimServiceStub\OvfFile'
,'ArrayOfOvfFile'=>'VimServiceStub\ArrayOfOvfFile'
,'PasswordField'=>'VimServiceStub\PasswordField'
,'PerformanceDescription'=>'VimServiceStub\PerformanceDescription'
,'PerfProviderSummary'=>'VimServiceStub\PerfProviderSummary'
,'PerfCounterInfo'=>'VimServiceStub\PerfCounterInfo'
,'ArrayOfPerfCounterInfo'=>'VimServiceStub\ArrayOfPerfCounterInfo'
,'PerfMetricId'=>'VimServiceStub\PerfMetricId'
,'ArrayOfPerfMetricId'=>'VimServiceStub\ArrayOfPerfMetricId'
,'PerfQuerySpec'=>'VimServiceStub\PerfQuerySpec'
,'ArrayOfPerfQuerySpec'=>'VimServiceStub\ArrayOfPerfQuerySpec'
,'PerfSampleInfo'=>'VimServiceStub\PerfSampleInfo'
,'ArrayOfPerfSampleInfo'=>'VimServiceStub\ArrayOfPerfSampleInfo'
,'PerfMetricSeries'=>'VimServiceStub\PerfMetricSeries'
,'ArrayOfPerfMetricSeries'=>'VimServiceStub\ArrayOfPerfMetricSeries'
,'PerfMetricIntSeries'=>'VimServiceStub\PerfMetricIntSeries'
,'PerfMetricSeriesCSV'=>'VimServiceStub\PerfMetricSeriesCSV'
,'ArrayOfPerfMetricSeriesCSV'=>'VimServiceStub\ArrayOfPerfMetricSeriesCSV'
,'PerfEntityMetricBase'=>'VimServiceStub\PerfEntityMetricBase'
,'ArrayOfPerfEntityMetricBase'=>'VimServiceStub\ArrayOfPerfEntityMetricBase'
,'PerfEntityMetric'=>'VimServiceStub\PerfEntityMetric'
,'PerfEntityMetricCSV'=>'VimServiceStub\PerfEntityMetricCSV'
,'PerfCompositeMetric'=>'VimServiceStub\PerfCompositeMetric'
,'PerformanceManagerCounterLevelMapping'=>'VimServiceStub\PerformanceManagerCounterLevelMapping'
,'ArrayOfPerformanceManagerCounterLevelMapping'=>'VimServiceStub\ArrayOfPerformanceManagerCounterLevelMapping'
,'PerfInterval'=>'VimServiceStub\PerfInterval'
,'ArrayOfPerfInterval'=>'VimServiceStub\ArrayOfPerfInterval'
,'PosixUserSearchResult'=>'VimServiceStub\PosixUserSearchResult'
,'PrivilegePolicyDef'=>'VimServiceStub\PrivilegePolicyDef'
,'ResourceAllocationInfo'=>'VimServiceStub\ResourceAllocationInfo'
,'ResourceAllocationOption'=>'VimServiceStub\ResourceAllocationOption'
,'ResourceConfigOption'=>'VimServiceStub\ResourceConfigOption'
,'ResourceConfigSpec'=>'VimServiceStub\ResourceConfigSpec'
,'ArrayOfResourceConfigSpec'=>'VimServiceStub\ArrayOfResourceConfigSpec'
,'DatabaseSizeParam'=>'VimServiceStub\DatabaseSizeParam'
,'InventoryDescription'=>'VimServiceStub\InventoryDescription'
,'PerformanceStatisticsDescription'=>'VimServiceStub\PerformanceStatisticsDescription'
,'DatabaseSizeEstimate'=>'VimServiceStub\DatabaseSizeEstimate'
,'ResourcePoolResourceUsage'=>'VimServiceStub\ResourcePoolResourceUsage'
,'ResourcePoolRuntimeInfo'=>'VimServiceStub\ResourcePoolRuntimeInfo'
,'ResourcePoolQuickStats'=>'VimServiceStub\ResourcePoolQuickStats'
,'ResourcePoolSummary'=>'VimServiceStub\ResourcePoolSummary'
,'HostVMotionCompatibility'=>'VimServiceStub\HostVMotionCompatibility'
,'ArrayOfHostVMotionCompatibility'=>'VimServiceStub\ArrayOfHostVMotionCompatibility'
,'ProductComponentInfo'=>'VimServiceStub\ProductComponentInfo'
,'ArrayOfProductComponentInfo'=>'VimServiceStub\ArrayOfProductComponentInfo'
,'ServiceContent'=>'VimServiceStub\ServiceContent'
,'SessionManagerLocalTicket'=>'VimServiceStub\SessionManagerLocalTicket'
,'SessionManagerGenericServiceTicket'=>'VimServiceStub\SessionManagerGenericServiceTicket'
,'SessionManagerServiceRequestSpec'=>'VimServiceStub\SessionManagerServiceRequestSpec'
,'SessionManagerHttpServiceRequestSpec'=>'VimServiceStub\SessionManagerHttpServiceRequestSpec'
,'UserSession'=>'VimServiceStub\UserSession'
,'ArrayOfUserSession'=>'VimServiceStub\ArrayOfUserSession'
,'SharesInfo'=>'VimServiceStub\SharesInfo'
,'SharesOption'=>'VimServiceStub\SharesOption'
,'StoragePodSummary'=>'VimServiceStub\StoragePodSummary'
,'StorageIOAllocationInfo'=>'VimServiceStub\StorageIOAllocationInfo'
,'StorageIOAllocationOption'=>'VimServiceStub\StorageIOAllocationOption'
,'StorageIORMInfo'=>'VimServiceStub\StorageIORMInfo'
,'StorageIORMConfigSpec'=>'VimServiceStub\StorageIORMConfigSpec'
,'StorageIORMConfigOption'=>'VimServiceStub\StorageIORMConfigOption'
,'PodStorageDrsEntry'=>'VimServiceStub\PodStorageDrsEntry'
,'StringPolicy'=>'VimServiceStub\StringPolicy'
,'Tag'=>'VimServiceStub\Tag'
,'ArrayOfTag'=>'VimServiceStub\ArrayOfTag'
,'TaskDescription'=>'VimServiceStub\TaskDescription'
,'TaskFilterSpecByEntity'=>'VimServiceStub\TaskFilterSpecByEntity'
,'TaskFilterSpecByTime'=>'VimServiceStub\TaskFilterSpecByTime'
,'TaskFilterSpecByUsername'=>'VimServiceStub\TaskFilterSpecByUsername'
,'TaskFilterSpec'=>'VimServiceStub\TaskFilterSpec'
,'ArrayOfTaskInfoState'=>'VimServiceStub\ArrayOfTaskInfoState'
,'TaskInfo'=>'VimServiceStub\TaskInfo'
,'ArrayOfTaskInfo'=>'VimServiceStub\ArrayOfTaskInfo'
,'TaskReason'=>'VimServiceStub\TaskReason'
,'TaskReasonSystem'=>'VimServiceStub\TaskReasonSystem'
,'TaskReasonUser'=>'VimServiceStub\TaskReasonUser'
,'TaskReasonAlarm'=>'VimServiceStub\TaskReasonAlarm'
,'TaskReasonSchedule'=>'VimServiceStub\TaskReasonSchedule'
,'TypeDescription'=>'VimServiceStub\TypeDescription'
,'ArrayOfTypeDescription'=>'VimServiceStub\ArrayOfTypeDescription'
,'UpdateVirtualMachineFilesResultFailedVmFileInfo'=>'VimServiceStub\UpdateVirtualMachineFilesResultFailedVmFileInfo'
,'ArrayOfUpdateVirtualMachineFilesResultFailedVmFileInfo'=>'VimServiceStub\ArrayOfUpdateVirtualMachineFilesResultFailedVmFileInfo'
,'UpdateVirtualMachineFilesResult'=>'VimServiceStub\UpdateVirtualMachineFilesResult'
,'UserSearchResult'=>'VimServiceStub\UserSearchResult'
,'ArrayOfUserSearchResult'=>'VimServiceStub\ArrayOfUserSearchResult'
,'VirtualAppSummary'=>'VimServiceStub\VirtualAppSummary'
,'VirtualAppLinkInfo'=>'VimServiceStub\VirtualAppLinkInfo'
,'ArrayOfVirtualAppLinkInfo'=>'VimServiceStub\ArrayOfVirtualAppLinkInfo'
,'VirtualDiskSpec'=>'VimServiceStub\VirtualDiskSpec'
,'FileBackedVirtualDiskSpec'=>'VimServiceStub\FileBackedVirtualDiskSpec'
,'DeviceBackedVirtualDiskSpec'=>'VimServiceStub\DeviceBackedVirtualDiskSpec'
,'StorageRequirement'=>'VimServiceStub\StorageRequirement'
,'ArrayOfStorageRequirement'=>'VimServiceStub\ArrayOfStorageRequirement'
,'VirtualMachineTicket'=>'VimServiceStub\VirtualMachineTicket'
,'VirtualMachineMksTicket'=>'VimServiceStub\VirtualMachineMksTicket'
,'VirtualMachineDisplayTopology'=>'VimServiceStub\VirtualMachineDisplayTopology'
,'ArrayOfVirtualMachineDisplayTopology'=>'VimServiceStub\ArrayOfVirtualMachineDisplayTopology'
,'DiskChangeExtent'=>'VimServiceStub\DiskChangeExtent'
,'ArrayOfDiskChangeExtent'=>'VimServiceStub\ArrayOfDiskChangeExtent'
,'DiskChangeInfo'=>'VimServiceStub\DiskChangeInfo'
,'Action'=>'VimServiceStub\Action'
,'MethodActionArgument'=>'VimServiceStub\MethodActionArgument'
,'ArrayOfMethodActionArgument'=>'VimServiceStub\ArrayOfMethodActionArgument'
,'MethodAction'=>'VimServiceStub\MethodAction'
,'SendEmailAction'=>'VimServiceStub\SendEmailAction'
,'SendSNMPAction'=>'VimServiceStub\SendSNMPAction'
,'RunScriptAction'=>'VimServiceStub\RunScriptAction'
,'CreateTaskAction'=>'VimServiceStub\CreateTaskAction'
,'AlarmAction'=>'VimServiceStub\AlarmAction'
,'ArrayOfAlarmAction'=>'VimServiceStub\ArrayOfAlarmAction'
,'AlarmTriggeringActionTransitionSpec'=>'VimServiceStub\AlarmTriggeringActionTransitionSpec'
,'ArrayOfAlarmTriggeringActionTransitionSpec'=>'VimServiceStub\ArrayOfAlarmTriggeringActionTransitionSpec'
,'AlarmTriggeringAction'=>'VimServiceStub\AlarmTriggeringAction'
,'GroupAlarmAction'=>'VimServiceStub\GroupAlarmAction'
,'AlarmDescription'=>'VimServiceStub\AlarmDescription'
,'AlarmExpression'=>'VimServiceStub\AlarmExpression'
,'ArrayOfAlarmExpression'=>'VimServiceStub\ArrayOfAlarmExpression'
,'AndAlarmExpression'=>'VimServiceStub\AndAlarmExpression'
,'OrAlarmExpression'=>'VimServiceStub\OrAlarmExpression'
,'StateAlarmExpression'=>'VimServiceStub\StateAlarmExpression'
,'EventAlarmExpressionComparison'=>'VimServiceStub\EventAlarmExpressionComparison'
,'ArrayOfEventAlarmExpressionComparison'=>'VimServiceStub\ArrayOfEventAlarmExpressionComparison'
,'EventAlarmExpression'=>'VimServiceStub\EventAlarmExpression'
,'MetricAlarmExpression'=>'VimServiceStub\MetricAlarmExpression'
,'AlarmInfo'=>'VimServiceStub\AlarmInfo'
,'AlarmSetting'=>'VimServiceStub\AlarmSetting'
,'AlarmSpec'=>'VimServiceStub\AlarmSpec'
,'AlarmState'=>'VimServiceStub\AlarmState'
,'ArrayOfAlarmState'=>'VimServiceStub\ArrayOfAlarmState'
,'ClusterAction'=>'VimServiceStub\ClusterAction'
,'ArrayOfClusterAction'=>'VimServiceStub\ArrayOfClusterAction'
,'ClusterActionHistory'=>'VimServiceStub\ClusterActionHistory'
,'ArrayOfClusterActionHistory'=>'VimServiceStub\ArrayOfClusterActionHistory'
,'ClusterAffinityRuleSpec'=>'VimServiceStub\ClusterAffinityRuleSpec'
,'ClusterAntiAffinityRuleSpec'=>'VimServiceStub\ClusterAntiAffinityRuleSpec'
,'ClusterAttemptedVmInfo'=>'VimServiceStub\ClusterAttemptedVmInfo'
,'ArrayOfClusterAttemptedVmInfo'=>'VimServiceStub\ArrayOfClusterAttemptedVmInfo'
,'ClusterConfigInfo'=>'VimServiceStub\ClusterConfigInfo'
,'ClusterDrsConfigInfo'=>'VimServiceStub\ClusterDrsConfigInfo'
,'ClusterDrsVmConfigInfo'=>'VimServiceStub\ClusterDrsVmConfigInfo'
,'ArrayOfClusterDrsVmConfigInfo'=>'VimServiceStub\ArrayOfClusterDrsVmConfigInfo'
,'ClusterConfigInfoEx'=>'VimServiceStub\ClusterConfigInfoEx'
,'ClusterDpmConfigInfo'=>'VimServiceStub\ClusterDpmConfigInfo'
,'ClusterDpmHostConfigInfo'=>'VimServiceStub\ClusterDpmHostConfigInfo'
,'ArrayOfClusterDpmHostConfigInfo'=>'VimServiceStub\ArrayOfClusterDpmHostConfigInfo'
,'ClusterConfigSpec'=>'VimServiceStub\ClusterConfigSpec'
,'ClusterDasVmConfigSpec'=>'VimServiceStub\ClusterDasVmConfigSpec'
,'ArrayOfClusterDasVmConfigSpec'=>'VimServiceStub\ArrayOfClusterDasVmConfigSpec'
,'ClusterDrsVmConfigSpec'=>'VimServiceStub\ClusterDrsVmConfigSpec'
,'ArrayOfClusterDrsVmConfigSpec'=>'VimServiceStub\ArrayOfClusterDrsVmConfigSpec'
,'ClusterConfigSpecEx'=>'VimServiceStub\ClusterConfigSpecEx'
,'ClusterDpmHostConfigSpec'=>'VimServiceStub\ClusterDpmHostConfigSpec'
,'ArrayOfClusterDpmHostConfigSpec'=>'VimServiceStub\ArrayOfClusterDpmHostConfigSpec'
,'ClusterGroupSpec'=>'VimServiceStub\ClusterGroupSpec'
,'ArrayOfClusterGroupSpec'=>'VimServiceStub\ArrayOfClusterGroupSpec'
,'ClusterDasAamHostInfo'=>'VimServiceStub\ClusterDasAamHostInfo'
,'ClusterDasAamNodeState'=>'VimServiceStub\ClusterDasAamNodeState'
,'ArrayOfClusterDasAamNodeState'=>'VimServiceStub\ArrayOfClusterDasAamNodeState'
,'ClusterDasAdmissionControlInfo'=>'VimServiceStub\ClusterDasAdmissionControlInfo'
,'ClusterDasAdmissionControlPolicy'=>'VimServiceStub\ClusterDasAdmissionControlPolicy'
,'DasHeartbeatDatastoreInfo'=>'VimServiceStub\DasHeartbeatDatastoreInfo'
,'ArrayOfDasHeartbeatDatastoreInfo'=>'VimServiceStub\ArrayOfDasHeartbeatDatastoreInfo'
,'ClusterDasAdvancedRuntimeInfo'=>'VimServiceStub\ClusterDasAdvancedRuntimeInfo'
,'ClusterDasConfigInfo'=>'VimServiceStub\ClusterDasConfigInfo'
,'ClusterDasData'=>'VimServiceStub\ClusterDasData'
,'ClusterDasDataSummary'=>'VimServiceStub\ClusterDasDataSummary'
,'ClusterDasFailoverLevelAdvancedRuntimeInfoSlotInfo'=>'VimServiceStub\ClusterDasFailoverLevelAdvancedRuntimeInfoSlotInfo'
,'ClusterDasFailoverLevelAdvancedRuntimeInfoHostSlots'=>'VimServiceStub\ClusterDasFailoverLevelAdvancedRuntimeInfoHostSlots'
,'ArrayOfClusterDasFailoverLevelAdvancedRuntimeInfoHostSlots'=>'VimServiceStub\ArrayOfClusterDasFailoverLevelAdvancedRuntimeInfoHostSlots'
,'ClusterDasFailoverLevelAdvancedRuntimeInfo'=>'VimServiceStub\ClusterDasFailoverLevelAdvancedRuntimeInfo'
,'ClusterDasFdmHostState'=>'VimServiceStub\ClusterDasFdmHostState'
,'ClusterDasHostInfo'=>'VimServiceStub\ClusterDasHostInfo'
,'ClusterDasHostRecommendation'=>'VimServiceStub\ClusterDasHostRecommendation'
,'ClusterDasVmConfigInfo'=>'VimServiceStub\ClusterDasVmConfigInfo'
,'ArrayOfClusterDasVmConfigInfo'=>'VimServiceStub\ArrayOfClusterDasVmConfigInfo'
,'ClusterDasVmSettings'=>'VimServiceStub\ClusterDasVmSettings'
,'ClusterDrsFaultsFaultsByVm'=>'VimServiceStub\ClusterDrsFaultsFaultsByVm'
,'ArrayOfClusterDrsFaultsFaultsByVm'=>'VimServiceStub\ArrayOfClusterDrsFaultsFaultsByVm'
,'ClusterDrsFaultsFaultsByVirtualDisk'=>'VimServiceStub\ClusterDrsFaultsFaultsByVirtualDisk'
,'ClusterDrsFaults'=>'VimServiceStub\ClusterDrsFaults'
,'ArrayOfClusterDrsFaults'=>'VimServiceStub\ArrayOfClusterDrsFaults'
,'ClusterDrsMigration'=>'VimServiceStub\ClusterDrsMigration'
,'ArrayOfClusterDrsMigration'=>'VimServiceStub\ArrayOfClusterDrsMigration'
,'ClusterDrsRecommendation'=>'VimServiceStub\ClusterDrsRecommendation'
,'ArrayOfClusterDrsRecommendation'=>'VimServiceStub\ArrayOfClusterDrsRecommendation'
,'ClusterEnterMaintenanceResult'=>'VimServiceStub\ClusterEnterMaintenanceResult'
,'ClusterFailoverHostAdmissionControlInfoHostStatus'=>'VimServiceStub\ClusterFailoverHostAdmissionControlInfoHostStatus'
,'ArrayOfClusterFailoverHostAdmissionControlInfoHostStatus'=>'VimServiceStub\ArrayOfClusterFailoverHostAdmissionControlInfoHostStatus'
,'ClusterFailoverHostAdmissionControlInfo'=>'VimServiceStub\ClusterFailoverHostAdmissionControlInfo'
,'ClusterFailoverHostAdmissionControlPolicy'=>'VimServiceStub\ClusterFailoverHostAdmissionControlPolicy'
,'ClusterFailoverLevelAdmissionControlInfo'=>'VimServiceStub\ClusterFailoverLevelAdmissionControlInfo'
,'ClusterFailoverLevelAdmissionControlPolicy'=>'VimServiceStub\ClusterFailoverLevelAdmissionControlPolicy'
,'ClusterFailoverResourcesAdmissionControlInfo'=>'VimServiceStub\ClusterFailoverResourcesAdmissionControlInfo'
,'ClusterFailoverResourcesAdmissionControlPolicy'=>'VimServiceStub\ClusterFailoverResourcesAdmissionControlPolicy'
,'ClusterGroupInfo'=>'VimServiceStub\ClusterGroupInfo'
,'ArrayOfClusterGroupInfo'=>'VimServiceStub\ArrayOfClusterGroupInfo'
,'ClusterHostGroup'=>'VimServiceStub\ClusterHostGroup'
,'ClusterHostPowerAction'=>'VimServiceStub\ClusterHostPowerAction'
,'ClusterHostRecommendation'=>'VimServiceStub\ClusterHostRecommendation'
,'ArrayOfClusterHostRecommendation'=>'VimServiceStub\ArrayOfClusterHostRecommendation'
,'ClusterInitialPlacementAction'=>'VimServiceStub\ClusterInitialPlacementAction'
,'ClusterMigrationAction'=>'VimServiceStub\ClusterMigrationAction'
,'ClusterNotAttemptedVmInfo'=>'VimServiceStub\ClusterNotAttemptedVmInfo'
,'ArrayOfClusterNotAttemptedVmInfo'=>'VimServiceStub\ArrayOfClusterNotAttemptedVmInfo'
,'ClusterPowerOnVmResult'=>'VimServiceStub\ClusterPowerOnVmResult'
,'ClusterRecommendation'=>'VimServiceStub\ClusterRecommendation'
,'ArrayOfClusterRecommendation'=>'VimServiceStub\ArrayOfClusterRecommendation'
,'ClusterRuleInfo'=>'VimServiceStub\ClusterRuleInfo'
,'ArrayOfClusterRuleInfo'=>'VimServiceStub\ArrayOfClusterRuleInfo'
,'ClusterRuleSpec'=>'VimServiceStub\ClusterRuleSpec'
,'ArrayOfClusterRuleSpec'=>'VimServiceStub\ArrayOfClusterRuleSpec'
,'ClusterVmGroup'=>'VimServiceStub\ClusterVmGroup'
,'ClusterVmHostRuleInfo'=>'VimServiceStub\ClusterVmHostRuleInfo'
,'ClusterVmToolsMonitoringSettings'=>'VimServiceStub\ClusterVmToolsMonitoringSettings'
,'DVPortConfigSpec'=>'VimServiceStub\DVPortConfigSpec'
,'ArrayOfDVPortConfigSpec'=>'VimServiceStub\ArrayOfDVPortConfigSpec'
,'DVPortConfigInfo'=>'VimServiceStub\DVPortConfigInfo'
,'DVSTrafficShapingPolicy'=>'VimServiceStub\DVSTrafficShapingPolicy'
,'DVSVendorSpecificConfig'=>'VimServiceStub\DVSVendorSpecificConfig'
,'DVPortSetting'=>'VimServiceStub\DVPortSetting'
,'DVPortStatus'=>'VimServiceStub\DVPortStatus'
,'DVPortState'=>'VimServiceStub\DVPortState'
,'DistributedVirtualPort'=>'VimServiceStub\DistributedVirtualPort'
,'ArrayOfDistributedVirtualPort'=>'VimServiceStub\ArrayOfDistributedVirtualPort'
,'DVPortgroupPolicy'=>'VimServiceStub\DVPortgroupPolicy'
,'DVPortgroupConfigSpec'=>'VimServiceStub\DVPortgroupConfigSpec'
,'ArrayOfDVPortgroupConfigSpec'=>'VimServiceStub\ArrayOfDVPortgroupConfigSpec'
,'DVPortgroupConfigInfo'=>'VimServiceStub\DVPortgroupConfigInfo'
,'DistributedVirtualPortgroupInfo'=>'VimServiceStub\DistributedVirtualPortgroupInfo'
,'ArrayOfDistributedVirtualPortgroupInfo'=>'VimServiceStub\ArrayOfDistributedVirtualPortgroupInfo'
,'DistributedVirtualSwitchInfo'=>'VimServiceStub\DistributedVirtualSwitchInfo'
,'ArrayOfDistributedVirtualSwitchInfo'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchInfo'
,'DVSManagerDvsConfigTarget'=>'VimServiceStub\DVSManagerDvsConfigTarget'
,'DistributedVirtualSwitchManagerCompatibilityResult'=>'VimServiceStub\DistributedVirtualSwitchManagerCompatibilityResult'
,'ArrayOfDistributedVirtualSwitchManagerCompatibilityResult'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchManagerCompatibilityResult'
,'DistributedVirtualSwitchManagerHostContainer'=>'VimServiceStub\DistributedVirtualSwitchManagerHostContainer'
,'DistributedVirtualSwitchManagerHostDvsFilterSpec'=>'VimServiceStub\DistributedVirtualSwitchManagerHostDvsFilterSpec'
,'ArrayOfDistributedVirtualSwitchManagerHostDvsFilterSpec'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchManagerHostDvsFilterSpec'
,'DistributedVirtualSwitchManagerHostArrayFilter'=>'VimServiceStub\DistributedVirtualSwitchManagerHostArrayFilter'
,'DistributedVirtualSwitchManagerHostContainerFilter'=>'VimServiceStub\DistributedVirtualSwitchManagerHostContainerFilter'
,'DistributedVirtualSwitchManagerHostDvsMembershipFilter'=>'VimServiceStub\DistributedVirtualSwitchManagerHostDvsMembershipFilter'
,'DistributedVirtualSwitchManagerDvsProductSpec'=>'VimServiceStub\DistributedVirtualSwitchManagerDvsProductSpec'
,'DistributedVirtualSwitchHostMemberConfigSpec'=>'VimServiceStub\DistributedVirtualSwitchHostMemberConfigSpec'
,'ArrayOfDistributedVirtualSwitchHostMemberConfigSpec'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchHostMemberConfigSpec'
,'DistributedVirtualSwitchHostMemberPnicSpec'=>'VimServiceStub\DistributedVirtualSwitchHostMemberPnicSpec'
,'ArrayOfDistributedVirtualSwitchHostMemberPnicSpec'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchHostMemberPnicSpec'
,'DistributedVirtualSwitchHostMemberBacking'=>'VimServiceStub\DistributedVirtualSwitchHostMemberBacking'
,'DistributedVirtualSwitchHostMemberPnicBacking'=>'VimServiceStub\DistributedVirtualSwitchHostMemberPnicBacking'
,'DistributedVirtualSwitchHostMemberRuntimeState'=>'VimServiceStub\DistributedVirtualSwitchHostMemberRuntimeState'
,'DistributedVirtualSwitchHostMemberConfigInfo'=>'VimServiceStub\DistributedVirtualSwitchHostMemberConfigInfo'
,'DistributedVirtualSwitchHostMember'=>'VimServiceStub\DistributedVirtualSwitchHostMember'
,'ArrayOfDistributedVirtualSwitchHostMember'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchHostMember'
,'DistributedVirtualSwitchHostProductSpec'=>'VimServiceStub\DistributedVirtualSwitchHostProductSpec'
,'ArrayOfDistributedVirtualSwitchHostProductSpec'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchHostProductSpec'
,'DistributedVirtualSwitchKeyedOpaqueBlob'=>'VimServiceStub\DistributedVirtualSwitchKeyedOpaqueBlob'
,'ArrayOfDistributedVirtualSwitchKeyedOpaqueBlob'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchKeyedOpaqueBlob'
,'DVSNetworkResourcePoolAllocationInfo'=>'VimServiceStub\DVSNetworkResourcePoolAllocationInfo'
,'DVSNetworkResourcePoolConfigSpec'=>'VimServiceStub\DVSNetworkResourcePoolConfigSpec'
,'ArrayOfDVSNetworkResourcePoolConfigSpec'=>'VimServiceStub\ArrayOfDVSNetworkResourcePoolConfigSpec'
,'DVSNetworkResourcePool'=>'VimServiceStub\DVSNetworkResourcePool'
,'ArrayOfDVSNetworkResourcePool'=>'VimServiceStub\ArrayOfDVSNetworkResourcePool'
,'DistributedVirtualSwitchPortConnectee'=>'VimServiceStub\DistributedVirtualSwitchPortConnectee'
,'DistributedVirtualSwitchPortConnection'=>'VimServiceStub\DistributedVirtualSwitchPortConnection'
,'DistributedVirtualSwitchPortCriteria'=>'VimServiceStub\DistributedVirtualSwitchPortCriteria'
,'DistributedVirtualSwitchPortStatistics'=>'VimServiceStub\DistributedVirtualSwitchPortStatistics'
,'DistributedVirtualSwitchProductSpec'=>'VimServiceStub\DistributedVirtualSwitchProductSpec'
,'ArrayOfDistributedVirtualSwitchProductSpec'=>'VimServiceStub\ArrayOfDistributedVirtualSwitchProductSpec'
,'VMwareDVSFeatureCapability'=>'VimServiceStub\VMwareDVSFeatureCapability'
,'VMwareVspanPort'=>'VimServiceStub\VMwareVspanPort'
,'VMwareVspanSession'=>'VimServiceStub\VMwareVspanSession'
,'ArrayOfVMwareVspanSession'=>'VimServiceStub\ArrayOfVMwareVspanSession'
,'VMwareIpfixConfig'=>'VimServiceStub\VMwareIpfixConfig'
,'VMwareDVSConfigInfo'=>'VimServiceStub\VMwareDVSConfigInfo'
,'VMwareDVSConfigSpec'=>'VimServiceStub\VMwareDVSConfigSpec'
,'VMwareUplinkPortOrderPolicy'=>'VimServiceStub\VMwareUplinkPortOrderPolicy'
,'DVSFailureCriteria'=>'VimServiceStub\DVSFailureCriteria'
,'VmwareUplinkPortTeamingPolicy'=>'VimServiceStub\VmwareUplinkPortTeamingPolicy'
,'VmwareDistributedVirtualSwitchVlanSpec'=>'VimServiceStub\VmwareDistributedVirtualSwitchVlanSpec'
,'VmwareDistributedVirtualSwitchPvlanSpec'=>'VimServiceStub\VmwareDistributedVirtualSwitchPvlanSpec'
,'VmwareDistributedVirtualSwitchVlanIdSpec'=>'VimServiceStub\VmwareDistributedVirtualSwitchVlanIdSpec'
,'VmwareDistributedVirtualSwitchTrunkVlanSpec'=>'VimServiceStub\VmwareDistributedVirtualSwitchTrunkVlanSpec'
,'DVSSecurityPolicy'=>'VimServiceStub\DVSSecurityPolicy'
,'VMwareDVSPortSetting'=>'VimServiceStub\VMwareDVSPortSetting'
,'VMwareDVSPortgroupPolicy'=>'VimServiceStub\VMwareDVSPortgroupPolicy'
,'VMwareDVSPvlanConfigSpec'=>'VimServiceStub\VMwareDVSPvlanConfigSpec'
,'ArrayOfVMwareDVSPvlanConfigSpec'=>'VimServiceStub\ArrayOfVMwareDVSPvlanConfigSpec'
,'VMwareDVSPvlanMapEntry'=>'VimServiceStub\VMwareDVSPvlanMapEntry'
,'ArrayOfVMwareDVSPvlanMapEntry'=>'VimServiceStub\ArrayOfVMwareDVSPvlanMapEntry'
,'VMwareDVSVspanConfigSpec'=>'VimServiceStub\VMwareDVSVspanConfigSpec'
,'ArrayOfVMwareDVSVspanConfigSpec'=>'VimServiceStub\ArrayOfVMwareDVSVspanConfigSpec'
,'Event'=>'VimServiceStub\Event'
,'ArrayOfEvent'=>'VimServiceStub\ArrayOfEvent'
,'GeneralEvent'=>'VimServiceStub\GeneralEvent'
,'GeneralHostInfoEvent'=>'VimServiceStub\GeneralHostInfoEvent'
,'GeneralHostWarningEvent'=>'VimServiceStub\GeneralHostWarningEvent'
,'GeneralHostErrorEvent'=>'VimServiceStub\GeneralHostErrorEvent'
,'GeneralVmInfoEvent'=>'VimServiceStub\GeneralVmInfoEvent'
,'GeneralVmWarningEvent'=>'VimServiceStub\GeneralVmWarningEvent'
,'GeneralVmErrorEvent'=>'VimServiceStub\GeneralVmErrorEvent'
,'GeneralUserEvent'=>'VimServiceStub\GeneralUserEvent'
,'ExtendedEventPair'=>'VimServiceStub\ExtendedEventPair'
,'ArrayOfExtendedEventPair'=>'VimServiceStub\ArrayOfExtendedEventPair'
,'ExtendedEvent'=>'VimServiceStub\ExtendedEvent'
,'HealthStatusChangedEvent'=>'VimServiceStub\HealthStatusChangedEvent'
,'HostInventoryUnreadableEvent'=>'VimServiceStub\HostInventoryUnreadableEvent'
,'DatacenterEvent'=>'VimServiceStub\DatacenterEvent'
,'DatacenterCreatedEvent'=>'VimServiceStub\DatacenterCreatedEvent'
,'DatacenterRenamedEvent'=>'VimServiceStub\DatacenterRenamedEvent'
,'SessionEvent'=>'VimServiceStub\SessionEvent'
,'ServerStartedSessionEvent'=>'VimServiceStub\ServerStartedSessionEvent'
,'UserLoginSessionEvent'=>'VimServiceStub\UserLoginSessionEvent'
,'UserLogoutSessionEvent'=>'VimServiceStub\UserLogoutSessionEvent'
,'BadUsernameSessionEvent'=>'VimServiceStub\BadUsernameSessionEvent'
,'AlreadyAuthenticatedSessionEvent'=>'VimServiceStub\AlreadyAuthenticatedSessionEvent'
,'NoAccessUserEvent'=>'VimServiceStub\NoAccessUserEvent'
,'SessionTerminatedEvent'=>'VimServiceStub\SessionTerminatedEvent'
,'GlobalMessageChangedEvent'=>'VimServiceStub\GlobalMessageChangedEvent'
,'UpgradeEvent'=>'VimServiceStub\UpgradeEvent'
,'InfoUpgradeEvent'=>'VimServiceStub\InfoUpgradeEvent'
,'WarningUpgradeEvent'=>'VimServiceStub\WarningUpgradeEvent'
,'ErrorUpgradeEvent'=>'VimServiceStub\ErrorUpgradeEvent'
,'UserUpgradeEvent'=>'VimServiceStub\UserUpgradeEvent'
,'HostEvent'=>'VimServiceStub\HostEvent'
,'HostDasEvent'=>'VimServiceStub\HostDasEvent'
,'HostConnectedEvent'=>'VimServiceStub\HostConnectedEvent'
,'HostDisconnectedEvent'=>'VimServiceStub\HostDisconnectedEvent'
,'HostSyncFailedEvent'=>'VimServiceStub\HostSyncFailedEvent'
,'HostConnectionLostEvent'=>'VimServiceStub\HostConnectionLostEvent'
,'HostReconnectionFailedEvent'=>'VimServiceStub\HostReconnectionFailedEvent'
,'HostCnxFailedNoConnectionEvent'=>'VimServiceStub\HostCnxFailedNoConnectionEvent'
,'HostCnxFailedBadUsernameEvent'=>'VimServiceStub\HostCnxFailedBadUsernameEvent'
,'HostCnxFailedBadVersionEvent'=>'VimServiceStub\HostCnxFailedBadVersionEvent'
,'HostCnxFailedAlreadyManagedEvent'=>'VimServiceStub\HostCnxFailedAlreadyManagedEvent'
,'HostCnxFailedNoLicenseEvent'=>'VimServiceStub\HostCnxFailedNoLicenseEvent'
,'HostCnxFailedNetworkErrorEvent'=>'VimServiceStub\HostCnxFailedNetworkErrorEvent'
,'HostRemovedEvent'=>'VimServiceStub\HostRemovedEvent'
,'HostCnxFailedCcagentUpgradeEvent'=>'VimServiceStub\HostCnxFailedCcagentUpgradeEvent'
,'HostCnxFailedBadCcagentEvent'=>'VimServiceStub\HostCnxFailedBadCcagentEvent'
,'HostCnxFailedEvent'=>'VimServiceStub\HostCnxFailedEvent'
,'HostCnxFailedAccountFailedEvent'=>'VimServiceStub\HostCnxFailedAccountFailedEvent'
,'HostCnxFailedNoAccessEvent'=>'VimServiceStub\HostCnxFailedNoAccessEvent'
,'HostShutdownEvent'=>'VimServiceStub\HostShutdownEvent'
,'HostCnxFailedNotFoundEvent'=>'VimServiceStub\HostCnxFailedNotFoundEvent'
,'HostCnxFailedTimeoutEvent'=>'VimServiceStub\HostCnxFailedTimeoutEvent'
,'HostUpgradeFailedEvent'=>'VimServiceStub\HostUpgradeFailedEvent'
,'EnteringMaintenanceModeEvent'=>'VimServiceStub\EnteringMaintenanceModeEvent'
,'EnteredMaintenanceModeEvent'=>'VimServiceStub\EnteredMaintenanceModeEvent'
,'ExitMaintenanceModeEvent'=>'VimServiceStub\ExitMaintenanceModeEvent'
,'CanceledHostOperationEvent'=>'VimServiceStub\CanceledHostOperationEvent'
,'TimedOutHostOperationEvent'=>'VimServiceStub\TimedOutHostOperationEvent'
,'HostDasEnabledEvent'=>'VimServiceStub\HostDasEnabledEvent'
,'HostDasDisabledEvent'=>'VimServiceStub\HostDasDisabledEvent'
,'HostDasEnablingEvent'=>'VimServiceStub\HostDasEnablingEvent'
,'HostDasDisablingEvent'=>'VimServiceStub\HostDasDisablingEvent'
,'HostDasErrorEvent'=>'VimServiceStub\HostDasErrorEvent'
,'HostDasOkEvent'=>'VimServiceStub\HostDasOkEvent'
,'VcAgentUpgradedEvent'=>'VimServiceStub\VcAgentUpgradedEvent'
,'VcAgentUninstalledEvent'=>'VimServiceStub\VcAgentUninstalledEvent'
,'VcAgentUpgradeFailedEvent'=>'VimServiceStub\VcAgentUpgradeFailedEvent'
,'VcAgentUninstallFailedEvent'=>'VimServiceStub\VcAgentUninstallFailedEvent'
,'HostAddedEvent'=>'VimServiceStub\HostAddedEvent'
,'HostAddFailedEvent'=>'VimServiceStub\HostAddFailedEvent'
,'HostIpChangedEvent'=>'VimServiceStub\HostIpChangedEvent'
,'EnteringStandbyModeEvent'=>'VimServiceStub\EnteringStandbyModeEvent'
,'DrsEnteringStandbyModeEvent'=>'VimServiceStub\DrsEnteringStandbyModeEvent'
,'EnteredStandbyModeEvent'=>'VimServiceStub\EnteredStandbyModeEvent'
,'DrsEnteredStandbyModeEvent'=>'VimServiceStub\DrsEnteredStandbyModeEvent'
,'ExitingStandbyModeEvent'=>'VimServiceStub\ExitingStandbyModeEvent'
,'DrsExitingStandbyModeEvent'=>'VimServiceStub\DrsExitingStandbyModeEvent'
,'ExitedStandbyModeEvent'=>'VimServiceStub\ExitedStandbyModeEvent'
,'DrsExitedStandbyModeEvent'=>'VimServiceStub\DrsExitedStandbyModeEvent'
,'ExitStandbyModeFailedEvent'=>'VimServiceStub\ExitStandbyModeFailedEvent'
,'DrsExitStandbyModeFailedEvent'=>'VimServiceStub\DrsExitStandbyModeFailedEvent'
,'UpdatedAgentBeingRestartedEvent'=>'VimServiceStub\UpdatedAgentBeingRestartedEvent'
,'AccountCreatedEvent'=>'VimServiceStub\AccountCreatedEvent'
,'AccountRemovedEvent'=>'VimServiceStub\AccountRemovedEvent'
,'UserPasswordChanged'=>'VimServiceStub\UserPasswordChanged'
,'AccountUpdatedEvent'=>'VimServiceStub\AccountUpdatedEvent'
,'UserAssignedToGroup'=>'VimServiceStub\UserAssignedToGroup'
,'UserUnassignedFromGroup'=>'VimServiceStub\UserUnassignedFromGroup'
,'DatastorePrincipalConfigured'=>'VimServiceStub\DatastorePrincipalConfigured'
,'VMFSDatastoreCreatedEvent'=>'VimServiceStub\VMFSDatastoreCreatedEvent'
,'NASDatastoreCreatedEvent'=>'VimServiceStub\NASDatastoreCreatedEvent'
,'LocalDatastoreCreatedEvent'=>'VimServiceStub\LocalDatastoreCreatedEvent'
,'VMFSDatastoreExtendedEvent'=>'VimServiceStub\VMFSDatastoreExtendedEvent'
,'VMFSDatastoreExpandedEvent'=>'VimServiceStub\VMFSDatastoreExpandedEvent'
,'DatastoreRemovedOnHostEvent'=>'VimServiceStub\DatastoreRemovedOnHostEvent'
,'DatastoreRenamedOnHostEvent'=>'VimServiceStub\DatastoreRenamedOnHostEvent'
,'DuplicateIpDetectedEvent'=>'VimServiceStub\DuplicateIpDetectedEvent'
,'DatastoreDiscoveredEvent'=>'VimServiceStub\DatastoreDiscoveredEvent'
,'DrsResourceConfigureFailedEvent'=>'VimServiceStub\DrsResourceConfigureFailedEvent'
,'DrsResourceConfigureSyncedEvent'=>'VimServiceStub\DrsResourceConfigureSyncedEvent'
,'HostGetShortNameFailedEvent'=>'VimServiceStub\HostGetShortNameFailedEvent'
,'HostShortNameToIpFailedEvent'=>'VimServiceStub\HostShortNameToIpFailedEvent'
,'HostIpToShortNameFailedEvent'=>'VimServiceStub\HostIpToShortNameFailedEvent'
,'HostPrimaryAgentNotShortNameEvent'=>'VimServiceStub\HostPrimaryAgentNotShortNameEvent'
,'HostNotInClusterEvent'=>'VimServiceStub\HostNotInClusterEvent'
,'HostIsolationIpPingFailedEvent'=>'VimServiceStub\HostIsolationIpPingFailedEvent'
,'HostIpInconsistentEvent'=>'VimServiceStub\HostIpInconsistentEvent'
,'HostUserWorldSwapNotEnabledEvent'=>'VimServiceStub\HostUserWorldSwapNotEnabledEvent'
,'HostNonCompliantEvent'=>'VimServiceStub\HostNonCompliantEvent'
,'HostCompliantEvent'=>'VimServiceStub\HostCompliantEvent'
,'HostComplianceCheckedEvent'=>'VimServiceStub\HostComplianceCheckedEvent'
,'ClusterComplianceCheckedEvent'=>'VimServiceStub\ClusterComplianceCheckedEvent'
,'ProfileEvent'=>'VimServiceStub\ProfileEvent'
,'ProfileCreatedEvent'=>'VimServiceStub\ProfileCreatedEvent'
,'ProfileRemovedEvent'=>'VimServiceStub\ProfileRemovedEvent'
,'ProfileAssociatedEvent'=>'VimServiceStub\ProfileAssociatedEvent'
,'ProfileDissociatedEvent'=>'VimServiceStub\ProfileDissociatedEvent'
,'HostConfigAppliedEvent'=>'VimServiceStub\HostConfigAppliedEvent'
,'ProfileReferenceHostChangedEvent'=>'VimServiceStub\ProfileReferenceHostChangedEvent'
,'ProfileChangedEvent'=>'VimServiceStub\ProfileChangedEvent'
,'HostProfileAppliedEvent'=>'VimServiceStub\HostProfileAppliedEvent'
,'HostShortNameInconsistentEvent'=>'VimServiceStub\HostShortNameInconsistentEvent'
,'HostNoRedundantManagementNetworkEvent'=>'VimServiceStub\HostNoRedundantManagementNetworkEvent'
,'HostNoAvailableNetworksEvent'=>'VimServiceStub\HostNoAvailableNetworksEvent'
,'HostExtraNetworksEvent'=>'VimServiceStub\HostExtraNetworksEvent'
,'HostNoHAEnabledPortGroupsEvent'=>'VimServiceStub\HostNoHAEnabledPortGroupsEvent'
,'HostMissingNetworksEvent'=>'VimServiceStub\HostMissingNetworksEvent'
,'VnicPortArgument'=>'VimServiceStub\VnicPortArgument'
,'ArrayOfVnicPortArgument'=>'VimServiceStub\ArrayOfVnicPortArgument'
,'HostVnicConnectedToCustomizedDVPortEvent'=>'VimServiceStub\HostVnicConnectedToCustomizedDVPortEvent'
,'GhostDvsProxySwitchDetectedEvent'=>'VimServiceStub\GhostDvsProxySwitchDetectedEvent'
,'GhostDvsProxySwitchRemovedEvent'=>'VimServiceStub\GhostDvsProxySwitchRemovedEvent'
,'VmEvent'=>'VimServiceStub\VmEvent'
,'VmPoweredOffEvent'=>'VimServiceStub\VmPoweredOffEvent'
,'VmPoweredOnEvent'=>'VimServiceStub\VmPoweredOnEvent'
,'VmSuspendedEvent'=>'VimServiceStub\VmSuspendedEvent'
,'VmStartingEvent'=>'VimServiceStub\VmStartingEvent'
,'VmStoppingEvent'=>'VimServiceStub\VmStoppingEvent'
,'VmSuspendingEvent'=>'VimServiceStub\VmSuspendingEvent'
,'VmResumingEvent'=>'VimServiceStub\VmResumingEvent'
,'VmDisconnectedEvent'=>'VimServiceStub\VmDisconnectedEvent'
,'VmRemoteConsoleConnectedEvent'=>'VimServiceStub\VmRemoteConsoleConnectedEvent'
,'VmRemoteConsoleDisconnectedEvent'=>'VimServiceStub\VmRemoteConsoleDisconnectedEvent'
,'VmDiscoveredEvent'=>'VimServiceStub\VmDiscoveredEvent'
,'VmOrphanedEvent'=>'VimServiceStub\VmOrphanedEvent'
,'VmBeingCreatedEvent'=>'VimServiceStub\VmBeingCreatedEvent'
,'VmCreatedEvent'=>'VimServiceStub\VmCreatedEvent'
,'VmStartRecordingEvent'=>'VimServiceStub\VmStartRecordingEvent'
,'VmEndRecordingEvent'=>'VimServiceStub\VmEndRecordingEvent'
,'VmStartReplayingEvent'=>'VimServiceStub\VmStartReplayingEvent'
,'VmEndReplayingEvent'=>'VimServiceStub\VmEndReplayingEvent'
,'VmRegisteredEvent'=>'VimServiceStub\VmRegisteredEvent'
,'VmAutoRenameEvent'=>'VimServiceStub\VmAutoRenameEvent'
,'VmBeingHotMigratedEvent'=>'VimServiceStub\VmBeingHotMigratedEvent'
,'VmResettingEvent'=>'VimServiceStub\VmResettingEvent'
,'VmStaticMacConflictEvent'=>'VimServiceStub\VmStaticMacConflictEvent'
,'VmMacConflictEvent'=>'VimServiceStub\VmMacConflictEvent'
,'VmBeingDeployedEvent'=>'VimServiceStub\VmBeingDeployedEvent'
,'VmDeployFailedEvent'=>'VimServiceStub\VmDeployFailedEvent'
,'VmDeployedEvent'=>'VimServiceStub\VmDeployedEvent'
,'VmMacChangedEvent'=>'VimServiceStub\VmMacChangedEvent'
,'VmMacAssignedEvent'=>'VimServiceStub\VmMacAssignedEvent'
,'VmUuidConflictEvent'=>'VimServiceStub\VmUuidConflictEvent'
,'VmInstanceUuidConflictEvent'=>'VimServiceStub\VmInstanceUuidConflictEvent'
,'VmBeingMigratedEvent'=>'VimServiceStub\VmBeingMigratedEvent'
,'VmFailedMigrateEvent'=>'VimServiceStub\VmFailedMigrateEvent'
,'VmMigratedEvent'=>'VimServiceStub\VmMigratedEvent'
,'VmUnsupportedStartingEvent'=>'VimServiceStub\VmUnsupportedStartingEvent'
,'DrsVmMigratedEvent'=>'VimServiceStub\DrsVmMigratedEvent'
,'DrsVmPoweredOnEvent'=>'VimServiceStub\DrsVmPoweredOnEvent'
,'DrsRuleViolationEvent'=>'VimServiceStub\DrsRuleViolationEvent'
,'DrsRuleComplianceEvent'=>'VimServiceStub\DrsRuleComplianceEvent'
,'VmRelocateSpecEvent'=>'VimServiceStub\VmRelocateSpecEvent'
,'VmBeingRelocatedEvent'=>'VimServiceStub\VmBeingRelocatedEvent'
,'VmRelocatedEvent'=>'VimServiceStub\VmRelocatedEvent'
,'VmRelocateFailedEvent'=>'VimServiceStub\VmRelocateFailedEvent'
,'VmEmigratingEvent'=>'VimServiceStub\VmEmigratingEvent'
,'VmCloneEvent'=>'VimServiceStub\VmCloneEvent'
,'VmBeingClonedEvent'=>'VimServiceStub\VmBeingClonedEvent'
,'VmBeingClonedNoFolderEvent'=>'VimServiceStub\VmBeingClonedNoFolderEvent'
,'VmCloneFailedEvent'=>'VimServiceStub\VmCloneFailedEvent'
,'VmClonedEvent'=>'VimServiceStub\VmClonedEvent'
,'VmResourceReallocatedEvent'=>'VimServiceStub\VmResourceReallocatedEvent'
,'VmRenamedEvent'=>'VimServiceStub\VmRenamedEvent'
,'VmDateRolledBackEvent'=>'VimServiceStub\VmDateRolledBackEvent'
,'VmNoNetworkAccessEvent'=>'VimServiceStub\VmNoNetworkAccessEvent'
,'VmDiskFailedEvent'=>'VimServiceStub\VmDiskFailedEvent'
,'VmFailedToPowerOnEvent'=>'VimServiceStub\VmFailedToPowerOnEvent'
,'VmFailedToPowerOffEvent'=>'VimServiceStub\VmFailedToPowerOffEvent'
,'VmFailedToSuspendEvent'=>'VimServiceStub\VmFailedToSuspendEvent'
,'VmFailedToResetEvent'=>'VimServiceStub\VmFailedToResetEvent'
,'VmFailedToShutdownGuestEvent'=>'VimServiceStub\VmFailedToShutdownGuestEvent'
,'VmFailedToRebootGuestEvent'=>'VimServiceStub\VmFailedToRebootGuestEvent'
,'VmFailedToStandbyGuestEvent'=>'VimServiceStub\VmFailedToStandbyGuestEvent'
,'VmRemovedEvent'=>'VimServiceStub\VmRemovedEvent'
,'VmGuestShutdownEvent'=>'VimServiceStub\VmGuestShutdownEvent'
,'VmGuestRebootEvent'=>'VimServiceStub\VmGuestRebootEvent'
,'VmGuestStandbyEvent'=>'VimServiceStub\VmGuestStandbyEvent'
,'VmUpgradingEvent'=>'VimServiceStub\VmUpgradingEvent'
,'VmUpgradeCompleteEvent'=>'VimServiceStub\VmUpgradeCompleteEvent'
,'VmUpgradeFailedEvent'=>'VimServiceStub\VmUpgradeFailedEvent'
,'VmRestartedOnAlternateHostEvent'=>'VimServiceStub\VmRestartedOnAlternateHostEvent'
,'VmReconfiguredEvent'=>'VimServiceStub\VmReconfiguredEvent'
,'VmMessageEvent'=>'VimServiceStub\VmMessageEvent'
,'VmMessageWarningEvent'=>'VimServiceStub\VmMessageWarningEvent'
,'VmMessageErrorEvent'=>'VimServiceStub\VmMessageErrorEvent'
,'VmConfigMissingEvent'=>'VimServiceStub\VmConfigMissingEvent'
,'VmPowerOffOnIsolationEvent'=>'VimServiceStub\VmPowerOffOnIsolationEvent'
,'VmShutdownOnIsolationEvent'=>'VimServiceStub\VmShutdownOnIsolationEvent'
,'VmFailoverFailed'=>'VimServiceStub\VmFailoverFailed'
,'VmDasBeingResetEvent'=>'VimServiceStub\VmDasBeingResetEvent'
,'VmDasResetFailedEvent'=>'VimServiceStub\VmDasResetFailedEvent'
,'VmMaxRestartCountReached'=>'VimServiceStub\VmMaxRestartCountReached'
,'VmMaxFTRestartCountReached'=>'VimServiceStub\VmMaxFTRestartCountReached'
,'VmDasBeingResetWithScreenshotEvent'=>'VimServiceStub\VmDasBeingResetWithScreenshotEvent'
,'NotEnoughResourcesToStartVmEvent'=>'VimServiceStub\NotEnoughResourcesToStartVmEvent'
,'VmUuidAssignedEvent'=>'VimServiceStub\VmUuidAssignedEvent'
,'VmInstanceUuidAssignedEvent'=>'VimServiceStub\VmInstanceUuidAssignedEvent'
,'VmUuidChangedEvent'=>'VimServiceStub\VmUuidChangedEvent'
,'VmInstanceUuidChangedEvent'=>'VimServiceStub\VmInstanceUuidChangedEvent'
,'VmWwnConflictEvent'=>'VimServiceStub\VmWwnConflictEvent'
,'VmAcquiredMksTicketEvent'=>'VimServiceStub\VmAcquiredMksTicketEvent'
,'VmAcquiredTicketEvent'=>'VimServiceStub\VmAcquiredTicketEvent'
,'HostWwnConflictEvent'=>'VimServiceStub\HostWwnConflictEvent'
,'VmWwnAssignedEvent'=>'VimServiceStub\VmWwnAssignedEvent'
,'VmWwnChangedEvent'=>'VimServiceStub\VmWwnChangedEvent'
,'VmSecondaryAddedEvent'=>'VimServiceStub\VmSecondaryAddedEvent'
,'VmFaultToleranceTurnedOffEvent'=>'VimServiceStub\VmFaultToleranceTurnedOffEvent'
,'VmFaultToleranceStateChangedEvent'=>'VimServiceStub\VmFaultToleranceStateChangedEvent'
,'VmSecondaryDisabledEvent'=>'VimServiceStub\VmSecondaryDisabledEvent'
,'VmSecondaryDisabledBySystemEvent'=>'VimServiceStub\VmSecondaryDisabledBySystemEvent'
,'VmSecondaryEnabledEvent'=>'VimServiceStub\VmSecondaryEnabledEvent'
,'VmStartingSecondaryEvent'=>'VimServiceStub\VmStartingSecondaryEvent'
,'VmSecondaryStartedEvent'=>'VimServiceStub\VmSecondaryStartedEvent'
,'VmFailedUpdatingSecondaryConfig'=>'VimServiceStub\VmFailedUpdatingSecondaryConfig'
,'VmFailedStartingSecondaryEvent'=>'VimServiceStub\VmFailedStartingSecondaryEvent'
,'VmTimedoutStartingSecondaryEvent'=>'VimServiceStub\VmTimedoutStartingSecondaryEvent'
,'VmNoCompatibleHostForSecondaryEvent'=>'VimServiceStub\VmNoCompatibleHostForSecondaryEvent'
,'VmPrimaryFailoverEvent'=>'VimServiceStub\VmPrimaryFailoverEvent'
,'VmFaultToleranceVmTerminatedEvent'=>'VimServiceStub\VmFaultToleranceVmTerminatedEvent'
,'HostWwnChangedEvent'=>'VimServiceStub\HostWwnChangedEvent'
,'HostAdminDisableEvent'=>'VimServiceStub\HostAdminDisableEvent'
,'HostAdminEnableEvent'=>'VimServiceStub\HostAdminEnableEvent'
,'HostEnableAdminFailedEvent'=>'VimServiceStub\HostEnableAdminFailedEvent'
,'VmFailedRelayoutOnVmfs2DatastoreEvent'=>'VimServiceStub\VmFailedRelayoutOnVmfs2DatastoreEvent'
,'VmFailedRelayoutEvent'=>'VimServiceStub\VmFailedRelayoutEvent'
,'VmRelayoutSuccessfulEvent'=>'VimServiceStub\VmRelayoutSuccessfulEvent'
,'VmRelayoutUpToDateEvent'=>'VimServiceStub\VmRelayoutUpToDateEvent'
,'VmConnectedEvent'=>'VimServiceStub\VmConnectedEvent'
,'VmPoweringOnWithCustomizedDVPortEvent'=>'VimServiceStub\VmPoweringOnWithCustomizedDVPortEvent'
,'VmDasUpdateErrorEvent'=>'VimServiceStub\VmDasUpdateErrorEvent'
,'NoMaintenanceModeDrsRecommendationForVM'=>'VimServiceStub\NoMaintenanceModeDrsRecommendationForVM'
,'VmDasUpdateOkEvent'=>'VimServiceStub\VmDasUpdateOkEvent'
,'ScheduledTaskEvent'=>'VimServiceStub\ScheduledTaskEvent'
,'ScheduledTaskCreatedEvent'=>'VimServiceStub\ScheduledTaskCreatedEvent'
,'ScheduledTaskStartedEvent'=>'VimServiceStub\ScheduledTaskStartedEvent'
,'ScheduledTaskRemovedEvent'=>'VimServiceStub\ScheduledTaskRemovedEvent'
,'ScheduledTaskReconfiguredEvent'=>'VimServiceStub\ScheduledTaskReconfiguredEvent'
,'ScheduledTaskCompletedEvent'=>'VimServiceStub\ScheduledTaskCompletedEvent'
,'ScheduledTaskFailedEvent'=>'VimServiceStub\ScheduledTaskFailedEvent'
,'ScheduledTaskEmailCompletedEvent'=>'VimServiceStub\ScheduledTaskEmailCompletedEvent'
,'ScheduledTaskEmailFailedEvent'=>'VimServiceStub\ScheduledTaskEmailFailedEvent'
,'AlarmEvent'=>'VimServiceStub\AlarmEvent'
,'AlarmCreatedEvent'=>'VimServiceStub\AlarmCreatedEvent'
,'AlarmStatusChangedEvent'=>'VimServiceStub\AlarmStatusChangedEvent'
,'AlarmActionTriggeredEvent'=>'VimServiceStub\AlarmActionTriggeredEvent'
,'AlarmEmailCompletedEvent'=>'VimServiceStub\AlarmEmailCompletedEvent'
,'AlarmEmailFailedEvent'=>'VimServiceStub\AlarmEmailFailedEvent'
,'AlarmSnmpCompletedEvent'=>'VimServiceStub\AlarmSnmpCompletedEvent'
,'AlarmSnmpFailedEvent'=>'VimServiceStub\AlarmSnmpFailedEvent'
,'AlarmScriptCompleteEvent'=>'VimServiceStub\AlarmScriptCompleteEvent'
,'AlarmScriptFailedEvent'=>'VimServiceStub\AlarmScriptFailedEvent'
,'AlarmRemovedEvent'=>'VimServiceStub\AlarmRemovedEvent'
,'AlarmReconfiguredEvent'=>'VimServiceStub\AlarmReconfiguredEvent'
,'AlarmAcknowledgedEvent'=>'VimServiceStub\AlarmAcknowledgedEvent'
,'AlarmClearedEvent'=>'VimServiceStub\AlarmClearedEvent'
,'CustomFieldEvent'=>'VimServiceStub\CustomFieldEvent'
,'CustomFieldDefEvent'=>'VimServiceStub\CustomFieldDefEvent'
,'CustomFieldDefAddedEvent'=>'VimServiceStub\CustomFieldDefAddedEvent'
,'CustomFieldDefRemovedEvent'=>'VimServiceStub\CustomFieldDefRemovedEvent'
,'CustomFieldDefRenamedEvent'=>'VimServiceStub\CustomFieldDefRenamedEvent'
,'CustomFieldValueChangedEvent'=>'VimServiceStub\CustomFieldValueChangedEvent'
,'AuthorizationEvent'=>'VimServiceStub\AuthorizationEvent'
,'PermissionEvent'=>'VimServiceStub\PermissionEvent'
,'PermissionAddedEvent'=>'VimServiceStub\PermissionAddedEvent'
,'PermissionUpdatedEvent'=>'VimServiceStub\PermissionUpdatedEvent'
,'PermissionRemovedEvent'=>'VimServiceStub\PermissionRemovedEvent'
,'RoleEvent'=>'VimServiceStub\RoleEvent'
,'RoleAddedEvent'=>'VimServiceStub\RoleAddedEvent'
,'RoleUpdatedEvent'=>'VimServiceStub\RoleUpdatedEvent'
,'RoleRemovedEvent'=>'VimServiceStub\RoleRemovedEvent'
,'DatastoreEvent'=>'VimServiceStub\DatastoreEvent'
,'DatastoreDestroyedEvent'=>'VimServiceStub\DatastoreDestroyedEvent'
,'DatastoreRenamedEvent'=>'VimServiceStub\DatastoreRenamedEvent'
,'DatastoreCapacityIncreasedEvent'=>'VimServiceStub\DatastoreCapacityIncreasedEvent'
,'DatastoreDuplicatedEvent'=>'VimServiceStub\DatastoreDuplicatedEvent'
,'DatastoreFileEvent'=>'VimServiceStub\DatastoreFileEvent'
,'DatastoreFileCopiedEvent'=>'VimServiceStub\DatastoreFileCopiedEvent'
,'DatastoreFileMovedEvent'=>'VimServiceStub\DatastoreFileMovedEvent'
,'DatastoreFileDeletedEvent'=>'VimServiceStub\DatastoreFileDeletedEvent'
,'NonVIWorkloadDetectedOnDatastoreEvent'=>'VimServiceStub\NonVIWorkloadDetectedOnDatastoreEvent'
,'DatastoreIORMReconfiguredEvent'=>'VimServiceStub\DatastoreIORMReconfiguredEvent'
,'TaskEvent'=>'VimServiceStub\TaskEvent'
,'TaskTimeoutEvent'=>'VimServiceStub\TaskTimeoutEvent'
,'LicenseEvent'=>'VimServiceStub\LicenseEvent'
,'ServerLicenseExpiredEvent'=>'VimServiceStub\ServerLicenseExpiredEvent'
,'HostLicenseExpiredEvent'=>'VimServiceStub\HostLicenseExpiredEvent'
,'VMotionLicenseExpiredEvent'=>'VimServiceStub\VMotionLicenseExpiredEvent'
,'NoLicenseEvent'=>'VimServiceStub\NoLicenseEvent'
,'LicenseServerUnavailableEvent'=>'VimServiceStub\LicenseServerUnavailableEvent'
,'LicenseServerAvailableEvent'=>'VimServiceStub\LicenseServerAvailableEvent'
,'LicenseExpiredEvent'=>'VimServiceStub\LicenseExpiredEvent'
,'InvalidEditionEvent'=>'VimServiceStub\InvalidEditionEvent'
,'HostInventoryFullEvent'=>'VimServiceStub\HostInventoryFullEvent'
,'LicenseRestrictedEvent'=>'VimServiceStub\LicenseRestrictedEvent'
,'IncorrectHostInformationEvent'=>'VimServiceStub\IncorrectHostInformationEvent'
,'UnlicensedVirtualMachinesEvent'=>'VimServiceStub\UnlicensedVirtualMachinesEvent'
,'UnlicensedVirtualMachinesFoundEvent'=>'VimServiceStub\UnlicensedVirtualMachinesFoundEvent'
,'AllVirtualMachinesLicensedEvent'=>'VimServiceStub\AllVirtualMachinesLicensedEvent'
,'LicenseNonComplianceEvent'=>'VimServiceStub\LicenseNonComplianceEvent'
,'MigrationEvent'=>'VimServiceStub\MigrationEvent'
,'MigrationWarningEvent'=>'VimServiceStub\MigrationWarningEvent'
,'MigrationErrorEvent'=>'VimServiceStub\MigrationErrorEvent'
,'MigrationHostWarningEvent'=>'VimServiceStub\MigrationHostWarningEvent'
,'MigrationHostErrorEvent'=>'VimServiceStub\MigrationHostErrorEvent'
,'MigrationResourceWarningEvent'=>'VimServiceStub\MigrationResourceWarningEvent'
,'MigrationResourceErrorEvent'=>'VimServiceStub\MigrationResourceErrorEvent'
,'ClusterEvent'=>'VimServiceStub\ClusterEvent'
,'DasEnabledEvent'=>'VimServiceStub\DasEnabledEvent'
,'DasDisabledEvent'=>'VimServiceStub\DasDisabledEvent'
,'DasAdmissionControlDisabledEvent'=>'VimServiceStub\DasAdmissionControlDisabledEvent'
,'DasAdmissionControlEnabledEvent'=>'VimServiceStub\DasAdmissionControlEnabledEvent'
,'DasHostFailedEvent'=>'VimServiceStub\DasHostFailedEvent'
,'DasHostIsolatedEvent'=>'VimServiceStub\DasHostIsolatedEvent'
,'DasClusterIsolatedEvent'=>'VimServiceStub\DasClusterIsolatedEvent'
,'DasAgentUnavailableEvent'=>'VimServiceStub\DasAgentUnavailableEvent'
,'DasAgentFoundEvent'=>'VimServiceStub\DasAgentFoundEvent'
,'InsufficientFailoverResourcesEvent'=>'VimServiceStub\InsufficientFailoverResourcesEvent'
,'FailoverLevelRestored'=>'VimServiceStub\FailoverLevelRestored'
,'ClusterOvercommittedEvent'=>'VimServiceStub\ClusterOvercommittedEvent'
,'HostOvercommittedEvent'=>'VimServiceStub\HostOvercommittedEvent'
,'ClusterStatusChangedEvent'=>'VimServiceStub\ClusterStatusChangedEvent'
,'HostStatusChangedEvent'=>'VimServiceStub\HostStatusChangedEvent'
,'ClusterCreatedEvent'=>'VimServiceStub\ClusterCreatedEvent'
,'ClusterDestroyedEvent'=>'VimServiceStub\ClusterDestroyedEvent'
,'DrsEnabledEvent'=>'VimServiceStub\DrsEnabledEvent'
,'DrsDisabledEvent'=>'VimServiceStub\DrsDisabledEvent'
,'ClusterReconfiguredEvent'=>'VimServiceStub\ClusterReconfiguredEvent'
,'HostMonitoringStateChangedEvent'=>'VimServiceStub\HostMonitoringStateChangedEvent'
,'VmHealthMonitoringStateChangedEvent'=>'VimServiceStub\VmHealthMonitoringStateChangedEvent'
,'ResourcePoolEvent'=>'VimServiceStub\ResourcePoolEvent'
,'ResourcePoolCreatedEvent'=>'VimServiceStub\ResourcePoolCreatedEvent'
,'ResourcePoolDestroyedEvent'=>'VimServiceStub\ResourcePoolDestroyedEvent'
,'ResourcePoolMovedEvent'=>'VimServiceStub\ResourcePoolMovedEvent'
,'ResourcePoolReconfiguredEvent'=>'VimServiceStub\ResourcePoolReconfiguredEvent'
,'ResourceViolatedEvent'=>'VimServiceStub\ResourceViolatedEvent'
,'VmResourcePoolMovedEvent'=>'VimServiceStub\VmResourcePoolMovedEvent'
,'TemplateUpgradeEvent'=>'VimServiceStub\TemplateUpgradeEvent'
,'TemplateBeingUpgradedEvent'=>'VimServiceStub\TemplateBeingUpgradedEvent'
,'TemplateUpgradeFailedEvent'=>'VimServiceStub\TemplateUpgradeFailedEvent'
,'TemplateUpgradedEvent'=>'VimServiceStub\TemplateUpgradedEvent'
,'CustomizationEvent'=>'VimServiceStub\CustomizationEvent'
,'CustomizationStartedEvent'=>'VimServiceStub\CustomizationStartedEvent'
,'CustomizationSucceeded'=>'VimServiceStub\CustomizationSucceeded'
,'CustomizationFailed'=>'VimServiceStub\CustomizationFailed'
,'CustomizationUnknownFailure'=>'VimServiceStub\CustomizationUnknownFailure'
,'CustomizationSysprepFailed'=>'VimServiceStub\CustomizationSysprepFailed'
,'CustomizationLinuxIdentityFailed'=>'VimServiceStub\CustomizationLinuxIdentityFailed'
,'CustomizationNetworkSetupFailed'=>'VimServiceStub\CustomizationNetworkSetupFailed'
,'LockerMisconfiguredEvent'=>'VimServiceStub\LockerMisconfiguredEvent'
,'LockerReconfiguredEvent'=>'VimServiceStub\LockerReconfiguredEvent'
,'NoDatastoresConfiguredEvent'=>'VimServiceStub\NoDatastoresConfiguredEvent'
,'AdminPasswordNotChangedEvent'=>'VimServiceStub\AdminPasswordNotChangedEvent'
,'HostInAuditModeEvent'=>'VimServiceStub\HostInAuditModeEvent'
,'LocalTSMEnabledEvent'=>'VimServiceStub\LocalTSMEnabledEvent'
,'RemoteTSMEnabledEvent'=>'VimServiceStub\RemoteTSMEnabledEvent'
,'VimAccountPasswordChangedEvent'=>'VimServiceStub\VimAccountPasswordChangedEvent'
,'IScsiBootFailureEvent'=>'VimServiceStub\IScsiBootFailureEvent'
,'DvsEvent'=>'VimServiceStub\DvsEvent'
,'DvsCreatedEvent'=>'VimServiceStub\DvsCreatedEvent'
,'DvsRenamedEvent'=>'VimServiceStub\DvsRenamedEvent'
,'DvsReconfiguredEvent'=>'VimServiceStub\DvsReconfiguredEvent'
,'DvsUpgradeAvailableEvent'=>'VimServiceStub\DvsUpgradeAvailableEvent'
,'DvsUpgradeInProgressEvent'=>'VimServiceStub\DvsUpgradeInProgressEvent'
,'DvsUpgradeRejectedEvent'=>'VimServiceStub\DvsUpgradeRejectedEvent'
,'DvsUpgradedEvent'=>'VimServiceStub\DvsUpgradedEvent'
,'DvsHostJoinedEvent'=>'VimServiceStub\DvsHostJoinedEvent'
,'DvsHostLeftEvent'=>'VimServiceStub\DvsHostLeftEvent'
,'DvsOutOfSyncHostArgument'=>'VimServiceStub\DvsOutOfSyncHostArgument'
,'ArrayOfDvsOutOfSyncHostArgument'=>'VimServiceStub\ArrayOfDvsOutOfSyncHostArgument'
,'OutOfSyncDvsHost'=>'VimServiceStub\OutOfSyncDvsHost'
,'DvsHostWentOutOfSyncEvent'=>'VimServiceStub\DvsHostWentOutOfSyncEvent'
,'DvsHostBackInSyncEvent'=>'VimServiceStub\DvsHostBackInSyncEvent'
,'DvsHostStatusUpdated'=>'VimServiceStub\DvsHostStatusUpdated'
,'DvsPortCreatedEvent'=>'VimServiceStub\DvsPortCreatedEvent'
,'DvsPortReconfiguredEvent'=>'VimServiceStub\DvsPortReconfiguredEvent'
,'DvsPortDeletedEvent'=>'VimServiceStub\DvsPortDeletedEvent'
,'DvsPortConnectedEvent'=>'VimServiceStub\DvsPortConnectedEvent'
,'DvsPortDisconnectedEvent'=>'VimServiceStub\DvsPortDisconnectedEvent'
,'DvsPortLinkUpEvent'=>'VimServiceStub\DvsPortLinkUpEvent'
,'DvsPortLinkDownEvent'=>'VimServiceStub\DvsPortLinkDownEvent'
,'DvsPortJoinPortgroupEvent'=>'VimServiceStub\DvsPortJoinPortgroupEvent'
,'DvsPortLeavePortgroupEvent'=>'VimServiceStub\DvsPortLeavePortgroupEvent'
,'DvsPortBlockedEvent'=>'VimServiceStub\DvsPortBlockedEvent'
,'DvsPortUnblockedEvent'=>'VimServiceStub\DvsPortUnblockedEvent'
,'DvsPortEnteredPassthruEvent'=>'VimServiceStub\DvsPortEnteredPassthruEvent'
,'DvsPortExitedPassthruEvent'=>'VimServiceStub\DvsPortExitedPassthruEvent'
,'DvsDestroyedEvent'=>'VimServiceStub\DvsDestroyedEvent'
,'DvsMergedEvent'=>'VimServiceStub\DvsMergedEvent'
,'DVPortgroupEvent'=>'VimServiceStub\DVPortgroupEvent'
,'DVPortgroupCreatedEvent'=>'VimServiceStub\DVPortgroupCreatedEvent'
,'DVPortgroupRenamedEvent'=>'VimServiceStub\DVPortgroupRenamedEvent'
,'DVPortgroupReconfiguredEvent'=>'VimServiceStub\DVPortgroupReconfiguredEvent'
,'DVPortgroupDestroyedEvent'=>'VimServiceStub\DVPortgroupDestroyedEvent'
,'DrsInvocationFailedEvent'=>'VimServiceStub\DrsInvocationFailedEvent'
,'DrsRecoveredFromFailureEvent'=>'VimServiceStub\DrsRecoveredFromFailureEvent'
,'VmReloadFromPathEvent'=>'VimServiceStub\VmReloadFromPathEvent'
,'VmReloadFromPathFailedEvent'=>'VimServiceStub\VmReloadFromPathFailedEvent'
,'EventArgument'=>'VimServiceStub\EventArgument'
,'RoleEventArgument'=>'VimServiceStub\RoleEventArgument'
,'EntityEventArgument'=>'VimServiceStub\EntityEventArgument'
,'ManagedEntityEventArgument'=>'VimServiceStub\ManagedEntityEventArgument'
,'FolderEventArgument'=>'VimServiceStub\FolderEventArgument'
,'DatacenterEventArgument'=>'VimServiceStub\DatacenterEventArgument'
,'ComputeResourceEventArgument'=>'VimServiceStub\ComputeResourceEventArgument'
,'ResourcePoolEventArgument'=>'VimServiceStub\ResourcePoolEventArgument'
,'HostEventArgument'=>'VimServiceStub\HostEventArgument'
,'ArrayOfHostEventArgument'=>'VimServiceStub\ArrayOfHostEventArgument'
,'VmEventArgument'=>'VimServiceStub\VmEventArgument'
,'ArrayOfVmEventArgument'=>'VimServiceStub\ArrayOfVmEventArgument'
,'DatastoreEventArgument'=>'VimServiceStub\DatastoreEventArgument'
,'NetworkEventArgument'=>'VimServiceStub\NetworkEventArgument'
,'AlarmEventArgument'=>'VimServiceStub\AlarmEventArgument'
,'ScheduledTaskEventArgument'=>'VimServiceStub\ScheduledTaskEventArgument'
,'ProfileEventArgument'=>'VimServiceStub\ProfileEventArgument'
,'DvsEventArgument'=>'VimServiceStub\DvsEventArgument'
,'EventArgDesc'=>'VimServiceStub\EventArgDesc'
,'ArrayOfEventArgDesc'=>'VimServiceStub\ArrayOfEventArgDesc'
,'EventDescriptionEventDetail'=>'VimServiceStub\EventDescriptionEventDetail'
,'ArrayOfEventDescriptionEventDetail'=>'VimServiceStub\ArrayOfEventDescriptionEventDetail'
,'EventDescription'=>'VimServiceStub\EventDescription'
,'EventEx'=>'VimServiceStub\EventEx'
,'EventFilterSpecByEntity'=>'VimServiceStub\EventFilterSpecByEntity'
,'EventFilterSpecByTime'=>'VimServiceStub\EventFilterSpecByTime'
,'EventFilterSpecByUsername'=>'VimServiceStub\EventFilterSpecByUsername'
,'EventFilterSpec'=>'VimServiceStub\EventFilterSpec'
,'ExtExtendedProductInfo'=>'VimServiceStub\ExtExtendedProductInfo'
,'ManagedByInfo'=>'VimServiceStub\ManagedByInfo'
,'ExtManagedEntityInfo'=>'VimServiceStub\ExtManagedEntityInfo'
,'ArrayOfExtManagedEntityInfo'=>'VimServiceStub\ArrayOfExtManagedEntityInfo'
,'ExtSolutionManagerInfoTabInfo'=>'VimServiceStub\ExtSolutionManagerInfoTabInfo'
,'ArrayOfExtSolutionManagerInfoTabInfo'=>'VimServiceStub\ArrayOfExtSolutionManagerInfoTabInfo'
,'ExtSolutionManagerInfo'=>'VimServiceStub\ExtSolutionManagerInfo'
,'ActiveDirectoryFault'=>'VimServiceStub\ActiveDirectoryFault'
,'AdminDisabled'=>'VimServiceStub\AdminDisabled'
,'AdminNotDisabled'=>'VimServiceStub\AdminNotDisabled'
,'AffinityConfigured'=>'VimServiceStub\AffinityConfigured'
,'AgentInstallFailed'=>'VimServiceStub\AgentInstallFailed'
,'AlreadyBeingManaged'=>'VimServiceStub\AlreadyBeingManaged'
,'AlreadyConnected'=>'VimServiceStub\AlreadyConnected'
,'AlreadyExists'=>'VimServiceStub\AlreadyExists'
,'AlreadyUpgraded'=>'VimServiceStub\AlreadyUpgraded'
,'AnswerFileUpdateFailure'=>'VimServiceStub\AnswerFileUpdateFailure'
,'ArrayOfAnswerFileUpdateFailure'=>'VimServiceStub\ArrayOfAnswerFileUpdateFailure'
,'AnswerFileUpdateFailed'=>'VimServiceStub\AnswerFileUpdateFailed'
,'ApplicationQuiesceFault'=>'VimServiceStub\ApplicationQuiesceFault'
,'AuthMinimumAdminPermission'=>'VimServiceStub\AuthMinimumAdminPermission'
,'BlockedByFirewall'=>'VimServiceStub\BlockedByFirewall'
,'CAMServerRefusedConnection'=>'VimServiceStub\CAMServerRefusedConnection'
,'CannotAccessFile'=>'VimServiceStub\CannotAccessFile'
,'CannotAccessLocalSource'=>'VimServiceStub\CannotAccessLocalSource'
,'CannotAccessNetwork'=>'VimServiceStub\CannotAccessNetwork'
,'CannotAccessVmComponent'=>'VimServiceStub\CannotAccessVmComponent'
,'CannotAccessVmConfig'=>'VimServiceStub\CannotAccessVmConfig'
,'CannotAccessVmDevice'=>'VimServiceStub\CannotAccessVmDevice'
,'CannotAccessVmDisk'=>'VimServiceStub\CannotAccessVmDisk'
,'CannotAddHostWithFTVmAsStandalone'=>'VimServiceStub\CannotAddHostWithFTVmAsStandalone'
,'CannotAddHostWithFTVmToDifferentCluster'=>'VimServiceStub\CannotAddHostWithFTVmToDifferentCluster'
,'CannotAddHostWithFTVmToNonHACluster'=>'VimServiceStub\CannotAddHostWithFTVmToNonHACluster'
,'CannotChangeDrsBehaviorForFtSecondary'=>'VimServiceStub\CannotChangeDrsBehaviorForFtSecondary'
,'CannotChangeHaSettingsForFtSecondary'=>'VimServiceStub\CannotChangeHaSettingsForFtSecondary'
,'CannotCreateFile'=>'VimServiceStub\CannotCreateFile'
,'CannotDecryptPasswords'=>'VimServiceStub\CannotDecryptPasswords'
,'CannotDeleteFile'=>'VimServiceStub\CannotDeleteFile'
,'CannotDisableDrsOnClustersWithVApps'=>'VimServiceStub\CannotDisableDrsOnClustersWithVApps'
,'CannotDisableSnapshot'=>'VimServiceStub\CannotDisableSnapshot'
,'CannotDisconnectHostWithFaultToleranceVm'=>'VimServiceStub\CannotDisconnectHostWithFaultToleranceVm'
,'CannotModifyConfigCpuRequirements'=>'VimServiceStub\CannotModifyConfigCpuRequirements'
,'CannotMoveFaultToleranceVm'=>'VimServiceStub\CannotMoveFaultToleranceVm'
,'CannotMoveHostWithFaultToleranceVm'=>'VimServiceStub\CannotMoveHostWithFaultToleranceVm'
,'CannotMoveVmWithDeltaDisk'=>'VimServiceStub\CannotMoveVmWithDeltaDisk'
,'CannotMoveVmWithNativeDeltaDisk'=>'VimServiceStub\CannotMoveVmWithNativeDeltaDisk'
,'CannotPowerOffVmInCluster'=>'VimServiceStub\CannotPowerOffVmInCluster'
,'ClockSkew'=>'VimServiceStub\ClockSkew'
,'CloneFromSnapshotNotSupported'=>'VimServiceStub\CloneFromSnapshotNotSupported'
,'ConcurrentAccess'=>'VimServiceStub\ConcurrentAccess'
,'ConnectedIso'=>'VimServiceStub\ConnectedIso'
,'CpuCompatibilityUnknown'=>'VimServiceStub\CpuCompatibilityUnknown'
,'CpuHotPlugNotSupported'=>'VimServiceStub\CpuHotPlugNotSupported'
,'CpuIncompatible'=>'VimServiceStub\CpuIncompatible'
,'CpuIncompatible1ECX'=>'VimServiceStub\CpuIncompatible1ECX'
,'CpuIncompatible81EDX'=>'VimServiceStub\CpuIncompatible81EDX'
,'CustomizationFault'=>'VimServiceStub\CustomizationFault'
,'CustomizationPending'=>'VimServiceStub\CustomizationPending'
,'DVPortNotSupported'=>'VimServiceStub\DVPortNotSupported'
,'DasConfigFault'=>'VimServiceStub\DasConfigFault'
,'DatabaseError'=>'VimServiceStub\DatabaseError'
,'DatacenterMismatchArgument'=>'VimServiceStub\DatacenterMismatchArgument'
,'ArrayOfDatacenterMismatchArgument'=>'VimServiceStub\ArrayOfDatacenterMismatchArgument'
,'DatacenterMismatch'=>'VimServiceStub\DatacenterMismatch'
,'DatastoreNotWritableOnHost'=>'VimServiceStub\DatastoreNotWritableOnHost'
,'DeltaDiskFormatNotSupported'=>'VimServiceStub\DeltaDiskFormatNotSupported'
,'DestinationSwitchFull'=>'VimServiceStub\DestinationSwitchFull'
,'DeviceBackingNotSupported'=>'VimServiceStub\DeviceBackingNotSupported'
,'DeviceControllerNotSupported'=>'VimServiceStub\DeviceControllerNotSupported'
,'DeviceHotPlugNotSupported'=>'VimServiceStub\DeviceHotPlugNotSupported'
,'DeviceNotFound'=>'VimServiceStub\DeviceNotFound'
,'DeviceNotSupported'=>'VimServiceStub\DeviceNotSupported'
,'DeviceUnsupportedForVmPlatform'=>'VimServiceStub\DeviceUnsupportedForVmPlatform'
,'DeviceUnsupportedForVmVersion'=>'VimServiceStub\DeviceUnsupportedForVmVersion'
,'DirectoryNotEmpty'=>'VimServiceStub\DirectoryNotEmpty'
,'DisableAdminNotSupported'=>'VimServiceStub\DisableAdminNotSupported'
,'DisallowedChangeByService'=>'VimServiceStub\DisallowedChangeByService'
,'DisallowedDiskModeChange'=>'VimServiceStub\DisallowedDiskModeChange'
,'DisallowedMigrationDeviceAttached'=>'VimServiceStub\DisallowedMigrationDeviceAttached'
,'DisallowedOperationOnFailoverHost'=>'VimServiceStub\DisallowedOperationOnFailoverHost'
,'DiskMoveTypeNotSupported'=>'VimServiceStub\DiskMoveTypeNotSupported'
,'DiskNotSupported'=>'VimServiceStub\DiskNotSupported'
,'DomainNotFound'=>'VimServiceStub\DomainNotFound'
,'DrsDisabledOnVm'=>'VimServiceStub\DrsDisabledOnVm'
,'DrsVmotionIncompatibleFault'=>'VimServiceStub\DrsVmotionIncompatibleFault'
,'DuplicateName'=>'VimServiceStub\DuplicateName'
,'DvsFault'=>'VimServiceStub\DvsFault'
,'DvsNotAuthorized'=>'VimServiceStub\DvsNotAuthorized'
,'DvsOperationBulkFaultFaultOnHost'=>'VimServiceStub\DvsOperationBulkFaultFaultOnHost'
,'ArrayOfDvsOperationBulkFaultFaultOnHost'=>'VimServiceStub\ArrayOfDvsOperationBulkFaultFaultOnHost'
,'DvsOperationBulkFault'=>'VimServiceStub\DvsOperationBulkFault'
,'DvsScopeViolated'=>'VimServiceStub\DvsScopeViolated'
,'EVCAdmissionFailed'=>'VimServiceStub\EVCAdmissionFailed'
,'EVCAdmissionFailedCPUFeaturesForMode'=>'VimServiceStub\EVCAdmissionFailedCPUFeaturesForMode'
,'EVCAdmissionFailedCPUModel'=>'VimServiceStub\EVCAdmissionFailedCPUModel'
,'EVCAdmissionFailedCPUModelForMode'=>'VimServiceStub\EVCAdmissionFailedCPUModelForMode'
,'EVCAdmissionFailedCPUVendor'=>'VimServiceStub\EVCAdmissionFailedCPUVendor'
,'EVCAdmissionFailedCPUVendorUnknown'=>'VimServiceStub\EVCAdmissionFailedCPUVendorUnknown'
,'EVCAdmissionFailedHostDisconnected'=>'VimServiceStub\EVCAdmissionFailedHostDisconnected'
,'EVCAdmissionFailedHostSoftware'=>'VimServiceStub\EVCAdmissionFailedHostSoftware'
,'EVCAdmissionFailedHostSoftwareForMode'=>'VimServiceStub\EVCAdmissionFailedHostSoftwareForMode'
,'EVCAdmissionFailedVmActive'=>'VimServiceStub\EVCAdmissionFailedVmActive'
,'EightHostLimitViolated'=>'VimServiceStub\EightHostLimitViolated'
,'ExpiredAddonLicense'=>'VimServiceStub\ExpiredAddonLicense'
,'ExpiredEditionLicense'=>'VimServiceStub\ExpiredEditionLicense'
,'ExpiredFeatureLicense'=>'VimServiceStub\ExpiredFeatureLicense'
,'ExtendedFault'=>'VimServiceStub\ExtendedFault'
,'FailToEnableSPBM'=>'VimServiceStub\FailToEnableSPBM'
,'FailToLockFaultToleranceVMs'=>'VimServiceStub\FailToLockFaultToleranceVMs'
,'FaultToleranceAntiAffinityViolated'=>'VimServiceStub\FaultToleranceAntiAffinityViolated'
,'FaultToleranceCannotEditMem'=>'VimServiceStub\FaultToleranceCannotEditMem'
,'FaultToleranceCpuIncompatible'=>'VimServiceStub\FaultToleranceCpuIncompatible'
,'FaultToleranceNeedsThickDisk'=>'VimServiceStub\FaultToleranceNeedsThickDisk'
,'FaultToleranceNotLicensed'=>'VimServiceStub\FaultToleranceNotLicensed'
,'FaultToleranceNotSameBuild'=>'VimServiceStub\FaultToleranceNotSameBuild'
,'FaultTolerancePrimaryPowerOnNotAttempted'=>'VimServiceStub\FaultTolerancePrimaryPowerOnNotAttempted'
,'FaultToleranceVmNotDasProtected'=>'VimServiceStub\FaultToleranceVmNotDasProtected'
,'FcoeFault'=>'VimServiceStub\FcoeFault'
,'FcoeFaultPnicHasNoPortSet'=>'VimServiceStub\FcoeFaultPnicHasNoPortSet'
,'FileAlreadyExists'=>'VimServiceStub\FileAlreadyExists'
,'FileBackedPortNotSupported'=>'VimServiceStub\FileBackedPortNotSupported'
,'FileFault'=>'VimServiceStub\FileFault'
,'FileLocked'=>'VimServiceStub\FileLocked'
,'FileNameTooLong'=>'VimServiceStub\FileNameTooLong'
,'FileNotFound'=>'VimServiceStub\FileNotFound'
,'FileNotWritable'=>'VimServiceStub\FileNotWritable'
,'FileTooLarge'=>'VimServiceStub\FileTooLarge'
,'FilesystemQuiesceFault'=>'VimServiceStub\FilesystemQuiesceFault'
,'FtIssuesOnHost'=>'VimServiceStub\FtIssuesOnHost'
,'FullStorageVMotionNotSupported'=>'VimServiceStub\FullStorageVMotionNotSupported'
,'GenericDrsFault'=>'VimServiceStub\GenericDrsFault'
,'GenericVmConfigFault'=>'VimServiceStub\GenericVmConfigFault'
,'GuestAuthenticationChallenge'=>'VimServiceStub\GuestAuthenticationChallenge'
,'GuestComponentsOutOfDate'=>'VimServiceStub\GuestComponentsOutOfDate'
,'GuestOperationsFault'=>'VimServiceStub\GuestOperationsFault'
,'GuestOperationsUnavailable'=>'VimServiceStub\GuestOperationsUnavailable'
,'GuestPermissionDenied'=>'VimServiceStub\GuestPermissionDenied'
,'GuestProcessNotFound'=>'VimServiceStub\GuestProcessNotFound'
,'HAErrorsAtDest'=>'VimServiceStub\HAErrorsAtDest'
,'HostAccessRestrictedToManagementServer'=>'VimServiceStub\HostAccessRestrictedToManagementServer'
,'HostConfigFailed'=>'VimServiceStub\HostConfigFailed'
,'HostConfigFault'=>'VimServiceStub\HostConfigFault'
,'HostConnectFault'=>'VimServiceStub\HostConnectFault'
,'HostInDomain'=>'VimServiceStub\HostInDomain'
,'HostIncompatibleForFaultTolerance'=>'VimServiceStub\HostIncompatibleForFaultTolerance'
,'HostIncompatibleForRecordReplay'=>'VimServiceStub\HostIncompatibleForRecordReplay'
,'HostInventoryFull'=>'VimServiceStub\HostInventoryFull'
,'HostPowerOpFailed'=>'VimServiceStub\HostPowerOpFailed'
,'HotSnapshotMoveNotSupported'=>'VimServiceStub\HotSnapshotMoveNotSupported'
,'IDEDiskNotSupported'=>'VimServiceStub\IDEDiskNotSupported'
,'IORMNotSupportedHostOnDatastore'=>'VimServiceStub\IORMNotSupportedHostOnDatastore'
,'InUseFeatureManipulationDisallowed'=>'VimServiceStub\InUseFeatureManipulationDisallowed'
,'InaccessibleDatastore'=>'VimServiceStub\InaccessibleDatastore'
,'IncompatibleDefaultDevice'=>'VimServiceStub\IncompatibleDefaultDevice'
,'IncompatibleHostForFtSecondary'=>'VimServiceStub\IncompatibleHostForFtSecondary'
,'IncompatibleSetting'=>'VimServiceStub\IncompatibleSetting'
,'IncorrectFileType'=>'VimServiceStub\IncorrectFileType'
,'IncorrectHostInformation'=>'VimServiceStub\IncorrectHostInformation'
,'IndependentDiskVMotionNotSupported'=>'VimServiceStub\IndependentDiskVMotionNotSupported'
,'InsufficientAgentVmsDeployed'=>'VimServiceStub\InsufficientAgentVmsDeployed'
,'InsufficientCpuResourcesFault'=>'VimServiceStub\InsufficientCpuResourcesFault'
,'InsufficientFailoverResourcesFault'=>'VimServiceStub\InsufficientFailoverResourcesFault'
,'InsufficientHostCapacityFault'=>'VimServiceStub\InsufficientHostCapacityFault'
,'InsufficientHostCpuCapacityFault'=>'VimServiceStub\InsufficientHostCpuCapacityFault'
,'InsufficientHostMemoryCapacityFault'=>'VimServiceStub\InsufficientHostMemoryCapacityFault'
,'InsufficientMemoryResourcesFault'=>'VimServiceStub\InsufficientMemoryResourcesFault'
,'InsufficientPerCpuCapacity'=>'VimServiceStub\InsufficientPerCpuCapacity'
,'InsufficientResourcesFault'=>'VimServiceStub\InsufficientResourcesFault'
,'InsufficientStandbyCpuResource'=>'VimServiceStub\InsufficientStandbyCpuResource'
,'InsufficientStandbyMemoryResource'=>'VimServiceStub\InsufficientStandbyMemoryResource'
,'InsufficientStandbyResource'=>'VimServiceStub\InsufficientStandbyResource'
,'InsufficientStorageSpace'=>'VimServiceStub\InsufficientStorageSpace'
,'InvalidAffinitySettingFault'=>'VimServiceStub\InvalidAffinitySettingFault'
,'InvalidBmcRole'=>'VimServiceStub\InvalidBmcRole'
,'InvalidBundle'=>'VimServiceStub\InvalidBundle'
,'InvalidCAMCertificate'=>'VimServiceStub\InvalidCAMCertificate'
,'InvalidCAMServer'=>'VimServiceStub\InvalidCAMServer'
,'InvalidClientCertificate'=>'VimServiceStub\InvalidClientCertificate'
,'InvalidController'=>'VimServiceStub\InvalidController'
,'InvalidDasRestartPriorityForFtVm'=>'VimServiceStub\InvalidDasRestartPriorityForFtVm'
,'InvalidDatastore'=>'VimServiceStub\InvalidDatastore'
,'InvalidDatastorePath'=>'VimServiceStub\InvalidDatastorePath'
,'InvalidDatastoreState'=>'VimServiceStub\InvalidDatastoreState'
,'InvalidDeviceBacking'=>'VimServiceStub\InvalidDeviceBacking'
,'InvalidDeviceOperation'=>'VimServiceStub\InvalidDeviceOperation'
,'InvalidDeviceSpec'=>'VimServiceStub\InvalidDeviceSpec'
,'InvalidDiskFormat'=>'VimServiceStub\InvalidDiskFormat'
,'InvalidDrsBehaviorForFtVm'=>'VimServiceStub\InvalidDrsBehaviorForFtVm'
,'InvalidEditionLicense'=>'VimServiceStub\InvalidEditionLicense'
,'InvalidEvent'=>'VimServiceStub\InvalidEvent'
,'InvalidFolder'=>'VimServiceStub\InvalidFolder'
,'InvalidFormat'=>'VimServiceStub\InvalidFormat'
,'InvalidGuestLogin'=>'VimServiceStub\InvalidGuestLogin'
,'InvalidHostName'=>'VimServiceStub\InvalidHostName'
,'InvalidHostState'=>'VimServiceStub\InvalidHostState'
,'InvalidIndexArgument'=>'VimServiceStub\InvalidIndexArgument'
,'InvalidIpmiLoginInfo'=>'VimServiceStub\InvalidIpmiLoginInfo'
,'InvalidIpmiMacAddress'=>'VimServiceStub\InvalidIpmiMacAddress'
,'InvalidLicense'=>'VimServiceStub\InvalidLicense'
,'InvalidLocale'=>'VimServiceStub\InvalidLocale'
,'InvalidLogin'=>'VimServiceStub\InvalidLogin'
,'InvalidName'=>'VimServiceStub\InvalidName'
,'InvalidNasCredentials'=>'VimServiceStub\InvalidNasCredentials'
,'InvalidNetworkInType'=>'VimServiceStub\InvalidNetworkInType'
,'InvalidNetworkResource'=>'VimServiceStub\InvalidNetworkResource'
,'InvalidOperationOnSecondaryVm'=>'VimServiceStub\InvalidOperationOnSecondaryVm'
,'InvalidPowerState'=>'VimServiceStub\InvalidPowerState'
,'InvalidPrivilege'=>'VimServiceStub\InvalidPrivilege'
,'InvalidProfileReferenceHost'=>'VimServiceStub\InvalidProfileReferenceHost'
,'InvalidPropertyType'=>'VimServiceStub\InvalidPropertyType'
,'InvalidPropertyValue'=>'VimServiceStub\InvalidPropertyValue'
,'InvalidResourcePoolStructureFault'=>'VimServiceStub\InvalidResourcePoolStructureFault'
,'InvalidSnapshotFormat'=>'VimServiceStub\InvalidSnapshotFormat'
,'InvalidState'=>'VimServiceStub\InvalidState'
,'InvalidVmConfig'=>'VimServiceStub\InvalidVmConfig'
,'InventoryHasStandardAloneHosts'=>'VimServiceStub\InventoryHasStandardAloneHosts'
,'IpHostnameGeneratorError'=>'VimServiceStub\IpHostnameGeneratorError'
,'IscsiFault'=>'VimServiceStub\IscsiFault'
,'IscsiFaultInvalidVnic'=>'VimServiceStub\IscsiFaultInvalidVnic'
,'IscsiFaultPnicInUse'=>'VimServiceStub\IscsiFaultPnicInUse'
,'IscsiFaultVnicAlreadyBound'=>'VimServiceStub\IscsiFaultVnicAlreadyBound'
,'IscsiFaultVnicHasActivePaths'=>'VimServiceStub\IscsiFaultVnicHasActivePaths'
,'IscsiFaultVnicHasMultipleUplinks'=>'VimServiceStub\IscsiFaultVnicHasMultipleUplinks'
,'IscsiFaultVnicHasNoUplinks'=>'VimServiceStub\IscsiFaultVnicHasNoUplinks'
,'IscsiFaultVnicHasWrongUplink'=>'VimServiceStub\IscsiFaultVnicHasWrongUplink'
,'IscsiFaultVnicInUse'=>'VimServiceStub\IscsiFaultVnicInUse'
,'IscsiFaultVnicIsLastPath'=>'VimServiceStub\IscsiFaultVnicIsLastPath'
,'IscsiFaultVnicNotBound'=>'VimServiceStub\IscsiFaultVnicNotBound'
,'IscsiFaultVnicNotFound'=>'VimServiceStub\IscsiFaultVnicNotFound'
,'LargeRDMConversionNotSupported'=>'VimServiceStub\LargeRDMConversionNotSupported'
,'LargeRDMNotSupportedOnDatastore'=>'VimServiceStub\LargeRDMNotSupportedOnDatastore'
,'LegacyNetworkInterfaceInUse'=>'VimServiceStub\LegacyNetworkInterfaceInUse'
,'LicenseAssignmentFailed'=>'VimServiceStub\LicenseAssignmentFailed'
,'LicenseDowngradeDisallowed'=>'VimServiceStub\LicenseDowngradeDisallowed'
,'LicenseEntityNotFound'=>'VimServiceStub\LicenseEntityNotFound'
,'LicenseExpired'=>'VimServiceStub\LicenseExpired'
,'LicenseKeyEntityMismatch'=>'VimServiceStub\LicenseKeyEntityMismatch'
,'LicenseRestricted'=>'VimServiceStub\LicenseRestricted'
,'LicenseServerUnavailable'=>'VimServiceStub\LicenseServerUnavailable'
,'LicenseSourceUnavailable'=>'VimServiceStub\LicenseSourceUnavailable'
,'LimitExceeded'=>'VimServiceStub\LimitExceeded'
,'LinuxVolumeNotClean'=>'VimServiceStub\LinuxVolumeNotClean'
,'LogBundlingFailed'=>'VimServiceStub\LogBundlingFailed'
,'MaintenanceModeFileMove'=>'VimServiceStub\MaintenanceModeFileMove'
,'MemoryHotPlugNotSupported'=>'VimServiceStub\MemoryHotPlugNotSupported'
,'MemorySizeNotRecommended'=>'VimServiceStub\MemorySizeNotRecommended'
,'MemorySizeNotSupported'=>'VimServiceStub\MemorySizeNotSupported'
,'MemorySizeNotSupportedByDatastore'=>'VimServiceStub\MemorySizeNotSupportedByDatastore'
,'MemorySnapshotOnIndependentDisk'=>'VimServiceStub\MemorySnapshotOnIndependentDisk'
,'MethodAlreadyDisabledFault'=>'VimServiceStub\MethodAlreadyDisabledFault'
,'MethodDisabled'=>'VimServiceStub\MethodDisabled'
,'MigrationDisabled'=>'VimServiceStub\MigrationDisabled'
,'MigrationFault'=>'VimServiceStub\MigrationFault'
,'MigrationFeatureNotSupported'=>'VimServiceStub\MigrationFeatureNotSupported'
,'MigrationNotReady'=>'VimServiceStub\MigrationNotReady'
,'MismatchedBundle'=>'VimServiceStub\MismatchedBundle'
,'MismatchedNetworkPolicies'=>'VimServiceStub\MismatchedNetworkPolicies'
,'MismatchedVMotionNetworkNames'=>'VimServiceStub\MismatchedVMotionNetworkNames'
,'MissingBmcSupport'=>'VimServiceStub\MissingBmcSupport'
,'MissingController'=>'VimServiceStub\MissingController'
,'MissingIpPool'=>'VimServiceStub\MissingIpPool'
,'MissingLinuxCustResources'=>'VimServiceStub\MissingLinuxCustResources'
,'MissingNetworkIpConfig'=>'VimServiceStub\MissingNetworkIpConfig'
,'MissingPowerOffConfiguration'=>'VimServiceStub\MissingPowerOffConfiguration'
,'MissingPowerOnConfiguration'=>'VimServiceStub\MissingPowerOnConfiguration'
,'MissingWindowsCustResources'=>'VimServiceStub\MissingWindowsCustResources'
,'MksConnectionLimitReached'=>'VimServiceStub\MksConnectionLimitReached'
,'MountError'=>'VimServiceStub\MountError'
,'MultipleCertificatesVerifyFaultThumbprintData'=>'VimServiceStub\MultipleCertificatesVerifyFaultThumbprintData'
,'ArrayOfMultipleCertificatesVerifyFaultThumbprintData'=>'VimServiceStub\ArrayOfMultipleCertificatesVerifyFaultThumbprintData'
,'MultipleCertificatesVerifyFault'=>'VimServiceStub\MultipleCertificatesVerifyFault'
,'MultipleSnapshotsNotSupported'=>'VimServiceStub\MultipleSnapshotsNotSupported'
,'NasConfigFault'=>'VimServiceStub\NasConfigFault'
,'NasConnectionLimitReached'=>'VimServiceStub\NasConnectionLimitReached'
,'NasSessionCredentialConflict'=>'VimServiceStub\NasSessionCredentialConflict'
,'NasVolumeNotMounted'=>'VimServiceStub\NasVolumeNotMounted'
,'NetworkCopyFault'=>'VimServiceStub\NetworkCopyFault'
,'NetworkInaccessible'=>'VimServiceStub\NetworkInaccessible'
,'NetworksMayNotBeTheSame'=>'VimServiceStub\NetworksMayNotBeTheSame'
,'NicSettingMismatch'=>'VimServiceStub\NicSettingMismatch'
,'NoActiveHostInCluster'=>'VimServiceStub\NoActiveHostInCluster'
,'NoAvailableIp'=>'VimServiceStub\NoAvailableIp'
,'NoClientCertificate'=>'VimServiceStub\NoClientCertificate'
,'NoCompatibleDatastore'=>'VimServiceStub\NoCompatibleDatastore'
,'NoCompatibleHardAffinityHost'=>'VimServiceStub\NoCompatibleHardAffinityHost'
,'NoCompatibleHost'=>'VimServiceStub\NoCompatibleHost'
,'NoCompatibleHostWithAccessToDevice'=>'VimServiceStub\NoCompatibleHostWithAccessToDevice'
,'NoCompatibleSoftAffinityHost'=>'VimServiceStub\NoCompatibleSoftAffinityHost'
,'NoConnectedDatastore'=>'VimServiceStub\NoConnectedDatastore'
,'NoDiskFound'=>'VimServiceStub\NoDiskFound'
,'NoDiskSpace'=>'VimServiceStub\NoDiskSpace'
,'NoDisksToCustomize'=>'VimServiceStub\NoDisksToCustomize'
,'NoGateway'=>'VimServiceStub\NoGateway'
,'NoGuestHeartbeat'=>'VimServiceStub\NoGuestHeartbeat'
,'NoHost'=>'VimServiceStub\NoHost'
,'NoHostSuitableForFtSecondary'=>'VimServiceStub\NoHostSuitableForFtSecondary'
,'NoLicenseServerConfigured'=>'VimServiceStub\NoLicenseServerConfigured'
,'NoPeerHostFound'=>'VimServiceStub\NoPeerHostFound'
,'NoPermission'=>'VimServiceStub\NoPermission'
,'NoPermissionOnAD'=>'VimServiceStub\NoPermissionOnAD'
,'NoPermissionOnHost'=>'VimServiceStub\NoPermissionOnHost'
,'NoPermissionOnNasVolume'=>'VimServiceStub\NoPermissionOnNasVolume'
,'NoSubjectName'=>'VimServiceStub\NoSubjectName'
,'NoVcManagedIpConfigured'=>'VimServiceStub\NoVcManagedIpConfigured'
,'NoVirtualNic'=>'VimServiceStub\NoVirtualNic'
,'NoVmInVApp'=>'VimServiceStub\NoVmInVApp'
,'NonADUserRequired'=>'VimServiceStub\NonADUserRequired'
,'NonHomeRDMVMotionNotSupported'=>'VimServiceStub\NonHomeRDMVMotionNotSupported'
,'NonPersistentDisksNotSupported'=>'VimServiceStub\NonPersistentDisksNotSupported'
,'NotADirectory'=>'VimServiceStub\NotADirectory'
,'NotAFile'=>'VimServiceStub\NotAFile'
,'NotAuthenticated'=>'VimServiceStub\NotAuthenticated'
,'NotEnoughCpus'=>'VimServiceStub\NotEnoughCpus'
,'NotEnoughLogicalCpus'=>'VimServiceStub\NotEnoughLogicalCpus'
,'NotFound'=>'VimServiceStub\NotFound'
,'NotSupportedDeviceForFT'=>'VimServiceStub\NotSupportedDeviceForFT'
,'NotSupportedHost'=>'VimServiceStub\NotSupportedHost'
,'NotSupportedHostInCluster'=>'VimServiceStub\NotSupportedHostInCluster'
,'NotSupportedHostInDvs'=>'VimServiceStub\NotSupportedHostInDvs'
,'NotSupportedHostInHACluster'=>'VimServiceStub\NotSupportedHostInHACluster'
,'NotUserConfigurableProperty'=>'VimServiceStub\NotUserConfigurableProperty'
,'NumVirtualCoresPerSocketNotSupported'=>'VimServiceStub\NumVirtualCoresPerSocketNotSupported'
,'NumVirtualCpusExceedsLimit'=>'VimServiceStub\NumVirtualCpusExceedsLimit'
,'NumVirtualCpusIncompatible'=>'VimServiceStub\NumVirtualCpusIncompatible'
,'NumVirtualCpusNotSupported'=>'VimServiceStub\NumVirtualCpusNotSupported'
,'OperationDisabledByGuest'=>'VimServiceStub\OperationDisabledByGuest'
,'OperationDisallowedOnHost'=>'VimServiceStub\OperationDisallowedOnHost'
,'OperationNotSupportedByGuest'=>'VimServiceStub\OperationNotSupportedByGuest'
,'OutOfBounds'=>'VimServiceStub\OutOfBounds'
,'OvfAttribute'=>'VimServiceStub\OvfAttribute'
,'OvfConnectedDevice'=>'VimServiceStub\OvfConnectedDevice'
,'OvfConnectedDeviceFloppy'=>'VimServiceStub\OvfConnectedDeviceFloppy'
,'OvfConnectedDeviceIso'=>'VimServiceStub\OvfConnectedDeviceIso'
,'OvfConstraint'=>'VimServiceStub\OvfConstraint'
,'OvfConsumerCallbackFault'=>'VimServiceStub\OvfConsumerCallbackFault'
,'OvfConsumerCommunicationError'=>'VimServiceStub\OvfConsumerCommunicationError'
,'OvfConsumerFault'=>'VimServiceStub\OvfConsumerFault'
,'OvfConsumerInvalidSection'=>'VimServiceStub\OvfConsumerInvalidSection'
,'OvfConsumerPowerOnFault'=>'VimServiceStub\OvfConsumerPowerOnFault'
,'OvfConsumerUndeclaredSection'=>'VimServiceStub\OvfConsumerUndeclaredSection'
,'OvfConsumerUndefinedPrefix'=>'VimServiceStub\OvfConsumerUndefinedPrefix'
,'OvfConsumerValidationFault'=>'VimServiceStub\OvfConsumerValidationFault'
,'OvfCpuCompatibility'=>'VimServiceStub\OvfCpuCompatibility'
,'OvfCpuCompatibilityCheckNotSupported'=>'VimServiceStub\OvfCpuCompatibilityCheckNotSupported'
,'OvfDiskMappingNotFound'=>'VimServiceStub\OvfDiskMappingNotFound'
,'OvfDiskOrderConstraint'=>'VimServiceStub\OvfDiskOrderConstraint'
,'OvfDuplicateElement'=>'VimServiceStub\OvfDuplicateElement'
,'OvfDuplicatedElementBoundary'=>'VimServiceStub\OvfDuplicatedElementBoundary'
,'OvfDuplicatedPropertyIdExport'=>'VimServiceStub\OvfDuplicatedPropertyIdExport'
,'OvfDuplicatedPropertyIdImport'=>'VimServiceStub\OvfDuplicatedPropertyIdImport'
,'OvfElement'=>'VimServiceStub\OvfElement'
,'OvfElementInvalidValue'=>'VimServiceStub\OvfElementInvalidValue'
,'OvfExport'=>'VimServiceStub\OvfExport'
,'OvfExportFailed'=>'VimServiceStub\OvfExportFailed'
,'OvfFault'=>'VimServiceStub\OvfFault'
,'OvfHardwareCheck'=>'VimServiceStub\OvfHardwareCheck'
,'OvfHardwareExport'=>'VimServiceStub\OvfHardwareExport'
,'OvfHostResourceConstraint'=>'VimServiceStub\OvfHostResourceConstraint'
,'OvfHostValueNotParsed'=>'VimServiceStub\OvfHostValueNotParsed'
,'OvfImport'=>'VimServiceStub\OvfImport'
,'OvfImportFailed'=>'VimServiceStub\OvfImportFailed'
,'OvfInternalError'=>'VimServiceStub\OvfInternalError'
,'OvfInvalidPackage'=>'VimServiceStub\OvfInvalidPackage'
,'OvfInvalidValue'=>'VimServiceStub\OvfInvalidValue'
,'OvfInvalidValueConfiguration'=>'VimServiceStub\OvfInvalidValueConfiguration'
,'OvfInvalidValueEmpty'=>'VimServiceStub\OvfInvalidValueEmpty'
,'OvfInvalidValueFormatMalformed'=>'VimServiceStub\OvfInvalidValueFormatMalformed'
,'OvfInvalidValueReference'=>'VimServiceStub\OvfInvalidValueReference'
,'OvfInvalidVmName'=>'VimServiceStub\OvfInvalidVmName'
,'OvfMappedOsId'=>'VimServiceStub\OvfMappedOsId'
,'OvfMissingAttribute'=>'VimServiceStub\OvfMissingAttribute'
,'OvfMissingElement'=>'VimServiceStub\OvfMissingElement'
,'OvfMissingElementNormalBoundary'=>'VimServiceStub\OvfMissingElementNormalBoundary'
,'OvfMissingHardware'=>'VimServiceStub\OvfMissingHardware'
,'OvfNoHostNic'=>'VimServiceStub\OvfNoHostNic'
,'OvfNoSpaceOnController'=>'VimServiceStub\OvfNoSpaceOnController'
,'OvfNoSupportedHardwareFamily'=>'VimServiceStub\OvfNoSupportedHardwareFamily'
,'OvfProperty'=>'VimServiceStub\OvfProperty'
,'OvfPropertyExport'=>'VimServiceStub\OvfPropertyExport'
,'OvfPropertyNetwork'=>'VimServiceStub\OvfPropertyNetwork'
,'OvfPropertyNetworkExport'=>'VimServiceStub\OvfPropertyNetworkExport'
,'OvfPropertyQualifier'=>'VimServiceStub\OvfPropertyQualifier'
,'OvfPropertyQualifierDuplicate'=>'VimServiceStub\OvfPropertyQualifierDuplicate'
,'OvfPropertyQualifierIgnored'=>'VimServiceStub\OvfPropertyQualifierIgnored'
,'OvfPropertyType'=>'VimServiceStub\OvfPropertyType'
,'OvfPropertyValue'=>'VimServiceStub\OvfPropertyValue'
,'OvfSystemFault'=>'VimServiceStub\OvfSystemFault'
,'OvfToXmlUnsupportedElement'=>'VimServiceStub\OvfToXmlUnsupportedElement'
,'OvfUnableToExportDisk'=>'VimServiceStub\OvfUnableToExportDisk'
,'OvfUnexpectedElement'=>'VimServiceStub\OvfUnexpectedElement'
,'OvfUnknownDevice'=>'VimServiceStub\OvfUnknownDevice'
,'OvfUnknownDeviceBacking'=>'VimServiceStub\OvfUnknownDeviceBacking'
,'OvfUnknownEntity'=>'VimServiceStub\OvfUnknownEntity'
,'OvfUnsupportedAttribute'=>'VimServiceStub\OvfUnsupportedAttribute'
,'OvfUnsupportedAttributeValue'=>'VimServiceStub\OvfUnsupportedAttributeValue'
,'OvfUnsupportedDeviceBackingInfo'=>'VimServiceStub\OvfUnsupportedDeviceBackingInfo'
,'OvfUnsupportedDeviceBackingOption'=>'VimServiceStub\OvfUnsupportedDeviceBackingOption'
,'OvfUnsupportedDeviceExport'=>'VimServiceStub\OvfUnsupportedDeviceExport'
,'OvfUnsupportedDiskProvisioning'=>'VimServiceStub\OvfUnsupportedDiskProvisioning'
,'OvfUnsupportedElement'=>'VimServiceStub\OvfUnsupportedElement'
,'OvfUnsupportedElementValue'=>'VimServiceStub\OvfUnsupportedElementValue'
,'OvfUnsupportedPackage'=>'VimServiceStub\OvfUnsupportedPackage'
,'OvfUnsupportedSection'=>'VimServiceStub\OvfUnsupportedSection'
,'OvfUnsupportedSubType'=>'VimServiceStub\OvfUnsupportedSubType'
,'OvfUnsupportedType'=>'VimServiceStub\OvfUnsupportedType'
,'OvfWrongElement'=>'VimServiceStub\OvfWrongElement'
,'OvfWrongNamespace'=>'VimServiceStub\OvfWrongNamespace'
,'OvfXmlFormat'=>'VimServiceStub\OvfXmlFormat'
,'PatchAlreadyInstalled'=>'VimServiceStub\PatchAlreadyInstalled'
,'PatchBinariesNotFound'=>'VimServiceStub\PatchBinariesNotFound'
,'PatchInstallFailed'=>'VimServiceStub\PatchInstallFailed'
,'PatchIntegrityError'=>'VimServiceStub\PatchIntegrityError'
,'PatchMetadataCorrupted'=>'VimServiceStub\PatchMetadataCorrupted'
,'PatchMetadataInvalid'=>'VimServiceStub\PatchMetadataInvalid'
,'PatchMetadataNotFound'=>'VimServiceStub\PatchMetadataNotFound'
,'PatchMissingDependencies'=>'VimServiceStub\PatchMissingDependencies'
,'PatchNotApplicable'=>'VimServiceStub\PatchNotApplicable'
,'PatchSuperseded'=>'VimServiceStub\PatchSuperseded'
,'PhysCompatRDMNotSupported'=>'VimServiceStub\PhysCompatRDMNotSupported'
,'PlatformConfigFault'=>'VimServiceStub\PlatformConfigFault'
,'PowerOnFtSecondaryFailed'=>'VimServiceStub\PowerOnFtSecondaryFailed'
,'PowerOnFtSecondaryTimedout'=>'VimServiceStub\PowerOnFtSecondaryTimedout'
,'ProfileUpdateFailedUpdateFailure'=>'VimServiceStub\ProfileUpdateFailedUpdateFailure'
,'ArrayOfProfileUpdateFailedUpdateFailure'=>'VimServiceStub\ArrayOfProfileUpdateFailedUpdateFailure'
,'ProfileUpdateFailed'=>'VimServiceStub\ProfileUpdateFailed'
,'QuestionPending'=>'VimServiceStub\QuestionPending'
,'QuiesceDatastoreIOForHAFailed'=>'VimServiceStub\QuiesceDatastoreIOForHAFailed'
,'RDMConversionNotSupported'=>'VimServiceStub\RDMConversionNotSupported'
,'RDMNotPreserved'=>'VimServiceStub\RDMNotPreserved'
,'RDMNotSupported'=>'VimServiceStub\RDMNotSupported'
,'RDMNotSupportedOnDatastore'=>'VimServiceStub\RDMNotSupportedOnDatastore'
,'RDMPointsToInaccessibleDisk'=>'VimServiceStub\RDMPointsToInaccessibleDisk'
,'RawDiskNotSupported'=>'VimServiceStub\RawDiskNotSupported'
,'ReadHostResourcePoolTreeFailed'=>'VimServiceStub\ReadHostResourcePoolTreeFailed'
,'ReadOnlyDisksWithLegacyDestination'=>'VimServiceStub\ReadOnlyDisksWithLegacyDestination'
,'RebootRequired'=>'VimServiceStub\RebootRequired'
,'RecordReplayDisabled'=>'VimServiceStub\RecordReplayDisabled'
,'RemoteDeviceNotSupported'=>'VimServiceStub\RemoteDeviceNotSupported'
,'RemoveFailed'=>'VimServiceStub\RemoveFailed'
,'ReplicationConfigFault'=>'VimServiceStub\ReplicationConfigFault'
,'ReplicationDiskConfigFault'=>'VimServiceStub\ReplicationDiskConfigFault'
,'ReplicationFault'=>'VimServiceStub\ReplicationFault'
,'ReplicationIncompatibleWithFT'=>'VimServiceStub\ReplicationIncompatibleWithFT'
,'ReplicationInvalidOptions'=>'VimServiceStub\ReplicationInvalidOptions'
,'ReplicationNotSupportedOnHost'=>'VimServiceStub\ReplicationNotSupportedOnHost'
,'ReplicationVmConfigFault'=>'VimServiceStub\ReplicationVmConfigFault'
,'ReplicationVmFault'=>'VimServiceStub\ReplicationVmFault'
,'ResourceInUse'=>'VimServiceStub\ResourceInUse'
,'ResourceNotAvailable'=>'VimServiceStub\ResourceNotAvailable'
,'RestrictedVersion'=>'VimServiceStub\RestrictedVersion'
,'RuleViolation'=>'VimServiceStub\RuleViolation'
,'SSLDisabledFault'=>'VimServiceStub\SSLDisabledFault'
,'SSLVerifyFault'=>'VimServiceStub\SSLVerifyFault'
,'SSPIChallenge'=>'VimServiceStub\SSPIChallenge'
,'SecondaryVmAlreadyDisabled'=>'VimServiceStub\SecondaryVmAlreadyDisabled'
,'SecondaryVmAlreadyEnabled'=>'VimServiceStub\SecondaryVmAlreadyEnabled'
,'SecondaryVmAlreadyRegistered'=>'VimServiceStub\SecondaryVmAlreadyRegistered'
,'SecondaryVmNotRegistered'=>'VimServiceStub\SecondaryVmNotRegistered'
,'SharedBusControllerNotSupported'=>'VimServiceStub\SharedBusControllerNotSupported'
,'SnapshotCloneNotSupported'=>'VimServiceStub\SnapshotCloneNotSupported'
,'SnapshotCopyNotSupported'=>'VimServiceStub\SnapshotCopyNotSupported'
,'SnapshotDisabled'=>'VimServiceStub\SnapshotDisabled'
,'SnapshotFault'=>'VimServiceStub\SnapshotFault'
,'SnapshotIncompatibleDeviceInVm'=>'VimServiceStub\SnapshotIncompatibleDeviceInVm'
,'SnapshotLocked'=>'VimServiceStub\SnapshotLocked'
,'SnapshotMoveFromNonHomeNotSupported'=>'VimServiceStub\SnapshotMoveFromNonHomeNotSupported'
,'SnapshotMoveNotSupported'=>'VimServiceStub\SnapshotMoveNotSupported'
,'SnapshotMoveToNonHomeNotSupported'=>'VimServiceStub\SnapshotMoveToNonHomeNotSupported'
,'SnapshotNoChange'=>'VimServiceStub\SnapshotNoChange'
,'SnapshotRevertIssue'=>'VimServiceStub\SnapshotRevertIssue'
,'SoftRuleVioCorrectionDisallowed'=>'VimServiceStub\SoftRuleVioCorrectionDisallowed'
,'SoftRuleVioCorrectionImpact'=>'VimServiceStub\SoftRuleVioCorrectionImpact'
,'StorageDrsDisabledOnVm'=>'VimServiceStub\StorageDrsDisabledOnVm'
,'StorageDrsIolbDisabledInternally'=>'VimServiceStub\StorageDrsIolbDisabledInternally'
,'StorageVMotionNotSupported'=>'VimServiceStub\StorageVMotionNotSupported'
,'StorageVmotionIncompatible'=>'VimServiceStub\StorageVmotionIncompatible'
,'SuspendedRelocateNotSupported'=>'VimServiceStub\SuspendedRelocateNotSupported'
,'SwapDatastoreNotWritableOnHost'=>'VimServiceStub\SwapDatastoreNotWritableOnHost'
,'SwapDatastoreUnset'=>'VimServiceStub\SwapDatastoreUnset'
,'SwapPlacementOverrideNotSupported'=>'VimServiceStub\SwapPlacementOverrideNotSupported'
,'SwitchNotInUpgradeMode'=>'VimServiceStub\SwitchNotInUpgradeMode'
,'TaskInProgress'=>'VimServiceStub\TaskInProgress'
,'ThirdPartyLicenseAssignmentFailed'=>'VimServiceStub\ThirdPartyLicenseAssignmentFailed'
,'Timedout'=>'VimServiceStub\Timedout'
,'TooManyConcurrentNativeClones'=>'VimServiceStub\TooManyConcurrentNativeClones'
,'TooManyConsecutiveOverrides'=>'VimServiceStub\TooManyConsecutiveOverrides'
,'TooManyDevices'=>'VimServiceStub\TooManyDevices'
,'TooManyDisksOnLegacyHost'=>'VimServiceStub\TooManyDisksOnLegacyHost'
,'TooManyGuestLogons'=>'VimServiceStub\TooManyGuestLogons'
,'TooManyHosts'=>'VimServiceStub\TooManyHosts'
,'TooManyNativeCloneLevels'=>'VimServiceStub\TooManyNativeCloneLevels'
,'TooManyNativeClonesOnFile'=>'VimServiceStub\TooManyNativeClonesOnFile'
,'TooManySnapshotLevels'=>'VimServiceStub\TooManySnapshotLevels'
,'ToolsAlreadyUpgraded'=>'VimServiceStub\ToolsAlreadyUpgraded'
,'ToolsAutoUpgradeNotSupported'=>'VimServiceStub\ToolsAutoUpgradeNotSupported'
,'ToolsImageNotAvailable'=>'VimServiceStub\ToolsImageNotAvailable'
,'ToolsImageSignatureCheckFailed'=>'VimServiceStub\ToolsImageSignatureCheckFailed'
,'ToolsInstallationInProgress'=>'VimServiceStub\ToolsInstallationInProgress'
,'ToolsUnavailable'=>'VimServiceStub\ToolsUnavailable'
,'ToolsUpgradeCancelled'=>'VimServiceStub\ToolsUpgradeCancelled'
,'UncommittedUndoableDisk'=>'VimServiceStub\UncommittedUndoableDisk'
,'UnconfiguredPropertyValue'=>'VimServiceStub\UnconfiguredPropertyValue'
,'UncustomizableGuest'=>'VimServiceStub\UncustomizableGuest'
,'UnexpectedCustomizationFault'=>'VimServiceStub\UnexpectedCustomizationFault'
,'UnrecognizedHost'=>'VimServiceStub\UnrecognizedHost'
,'UnsharedSwapVMotionNotSupported'=>'VimServiceStub\UnsharedSwapVMotionNotSupported'
,'UnsupportedDatastore'=>'VimServiceStub\UnsupportedDatastore'
,'UnsupportedGuest'=>'VimServiceStub\UnsupportedGuest'
,'UnsupportedVimApiVersion'=>'VimServiceStub\UnsupportedVimApiVersion'
,'UnsupportedVmxLocation'=>'VimServiceStub\UnsupportedVmxLocation'
,'UnusedVirtualDiskBlocksNotScrubbed'=>'VimServiceStub\UnusedVirtualDiskBlocksNotScrubbed'
,'UserNotFound'=>'VimServiceStub\UserNotFound'
,'VAppConfigFault'=>'VimServiceStub\VAppConfigFault'
,'VAppNotRunning'=>'VimServiceStub\VAppNotRunning'
,'VAppOperationInProgress'=>'VimServiceStub\VAppOperationInProgress'
,'VAppPropertyFault'=>'VimServiceStub\VAppPropertyFault'
,'VAppTaskInProgress'=>'VimServiceStub\VAppTaskInProgress'
,'VMINotSupported'=>'VimServiceStub\VMINotSupported'
,'VMOnConflictDVPort'=>'VimServiceStub\VMOnConflictDVPort'
,'VMOnVirtualIntranet'=>'VimServiceStub\VMOnVirtualIntranet'
,'VMotionInterfaceIssue'=>'VimServiceStub\VMotionInterfaceIssue'
,'VMotionLinkCapacityLow'=>'VimServiceStub\VMotionLinkCapacityLow'
,'VMotionLinkDown'=>'VimServiceStub\VMotionLinkDown'
,'VMotionNotConfigured'=>'VimServiceStub\VMotionNotConfigured'
,'VMotionNotLicensed'=>'VimServiceStub\VMotionNotLicensed'
,'VMotionNotSupported'=>'VimServiceStub\VMotionNotSupported'
,'VMotionProtocolIncompatible'=>'VimServiceStub\VMotionProtocolIncompatible'
,'VimFault'=>'VimServiceStub\VimFault'
,'VirtualDiskBlocksNotFullyProvisioned'=>'VimServiceStub\VirtualDiskBlocksNotFullyProvisioned'
,'VirtualDiskModeNotSupported'=>'VimServiceStub\VirtualDiskModeNotSupported'
,'VirtualEthernetCardNotSupported'=>'VimServiceStub\VirtualEthernetCardNotSupported'
,'VirtualHardwareCompatibilityIssue'=>'VimServiceStub\VirtualHardwareCompatibilityIssue'
,'VirtualHardwareVersionNotSupported'=>'VimServiceStub\VirtualHardwareVersionNotSupported'
,'VmAlreadyExistsInDatacenter'=>'VimServiceStub\VmAlreadyExistsInDatacenter'
,'VmConfigFault'=>'VimServiceStub\VmConfigFault'
,'VmConfigIncompatibleForFaultTolerance'=>'VimServiceStub\VmConfigIncompatibleForFaultTolerance'
,'VmConfigIncompatibleForRecordReplay'=>'VimServiceStub\VmConfigIncompatibleForRecordReplay'
,'VmFaultToleranceConfigIssue'=>'VimServiceStub\VmFaultToleranceConfigIssue'
,'VmFaultToleranceConfigIssueWrapper'=>'VimServiceStub\VmFaultToleranceConfigIssueWrapper'
,'VmFaultToleranceInvalidFileBacking'=>'VimServiceStub\VmFaultToleranceInvalidFileBacking'
,'VmFaultToleranceIssue'=>'VimServiceStub\VmFaultToleranceIssue'
,'VmFaultToleranceOpIssuesList'=>'VimServiceStub\VmFaultToleranceOpIssuesList'
,'VmFaultToleranceTooManyVMsOnHost'=>'VimServiceStub\VmFaultToleranceTooManyVMsOnHost'
,'VmHostAffinityRuleViolation'=>'VimServiceStub\VmHostAffinityRuleViolation'
,'VmLimitLicense'=>'VimServiceStub\VmLimitLicense'
,'VmMonitorIncompatibleForFaultTolerance'=>'VimServiceStub\VmMonitorIncompatibleForFaultTolerance'
,'VmPowerOnDisabled'=>'VimServiceStub\VmPowerOnDisabled'
,'VmToolsUpgradeFault'=>'VimServiceStub\VmToolsUpgradeFault'
,'VmValidateMaxDevice'=>'VimServiceStub\VmValidateMaxDevice'
,'VmWwnConflict'=>'VimServiceStub\VmWwnConflict'
,'VmfsAlreadyMounted'=>'VimServiceStub\VmfsAlreadyMounted'
,'VmfsAmbiguousMount'=>'VimServiceStub\VmfsAmbiguousMount'
,'VmfsMountFault'=>'VimServiceStub\VmfsMountFault'
,'VmotionInterfaceNotEnabled'=>'VimServiceStub\VmotionInterfaceNotEnabled'
,'VolumeEditorError'=>'VimServiceStub\VolumeEditorError'
,'VramLimitLicense'=>'VimServiceStub\VramLimitLicense'
,'VspanDestPortConflict'=>'VimServiceStub\VspanDestPortConflict'
,'VspanPortConflict'=>'VimServiceStub\VspanPortConflict'
,'VspanPortMoveFault'=>'VimServiceStub\VspanPortMoveFault'
,'VspanPortPromiscChangeFault'=>'VimServiceStub\VspanPortPromiscChangeFault'
,'VspanPortgroupPromiscChangeFault'=>'VimServiceStub\VspanPortgroupPromiscChangeFault'
,'VspanPortgroupTypeChangeFault'=>'VimServiceStub\VspanPortgroupTypeChangeFault'
,'VspanPromiscuousPortNotSupported'=>'VimServiceStub\VspanPromiscuousPortNotSupported'
,'VspanSameSessionPortConflict'=>'VimServiceStub\VspanSameSessionPortConflict'
,'WakeOnLanNotSupported'=>'VimServiceStub\WakeOnLanNotSupported'
,'WakeOnLanNotSupportedByVmotionNIC'=>'VimServiceStub\WakeOnLanNotSupportedByVmotionNIC'
,'WillLoseHAProtection'=>'VimServiceStub\WillLoseHAProtection'
,'WillModifyConfigCpuRequirements'=>'VimServiceStub\WillModifyConfigCpuRequirements'
,'WillResetSnapshotDirectory'=>'VimServiceStub\WillResetSnapshotDirectory'
,'HostActiveDirectoryInfo'=>'VimServiceStub\HostActiveDirectoryInfo'
,'HostActiveDirectorySpec'=>'VimServiceStub\HostActiveDirectorySpec'
,'HostActiveDirectory'=>'VimServiceStub\HostActiveDirectory'
,'ArrayOfHostActiveDirectory'=>'VimServiceStub\ArrayOfHostActiveDirectory'
,'HostAuthenticationManagerInfo'=>'VimServiceStub\HostAuthenticationManagerInfo'
,'HostAuthenticationStoreInfo'=>'VimServiceStub\HostAuthenticationStoreInfo'
,'ArrayOfHostAuthenticationStoreInfo'=>'VimServiceStub\ArrayOfHostAuthenticationStoreInfo'
,'AutoStartDefaults'=>'VimServiceStub\AutoStartDefaults'
,'AutoStartPowerInfo'=>'VimServiceStub\AutoStartPowerInfo'
,'ArrayOfAutoStartPowerInfo'=>'VimServiceStub\ArrayOfAutoStartPowerInfo'
,'HostAutoStartManagerConfig'=>'VimServiceStub\HostAutoStartManagerConfig'
,'HostBootDeviceInfo'=>'VimServiceStub\HostBootDeviceInfo'
,'HostBootDevice'=>'VimServiceStub\HostBootDevice'
,'ArrayOfHostBootDevice'=>'VimServiceStub\ArrayOfHostBootDevice'
,'HostCacheConfigurationSpec'=>'VimServiceStub\HostCacheConfigurationSpec'
,'HostCacheConfigurationInfo'=>'VimServiceStub\HostCacheConfigurationInfo'
,'ArrayOfHostCacheConfigurationInfo'=>'VimServiceStub\ArrayOfHostCacheConfigurationInfo'
,'HostCapability'=>'VimServiceStub\HostCapability'
,'HostConfigChange'=>'VimServiceStub\HostConfigChange'
,'HostConfigInfo'=>'VimServiceStub\HostConfigInfo'
,'HostConfigManager'=>'VimServiceStub\HostConfigManager'
,'HostConfigSpec'=>'VimServiceStub\HostConfigSpec'
,'HostConnectInfoNetworkInfo'=>'VimServiceStub\HostConnectInfoNetworkInfo'
,'ArrayOfHostConnectInfoNetworkInfo'=>'VimServiceStub\ArrayOfHostConnectInfoNetworkInfo'
,'HostNewNetworkConnectInfo'=>'VimServiceStub\HostNewNetworkConnectInfo'
,'HostDatastoreConnectInfo'=>'VimServiceStub\HostDatastoreConnectInfo'
,'ArrayOfHostDatastoreConnectInfo'=>'VimServiceStub\ArrayOfHostDatastoreConnectInfo'
,'HostDatastoreExistsConnectInfo'=>'VimServiceStub\HostDatastoreExistsConnectInfo'
,'HostDatastoreNameConflictConnectInfo'=>'VimServiceStub\HostDatastoreNameConflictConnectInfo'
,'HostLicenseConnectInfo'=>'VimServiceStub\HostLicenseConnectInfo'
,'HostConnectInfo'=>'VimServiceStub\HostConnectInfo'
,'HostConnectSpec'=>'VimServiceStub\HostConnectSpec'
,'HostCpuIdInfo'=>'VimServiceStub\HostCpuIdInfo'
,'ArrayOfHostCpuIdInfo'=>'VimServiceStub\ArrayOfHostCpuIdInfo'
,'HostHyperThreadScheduleInfo'=>'VimServiceStub\HostHyperThreadScheduleInfo'
,'FileQueryFlags'=>'VimServiceStub\FileQueryFlags'
,'FileInfo'=>'VimServiceStub\FileInfo'
,'ArrayOfFileInfo'=>'VimServiceStub\ArrayOfFileInfo'
,'FileQuery'=>'VimServiceStub\FileQuery'
,'ArrayOfFileQuery'=>'VimServiceStub\ArrayOfFileQuery'
,'VmConfigFileQueryFilter'=>'VimServiceStub\VmConfigFileQueryFilter'
,'VmConfigFileQueryFlags'=>'VimServiceStub\VmConfigFileQueryFlags'
,'VmConfigFileQuery'=>'VimServiceStub\VmConfigFileQuery'
,'TemplateConfigFileQuery'=>'VimServiceStub\TemplateConfigFileQuery'
,'VmDiskFileQueryFilter'=>'VimServiceStub\VmDiskFileQueryFilter'
,'VmDiskFileQueryFlags'=>'VimServiceStub\VmDiskFileQueryFlags'
,'VmDiskFileQuery'=>'VimServiceStub\VmDiskFileQuery'
,'FolderFileQuery'=>'VimServiceStub\FolderFileQuery'
,'VmSnapshotFileQuery'=>'VimServiceStub\VmSnapshotFileQuery'
,'IsoImageFileQuery'=>'VimServiceStub\IsoImageFileQuery'
,'FloppyImageFileQuery'=>'VimServiceStub\FloppyImageFileQuery'
,'VmNvramFileQuery'=>'VimServiceStub\VmNvramFileQuery'
,'VmLogFileQuery'=>'VimServiceStub\VmLogFileQuery'
,'VmConfigFileInfo'=>'VimServiceStub\VmConfigFileInfo'
,'TemplateConfigFileInfo'=>'VimServiceStub\TemplateConfigFileInfo'
,'VmDiskFileInfo'=>'VimServiceStub\VmDiskFileInfo'
,'FolderFileInfo'=>'VimServiceStub\FolderFileInfo'
,'VmSnapshotFileInfo'=>'VimServiceStub\VmSnapshotFileInfo'
,'IsoImageFileInfo'=>'VimServiceStub\IsoImageFileInfo'
,'FloppyImageFileInfo'=>'VimServiceStub\FloppyImageFileInfo'
,'VmNvramFileInfo'=>'VimServiceStub\VmNvramFileInfo'
,'VmLogFileInfo'=>'VimServiceStub\VmLogFileInfo'
,'HostDatastoreBrowserSearchSpec'=>'VimServiceStub\HostDatastoreBrowserSearchSpec'
,'HostDatastoreBrowserSearchResults'=>'VimServiceStub\HostDatastoreBrowserSearchResults'
,'ArrayOfHostDatastoreBrowserSearchResults'=>'VimServiceStub\ArrayOfHostDatastoreBrowserSearchResults'
,'HostDatastoreSystemCapabilities'=>'VimServiceStub\HostDatastoreSystemCapabilities'
,'VmfsDatastoreInfo'=>'VimServiceStub\VmfsDatastoreInfo'
,'NasDatastoreInfo'=>'VimServiceStub\NasDatastoreInfo'
,'LocalDatastoreInfo'=>'VimServiceStub\LocalDatastoreInfo'
,'VmfsDatastoreSpec'=>'VimServiceStub\VmfsDatastoreSpec'
,'VmfsDatastoreCreateSpec'=>'VimServiceStub\VmfsDatastoreCreateSpec'
,'VmfsDatastoreExtendSpec'=>'VimServiceStub\VmfsDatastoreExtendSpec'
,'VmfsDatastoreExpandSpec'=>'VimServiceStub\VmfsDatastoreExpandSpec'
,'VmfsDatastoreBaseOption'=>'VimServiceStub\VmfsDatastoreBaseOption'
,'VmfsDatastoreSingleExtentOption'=>'VimServiceStub\VmfsDatastoreSingleExtentOption'
,'VmfsDatastoreAllExtentOption'=>'VimServiceStub\VmfsDatastoreAllExtentOption'
,'VmfsDatastoreMultipleExtentOption'=>'VimServiceStub\VmfsDatastoreMultipleExtentOption'
,'VmfsDatastoreOption'=>'VimServiceStub\VmfsDatastoreOption'
,'ArrayOfVmfsDatastoreOption'=>'VimServiceStub\ArrayOfVmfsDatastoreOption'
,'HostDateTimeConfig'=>'VimServiceStub\HostDateTimeConfig'
,'HostDateTimeInfo'=>'VimServiceStub\HostDateTimeInfo'
,'HostDateTimeSystemTimeZone'=>'VimServiceStub\HostDateTimeSystemTimeZone'
,'ArrayOfHostDateTimeSystemTimeZone'=>'VimServiceStub\ArrayOfHostDateTimeSystemTimeZone'
,'HostDevice'=>'VimServiceStub\HostDevice'
,'HostDhcpServiceSpec'=>'VimServiceStub\HostDhcpServiceSpec'
,'HostDhcpServiceConfig'=>'VimServiceStub\HostDhcpServiceConfig'
,'ArrayOfHostDhcpServiceConfig'=>'VimServiceStub\ArrayOfHostDhcpServiceConfig'
,'HostDhcpService'=>'VimServiceStub\HostDhcpService'
,'ArrayOfHostDhcpService'=>'VimServiceStub\ArrayOfHostDhcpService'
,'HostDiagnosticPartitionCreateOption'=>'VimServiceStub\HostDiagnosticPartitionCreateOption'
,'ArrayOfHostDiagnosticPartitionCreateOption'=>'VimServiceStub\ArrayOfHostDiagnosticPartitionCreateOption'
,'HostDiagnosticPartitionCreateSpec'=>'VimServiceStub\HostDiagnosticPartitionCreateSpec'
,'HostDiagnosticPartitionCreateDescription'=>'VimServiceStub\HostDiagnosticPartitionCreateDescription'
,'HostDiagnosticPartition'=>'VimServiceStub\HostDiagnosticPartition'
,'ArrayOfHostDiagnosticPartition'=>'VimServiceStub\ArrayOfHostDiagnosticPartition'
,'HostDirectoryStoreInfo'=>'VimServiceStub\HostDirectoryStoreInfo'
,'HostDiskDimensionsChs'=>'VimServiceStub\HostDiskDimensionsChs'
,'HostDiskDimensionsLba'=>'VimServiceStub\HostDiskDimensionsLba'
,'HostDiskDimensions'=>'VimServiceStub\HostDiskDimensions'
,'HostDiskPartitionAttributes'=>'VimServiceStub\HostDiskPartitionAttributes'
,'ArrayOfHostDiskPartitionAttributes'=>'VimServiceStub\ArrayOfHostDiskPartitionAttributes'
,'HostDiskPartitionBlockRange'=>'VimServiceStub\HostDiskPartitionBlockRange'
,'ArrayOfHostDiskPartitionBlockRange'=>'VimServiceStub\ArrayOfHostDiskPartitionBlockRange'
,'HostDiskPartitionSpec'=>'VimServiceStub\HostDiskPartitionSpec'
,'HostDiskPartitionLayout'=>'VimServiceStub\HostDiskPartitionLayout'
,'HostDiskPartitionInfo'=>'VimServiceStub\HostDiskPartitionInfo'
,'ArrayOfHostDiskPartitionInfo'=>'VimServiceStub\ArrayOfHostDiskPartitionInfo'
,'HostDnsConfig'=>'VimServiceStub\HostDnsConfig'
,'HostDnsConfigSpec'=>'VimServiceStub\HostDnsConfigSpec'
,'HostEsxAgentHostManagerConfigInfo'=>'VimServiceStub\HostEsxAgentHostManagerConfigInfo'
,'FcoeConfigVlanRange'=>'VimServiceStub\FcoeConfigVlanRange'
,'ArrayOfFcoeConfigVlanRange'=>'VimServiceStub\ArrayOfFcoeConfigVlanRange'
,'FcoeConfigFcoeCapabilities'=>'VimServiceStub\FcoeConfigFcoeCapabilities'
,'FcoeConfigFcoeSpecification'=>'VimServiceStub\FcoeConfigFcoeSpecification'
,'FcoeConfig'=>'VimServiceStub\FcoeConfig'
,'HostFeatureVersionInfo'=>'VimServiceStub\HostFeatureVersionInfo'
,'ArrayOfHostFeatureVersionInfo'=>'VimServiceStub\ArrayOfHostFeatureVersionInfo'
,'ModeInfo'=>'VimServiceStub\ModeInfo'
,'HostFileAccess'=>'VimServiceStub\HostFileAccess'
,'HostFileSystemVolumeInfo'=>'VimServiceStub\HostFileSystemVolumeInfo'
,'HostFileSystemMountInfo'=>'VimServiceStub\HostFileSystemMountInfo'
,'ArrayOfHostFileSystemMountInfo'=>'VimServiceStub\ArrayOfHostFileSystemMountInfo'
,'HostFileSystemVolume'=>'VimServiceStub\HostFileSystemVolume'
,'HostNasVolumeSpec'=>'VimServiceStub\HostNasVolumeSpec'
,'HostNasVolumeConfig'=>'VimServiceStub\HostNasVolumeConfig'
,'ArrayOfHostNasVolumeConfig'=>'VimServiceStub\ArrayOfHostNasVolumeConfig'
,'HostNasVolume'=>'VimServiceStub\HostNasVolume'
,'HostLocalFileSystemVolumeSpec'=>'VimServiceStub\HostLocalFileSystemVolumeSpec'
,'HostLocalFileSystemVolume'=>'VimServiceStub\HostLocalFileSystemVolume'
,'HostVfatVolume'=>'VimServiceStub\HostVfatVolume'
,'HostFirewallConfigRuleSetConfig'=>'VimServiceStub\HostFirewallConfigRuleSetConfig'
,'ArrayOfHostFirewallConfigRuleSetConfig'=>'VimServiceStub\ArrayOfHostFirewallConfigRuleSetConfig'
,'HostFirewallConfig'=>'VimServiceStub\HostFirewallConfig'
,'HostFirewallDefaultPolicy'=>'VimServiceStub\HostFirewallDefaultPolicy'
,'HostFirewallInfo'=>'VimServiceStub\HostFirewallInfo'
,'HostFlagInfo'=>'VimServiceStub\HostFlagInfo'
,'HostForceMountedInfo'=>'VimServiceStub\HostForceMountedInfo'
,'HostHardwareInfo'=>'VimServiceStub\HostHardwareInfo'
,'HostSystemInfo'=>'VimServiceStub\HostSystemInfo'
,'HostCpuPowerManagementInfo'=>'VimServiceStub\HostCpuPowerManagementInfo'
,'HostCpuInfo'=>'VimServiceStub\HostCpuInfo'
,'HostCpuPackage'=>'VimServiceStub\HostCpuPackage'
,'ArrayOfHostCpuPackage'=>'VimServiceStub\ArrayOfHostCpuPackage'
,'HostNumaInfo'=>'VimServiceStub\HostNumaInfo'
,'HostNumaNode'=>'VimServiceStub\HostNumaNode'
,'ArrayOfHostNumaNode'=>'VimServiceStub\ArrayOfHostNumaNode'
,'HostBIOSInfo'=>'VimServiceStub\HostBIOSInfo'
,'HostHardwareElementInfo'=>'VimServiceStub\HostHardwareElementInfo'
,'ArrayOfHostHardwareElementInfo'=>'VimServiceStub\ArrayOfHostHardwareElementInfo'
,'HostStorageOperationalInfo'=>'VimServiceStub\HostStorageOperationalInfo'
,'ArrayOfHostStorageOperationalInfo'=>'VimServiceStub\ArrayOfHostStorageOperationalInfo'
,'HostStorageElementInfo'=>'VimServiceStub\HostStorageElementInfo'
,'ArrayOfHostStorageElementInfo'=>'VimServiceStub\ArrayOfHostStorageElementInfo'
,'HostHardwareStatusInfo'=>'VimServiceStub\HostHardwareStatusInfo'
,'HealthSystemRuntime'=>'VimServiceStub\HealthSystemRuntime'
,'HostHostBusAdapter'=>'VimServiceStub\HostHostBusAdapter'
,'ArrayOfHostHostBusAdapter'=>'VimServiceStub\ArrayOfHostHostBusAdapter'
,'HostParallelScsiHba'=>'VimServiceStub\HostParallelScsiHba'
,'HostBlockHba'=>'VimServiceStub\HostBlockHba'
,'HostFibreChannelHba'=>'VimServiceStub\HostFibreChannelHba'
,'HostInternetScsiHbaParamValue'=>'VimServiceStub\HostInternetScsiHbaParamValue'
,'ArrayOfHostInternetScsiHbaParamValue'=>'VimServiceStub\ArrayOfHostInternetScsiHbaParamValue'
,'HostInternetScsiHbaDiscoveryCapabilities'=>'VimServiceStub\HostInternetScsiHbaDiscoveryCapabilities'
,'HostInternetScsiHbaDiscoveryProperties'=>'VimServiceStub\HostInternetScsiHbaDiscoveryProperties'
,'HostInternetScsiHbaAuthenticationCapabilities'=>'VimServiceStub\HostInternetScsiHbaAuthenticationCapabilities'
,'HostInternetScsiHbaAuthenticationProperties'=>'VimServiceStub\HostInternetScsiHbaAuthenticationProperties'
,'HostInternetScsiHbaDigestCapabilities'=>'VimServiceStub\HostInternetScsiHbaDigestCapabilities'
,'HostInternetScsiHbaDigestProperties'=>'VimServiceStub\HostInternetScsiHbaDigestProperties'
,'HostInternetScsiHbaIPCapabilities'=>'VimServiceStub\HostInternetScsiHbaIPCapabilities'
,'HostInternetScsiHbaIPProperties'=>'VimServiceStub\HostInternetScsiHbaIPProperties'
,'HostInternetScsiHbaSendTarget'=>'VimServiceStub\HostInternetScsiHbaSendTarget'
,'ArrayOfHostInternetScsiHbaSendTarget'=>'VimServiceStub\ArrayOfHostInternetScsiHbaSendTarget'
,'HostInternetScsiHbaStaticTarget'=>'VimServiceStub\HostInternetScsiHbaStaticTarget'
,'ArrayOfHostInternetScsiHbaStaticTarget'=>'VimServiceStub\ArrayOfHostInternetScsiHbaStaticTarget'
,'HostInternetScsiHbaTargetSet'=>'VimServiceStub\HostInternetScsiHbaTargetSet'
,'HostInternetScsiHba'=>'VimServiceStub\HostInternetScsiHba'
,'HostFibreChannelOverEthernetHbaLinkInfo'=>'VimServiceStub\HostFibreChannelOverEthernetHbaLinkInfo'
,'HostFibreChannelOverEthernetHba'=>'VimServiceStub\HostFibreChannelOverEthernetHba'
,'HostProxySwitchSpec'=>'VimServiceStub\HostProxySwitchSpec'
,'HostProxySwitchConfig'=>'VimServiceStub\HostProxySwitchConfig'
,'ArrayOfHostProxySwitchConfig'=>'VimServiceStub\ArrayOfHostProxySwitchConfig'
,'HostProxySwitch'=>'VimServiceStub\HostProxySwitch'
,'ArrayOfHostProxySwitch'=>'VimServiceStub\ArrayOfHostProxySwitch'
,'HostImageProfileSummary'=>'VimServiceStub\HostImageProfileSummary'
,'HostIpConfigIpV6Address'=>'VimServiceStub\HostIpConfigIpV6Address'
,'ArrayOfHostIpConfigIpV6Address'=>'VimServiceStub\ArrayOfHostIpConfigIpV6Address'
,'HostIpConfigIpV6AddressConfiguration'=>'VimServiceStub\HostIpConfigIpV6AddressConfiguration'
,'HostIpConfig'=>'VimServiceStub\HostIpConfig'
,'HostIpRouteConfig'=>'VimServiceStub\HostIpRouteConfig'
,'HostIpRouteConfigSpec'=>'VimServiceStub\HostIpRouteConfigSpec'
,'HostIpRouteEntry'=>'VimServiceStub\HostIpRouteEntry'
,'ArrayOfHostIpRouteEntry'=>'VimServiceStub\ArrayOfHostIpRouteEntry'
,'HostIpRouteOp'=>'VimServiceStub\HostIpRouteOp'
,'ArrayOfHostIpRouteOp'=>'VimServiceStub\ArrayOfHostIpRouteOp'
,'HostIpRouteTableConfig'=>'VimServiceStub\HostIpRouteTableConfig'
,'HostIpRouteTableInfo'=>'VimServiceStub\HostIpRouteTableInfo'
,'HostIpmiInfo'=>'VimServiceStub\HostIpmiInfo'
,'IscsiStatus'=>'VimServiceStub\IscsiStatus'
,'IscsiPortInfo'=>'VimServiceStub\IscsiPortInfo'
,'ArrayOfIscsiPortInfo'=>'VimServiceStub\ArrayOfIscsiPortInfo'
,'IscsiDependencyEntity'=>'VimServiceStub\IscsiDependencyEntity'
,'ArrayOfIscsiDependencyEntity'=>'VimServiceStub\ArrayOfIscsiDependencyEntity'
,'IscsiMigrationDependency'=>'VimServiceStub\IscsiMigrationDependency'
,'KernelModuleSectionInfo'=>'VimServiceStub\KernelModuleSectionInfo'
,'KernelModuleInfo'=>'VimServiceStub\KernelModuleInfo'
,'ArrayOfKernelModuleInfo'=>'VimServiceStub\ArrayOfKernelModuleInfo'
,'HostLicenseSpec'=>'VimServiceStub\HostLicenseSpec'
,'LinkDiscoveryProtocolConfig'=>'VimServiceStub\LinkDiscoveryProtocolConfig'
,'HostAccountSpec'=>'VimServiceStub\HostAccountSpec'
,'ArrayOfHostAccountSpec'=>'VimServiceStub\ArrayOfHostAccountSpec'
,'HostPosixAccountSpec'=>'VimServiceStub\HostPosixAccountSpec'
,'HostLocalAuthenticationInfo'=>'VimServiceStub\HostLocalAuthenticationInfo'
,'HostLowLevelProvisioningManagerDiskLayoutSpec'=>'VimServiceStub\HostLowLevelProvisioningManagerDiskLayoutSpec'
,'ArrayOfHostLowLevelProvisioningManagerDiskLayoutSpec'=>'VimServiceStub\ArrayOfHostLowLevelProvisioningManagerDiskLayoutSpec'
,'HostLowLevelProvisioningManagerSnapshotLayoutSpec'=>'VimServiceStub\HostLowLevelProvisioningManagerSnapshotLayoutSpec'
,'ArrayOfHostLowLevelProvisioningManagerSnapshotLayoutSpec'=>'VimServiceStub\ArrayOfHostLowLevelProvisioningManagerSnapshotLayoutSpec'
,'ServiceConsoleReservationInfo'=>'VimServiceStub\ServiceConsoleReservationInfo'
,'VirtualMachineMemoryReservationInfo'=>'VimServiceStub\VirtualMachineMemoryReservationInfo'
,'VirtualMachineMemoryReservationSpec'=>'VimServiceStub\VirtualMachineMemoryReservationSpec'
,'HostMemorySpec'=>'VimServiceStub\HostMemorySpec'
,'HostMountInfo'=>'VimServiceStub\HostMountInfo'
,'HostMultipathInfoLogicalUnitPolicy'=>'VimServiceStub\HostMultipathInfoLogicalUnitPolicy'
,'HostMultipathInfoLogicalUnitStorageArrayTypePolicy'=>'VimServiceStub\HostMultipathInfoLogicalUnitStorageArrayTypePolicy'
,'HostMultipathInfoFixedLogicalUnitPolicy'=>'VimServiceStub\HostMultipathInfoFixedLogicalUnitPolicy'
,'HostMultipathInfoLogicalUnit'=>'VimServiceStub\HostMultipathInfoLogicalUnit'
,'ArrayOfHostMultipathInfoLogicalUnit'=>'VimServiceStub\ArrayOfHostMultipathInfoLogicalUnit'
,'HostMultipathInfoPath'=>'VimServiceStub\HostMultipathInfoPath'
,'ArrayOfHostMultipathInfoPath'=>'VimServiceStub\ArrayOfHostMultipathInfoPath'
,'HostMultipathInfo'=>'VimServiceStub\HostMultipathInfo'
,'HostMultipathStateInfoPath'=>'VimServiceStub\HostMultipathStateInfoPath'
,'ArrayOfHostMultipathStateInfoPath'=>'VimServiceStub\ArrayOfHostMultipathStateInfoPath'
,'HostMultipathStateInfo'=>'VimServiceStub\HostMultipathStateInfo'
,'HostNatServicePortForwardSpec'=>'VimServiceStub\HostNatServicePortForwardSpec'
,'ArrayOfHostNatServicePortForwardSpec'=>'VimServiceStub\ArrayOfHostNatServicePortForwardSpec'
,'HostNatServiceNameServiceSpec'=>'VimServiceStub\HostNatServiceNameServiceSpec'
,'HostNatServiceSpec'=>'VimServiceStub\HostNatServiceSpec'
,'HostNatServiceConfig'=>'VimServiceStub\HostNatServiceConfig'
,'ArrayOfHostNatServiceConfig'=>'VimServiceStub\ArrayOfHostNatServiceConfig'
,'HostNatService'=>'VimServiceStub\HostNatService'
,'ArrayOfHostNatService'=>'VimServiceStub\ArrayOfHostNatService'
,'HostNetCapabilities'=>'VimServiceStub\HostNetCapabilities'
,'HostNetOffloadCapabilities'=>'VimServiceStub\HostNetOffloadCapabilities'
,'HostNetworkConfigResult'=>'VimServiceStub\HostNetworkConfigResult'
,'HostNetworkConfig'=>'VimServiceStub\HostNetworkConfig'
,'HostNetworkInfo'=>'VimServiceStub\HostNetworkInfo'
,'HostNetworkSecurityPolicy'=>'VimServiceStub\HostNetworkSecurityPolicy'
,'HostNetworkTrafficShapingPolicy'=>'VimServiceStub\HostNetworkTrafficShapingPolicy'
,'HostNicFailureCriteria'=>'VimServiceStub\HostNicFailureCriteria'
,'HostNicOrderPolicy'=>'VimServiceStub\HostNicOrderPolicy'
,'HostNicTeamingPolicy'=>'VimServiceStub\HostNicTeamingPolicy'
,'HostNetworkPolicy'=>'VimServiceStub\HostNetworkPolicy'
,'HostNtpConfig'=>'VimServiceStub\HostNtpConfig'
,'HostNumericSensorInfo'=>'VimServiceStub\HostNumericSensorInfo'
,'ArrayOfHostNumericSensorInfo'=>'VimServiceStub\ArrayOfHostNumericSensorInfo'
,'HostPatchManagerResult'=>'VimServiceStub\HostPatchManagerResult'
,'HostPatchManagerStatusPrerequisitePatch'=>'VimServiceStub\HostPatchManagerStatusPrerequisitePatch'
,'ArrayOfHostPatchManagerStatusPrerequisitePatch'=>'VimServiceStub\ArrayOfHostPatchManagerStatusPrerequisitePatch'
,'HostPatchManagerStatus'=>'VimServiceStub\HostPatchManagerStatus'
,'ArrayOfHostPatchManagerStatus'=>'VimServiceStub\ArrayOfHostPatchManagerStatus'
,'HostPatchManagerLocator'=>'VimServiceStub\HostPatchManagerLocator'
,'HostPatchManagerPatchManagerOperationSpec'=>'VimServiceStub\HostPatchManagerPatchManagerOperationSpec'
,'HostPathSelectionPolicyOption'=>'VimServiceStub\HostPathSelectionPolicyOption'
,'ArrayOfHostPathSelectionPolicyOption'=>'VimServiceStub\ArrayOfHostPathSelectionPolicyOption'
,'HostPciDevice'=>'VimServiceStub\HostPciDevice'
,'ArrayOfHostPciDevice'=>'VimServiceStub\ArrayOfHostPciDevice'
,'HostPciPassthruConfig'=>'VimServiceStub\HostPciPassthruConfig'
,'ArrayOfHostPciPassthruConfig'=>'VimServiceStub\ArrayOfHostPciPassthruConfig'
,'HostPciPassthruInfo'=>'VimServiceStub\HostPciPassthruInfo'
,'ArrayOfHostPciPassthruInfo'=>'VimServiceStub\ArrayOfHostPciPassthruInfo'
,'PhysicalNicSpec'=>'VimServiceStub\PhysicalNicSpec'
,'PhysicalNicConfig'=>'VimServiceStub\PhysicalNicConfig'
,'ArrayOfPhysicalNicConfig'=>'VimServiceStub\ArrayOfPhysicalNicConfig'
,'PhysicalNicLinkInfo'=>'VimServiceStub\PhysicalNicLinkInfo'
,'ArrayOfPhysicalNicLinkInfo'=>'VimServiceStub\ArrayOfPhysicalNicLinkInfo'
,'PhysicalNicHint'=>'VimServiceStub\PhysicalNicHint'
,'PhysicalNicIpHint'=>'VimServiceStub\PhysicalNicIpHint'
,'ArrayOfPhysicalNicIpHint'=>'VimServiceStub\ArrayOfPhysicalNicIpHint'
,'PhysicalNicNameHint'=>'VimServiceStub\PhysicalNicNameHint'
,'ArrayOfPhysicalNicNameHint'=>'VimServiceStub\ArrayOfPhysicalNicNameHint'
,'PhysicalNicHintInfo'=>'VimServiceStub\PhysicalNicHintInfo'
,'ArrayOfPhysicalNicHintInfo'=>'VimServiceStub\ArrayOfPhysicalNicHintInfo'
,'PhysicalNicCdpDeviceCapability'=>'VimServiceStub\PhysicalNicCdpDeviceCapability'
,'PhysicalNicCdpInfo'=>'VimServiceStub\PhysicalNicCdpInfo'
,'LinkLayerDiscoveryProtocolInfo'=>'VimServiceStub\LinkLayerDiscoveryProtocolInfo'
,'PhysicalNic'=>'VimServiceStub\PhysicalNic'
,'ArrayOfPhysicalNic'=>'VimServiceStub\ArrayOfPhysicalNic'
,'HostPlugStoreTopologyAdapter'=>'VimServiceStub\HostPlugStoreTopologyAdapter'
,'ArrayOfHostPlugStoreTopologyAdapter'=>'VimServiceStub\ArrayOfHostPlugStoreTopologyAdapter'
,'HostPlugStoreTopologyPath'=>'VimServiceStub\HostPlugStoreTopologyPath'
,'ArrayOfHostPlugStoreTopologyPath'=>'VimServiceStub\ArrayOfHostPlugStoreTopologyPath'
,'HostPlugStoreTopologyDevice'=>'VimServiceStub\HostPlugStoreTopologyDevice'
,'ArrayOfHostPlugStoreTopologyDevice'=>'VimServiceStub\ArrayOfHostPlugStoreTopologyDevice'
,'HostPlugStoreTopologyPlugin'=>'VimServiceStub\HostPlugStoreTopologyPlugin'
,'ArrayOfHostPlugStoreTopologyPlugin'=>'VimServiceStub\ArrayOfHostPlugStoreTopologyPlugin'
,'HostPlugStoreTopologyTarget'=>'VimServiceStub\HostPlugStoreTopologyTarget'
,'ArrayOfHostPlugStoreTopologyTarget'=>'VimServiceStub\ArrayOfHostPlugStoreTopologyTarget'
,'HostPlugStoreTopology'=>'VimServiceStub\HostPlugStoreTopology'
,'HostPortGroupSpec'=>'VimServiceStub\HostPortGroupSpec'
,'HostPortGroupConfig'=>'VimServiceStub\HostPortGroupConfig'
,'ArrayOfHostPortGroupConfig'=>'VimServiceStub\ArrayOfHostPortGroupConfig'
,'HostPortGroupPort'=>'VimServiceStub\HostPortGroupPort'
,'ArrayOfHostPortGroupPort'=>'VimServiceStub\ArrayOfHostPortGroupPort'
,'HostPortGroup'=>'VimServiceStub\HostPortGroup'
,'ArrayOfHostPortGroup'=>'VimServiceStub\ArrayOfHostPortGroup'
,'HostPowerPolicy'=>'VimServiceStub\HostPowerPolicy'
,'ArrayOfHostPowerPolicy'=>'VimServiceStub\ArrayOfHostPowerPolicy'
,'PowerSystemCapability'=>'VimServiceStub\PowerSystemCapability'
,'PowerSystemInfo'=>'VimServiceStub\PowerSystemInfo'
,'HostResignatureRescanResult'=>'VimServiceStub\HostResignatureRescanResult'
,'HostFirewallRulesetIpNetwork'=>'VimServiceStub\HostFirewallRulesetIpNetwork'
,'ArrayOfHostFirewallRulesetIpNetwork'=>'VimServiceStub\ArrayOfHostFirewallRulesetIpNetwork'
,'HostFirewallRulesetIpList'=>'VimServiceStub\HostFirewallRulesetIpList'
,'HostFirewallRulesetRulesetSpec'=>'VimServiceStub\HostFirewallRulesetRulesetSpec'
,'HostFirewallRule'=>'VimServiceStub\HostFirewallRule'
,'ArrayOfHostFirewallRule'=>'VimServiceStub\ArrayOfHostFirewallRule'
,'HostFirewallRuleset'=>'VimServiceStub\HostFirewallRuleset'
,'ArrayOfHostFirewallRuleset'=>'VimServiceStub\ArrayOfHostFirewallRuleset'
,'HostRuntimeInfo'=>'VimServiceStub\HostRuntimeInfo'
,'HostScsiDiskPartition'=>'VimServiceStub\HostScsiDiskPartition'
,'ArrayOfHostScsiDiskPartition'=>'VimServiceStub\ArrayOfHostScsiDiskPartition'
,'HostScsiDisk'=>'VimServiceStub\HostScsiDisk'
,'ArrayOfHostScsiDisk'=>'VimServiceStub\ArrayOfHostScsiDisk'
,'ScsiLunCapabilities'=>'VimServiceStub\ScsiLunCapabilities'
,'ScsiLunDurableName'=>'VimServiceStub\ScsiLunDurableName'
,'ArrayOfScsiLunDurableName'=>'VimServiceStub\ArrayOfScsiLunDurableName'
,'ScsiLunDescriptor'=>'VimServiceStub\ScsiLunDescriptor'
,'ArrayOfScsiLunDescriptor'=>'VimServiceStub\ArrayOfScsiLunDescriptor'
,'ScsiLun'=>'VimServiceStub\ScsiLun'
,'ArrayOfScsiLun'=>'VimServiceStub\ArrayOfScsiLun'
,'HostScsiTopologyInterface'=>'VimServiceStub\HostScsiTopologyInterface'
,'ArrayOfHostScsiTopologyInterface'=>'VimServiceStub\ArrayOfHostScsiTopologyInterface'
,'HostScsiTopologyTarget'=>'VimServiceStub\HostScsiTopologyTarget'
,'ArrayOfHostScsiTopologyTarget'=>'VimServiceStub\ArrayOfHostScsiTopologyTarget'
,'HostScsiTopologyLun'=>'VimServiceStub\HostScsiTopologyLun'
,'ArrayOfHostScsiTopologyLun'=>'VimServiceStub\ArrayOfHostScsiTopologyLun'
,'HostScsiTopology'=>'VimServiceStub\HostScsiTopology'
,'HostSecuritySpec'=>'VimServiceStub\HostSecuritySpec'
,'HostServiceSourcePackage'=>'VimServiceStub\HostServiceSourcePackage'
,'HostService'=>'VimServiceStub\HostService'
,'ArrayOfHostService'=>'VimServiceStub\ArrayOfHostService'
,'HostServiceConfig'=>'VimServiceStub\HostServiceConfig'
,'ArrayOfHostServiceConfig'=>'VimServiceStub\ArrayOfHostServiceConfig'
,'HostServiceInfo'=>'VimServiceStub\HostServiceInfo'
,'HostSnmpDestination'=>'VimServiceStub\HostSnmpDestination'
,'ArrayOfHostSnmpDestination'=>'VimServiceStub\ArrayOfHostSnmpDestination'
,'HostSnmpConfigSpec'=>'VimServiceStub\HostSnmpConfigSpec'
,'HostSnmpSystemAgentLimits'=>'VimServiceStub\HostSnmpSystemAgentLimits'
,'HostSslThumbprintInfo'=>'VimServiceStub\HostSslThumbprintInfo'
,'ArrayOfHostSslThumbprintInfo'=>'VimServiceStub\ArrayOfHostSslThumbprintInfo'
,'HostStorageArrayTypePolicyOption'=>'VimServiceStub\HostStorageArrayTypePolicyOption'
,'ArrayOfHostStorageArrayTypePolicyOption'=>'VimServiceStub\ArrayOfHostStorageArrayTypePolicyOption'
,'HostStorageDeviceInfo'=>'VimServiceStub\HostStorageDeviceInfo'
,'HostHardwareSummary'=>'VimServiceStub\HostHardwareSummary'
,'HostListSummaryQuickStats'=>'VimServiceStub\HostListSummaryQuickStats'
,'HostConfigSummary'=>'VimServiceStub\HostConfigSummary'
,'HostListSummary'=>'VimServiceStub\HostListSummary'
,'HostSystemHealthInfo'=>'VimServiceStub\HostSystemHealthInfo'
,'HostSystemIdentificationInfo'=>'VimServiceStub\HostSystemIdentificationInfo'
,'ArrayOfHostSystemIdentificationInfo'=>'VimServiceStub\ArrayOfHostSystemIdentificationInfo'
,'HostSystemResourceInfo'=>'VimServiceStub\HostSystemResourceInfo'
,'ArrayOfHostSystemResourceInfo'=>'VimServiceStub\ArrayOfHostSystemResourceInfo'
,'HostTargetTransport'=>'VimServiceStub\HostTargetTransport'
,'HostParallelScsiTargetTransport'=>'VimServiceStub\HostParallelScsiTargetTransport'
,'HostBlockAdapterTargetTransport'=>'VimServiceStub\HostBlockAdapterTargetTransport'
,'HostFibreChannelTargetTransport'=>'VimServiceStub\HostFibreChannelTargetTransport'
,'HostInternetScsiTargetTransport'=>'VimServiceStub\HostInternetScsiTargetTransport'
,'HostFibreChannelOverEthernetTargetTransport'=>'VimServiceStub\HostFibreChannelOverEthernetTargetTransport'
,'HostDigestInfo'=>'VimServiceStub\HostDigestInfo'
,'HostTpmDigestInfo'=>'VimServiceStub\HostTpmDigestInfo'
,'ArrayOfHostTpmDigestInfo'=>'VimServiceStub\ArrayOfHostTpmDigestInfo'
,'HostUnresolvedVmfsExtent'=>'VimServiceStub\HostUnresolvedVmfsExtent'
,'ArrayOfHostUnresolvedVmfsExtent'=>'VimServiceStub\ArrayOfHostUnresolvedVmfsExtent'
,'HostUnresolvedVmfsResignatureSpec'=>'VimServiceStub\HostUnresolvedVmfsResignatureSpec'
,'HostUnresolvedVmfsResolutionResult'=>'VimServiceStub\HostUnresolvedVmfsResolutionResult'
,'ArrayOfHostUnresolvedVmfsResolutionResult'=>'VimServiceStub\ArrayOfHostUnresolvedVmfsResolutionResult'
,'HostUnresolvedVmfsResolutionSpec'=>'VimServiceStub\HostUnresolvedVmfsResolutionSpec'
,'ArrayOfHostUnresolvedVmfsResolutionSpec'=>'VimServiceStub\ArrayOfHostUnresolvedVmfsResolutionSpec'
,'HostUnresolvedVmfsVolumeResolveStatus'=>'VimServiceStub\HostUnresolvedVmfsVolumeResolveStatus'
,'HostUnresolvedVmfsVolume'=>'VimServiceStub\HostUnresolvedVmfsVolume'
,'ArrayOfHostUnresolvedVmfsVolume'=>'VimServiceStub\ArrayOfHostUnresolvedVmfsVolume'
,'HostVMotionConfig'=>'VimServiceStub\HostVMotionConfig'
,'HostVMotionInfo'=>'VimServiceStub\HostVMotionInfo'
,'HostVMotionNetConfig'=>'VimServiceStub\HostVMotionNetConfig'
,'HostVirtualNicSpec'=>'VimServiceStub\HostVirtualNicSpec'
,'HostVirtualNicConfig'=>'VimServiceStub\HostVirtualNicConfig'
,'ArrayOfHostVirtualNicConfig'=>'VimServiceStub\ArrayOfHostVirtualNicConfig'
,'HostVirtualNic'=>'VimServiceStub\HostVirtualNic'
,'ArrayOfHostVirtualNic'=>'VimServiceStub\ArrayOfHostVirtualNic'
,'HostVirtualNicConnection'=>'VimServiceStub\HostVirtualNicConnection'
,'HostVirtualNicManagerNicTypeSelection'=>'VimServiceStub\HostVirtualNicManagerNicTypeSelection'
,'ArrayOfHostVirtualNicManagerNicTypeSelection'=>'VimServiceStub\ArrayOfHostVirtualNicManagerNicTypeSelection'
,'VirtualNicManagerNetConfig'=>'VimServiceStub\VirtualNicManagerNetConfig'
,'ArrayOfVirtualNicManagerNetConfig'=>'VimServiceStub\ArrayOfVirtualNicManagerNetConfig'
,'HostVirtualNicManagerInfo'=>'VimServiceStub\HostVirtualNicManagerInfo'
,'HostVirtualSwitchBridge'=>'VimServiceStub\HostVirtualSwitchBridge'
,'HostVirtualSwitchAutoBridge'=>'VimServiceStub\HostVirtualSwitchAutoBridge'
,'HostVirtualSwitchSimpleBridge'=>'VimServiceStub\HostVirtualSwitchSimpleBridge'
,'HostVirtualSwitchBondBridge'=>'VimServiceStub\HostVirtualSwitchBondBridge'
,'HostVirtualSwitchBeaconConfig'=>'VimServiceStub\HostVirtualSwitchBeaconConfig'
,'HostVirtualSwitchSpec'=>'VimServiceStub\HostVirtualSwitchSpec'
,'HostVirtualSwitchConfig'=>'VimServiceStub\HostVirtualSwitchConfig'
,'ArrayOfHostVirtualSwitchConfig'=>'VimServiceStub\ArrayOfHostVirtualSwitchConfig'
,'HostVirtualSwitch'=>'VimServiceStub\HostVirtualSwitch'
,'ArrayOfHostVirtualSwitch'=>'VimServiceStub\ArrayOfHostVirtualSwitch'
,'HostVmciAccessManagerAccessSpec'=>'VimServiceStub\HostVmciAccessManagerAccessSpec'
,'ArrayOfHostVmciAccessManagerAccessSpec'=>'VimServiceStub\ArrayOfHostVmciAccessManagerAccessSpec'
,'HostVmfsRescanResult'=>'VimServiceStub\HostVmfsRescanResult'
,'ArrayOfHostVmfsRescanResult'=>'VimServiceStub\ArrayOfHostVmfsRescanResult'
,'HostVmfsSpec'=>'VimServiceStub\HostVmfsSpec'
,'HostVmfsVolume'=>'VimServiceStub\HostVmfsVolume'
,'NetDhcpConfigInfoDhcpOptions'=>'VimServiceStub\NetDhcpConfigInfoDhcpOptions'
,'NetDhcpConfigInfo'=>'VimServiceStub\NetDhcpConfigInfo'
,'NetDhcpConfigSpecDhcpOptionsSpec'=>'VimServiceStub\NetDhcpConfigSpecDhcpOptionsSpec'
,'NetDhcpConfigSpec'=>'VimServiceStub\NetDhcpConfigSpec'
,'NetDnsConfigInfo'=>'VimServiceStub\NetDnsConfigInfo'
,'NetDnsConfigSpec'=>'VimServiceStub\NetDnsConfigSpec'
,'NetIpConfigInfoIpAddress'=>'VimServiceStub\NetIpConfigInfoIpAddress'
,'ArrayOfNetIpConfigInfoIpAddress'=>'VimServiceStub\ArrayOfNetIpConfigInfoIpAddress'
,'NetIpConfigInfo'=>'VimServiceStub\NetIpConfigInfo'
,'NetIpConfigSpecIpAddressSpec'=>'VimServiceStub\NetIpConfigSpecIpAddressSpec'
,'ArrayOfNetIpConfigSpecIpAddressSpec'=>'VimServiceStub\ArrayOfNetIpConfigSpecIpAddressSpec'
,'NetIpConfigSpec'=>'VimServiceStub\NetIpConfigSpec'
,'NetIpRouteConfigInfoGateway'=>'VimServiceStub\NetIpRouteConfigInfoGateway'
,'NetIpRouteConfigInfoIpRoute'=>'VimServiceStub\NetIpRouteConfigInfoIpRoute'
,'ArrayOfNetIpRouteConfigInfoIpRoute'=>'VimServiceStub\ArrayOfNetIpRouteConfigInfoIpRoute'
,'NetIpRouteConfigInfo'=>'VimServiceStub\NetIpRouteConfigInfo'
,'NetIpRouteConfigSpecGatewaySpec'=>'VimServiceStub\NetIpRouteConfigSpecGatewaySpec'
,'NetIpRouteConfigSpecIpRouteSpec'=>'VimServiceStub\NetIpRouteConfigSpecIpRouteSpec'
,'ArrayOfNetIpRouteConfigSpecIpRouteSpec'=>'VimServiceStub\ArrayOfNetIpRouteConfigSpecIpRouteSpec'
,'NetIpRouteConfigSpec'=>'VimServiceStub\NetIpRouteConfigSpec'
,'NetIpStackInfoNetToMedia'=>'VimServiceStub\NetIpStackInfoNetToMedia'
,'ArrayOfNetIpStackInfoNetToMedia'=>'VimServiceStub\ArrayOfNetIpStackInfoNetToMedia'
,'NetIpStackInfoDefaultRouter'=>'VimServiceStub\NetIpStackInfoDefaultRouter'
,'ArrayOfNetIpStackInfoDefaultRouter'=>'VimServiceStub\ArrayOfNetIpStackInfoDefaultRouter'
,'NetIpStackInfo'=>'VimServiceStub\NetIpStackInfo'
,'NetBIOSConfigInfo'=>'VimServiceStub\NetBIOSConfigInfo'
,'WinNetBIOSConfigInfo'=>'VimServiceStub\WinNetBIOSConfigInfo'
,'ArrayUpdateSpec'=>'VimServiceStub\ArrayUpdateSpec'
,'BoolOption'=>'VimServiceStub\BoolOption'
,'ChoiceOption'=>'VimServiceStub\ChoiceOption'
,'FloatOption'=>'VimServiceStub\FloatOption'
,'IntOption'=>'VimServiceStub\IntOption'
,'LongOption'=>'VimServiceStub\LongOption'
,'OptionDef'=>'VimServiceStub\OptionDef'
,'ArrayOfOptionDef'=>'VimServiceStub\ArrayOfOptionDef'
,'OptionType'=>'VimServiceStub\OptionType'
,'OptionValue'=>'VimServiceStub\OptionValue'
,'ArrayOfOptionValue'=>'VimServiceStub\ArrayOfOptionValue'
,'StringOption'=>'VimServiceStub\StringOption'
,'ApplyProfile'=>'VimServiceStub\ApplyProfile'
,'ArrayOfApplyProfile'=>'VimServiceStub\ArrayOfApplyProfile'
,'ProfileApplyProfileElement'=>'VimServiceStub\ProfileApplyProfileElement'
,'ProfileApplyProfileProperty'=>'VimServiceStub\ProfileApplyProfileProperty'
,'ArrayOfProfileApplyProfileProperty'=>'VimServiceStub\ArrayOfProfileApplyProfileProperty'
,'ComplianceLocator'=>'VimServiceStub\ComplianceLocator'
,'ArrayOfComplianceLocator'=>'VimServiceStub\ArrayOfComplianceLocator'
,'ComplianceProfile'=>'VimServiceStub\ComplianceProfile'
,'ComplianceFailure'=>'VimServiceStub\ComplianceFailure'
,'ArrayOfComplianceFailure'=>'VimServiceStub\ArrayOfComplianceFailure'
,'ComplianceResult'=>'VimServiceStub\ComplianceResult'
,'ArrayOfComplianceResult'=>'VimServiceStub\ArrayOfComplianceResult'
,'ProfileDeferredPolicyOptionParameter'=>'VimServiceStub\ProfileDeferredPolicyOptionParameter'
,'ArrayOfProfileDeferredPolicyOptionParameter'=>'VimServiceStub\ArrayOfProfileDeferredPolicyOptionParameter'
,'ProfileExpression'=>'VimServiceStub\ProfileExpression'
,'ArrayOfProfileExpression'=>'VimServiceStub\ArrayOfProfileExpression'
,'ProfileSimpleExpression'=>'VimServiceStub\ProfileSimpleExpression'
,'ProfileCompositeExpression'=>'VimServiceStub\ProfileCompositeExpression'
,'ProfileExpressionMetadata'=>'VimServiceStub\ProfileExpressionMetadata'
,'ArrayOfProfileExpressionMetadata'=>'VimServiceStub\ArrayOfProfileExpressionMetadata'
,'ProfileParameterMetadata'=>'VimServiceStub\ProfileParameterMetadata'
,'ArrayOfProfileParameterMetadata'=>'VimServiceStub\ArrayOfProfileParameterMetadata'
,'ProfilePolicy'=>'VimServiceStub\ProfilePolicy'
,'ArrayOfProfilePolicy'=>'VimServiceStub\ArrayOfProfilePolicy'
,'ProfilePolicyOptionMetadata'=>'VimServiceStub\ProfilePolicyOptionMetadata'
,'ArrayOfProfilePolicyOptionMetadata'=>'VimServiceStub\ArrayOfProfilePolicyOptionMetadata'
,'ProfileCompositePolicyOptionMetadata'=>'VimServiceStub\ProfileCompositePolicyOptionMetadata'
,'UserInputRequiredParameterMetadata'=>'VimServiceStub\UserInputRequiredParameterMetadata'
,'ProfilePolicyMetadata'=>'VimServiceStub\ProfilePolicyMetadata'
,'ArrayOfProfilePolicyMetadata'=>'VimServiceStub\ArrayOfProfilePolicyMetadata'
,'PolicyOption'=>'VimServiceStub\PolicyOption'
,'ArrayOfPolicyOption'=>'VimServiceStub\ArrayOfPolicyOption'
,'CompositePolicyOption'=>'VimServiceStub\CompositePolicyOption'
,'ProfileCreateSpec'=>'VimServiceStub\ProfileCreateSpec'
,'ProfileSerializedCreateSpec'=>'VimServiceStub\ProfileSerializedCreateSpec'
,'ProfileConfigInfo'=>'VimServiceStub\ProfileConfigInfo'
,'ProfileDescriptionSection'=>'VimServiceStub\ProfileDescriptionSection'
,'ArrayOfProfileDescriptionSection'=>'VimServiceStub\ArrayOfProfileDescriptionSection'
,'ProfileDescription'=>'VimServiceStub\ProfileDescription'
,'ProfileMetadataProfileSortSpec'=>'VimServiceStub\ProfileMetadataProfileSortSpec'
,'ArrayOfProfileMetadataProfileSortSpec'=>'VimServiceStub\ArrayOfProfileMetadataProfileSortSpec'
,'ProfileMetadata'=>'VimServiceStub\ProfileMetadata'
,'ArrayOfProfileMetadata'=>'VimServiceStub\ArrayOfProfileMetadata'
,'ProfilePropertyPath'=>'VimServiceStub\ProfilePropertyPath'
,'ArrayOfProfilePropertyPath'=>'VimServiceStub\ArrayOfProfilePropertyPath'
,'ProfileProfileStructure'=>'VimServiceStub\ProfileProfileStructure'
,'ProfileProfileStructureProperty'=>'VimServiceStub\ProfileProfileStructureProperty'
,'ArrayOfProfileProfileStructureProperty'=>'VimServiceStub\ArrayOfProfileProfileStructureProperty'
,'ClusterProfileConfigInfo'=>'VimServiceStub\ClusterProfileConfigInfo'
,'ClusterProfileCreateSpec'=>'VimServiceStub\ClusterProfileCreateSpec'
,'ClusterProfileConfigSpec'=>'VimServiceStub\ClusterProfileConfigSpec'
,'ClusterProfileCompleteConfigSpec'=>'VimServiceStub\ClusterProfileCompleteConfigSpec'
,'ClusterProfileConfigServiceCreateSpec'=>'VimServiceStub\ClusterProfileConfigServiceCreateSpec'
,'AnswerFile'=>'VimServiceStub\AnswerFile'
,'AnswerFileStatusError'=>'VimServiceStub\AnswerFileStatusError'
,'ArrayOfAnswerFileStatusError'=>'VimServiceStub\ArrayOfAnswerFileStatusError'
,'AnswerFileStatusResult'=>'VimServiceStub\AnswerFileStatusResult'
,'ArrayOfAnswerFileStatusResult'=>'VimServiceStub\ArrayOfAnswerFileStatusResult'
,'ProfileExecuteError'=>'VimServiceStub\ProfileExecuteError'
,'ArrayOfProfileExecuteError'=>'VimServiceStub\ArrayOfProfileExecuteError'
,'ProfileExecuteResult'=>'VimServiceStub\ProfileExecuteResult'
,'HostApplyProfile'=>'VimServiceStub\HostApplyProfile'
,'PhysicalNicProfile'=>'VimServiceStub\PhysicalNicProfile'
,'ArrayOfPhysicalNicProfile'=>'VimServiceStub\ArrayOfPhysicalNicProfile'
,'HostMemoryProfile'=>'VimServiceStub\HostMemoryProfile'
,'UserProfile'=>'VimServiceStub\UserProfile'
,'ArrayOfUserProfile'=>'VimServiceStub\ArrayOfUserProfile'
,'UserGroupProfile'=>'VimServiceStub\UserGroupProfile'
,'ArrayOfUserGroupProfile'=>'VimServiceStub\ArrayOfUserGroupProfile'
,'SecurityProfile'=>'VimServiceStub\SecurityProfile'
,'OptionProfile'=>'VimServiceStub\OptionProfile'
,'ArrayOfOptionProfile'=>'VimServiceStub\ArrayOfOptionProfile'
,'DateTimeProfile'=>'VimServiceStub\DateTimeProfile'
,'ServiceProfile'=>'VimServiceStub\ServiceProfile'
,'ArrayOfServiceProfile'=>'VimServiceStub\ArrayOfServiceProfile'
,'FirewallProfileRulesetProfile'=>'VimServiceStub\FirewallProfileRulesetProfile'
,'ArrayOfFirewallProfileRulesetProfile'=>'VimServiceStub\ArrayOfFirewallProfileRulesetProfile'
,'FirewallProfile'=>'VimServiceStub\FirewallProfile'
,'NasStorageProfile'=>'VimServiceStub\NasStorageProfile'
,'ArrayOfNasStorageProfile'=>'VimServiceStub\ArrayOfNasStorageProfile'
,'StorageProfile'=>'VimServiceStub\StorageProfile'
,'NetworkProfileDnsConfigProfile'=>'VimServiceStub\NetworkProfileDnsConfigProfile'
,'NetworkProfile'=>'VimServiceStub\NetworkProfile'
,'DvsVNicProfile'=>'VimServiceStub\DvsVNicProfile'
,'DvsServiceConsoleVNicProfile'=>'VimServiceStub\DvsServiceConsoleVNicProfile'
,'ArrayOfDvsServiceConsoleVNicProfile'=>'VimServiceStub\ArrayOfDvsServiceConsoleVNicProfile'
,'DvsHostVNicProfile'=>'VimServiceStub\DvsHostVNicProfile'
,'ArrayOfDvsHostVNicProfile'=>'VimServiceStub\ArrayOfDvsHostVNicProfile'
,'DvsProfile'=>'VimServiceStub\DvsProfile'
,'ArrayOfDvsProfile'=>'VimServiceStub\ArrayOfDvsProfile'
,'PnicUplinkProfile'=>'VimServiceStub\PnicUplinkProfile'
,'ArrayOfPnicUplinkProfile'=>'VimServiceStub\ArrayOfPnicUplinkProfile'
,'IpRouteProfile'=>'VimServiceStub\IpRouteProfile'
,'StaticRouteProfile'=>'VimServiceStub\StaticRouteProfile'
,'ArrayOfStaticRouteProfile'=>'VimServiceStub\ArrayOfStaticRouteProfile'
,'LinkProfile'=>'VimServiceStub\LinkProfile'
,'NumPortsProfile'=>'VimServiceStub\NumPortsProfile'
,'VirtualSwitchProfile'=>'VimServiceStub\VirtualSwitchProfile'
,'ArrayOfVirtualSwitchProfile'=>'VimServiceStub\ArrayOfVirtualSwitchProfile'
,'VlanProfile'=>'VimServiceStub\VlanProfile'
,'VirtualSwitchSelectionProfile'=>'VimServiceStub\VirtualSwitchSelectionProfile'
,'PortGroupProfile'=>'VimServiceStub\PortGroupProfile'
,'VmPortGroupProfile'=>'VimServiceStub\VmPortGroupProfile'
,'ArrayOfVmPortGroupProfile'=>'VimServiceStub\ArrayOfVmPortGroupProfile'
,'HostPortGroupProfile'=>'VimServiceStub\HostPortGroupProfile'
,'ArrayOfHostPortGroupProfile'=>'VimServiceStub\ArrayOfHostPortGroupProfile'
,'ServiceConsolePortGroupProfile'=>'VimServiceStub\ServiceConsolePortGroupProfile'
,'ArrayOfServiceConsolePortGroupProfile'=>'VimServiceStub\ArrayOfServiceConsolePortGroupProfile'
,'NetworkPolicyProfile'=>'VimServiceStub\NetworkPolicyProfile'
,'IpAddressProfile'=>'VimServiceStub\IpAddressProfile'
,'AuthenticationProfile'=>'VimServiceStub\AuthenticationProfile'
,'ActiveDirectoryProfile'=>'VimServiceStub\ActiveDirectoryProfile'
,'PermissionProfile'=>'VimServiceStub\PermissionProfile'
,'ArrayOfPermissionProfile'=>'VimServiceStub\ArrayOfPermissionProfile'
,'HostProfileConfigInfo'=>'VimServiceStub\HostProfileConfigInfo'
,'HostProfileConfigSpec'=>'VimServiceStub\HostProfileConfigSpec'
,'HostProfileSerializedHostProfileSpec'=>'VimServiceStub\HostProfileSerializedHostProfileSpec'
,'HostProfileCompleteConfigSpec'=>'VimServiceStub\HostProfileCompleteConfigSpec'
,'HostProfileHostBasedConfigSpec'=>'VimServiceStub\HostProfileHostBasedConfigSpec'
,'HostProfileManagerConfigTaskList'=>'VimServiceStub\HostProfileManagerConfigTaskList'
,'AnswerFileCreateSpec'=>'VimServiceStub\AnswerFileCreateSpec'
,'AnswerFileOptionsCreateSpec'=>'VimServiceStub\AnswerFileOptionsCreateSpec'
,'AnswerFileSerializedCreateSpec'=>'VimServiceStub\AnswerFileSerializedCreateSpec'
,'ScheduledTaskDetail'=>'VimServiceStub\ScheduledTaskDetail'
,'ArrayOfScheduledTaskDetail'=>'VimServiceStub\ArrayOfScheduledTaskDetail'
,'ScheduledTaskDescription'=>'VimServiceStub\ScheduledTaskDescription'
,'ScheduledTaskInfo'=>'VimServiceStub\ScheduledTaskInfo'
,'TaskScheduler'=>'VimServiceStub\TaskScheduler'
,'AfterStartupTaskScheduler'=>'VimServiceStub\AfterStartupTaskScheduler'
,'OnceTaskScheduler'=>'VimServiceStub\OnceTaskScheduler'
,'RecurrentTaskScheduler'=>'VimServiceStub\RecurrentTaskScheduler'
,'HourlyTaskScheduler'=>'VimServiceStub\HourlyTaskScheduler'
,'DailyTaskScheduler'=>'VimServiceStub\DailyTaskScheduler'
,'WeeklyTaskScheduler'=>'VimServiceStub\WeeklyTaskScheduler'
,'MonthlyTaskScheduler'=>'VimServiceStub\MonthlyTaskScheduler'
,'MonthlyByDayTaskScheduler'=>'VimServiceStub\MonthlyByDayTaskScheduler'
,'MonthlyByWeekdayTaskScheduler'=>'VimServiceStub\MonthlyByWeekdayTaskScheduler'
,'ScheduledTaskSpec'=>'VimServiceStub\ScheduledTaskSpec'
,'ApplyStorageRecommendationResult'=>'VimServiceStub\ApplyStorageRecommendationResult'
,'StorageDrsConfigInfo'=>'VimServiceStub\StorageDrsConfigInfo'
,'StorageDrsConfigSpec'=>'VimServiceStub\StorageDrsConfigSpec'
,'StorageDrsVmConfigSpec'=>'VimServiceStub\StorageDrsVmConfigSpec'
,'ArrayOfStorageDrsVmConfigSpec'=>'VimServiceStub\ArrayOfStorageDrsVmConfigSpec'
,'StorageDrsPodConfigInfo'=>'VimServiceStub\StorageDrsPodConfigInfo'
,'StorageDrsSpaceLoadBalanceConfig'=>'VimServiceStub\StorageDrsSpaceLoadBalanceConfig'
,'StorageDrsIoLoadBalanceConfig'=>'VimServiceStub\StorageDrsIoLoadBalanceConfig'
,'StorageDrsPodConfigSpec'=>'VimServiceStub\StorageDrsPodConfigSpec'
,'StorageDrsOptionSpec'=>'VimServiceStub\StorageDrsOptionSpec'
,'ArrayOfStorageDrsOptionSpec'=>'VimServiceStub\ArrayOfStorageDrsOptionSpec'
,'VmPodConfigForPlacement'=>'VimServiceStub\VmPodConfigForPlacement'
,'ArrayOfVmPodConfigForPlacement'=>'VimServiceStub\ArrayOfVmPodConfigForPlacement'
,'PodDiskLocator'=>'VimServiceStub\PodDiskLocator'
,'ArrayOfPodDiskLocator'=>'VimServiceStub\ArrayOfPodDiskLocator'
,'StorageDrsPodSelectionSpec'=>'VimServiceStub\StorageDrsPodSelectionSpec'
,'StorageMigrationAction'=>'VimServiceStub\StorageMigrationAction'
,'StoragePlacementAction'=>'VimServiceStub\StoragePlacementAction'
,'StoragePlacementResult'=>'VimServiceStub\StoragePlacementResult'
,'StoragePlacementSpec'=>'VimServiceStub\StoragePlacementSpec'
,'VirtualDiskAntiAffinityRuleSpec'=>'VimServiceStub\VirtualDiskAntiAffinityRuleSpec'
,'StorageDrsVmConfigInfo'=>'VimServiceStub\StorageDrsVmConfigInfo'
,'ArrayOfStorageDrsVmConfigInfo'=>'VimServiceStub\ArrayOfStorageDrsVmConfigInfo'
,'VAppCloneSpecNetworkMappingPair'=>'VimServiceStub\VAppCloneSpecNetworkMappingPair'
,'ArrayOfVAppCloneSpecNetworkMappingPair'=>'VimServiceStub\ArrayOfVAppCloneSpecNetworkMappingPair'
,'VAppCloneSpecResourceMap'=>'VimServiceStub\VAppCloneSpecResourceMap'
,'ArrayOfVAppCloneSpecResourceMap'=>'VimServiceStub\ArrayOfVAppCloneSpecResourceMap'
,'VAppCloneSpec'=>'VimServiceStub\VAppCloneSpec'
,'VAppEntityConfigInfo'=>'VimServiceStub\VAppEntityConfigInfo'
,'ArrayOfVAppEntityConfigInfo'=>'VimServiceStub\ArrayOfVAppEntityConfigInfo'
,'VAppIPAssignmentInfo'=>'VimServiceStub\VAppIPAssignmentInfo'
,'IpPoolIpPoolConfigInfo'=>'VimServiceStub\IpPoolIpPoolConfigInfo'
,'IpPoolAssociation'=>'VimServiceStub\IpPoolAssociation'
,'ArrayOfIpPoolAssociation'=>'VimServiceStub\ArrayOfIpPoolAssociation'
,'IpPool'=>'VimServiceStub\IpPool'
,'ArrayOfIpPool'=>'VimServiceStub\ArrayOfIpPool'
,'VAppOvfSectionInfo'=>'VimServiceStub\VAppOvfSectionInfo'
,'ArrayOfVAppOvfSectionInfo'=>'VimServiceStub\ArrayOfVAppOvfSectionInfo'
,'VAppProductInfo'=>'VimServiceStub\VAppProductInfo'
,'ArrayOfVAppProductInfo'=>'VimServiceStub\ArrayOfVAppProductInfo'
,'VAppPropertyInfo'=>'VimServiceStub\VAppPropertyInfo'
,'ArrayOfVAppPropertyInfo'=>'VimServiceStub\ArrayOfVAppPropertyInfo'
,'VAppConfigInfo'=>'VimServiceStub\VAppConfigInfo'
,'VAppConfigSpec'=>'VimServiceStub\VAppConfigSpec'
,'VirtualAppImportSpec'=>'VimServiceStub\VirtualAppImportSpec'
,'VmConfigInfo'=>'VimServiceStub\VmConfigInfo'
,'VmConfigSpec'=>'VimServiceStub\VmConfigSpec'
,'VAppProductSpec'=>'VimServiceStub\VAppProductSpec'
,'ArrayOfVAppProductSpec'=>'VimServiceStub\ArrayOfVAppProductSpec'
,'VAppPropertySpec'=>'VimServiceStub\VAppPropertySpec'
,'ArrayOfVAppPropertySpec'=>'VimServiceStub\ArrayOfVAppPropertySpec'
,'VAppOvfSectionSpec'=>'VimServiceStub\VAppOvfSectionSpec'
,'ArrayOfVAppOvfSectionSpec'=>'VimServiceStub\ArrayOfVAppOvfSectionSpec'
,'VirtualMachineAffinityInfo'=>'VimServiceStub\VirtualMachineAffinityInfo'
,'VirtualMachineBootOptionsBootableDevice'=>'VimServiceStub\VirtualMachineBootOptionsBootableDevice'
,'ArrayOfVirtualMachineBootOptionsBootableDevice'=>'VimServiceStub\ArrayOfVirtualMachineBootOptionsBootableDevice'
,'VirtualMachineBootOptionsBootableDiskDevice'=>'VimServiceStub\VirtualMachineBootOptionsBootableDiskDevice'
,'VirtualMachineBootOptionsBootableEthernetDevice'=>'VimServiceStub\VirtualMachineBootOptionsBootableEthernetDevice'
,'VirtualMachineBootOptionsBootableFloppyDevice'=>'VimServiceStub\VirtualMachineBootOptionsBootableFloppyDevice'
,'VirtualMachineBootOptionsBootableCdromDevice'=>'VimServiceStub\VirtualMachineBootOptionsBootableCdromDevice'
,'VirtualMachineBootOptions'=>'VimServiceStub\VirtualMachineBootOptions'
,'VirtualMachineCapability'=>'VimServiceStub\VirtualMachineCapability'
,'VirtualMachineCdromInfo'=>'VimServiceStub\VirtualMachineCdromInfo'
,'ArrayOfVirtualMachineCdromInfo'=>'VimServiceStub\ArrayOfVirtualMachineCdromInfo'
,'VirtualMachineCloneSpec'=>'VimServiceStub\VirtualMachineCloneSpec'
,'VirtualMachineConfigInfoDatastoreUrlPair'=>'VimServiceStub\VirtualMachineConfigInfoDatastoreUrlPair'
,'ArrayOfVirtualMachineConfigInfoDatastoreUrlPair'=>'VimServiceStub\ArrayOfVirtualMachineConfigInfoDatastoreUrlPair'
,'VirtualMachineConfigInfoOverheadInfo'=>'VimServiceStub\VirtualMachineConfigInfoOverheadInfo'
,'VirtualMachineConfigInfo'=>'VimServiceStub\VirtualMachineConfigInfo'
,'VirtualMachineConfigOption'=>'VimServiceStub\VirtualMachineConfigOption'
,'VirtualMachineConfigOptionDescriptor'=>'VimServiceStub\VirtualMachineConfigOptionDescriptor'
,'ArrayOfVirtualMachineConfigOptionDescriptor'=>'VimServiceStub\ArrayOfVirtualMachineConfigOptionDescriptor'
,'VirtualMachineCpuIdInfoSpec'=>'VimServiceStub\VirtualMachineCpuIdInfoSpec'
,'ArrayOfVirtualMachineCpuIdInfoSpec'=>'VimServiceStub\ArrayOfVirtualMachineCpuIdInfoSpec'
,'VirtualMachineConfigSpec'=>'VimServiceStub\VirtualMachineConfigSpec'
,'ConfigTarget'=>'VimServiceStub\ConfigTarget'
,'VirtualMachineConsolePreferences'=>'VimServiceStub\VirtualMachineConsolePreferences'
,'VirtualMachineDatastoreInfo'=>'VimServiceStub\VirtualMachineDatastoreInfo'
,'ArrayOfVirtualMachineDatastoreInfo'=>'VimServiceStub\ArrayOfVirtualMachineDatastoreInfo'
,'VirtualMachineDatastoreVolumeOption'=>'VimServiceStub\VirtualMachineDatastoreVolumeOption'
,'ArrayOfVirtualMachineDatastoreVolumeOption'=>'VimServiceStub\ArrayOfVirtualMachineDatastoreVolumeOption'
,'DatastoreOption'=>'VimServiceStub\DatastoreOption'
,'VirtualMachineDefaultPowerOpInfo'=>'VimServiceStub\VirtualMachineDefaultPowerOpInfo'
,'VirtualMachineDeviceRuntimeInfoDeviceRuntimeState'=>'VimServiceStub\VirtualMachineDeviceRuntimeInfoDeviceRuntimeState'
,'VirtualMachineDeviceRuntimeInfoVirtualEthernetCardRuntimeState'=>'VimServiceStub\VirtualMachineDeviceRuntimeInfoVirtualEthernetCardRuntimeState'
,'VirtualMachineDeviceRuntimeInfo'=>'VimServiceStub\VirtualMachineDeviceRuntimeInfo'
,'ArrayOfVirtualMachineDeviceRuntimeInfo'=>'VimServiceStub\ArrayOfVirtualMachineDeviceRuntimeInfo'
,'VirtualMachineDiskDeviceInfo'=>'VimServiceStub\VirtualMachineDiskDeviceInfo'
,'FaultToleranceConfigInfo'=>'VimServiceStub\FaultToleranceConfigInfo'
,'FaultTolerancePrimaryConfigInfo'=>'VimServiceStub\FaultTolerancePrimaryConfigInfo'
,'FaultToleranceSecondaryConfigInfo'=>'VimServiceStub\FaultToleranceSecondaryConfigInfo'
,'FaultToleranceSecondaryOpResult'=>'VimServiceStub\FaultToleranceSecondaryOpResult'
,'VirtualMachineFileInfo'=>'VimServiceStub\VirtualMachineFileInfo'
,'VirtualMachineFileLayoutDiskLayout'=>'VimServiceStub\VirtualMachineFileLayoutDiskLayout'
,'ArrayOfVirtualMachineFileLayoutDiskLayout'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutDiskLayout'
,'VirtualMachineFileLayoutSnapshotLayout'=>'VimServiceStub\VirtualMachineFileLayoutSnapshotLayout'
,'ArrayOfVirtualMachineFileLayoutSnapshotLayout'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutSnapshotLayout'
,'VirtualMachineFileLayout'=>'VimServiceStub\VirtualMachineFileLayout'
,'VirtualMachineFileLayoutExFileInfo'=>'VimServiceStub\VirtualMachineFileLayoutExFileInfo'
,'ArrayOfVirtualMachineFileLayoutExFileInfo'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutExFileInfo'
,'VirtualMachineFileLayoutExDiskUnit'=>'VimServiceStub\VirtualMachineFileLayoutExDiskUnit'
,'ArrayOfVirtualMachineFileLayoutExDiskUnit'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutExDiskUnit'
,'VirtualMachineFileLayoutExDiskLayout'=>'VimServiceStub\VirtualMachineFileLayoutExDiskLayout'
,'ArrayOfVirtualMachineFileLayoutExDiskLayout'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutExDiskLayout'
,'VirtualMachineFileLayoutExSnapshotLayout'=>'VimServiceStub\VirtualMachineFileLayoutExSnapshotLayout'
,'ArrayOfVirtualMachineFileLayoutExSnapshotLayout'=>'VimServiceStub\ArrayOfVirtualMachineFileLayoutExSnapshotLayout'
,'VirtualMachineFileLayoutEx'=>'VimServiceStub\VirtualMachineFileLayoutEx'
,'VirtualMachineFlagInfo'=>'VimServiceStub\VirtualMachineFlagInfo'
,'VirtualMachineFloppyInfo'=>'VimServiceStub\VirtualMachineFloppyInfo'
,'ArrayOfVirtualMachineFloppyInfo'=>'VimServiceStub\ArrayOfVirtualMachineFloppyInfo'
,'GuestDiskInfo'=>'VimServiceStub\GuestDiskInfo'
,'ArrayOfGuestDiskInfo'=>'VimServiceStub\ArrayOfGuestDiskInfo'
,'GuestNicInfo'=>'VimServiceStub\GuestNicInfo'
,'ArrayOfGuestNicInfo'=>'VimServiceStub\ArrayOfGuestNicInfo'
,'GuestStackInfo'=>'VimServiceStub\GuestStackInfo'
,'ArrayOfGuestStackInfo'=>'VimServiceStub\ArrayOfGuestStackInfo'
,'GuestScreenInfo'=>'VimServiceStub\GuestScreenInfo'
,'GuestInfo'=>'VimServiceStub\GuestInfo'
,'GuestOsDescriptor'=>'VimServiceStub\GuestOsDescriptor'
,'ArrayOfGuestOsDescriptor'=>'VimServiceStub\ArrayOfGuestOsDescriptor'
,'VirtualMachineIdeDiskDevicePartitionInfo'=>'VimServiceStub\VirtualMachineIdeDiskDevicePartitionInfo'
,'ArrayOfVirtualMachineIdeDiskDevicePartitionInfo'=>'VimServiceStub\ArrayOfVirtualMachineIdeDiskDevicePartitionInfo'
,'VirtualMachineIdeDiskDeviceInfo'=>'VimServiceStub\VirtualMachineIdeDiskDeviceInfo'
,'ArrayOfVirtualMachineIdeDiskDeviceInfo'=>'VimServiceStub\ArrayOfVirtualMachineIdeDiskDeviceInfo'
,'VirtualMachineLegacyNetworkSwitchInfo'=>'VimServiceStub\VirtualMachineLegacyNetworkSwitchInfo'
,'ArrayOfVirtualMachineLegacyNetworkSwitchInfo'=>'VimServiceStub\ArrayOfVirtualMachineLegacyNetworkSwitchInfo'
,'VirtualMachineMessage'=>'VimServiceStub\VirtualMachineMessage'
,'ArrayOfVirtualMachineMessage'=>'VimServiceStub\ArrayOfVirtualMachineMessage'
,'VirtualMachineNetworkInfo'=>'VimServiceStub\VirtualMachineNetworkInfo'
,'ArrayOfVirtualMachineNetworkInfo'=>'VimServiceStub\ArrayOfVirtualMachineNetworkInfo'
,'VirtualMachineNetworkShaperInfo'=>'VimServiceStub\VirtualMachineNetworkShaperInfo'
,'VirtualMachineParallelInfo'=>'VimServiceStub\VirtualMachineParallelInfo'
,'ArrayOfVirtualMachineParallelInfo'=>'VimServiceStub\ArrayOfVirtualMachineParallelInfo'
,'VirtualMachinePciPassthroughInfo'=>'VimServiceStub\VirtualMachinePciPassthroughInfo'
,'ArrayOfVirtualMachinePciPassthroughInfo'=>'VimServiceStub\ArrayOfVirtualMachinePciPassthroughInfo'
,'VirtualMachineQuestionInfo'=>'VimServiceStub\VirtualMachineQuestionInfo'
,'VirtualMachineRelocateSpecDiskLocator'=>'VimServiceStub\VirtualMachineRelocateSpecDiskLocator'
,'ArrayOfVirtualMachineRelocateSpecDiskLocator'=>'VimServiceStub\ArrayOfVirtualMachineRelocateSpecDiskLocator'
,'VirtualMachineRelocateSpec'=>'VimServiceStub\VirtualMachineRelocateSpec'
,'ReplicationInfoDiskSettings'=>'VimServiceStub\ReplicationInfoDiskSettings'
,'ArrayOfReplicationInfoDiskSettings'=>'VimServiceStub\ArrayOfReplicationInfoDiskSettings'
,'VirtualMachineRuntimeInfoDasProtectionState'=>'VimServiceStub\VirtualMachineRuntimeInfoDasProtectionState'
,'VirtualMachineRuntimeInfo'=>'VimServiceStub\VirtualMachineRuntimeInfo'
,'VirtualMachineScsiDiskDeviceInfo'=>'VimServiceStub\VirtualMachineScsiDiskDeviceInfo'
,'ArrayOfVirtualMachineScsiDiskDeviceInfo'=>'VimServiceStub\ArrayOfVirtualMachineScsiDiskDeviceInfo'
,'VirtualMachineScsiPassthroughInfo'=>'VimServiceStub\VirtualMachineScsiPassthroughInfo'
,'ArrayOfVirtualMachineScsiPassthroughInfo'=>'VimServiceStub\ArrayOfVirtualMachineScsiPassthroughInfo'
,'VirtualMachineSerialInfo'=>'VimServiceStub\VirtualMachineSerialInfo'
,'ArrayOfVirtualMachineSerialInfo'=>'VimServiceStub\ArrayOfVirtualMachineSerialInfo'
,'VirtualMachineSnapshotInfo'=>'VimServiceStub\VirtualMachineSnapshotInfo'
,'VirtualMachineSnapshotTree'=>'VimServiceStub\VirtualMachineSnapshotTree'
,'ArrayOfVirtualMachineSnapshotTree'=>'VimServiceStub\ArrayOfVirtualMachineSnapshotTree'
,'VirtualMachineSoundInfo'=>'VimServiceStub\VirtualMachineSoundInfo'
,'ArrayOfVirtualMachineSoundInfo'=>'VimServiceStub\ArrayOfVirtualMachineSoundInfo'
,'VirtualMachineUsageOnDatastore'=>'VimServiceStub\VirtualMachineUsageOnDatastore'
,'ArrayOfVirtualMachineUsageOnDatastore'=>'VimServiceStub\ArrayOfVirtualMachineUsageOnDatastore'
,'VirtualMachineStorageInfo'=>'VimServiceStub\VirtualMachineStorageInfo'
,'VirtualMachineConfigSummary'=>'VimServiceStub\VirtualMachineConfigSummary'
,'VirtualMachineQuickStats'=>'VimServiceStub\VirtualMachineQuickStats'
,'VirtualMachineGuestSummary'=>'VimServiceStub\VirtualMachineGuestSummary'
,'VirtualMachineStorageSummary'=>'VimServiceStub\VirtualMachineStorageSummary'
,'VirtualMachineSummary'=>'VimServiceStub\VirtualMachineSummary'
,'ArrayOfVirtualMachineSummary'=>'VimServiceStub\ArrayOfVirtualMachineSummary'
,'VirtualMachineTargetInfo'=>'VimServiceStub\VirtualMachineTargetInfo'
,'ToolsConfigInfoToolsLastInstallInfo'=>'VimServiceStub\ToolsConfigInfoToolsLastInstallInfo'
,'ToolsConfigInfo'=>'VimServiceStub\ToolsConfigInfo'
,'VirtualMachineUsbInfo'=>'VimServiceStub\VirtualMachineUsbInfo'
,'ArrayOfVirtualMachineUsbInfo'=>'VimServiceStub\ArrayOfVirtualMachineUsbInfo'
,'VirtualHardware'=>'VimServiceStub\VirtualHardware'
,'VirtualHardwareOption'=>'VimServiceStub\VirtualHardwareOption'
,'VirtualMachineImportSpec'=>'VimServiceStub\VirtualMachineImportSpec'
,'CheckResult'=>'VimServiceStub\CheckResult'
,'ArrayOfCheckResult'=>'VimServiceStub\ArrayOfCheckResult'
,'CustomizationIPSettingsIpV6AddressSpec'=>'VimServiceStub\CustomizationIPSettingsIpV6AddressSpec'
,'CustomizationIPSettings'=>'VimServiceStub\CustomizationIPSettings'
,'CustomizationSpec'=>'VimServiceStub\CustomizationSpec'
,'CustomizationName'=>'VimServiceStub\CustomizationName'
,'CustomizationFixedName'=>'VimServiceStub\CustomizationFixedName'
,'CustomizationPrefixName'=>'VimServiceStub\CustomizationPrefixName'
,'CustomizationVirtualMachineName'=>'VimServiceStub\CustomizationVirtualMachineName'
,'CustomizationUnknownName'=>'VimServiceStub\CustomizationUnknownName'
,'CustomizationCustomName'=>'VimServiceStub\CustomizationCustomName'
,'CustomizationPassword'=>'VimServiceStub\CustomizationPassword'
,'CustomizationOptions'=>'VimServiceStub\CustomizationOptions'
,'CustomizationWinOptions'=>'VimServiceStub\CustomizationWinOptions'
,'CustomizationLinuxOptions'=>'VimServiceStub\CustomizationLinuxOptions'
,'CustomizationGuiUnattended'=>'VimServiceStub\CustomizationGuiUnattended'
,'CustomizationUserData'=>'VimServiceStub\CustomizationUserData'
,'CustomizationGuiRunOnce'=>'VimServiceStub\CustomizationGuiRunOnce'
,'CustomizationIdentification'=>'VimServiceStub\CustomizationIdentification'
,'CustomizationLicenseFilePrintData'=>'VimServiceStub\CustomizationLicenseFilePrintData'
,'CustomizationIdentitySettings'=>'VimServiceStub\CustomizationIdentitySettings'
,'CustomizationSysprepText'=>'VimServiceStub\CustomizationSysprepText'
,'CustomizationSysprep'=>'VimServiceStub\CustomizationSysprep'
,'CustomizationLinuxPrep'=>'VimServiceStub\CustomizationLinuxPrep'
,'CustomizationGlobalIPSettings'=>'VimServiceStub\CustomizationGlobalIPSettings'
,'CustomizationIpGenerator'=>'VimServiceStub\CustomizationIpGenerator'
,'CustomizationDhcpIpGenerator'=>'VimServiceStub\CustomizationDhcpIpGenerator'
,'CustomizationFixedIp'=>'VimServiceStub\CustomizationFixedIp'
,'CustomizationUnknownIpGenerator'=>'VimServiceStub\CustomizationUnknownIpGenerator'
,'CustomizationCustomIpGenerator'=>'VimServiceStub\CustomizationCustomIpGenerator'
,'CustomizationIpV6Generator'=>'VimServiceStub\CustomizationIpV6Generator'
,'ArrayOfCustomizationIpV6Generator'=>'VimServiceStub\ArrayOfCustomizationIpV6Generator'
,'CustomizationDhcpIpV6Generator'=>'VimServiceStub\CustomizationDhcpIpV6Generator'
,'CustomizationStatelessIpV6Generator'=>'VimServiceStub\CustomizationStatelessIpV6Generator'
,'CustomizationFixedIpV6'=>'VimServiceStub\CustomizationFixedIpV6'
,'CustomizationAutoIpV6Generator'=>'VimServiceStub\CustomizationAutoIpV6Generator'
,'CustomizationUnknownIpV6Generator'=>'VimServiceStub\CustomizationUnknownIpV6Generator'
,'CustomizationCustomIpV6Generator'=>'VimServiceStub\CustomizationCustomIpV6Generator'
,'CustomizationAdapterMapping'=>'VimServiceStub\CustomizationAdapterMapping'
,'ArrayOfCustomizationAdapterMapping'=>'VimServiceStub\ArrayOfCustomizationAdapterMapping'
,'HostDiskMappingPartitionInfo'=>'VimServiceStub\HostDiskMappingPartitionInfo'
,'HostDiskMappingInfo'=>'VimServiceStub\HostDiskMappingInfo'
,'HostDiskMappingPartitionOption'=>'VimServiceStub\HostDiskMappingPartitionOption'
,'ArrayOfHostDiskMappingPartitionOption'=>'VimServiceStub\ArrayOfHostDiskMappingPartitionOption'
,'HostDiskMappingOption'=>'VimServiceStub\HostDiskMappingOption'
,'ParaVirtualSCSIController'=>'VimServiceStub\ParaVirtualSCSIController'
,'ParaVirtualSCSIControllerOption'=>'VimServiceStub\ParaVirtualSCSIControllerOption'
,'VirtualBusLogicController'=>'VimServiceStub\VirtualBusLogicController'
,'VirtualBusLogicControllerOption'=>'VimServiceStub\VirtualBusLogicControllerOption'
,'VirtualCdromIsoBackingInfo'=>'VimServiceStub\VirtualCdromIsoBackingInfo'
,'VirtualCdromPassthroughBackingInfo'=>'VimServiceStub\VirtualCdromPassthroughBackingInfo'
,'VirtualCdromRemotePassthroughBackingInfo'=>'VimServiceStub\VirtualCdromRemotePassthroughBackingInfo'
,'VirtualCdromAtapiBackingInfo'=>'VimServiceStub\VirtualCdromAtapiBackingInfo'
,'VirtualCdromRemoteAtapiBackingInfo'=>'VimServiceStub\VirtualCdromRemoteAtapiBackingInfo'
,'VirtualCdrom'=>'VimServiceStub\VirtualCdrom'
,'VirtualCdromIsoBackingOption'=>'VimServiceStub\VirtualCdromIsoBackingOption'
,'VirtualCdromPassthroughBackingOption'=>'VimServiceStub\VirtualCdromPassthroughBackingOption'
,'VirtualCdromRemotePassthroughBackingOption'=>'VimServiceStub\VirtualCdromRemotePassthroughBackingOption'
,'VirtualCdromAtapiBackingOption'=>'VimServiceStub\VirtualCdromAtapiBackingOption'
,'VirtualCdromRemoteAtapiBackingOption'=>'VimServiceStub\VirtualCdromRemoteAtapiBackingOption'
,'VirtualCdromOption'=>'VimServiceStub\VirtualCdromOption'
,'VirtualController'=>'VimServiceStub\VirtualController'
,'VirtualControllerOption'=>'VimServiceStub\VirtualControllerOption'
,'VirtualDeviceBackingInfo'=>'VimServiceStub\VirtualDeviceBackingInfo'
,'VirtualDeviceFileBackingInfo'=>'VimServiceStub\VirtualDeviceFileBackingInfo'
,'VirtualDeviceDeviceBackingInfo'=>'VimServiceStub\VirtualDeviceDeviceBackingInfo'
,'VirtualDeviceRemoteDeviceBackingInfo'=>'VimServiceStub\VirtualDeviceRemoteDeviceBackingInfo'
,'VirtualDevicePipeBackingInfo'=>'VimServiceStub\VirtualDevicePipeBackingInfo'
,'VirtualDeviceURIBackingInfo'=>'VimServiceStub\VirtualDeviceURIBackingInfo'
,'VirtualDeviceConnectInfo'=>'VimServiceStub\VirtualDeviceConnectInfo'
,'VirtualDevice'=>'VimServiceStub\VirtualDevice'
,'ArrayOfVirtualDevice'=>'VimServiceStub\ArrayOfVirtualDevice'
,'VirtualDeviceBackingOption'=>'VimServiceStub\VirtualDeviceBackingOption'
,'ArrayOfVirtualDeviceBackingOption'=>'VimServiceStub\ArrayOfVirtualDeviceBackingOption'
,'VirtualDeviceFileBackingOption'=>'VimServiceStub\VirtualDeviceFileBackingOption'
,'VirtualDeviceDeviceBackingOption'=>'VimServiceStub\VirtualDeviceDeviceBackingOption'
,'VirtualDeviceRemoteDeviceBackingOption'=>'VimServiceStub\VirtualDeviceRemoteDeviceBackingOption'
,'VirtualDevicePipeBackingOption'=>'VimServiceStub\VirtualDevicePipeBackingOption'
,'VirtualDeviceURIBackingOption'=>'VimServiceStub\VirtualDeviceURIBackingOption'
,'VirtualDeviceConnectOption'=>'VimServiceStub\VirtualDeviceConnectOption'
,'VirtualDeviceOption'=>'VimServiceStub\VirtualDeviceOption'
,'ArrayOfVirtualDeviceOption'=>'VimServiceStub\ArrayOfVirtualDeviceOption'
,'VirtualDeviceConfigSpec'=>'VimServiceStub\VirtualDeviceConfigSpec'
,'ArrayOfVirtualDeviceConfigSpec'=>'VimServiceStub\ArrayOfVirtualDeviceConfigSpec'
,'VirtualDiskSparseVer1BackingInfo'=>'VimServiceStub\VirtualDiskSparseVer1BackingInfo'
,'VirtualDiskSparseVer2BackingInfo'=>'VimServiceStub\VirtualDiskSparseVer2BackingInfo'
,'VirtualDiskFlatVer1BackingInfo'=>'VimServiceStub\VirtualDiskFlatVer1BackingInfo'
,'VirtualDiskFlatVer2BackingInfo'=>'VimServiceStub\VirtualDiskFlatVer2BackingInfo'
,'VirtualDiskRawDiskVer2BackingInfo'=>'VimServiceStub\VirtualDiskRawDiskVer2BackingInfo'
,'VirtualDiskPartitionedRawDiskVer2BackingInfo'=>'VimServiceStub\VirtualDiskPartitionedRawDiskVer2BackingInfo'
,'VirtualDiskRawDiskMappingVer1BackingInfo'=>'VimServiceStub\VirtualDiskRawDiskMappingVer1BackingInfo'
,'VirtualDisk'=>'VimServiceStub\VirtualDisk'
,'ArrayOfVirtualDisk'=>'VimServiceStub\ArrayOfVirtualDisk'
,'VirtualDiskId'=>'VimServiceStub\VirtualDiskId'
,'VirtualDiskSparseVer1BackingOption'=>'VimServiceStub\VirtualDiskSparseVer1BackingOption'
,'VirtualDiskSparseVer2BackingOption'=>'VimServiceStub\VirtualDiskSparseVer2BackingOption'
,'VirtualDiskFlatVer1BackingOption'=>'VimServiceStub\VirtualDiskFlatVer1BackingOption'
,'VirtualDiskFlatVer2BackingOption'=>'VimServiceStub\VirtualDiskFlatVer2BackingOption'
,'VirtualDiskRawDiskVer2BackingOption'=>'VimServiceStub\VirtualDiskRawDiskVer2BackingOption'
,'VirtualDiskPartitionedRawDiskVer2BackingOption'=>'VimServiceStub\VirtualDiskPartitionedRawDiskVer2BackingOption'
,'VirtualDiskRawDiskMappingVer1BackingOption'=>'VimServiceStub\VirtualDiskRawDiskMappingVer1BackingOption'
,'VirtualDiskOption'=>'VimServiceStub\VirtualDiskOption'
,'VirtualE1000'=>'VimServiceStub\VirtualE1000'
,'VirtualE1000Option'=>'VimServiceStub\VirtualE1000Option'
,'VirtualE1000e'=>'VimServiceStub\VirtualE1000e'
,'VirtualE1000eOption'=>'VimServiceStub\VirtualE1000eOption'
,'VirtualEnsoniq1371'=>'VimServiceStub\VirtualEnsoniq1371'
,'VirtualEnsoniq1371Option'=>'VimServiceStub\VirtualEnsoniq1371Option'
,'VirtualEthernetCardNetworkBackingInfo'=>'VimServiceStub\VirtualEthernetCardNetworkBackingInfo'
,'VirtualEthernetCardLegacyNetworkBackingInfo'=>'VimServiceStub\VirtualEthernetCardLegacyNetworkBackingInfo'
,'VirtualEthernetCardDistributedVirtualPortBackingInfo'=>'VimServiceStub\VirtualEthernetCardDistributedVirtualPortBackingInfo'
,'VirtualEthernetCard'=>'VimServiceStub\VirtualEthernetCard'
,'VirtualEthernetCardNetworkBackingOption'=>'VimServiceStub\VirtualEthernetCardNetworkBackingOption'
,'VirtualEthernetCardLegacyNetworkBackingOption'=>'VimServiceStub\VirtualEthernetCardLegacyNetworkBackingOption'
,'VirtualEthernetCardDVPortBackingOption'=>'VimServiceStub\VirtualEthernetCardDVPortBackingOption'
,'VirtualEthernetCardOption'=>'VimServiceStub\VirtualEthernetCardOption'
,'VirtualFloppyImageBackingInfo'=>'VimServiceStub\VirtualFloppyImageBackingInfo'
,'VirtualFloppyDeviceBackingInfo'=>'VimServiceStub\VirtualFloppyDeviceBackingInfo'
,'VirtualFloppyRemoteDeviceBackingInfo'=>'VimServiceStub\VirtualFloppyRemoteDeviceBackingInfo'
,'VirtualFloppy'=>'VimServiceStub\VirtualFloppy'
,'VirtualFloppyImageBackingOption'=>'VimServiceStub\VirtualFloppyImageBackingOption'
,'VirtualFloppyDeviceBackingOption'=>'VimServiceStub\VirtualFloppyDeviceBackingOption'
,'VirtualFloppyRemoteDeviceBackingOption'=>'VimServiceStub\VirtualFloppyRemoteDeviceBackingOption'
,'VirtualFloppyOption'=>'VimServiceStub\VirtualFloppyOption'
,'VirtualHdAudioCard'=>'VimServiceStub\VirtualHdAudioCard'
,'VirtualHdAudioCardOption'=>'VimServiceStub\VirtualHdAudioCardOption'
,'VirtualIDEController'=>'VimServiceStub\VirtualIDEController'
,'VirtualIDEControllerOption'=>'VimServiceStub\VirtualIDEControllerOption'
,'VirtualKeyboard'=>'VimServiceStub\VirtualKeyboard'
,'VirtualKeyboardOption'=>'VimServiceStub\VirtualKeyboardOption'
,'VirtualLsiLogicController'=>'VimServiceStub\VirtualLsiLogicController'
,'VirtualLsiLogicControllerOption'=>'VimServiceStub\VirtualLsiLogicControllerOption'
,'VirtualLsiLogicSASController'=>'VimServiceStub\VirtualLsiLogicSASController'
,'VirtualLsiLogicSASControllerOption'=>'VimServiceStub\VirtualLsiLogicSASControllerOption'
,'VirtualPCIController'=>'VimServiceStub\VirtualPCIController'
,'VirtualPCIControllerOption'=>'VimServiceStub\VirtualPCIControllerOption'
,'VirtualPCIPassthroughDeviceBackingInfo'=>'VimServiceStub\VirtualPCIPassthroughDeviceBackingInfo'
,'VirtualPCIPassthrough'=>'VimServiceStub\VirtualPCIPassthrough'
,'VirtualPCIPassthroughDeviceBackingOption'=>'VimServiceStub\VirtualPCIPassthroughDeviceBackingOption'
,'VirtualPCIPassthroughOption'=>'VimServiceStub\VirtualPCIPassthroughOption'
,'VirtualPCNet32'=>'VimServiceStub\VirtualPCNet32'
,'VirtualPCNet32Option'=>'VimServiceStub\VirtualPCNet32Option'
,'VirtualPS2Controller'=>'VimServiceStub\VirtualPS2Controller'
,'VirtualPS2ControllerOption'=>'VimServiceStub\VirtualPS2ControllerOption'
,'VirtualParallelPortFileBackingInfo'=>'VimServiceStub\VirtualParallelPortFileBackingInfo'
,'VirtualParallelPortDeviceBackingInfo'=>'VimServiceStub\VirtualParallelPortDeviceBackingInfo'
,'VirtualParallelPort'=>'VimServiceStub\VirtualParallelPort'
,'VirtualParallelPortFileBackingOption'=>'VimServiceStub\VirtualParallelPortFileBackingOption'
,'VirtualParallelPortDeviceBackingOption'=>'VimServiceStub\VirtualParallelPortDeviceBackingOption'
,'VirtualParallelPortOption'=>'VimServiceStub\VirtualParallelPortOption'
,'VirtualPointingDeviceDeviceBackingInfo'=>'VimServiceStub\VirtualPointingDeviceDeviceBackingInfo'
,'VirtualPointingDevice'=>'VimServiceStub\VirtualPointingDevice'
,'VirtualPointingDeviceBackingOption'=>'VimServiceStub\VirtualPointingDeviceBackingOption'
,'VirtualPointingDeviceOption'=>'VimServiceStub\VirtualPointingDeviceOption'
,'ArrayOfVirtualSCSISharing'=>'VimServiceStub\ArrayOfVirtualSCSISharing'
,'VirtualSCSIController'=>'VimServiceStub\VirtualSCSIController'
,'VirtualSCSIControllerOption'=>'VimServiceStub\VirtualSCSIControllerOption'
,'VirtualSCSIPassthroughDeviceBackingInfo'=>'VimServiceStub\VirtualSCSIPassthroughDeviceBackingInfo'
,'VirtualSCSIPassthrough'=>'VimServiceStub\VirtualSCSIPassthrough'
,'VirtualSCSIPassthroughDeviceBackingOption'=>'VimServiceStub\VirtualSCSIPassthroughDeviceBackingOption'
,'VirtualSCSIPassthroughOption'=>'VimServiceStub\VirtualSCSIPassthroughOption'
,'VirtualSIOController'=>'VimServiceStub\VirtualSIOController'
,'VirtualSIOControllerOption'=>'VimServiceStub\VirtualSIOControllerOption'
,'VirtualSerialPortFileBackingInfo'=>'VimServiceStub\VirtualSerialPortFileBackingInfo'
,'VirtualSerialPortDeviceBackingInfo'=>'VimServiceStub\VirtualSerialPortDeviceBackingInfo'
,'VirtualSerialPortPipeBackingInfo'=>'VimServiceStub\VirtualSerialPortPipeBackingInfo'
,'VirtualSerialPortURIBackingInfo'=>'VimServiceStub\VirtualSerialPortURIBackingInfo'
,'VirtualSerialPort'=>'VimServiceStub\VirtualSerialPort'
,'VirtualSerialPortFileBackingOption'=>'VimServiceStub\VirtualSerialPortFileBackingOption'
,'VirtualSerialPortDeviceBackingOption'=>'VimServiceStub\VirtualSerialPortDeviceBackingOption'
,'VirtualSerialPortPipeBackingOption'=>'VimServiceStub\VirtualSerialPortPipeBackingOption'
,'VirtualSerialPortURIBackingOption'=>'VimServiceStub\VirtualSerialPortURIBackingOption'
,'VirtualSerialPortOption'=>'VimServiceStub\VirtualSerialPortOption'
,'VirtualSoundBlaster16'=>'VimServiceStub\VirtualSoundBlaster16'
,'VirtualSoundBlaster16Option'=>'VimServiceStub\VirtualSoundBlaster16Option'
,'VirtualSoundCardDeviceBackingInfo'=>'VimServiceStub\VirtualSoundCardDeviceBackingInfo'
,'VirtualSoundCard'=>'VimServiceStub\VirtualSoundCard'
,'VirtualSoundCardDeviceBackingOption'=>'VimServiceStub\VirtualSoundCardDeviceBackingOption'
,'VirtualSoundCardOption'=>'VimServiceStub\VirtualSoundCardOption'
,'VirtualUSBUSBBackingInfo'=>'VimServiceStub\VirtualUSBUSBBackingInfo'
,'VirtualUSBRemoteHostBackingInfo'=>'VimServiceStub\VirtualUSBRemoteHostBackingInfo'
,'VirtualUSBRemoteClientBackingInfo'=>'VimServiceStub\VirtualUSBRemoteClientBackingInfo'
,'VirtualUSB'=>'VimServiceStub\VirtualUSB'
,'VirtualUSBController'=>'VimServiceStub\VirtualUSBController'
,'VirtualUSBControllerOption'=>'VimServiceStub\VirtualUSBControllerOption'
,'VirtualUSBUSBBackingOption'=>'VimServiceStub\VirtualUSBUSBBackingOption'
,'VirtualUSBRemoteHostBackingOption'=>'VimServiceStub\VirtualUSBRemoteHostBackingOption'
,'VirtualUSBRemoteClientBackingOption'=>'VimServiceStub\VirtualUSBRemoteClientBackingOption'
,'VirtualUSBOption'=>'VimServiceStub\VirtualUSBOption'
,'VirtualUSBXHCIController'=>'VimServiceStub\VirtualUSBXHCIController'
,'VirtualUSBXHCIControllerOption'=>'VimServiceStub\VirtualUSBXHCIControllerOption'
,'VirtualMachineVMCIDevice'=>'VimServiceStub\VirtualMachineVMCIDevice'
,'VirtualMachineVMCIDeviceOption'=>'VimServiceStub\VirtualMachineVMCIDeviceOption'
,'VirtualMachineVMIROM'=>'VimServiceStub\VirtualMachineVMIROM'
,'VirtualVMIROMOption'=>'VimServiceStub\VirtualVMIROMOption'
,'VirtualMachineVideoCard'=>'VimServiceStub\VirtualMachineVideoCard'
,'VirtualVideoCardOption'=>'VimServiceStub\VirtualVideoCardOption'
,'VirtualVmxnet'=>'VimServiceStub\VirtualVmxnet'
,'VirtualVmxnet2'=>'VimServiceStub\VirtualVmxnet2'
,'VirtualVmxnet2Option'=>'VimServiceStub\VirtualVmxnet2Option'
,'VirtualVmxnet3'=>'VimServiceStub\VirtualVmxnet3'
,'VirtualVmxnet3Option'=>'VimServiceStub\VirtualVmxnet3Option'
,'VirtualVmxnetOption'=>'VimServiceStub\VirtualVmxnetOption'
,'GuestFileAttributes'=>'VimServiceStub\GuestFileAttributes'
,'GuestPosixFileAttributes'=>'VimServiceStub\GuestPosixFileAttributes'
,'GuestWindowsFileAttributes'=>'VimServiceStub\GuestWindowsFileAttributes'
,'GuestFileInfo'=>'VimServiceStub\GuestFileInfo'
,'ArrayOfGuestFileInfo'=>'VimServiceStub\ArrayOfGuestFileInfo'
,'GuestListFileInfo'=>'VimServiceStub\GuestListFileInfo'
,'FileTransferInformation'=>'VimServiceStub\FileTransferInformation'
,'GuestAuthentication'=>'VimServiceStub\GuestAuthentication'
,'NamePasswordAuthentication'=>'VimServiceStub\NamePasswordAuthentication'
,'GuestProgramSpec'=>'VimServiceStub\GuestProgramSpec'
,'GuestWindowsProgramSpec'=>'VimServiceStub\GuestWindowsProgramSpec'
,'GuestProcessInfo'=>'VimServiceStub\GuestProcessInfo'
,'ArrayOfGuestProcessInfo'=>'VimServiceStub\ArrayOfGuestProcessInfo'
,'SSPIAuthentication'=>'VimServiceStub\SSPIAuthentication'
,'TicketedSessionAuthentication'=>'VimServiceStub\TicketedSessionAuthentication'
,'AddAuthorizationRoleRequestType'=>'VimServiceStub\AddAuthorizationRoleRequestType'
,'RemoveAuthorizationRoleRequestType'=>'VimServiceStub\RemoveAuthorizationRoleRequestType'
,'UpdateAuthorizationRoleRequestType'=>'VimServiceStub\UpdateAuthorizationRoleRequestType'
,'MergePermissionsRequestType'=>'VimServiceStub\MergePermissionsRequestType'
,'RetrieveRolePermissionsRequestType'=>'VimServiceStub\RetrieveRolePermissionsRequestType'
,'RetrieveEntityPermissionsRequestType'=>'VimServiceStub\RetrieveEntityPermissionsRequestType'
,'RetrieveAllPermissionsRequestType'=>'VimServiceStub\RetrieveAllPermissionsRequestType'
,'SetEntityPermissionsRequestType'=>'VimServiceStub\SetEntityPermissionsRequestType'
,'ResetEntityPermissionsRequestType'=>'VimServiceStub\ResetEntityPermissionsRequestType'
,'RemoveEntityPermissionRequestType'=>'VimServiceStub\RemoveEntityPermissionRequestType'
,'HasPrivilegeOnEntityRequestType'=>'VimServiceStub\HasPrivilegeOnEntityRequestType'
,'ReconfigureClusterRequestType'=>'VimServiceStub\ReconfigureClusterRequestType'
,'ApplyRecommendationRequestType'=>'VimServiceStub\ApplyRecommendationRequestType'
,'CancelRecommendationRequestType'=>'VimServiceStub\CancelRecommendationRequestType'
,'RecommendHostsForVmRequestType'=>'VimServiceStub\RecommendHostsForVmRequestType'
,'AddHostRequestType'=>'VimServiceStub\AddHostRequestType'
,'MoveIntoRequestType'=>'VimServiceStub\MoveIntoRequestType'
,'MoveHostIntoRequestType'=>'VimServiceStub\MoveHostIntoRequestType'
,'RefreshRecommendationRequestType'=>'VimServiceStub\RefreshRecommendationRequestType'
,'RetrieveDasAdvancedRuntimeInfoRequestType'=>'VimServiceStub\RetrieveDasAdvancedRuntimeInfoRequestType'
,'ClusterEnterMaintenanceModeRequestType'=>'VimServiceStub\ClusterEnterMaintenanceModeRequestType'
,'ReconfigureComputeResourceRequestType'=>'VimServiceStub\ReconfigureComputeResourceRequestType'
,'AddCustomFieldDefRequestType'=>'VimServiceStub\AddCustomFieldDefRequestType'
,'RemoveCustomFieldDefRequestType'=>'VimServiceStub\RemoveCustomFieldDefRequestType'
,'RenameCustomFieldDefRequestType'=>'VimServiceStub\RenameCustomFieldDefRequestType'
,'SetFieldRequestType'=>'VimServiceStub\SetFieldRequestType'
,'DoesCustomizationSpecExistRequestType'=>'VimServiceStub\DoesCustomizationSpecExistRequestType'
,'GetCustomizationSpecRequestType'=>'VimServiceStub\GetCustomizationSpecRequestType'
,'CreateCustomizationSpecRequestType'=>'VimServiceStub\CreateCustomizationSpecRequestType'
,'OverwriteCustomizationSpecRequestType'=>'VimServiceStub\OverwriteCustomizationSpecRequestType'
,'DeleteCustomizationSpecRequestType'=>'VimServiceStub\DeleteCustomizationSpecRequestType'
,'DuplicateCustomizationSpecRequestType'=>'VimServiceStub\DuplicateCustomizationSpecRequestType'
,'RenameCustomizationSpecRequestType'=>'VimServiceStub\RenameCustomizationSpecRequestType'
,'CustomizationSpecItemToXmlRequestType'=>'VimServiceStub\CustomizationSpecItemToXmlRequestType'
,'XmlToCustomizationSpecItemRequestType'=>'VimServiceStub\XmlToCustomizationSpecItemRequestType'
,'CheckCustomizationResourcesRequestType'=>'VimServiceStub\CheckCustomizationResourcesRequestType'
,'QueryConnectionInfoRequestType'=>'VimServiceStub\QueryConnectionInfoRequestType'
,'PowerOnMultiVMRequestType'=>'VimServiceStub\PowerOnMultiVMRequestType'
,'RefreshDatastoreRequestType'=>'VimServiceStub\RefreshDatastoreRequestType'
,'RefreshDatastoreStorageInfoRequestType'=>'VimServiceStub\RefreshDatastoreStorageInfoRequestType'
,'UpdateVirtualMachineFilesRequestType'=>'VimServiceStub\UpdateVirtualMachineFilesRequestType'
,'RenameDatastoreRequestType'=>'VimServiceStub\RenameDatastoreRequestType'
,'DestroyDatastoreRequestType'=>'VimServiceStub\DestroyDatastoreRequestType'
,'DatastoreEnterMaintenanceModeRequestType'=>'VimServiceStub\DatastoreEnterMaintenanceModeRequestType'
,'DatastoreExitMaintenanceModeRequestType'=>'VimServiceStub\DatastoreExitMaintenanceModeRequestType'
,'QueryDescriptionsRequestType'=>'VimServiceStub\QueryDescriptionsRequestType'
,'BrowseDiagnosticLogRequestType'=>'VimServiceStub\BrowseDiagnosticLogRequestType'
,'GenerateLogBundlesRequestType'=>'VimServiceStub\GenerateLogBundlesRequestType'
,'FetchDVPortKeysRequestType'=>'VimServiceStub\FetchDVPortKeysRequestType'
,'FetchDVPortsRequestType'=>'VimServiceStub\FetchDVPortsRequestType'
,'QueryUsedVlanIdInDvsRequestType'=>'VimServiceStub\QueryUsedVlanIdInDvsRequestType'
,'ReconfigureDvsRequestType'=>'VimServiceStub\ReconfigureDvsRequestType'
,'PerformDvsProductSpecOperationRequestType'=>'VimServiceStub\PerformDvsProductSpecOperationRequestType'
,'MergeDvsRequestType'=>'VimServiceStub\MergeDvsRequestType'
,'AddDVPortgroupRequestType'=>'VimServiceStub\AddDVPortgroupRequestType'
,'MoveDVPortRequestType'=>'VimServiceStub\MoveDVPortRequestType'
,'UpdateDvsCapabilityRequestType'=>'VimServiceStub\UpdateDvsCapabilityRequestType'
,'ReconfigureDVPortRequestType'=>'VimServiceStub\ReconfigureDVPortRequestType'
,'RefreshDVPortStateRequestType'=>'VimServiceStub\RefreshDVPortStateRequestType'
,'RectifyDvsHostRequestType'=>'VimServiceStub\RectifyDvsHostRequestType'
,'UpdateNetworkResourcePoolRequestType'=>'VimServiceStub\UpdateNetworkResourcePoolRequestType'
,'AddNetworkResourcePoolRequestType'=>'VimServiceStub\AddNetworkResourcePoolRequestType'
,'RemoveNetworkResourcePoolRequestType'=>'VimServiceStub\RemoveNetworkResourcePoolRequestType'
,'EnableNetworkResourceManagementRequestType'=>'VimServiceStub\EnableNetworkResourceManagementRequestType'
,'QueryConfigOptionDescriptorRequestType'=>'VimServiceStub\QueryConfigOptionDescriptorRequestType'
,'QueryConfigOptionRequestType'=>'VimServiceStub\QueryConfigOptionRequestType'
,'QueryConfigTargetRequestType'=>'VimServiceStub\QueryConfigTargetRequestType'
,'QueryTargetCapabilitiesRequestType'=>'VimServiceStub\QueryTargetCapabilitiesRequestType'
,'setCustomValueRequestType'=>'VimServiceStub\setCustomValueRequestType'
,'UnregisterExtensionRequestType'=>'VimServiceStub\UnregisterExtensionRequestType'
,'FindExtensionRequestType'=>'VimServiceStub\FindExtensionRequestType'
,'RegisterExtensionRequestType'=>'VimServiceStub\RegisterExtensionRequestType'
,'UpdateExtensionRequestType'=>'VimServiceStub\UpdateExtensionRequestType'
,'GetPublicKeyRequestType'=>'VimServiceStub\GetPublicKeyRequestType'
,'SetPublicKeyRequestType'=>'VimServiceStub\SetPublicKeyRequestType'
,'SetExtensionCertificateRequestType'=>'VimServiceStub\SetExtensionCertificateRequestType'
,'QueryManagedByRequestType'=>'VimServiceStub\QueryManagedByRequestType'
,'MoveDatastoreFileRequestType'=>'VimServiceStub\MoveDatastoreFileRequestType'
,'CopyDatastoreFileRequestType'=>'VimServiceStub\CopyDatastoreFileRequestType'
,'DeleteDatastoreFileRequestType'=>'VimServiceStub\DeleteDatastoreFileRequestType'
,'MakeDirectoryRequestType'=>'VimServiceStub\MakeDirectoryRequestType'
,'ChangeOwnerRequestType'=>'VimServiceStub\ChangeOwnerRequestType'
,'CreateFolderRequestType'=>'VimServiceStub\CreateFolderRequestType'
,'MoveIntoFolderRequestType'=>'VimServiceStub\MoveIntoFolderRequestType'
,'CreateVMRequestType'=>'VimServiceStub\CreateVMRequestType'
,'RegisterVMRequestType'=>'VimServiceStub\RegisterVMRequestType'
,'CreateClusterRequestType'=>'VimServiceStub\CreateClusterRequestType'
,'CreateClusterExRequestType'=>'VimServiceStub\CreateClusterExRequestType'
,'AddStandaloneHostRequestType'=>'VimServiceStub\AddStandaloneHostRequestType'
,'CreateDatacenterRequestType'=>'VimServiceStub\CreateDatacenterRequestType'
,'UnregisterAndDestroyRequestType'=>'VimServiceStub\UnregisterAndDestroyRequestType'
,'CreateDVSRequestType'=>'VimServiceStub\CreateDVSRequestType'
,'CreateStoragePodRequestType'=>'VimServiceStub\CreateStoragePodRequestType'
,'SetCollectorPageSizeRequestType'=>'VimServiceStub\SetCollectorPageSizeRequestType'
,'RewindCollectorRequestType'=>'VimServiceStub\RewindCollectorRequestType'
,'ResetCollectorRequestType'=>'VimServiceStub\ResetCollectorRequestType'
,'DestroyCollectorRequestType'=>'VimServiceStub\DestroyCollectorRequestType'
,'QueryHostConnectionInfoRequestType'=>'VimServiceStub\QueryHostConnectionInfoRequestType'
,'UpdateSystemResourcesRequestType'=>'VimServiceStub\UpdateSystemResourcesRequestType'
,'ReconnectHostRequestType'=>'VimServiceStub\ReconnectHostRequestType'
,'DisconnectHostRequestType'=>'VimServiceStub\DisconnectHostRequestType'
,'EnterMaintenanceModeRequestType'=>'VimServiceStub\EnterMaintenanceModeRequestType'
,'ExitMaintenanceModeRequestType'=>'VimServiceStub\ExitMaintenanceModeRequestType'
,'RebootHostRequestType'=>'VimServiceStub\RebootHostRequestType'
,'ShutdownHostRequestType'=>'VimServiceStub\ShutdownHostRequestType'
,'PowerDownHostToStandByRequestType'=>'VimServiceStub\PowerDownHostToStandByRequestType'
,'PowerUpHostFromStandByRequestType'=>'VimServiceStub\PowerUpHostFromStandByRequestType'
,'QueryMemoryOverheadRequestType'=>'VimServiceStub\QueryMemoryOverheadRequestType'
,'QueryMemoryOverheadExRequestType'=>'VimServiceStub\QueryMemoryOverheadExRequestType'
,'ReconfigureHostForDASRequestType'=>'VimServiceStub\ReconfigureHostForDASRequestType'
,'UpdateFlagsRequestType'=>'VimServiceStub\UpdateFlagsRequestType'
,'EnterLockdownModeRequestType'=>'VimServiceStub\EnterLockdownModeRequestType'
,'ExitLockdownModeRequestType'=>'VimServiceStub\ExitLockdownModeRequestType'
,'AcquireCimServicesTicketRequestType'=>'VimServiceStub\AcquireCimServicesTicketRequestType'
,'UpdateIpmiRequestType'=>'VimServiceStub\UpdateIpmiRequestType'
,'RetrieveHardwareUptimeRequestType'=>'VimServiceStub\RetrieveHardwareUptimeRequestType'
,'HttpNfcLeaseGetManifestRequestType'=>'VimServiceStub\HttpNfcLeaseGetManifestRequestType'
,'HttpNfcLeaseCompleteRequestType'=>'VimServiceStub\HttpNfcLeaseCompleteRequestType'
,'HttpNfcLeaseAbortRequestType'=>'VimServiceStub\HttpNfcLeaseAbortRequestType'
,'HttpNfcLeaseProgressRequestType'=>'VimServiceStub\HttpNfcLeaseProgressRequestType'
,'QueryIpPoolsRequestType'=>'VimServiceStub\QueryIpPoolsRequestType'
,'CreateIpPoolRequestType'=>'VimServiceStub\CreateIpPoolRequestType'
,'UpdateIpPoolRequestType'=>'VimServiceStub\UpdateIpPoolRequestType'
,'DestroyIpPoolRequestType'=>'VimServiceStub\DestroyIpPoolRequestType'
,'UpdateAssignedLicenseRequestType'=>'VimServiceStub\UpdateAssignedLicenseRequestType'
,'RemoveAssignedLicenseRequestType'=>'VimServiceStub\RemoveAssignedLicenseRequestType'
,'QueryAssignedLicensesRequestType'=>'VimServiceStub\QueryAssignedLicensesRequestType'
,'QuerySupportedFeaturesRequestType'=>'VimServiceStub\QuerySupportedFeaturesRequestType'
,'QueryLicenseSourceAvailabilityRequestType'=>'VimServiceStub\QueryLicenseSourceAvailabilityRequestType'
,'QueryLicenseUsageRequestType'=>'VimServiceStub\QueryLicenseUsageRequestType'
,'SetLicenseEditionRequestType'=>'VimServiceStub\SetLicenseEditionRequestType'
,'CheckLicenseFeatureRequestType'=>'VimServiceStub\CheckLicenseFeatureRequestType'
,'EnableFeatureRequestType'=>'VimServiceStub\EnableFeatureRequestType'
,'DisableFeatureRequestType'=>'VimServiceStub\DisableFeatureRequestType'
,'ConfigureLicenseSourceRequestType'=>'VimServiceStub\ConfigureLicenseSourceRequestType'
,'UpdateLicenseRequestType'=>'VimServiceStub\UpdateLicenseRequestType'
,'AddLicenseRequestType'=>'VimServiceStub\AddLicenseRequestType'
,'RemoveLicenseRequestType'=>'VimServiceStub\RemoveLicenseRequestType'
,'DecodeLicenseRequestType'=>'VimServiceStub\DecodeLicenseRequestType'
,'UpdateLicenseLabelRequestType'=>'VimServiceStub\UpdateLicenseLabelRequestType'
,'RemoveLicenseLabelRequestType'=>'VimServiceStub\RemoveLicenseLabelRequestType'
,'ReloadRequestType'=>'VimServiceStub\ReloadRequestType'
,'RenameRequestType'=>'VimServiceStub\RenameRequestType'
,'DestroyRequestType'=>'VimServiceStub\DestroyRequestType'
,'DestroyNetworkRequestType'=>'VimServiceStub\DestroyNetworkRequestType'
,'ValidateHostRequestType'=>'VimServiceStub\ValidateHostRequestType'
,'ParseDescriptorRequestType'=>'VimServiceStub\ParseDescriptorRequestType'
,'CreateImportSpecRequestType'=>'VimServiceStub\CreateImportSpecRequestType'
,'CreateDescriptorRequestType'=>'VimServiceStub\CreateDescriptorRequestType'
,'QueryPerfProviderSummaryRequestType'=>'VimServiceStub\QueryPerfProviderSummaryRequestType'
,'QueryAvailablePerfMetricRequestType'=>'VimServiceStub\QueryAvailablePerfMetricRequestType'
,'QueryPerfCounterRequestType'=>'VimServiceStub\QueryPerfCounterRequestType'
,'QueryPerfCounterByLevelRequestType'=>'VimServiceStub\QueryPerfCounterByLevelRequestType'
,'QueryPerfRequestType'=>'VimServiceStub\QueryPerfRequestType'
,'QueryPerfCompositeRequestType'=>'VimServiceStub\QueryPerfCompositeRequestType'
,'CreatePerfIntervalRequestType'=>'VimServiceStub\CreatePerfIntervalRequestType'
,'RemovePerfIntervalRequestType'=>'VimServiceStub\RemovePerfIntervalRequestType'
,'UpdatePerfIntervalRequestType'=>'VimServiceStub\UpdatePerfIntervalRequestType'
,'UpdateCounterLevelMappingRequestType'=>'VimServiceStub\UpdateCounterLevelMappingRequestType'
,'ResetCounterLevelMappingRequestType'=>'VimServiceStub\ResetCounterLevelMappingRequestType'
,'EstimateDatabaseSizeRequestType'=>'VimServiceStub\EstimateDatabaseSizeRequestType'
,'UpdateConfigRequestType'=>'VimServiceStub\UpdateConfigRequestType'
,'MoveIntoResourcePoolRequestType'=>'VimServiceStub\MoveIntoResourcePoolRequestType'
,'UpdateChildResourceConfigurationRequestType'=>'VimServiceStub\UpdateChildResourceConfigurationRequestType'
,'CreateResourcePoolRequestType'=>'VimServiceStub\CreateResourcePoolRequestType'
,'DestroyChildrenRequestType'=>'VimServiceStub\DestroyChildrenRequestType'
,'CreateVAppRequestType'=>'VimServiceStub\CreateVAppRequestType'
,'CreateChildVMRequestType'=>'VimServiceStub\CreateChildVMRequestType'
,'RegisterChildVMRequestType'=>'VimServiceStub\RegisterChildVMRequestType'
,'ImportVAppRequestType'=>'VimServiceStub\ImportVAppRequestType'
,'QueryResourceConfigOptionRequestType'=>'VimServiceStub\QueryResourceConfigOptionRequestType'
,'RefreshRuntimeRequestType'=>'VimServiceStub\RefreshRuntimeRequestType'
,'FindByUuidRequestType'=>'VimServiceStub\FindByUuidRequestType'
,'FindByDatastorePathRequestType'=>'VimServiceStub\FindByDatastorePathRequestType'
,'FindByDnsNameRequestType'=>'VimServiceStub\FindByDnsNameRequestType'
,'FindByIpRequestType'=>'VimServiceStub\FindByIpRequestType'
,'FindByInventoryPathRequestType'=>'VimServiceStub\FindByInventoryPathRequestType'
,'FindChildRequestType'=>'VimServiceStub\FindChildRequestType'
,'FindAllByUuidRequestType'=>'VimServiceStub\FindAllByUuidRequestType'
,'FindAllByDnsNameRequestType'=>'VimServiceStub\FindAllByDnsNameRequestType'
,'FindAllByIpRequestType'=>'VimServiceStub\FindAllByIpRequestType'
,'CurrentTimeRequestType'=>'VimServiceStub\CurrentTimeRequestType'
,'RetrieveServiceContentRequestType'=>'VimServiceStub\RetrieveServiceContentRequestType'
,'ValidateMigrationRequestType'=>'VimServiceStub\ValidateMigrationRequestType'
,'QueryVMotionCompatibilityRequestType'=>'VimServiceStub\QueryVMotionCompatibilityRequestType'
,'RetrieveProductComponentsRequestType'=>'VimServiceStub\RetrieveProductComponentsRequestType'
,'UpdateServiceMessageRequestType'=>'VimServiceStub\UpdateServiceMessageRequestType'
,'LoginRequestType'=>'VimServiceStub\LoginRequestType'
,'LoginBySSPIRequestType'=>'VimServiceStub\LoginBySSPIRequestType'
,'LogoutRequestType'=>'VimServiceStub\LogoutRequestType'
,'AcquireLocalTicketRequestType'=>'VimServiceStub\AcquireLocalTicketRequestType'
,'AcquireGenericServiceTicketRequestType'=>'VimServiceStub\AcquireGenericServiceTicketRequestType'
,'TerminateSessionRequestType'=>'VimServiceStub\TerminateSessionRequestType'
,'SetLocaleRequestType'=>'VimServiceStub\SetLocaleRequestType'
,'LoginExtensionBySubjectNameRequestType'=>'VimServiceStub\LoginExtensionBySubjectNameRequestType'
,'LoginExtensionByCertificateRequestType'=>'VimServiceStub\LoginExtensionByCertificateRequestType'
,'ImpersonateUserRequestType'=>'VimServiceStub\ImpersonateUserRequestType'
,'SessionIsActiveRequestType'=>'VimServiceStub\SessionIsActiveRequestType'
,'AcquireCloneTicketRequestType'=>'VimServiceStub\AcquireCloneTicketRequestType'
,'CloneSessionRequestType'=>'VimServiceStub\CloneSessionRequestType'
,'ConfigureDatastoreIORMRequestType'=>'VimServiceStub\ConfigureDatastoreIORMRequestType'
,'QueryIORMConfigOptionRequestType'=>'VimServiceStub\QueryIORMConfigOptionRequestType'
,'ApplyStorageDrsRecommendationToPodRequestType'=>'VimServiceStub\ApplyStorageDrsRecommendationToPodRequestType'
,'ApplyStorageDrsRecommendationRequestType'=>'VimServiceStub\ApplyStorageDrsRecommendationRequestType'
,'CancelStorageDrsRecommendationRequestType'=>'VimServiceStub\CancelStorageDrsRecommendationRequestType'
,'RefreshStorageDrsRecommendationRequestType'=>'VimServiceStub\RefreshStorageDrsRecommendationRequestType'
,'ConfigureStorageDrsForPodRequestType'=>'VimServiceStub\ConfigureStorageDrsForPodRequestType'
,'RecommendDatastoresRequestType'=>'VimServiceStub\RecommendDatastoresRequestType'
,'CancelTaskRequestType'=>'VimServiceStub\CancelTaskRequestType'
,'UpdateProgressRequestType'=>'VimServiceStub\UpdateProgressRequestType'
,'SetTaskStateRequestType'=>'VimServiceStub\SetTaskStateRequestType'
,'SetTaskDescriptionRequestType'=>'VimServiceStub\SetTaskDescriptionRequestType'
,'ReadNextTasksRequestType'=>'VimServiceStub\ReadNextTasksRequestType'
,'ReadPreviousTasksRequestType'=>'VimServiceStub\ReadPreviousTasksRequestType'
,'CreateCollectorForTasksRequestType'=>'VimServiceStub\CreateCollectorForTasksRequestType'
,'CreateTaskRequestType'=>'VimServiceStub\CreateTaskRequestType'
,'RetrieveUserGroupsRequestType'=>'VimServiceStub\RetrieveUserGroupsRequestType'
,'UpdateVAppConfigRequestType'=>'VimServiceStub\UpdateVAppConfigRequestType'
,'UpdateLinkedChildrenRequestType'=>'VimServiceStub\UpdateLinkedChildrenRequestType'
,'CloneVAppRequestType'=>'VimServiceStub\CloneVAppRequestType'
,'ExportVAppRequestType'=>'VimServiceStub\ExportVAppRequestType'
,'PowerOnVAppRequestType'=>'VimServiceStub\PowerOnVAppRequestType'
,'PowerOffVAppRequestType'=>'VimServiceStub\PowerOffVAppRequestType'
,'SuspendVAppRequestType'=>'VimServiceStub\SuspendVAppRequestType'
,'unregisterVAppRequestType'=>'VimServiceStub\unregisterVAppRequestType'
,'CreateVirtualDiskRequestType'=>'VimServiceStub\CreateVirtualDiskRequestType'
,'DeleteVirtualDiskRequestType'=>'VimServiceStub\DeleteVirtualDiskRequestType'
,'MoveVirtualDiskRequestType'=>'VimServiceStub\MoveVirtualDiskRequestType'
,'CopyVirtualDiskRequestType'=>'VimServiceStub\CopyVirtualDiskRequestType'
,'ExtendVirtualDiskRequestType'=>'VimServiceStub\ExtendVirtualDiskRequestType'
,'QueryVirtualDiskFragmentationRequestType'=>'VimServiceStub\QueryVirtualDiskFragmentationRequestType'
,'DefragmentVirtualDiskRequestType'=>'VimServiceStub\DefragmentVirtualDiskRequestType'
,'ShrinkVirtualDiskRequestType'=>'VimServiceStub\ShrinkVirtualDiskRequestType'
,'InflateVirtualDiskRequestType'=>'VimServiceStub\InflateVirtualDiskRequestType'
,'EagerZeroVirtualDiskRequestType'=>'VimServiceStub\EagerZeroVirtualDiskRequestType'
,'ZeroFillVirtualDiskRequestType'=>'VimServiceStub\ZeroFillVirtualDiskRequestType'
,'SetVirtualDiskUuidRequestType'=>'VimServiceStub\SetVirtualDiskUuidRequestType'
,'QueryVirtualDiskUuidRequestType'=>'VimServiceStub\QueryVirtualDiskUuidRequestType'
,'QueryVirtualDiskGeometryRequestType'=>'VimServiceStub\QueryVirtualDiskGeometryRequestType'
,'RefreshStorageInfoRequestType'=>'VimServiceStub\RefreshStorageInfoRequestType'
,'CreateSnapshotRequestType'=>'VimServiceStub\CreateSnapshotRequestType'
,'RevertToCurrentSnapshotRequestType'=>'VimServiceStub\RevertToCurrentSnapshotRequestType'
,'RemoveAllSnapshotsRequestType'=>'VimServiceStub\RemoveAllSnapshotsRequestType'
,'ConsolidateVMDisksRequestType'=>'VimServiceStub\ConsolidateVMDisksRequestType'
,'EstimateStorageForConsolidateSnapshotsRequestType'=>'VimServiceStub\EstimateStorageForConsolidateSnapshotsRequestType'
,'ReconfigVMRequestType'=>'VimServiceStub\ReconfigVMRequestType'
,'UpgradeVMRequestType'=>'VimServiceStub\UpgradeVMRequestType'
,'ExtractOvfEnvironmentRequestType'=>'VimServiceStub\ExtractOvfEnvironmentRequestType'
,'PowerOnVMRequestType'=>'VimServiceStub\PowerOnVMRequestType'
,'PowerOffVMRequestType'=>'VimServiceStub\PowerOffVMRequestType'
,'SuspendVMRequestType'=>'VimServiceStub\SuspendVMRequestType'
,'ResetVMRequestType'=>'VimServiceStub\ResetVMRequestType'
,'ShutdownGuestRequestType'=>'VimServiceStub\ShutdownGuestRequestType'
,'RebootGuestRequestType'=>'VimServiceStub\RebootGuestRequestType'
,'StandbyGuestRequestType'=>'VimServiceStub\StandbyGuestRequestType'
,'AnswerVMRequestType'=>'VimServiceStub\AnswerVMRequestType'
,'CustomizeVMRequestType'=>'VimServiceStub\CustomizeVMRequestType'
,'CheckCustomizationSpecRequestType'=>'VimServiceStub\CheckCustomizationSpecRequestType'
,'MigrateVMRequestType'=>'VimServiceStub\MigrateVMRequestType'
,'RelocateVMRequestType'=>'VimServiceStub\RelocateVMRequestType'
,'CloneVMRequestType'=>'VimServiceStub\CloneVMRequestType'
,'ExportVmRequestType'=>'VimServiceStub\ExportVmRequestType'
,'MarkAsTemplateRequestType'=>'VimServiceStub\MarkAsTemplateRequestType'
,'MarkAsVirtualMachineRequestType'=>'VimServiceStub\MarkAsVirtualMachineRequestType'
,'UnregisterVMRequestType'=>'VimServiceStub\UnregisterVMRequestType'
,'ResetGuestInformationRequestType'=>'VimServiceStub\ResetGuestInformationRequestType'
,'MountToolsInstallerRequestType'=>'VimServiceStub\MountToolsInstallerRequestType'
,'UnmountToolsInstallerRequestType'=>'VimServiceStub\UnmountToolsInstallerRequestType'
,'UpgradeToolsRequestType'=>'VimServiceStub\UpgradeToolsRequestType'
,'AcquireMksTicketRequestType'=>'VimServiceStub\AcquireMksTicketRequestType'
,'AcquireTicketRequestType'=>'VimServiceStub\AcquireTicketRequestType'
,'SetScreenResolutionRequestType'=>'VimServiceStub\SetScreenResolutionRequestType'
,'DefragmentAllDisksRequestType'=>'VimServiceStub\DefragmentAllDisksRequestType'
,'CreateSecondaryVMRequestType'=>'VimServiceStub\CreateSecondaryVMRequestType'
,'TurnOffFaultToleranceForVMRequestType'=>'VimServiceStub\TurnOffFaultToleranceForVMRequestType'
,'MakePrimaryVMRequestType'=>'VimServiceStub\MakePrimaryVMRequestType'
,'TerminateFaultTolerantVMRequestType'=>'VimServiceStub\TerminateFaultTolerantVMRequestType'
,'DisableSecondaryVMRequestType'=>'VimServiceStub\DisableSecondaryVMRequestType'
,'EnableSecondaryVMRequestType'=>'VimServiceStub\EnableSecondaryVMRequestType'
,'SetDisplayTopologyRequestType'=>'VimServiceStub\SetDisplayTopologyRequestType'
,'StartRecordingRequestType'=>'VimServiceStub\StartRecordingRequestType'
,'StopRecordingRequestType'=>'VimServiceStub\StopRecordingRequestType'
,'StartReplayingRequestType'=>'VimServiceStub\StartReplayingRequestType'
,'StopReplayingRequestType'=>'VimServiceStub\StopReplayingRequestType'
,'PromoteDisksRequestType'=>'VimServiceStub\PromoteDisksRequestType'
,'CreateScreenshotRequestType'=>'VimServiceStub\CreateScreenshotRequestType'
,'QueryChangedDiskAreasRequestType'=>'VimServiceStub\QueryChangedDiskAreasRequestType'
,'QueryUnownedFilesRequestType'=>'VimServiceStub\QueryUnownedFilesRequestType'
,'reloadVirtualMachineFromPathRequestType'=>'VimServiceStub\reloadVirtualMachineFromPathRequestType'
,'QueryFaultToleranceCompatibilityRequestType'=>'VimServiceStub\QueryFaultToleranceCompatibilityRequestType'
,'RemoveAlarmRequestType'=>'VimServiceStub\RemoveAlarmRequestType'
,'ReconfigureAlarmRequestType'=>'VimServiceStub\ReconfigureAlarmRequestType'
,'CreateAlarmRequestType'=>'VimServiceStub\CreateAlarmRequestType'
,'GetAlarmRequestType'=>'VimServiceStub\GetAlarmRequestType'
,'AreAlarmActionsEnabledRequestType'=>'VimServiceStub\AreAlarmActionsEnabledRequestType'
,'EnableAlarmActionsRequestType'=>'VimServiceStub\EnableAlarmActionsRequestType'
,'GetAlarmStateRequestType'=>'VimServiceStub\GetAlarmStateRequestType'
,'AcknowledgeAlarmRequestType'=>'VimServiceStub\AcknowledgeAlarmRequestType'
,'ReconfigureDVPortgroupRequestType'=>'VimServiceStub\ReconfigureDVPortgroupRequestType'
,'QueryAvailableDvsSpecRequestType'=>'VimServiceStub\QueryAvailableDvsSpecRequestType'
,'QueryCompatibleHostForNewDvsRequestType'=>'VimServiceStub\QueryCompatibleHostForNewDvsRequestType'
,'QueryCompatibleHostForExistingDvsRequestType'=>'VimServiceStub\QueryCompatibleHostForExistingDvsRequestType'
,'QueryDvsCompatibleHostSpecRequestType'=>'VimServiceStub\QueryDvsCompatibleHostSpecRequestType'
,'QueryDvsFeatureCapabilityRequestType'=>'VimServiceStub\QueryDvsFeatureCapabilityRequestType'
,'QueryDvsByUuidRequestType'=>'VimServiceStub\QueryDvsByUuidRequestType'
,'QueryDvsConfigTargetRequestType'=>'VimServiceStub\QueryDvsConfigTargetRequestType'
,'QueryDvsCheckCompatibilityRequestType'=>'VimServiceStub\QueryDvsCheckCompatibilityRequestType'
,'RectifyDvsOnHostRequestType'=>'VimServiceStub\RectifyDvsOnHostRequestType'
,'ReadNextEventsRequestType'=>'VimServiceStub\ReadNextEventsRequestType'
,'ReadPreviousEventsRequestType'=>'VimServiceStub\ReadPreviousEventsRequestType'
,'RetrieveArgumentDescriptionRequestType'=>'VimServiceStub\RetrieveArgumentDescriptionRequestType'
,'CreateCollectorForEventsRequestType'=>'VimServiceStub\CreateCollectorForEventsRequestType'
,'LogUserEventRequestType'=>'VimServiceStub\LogUserEventRequestType'
,'QueryEventsRequestType'=>'VimServiceStub\QueryEventsRequestType'
,'PostEventRequestType'=>'VimServiceStub\PostEventRequestType'
,'JoinDomainRequestType'=>'VimServiceStub\JoinDomainRequestType'
,'JoinDomainWithCAMRequestType'=>'VimServiceStub\JoinDomainWithCAMRequestType'
,'ImportCertificateForCAMRequestType'=>'VimServiceStub\ImportCertificateForCAMRequestType'
,'LeaveCurrentDomainRequestType'=>'VimServiceStub\LeaveCurrentDomainRequestType'
,'ReconfigureAutostartRequestType'=>'VimServiceStub\ReconfigureAutostartRequestType'
,'AutoStartPowerOnRequestType'=>'VimServiceStub\AutoStartPowerOnRequestType'
,'AutoStartPowerOffRequestType'=>'VimServiceStub\AutoStartPowerOffRequestType'
,'QueryBootDevicesRequestType'=>'VimServiceStub\QueryBootDevicesRequestType'
,'UpdateBootDeviceRequestType'=>'VimServiceStub\UpdateBootDeviceRequestType'
,'ConfigureHostCacheRequestType'=>'VimServiceStub\ConfigureHostCacheRequestType'
,'EnableHyperThreadingRequestType'=>'VimServiceStub\EnableHyperThreadingRequestType'
,'DisableHyperThreadingRequestType'=>'VimServiceStub\DisableHyperThreadingRequestType'
,'SearchDatastoreRequestType'=>'VimServiceStub\SearchDatastoreRequestType'
,'SearchDatastoreSubFoldersRequestType'=>'VimServiceStub\SearchDatastoreSubFoldersRequestType'
,'DeleteFileRequestType'=>'VimServiceStub\DeleteFileRequestType'
,'UpdateLocalSwapDatastoreRequestType'=>'VimServiceStub\UpdateLocalSwapDatastoreRequestType'
,'QueryAvailableDisksForVmfsRequestType'=>'VimServiceStub\QueryAvailableDisksForVmfsRequestType'
,'QueryVmfsDatastoreCreateOptionsRequestType'=>'VimServiceStub\QueryVmfsDatastoreCreateOptionsRequestType'
,'CreateVmfsDatastoreRequestType'=>'VimServiceStub\CreateVmfsDatastoreRequestType'
,'QueryVmfsDatastoreExtendOptionsRequestType'=>'VimServiceStub\QueryVmfsDatastoreExtendOptionsRequestType'
,'QueryVmfsDatastoreExpandOptionsRequestType'=>'VimServiceStub\QueryVmfsDatastoreExpandOptionsRequestType'
,'ExtendVmfsDatastoreRequestType'=>'VimServiceStub\ExtendVmfsDatastoreRequestType'
,'ExpandVmfsDatastoreRequestType'=>'VimServiceStub\ExpandVmfsDatastoreRequestType'
,'CreateNasDatastoreRequestType'=>'VimServiceStub\CreateNasDatastoreRequestType'
,'CreateLocalDatastoreRequestType'=>'VimServiceStub\CreateLocalDatastoreRequestType'
,'RemoveDatastoreRequestType'=>'VimServiceStub\RemoveDatastoreRequestType'
,'ConfigureDatastorePrincipalRequestType'=>'VimServiceStub\ConfigureDatastorePrincipalRequestType'
,'QueryUnresolvedVmfsVolumesRequestType'=>'VimServiceStub\QueryUnresolvedVmfsVolumesRequestType'
,'ResignatureUnresolvedVmfsVolumeRequestType'=>'VimServiceStub\ResignatureUnresolvedVmfsVolumeRequestType'
,'UpdateDateTimeConfigRequestType'=>'VimServiceStub\UpdateDateTimeConfigRequestType'
,'QueryAvailableTimeZonesRequestType'=>'VimServiceStub\QueryAvailableTimeZonesRequestType'
,'QueryDateTimeRequestType'=>'VimServiceStub\QueryDateTimeRequestType'
,'UpdateDateTimeRequestType'=>'VimServiceStub\UpdateDateTimeRequestType'
,'RefreshDateTimeSystemRequestType'=>'VimServiceStub\RefreshDateTimeSystemRequestType'
,'QueryAvailablePartitionRequestType'=>'VimServiceStub\QueryAvailablePartitionRequestType'
,'SelectActivePartitionRequestType'=>'VimServiceStub\SelectActivePartitionRequestType'
,'QueryPartitionCreateOptionsRequestType'=>'VimServiceStub\QueryPartitionCreateOptionsRequestType'
,'QueryPartitionCreateDescRequestType'=>'VimServiceStub\QueryPartitionCreateDescRequestType'
,'CreateDiagnosticPartitionRequestType'=>'VimServiceStub\CreateDiagnosticPartitionRequestType'
,'EsxAgentHostManagerUpdateConfigRequestType'=>'VimServiceStub\EsxAgentHostManagerUpdateConfigRequestType'
,'UpdateDefaultPolicyRequestType'=>'VimServiceStub\UpdateDefaultPolicyRequestType'
,'EnableRulesetRequestType'=>'VimServiceStub\EnableRulesetRequestType'
,'DisableRulesetRequestType'=>'VimServiceStub\DisableRulesetRequestType'
,'UpdateRulesetRequestType'=>'VimServiceStub\UpdateRulesetRequestType'
,'RefreshFirewallRequestType'=>'VimServiceStub\RefreshFirewallRequestType'
,'ResetFirmwareToFactoryDefaultsRequestType'=>'VimServiceStub\ResetFirmwareToFactoryDefaultsRequestType'
,'BackupFirmwareConfigurationRequestType'=>'VimServiceStub\BackupFirmwareConfigurationRequestType'
,'QueryFirmwareConfigUploadURLRequestType'=>'VimServiceStub\QueryFirmwareConfigUploadURLRequestType'
,'RestoreFirmwareConfigurationRequestType'=>'VimServiceStub\RestoreFirmwareConfigurationRequestType'
,'RefreshHealthStatusSystemRequestType'=>'VimServiceStub\RefreshHealthStatusSystemRequestType'
,'ResetSystemHealthInfoRequestType'=>'VimServiceStub\ResetSystemHealthInfoRequestType'
,'HostImageConfigGetAcceptanceRequestType'=>'VimServiceStub\HostImageConfigGetAcceptanceRequestType'
,'HostImageConfigGetProfileRequestType'=>'VimServiceStub\HostImageConfigGetProfileRequestType'
,'UpdateHostImageAcceptanceLevelRequestType'=>'VimServiceStub\UpdateHostImageAcceptanceLevelRequestType'
,'QueryVnicStatusRequestType'=>'VimServiceStub\QueryVnicStatusRequestType'
,'QueryPnicStatusRequestType'=>'VimServiceStub\QueryPnicStatusRequestType'
,'QueryBoundVnicsRequestType'=>'VimServiceStub\QueryBoundVnicsRequestType'
,'QueryCandidateNicsRequestType'=>'VimServiceStub\QueryCandidateNicsRequestType'
,'BindVnicRequestType'=>'VimServiceStub\BindVnicRequestType'
,'UnbindVnicRequestType'=>'VimServiceStub\UnbindVnicRequestType'
,'QueryMigrationDependenciesRequestType'=>'VimServiceStub\QueryMigrationDependenciesRequestType'
,'QueryModulesRequestType'=>'VimServiceStub\QueryModulesRequestType'
,'UpdateModuleOptionStringRequestType'=>'VimServiceStub\UpdateModuleOptionStringRequestType'
,'QueryConfiguredModuleOptionStringRequestType'=>'VimServiceStub\QueryConfiguredModuleOptionStringRequestType'
,'CreateUserRequestType'=>'VimServiceStub\CreateUserRequestType'
,'UpdateUserRequestType'=>'VimServiceStub\UpdateUserRequestType'
,'CreateGroupRequestType'=>'VimServiceStub\CreateGroupRequestType'
,'RemoveUserRequestType'=>'VimServiceStub\RemoveUserRequestType'
,'RemoveGroupRequestType'=>'VimServiceStub\RemoveGroupRequestType'
,'AssignUserToGroupRequestType'=>'VimServiceStub\AssignUserToGroupRequestType'
,'UnassignUserFromGroupRequestType'=>'VimServiceStub\UnassignUserFromGroupRequestType'
,'ReconfigureServiceConsoleReservationRequestType'=>'VimServiceStub\ReconfigureServiceConsoleReservationRequestType'
,'ReconfigureVirtualMachineReservationRequestType'=>'VimServiceStub\ReconfigureVirtualMachineReservationRequestType'
,'UpdateNetworkConfigRequestType'=>'VimServiceStub\UpdateNetworkConfigRequestType'
,'UpdateDnsConfigRequestType'=>'VimServiceStub\UpdateDnsConfigRequestType'
,'UpdateIpRouteConfigRequestType'=>'VimServiceStub\UpdateIpRouteConfigRequestType'
,'UpdateConsoleIpRouteConfigRequestType'=>'VimServiceStub\UpdateConsoleIpRouteConfigRequestType'
,'UpdateIpRouteTableConfigRequestType'=>'VimServiceStub\UpdateIpRouteTableConfigRequestType'
,'AddVirtualSwitchRequestType'=>'VimServiceStub\AddVirtualSwitchRequestType'
,'RemoveVirtualSwitchRequestType'=>'VimServiceStub\RemoveVirtualSwitchRequestType'
,'UpdateVirtualSwitchRequestType'=>'VimServiceStub\UpdateVirtualSwitchRequestType'
,'AddPortGroupRequestType'=>'VimServiceStub\AddPortGroupRequestType'
,'RemovePortGroupRequestType'=>'VimServiceStub\RemovePortGroupRequestType'
,'UpdatePortGroupRequestType'=>'VimServiceStub\UpdatePortGroupRequestType'
,'UpdatePhysicalNicLinkSpeedRequestType'=>'VimServiceStub\UpdatePhysicalNicLinkSpeedRequestType'
,'QueryNetworkHintRequestType'=>'VimServiceStub\QueryNetworkHintRequestType'
,'AddVirtualNicRequestType'=>'VimServiceStub\AddVirtualNicRequestType'
,'RemoveVirtualNicRequestType'=>'VimServiceStub\RemoveVirtualNicRequestType'
,'UpdateVirtualNicRequestType'=>'VimServiceStub\UpdateVirtualNicRequestType'
,'AddServiceConsoleVirtualNicRequestType'=>'VimServiceStub\AddServiceConsoleVirtualNicRequestType'
,'RemoveServiceConsoleVirtualNicRequestType'=>'VimServiceStub\RemoveServiceConsoleVirtualNicRequestType'
,'UpdateServiceConsoleVirtualNicRequestType'=>'VimServiceStub\UpdateServiceConsoleVirtualNicRequestType'
,'RestartServiceConsoleVirtualNicRequestType'=>'VimServiceStub\RestartServiceConsoleVirtualNicRequestType'
,'RefreshNetworkSystemRequestType'=>'VimServiceStub\RefreshNetworkSystemRequestType'
,'CheckHostPatchRequestType'=>'VimServiceStub\CheckHostPatchRequestType'
,'ScanHostPatchRequestType'=>'VimServiceStub\ScanHostPatchRequestType'
,'ScanHostPatchV2RequestType'=>'VimServiceStub\ScanHostPatchV2RequestType'
,'StageHostPatchRequestType'=>'VimServiceStub\StageHostPatchRequestType'
,'InstallHostPatchRequestType'=>'VimServiceStub\InstallHostPatchRequestType'
,'InstallHostPatchV2RequestType'=>'VimServiceStub\InstallHostPatchV2RequestType'
,'UninstallHostPatchRequestType'=>'VimServiceStub\UninstallHostPatchRequestType'
,'QueryHostPatchRequestType'=>'VimServiceStub\QueryHostPatchRequestType'
,'RefreshRequestType'=>'VimServiceStub\RefreshRequestType'
,'UpdatePassthruConfigRequestType'=>'VimServiceStub\UpdatePassthruConfigRequestType'
,'ConfigurePowerPolicyRequestType'=>'VimServiceStub\ConfigurePowerPolicyRequestType'
,'UpdateServicePolicyRequestType'=>'VimServiceStub\UpdateServicePolicyRequestType'
,'StartServiceRequestType'=>'VimServiceStub\StartServiceRequestType'
,'StopServiceRequestType'=>'VimServiceStub\StopServiceRequestType'
,'RestartServiceRequestType'=>'VimServiceStub\RestartServiceRequestType'
,'UninstallServiceRequestType'=>'VimServiceStub\UninstallServiceRequestType'
,'RefreshServicesRequestType'=>'VimServiceStub\RefreshServicesRequestType'
,'ReconfigureSnmpAgentRequestType'=>'VimServiceStub\ReconfigureSnmpAgentRequestType'
,'SendTestNotificationRequestType'=>'VimServiceStub\SendTestNotificationRequestType'
,'RetrieveDiskPartitionInfoRequestType'=>'VimServiceStub\RetrieveDiskPartitionInfoRequestType'
,'ComputeDiskPartitionInfoRequestType'=>'VimServiceStub\ComputeDiskPartitionInfoRequestType'
,'ComputeDiskPartitionInfoForResizeRequestType'=>'VimServiceStub\ComputeDiskPartitionInfoForResizeRequestType'
,'UpdateDiskPartitionsRequestType'=>'VimServiceStub\UpdateDiskPartitionsRequestType'
,'FormatVmfsRequestType'=>'VimServiceStub\FormatVmfsRequestType'
,'MountVmfsVolumeRequestType'=>'VimServiceStub\MountVmfsVolumeRequestType'
,'UnmountVmfsVolumeRequestType'=>'VimServiceStub\UnmountVmfsVolumeRequestType'
,'RescanVmfsRequestType'=>'VimServiceStub\RescanVmfsRequestType'
,'AttachVmfsExtentRequestType'=>'VimServiceStub\AttachVmfsExtentRequestType'
,'ExpandVmfsExtentRequestType'=>'VimServiceStub\ExpandVmfsExtentRequestType'
,'UpgradeVmfsRequestType'=>'VimServiceStub\UpgradeVmfsRequestType'
,'UpgradeVmLayoutRequestType'=>'VimServiceStub\UpgradeVmLayoutRequestType'
,'QueryUnresolvedVmfsVolumeRequestType'=>'VimServiceStub\QueryUnresolvedVmfsVolumeRequestType'
,'ResolveMultipleUnresolvedVmfsVolumesRequestType'=>'VimServiceStub\ResolveMultipleUnresolvedVmfsVolumesRequestType'
,'UnmountForceMountedVmfsVolumeRequestType'=>'VimServiceStub\UnmountForceMountedVmfsVolumeRequestType'
,'RescanHbaRequestType'=>'VimServiceStub\RescanHbaRequestType'
,'RescanAllHbaRequestType'=>'VimServiceStub\RescanAllHbaRequestType'
,'UpdateSoftwareInternetScsiEnabledRequestType'=>'VimServiceStub\UpdateSoftwareInternetScsiEnabledRequestType'
,'UpdateInternetScsiDiscoveryPropertiesRequestType'=>'VimServiceStub\UpdateInternetScsiDiscoveryPropertiesRequestType'
,'UpdateInternetScsiAuthenticationPropertiesRequestType'=>'VimServiceStub\UpdateInternetScsiAuthenticationPropertiesRequestType'
,'UpdateInternetScsiDigestPropertiesRequestType'=>'VimServiceStub\UpdateInternetScsiDigestPropertiesRequestType'
,'UpdateInternetScsiAdvancedOptionsRequestType'=>'VimServiceStub\UpdateInternetScsiAdvancedOptionsRequestType'
,'UpdateInternetScsiIPPropertiesRequestType'=>'VimServiceStub\UpdateInternetScsiIPPropertiesRequestType'
,'UpdateInternetScsiNameRequestType'=>'VimServiceStub\UpdateInternetScsiNameRequestType'
,'UpdateInternetScsiAliasRequestType'=>'VimServiceStub\UpdateInternetScsiAliasRequestType'
,'AddInternetScsiSendTargetsRequestType'=>'VimServiceStub\AddInternetScsiSendTargetsRequestType'
,'RemoveInternetScsiSendTargetsRequestType'=>'VimServiceStub\RemoveInternetScsiSendTargetsRequestType'
,'AddInternetScsiStaticTargetsRequestType'=>'VimServiceStub\AddInternetScsiStaticTargetsRequestType'
,'RemoveInternetScsiStaticTargetsRequestType'=>'VimServiceStub\RemoveInternetScsiStaticTargetsRequestType'
,'EnableMultipathPathRequestType'=>'VimServiceStub\EnableMultipathPathRequestType'
,'DisableMultipathPathRequestType'=>'VimServiceStub\DisableMultipathPathRequestType'
,'SetMultipathLunPolicyRequestType'=>'VimServiceStub\SetMultipathLunPolicyRequestType'
,'QueryPathSelectionPolicyOptionsRequestType'=>'VimServiceStub\QueryPathSelectionPolicyOptionsRequestType'
,'QueryStorageArrayTypePolicyOptionsRequestType'=>'VimServiceStub\QueryStorageArrayTypePolicyOptionsRequestType'
,'UpdateScsiLunDisplayNameRequestType'=>'VimServiceStub\UpdateScsiLunDisplayNameRequestType'
,'DetachScsiLunRequestType'=>'VimServiceStub\DetachScsiLunRequestType'
,'AttachScsiLunRequestType'=>'VimServiceStub\AttachScsiLunRequestType'
,'RefreshStorageSystemRequestType'=>'VimServiceStub\RefreshStorageSystemRequestType'
,'DiscoverFcoeHbasRequestType'=>'VimServiceStub\DiscoverFcoeHbasRequestType'
,'MarkForRemovalRequestType'=>'VimServiceStub\MarkForRemovalRequestType'
,'UpdateIpConfigRequestType'=>'VimServiceStub\UpdateIpConfigRequestType'
,'SelectVnicRequestType'=>'VimServiceStub\SelectVnicRequestType'
,'DeselectVnicRequestType'=>'VimServiceStub\DeselectVnicRequestType'
,'QueryNetConfigRequestType'=>'VimServiceStub\QueryNetConfigRequestType'
,'SelectVnicForNicTypeRequestType'=>'VimServiceStub\SelectVnicForNicTypeRequestType'
,'DeselectVnicForNicTypeRequestType'=>'VimServiceStub\DeselectVnicForNicTypeRequestType'
,'QueryOptionsRequestType'=>'VimServiceStub\QueryOptionsRequestType'
,'UpdateOptionsRequestType'=>'VimServiceStub\UpdateOptionsRequestType'
,'CheckComplianceRequestType'=>'VimServiceStub\CheckComplianceRequestType'
,'QueryComplianceStatusRequestType'=>'VimServiceStub\QueryComplianceStatusRequestType'
,'ClearComplianceStatusRequestType'=>'VimServiceStub\ClearComplianceStatusRequestType'
,'QueryExpressionMetadataRequestType'=>'VimServiceStub\QueryExpressionMetadataRequestType'
,'RetrieveDescriptionRequestType'=>'VimServiceStub\RetrieveDescriptionRequestType'
,'DestroyProfileRequestType'=>'VimServiceStub\DestroyProfileRequestType'
,'AssociateProfileRequestType'=>'VimServiceStub\AssociateProfileRequestType'
,'DissociateProfileRequestType'=>'VimServiceStub\DissociateProfileRequestType'
,'CheckProfileComplianceRequestType'=>'VimServiceStub\CheckProfileComplianceRequestType'
,'ExportProfileRequestType'=>'VimServiceStub\ExportProfileRequestType'
,'CreateProfileRequestType'=>'VimServiceStub\CreateProfileRequestType'
,'QueryPolicyMetadataRequestType'=>'VimServiceStub\QueryPolicyMetadataRequestType'
,'FindAssociatedProfileRequestType'=>'VimServiceStub\FindAssociatedProfileRequestType'
,'UpdateClusterProfileRequestType'=>'VimServiceStub\UpdateClusterProfileRequestType'
,'UpdateReferenceHostRequestType'=>'VimServiceStub\UpdateReferenceHostRequestType'
,'UpdateHostProfileRequestType'=>'VimServiceStub\UpdateHostProfileRequestType'
,'ExecuteHostProfileRequestType'=>'VimServiceStub\ExecuteHostProfileRequestType'
,'ApplyHostConfigRequestType'=>'VimServiceStub\ApplyHostConfigRequestType'
,'GenerateConfigTaskListRequestType'=>'VimServiceStub\GenerateConfigTaskListRequestType'
,'QueryHostProfileMetadataRequestType'=>'VimServiceStub\QueryHostProfileMetadataRequestType'
,'QueryProfileStructureRequestType'=>'VimServiceStub\QueryProfileStructureRequestType'
,'CreateDefaultProfileRequestType'=>'VimServiceStub\CreateDefaultProfileRequestType'
,'UpdateAnswerFileRequestType'=>'VimServiceStub\UpdateAnswerFileRequestType'
,'RetrieveAnswerFileRequestType'=>'VimServiceStub\RetrieveAnswerFileRequestType'
,'ExportAnswerFileRequestType'=>'VimServiceStub\ExportAnswerFileRequestType'
,'CheckAnswerFileStatusRequestType'=>'VimServiceStub\CheckAnswerFileStatusRequestType'
,'QueryAnswerFileStatusRequestType'=>'VimServiceStub\QueryAnswerFileStatusRequestType'
,'RemoveScheduledTaskRequestType'=>'VimServiceStub\RemoveScheduledTaskRequestType'
,'ReconfigureScheduledTaskRequestType'=>'VimServiceStub\ReconfigureScheduledTaskRequestType'
,'RunScheduledTaskRequestType'=>'VimServiceStub\RunScheduledTaskRequestType'
,'CreateScheduledTaskRequestType'=>'VimServiceStub\CreateScheduledTaskRequestType'
,'RetrieveEntityScheduledTaskRequestType'=>'VimServiceStub\RetrieveEntityScheduledTaskRequestType'
,'CreateObjectScheduledTaskRequestType'=>'VimServiceStub\CreateObjectScheduledTaskRequestType'
,'RetrieveObjectScheduledTaskRequestType'=>'VimServiceStub\RetrieveObjectScheduledTaskRequestType'
,'OpenInventoryViewFolderRequestType'=>'VimServiceStub\OpenInventoryViewFolderRequestType'
,'CloseInventoryViewFolderRequestType'=>'VimServiceStub\CloseInventoryViewFolderRequestType'
,'ModifyListViewRequestType'=>'VimServiceStub\ModifyListViewRequestType'
,'ResetListViewRequestType'=>'VimServiceStub\ResetListViewRequestType'
,'ResetListViewFromViewRequestType'=>'VimServiceStub\ResetListViewFromViewRequestType'
,'DestroyViewRequestType'=>'VimServiceStub\DestroyViewRequestType'
,'CreateInventoryViewRequestType'=>'VimServiceStub\CreateInventoryViewRequestType'
,'CreateContainerViewRequestType'=>'VimServiceStub\CreateContainerViewRequestType'
,'CreateListViewRequestType'=>'VimServiceStub\CreateListViewRequestType'
,'CreateListViewFromViewRequestType'=>'VimServiceStub\CreateListViewFromViewRequestType'
,'RevertToSnapshotRequestType'=>'VimServiceStub\RevertToSnapshotRequestType'
,'RemoveSnapshotRequestType'=>'VimServiceStub\RemoveSnapshotRequestType'
,'RenameSnapshotRequestType'=>'VimServiceStub\RenameSnapshotRequestType'
,'CheckCompatibilityRequestType'=>'VimServiceStub\CheckCompatibilityRequestType'
,'QueryVMotionCompatibilityExRequestType'=>'VimServiceStub\QueryVMotionCompatibilityExRequestType'
,'CheckMigrateRequestType'=>'VimServiceStub\CheckMigrateRequestType'
,'CheckRelocateRequestType'=>'VimServiceStub\CheckRelocateRequestType'
,'ValidateCredentialsInGuestRequestType'=>'VimServiceStub\ValidateCredentialsInGuestRequestType'
,'AcquireCredentialsInGuestRequestType'=>'VimServiceStub\AcquireCredentialsInGuestRequestType'
,'ReleaseCredentialsInGuestRequestType'=>'VimServiceStub\ReleaseCredentialsInGuestRequestType'
,'MakeDirectoryInGuestRequestType'=>'VimServiceStub\MakeDirectoryInGuestRequestType'
,'DeleteFileInGuestRequestType'=>'VimServiceStub\DeleteFileInGuestRequestType'
,'DeleteDirectoryInGuestRequestType'=>'VimServiceStub\DeleteDirectoryInGuestRequestType'
,'MoveDirectoryInGuestRequestType'=>'VimServiceStub\MoveDirectoryInGuestRequestType'
,'MoveFileInGuestRequestType'=>'VimServiceStub\MoveFileInGuestRequestType'
,'CreateTemporaryFileInGuestRequestType'=>'VimServiceStub\CreateTemporaryFileInGuestRequestType'
,'CreateTemporaryDirectoryInGuestRequestType'=>'VimServiceStub\CreateTemporaryDirectoryInGuestRequestType'
,'ListFilesInGuestRequestType'=>'VimServiceStub\ListFilesInGuestRequestType'
,'ChangeFileAttributesInGuestRequestType'=>'VimServiceStub\ChangeFileAttributesInGuestRequestType'
,'InitiateFileTransferFromGuestRequestType'=>'VimServiceStub\InitiateFileTransferFromGuestRequestType'
,'InitiateFileTransferToGuestRequestType'=>'VimServiceStub\InitiateFileTransferToGuestRequestType'
,'StartProgramInGuestRequestType'=>'VimServiceStub\StartProgramInGuestRequestType'
,'ListProcessesInGuestRequestType'=>'VimServiceStub\ListProcessesInGuestRequestType'
,'TerminateProcessInGuestRequestType'=>'VimServiceStub\TerminateProcessInGuestRequestType'
,'ReadEnvironmentVariableInGuestRequestType'=>'VimServiceStub\ReadEnvironmentVariableInGuestRequestType'
,'AddAuthorizationRoleResponse'=>'VimServiceStub\AddAuthorizationRoleResponse'
,'RemoveAuthorizationRoleResponse'=>'VimServiceStub\RemoveAuthorizationRoleResponse'
,'UpdateAuthorizationRoleResponse'=>'VimServiceStub\UpdateAuthorizationRoleResponse'
,'MergePermissionsResponse'=>'VimServiceStub\MergePermissionsResponse'
,'RetrieveRolePermissionsResponse'=>'VimServiceStub\RetrieveRolePermissionsResponse'
,'RetrieveEntityPermissionsResponse'=>'VimServiceStub\RetrieveEntityPermissionsResponse'
,'RetrieveAllPermissionsResponse'=>'VimServiceStub\RetrieveAllPermissionsResponse'
,'SetEntityPermissionsResponse'=>'VimServiceStub\SetEntityPermissionsResponse'
,'ResetEntityPermissionsResponse'=>'VimServiceStub\ResetEntityPermissionsResponse'
,'RemoveEntityPermissionResponse'=>'VimServiceStub\RemoveEntityPermissionResponse'
,'HasPrivilegeOnEntityResponse'=>'VimServiceStub\HasPrivilegeOnEntityResponse'
,'ReconfigureCluster_TaskResponse'=>'VimServiceStub\ReconfigureClusterTaskResponse'
,'ApplyRecommendationResponse'=>'VimServiceStub\ApplyRecommendationResponse'
,'CancelRecommendationResponse'=>'VimServiceStub\CancelRecommendationResponse'
,'RecommendHostsForVmResponse'=>'VimServiceStub\RecommendHostsForVmResponse'
,'AddHost_TaskResponse'=>'VimServiceStub\AddHostTaskResponse'
,'MoveInto_TaskResponse'=>'VimServiceStub\MoveIntoTaskResponse'
,'MoveHostInto_TaskResponse'=>'VimServiceStub\MoveHostIntoTaskResponse'
,'RefreshRecommendationResponse'=>'VimServiceStub\RefreshRecommendationResponse'
,'RetrieveDasAdvancedRuntimeInfoResponse'=>'VimServiceStub\RetrieveDasAdvancedRuntimeInfoResponse'
,'ClusterEnterMaintenanceModeResponse'=>'VimServiceStub\ClusterEnterMaintenanceModeResponse'
,'ReconfigureComputeResource_TaskResponse'=>'VimServiceStub\ReconfigureComputeResourceTaskResponse'
,'AddCustomFieldDefResponse'=>'VimServiceStub\AddCustomFieldDefResponse'
,'RemoveCustomFieldDefResponse'=>'VimServiceStub\RemoveCustomFieldDefResponse'
,'RenameCustomFieldDefResponse'=>'VimServiceStub\RenameCustomFieldDefResponse'
,'SetFieldResponse'=>'VimServiceStub\SetFieldResponse'
,'DoesCustomizationSpecExistResponse'=>'VimServiceStub\DoesCustomizationSpecExistResponse'
,'GetCustomizationSpecResponse'=>'VimServiceStub\GetCustomizationSpecResponse'
,'CreateCustomizationSpecResponse'=>'VimServiceStub\CreateCustomizationSpecResponse'
,'OverwriteCustomizationSpecResponse'=>'VimServiceStub\OverwriteCustomizationSpecResponse'
,'DeleteCustomizationSpecResponse'=>'VimServiceStub\DeleteCustomizationSpecResponse'
,'DuplicateCustomizationSpecResponse'=>'VimServiceStub\DuplicateCustomizationSpecResponse'
,'RenameCustomizationSpecResponse'=>'VimServiceStub\RenameCustomizationSpecResponse'
,'CustomizationSpecItemToXmlResponse'=>'VimServiceStub\CustomizationSpecItemToXmlResponse'
,'XmlToCustomizationSpecItemResponse'=>'VimServiceStub\XmlToCustomizationSpecItemResponse'
,'CheckCustomizationResourcesResponse'=>'VimServiceStub\CheckCustomizationResourcesResponse'
,'QueryConnectionInfoResponse'=>'VimServiceStub\QueryConnectionInfoResponse'
,'PowerOnMultiVM_TaskResponse'=>'VimServiceStub\PowerOnMultiVMTaskResponse'
,'RefreshDatastoreResponse'=>'VimServiceStub\RefreshDatastoreResponse'
,'RefreshDatastoreStorageInfoResponse'=>'VimServiceStub\RefreshDatastoreStorageInfoResponse'
,'UpdateVirtualMachineFiles_TaskResponse'=>'VimServiceStub\UpdateVirtualMachineFilesTaskResponse'
,'RenameDatastoreResponse'=>'VimServiceStub\RenameDatastoreResponse'
,'DestroyDatastoreResponse'=>'VimServiceStub\DestroyDatastoreResponse'
,'DatastoreEnterMaintenanceModeResponse'=>'VimServiceStub\DatastoreEnterMaintenanceModeResponse'
,'DatastoreExitMaintenanceMode_TaskResponse'=>'VimServiceStub\DatastoreExitMaintenanceModeTaskResponse'
,'QueryDescriptionsResponse'=>'VimServiceStub\QueryDescriptionsResponse'
,'BrowseDiagnosticLogResponse'=>'VimServiceStub\BrowseDiagnosticLogResponse'
,'GenerateLogBundles_TaskResponse'=>'VimServiceStub\GenerateLogBundlesTaskResponse'
,'FetchDVPortKeysResponse'=>'VimServiceStub\FetchDVPortKeysResponse'
,'FetchDVPortsResponse'=>'VimServiceStub\FetchDVPortsResponse'
,'QueryUsedVlanIdInDvsResponse'=>'VimServiceStub\QueryUsedVlanIdInDvsResponse'
,'ReconfigureDvs_TaskResponse'=>'VimServiceStub\ReconfigureDvsTaskResponse'
,'PerformDvsProductSpecOperation_TaskResponse'=>'VimServiceStub\PerformDvsProductSpecOperationTaskResponse'
,'MergeDvs_TaskResponse'=>'VimServiceStub\MergeDvsTaskResponse'
,'AddDVPortgroup_TaskResponse'=>'VimServiceStub\AddDVPortgroupTaskResponse'
,'MoveDVPort_TaskResponse'=>'VimServiceStub\MoveDVPortTaskResponse'
,'UpdateDvsCapabilityResponse'=>'VimServiceStub\UpdateDvsCapabilityResponse'
,'ReconfigureDVPort_TaskResponse'=>'VimServiceStub\ReconfigureDVPortTaskResponse'
,'RefreshDVPortStateResponse'=>'VimServiceStub\RefreshDVPortStateResponse'
,'RectifyDvsHost_TaskResponse'=>'VimServiceStub\RectifyDvsHostTaskResponse'
,'UpdateNetworkResourcePoolResponse'=>'VimServiceStub\UpdateNetworkResourcePoolResponse'
,'AddNetworkResourcePoolResponse'=>'VimServiceStub\AddNetworkResourcePoolResponse'
,'RemoveNetworkResourcePoolResponse'=>'VimServiceStub\RemoveNetworkResourcePoolResponse'
,'EnableNetworkResourceManagementResponse'=>'VimServiceStub\EnableNetworkResourceManagementResponse'
,'QueryConfigOptionDescriptorResponse'=>'VimServiceStub\QueryConfigOptionDescriptorResponse'
,'QueryConfigOptionResponse'=>'VimServiceStub\QueryConfigOptionResponse'
,'QueryConfigTargetResponse'=>'VimServiceStub\QueryConfigTargetResponse'
,'QueryTargetCapabilitiesResponse'=>'VimServiceStub\QueryTargetCapabilitiesResponse'
,'setCustomValueResponse'=>'VimServiceStub\setCustomValueResponse'
,'UnregisterExtensionResponse'=>'VimServiceStub\UnregisterExtensionResponse'
,'FindExtensionResponse'=>'VimServiceStub\FindExtensionResponse'
,'RegisterExtensionResponse'=>'VimServiceStub\RegisterExtensionResponse'
,'UpdateExtensionResponse'=>'VimServiceStub\UpdateExtensionResponse'
,'GetPublicKeyResponse'=>'VimServiceStub\GetPublicKeyResponse'
,'SetPublicKeyResponse'=>'VimServiceStub\SetPublicKeyResponse'
,'SetExtensionCertificateResponse'=>'VimServiceStub\SetExtensionCertificateResponse'
,'QueryManagedByResponse'=>'VimServiceStub\QueryManagedByResponse'
,'MoveDatastoreFile_TaskResponse'=>'VimServiceStub\MoveDatastoreFileTaskResponse'
,'CopyDatastoreFile_TaskResponse'=>'VimServiceStub\CopyDatastoreFileTaskResponse'
,'DeleteDatastoreFile_TaskResponse'=>'VimServiceStub\DeleteDatastoreFileTaskResponse'
,'MakeDirectoryResponse'=>'VimServiceStub\MakeDirectoryResponse'
,'ChangeOwnerResponse'=>'VimServiceStub\ChangeOwnerResponse'
,'CreateFolderResponse'=>'VimServiceStub\CreateFolderResponse'
,'MoveIntoFolder_TaskResponse'=>'VimServiceStub\MoveIntoFolderTaskResponse'
,'CreateVM_TaskResponse'=>'VimServiceStub\CreateVMTaskResponse'
,'RegisterVM_TaskResponse'=>'VimServiceStub\RegisterVMTaskResponse'
,'CreateClusterResponse'=>'VimServiceStub\CreateClusterResponse'
,'CreateClusterExResponse'=>'VimServiceStub\CreateClusterExResponse'
,'AddStandaloneHost_TaskResponse'=>'VimServiceStub\AddStandaloneHostTaskResponse'
,'CreateDatacenterResponse'=>'VimServiceStub\CreateDatacenterResponse'
,'UnregisterAndDestroy_TaskResponse'=>'VimServiceStub\UnregisterAndDestroyTaskResponse'
,'CreateDVS_TaskResponse'=>'VimServiceStub\CreateDVSTaskResponse'
,'CreateStoragePodResponse'=>'VimServiceStub\CreateStoragePodResponse'
,'SetCollectorPageSizeResponse'=>'VimServiceStub\SetCollectorPageSizeResponse'
,'RewindCollectorResponse'=>'VimServiceStub\RewindCollectorResponse'
,'ResetCollectorResponse'=>'VimServiceStub\ResetCollectorResponse'
,'DestroyCollectorResponse'=>'VimServiceStub\DestroyCollectorResponse'
,'QueryHostConnectionInfoResponse'=>'VimServiceStub\QueryHostConnectionInfoResponse'
,'UpdateSystemResourcesResponse'=>'VimServiceStub\UpdateSystemResourcesResponse'
,'ReconnectHost_TaskResponse'=>'VimServiceStub\ReconnectHostTaskResponse'
,'DisconnectHost_TaskResponse'=>'VimServiceStub\DisconnectHostTaskResponse'
,'EnterMaintenanceMode_TaskResponse'=>'VimServiceStub\EnterMaintenanceModeTaskResponse'
,'ExitMaintenanceMode_TaskResponse'=>'VimServiceStub\ExitMaintenanceModeTaskResponse'
,'RebootHost_TaskResponse'=>'VimServiceStub\RebootHostTaskResponse'
,'ShutdownHost_TaskResponse'=>'VimServiceStub\ShutdownHostTaskResponse'
,'PowerDownHostToStandBy_TaskResponse'=>'VimServiceStub\PowerDownHostToStandByTaskResponse'
,'PowerUpHostFromStandBy_TaskResponse'=>'VimServiceStub\PowerUpHostFromStandByTaskResponse'
,'QueryMemoryOverheadResponse'=>'VimServiceStub\QueryMemoryOverheadResponse'
,'QueryMemoryOverheadExResponse'=>'VimServiceStub\QueryMemoryOverheadExResponse'
,'ReconfigureHostForDAS_TaskResponse'=>'VimServiceStub\ReconfigureHostForDASTaskResponse'
,'UpdateFlagsResponse'=>'VimServiceStub\UpdateFlagsResponse'
,'EnterLockdownModeResponse'=>'VimServiceStub\EnterLockdownModeResponse'
,'ExitLockdownModeResponse'=>'VimServiceStub\ExitLockdownModeResponse'
,'AcquireCimServicesTicketResponse'=>'VimServiceStub\AcquireCimServicesTicketResponse'
,'UpdateIpmiResponse'=>'VimServiceStub\UpdateIpmiResponse'
,'RetrieveHardwareUptimeResponse'=>'VimServiceStub\RetrieveHardwareUptimeResponse'
,'HttpNfcLeaseGetManifestResponse'=>'VimServiceStub\HttpNfcLeaseGetManifestResponse'
,'HttpNfcLeaseCompleteResponse'=>'VimServiceStub\HttpNfcLeaseCompleteResponse'
,'HttpNfcLeaseAbortResponse'=>'VimServiceStub\HttpNfcLeaseAbortResponse'
,'HttpNfcLeaseProgressResponse'=>'VimServiceStub\HttpNfcLeaseProgressResponse'
,'QueryIpPoolsResponse'=>'VimServiceStub\QueryIpPoolsResponse'
,'CreateIpPoolResponse'=>'VimServiceStub\CreateIpPoolResponse'
,'UpdateIpPoolResponse'=>'VimServiceStub\UpdateIpPoolResponse'
,'DestroyIpPoolResponse'=>'VimServiceStub\DestroyIpPoolResponse'
,'UpdateAssignedLicenseResponse'=>'VimServiceStub\UpdateAssignedLicenseResponse'
,'RemoveAssignedLicenseResponse'=>'VimServiceStub\RemoveAssignedLicenseResponse'
,'QueryAssignedLicensesResponse'=>'VimServiceStub\QueryAssignedLicensesResponse'
,'QuerySupportedFeaturesResponse'=>'VimServiceStub\QuerySupportedFeaturesResponse'
,'QueryLicenseSourceAvailabilityResponse'=>'VimServiceStub\QueryLicenseSourceAvailabilityResponse'
,'QueryLicenseUsageResponse'=>'VimServiceStub\QueryLicenseUsageResponse'
,'SetLicenseEditionResponse'=>'VimServiceStub\SetLicenseEditionResponse'
,'CheckLicenseFeatureResponse'=>'VimServiceStub\CheckLicenseFeatureResponse'
,'EnableFeatureResponse'=>'VimServiceStub\EnableFeatureResponse'
,'DisableFeatureResponse'=>'VimServiceStub\DisableFeatureResponse'
,'ConfigureLicenseSourceResponse'=>'VimServiceStub\ConfigureLicenseSourceResponse'
,'UpdateLicenseResponse'=>'VimServiceStub\UpdateLicenseResponse'
,'AddLicenseResponse'=>'VimServiceStub\AddLicenseResponse'
,'RemoveLicenseResponse'=>'VimServiceStub\RemoveLicenseResponse'
,'DecodeLicenseResponse'=>'VimServiceStub\DecodeLicenseResponse'
,'UpdateLicenseLabelResponse'=>'VimServiceStub\UpdateLicenseLabelResponse'
,'RemoveLicenseLabelResponse'=>'VimServiceStub\RemoveLicenseLabelResponse'
,'ReloadResponse'=>'VimServiceStub\ReloadResponse'
,'Rename_TaskResponse'=>'VimServiceStub\RenameTaskResponse'
,'Destroy_TaskResponse'=>'VimServiceStub\DestroyTaskResponse'
,'DestroyNetworkResponse'=>'VimServiceStub\DestroyNetworkResponse'
,'ValidateHostResponse'=>'VimServiceStub\ValidateHostResponse'
,'ParseDescriptorResponse'=>'VimServiceStub\ParseDescriptorResponse'
,'CreateImportSpecResponse'=>'VimServiceStub\CreateImportSpecResponse'
,'CreateDescriptorResponse'=>'VimServiceStub\CreateDescriptorResponse'
,'QueryPerfProviderSummaryResponse'=>'VimServiceStub\QueryPerfProviderSummaryResponse'
,'QueryAvailablePerfMetricResponse'=>'VimServiceStub\QueryAvailablePerfMetricResponse'
,'QueryPerfCounterResponse'=>'VimServiceStub\QueryPerfCounterResponse'
,'QueryPerfCounterByLevelResponse'=>'VimServiceStub\QueryPerfCounterByLevelResponse'
,'QueryPerfResponse'=>'VimServiceStub\QueryPerfResponse'
,'QueryPerfCompositeResponse'=>'VimServiceStub\QueryPerfCompositeResponse'
,'CreatePerfIntervalResponse'=>'VimServiceStub\CreatePerfIntervalResponse'
,'RemovePerfIntervalResponse'=>'VimServiceStub\RemovePerfIntervalResponse'
,'UpdatePerfIntervalResponse'=>'VimServiceStub\UpdatePerfIntervalResponse'
,'UpdateCounterLevelMappingResponse'=>'VimServiceStub\UpdateCounterLevelMappingResponse'
,'ResetCounterLevelMappingResponse'=>'VimServiceStub\ResetCounterLevelMappingResponse'
,'EstimateDatabaseSizeResponse'=>'VimServiceStub\EstimateDatabaseSizeResponse'
,'UpdateConfigResponse'=>'VimServiceStub\UpdateConfigResponse'
,'MoveIntoResourcePoolResponse'=>'VimServiceStub\MoveIntoResourcePoolResponse'
,'UpdateChildResourceConfigurationResponse'=>'VimServiceStub\UpdateChildResourceConfigurationResponse'
,'CreateResourcePoolResponse'=>'VimServiceStub\CreateResourcePoolResponse'
,'DestroyChildrenResponse'=>'VimServiceStub\DestroyChildrenResponse'
,'CreateVAppResponse'=>'VimServiceStub\CreateVAppResponse'
,'CreateChildVM_TaskResponse'=>'VimServiceStub\CreateChildVMTaskResponse'
,'RegisterChildVM_TaskResponse'=>'VimServiceStub\RegisterChildVMTaskResponse'
,'ImportVAppResponse'=>'VimServiceStub\ImportVAppResponse'
,'QueryResourceConfigOptionResponse'=>'VimServiceStub\QueryResourceConfigOptionResponse'
,'RefreshRuntimeResponse'=>'VimServiceStub\RefreshRuntimeResponse'
,'FindByUuidResponse'=>'VimServiceStub\FindByUuidResponse'
,'FindByDatastorePathResponse'=>'VimServiceStub\FindByDatastorePathResponse'
,'FindByDnsNameResponse'=>'VimServiceStub\FindByDnsNameResponse'
,'FindByIpResponse'=>'VimServiceStub\FindByIpResponse'
,'FindByInventoryPathResponse'=>'VimServiceStub\FindByInventoryPathResponse'
,'FindChildResponse'=>'VimServiceStub\FindChildResponse'
,'FindAllByUuidResponse'=>'VimServiceStub\FindAllByUuidResponse'
,'FindAllByDnsNameResponse'=>'VimServiceStub\FindAllByDnsNameResponse'
,'FindAllByIpResponse'=>'VimServiceStub\FindAllByIpResponse'
,'CurrentTimeResponse'=>'VimServiceStub\CurrentTimeResponse'
,'RetrieveServiceContentResponse'=>'VimServiceStub\RetrieveServiceContentResponse'
,'ValidateMigrationResponse'=>'VimServiceStub\ValidateMigrationResponse'
,'QueryVMotionCompatibilityResponse'=>'VimServiceStub\QueryVMotionCompatibilityResponse'
,'RetrieveProductComponentsResponse'=>'VimServiceStub\RetrieveProductComponentsResponse'
,'UpdateServiceMessageResponse'=>'VimServiceStub\UpdateServiceMessageResponse'
,'LoginResponse'=>'VimServiceStub\LoginResponse'
,'LoginBySSPIResponse'=>'VimServiceStub\LoginBySSPIResponse'
,'LogoutResponse'=>'VimServiceStub\LogoutResponse'
,'AcquireLocalTicketResponse'=>'VimServiceStub\AcquireLocalTicketResponse'
,'AcquireGenericServiceTicketResponse'=>'VimServiceStub\AcquireGenericServiceTicketResponse'
,'TerminateSessionResponse'=>'VimServiceStub\TerminateSessionResponse'
,'SetLocaleResponse'=>'VimServiceStub\SetLocaleResponse'
,'LoginExtensionBySubjectNameResponse'=>'VimServiceStub\LoginExtensionBySubjectNameResponse'
,'LoginExtensionByCertificateResponse'=>'VimServiceStub\LoginExtensionByCertificateResponse'
,'ImpersonateUserResponse'=>'VimServiceStub\ImpersonateUserResponse'
,'SessionIsActiveResponse'=>'VimServiceStub\SessionIsActiveResponse'
,'AcquireCloneTicketResponse'=>'VimServiceStub\AcquireCloneTicketResponse'
,'CloneSessionResponse'=>'VimServiceStub\CloneSessionResponse'
,'ConfigureDatastoreIORM_TaskResponse'=>'VimServiceStub\ConfigureDatastoreIORMTaskResponse'
,'QueryIORMConfigOptionResponse'=>'VimServiceStub\QueryIORMConfigOptionResponse'
,'ApplyStorageDrsRecommendationToPod_TaskResponse'=>'VimServiceStub\ApplyStorageDrsRecommendationToPodTaskResponse'
,'ApplyStorageDrsRecommendation_TaskResponse'=>'VimServiceStub\ApplyStorageDrsRecommendationTaskResponse'
,'CancelStorageDrsRecommendationResponse'=>'VimServiceStub\CancelStorageDrsRecommendationResponse'
,'RefreshStorageDrsRecommendationResponse'=>'VimServiceStub\RefreshStorageDrsRecommendationResponse'
,'ConfigureStorageDrsForPod_TaskResponse'=>'VimServiceStub\ConfigureStorageDrsForPodTaskResponse'
,'RecommendDatastoresResponse'=>'VimServiceStub\RecommendDatastoresResponse'
,'CancelTaskResponse'=>'VimServiceStub\CancelTaskResponse'
,'UpdateProgressResponse'=>'VimServiceStub\UpdateProgressResponse'
,'SetTaskStateResponse'=>'VimServiceStub\SetTaskStateResponse'
,'SetTaskDescriptionResponse'=>'VimServiceStub\SetTaskDescriptionResponse'
,'ReadNextTasksResponse'=>'VimServiceStub\ReadNextTasksResponse'
,'ReadPreviousTasksResponse'=>'VimServiceStub\ReadPreviousTasksResponse'
,'CreateCollectorForTasksResponse'=>'VimServiceStub\CreateCollectorForTasksResponse'
,'CreateTaskResponse'=>'VimServiceStub\CreateTaskResponse'
,'RetrieveUserGroupsResponse'=>'VimServiceStub\RetrieveUserGroupsResponse'
,'UpdateVAppConfigResponse'=>'VimServiceStub\UpdateVAppConfigResponse'
,'UpdateLinkedChildrenResponse'=>'VimServiceStub\UpdateLinkedChildrenResponse'
,'CloneVApp_TaskResponse'=>'VimServiceStub\CloneVAppTaskResponse'
,'ExportVAppResponse'=>'VimServiceStub\ExportVAppResponse'
,'PowerOnVApp_TaskResponse'=>'VimServiceStub\PowerOnVAppTaskResponse'
,'PowerOffVApp_TaskResponse'=>'VimServiceStub\PowerOffVAppTaskResponse'
,'SuspendVApp_TaskResponse'=>'VimServiceStub\SuspendVAppTaskResponse'
,'unregisterVApp_TaskResponse'=>'VimServiceStub\unregisterVAppTaskResponse'
,'CreateVirtualDisk_TaskResponse'=>'VimServiceStub\CreateVirtualDiskTaskResponse'
,'DeleteVirtualDisk_TaskResponse'=>'VimServiceStub\DeleteVirtualDiskTaskResponse'
,'MoveVirtualDisk_TaskResponse'=>'VimServiceStub\MoveVirtualDiskTaskResponse'
,'CopyVirtualDisk_TaskResponse'=>'VimServiceStub\CopyVirtualDiskTaskResponse'
,'ExtendVirtualDisk_TaskResponse'=>'VimServiceStub\ExtendVirtualDiskTaskResponse'
,'QueryVirtualDiskFragmentationResponse'=>'VimServiceStub\QueryVirtualDiskFragmentationResponse'
,'DefragmentVirtualDisk_TaskResponse'=>'VimServiceStub\DefragmentVirtualDiskTaskResponse'
,'ShrinkVirtualDisk_TaskResponse'=>'VimServiceStub\ShrinkVirtualDiskTaskResponse'
,'InflateVirtualDisk_TaskResponse'=>'VimServiceStub\InflateVirtualDiskTaskResponse'
,'EagerZeroVirtualDisk_TaskResponse'=>'VimServiceStub\EagerZeroVirtualDiskTaskResponse'
,'ZeroFillVirtualDisk_TaskResponse'=>'VimServiceStub\ZeroFillVirtualDiskTaskResponse'
,'SetVirtualDiskUuidResponse'=>'VimServiceStub\SetVirtualDiskUuidResponse'
,'QueryVirtualDiskUuidResponse'=>'VimServiceStub\QueryVirtualDiskUuidResponse'
,'QueryVirtualDiskGeometryResponse'=>'VimServiceStub\QueryVirtualDiskGeometryResponse'
,'RefreshStorageInfoResponse'=>'VimServiceStub\RefreshStorageInfoResponse'
,'CreateSnapshot_TaskResponse'=>'VimServiceStub\CreateSnapshotTaskResponse'
,'RevertToCurrentSnapshot_TaskResponse'=>'VimServiceStub\RevertToCurrentSnapshotTaskResponse'
,'RemoveAllSnapshots_TaskResponse'=>'VimServiceStub\RemoveAllSnapshotsTaskResponse'
,'ConsolidateVMDisks_TaskResponse'=>'VimServiceStub\ConsolidateVMDisksTaskResponse'
,'EstimateStorageForConsolidateSnapshots_TaskResponse'=>'VimServiceStub\EstimateStorageForConsolidateSnapshotsTaskResponse'
,'ReconfigVM_TaskResponse'=>'VimServiceStub\ReconfigVMTaskResponse'
,'UpgradeVM_TaskResponse'=>'VimServiceStub\UpgradeVMTaskResponse'
,'ExtractOvfEnvironmentResponse'=>'VimServiceStub\ExtractOvfEnvironmentResponse'
,'PowerOnVM_TaskResponse'=>'VimServiceStub\PowerOnVMTaskResponse'
,'PowerOffVM_TaskResponse'=>'VimServiceStub\PowerOffVMTaskResponse'
,'SuspendVM_TaskResponse'=>'VimServiceStub\SuspendVMTaskResponse'
,'ResetVM_TaskResponse'=>'VimServiceStub\ResetVMTaskResponse'
,'ShutdownGuestResponse'=>'VimServiceStub\ShutdownGuestResponse'
,'RebootGuestResponse'=>'VimServiceStub\RebootGuestResponse'
,'StandbyGuestResponse'=>'VimServiceStub\StandbyGuestResponse'
,'AnswerVMResponse'=>'VimServiceStub\AnswerVMResponse'
,'CustomizeVM_TaskResponse'=>'VimServiceStub\CustomizeVMTaskResponse'
,'CheckCustomizationSpecResponse'=>'VimServiceStub\CheckCustomizationSpecResponse'
,'MigrateVM_TaskResponse'=>'VimServiceStub\MigrateVMTaskResponse'
,'RelocateVM_TaskResponse'=>'VimServiceStub\RelocateVMTaskResponse'
,'CloneVM_TaskResponse'=>'VimServiceStub\CloneVMTaskResponse'
,'ExportVmResponse'=>'VimServiceStub\ExportVmResponse'
,'MarkAsTemplateResponse'=>'VimServiceStub\MarkAsTemplateResponse'
,'MarkAsVirtualMachineResponse'=>'VimServiceStub\MarkAsVirtualMachineResponse'
,'UnregisterVMResponse'=>'VimServiceStub\UnregisterVMResponse'
,'ResetGuestInformationResponse'=>'VimServiceStub\ResetGuestInformationResponse'
,'MountToolsInstallerResponse'=>'VimServiceStub\MountToolsInstallerResponse'
,'UnmountToolsInstallerResponse'=>'VimServiceStub\UnmountToolsInstallerResponse'
,'UpgradeTools_TaskResponse'=>'VimServiceStub\UpgradeToolsTaskResponse'
,'AcquireMksTicketResponse'=>'VimServiceStub\AcquireMksTicketResponse'
,'AcquireTicketResponse'=>'VimServiceStub\AcquireTicketResponse'
,'SetScreenResolutionResponse'=>'VimServiceStub\SetScreenResolutionResponse'
,'DefragmentAllDisksResponse'=>'VimServiceStub\DefragmentAllDisksResponse'
,'CreateSecondaryVM_TaskResponse'=>'VimServiceStub\CreateSecondaryVMTaskResponse'
,'TurnOffFaultToleranceForVM_TaskResponse'=>'VimServiceStub\TurnOffFaultToleranceForVMTaskResponse'
,'MakePrimaryVM_TaskResponse'=>'VimServiceStub\MakePrimaryVMTaskResponse'
,'TerminateFaultTolerantVM_TaskResponse'=>'VimServiceStub\TerminateFaultTolerantVMTaskResponse'
,'DisableSecondaryVM_TaskResponse'=>'VimServiceStub\DisableSecondaryVMTaskResponse'
,'EnableSecondaryVM_TaskResponse'=>'VimServiceStub\EnableSecondaryVMTaskResponse'
,'SetDisplayTopologyResponse'=>'VimServiceStub\SetDisplayTopologyResponse'
,'StartRecording_TaskResponse'=>'VimServiceStub\StartRecordingTaskResponse'
,'StopRecording_TaskResponse'=>'VimServiceStub\StopRecordingTaskResponse'
,'StartReplaying_TaskResponse'=>'VimServiceStub\StartReplayingTaskResponse'
,'StopReplaying_TaskResponse'=>'VimServiceStub\StopReplayingTaskResponse'
,'PromoteDisks_TaskResponse'=>'VimServiceStub\PromoteDisksTaskResponse'
,'CreateScreenshot_TaskResponse'=>'VimServiceStub\CreateScreenshotTaskResponse'
,'QueryChangedDiskAreasResponse'=>'VimServiceStub\QueryChangedDiskAreasResponse'
,'QueryUnownedFilesResponse'=>'VimServiceStub\QueryUnownedFilesResponse'
,'reloadVirtualMachineFromPath_TaskResponse'=>'VimServiceStub\reloadVirtualMachineFromPathTaskResponse'
,'QueryFaultToleranceCompatibilityResponse'=>'VimServiceStub\QueryFaultToleranceCompatibilityResponse'
,'RemoveAlarmResponse'=>'VimServiceStub\RemoveAlarmResponse'
,'ReconfigureAlarmResponse'=>'VimServiceStub\ReconfigureAlarmResponse'
,'CreateAlarmResponse'=>'VimServiceStub\CreateAlarmResponse'
,'GetAlarmResponse'=>'VimServiceStub\GetAlarmResponse'
,'AreAlarmActionsEnabledResponse'=>'VimServiceStub\AreAlarmActionsEnabledResponse'
,'EnableAlarmActionsResponse'=>'VimServiceStub\EnableAlarmActionsResponse'
,'GetAlarmStateResponse'=>'VimServiceStub\GetAlarmStateResponse'
,'AcknowledgeAlarmResponse'=>'VimServiceStub\AcknowledgeAlarmResponse'
,'ReconfigureDVPortgroup_TaskResponse'=>'VimServiceStub\ReconfigureDVPortgroupTaskResponse'
,'QueryAvailableDvsSpecResponse'=>'VimServiceStub\QueryAvailableDvsSpecResponse'
,'QueryCompatibleHostForNewDvsResponse'=>'VimServiceStub\QueryCompatibleHostForNewDvsResponse'
,'QueryCompatibleHostForExistingDvsResponse'=>'VimServiceStub\QueryCompatibleHostForExistingDvsResponse'
,'QueryDvsCompatibleHostSpecResponse'=>'VimServiceStub\QueryDvsCompatibleHostSpecResponse'
,'QueryDvsFeatureCapabilityResponse'=>'VimServiceStub\QueryDvsFeatureCapabilityResponse'
,'QueryDvsByUuidResponse'=>'VimServiceStub\QueryDvsByUuidResponse'
,'QueryDvsConfigTargetResponse'=>'VimServiceStub\QueryDvsConfigTargetResponse'
,'QueryDvsCheckCompatibilityResponse'=>'VimServiceStub\QueryDvsCheckCompatibilityResponse'
,'RectifyDvsOnHost_TaskResponse'=>'VimServiceStub\RectifyDvsOnHostTaskResponse'
,'ReadNextEventsResponse'=>'VimServiceStub\ReadNextEventsResponse'
,'ReadPreviousEventsResponse'=>'VimServiceStub\ReadPreviousEventsResponse'
,'RetrieveArgumentDescriptionResponse'=>'VimServiceStub\RetrieveArgumentDescriptionResponse'
,'CreateCollectorForEventsResponse'=>'VimServiceStub\CreateCollectorForEventsResponse'
,'LogUserEventResponse'=>'VimServiceStub\LogUserEventResponse'
,'QueryEventsResponse'=>'VimServiceStub\QueryEventsResponse'
,'PostEventResponse'=>'VimServiceStub\PostEventResponse'
,'JoinDomain_TaskResponse'=>'VimServiceStub\JoinDomainTaskResponse'
,'JoinDomainWithCAM_TaskResponse'=>'VimServiceStub\JoinDomainWithCAMTaskResponse'
,'ImportCertificateForCAM_TaskResponse'=>'VimServiceStub\ImportCertificateForCAMTaskResponse'
,'LeaveCurrentDomain_TaskResponse'=>'VimServiceStub\LeaveCurrentDomainTaskResponse'
,'ReconfigureAutostartResponse'=>'VimServiceStub\ReconfigureAutostartResponse'
,'AutoStartPowerOnResponse'=>'VimServiceStub\AutoStartPowerOnResponse'
,'AutoStartPowerOffResponse'=>'VimServiceStub\AutoStartPowerOffResponse'
,'QueryBootDevicesResponse'=>'VimServiceStub\QueryBootDevicesResponse'
,'UpdateBootDeviceResponse'=>'VimServiceStub\UpdateBootDeviceResponse'
,'ConfigureHostCache_TaskResponse'=>'VimServiceStub\ConfigureHostCacheTaskResponse'
,'EnableHyperThreadingResponse'=>'VimServiceStub\EnableHyperThreadingResponse'
,'DisableHyperThreadingResponse'=>'VimServiceStub\DisableHyperThreadingResponse'
,'SearchDatastore_TaskResponse'=>'VimServiceStub\SearchDatastoreTaskResponse'
,'SearchDatastoreSubFolders_TaskResponse'=>'VimServiceStub\SearchDatastoreSubFoldersTaskResponse'
,'DeleteFileResponse'=>'VimServiceStub\DeleteFileResponse'
,'UpdateLocalSwapDatastoreResponse'=>'VimServiceStub\UpdateLocalSwapDatastoreResponse'
,'QueryAvailableDisksForVmfsResponse'=>'VimServiceStub\QueryAvailableDisksForVmfsResponse'
,'QueryVmfsDatastoreCreateOptionsResponse'=>'VimServiceStub\QueryVmfsDatastoreCreateOptionsResponse'
,'CreateVmfsDatastoreResponse'=>'VimServiceStub\CreateVmfsDatastoreResponse'
,'QueryVmfsDatastoreExtendOptionsResponse'=>'VimServiceStub\QueryVmfsDatastoreExtendOptionsResponse'
,'QueryVmfsDatastoreExpandOptionsResponse'=>'VimServiceStub\QueryVmfsDatastoreExpandOptionsResponse'
,'ExtendVmfsDatastoreResponse'=>'VimServiceStub\ExtendVmfsDatastoreResponse'
,'ExpandVmfsDatastoreResponse'=>'VimServiceStub\ExpandVmfsDatastoreResponse'
,'CreateNasDatastoreResponse'=>'VimServiceStub\CreateNasDatastoreResponse'
,'CreateLocalDatastoreResponse'=>'VimServiceStub\CreateLocalDatastoreResponse'
,'RemoveDatastoreResponse'=>'VimServiceStub\RemoveDatastoreResponse'
,'ConfigureDatastorePrincipalResponse'=>'VimServiceStub\ConfigureDatastorePrincipalResponse'
,'QueryUnresolvedVmfsVolumesResponse'=>'VimServiceStub\QueryUnresolvedVmfsVolumesResponse'
,'ResignatureUnresolvedVmfsVolume_TaskResponse'=>'VimServiceStub\ResignatureUnresolvedVmfsVolumeTaskResponse'
,'UpdateDateTimeConfigResponse'=>'VimServiceStub\UpdateDateTimeConfigResponse'
,'QueryAvailableTimeZonesResponse'=>'VimServiceStub\QueryAvailableTimeZonesResponse'
,'QueryDateTimeResponse'=>'VimServiceStub\QueryDateTimeResponse'
,'UpdateDateTimeResponse'=>'VimServiceStub\UpdateDateTimeResponse'
,'RefreshDateTimeSystemResponse'=>'VimServiceStub\RefreshDateTimeSystemResponse'
,'QueryAvailablePartitionResponse'=>'VimServiceStub\QueryAvailablePartitionResponse'
,'SelectActivePartitionResponse'=>'VimServiceStub\SelectActivePartitionResponse'
,'QueryPartitionCreateOptionsResponse'=>'VimServiceStub\QueryPartitionCreateOptionsResponse'
,'QueryPartitionCreateDescResponse'=>'VimServiceStub\QueryPartitionCreateDescResponse'
,'CreateDiagnosticPartitionResponse'=>'VimServiceStub\CreateDiagnosticPartitionResponse'
,'EsxAgentHostManagerUpdateConfigResponse'=>'VimServiceStub\EsxAgentHostManagerUpdateConfigResponse'
,'UpdateDefaultPolicyResponse'=>'VimServiceStub\UpdateDefaultPolicyResponse'
,'EnableRulesetResponse'=>'VimServiceStub\EnableRulesetResponse'
,'DisableRulesetResponse'=>'VimServiceStub\DisableRulesetResponse'
,'UpdateRulesetResponse'=>'VimServiceStub\UpdateRulesetResponse'
,'RefreshFirewallResponse'=>'VimServiceStub\RefreshFirewallResponse'
,'ResetFirmwareToFactoryDefaultsResponse'=>'VimServiceStub\ResetFirmwareToFactoryDefaultsResponse'
,'BackupFirmwareConfigurationResponse'=>'VimServiceStub\BackupFirmwareConfigurationResponse'
,'QueryFirmwareConfigUploadURLResponse'=>'VimServiceStub\QueryFirmwareConfigUploadURLResponse'
,'RestoreFirmwareConfigurationResponse'=>'VimServiceStub\RestoreFirmwareConfigurationResponse'
,'RefreshHealthStatusSystemResponse'=>'VimServiceStub\RefreshHealthStatusSystemResponse'
,'ResetSystemHealthInfoResponse'=>'VimServiceStub\ResetSystemHealthInfoResponse'
,'HostImageConfigGetAcceptanceResponse'=>'VimServiceStub\HostImageConfigGetAcceptanceResponse'
,'HostImageConfigGetProfileResponse'=>'VimServiceStub\HostImageConfigGetProfileResponse'
,'UpdateHostImageAcceptanceLevelResponse'=>'VimServiceStub\UpdateHostImageAcceptanceLevelResponse'
,'QueryVnicStatusResponse'=>'VimServiceStub\QueryVnicStatusResponse'
,'QueryPnicStatusResponse'=>'VimServiceStub\QueryPnicStatusResponse'
,'QueryBoundVnicsResponse'=>'VimServiceStub\QueryBoundVnicsResponse'
,'QueryCandidateNicsResponse'=>'VimServiceStub\QueryCandidateNicsResponse'
,'BindVnicResponse'=>'VimServiceStub\BindVnicResponse'
,'UnbindVnicResponse'=>'VimServiceStub\UnbindVnicResponse'
,'QueryMigrationDependenciesResponse'=>'VimServiceStub\QueryMigrationDependenciesResponse'
,'QueryModulesResponse'=>'VimServiceStub\QueryModulesResponse'
,'UpdateModuleOptionStringResponse'=>'VimServiceStub\UpdateModuleOptionStringResponse'
,'QueryConfiguredModuleOptionStringResponse'=>'VimServiceStub\QueryConfiguredModuleOptionStringResponse'
,'CreateUserResponse'=>'VimServiceStub\CreateUserResponse'
,'UpdateUserResponse'=>'VimServiceStub\UpdateUserResponse'
,'CreateGroupResponse'=>'VimServiceStub\CreateGroupResponse'
,'RemoveUserResponse'=>'VimServiceStub\RemoveUserResponse'
,'RemoveGroupResponse'=>'VimServiceStub\RemoveGroupResponse'
,'AssignUserToGroupResponse'=>'VimServiceStub\AssignUserToGroupResponse'
,'UnassignUserFromGroupResponse'=>'VimServiceStub\UnassignUserFromGroupResponse'
,'ReconfigureServiceConsoleReservationResponse'=>'VimServiceStub\ReconfigureServiceConsoleReservationResponse'
,'ReconfigureVirtualMachineReservationResponse'=>'VimServiceStub\ReconfigureVirtualMachineReservationResponse'
,'UpdateNetworkConfigResponse'=>'VimServiceStub\UpdateNetworkConfigResponse'
,'UpdateDnsConfigResponse'=>'VimServiceStub\UpdateDnsConfigResponse'
,'UpdateIpRouteConfigResponse'=>'VimServiceStub\UpdateIpRouteConfigResponse'
,'UpdateConsoleIpRouteConfigResponse'=>'VimServiceStub\UpdateConsoleIpRouteConfigResponse'
,'UpdateIpRouteTableConfigResponse'=>'VimServiceStub\UpdateIpRouteTableConfigResponse'
,'AddVirtualSwitchResponse'=>'VimServiceStub\AddVirtualSwitchResponse'
,'RemoveVirtualSwitchResponse'=>'VimServiceStub\RemoveVirtualSwitchResponse'
,'UpdateVirtualSwitchResponse'=>'VimServiceStub\UpdateVirtualSwitchResponse'
,'AddPortGroupResponse'=>'VimServiceStub\AddPortGroupResponse'
,'RemovePortGroupResponse'=>'VimServiceStub\RemovePortGroupResponse'
,'UpdatePortGroupResponse'=>'VimServiceStub\UpdatePortGroupResponse'
,'UpdatePhysicalNicLinkSpeedResponse'=>'VimServiceStub\UpdatePhysicalNicLinkSpeedResponse'
,'QueryNetworkHintResponse'=>'VimServiceStub\QueryNetworkHintResponse'
,'AddVirtualNicResponse'=>'VimServiceStub\AddVirtualNicResponse'
,'RemoveVirtualNicResponse'=>'VimServiceStub\RemoveVirtualNicResponse'
,'UpdateVirtualNicResponse'=>'VimServiceStub\UpdateVirtualNicResponse'
,'AddServiceConsoleVirtualNicResponse'=>'VimServiceStub\AddServiceConsoleVirtualNicResponse'
,'RemoveServiceConsoleVirtualNicResponse'=>'VimServiceStub\RemoveServiceConsoleVirtualNicResponse'
,'UpdateServiceConsoleVirtualNicResponse'=>'VimServiceStub\UpdateServiceConsoleVirtualNicResponse'
,'RestartServiceConsoleVirtualNicResponse'=>'VimServiceStub\RestartServiceConsoleVirtualNicResponse'
,'RefreshNetworkSystemResponse'=>'VimServiceStub\RefreshNetworkSystemResponse'
,'CheckHostPatch_TaskResponse'=>'VimServiceStub\CheckHostPatchTaskResponse'
,'ScanHostPatch_TaskResponse'=>'VimServiceStub\ScanHostPatchTaskResponse'
,'ScanHostPatchV2_TaskResponse'=>'VimServiceStub\ScanHostPatchV2TaskResponse'
,'StageHostPatch_TaskResponse'=>'VimServiceStub\StageHostPatchTaskResponse'
,'InstallHostPatch_TaskResponse'=>'VimServiceStub\InstallHostPatchTaskResponse'
,'InstallHostPatchV2_TaskResponse'=>'VimServiceStub\InstallHostPatchV2TaskResponse'
,'UninstallHostPatch_TaskResponse'=>'VimServiceStub\UninstallHostPatchTaskResponse'
,'QueryHostPatch_TaskResponse'=>'VimServiceStub\QueryHostPatchTaskResponse'
,'RefreshResponse'=>'VimServiceStub\RefreshResponse'
,'UpdatePassthruConfigResponse'=>'VimServiceStub\UpdatePassthruConfigResponse'
,'ConfigurePowerPolicyResponse'=>'VimServiceStub\ConfigurePowerPolicyResponse'
,'UpdateServicePolicyResponse'=>'VimServiceStub\UpdateServicePolicyResponse'
,'StartServiceResponse'=>'VimServiceStub\StartServiceResponse'
,'StopServiceResponse'=>'VimServiceStub\StopServiceResponse'
,'RestartServiceResponse'=>'VimServiceStub\RestartServiceResponse'
,'UninstallServiceResponse'=>'VimServiceStub\UninstallServiceResponse'
,'RefreshServicesResponse'=>'VimServiceStub\RefreshServicesResponse'
,'ReconfigureSnmpAgentResponse'=>'VimServiceStub\ReconfigureSnmpAgentResponse'
,'SendTestNotificationResponse'=>'VimServiceStub\SendTestNotificationResponse'
,'RetrieveDiskPartitionInfoResponse'=>'VimServiceStub\RetrieveDiskPartitionInfoResponse'
,'ComputeDiskPartitionInfoResponse'=>'VimServiceStub\ComputeDiskPartitionInfoResponse'
,'ComputeDiskPartitionInfoForResizeResponse'=>'VimServiceStub\ComputeDiskPartitionInfoForResizeResponse'
,'UpdateDiskPartitionsResponse'=>'VimServiceStub\UpdateDiskPartitionsResponse'
,'FormatVmfsResponse'=>'VimServiceStub\FormatVmfsResponse'
,'MountVmfsVolumeResponse'=>'VimServiceStub\MountVmfsVolumeResponse'
,'UnmountVmfsVolumeResponse'=>'VimServiceStub\UnmountVmfsVolumeResponse'
,'RescanVmfsResponse'=>'VimServiceStub\RescanVmfsResponse'
,'AttachVmfsExtentResponse'=>'VimServiceStub\AttachVmfsExtentResponse'
,'ExpandVmfsExtentResponse'=>'VimServiceStub\ExpandVmfsExtentResponse'
,'UpgradeVmfsResponse'=>'VimServiceStub\UpgradeVmfsResponse'
,'UpgradeVmLayoutResponse'=>'VimServiceStub\UpgradeVmLayoutResponse'
,'QueryUnresolvedVmfsVolumeResponse'=>'VimServiceStub\QueryUnresolvedVmfsVolumeResponse'
,'ResolveMultipleUnresolvedVmfsVolumesResponse'=>'VimServiceStub\ResolveMultipleUnresolvedVmfsVolumesResponse'
,'UnmountForceMountedVmfsVolumeResponse'=>'VimServiceStub\UnmountForceMountedVmfsVolumeResponse'
,'RescanHbaResponse'=>'VimServiceStub\RescanHbaResponse'
,'RescanAllHbaResponse'=>'VimServiceStub\RescanAllHbaResponse'
,'UpdateSoftwareInternetScsiEnabledResponse'=>'VimServiceStub\UpdateSoftwareInternetScsiEnabledResponse'
,'UpdateInternetScsiDiscoveryPropertiesResponse'=>'VimServiceStub\UpdateInternetScsiDiscoveryPropertiesResponse'
,'UpdateInternetScsiAuthenticationPropertiesResponse'=>'VimServiceStub\UpdateInternetScsiAuthenticationPropertiesResponse'
,'UpdateInternetScsiDigestPropertiesResponse'=>'VimServiceStub\UpdateInternetScsiDigestPropertiesResponse'
,'UpdateInternetScsiAdvancedOptionsResponse'=>'VimServiceStub\UpdateInternetScsiAdvancedOptionsResponse'
,'UpdateInternetScsiIPPropertiesResponse'=>'VimServiceStub\UpdateInternetScsiIPPropertiesResponse'
,'UpdateInternetScsiNameResponse'=>'VimServiceStub\UpdateInternetScsiNameResponse'
,'UpdateInternetScsiAliasResponse'=>'VimServiceStub\UpdateInternetScsiAliasResponse'
,'AddInternetScsiSendTargetsResponse'=>'VimServiceStub\AddInternetScsiSendTargetsResponse'
,'RemoveInternetScsiSendTargetsResponse'=>'VimServiceStub\RemoveInternetScsiSendTargetsResponse'
,'AddInternetScsiStaticTargetsResponse'=>'VimServiceStub\AddInternetScsiStaticTargetsResponse'
,'RemoveInternetScsiStaticTargetsResponse'=>'VimServiceStub\RemoveInternetScsiStaticTargetsResponse'
,'EnableMultipathPathResponse'=>'VimServiceStub\EnableMultipathPathResponse'
,'DisableMultipathPathResponse'=>'VimServiceStub\DisableMultipathPathResponse'
,'SetMultipathLunPolicyResponse'=>'VimServiceStub\SetMultipathLunPolicyResponse'
,'QueryPathSelectionPolicyOptionsResponse'=>'VimServiceStub\QueryPathSelectionPolicyOptionsResponse'
,'QueryStorageArrayTypePolicyOptionsResponse'=>'VimServiceStub\QueryStorageArrayTypePolicyOptionsResponse'
,'UpdateScsiLunDisplayNameResponse'=>'VimServiceStub\UpdateScsiLunDisplayNameResponse'
,'DetachScsiLunResponse'=>'VimServiceStub\DetachScsiLunResponse'
,'AttachScsiLunResponse'=>'VimServiceStub\AttachScsiLunResponse'
,'RefreshStorageSystemResponse'=>'VimServiceStub\RefreshStorageSystemResponse'
,'DiscoverFcoeHbasResponse'=>'VimServiceStub\DiscoverFcoeHbasResponse'
,'MarkForRemovalResponse'=>'VimServiceStub\MarkForRemovalResponse'
,'UpdateIpConfigResponse'=>'VimServiceStub\UpdateIpConfigResponse'
,'SelectVnicResponse'=>'VimServiceStub\SelectVnicResponse'
,'DeselectVnicResponse'=>'VimServiceStub\DeselectVnicResponse'
,'QueryNetConfigResponse'=>'VimServiceStub\QueryNetConfigResponse'
,'SelectVnicForNicTypeResponse'=>'VimServiceStub\SelectVnicForNicTypeResponse'
,'DeselectVnicForNicTypeResponse'=>'VimServiceStub\DeselectVnicForNicTypeResponse'
,'QueryOptionsResponse'=>'VimServiceStub\QueryOptionsResponse'
,'UpdateOptionsResponse'=>'VimServiceStub\UpdateOptionsResponse'
,'CheckCompliance_TaskResponse'=>'VimServiceStub\CheckComplianceTaskResponse'
,'QueryComplianceStatusResponse'=>'VimServiceStub\QueryComplianceStatusResponse'
,'ClearComplianceStatusResponse'=>'VimServiceStub\ClearComplianceStatusResponse'
,'QueryExpressionMetadataResponse'=>'VimServiceStub\QueryExpressionMetadataResponse'
,'RetrieveDescriptionResponse'=>'VimServiceStub\RetrieveDescriptionResponse'
,'DestroyProfileResponse'=>'VimServiceStub\DestroyProfileResponse'
,'AssociateProfileResponse'=>'VimServiceStub\AssociateProfileResponse'
,'DissociateProfileResponse'=>'VimServiceStub\DissociateProfileResponse'
,'CheckProfileCompliance_TaskResponse'=>'VimServiceStub\CheckProfileComplianceTaskResponse'
,'ExportProfileResponse'=>'VimServiceStub\ExportProfileResponse'
,'CreateProfileResponse'=>'VimServiceStub\CreateProfileResponse'
,'QueryPolicyMetadataResponse'=>'VimServiceStub\QueryPolicyMetadataResponse'
,'FindAssociatedProfileResponse'=>'VimServiceStub\FindAssociatedProfileResponse'
,'UpdateClusterProfileResponse'=>'VimServiceStub\UpdateClusterProfileResponse'
,'UpdateReferenceHostResponse'=>'VimServiceStub\UpdateReferenceHostResponse'
,'UpdateHostProfileResponse'=>'VimServiceStub\UpdateHostProfileResponse'
,'ExecuteHostProfileResponse'=>'VimServiceStub\ExecuteHostProfileResponse'
,'ApplyHostConfig_TaskResponse'=>'VimServiceStub\ApplyHostConfigTaskResponse'
,'GenerateConfigTaskListResponse'=>'VimServiceStub\GenerateConfigTaskListResponse'
,'QueryHostProfileMetadataResponse'=>'VimServiceStub\QueryHostProfileMetadataResponse'
,'QueryProfileStructureResponse'=>'VimServiceStub\QueryProfileStructureResponse'
,'CreateDefaultProfileResponse'=>'VimServiceStub\CreateDefaultProfileResponse'
,'UpdateAnswerFile_TaskResponse'=>'VimServiceStub\UpdateAnswerFileTaskResponse'
,'RetrieveAnswerFileResponse'=>'VimServiceStub\RetrieveAnswerFileResponse'
,'ExportAnswerFile_TaskResponse'=>'VimServiceStub\ExportAnswerFileTaskResponse'
,'CheckAnswerFileStatus_TaskResponse'=>'VimServiceStub\CheckAnswerFileStatusTaskResponse'
,'QueryAnswerFileStatusResponse'=>'VimServiceStub\QueryAnswerFileStatusResponse'
,'RemoveScheduledTaskResponse'=>'VimServiceStub\RemoveScheduledTaskResponse'
,'ReconfigureScheduledTaskResponse'=>'VimServiceStub\ReconfigureScheduledTaskResponse'
,'RunScheduledTaskResponse'=>'VimServiceStub\RunScheduledTaskResponse'
,'CreateScheduledTaskResponse'=>'VimServiceStub\CreateScheduledTaskResponse'
,'RetrieveEntityScheduledTaskResponse'=>'VimServiceStub\RetrieveEntityScheduledTaskResponse'
,'CreateObjectScheduledTaskResponse'=>'VimServiceStub\CreateObjectScheduledTaskResponse'
,'RetrieveObjectScheduledTaskResponse'=>'VimServiceStub\RetrieveObjectScheduledTaskResponse'
,'OpenInventoryViewFolderResponse'=>'VimServiceStub\OpenInventoryViewFolderResponse'
,'CloseInventoryViewFolderResponse'=>'VimServiceStub\CloseInventoryViewFolderResponse'
,'ModifyListViewResponse'=>'VimServiceStub\ModifyListViewResponse'
,'ResetListViewResponse'=>'VimServiceStub\ResetListViewResponse'
,'ResetListViewFromViewResponse'=>'VimServiceStub\ResetListViewFromViewResponse'
,'DestroyViewResponse'=>'VimServiceStub\DestroyViewResponse'
,'CreateInventoryViewResponse'=>'VimServiceStub\CreateInventoryViewResponse'
,'CreateContainerViewResponse'=>'VimServiceStub\CreateContainerViewResponse'
,'CreateListViewResponse'=>'VimServiceStub\CreateListViewResponse'
,'CreateListViewFromViewResponse'=>'VimServiceStub\CreateListViewFromViewResponse'
,'RevertToSnapshot_TaskResponse'=>'VimServiceStub\RevertToSnapshotTaskResponse'
,'RemoveSnapshot_TaskResponse'=>'VimServiceStub\RemoveSnapshotTaskResponse'
,'RenameSnapshotResponse'=>'VimServiceStub\RenameSnapshotResponse'
,'CheckCompatibility_TaskResponse'=>'VimServiceStub\CheckCompatibilityTaskResponse'
,'QueryVMotionCompatibilityEx_TaskResponse'=>'VimServiceStub\QueryVMotionCompatibilityExTaskResponse'
,'CheckMigrate_TaskResponse'=>'VimServiceStub\CheckMigrateTaskResponse'
,'CheckRelocate_TaskResponse'=>'VimServiceStub\CheckRelocateTaskResponse'
,'ValidateCredentialsInGuestResponse'=>'VimServiceStub\ValidateCredentialsInGuestResponse'
,'AcquireCredentialsInGuestResponse'=>'VimServiceStub\AcquireCredentialsInGuestResponse'
,'ReleaseCredentialsInGuestResponse'=>'VimServiceStub\ReleaseCredentialsInGuestResponse'
,'MakeDirectoryInGuestResponse'=>'VimServiceStub\MakeDirectoryInGuestResponse'
,'DeleteFileInGuestResponse'=>'VimServiceStub\DeleteFileInGuestResponse'
,'DeleteDirectoryInGuestResponse'=>'VimServiceStub\DeleteDirectoryInGuestResponse'
,'MoveDirectoryInGuestResponse'=>'VimServiceStub\MoveDirectoryInGuestResponse'
,'MoveFileInGuestResponse'=>'VimServiceStub\MoveFileInGuestResponse'
,'CreateTemporaryFileInGuestResponse'=>'VimServiceStub\CreateTemporaryFileInGuestResponse'
,'CreateTemporaryDirectoryInGuestResponse'=>'VimServiceStub\CreateTemporaryDirectoryInGuestResponse'
,'ListFilesInGuestResponse'=>'VimServiceStub\ListFilesInGuestResponse'
,'ChangeFileAttributesInGuestResponse'=>'VimServiceStub\ChangeFileAttributesInGuestResponse'
,'InitiateFileTransferFromGuestResponse'=>'VimServiceStub\InitiateFileTransferFromGuestResponse'
,'InitiateFileTransferToGuestResponse'=>'VimServiceStub\InitiateFileTransferToGuestResponse'
,'StartProgramInGuestResponse'=>'VimServiceStub\StartProgramInGuestResponse'
,'ListProcessesInGuestResponse'=>'VimServiceStub\ListProcessesInGuestResponse'
,'TerminateProcessInGuestResponse'=>'VimServiceStub\TerminateProcessInGuestResponse'
,'ReadEnvironmentVariableInGuestResponse'=>'VimServiceStub\ReadEnvironmentVariableInGuestResponse'
,'DestroyPropertyFilterResponse'=>'VimServiceStub\DestroyPropertyFilterResponse'
,'CreateFilterResponse'=>'VimServiceStub\CreateFilterResponse'
,'RetrievePropertiesResponse'=>'VimServiceStub\RetrievePropertiesResponse'
,'CheckForUpdatesResponse'=>'VimServiceStub\CheckForUpdatesResponse'
,'WaitForUpdatesResponse'=>'VimServiceStub\WaitForUpdatesResponse'
,'CancelWaitForUpdatesResponse'=>'VimServiceStub\CancelWaitForUpdatesResponse'
,'WaitForUpdatesExResponse'=>'VimServiceStub\WaitForUpdatesExResponse'
,'RetrievePropertiesExResponse'=>'VimServiceStub\RetrievePropertiesExResponse'
,'ContinueRetrievePropertiesExResponse'=>'VimServiceStub\ContinueRetrievePropertiesExResponse'
,'CancelRetrievePropertiesExResponse'=>'VimServiceStub\CancelRetrievePropertiesExResponse'
,'CreatePropertyCollectorResponse'=>'VimServiceStub\CreatePropertyCollectorResponse'
,'DestroyPropertyCollectorResponse'=>'VimServiceStub\DestroyPropertyCollectorResponse'

);

 function __construct($urlWSDL='https://10.66.18.60/sdk/vimService.wsdl', $urlService='https://10.66.18.60/sdk/vimService')
 {  
  $this->soapClient = new \SoapClient($urlWSDL,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true,"location" => $urlService));
  
 }
 
 function getCookies()
 {
 	return $this->soapClient->_cookies;
 }
 
 function setCookies($cookies)
 {
 	$this->soapClient->_cookies = $cookies; 
 }
 
 function getSessionId()
 {
 	$sessionId = NULL;
 	$cookies = $this->getCookies();
	
	if ( is_array($cookies) && array_key_exists('vmware_soap_session', $cookies))
	{
		$vmwareSoapSession = $cookies['vmware_soap_session'];
		
		if (is_array($vmwareSoapSession) && $vmwareSoapSession[0])
		{
			$sessionId = str_replace("\"", '', $vmwareSoapSession[0]);		
		}	
	}
	
 	return $sessionId;
 }
 
 
function DestroyPropertyFilter($DestroyPropertyFilterRequestType)
{

$DestroyPropertyFilterResponse = $this->soapClient->DestroyPropertyFilter($DestroyPropertyFilterRequestType);
return $DestroyPropertyFilterResponse;

}
function CreateFilter($CreateFilterRequestType)
{

$CreateFilterResponse = $this->soapClient->CreateFilter($CreateFilterRequestType);
return $CreateFilterResponse;

}
function RetrieveProperties($RetrievePropertiesRequestType)
{

$RetrievePropertiesResponse = $this->soapClient->RetrieveProperties($RetrievePropertiesRequestType);
return $RetrievePropertiesResponse;

}
function CheckForUpdates($CheckForUpdatesRequestType)
{

$CheckForUpdatesResponse = $this->soapClient->CheckForUpdates($CheckForUpdatesRequestType);
return $CheckForUpdatesResponse;

}
function WaitForUpdates($WaitForUpdatesRequestType)
{

$WaitForUpdatesResponse = $this->soapClient->WaitForUpdates($WaitForUpdatesRequestType);
return $WaitForUpdatesResponse;

}
function CancelWaitForUpdates($CancelWaitForUpdatesRequestType)
{

$CancelWaitForUpdatesResponse = $this->soapClient->CancelWaitForUpdates($CancelWaitForUpdatesRequestType);
return $CancelWaitForUpdatesResponse;

}
function WaitForUpdatesEx($WaitForUpdatesExRequestType)
{

$WaitForUpdatesExResponse = $this->soapClient->WaitForUpdatesEx($WaitForUpdatesExRequestType);
return $WaitForUpdatesExResponse;

}
function RetrievePropertiesEx($RetrievePropertiesExRequestType)
{

$RetrievePropertiesExResponse = $this->soapClient->RetrievePropertiesEx($RetrievePropertiesExRequestType);
return $RetrievePropertiesExResponse;

}
function ContinueRetrievePropertiesEx($ContinueRetrievePropertiesExRequestType)
{

$ContinueRetrievePropertiesExResponse = $this->soapClient->ContinueRetrievePropertiesEx($ContinueRetrievePropertiesExRequestType);
return $ContinueRetrievePropertiesExResponse;

}
function CancelRetrievePropertiesEx($CancelRetrievePropertiesExRequestType)
{

$CancelRetrievePropertiesExResponse = $this->soapClient->CancelRetrievePropertiesEx($CancelRetrievePropertiesExRequestType);
return $CancelRetrievePropertiesExResponse;

}
function CreatePropertyCollector($CreatePropertyCollectorRequestType)
{

$CreatePropertyCollectorResponse = $this->soapClient->CreatePropertyCollector($CreatePropertyCollectorRequestType);
return $CreatePropertyCollectorResponse;

}
function DestroyPropertyCollector($DestroyPropertyCollectorRequestType)
{

$DestroyPropertyCollectorResponse = $this->soapClient->DestroyPropertyCollector($DestroyPropertyCollectorRequestType);
return $DestroyPropertyCollectorResponse;

}
function AddAuthorizationRole($AddAuthorizationRoleRequestType)
{

$AddAuthorizationRoleResponse = $this->soapClient->AddAuthorizationRole($AddAuthorizationRoleRequestType);
return $AddAuthorizationRoleResponse;

}
function RemoveAuthorizationRole($RemoveAuthorizationRoleRequestType)
{

$RemoveAuthorizationRoleResponse = $this->soapClient->RemoveAuthorizationRole($RemoveAuthorizationRoleRequestType);
return $RemoveAuthorizationRoleResponse;

}
function UpdateAuthorizationRole($UpdateAuthorizationRoleRequestType)
{

$UpdateAuthorizationRoleResponse = $this->soapClient->UpdateAuthorizationRole($UpdateAuthorizationRoleRequestType);
return $UpdateAuthorizationRoleResponse;

}
function MergePermissions($MergePermissionsRequestType)
{

$MergePermissionsResponse = $this->soapClient->MergePermissions($MergePermissionsRequestType);
return $MergePermissionsResponse;

}
function RetrieveRolePermissions($RetrieveRolePermissionsRequestType)
{

$RetrieveRolePermissionsResponse = $this->soapClient->RetrieveRolePermissions($RetrieveRolePermissionsRequestType);
return $RetrieveRolePermissionsResponse;

}
function RetrieveEntityPermissions($RetrieveEntityPermissionsRequestType)
{

$RetrieveEntityPermissionsResponse = $this->soapClient->RetrieveEntityPermissions($RetrieveEntityPermissionsRequestType);
return $RetrieveEntityPermissionsResponse;

}
function RetrieveAllPermissions($RetrieveAllPermissionsRequestType)
{

$RetrieveAllPermissionsResponse = $this->soapClient->RetrieveAllPermissions($RetrieveAllPermissionsRequestType);
return $RetrieveAllPermissionsResponse;

}
function SetEntityPermissions($SetEntityPermissionsRequestType)
{

$SetEntityPermissionsResponse = $this->soapClient->SetEntityPermissions($SetEntityPermissionsRequestType);
return $SetEntityPermissionsResponse;

}
function ResetEntityPermissions($ResetEntityPermissionsRequestType)
{

$ResetEntityPermissionsResponse = $this->soapClient->ResetEntityPermissions($ResetEntityPermissionsRequestType);
return $ResetEntityPermissionsResponse;

}
function RemoveEntityPermission($RemoveEntityPermissionRequestType)
{

$RemoveEntityPermissionResponse = $this->soapClient->RemoveEntityPermission($RemoveEntityPermissionRequestType);
return $RemoveEntityPermissionResponse;

}
function HasPrivilegeOnEntity($HasPrivilegeOnEntityRequestType)
{

$HasPrivilegeOnEntityResponse = $this->soapClient->HasPrivilegeOnEntity($HasPrivilegeOnEntityRequestType);
return $HasPrivilegeOnEntityResponse;

}
function ReconfigureCluster_Task($ReconfigureClusterRequestType)
{

$ReconfigureCluster_TaskResponse = $this->soapClient->ReconfigureCluster_Task($ReconfigureClusterRequestType);
return $ReconfigureCluster_TaskResponse;

}
function ApplyRecommendation($ApplyRecommendationRequestType)
{

$ApplyRecommendationResponse = $this->soapClient->ApplyRecommendation($ApplyRecommendationRequestType);
return $ApplyRecommendationResponse;

}
function CancelRecommendation($CancelRecommendationRequestType)
{

$CancelRecommendationResponse = $this->soapClient->CancelRecommendation($CancelRecommendationRequestType);
return $CancelRecommendationResponse;

}
function RecommendHostsForVm($RecommendHostsForVmRequestType)
{

$RecommendHostsForVmResponse = $this->soapClient->RecommendHostsForVm($RecommendHostsForVmRequestType);
return $RecommendHostsForVmResponse;

}
function AddHost_Task($AddHostRequestType)
{

$AddHost_TaskResponse = $this->soapClient->AddHost_Task($AddHostRequestType);
return $AddHost_TaskResponse;

}
function MoveInto_Task($MoveIntoRequestType)
{

$MoveInto_TaskResponse = $this->soapClient->MoveInto_Task($MoveIntoRequestType);
return $MoveInto_TaskResponse;

}
function MoveHostInto_Task($MoveHostIntoRequestType)
{

$MoveHostInto_TaskResponse = $this->soapClient->MoveHostInto_Task($MoveHostIntoRequestType);
return $MoveHostInto_TaskResponse;

}
function RefreshRecommendation($RefreshRecommendationRequestType)
{

$RefreshRecommendationResponse = $this->soapClient->RefreshRecommendation($RefreshRecommendationRequestType);
return $RefreshRecommendationResponse;

}
function RetrieveDasAdvancedRuntimeInfo($RetrieveDasAdvancedRuntimeInfoRequestType)
{

$RetrieveDasAdvancedRuntimeInfoResponse = $this->soapClient->RetrieveDasAdvancedRuntimeInfo($RetrieveDasAdvancedRuntimeInfoRequestType);
return $RetrieveDasAdvancedRuntimeInfoResponse;

}
function ClusterEnterMaintenanceMode($ClusterEnterMaintenanceModeRequestType)
{

$ClusterEnterMaintenanceModeResponse = $this->soapClient->ClusterEnterMaintenanceMode($ClusterEnterMaintenanceModeRequestType);
return $ClusterEnterMaintenanceModeResponse;

}
function ReconfigureComputeResource_Task($ReconfigureComputeResourceRequestType)
{

$ReconfigureComputeResource_TaskResponse = $this->soapClient->ReconfigureComputeResource_Task($ReconfigureComputeResourceRequestType);
return $ReconfigureComputeResource_TaskResponse;

}
function AddCustomFieldDef($AddCustomFieldDefRequestType)
{

$AddCustomFieldDefResponse = $this->soapClient->AddCustomFieldDef($AddCustomFieldDefRequestType);
return $AddCustomFieldDefResponse;

}
function RemoveCustomFieldDef($RemoveCustomFieldDefRequestType)
{

$RemoveCustomFieldDefResponse = $this->soapClient->RemoveCustomFieldDef($RemoveCustomFieldDefRequestType);
return $RemoveCustomFieldDefResponse;

}
function RenameCustomFieldDef($RenameCustomFieldDefRequestType)
{

$RenameCustomFieldDefResponse = $this->soapClient->RenameCustomFieldDef($RenameCustomFieldDefRequestType);
return $RenameCustomFieldDefResponse;

}
function SetField($SetFieldRequestType)
{

$SetFieldResponse = $this->soapClient->SetField($SetFieldRequestType);
return $SetFieldResponse;

}
function DoesCustomizationSpecExist($DoesCustomizationSpecExistRequestType)
{

$DoesCustomizationSpecExistResponse = $this->soapClient->DoesCustomizationSpecExist($DoesCustomizationSpecExistRequestType);
return $DoesCustomizationSpecExistResponse;

}
function GetCustomizationSpec($GetCustomizationSpecRequestType)
{

$GetCustomizationSpecResponse = $this->soapClient->GetCustomizationSpec($GetCustomizationSpecRequestType);
return $GetCustomizationSpecResponse;

}
function CreateCustomizationSpec($CreateCustomizationSpecRequestType)
{

$CreateCustomizationSpecResponse = $this->soapClient->CreateCustomizationSpec($CreateCustomizationSpecRequestType);
return $CreateCustomizationSpecResponse;

}
function OverwriteCustomizationSpec($OverwriteCustomizationSpecRequestType)
{

$OverwriteCustomizationSpecResponse = $this->soapClient->OverwriteCustomizationSpec($OverwriteCustomizationSpecRequestType);
return $OverwriteCustomizationSpecResponse;

}
function DeleteCustomizationSpec($DeleteCustomizationSpecRequestType)
{

$DeleteCustomizationSpecResponse = $this->soapClient->DeleteCustomizationSpec($DeleteCustomizationSpecRequestType);
return $DeleteCustomizationSpecResponse;

}
function DuplicateCustomizationSpec($DuplicateCustomizationSpecRequestType)
{

$DuplicateCustomizationSpecResponse = $this->soapClient->DuplicateCustomizationSpec($DuplicateCustomizationSpecRequestType);
return $DuplicateCustomizationSpecResponse;

}
function RenameCustomizationSpec($RenameCustomizationSpecRequestType)
{

$RenameCustomizationSpecResponse = $this->soapClient->RenameCustomizationSpec($RenameCustomizationSpecRequestType);
return $RenameCustomizationSpecResponse;

}
function CustomizationSpecItemToXml($CustomizationSpecItemToXmlRequestType)
{

$CustomizationSpecItemToXmlResponse = $this->soapClient->CustomizationSpecItemToXml($CustomizationSpecItemToXmlRequestType);
return $CustomizationSpecItemToXmlResponse;

}
function XmlToCustomizationSpecItem($XmlToCustomizationSpecItemRequestType)
{

$XmlToCustomizationSpecItemResponse = $this->soapClient->XmlToCustomizationSpecItem($XmlToCustomizationSpecItemRequestType);
return $XmlToCustomizationSpecItemResponse;

}
function CheckCustomizationResources($CheckCustomizationResourcesRequestType)
{

$CheckCustomizationResourcesResponse = $this->soapClient->CheckCustomizationResources($CheckCustomizationResourcesRequestType);
return $CheckCustomizationResourcesResponse;

}
function QueryConnectionInfo($QueryConnectionInfoRequestType)
{

$QueryConnectionInfoResponse = $this->soapClient->QueryConnectionInfo($QueryConnectionInfoRequestType);
return $QueryConnectionInfoResponse;

}
function PowerOnMultiVM_Task($PowerOnMultiVMRequestType)
{

$PowerOnMultiVM_TaskResponse = $this->soapClient->PowerOnMultiVM_Task($PowerOnMultiVMRequestType);
return $PowerOnMultiVM_TaskResponse;

}
function RefreshDatastore($RefreshDatastoreRequestType)
{

$RefreshDatastoreResponse = $this->soapClient->RefreshDatastore($RefreshDatastoreRequestType);
return $RefreshDatastoreResponse;

}
function RefreshDatastoreStorageInfo($RefreshDatastoreStorageInfoRequestType)
{

$RefreshDatastoreStorageInfoResponse = $this->soapClient->RefreshDatastoreStorageInfo($RefreshDatastoreStorageInfoRequestType);
return $RefreshDatastoreStorageInfoResponse;

}
function UpdateVirtualMachineFiles_Task($UpdateVirtualMachineFilesRequestType)
{

$UpdateVirtualMachineFiles_TaskResponse = $this->soapClient->UpdateVirtualMachineFiles_Task($UpdateVirtualMachineFilesRequestType);
return $UpdateVirtualMachineFiles_TaskResponse;

}
function RenameDatastore($RenameDatastoreRequestType)
{

$RenameDatastoreResponse = $this->soapClient->RenameDatastore($RenameDatastoreRequestType);
return $RenameDatastoreResponse;

}
function DestroyDatastore($DestroyDatastoreRequestType)
{

$DestroyDatastoreResponse = $this->soapClient->DestroyDatastore($DestroyDatastoreRequestType);
return $DestroyDatastoreResponse;

}
function DatastoreEnterMaintenanceMode($DatastoreEnterMaintenanceModeRequestType)
{

$DatastoreEnterMaintenanceModeResponse = $this->soapClient->DatastoreEnterMaintenanceMode($DatastoreEnterMaintenanceModeRequestType);
return $DatastoreEnterMaintenanceModeResponse;

}
function DatastoreExitMaintenanceMode_Task($DatastoreExitMaintenanceModeRequestType)
{

$DatastoreExitMaintenanceMode_TaskResponse = $this->soapClient->DatastoreExitMaintenanceMode_Task($DatastoreExitMaintenanceModeRequestType);
return $DatastoreExitMaintenanceMode_TaskResponse;

}
function QueryDescriptions($QueryDescriptionsRequestType)
{

$QueryDescriptionsResponse = $this->soapClient->QueryDescriptions($QueryDescriptionsRequestType);
return $QueryDescriptionsResponse;

}
function BrowseDiagnosticLog($BrowseDiagnosticLogRequestType)
{

$BrowseDiagnosticLogResponse = $this->soapClient->BrowseDiagnosticLog($BrowseDiagnosticLogRequestType);
return $BrowseDiagnosticLogResponse;

}
function GenerateLogBundles_Task($GenerateLogBundlesRequestType)
{

$GenerateLogBundles_TaskResponse = $this->soapClient->GenerateLogBundles_Task($GenerateLogBundlesRequestType);
return $GenerateLogBundles_TaskResponse;

}
function FetchDVPortKeys($FetchDVPortKeysRequestType)
{

$FetchDVPortKeysResponse = $this->soapClient->FetchDVPortKeys($FetchDVPortKeysRequestType);
return $FetchDVPortKeysResponse;

}
function FetchDVPorts($FetchDVPortsRequestType)
{

$FetchDVPortsResponse = $this->soapClient->FetchDVPorts($FetchDVPortsRequestType);
return $FetchDVPortsResponse;

}
function QueryUsedVlanIdInDvs($QueryUsedVlanIdInDvsRequestType)
{

$QueryUsedVlanIdInDvsResponse = $this->soapClient->QueryUsedVlanIdInDvs($QueryUsedVlanIdInDvsRequestType);
return $QueryUsedVlanIdInDvsResponse;

}
function ReconfigureDvs_Task($ReconfigureDvsRequestType)
{

$ReconfigureDvs_TaskResponse = $this->soapClient->ReconfigureDvs_Task($ReconfigureDvsRequestType);
return $ReconfigureDvs_TaskResponse;

}
function PerformDvsProductSpecOperation_Task($PerformDvsProductSpecOperationRequestType)
{

$PerformDvsProductSpecOperation_TaskResponse = $this->soapClient->PerformDvsProductSpecOperation_Task($PerformDvsProductSpecOperationRequestType);
return $PerformDvsProductSpecOperation_TaskResponse;

}
function MergeDvs_Task($MergeDvsRequestType)
{

$MergeDvs_TaskResponse = $this->soapClient->MergeDvs_Task($MergeDvsRequestType);
return $MergeDvs_TaskResponse;

}
function AddDVPortgroup_Task($AddDVPortgroupRequestType)
{

$AddDVPortgroup_TaskResponse = $this->soapClient->AddDVPortgroup_Task($AddDVPortgroupRequestType);
return $AddDVPortgroup_TaskResponse;

}
function MoveDVPort_Task($MoveDVPortRequestType)
{

$MoveDVPort_TaskResponse = $this->soapClient->MoveDVPort_Task($MoveDVPortRequestType);
return $MoveDVPort_TaskResponse;

}
function UpdateDvsCapability($UpdateDvsCapabilityRequestType)
{

$UpdateDvsCapabilityResponse = $this->soapClient->UpdateDvsCapability($UpdateDvsCapabilityRequestType);
return $UpdateDvsCapabilityResponse;

}
function ReconfigureDVPort_Task($ReconfigureDVPortRequestType)
{

$ReconfigureDVPort_TaskResponse = $this->soapClient->ReconfigureDVPort_Task($ReconfigureDVPortRequestType);
return $ReconfigureDVPort_TaskResponse;

}
function RefreshDVPortState($RefreshDVPortStateRequestType)
{

$RefreshDVPortStateResponse = $this->soapClient->RefreshDVPortState($RefreshDVPortStateRequestType);
return $RefreshDVPortStateResponse;

}
function RectifyDvsHost_Task($RectifyDvsHostRequestType)
{

$RectifyDvsHost_TaskResponse = $this->soapClient->RectifyDvsHost_Task($RectifyDvsHostRequestType);
return $RectifyDvsHost_TaskResponse;

}
function UpdateNetworkResourcePool($UpdateNetworkResourcePoolRequestType)
{

$UpdateNetworkResourcePoolResponse = $this->soapClient->UpdateNetworkResourcePool($UpdateNetworkResourcePoolRequestType);
return $UpdateNetworkResourcePoolResponse;

}
function AddNetworkResourcePool($AddNetworkResourcePoolRequestType)
{

$AddNetworkResourcePoolResponse = $this->soapClient->AddNetworkResourcePool($AddNetworkResourcePoolRequestType);
return $AddNetworkResourcePoolResponse;

}
function RemoveNetworkResourcePool($RemoveNetworkResourcePoolRequestType)
{

$RemoveNetworkResourcePoolResponse = $this->soapClient->RemoveNetworkResourcePool($RemoveNetworkResourcePoolRequestType);
return $RemoveNetworkResourcePoolResponse;

}
function EnableNetworkResourceManagement($EnableNetworkResourceManagementRequestType)
{

$EnableNetworkResourceManagementResponse = $this->soapClient->EnableNetworkResourceManagement($EnableNetworkResourceManagementRequestType);
return $EnableNetworkResourceManagementResponse;

}
function QueryConfigOptionDescriptor($QueryConfigOptionDescriptorRequestType)
{

$QueryConfigOptionDescriptorResponse = $this->soapClient->QueryConfigOptionDescriptor($QueryConfigOptionDescriptorRequestType);
return $QueryConfigOptionDescriptorResponse;

}
function QueryConfigOption($QueryConfigOptionRequestType)
{

$QueryConfigOptionResponse = $this->soapClient->QueryConfigOption($QueryConfigOptionRequestType);
return $QueryConfigOptionResponse;

}
function QueryConfigTarget($QueryConfigTargetRequestType)
{

$QueryConfigTargetResponse = $this->soapClient->QueryConfigTarget($QueryConfigTargetRequestType);
return $QueryConfigTargetResponse;

}
function QueryTargetCapabilities($QueryTargetCapabilitiesRequestType)
{

$QueryTargetCapabilitiesResponse = $this->soapClient->QueryTargetCapabilities($QueryTargetCapabilitiesRequestType);
return $QueryTargetCapabilitiesResponse;

}
function setCustomValue($setCustomValueRequestType)
{

$setCustomValueResponse = $this->soapClient->setCustomValue($setCustomValueRequestType);
return $setCustomValueResponse;

}
function UnregisterExtension($UnregisterExtensionRequestType)
{

$UnregisterExtensionResponse = $this->soapClient->UnregisterExtension($UnregisterExtensionRequestType);
return $UnregisterExtensionResponse;

}
function FindExtension($FindExtensionRequestType)
{

$FindExtensionResponse = $this->soapClient->FindExtension($FindExtensionRequestType);
return $FindExtensionResponse;

}
function RegisterExtension($RegisterExtensionRequestType)
{

$RegisterExtensionResponse = $this->soapClient->RegisterExtension($RegisterExtensionRequestType);
return $RegisterExtensionResponse;

}
function UpdateExtension($UpdateExtensionRequestType)
{

$UpdateExtensionResponse = $this->soapClient->UpdateExtension($UpdateExtensionRequestType);
return $UpdateExtensionResponse;

}
function GetPublicKey($GetPublicKeyRequestType)
{

$GetPublicKeyResponse = $this->soapClient->GetPublicKey($GetPublicKeyRequestType);
return $GetPublicKeyResponse;

}
function SetPublicKey($SetPublicKeyRequestType)
{

$SetPublicKeyResponse = $this->soapClient->SetPublicKey($SetPublicKeyRequestType);
return $SetPublicKeyResponse;

}
function SetExtensionCertificate($SetExtensionCertificateRequestType)
{

$SetExtensionCertificateResponse = $this->soapClient->SetExtensionCertificate($SetExtensionCertificateRequestType);
return $SetExtensionCertificateResponse;

}
function QueryManagedBy($QueryManagedByRequestType)
{

$QueryManagedByResponse = $this->soapClient->QueryManagedBy($QueryManagedByRequestType);
return $QueryManagedByResponse;

}
function MoveDatastoreFile_Task($MoveDatastoreFileRequestType)
{

$MoveDatastoreFile_TaskResponse = $this->soapClient->MoveDatastoreFile_Task($MoveDatastoreFileRequestType);
return $MoveDatastoreFile_TaskResponse;

}
function CopyDatastoreFile_Task($CopyDatastoreFileRequestType)
{

$CopyDatastoreFile_TaskResponse = $this->soapClient->CopyDatastoreFile_Task($CopyDatastoreFileRequestType);
return $CopyDatastoreFile_TaskResponse;

}
function DeleteDatastoreFile_Task($DeleteDatastoreFileRequestType)
{

$DeleteDatastoreFile_TaskResponse = $this->soapClient->DeleteDatastoreFile_Task($DeleteDatastoreFileRequestType);
return $DeleteDatastoreFile_TaskResponse;

}
function MakeDirectory($MakeDirectoryRequestType)
{

$MakeDirectoryResponse = $this->soapClient->MakeDirectory($MakeDirectoryRequestType);
return $MakeDirectoryResponse;

}
function ChangeOwner($ChangeOwnerRequestType)
{

$ChangeOwnerResponse = $this->soapClient->ChangeOwner($ChangeOwnerRequestType);
return $ChangeOwnerResponse;

}
function CreateFolder($CreateFolderRequestType)
{

$CreateFolderResponse = $this->soapClient->CreateFolder($CreateFolderRequestType);
return $CreateFolderResponse;

}
function MoveIntoFolder_Task($MoveIntoFolderRequestType)
{

$MoveIntoFolder_TaskResponse = $this->soapClient->MoveIntoFolder_Task($MoveIntoFolderRequestType);
return $MoveIntoFolder_TaskResponse;

}
function CreateVM_Task($CreateVMRequestType)
{

$CreateVM_TaskResponse = $this->soapClient->CreateVM_Task($CreateVMRequestType);
return $CreateVM_TaskResponse;

}
function RegisterVM_Task($RegisterVMRequestType)
{

$RegisterVM_TaskResponse = $this->soapClient->RegisterVM_Task($RegisterVMRequestType);
return $RegisterVM_TaskResponse;

}
function CreateCluster($CreateClusterRequestType)
{

$CreateClusterResponse = $this->soapClient->CreateCluster($CreateClusterRequestType);
return $CreateClusterResponse;

}
function CreateClusterEx($CreateClusterExRequestType)
{

$CreateClusterExResponse = $this->soapClient->CreateClusterEx($CreateClusterExRequestType);
return $CreateClusterExResponse;

}
function AddStandaloneHost_Task($AddStandaloneHostRequestType)
{

$AddStandaloneHost_TaskResponse = $this->soapClient->AddStandaloneHost_Task($AddStandaloneHostRequestType);
return $AddStandaloneHost_TaskResponse;

}
function CreateDatacenter($CreateDatacenterRequestType)
{

$CreateDatacenterResponse = $this->soapClient->CreateDatacenter($CreateDatacenterRequestType);
return $CreateDatacenterResponse;

}
function UnregisterAndDestroy_Task($UnregisterAndDestroyRequestType)
{

$UnregisterAndDestroy_TaskResponse = $this->soapClient->UnregisterAndDestroy_Task($UnregisterAndDestroyRequestType);
return $UnregisterAndDestroy_TaskResponse;

}
function CreateDVS_Task($CreateDVSRequestType)
{

$CreateDVS_TaskResponse = $this->soapClient->CreateDVS_Task($CreateDVSRequestType);
return $CreateDVS_TaskResponse;

}
function CreateStoragePod($CreateStoragePodRequestType)
{

$CreateStoragePodResponse = $this->soapClient->CreateStoragePod($CreateStoragePodRequestType);
return $CreateStoragePodResponse;

}
function SetCollectorPageSize($SetCollectorPageSizeRequestType)
{

$SetCollectorPageSizeResponse = $this->soapClient->SetCollectorPageSize($SetCollectorPageSizeRequestType);
return $SetCollectorPageSizeResponse;

}
function RewindCollector($RewindCollectorRequestType)
{

$RewindCollectorResponse = $this->soapClient->RewindCollector($RewindCollectorRequestType);
return $RewindCollectorResponse;

}
function ResetCollector($ResetCollectorRequestType)
{

$ResetCollectorResponse = $this->soapClient->ResetCollector($ResetCollectorRequestType);
return $ResetCollectorResponse;

}
function DestroyCollector($DestroyCollectorRequestType)
{

$DestroyCollectorResponse = $this->soapClient->DestroyCollector($DestroyCollectorRequestType);
return $DestroyCollectorResponse;

}
function QueryHostConnectionInfo($QueryHostConnectionInfoRequestType)
{

$QueryHostConnectionInfoResponse = $this->soapClient->QueryHostConnectionInfo($QueryHostConnectionInfoRequestType);
return $QueryHostConnectionInfoResponse;

}
function UpdateSystemResources($UpdateSystemResourcesRequestType)
{

$UpdateSystemResourcesResponse = $this->soapClient->UpdateSystemResources($UpdateSystemResourcesRequestType);
return $UpdateSystemResourcesResponse;

}
function ReconnectHost_Task($ReconnectHostRequestType)
{

$ReconnectHost_TaskResponse = $this->soapClient->ReconnectHost_Task($ReconnectHostRequestType);
return $ReconnectHost_TaskResponse;

}
function DisconnectHost_Task($DisconnectHostRequestType)
{

$DisconnectHost_TaskResponse = $this->soapClient->DisconnectHost_Task($DisconnectHostRequestType);
return $DisconnectHost_TaskResponse;

}
function EnterMaintenanceMode_Task($EnterMaintenanceModeRequestType)
{

$EnterMaintenanceMode_TaskResponse = $this->soapClient->EnterMaintenanceMode_Task($EnterMaintenanceModeRequestType);
return $EnterMaintenanceMode_TaskResponse;

}
function ExitMaintenanceMode_Task($ExitMaintenanceModeRequestType)
{

$ExitMaintenanceMode_TaskResponse = $this->soapClient->ExitMaintenanceMode_Task($ExitMaintenanceModeRequestType);
return $ExitMaintenanceMode_TaskResponse;

}
function RebootHost_Task($RebootHostRequestType)
{

$RebootHost_TaskResponse = $this->soapClient->RebootHost_Task($RebootHostRequestType);
return $RebootHost_TaskResponse;

}
function ShutdownHost_Task($ShutdownHostRequestType)
{

$ShutdownHost_TaskResponse = $this->soapClient->ShutdownHost_Task($ShutdownHostRequestType);
return $ShutdownHost_TaskResponse;

}
function PowerDownHostToStandBy_Task($PowerDownHostToStandByRequestType)
{

$PowerDownHostToStandBy_TaskResponse = $this->soapClient->PowerDownHostToStandBy_Task($PowerDownHostToStandByRequestType);
return $PowerDownHostToStandBy_TaskResponse;

}
function PowerUpHostFromStandBy_Task($PowerUpHostFromStandByRequestType)
{

$PowerUpHostFromStandBy_TaskResponse = $this->soapClient->PowerUpHostFromStandBy_Task($PowerUpHostFromStandByRequestType);
return $PowerUpHostFromStandBy_TaskResponse;

}
function QueryMemoryOverhead($QueryMemoryOverheadRequestType)
{

$QueryMemoryOverheadResponse = $this->soapClient->QueryMemoryOverhead($QueryMemoryOverheadRequestType);
return $QueryMemoryOverheadResponse;

}
function QueryMemoryOverheadEx($QueryMemoryOverheadExRequestType)
{

$QueryMemoryOverheadExResponse = $this->soapClient->QueryMemoryOverheadEx($QueryMemoryOverheadExRequestType);
return $QueryMemoryOverheadExResponse;

}
function ReconfigureHostForDAS_Task($ReconfigureHostForDASRequestType)
{

$ReconfigureHostForDAS_TaskResponse = $this->soapClient->ReconfigureHostForDAS_Task($ReconfigureHostForDASRequestType);
return $ReconfigureHostForDAS_TaskResponse;

}
function UpdateFlags($UpdateFlagsRequestType)
{

$UpdateFlagsResponse = $this->soapClient->UpdateFlags($UpdateFlagsRequestType);
return $UpdateFlagsResponse;

}
function EnterLockdownMode($EnterLockdownModeRequestType)
{

$EnterLockdownModeResponse = $this->soapClient->EnterLockdownMode($EnterLockdownModeRequestType);
return $EnterLockdownModeResponse;

}
function ExitLockdownMode($ExitLockdownModeRequestType)
{

$ExitLockdownModeResponse = $this->soapClient->ExitLockdownMode($ExitLockdownModeRequestType);
return $ExitLockdownModeResponse;

}
function AcquireCimServicesTicket($AcquireCimServicesTicketRequestType)
{

$AcquireCimServicesTicketResponse = $this->soapClient->AcquireCimServicesTicket($AcquireCimServicesTicketRequestType);
return $AcquireCimServicesTicketResponse;

}
function UpdateIpmi($UpdateIpmiRequestType)
{

$UpdateIpmiResponse = $this->soapClient->UpdateIpmi($UpdateIpmiRequestType);
return $UpdateIpmiResponse;

}
function RetrieveHardwareUptime($RetrieveHardwareUptimeRequestType)
{

$RetrieveHardwareUptimeResponse = $this->soapClient->RetrieveHardwareUptime($RetrieveHardwareUptimeRequestType);
return $RetrieveHardwareUptimeResponse;

}
function HttpNfcLeaseGetManifest($HttpNfcLeaseGetManifestRequestType)
{

$HttpNfcLeaseGetManifestResponse = $this->soapClient->HttpNfcLeaseGetManifest($HttpNfcLeaseGetManifestRequestType);
return $HttpNfcLeaseGetManifestResponse;

}
function HttpNfcLeaseComplete($HttpNfcLeaseCompleteRequestType)
{

$HttpNfcLeaseCompleteResponse = $this->soapClient->HttpNfcLeaseComplete($HttpNfcLeaseCompleteRequestType);
return $HttpNfcLeaseCompleteResponse;

}
function HttpNfcLeaseAbort($HttpNfcLeaseAbortRequestType)
{

$HttpNfcLeaseAbortResponse = $this->soapClient->HttpNfcLeaseAbort($HttpNfcLeaseAbortRequestType);
return $HttpNfcLeaseAbortResponse;

}
function HttpNfcLeaseProgress($HttpNfcLeaseProgressRequestType)
{

$HttpNfcLeaseProgressResponse = $this->soapClient->HttpNfcLeaseProgress($HttpNfcLeaseProgressRequestType);
return $HttpNfcLeaseProgressResponse;

}
function QueryIpPools($QueryIpPoolsRequestType)
{

$QueryIpPoolsResponse = $this->soapClient->QueryIpPools($QueryIpPoolsRequestType);
return $QueryIpPoolsResponse;

}
function CreateIpPool($CreateIpPoolRequestType)
{

$CreateIpPoolResponse = $this->soapClient->CreateIpPool($CreateIpPoolRequestType);
return $CreateIpPoolResponse;

}
function UpdateIpPool($UpdateIpPoolRequestType)
{

$UpdateIpPoolResponse = $this->soapClient->UpdateIpPool($UpdateIpPoolRequestType);
return $UpdateIpPoolResponse;

}
function DestroyIpPool($DestroyIpPoolRequestType)
{

$DestroyIpPoolResponse = $this->soapClient->DestroyIpPool($DestroyIpPoolRequestType);
return $DestroyIpPoolResponse;

}
function UpdateAssignedLicense($UpdateAssignedLicenseRequestType)
{

$UpdateAssignedLicenseResponse = $this->soapClient->UpdateAssignedLicense($UpdateAssignedLicenseRequestType);
return $UpdateAssignedLicenseResponse;

}
function RemoveAssignedLicense($RemoveAssignedLicenseRequestType)
{

$RemoveAssignedLicenseResponse = $this->soapClient->RemoveAssignedLicense($RemoveAssignedLicenseRequestType);
return $RemoveAssignedLicenseResponse;

}
function QueryAssignedLicenses($QueryAssignedLicensesRequestType)
{

$QueryAssignedLicensesResponse = $this->soapClient->QueryAssignedLicenses($QueryAssignedLicensesRequestType);
return $QueryAssignedLicensesResponse;

}
function QuerySupportedFeatures($QuerySupportedFeaturesRequestType)
{

$QuerySupportedFeaturesResponse = $this->soapClient->QuerySupportedFeatures($QuerySupportedFeaturesRequestType);
return $QuerySupportedFeaturesResponse;

}
function QueryLicenseSourceAvailability($QueryLicenseSourceAvailabilityRequestType)
{

$QueryLicenseSourceAvailabilityResponse = $this->soapClient->QueryLicenseSourceAvailability($QueryLicenseSourceAvailabilityRequestType);
return $QueryLicenseSourceAvailabilityResponse;

}
function QueryLicenseUsage($QueryLicenseUsageRequestType)
{

$QueryLicenseUsageResponse = $this->soapClient->QueryLicenseUsage($QueryLicenseUsageRequestType);
return $QueryLicenseUsageResponse;

}
function SetLicenseEdition($SetLicenseEditionRequestType)
{

$SetLicenseEditionResponse = $this->soapClient->SetLicenseEdition($SetLicenseEditionRequestType);
return $SetLicenseEditionResponse;

}
function CheckLicenseFeature($CheckLicenseFeatureRequestType)
{

$CheckLicenseFeatureResponse = $this->soapClient->CheckLicenseFeature($CheckLicenseFeatureRequestType);
return $CheckLicenseFeatureResponse;

}
function EnableFeature($EnableFeatureRequestType)
{

$EnableFeatureResponse = $this->soapClient->EnableFeature($EnableFeatureRequestType);
return $EnableFeatureResponse;

}
function DisableFeature($DisableFeatureRequestType)
{

$DisableFeatureResponse = $this->soapClient->DisableFeature($DisableFeatureRequestType);
return $DisableFeatureResponse;

}
function ConfigureLicenseSource($ConfigureLicenseSourceRequestType)
{

$ConfigureLicenseSourceResponse = $this->soapClient->ConfigureLicenseSource($ConfigureLicenseSourceRequestType);
return $ConfigureLicenseSourceResponse;

}
function UpdateLicense($UpdateLicenseRequestType)
{

$UpdateLicenseResponse = $this->soapClient->UpdateLicense($UpdateLicenseRequestType);
return $UpdateLicenseResponse;

}
function AddLicense($AddLicenseRequestType)
{

$AddLicenseResponse = $this->soapClient->AddLicense($AddLicenseRequestType);
return $AddLicenseResponse;

}
function RemoveLicense($RemoveLicenseRequestType)
{

$RemoveLicenseResponse = $this->soapClient->RemoveLicense($RemoveLicenseRequestType);
return $RemoveLicenseResponse;

}
function DecodeLicense($DecodeLicenseRequestType)
{

$DecodeLicenseResponse = $this->soapClient->DecodeLicense($DecodeLicenseRequestType);
return $DecodeLicenseResponse;

}
function UpdateLicenseLabel($UpdateLicenseLabelRequestType)
{

$UpdateLicenseLabelResponse = $this->soapClient->UpdateLicenseLabel($UpdateLicenseLabelRequestType);
return $UpdateLicenseLabelResponse;

}
function RemoveLicenseLabel($RemoveLicenseLabelRequestType)
{

$RemoveLicenseLabelResponse = $this->soapClient->RemoveLicenseLabel($RemoveLicenseLabelRequestType);
return $RemoveLicenseLabelResponse;

}
function Reload($ReloadRequestType)
{

$ReloadResponse = $this->soapClient->Reload($ReloadRequestType);
return $ReloadResponse;

}
function Rename_Task($RenameRequestType)
{

$Rename_TaskResponse = $this->soapClient->Rename_Task($RenameRequestType);
return $Rename_TaskResponse;

}
function Destroy_Task($DestroyRequestType)
{

$Destroy_TaskResponse = $this->soapClient->Destroy_Task($DestroyRequestType);
return $Destroy_TaskResponse;

}
function DestroyNetwork($DestroyNetworkRequestType)
{

$DestroyNetworkResponse = $this->soapClient->DestroyNetwork($DestroyNetworkRequestType);
return $DestroyNetworkResponse;

}
function ValidateHost($ValidateHostRequestType)
{

$ValidateHostResponse = $this->soapClient->ValidateHost($ValidateHostRequestType);
return $ValidateHostResponse;

}
function ParseDescriptor($ParseDescriptorRequestType)
{

$ParseDescriptorResponse = $this->soapClient->ParseDescriptor($ParseDescriptorRequestType);
return $ParseDescriptorResponse;

}
function CreateImportSpec($CreateImportSpecRequestType)
{

$CreateImportSpecResponse = $this->soapClient->CreateImportSpec($CreateImportSpecRequestType);
return $CreateImportSpecResponse;

}
function CreateDescriptor($CreateDescriptorRequestType)
{

$CreateDescriptorResponse = $this->soapClient->CreateDescriptor($CreateDescriptorRequestType);
return $CreateDescriptorResponse;

}
function QueryPerfProviderSummary($QueryPerfProviderSummaryRequestType)
{

$QueryPerfProviderSummaryResponse = $this->soapClient->QueryPerfProviderSummary($QueryPerfProviderSummaryRequestType);
return $QueryPerfProviderSummaryResponse;

}
function QueryAvailablePerfMetric($QueryAvailablePerfMetricRequestType)
{

$QueryAvailablePerfMetricResponse = $this->soapClient->QueryAvailablePerfMetric($QueryAvailablePerfMetricRequestType);
return $QueryAvailablePerfMetricResponse;

}
function QueryPerfCounter($QueryPerfCounterRequestType)
{

$QueryPerfCounterResponse = $this->soapClient->QueryPerfCounter($QueryPerfCounterRequestType);
return $QueryPerfCounterResponse;

}
function QueryPerfCounterByLevel($QueryPerfCounterByLevelRequestType)
{

$QueryPerfCounterByLevelResponse = $this->soapClient->QueryPerfCounterByLevel($QueryPerfCounterByLevelRequestType);
return $QueryPerfCounterByLevelResponse;

}
function QueryPerf($QueryPerfRequestType)
{

$QueryPerfResponse = $this->soapClient->QueryPerf($QueryPerfRequestType);
return $QueryPerfResponse;

}
function QueryPerfComposite($QueryPerfCompositeRequestType)
{

$QueryPerfCompositeResponse = $this->soapClient->QueryPerfComposite($QueryPerfCompositeRequestType);
return $QueryPerfCompositeResponse;

}
function CreatePerfInterval($CreatePerfIntervalRequestType)
{

$CreatePerfIntervalResponse = $this->soapClient->CreatePerfInterval($CreatePerfIntervalRequestType);
return $CreatePerfIntervalResponse;

}
function RemovePerfInterval($RemovePerfIntervalRequestType)
{

$RemovePerfIntervalResponse = $this->soapClient->RemovePerfInterval($RemovePerfIntervalRequestType);
return $RemovePerfIntervalResponse;

}
function UpdatePerfInterval($UpdatePerfIntervalRequestType)
{

$UpdatePerfIntervalResponse = $this->soapClient->UpdatePerfInterval($UpdatePerfIntervalRequestType);
return $UpdatePerfIntervalResponse;

}
function UpdateCounterLevelMapping($UpdateCounterLevelMappingRequestType)
{

$UpdateCounterLevelMappingResponse = $this->soapClient->UpdateCounterLevelMapping($UpdateCounterLevelMappingRequestType);
return $UpdateCounterLevelMappingResponse;

}
function ResetCounterLevelMapping($ResetCounterLevelMappingRequestType)
{

$ResetCounterLevelMappingResponse = $this->soapClient->ResetCounterLevelMapping($ResetCounterLevelMappingRequestType);
return $ResetCounterLevelMappingResponse;

}
function EstimateDatabaseSize($EstimateDatabaseSizeRequestType)
{

$EstimateDatabaseSizeResponse = $this->soapClient->EstimateDatabaseSize($EstimateDatabaseSizeRequestType);
return $EstimateDatabaseSizeResponse;

}
function UpdateConfig($UpdateConfigRequestType)
{

$UpdateConfigResponse = $this->soapClient->UpdateConfig($UpdateConfigRequestType);
return $UpdateConfigResponse;

}
function MoveIntoResourcePool($MoveIntoResourcePoolRequestType)
{

$MoveIntoResourcePoolResponse = $this->soapClient->MoveIntoResourcePool($MoveIntoResourcePoolRequestType);
return $MoveIntoResourcePoolResponse;

}
function UpdateChildResourceConfiguration($UpdateChildResourceConfigurationRequestType)
{

$UpdateChildResourceConfigurationResponse = $this->soapClient->UpdateChildResourceConfiguration($UpdateChildResourceConfigurationRequestType);
return $UpdateChildResourceConfigurationResponse;

}
function CreateResourcePool($CreateResourcePoolRequestType)
{

$CreateResourcePoolResponse = $this->soapClient->CreateResourcePool($CreateResourcePoolRequestType);
return $CreateResourcePoolResponse;

}
function DestroyChildren($DestroyChildrenRequestType)
{

$DestroyChildrenResponse = $this->soapClient->DestroyChildren($DestroyChildrenRequestType);
return $DestroyChildrenResponse;

}
function CreateVApp($CreateVAppRequestType)
{

$CreateVAppResponse = $this->soapClient->CreateVApp($CreateVAppRequestType);
return $CreateVAppResponse;

}
function CreateChildVM_Task($CreateChildVMRequestType)
{

$CreateChildVM_TaskResponse = $this->soapClient->CreateChildVM_Task($CreateChildVMRequestType);
return $CreateChildVM_TaskResponse;

}
function RegisterChildVM_Task($RegisterChildVMRequestType)
{

$RegisterChildVM_TaskResponse = $this->soapClient->RegisterChildVM_Task($RegisterChildVMRequestType);
return $RegisterChildVM_TaskResponse;

}
function ImportVApp($ImportVAppRequestType)
{

$ImportVAppResponse = $this->soapClient->ImportVApp($ImportVAppRequestType);
return $ImportVAppResponse;

}
function QueryResourceConfigOption($QueryResourceConfigOptionRequestType)
{

$QueryResourceConfigOptionResponse = $this->soapClient->QueryResourceConfigOption($QueryResourceConfigOptionRequestType);
return $QueryResourceConfigOptionResponse;

}
function RefreshRuntime($RefreshRuntimeRequestType)
{

$RefreshRuntimeResponse = $this->soapClient->RefreshRuntime($RefreshRuntimeRequestType);
return $RefreshRuntimeResponse;

}
function FindByUuid($FindByUuidRequestType)
{

$FindByUuidResponse = $this->soapClient->FindByUuid($FindByUuidRequestType);
return $FindByUuidResponse;

}
function FindByDatastorePath($FindByDatastorePathRequestType)
{

$FindByDatastorePathResponse = $this->soapClient->FindByDatastorePath($FindByDatastorePathRequestType);
return $FindByDatastorePathResponse;

}
function FindByDnsName($FindByDnsNameRequestType)
{

$FindByDnsNameResponse = $this->soapClient->FindByDnsName($FindByDnsNameRequestType);
return $FindByDnsNameResponse;

}
function FindByIp($FindByIpRequestType)
{

$FindByIpResponse = $this->soapClient->FindByIp($FindByIpRequestType);
return $FindByIpResponse;

}
function FindByInventoryPath($FindByInventoryPathRequestType)
{

$FindByInventoryPathResponse = $this->soapClient->FindByInventoryPath($FindByInventoryPathRequestType);
return $FindByInventoryPathResponse;

}
function FindChild($FindChildRequestType)
{

$FindChildResponse = $this->soapClient->FindChild($FindChildRequestType);
return $FindChildResponse;

}
function FindAllByUuid($FindAllByUuidRequestType)
{

$FindAllByUuidResponse = $this->soapClient->FindAllByUuid($FindAllByUuidRequestType);
return $FindAllByUuidResponse;

}
function FindAllByDnsName($FindAllByDnsNameRequestType)
{

$FindAllByDnsNameResponse = $this->soapClient->FindAllByDnsName($FindAllByDnsNameRequestType);
return $FindAllByDnsNameResponse;

}
function FindAllByIp($FindAllByIpRequestType)
{

$FindAllByIpResponse = $this->soapClient->FindAllByIp($FindAllByIpRequestType);
return $FindAllByIpResponse;

}
function CurrentTime($CurrentTimeRequestType)
{

$CurrentTimeResponse = $this->soapClient->CurrentTime($CurrentTimeRequestType);
return $CurrentTimeResponse;

}
function RetrieveServiceContent($RetrieveServiceContentRequestType)
{

$RetrieveServiceContentResponse = $this->soapClient->RetrieveServiceContent($RetrieveServiceContentRequestType);
return $RetrieveServiceContentResponse;

}
function ValidateMigration($ValidateMigrationRequestType)
{

$ValidateMigrationResponse = $this->soapClient->ValidateMigration($ValidateMigrationRequestType);
return $ValidateMigrationResponse;

}
function QueryVMotionCompatibility($QueryVMotionCompatibilityRequestType)
{

$QueryVMotionCompatibilityResponse = $this->soapClient->QueryVMotionCompatibility($QueryVMotionCompatibilityRequestType);
return $QueryVMotionCompatibilityResponse;

}
function RetrieveProductComponents($RetrieveProductComponentsRequestType)
{

$RetrieveProductComponentsResponse = $this->soapClient->RetrieveProductComponents($RetrieveProductComponentsRequestType);
return $RetrieveProductComponentsResponse;

}
function UpdateServiceMessage($UpdateServiceMessageRequestType)
{

$UpdateServiceMessageResponse = $this->soapClient->UpdateServiceMessage($UpdateServiceMessageRequestType);
return $UpdateServiceMessageResponse;

}
function Login($LoginRequestType)
{

$LoginResponse = $this->soapClient->Login($LoginRequestType);
return $LoginResponse;

}
function LoginBySSPI($LoginBySSPIRequestType)
{

$LoginBySSPIResponse = $this->soapClient->LoginBySSPI($LoginBySSPIRequestType);
return $LoginBySSPIResponse;

}
function Logout($LogoutRequestType)
{

$LogoutResponse = $this->soapClient->Logout($LogoutRequestType);
return $LogoutResponse;

}
function AcquireLocalTicket($AcquireLocalTicketRequestType)
{

$AcquireLocalTicketResponse = $this->soapClient->AcquireLocalTicket($AcquireLocalTicketRequestType);
return $AcquireLocalTicketResponse;

}
function AcquireGenericServiceTicket($AcquireGenericServiceTicketRequestType)
{

$AcquireGenericServiceTicketResponse = $this->soapClient->AcquireGenericServiceTicket($AcquireGenericServiceTicketRequestType);
return $AcquireGenericServiceTicketResponse;

}
function TerminateSession($TerminateSessionRequestType)
{

$TerminateSessionResponse = $this->soapClient->TerminateSession($TerminateSessionRequestType);
return $TerminateSessionResponse;

}
function SetLocale($SetLocaleRequestType)
{

$SetLocaleResponse = $this->soapClient->SetLocale($SetLocaleRequestType);
return $SetLocaleResponse;

}
function LoginExtensionBySubjectName($LoginExtensionBySubjectNameRequestType)
{

$LoginExtensionBySubjectNameResponse = $this->soapClient->LoginExtensionBySubjectName($LoginExtensionBySubjectNameRequestType);
return $LoginExtensionBySubjectNameResponse;

}
function LoginExtensionByCertificate($LoginExtensionByCertificateRequestType)
{

$LoginExtensionByCertificateResponse = $this->soapClient->LoginExtensionByCertificate($LoginExtensionByCertificateRequestType);
return $LoginExtensionByCertificateResponse;

}
function ImpersonateUser($ImpersonateUserRequestType)
{

$ImpersonateUserResponse = $this->soapClient->ImpersonateUser($ImpersonateUserRequestType);
return $ImpersonateUserResponse;

}
function SessionIsActive($SessionIsActiveRequestType)
{

$SessionIsActiveResponse = $this->soapClient->SessionIsActive($SessionIsActiveRequestType);
return $SessionIsActiveResponse;

}
function AcquireCloneTicket($AcquireCloneTicketRequestType)
{

$AcquireCloneTicketResponse = $this->soapClient->AcquireCloneTicket($AcquireCloneTicketRequestType);
return $AcquireCloneTicketResponse;

}
function CloneSession($CloneSessionRequestType)
{

$CloneSessionResponse = $this->soapClient->CloneSession($CloneSessionRequestType);
return $CloneSessionResponse;

}
function ConfigureDatastoreIORM_Task($ConfigureDatastoreIORMRequestType)
{

$ConfigureDatastoreIORM_TaskResponse = $this->soapClient->ConfigureDatastoreIORM_Task($ConfigureDatastoreIORMRequestType);
return $ConfigureDatastoreIORM_TaskResponse;

}
function QueryIORMConfigOption($QueryIORMConfigOptionRequestType)
{

$QueryIORMConfigOptionResponse = $this->soapClient->QueryIORMConfigOption($QueryIORMConfigOptionRequestType);
return $QueryIORMConfigOptionResponse;

}
function ApplyStorageDrsRecommendationToPod_Task($ApplyStorageDrsRecommendationToPodRequestType)
{

$ApplyStorageDrsRecommendationToPod_TaskResponse = $this->soapClient->ApplyStorageDrsRecommendationToPod_Task($ApplyStorageDrsRecommendationToPodRequestType);
return $ApplyStorageDrsRecommendationToPod_TaskResponse;

}
function ApplyStorageDrsRecommendation_Task($ApplyStorageDrsRecommendationRequestType)
{

$ApplyStorageDrsRecommendation_TaskResponse = $this->soapClient->ApplyStorageDrsRecommendation_Task($ApplyStorageDrsRecommendationRequestType);
return $ApplyStorageDrsRecommendation_TaskResponse;

}
function CancelStorageDrsRecommendation($CancelStorageDrsRecommendationRequestType)
{

$CancelStorageDrsRecommendationResponse = $this->soapClient->CancelStorageDrsRecommendation($CancelStorageDrsRecommendationRequestType);
return $CancelStorageDrsRecommendationResponse;

}
function RefreshStorageDrsRecommendation($RefreshStorageDrsRecommendationRequestType)
{

$RefreshStorageDrsRecommendationResponse = $this->soapClient->RefreshStorageDrsRecommendation($RefreshStorageDrsRecommendationRequestType);
return $RefreshStorageDrsRecommendationResponse;

}
function ConfigureStorageDrsForPod_Task($ConfigureStorageDrsForPodRequestType)
{

$ConfigureStorageDrsForPod_TaskResponse = $this->soapClient->ConfigureStorageDrsForPod_Task($ConfigureStorageDrsForPodRequestType);
return $ConfigureStorageDrsForPod_TaskResponse;

}
function RecommendDatastores($RecommendDatastoresRequestType)
{

$RecommendDatastoresResponse = $this->soapClient->RecommendDatastores($RecommendDatastoresRequestType);
return $RecommendDatastoresResponse;

}
function CancelTask($CancelTaskRequestType)
{

$CancelTaskResponse = $this->soapClient->CancelTask($CancelTaskRequestType);
return $CancelTaskResponse;

}
function UpdateProgress($UpdateProgressRequestType)
{

$UpdateProgressResponse = $this->soapClient->UpdateProgress($UpdateProgressRequestType);
return $UpdateProgressResponse;

}
function SetTaskState($SetTaskStateRequestType)
{

$SetTaskStateResponse = $this->soapClient->SetTaskState($SetTaskStateRequestType);
return $SetTaskStateResponse;

}
function SetTaskDescription($SetTaskDescriptionRequestType)
{

$SetTaskDescriptionResponse = $this->soapClient->SetTaskDescription($SetTaskDescriptionRequestType);
return $SetTaskDescriptionResponse;

}
function ReadNextTasks($ReadNextTasksRequestType)
{

$ReadNextTasksResponse = $this->soapClient->ReadNextTasks($ReadNextTasksRequestType);
return $ReadNextTasksResponse;

}
function ReadPreviousTasks($ReadPreviousTasksRequestType)
{

$ReadPreviousTasksResponse = $this->soapClient->ReadPreviousTasks($ReadPreviousTasksRequestType);
return $ReadPreviousTasksResponse;

}
function CreateCollectorForTasks($CreateCollectorForTasksRequestType)
{

$CreateCollectorForTasksResponse = $this->soapClient->CreateCollectorForTasks($CreateCollectorForTasksRequestType);
return $CreateCollectorForTasksResponse;

}
function CreateTask($CreateTaskRequestType)
{

$CreateTaskResponse = $this->soapClient->CreateTask($CreateTaskRequestType);
return $CreateTaskResponse;

}
function RetrieveUserGroups($RetrieveUserGroupsRequestType)
{

$RetrieveUserGroupsResponse = $this->soapClient->RetrieveUserGroups($RetrieveUserGroupsRequestType);
return $RetrieveUserGroupsResponse;

}
function UpdateVAppConfig($UpdateVAppConfigRequestType)
{

$UpdateVAppConfigResponse = $this->soapClient->UpdateVAppConfig($UpdateVAppConfigRequestType);
return $UpdateVAppConfigResponse;

}
function UpdateLinkedChildren($UpdateLinkedChildrenRequestType)
{

$UpdateLinkedChildrenResponse = $this->soapClient->UpdateLinkedChildren($UpdateLinkedChildrenRequestType);
return $UpdateLinkedChildrenResponse;

}
function CloneVApp_Task($CloneVAppRequestType)
{

$CloneVApp_TaskResponse = $this->soapClient->CloneVApp_Task($CloneVAppRequestType);
return $CloneVApp_TaskResponse;

}
function ExportVApp($ExportVAppRequestType)
{

$ExportVAppResponse = $this->soapClient->ExportVApp($ExportVAppRequestType);
return $ExportVAppResponse;

}
function PowerOnVApp_Task($PowerOnVAppRequestType)
{

$PowerOnVApp_TaskResponse = $this->soapClient->PowerOnVApp_Task($PowerOnVAppRequestType);
return $PowerOnVApp_TaskResponse;

}
function PowerOffVApp_Task($PowerOffVAppRequestType)
{

$PowerOffVApp_TaskResponse = $this->soapClient->PowerOffVApp_Task($PowerOffVAppRequestType);
return $PowerOffVApp_TaskResponse;

}
function SuspendVApp_Task($SuspendVAppRequestType)
{

$SuspendVApp_TaskResponse = $this->soapClient->SuspendVApp_Task($SuspendVAppRequestType);
return $SuspendVApp_TaskResponse;

}
function unregisterVApp_Task($unregisterVAppRequestType)
{

$unregisterVApp_TaskResponse = $this->soapClient->unregisterVApp_Task($unregisterVAppRequestType);
return $unregisterVApp_TaskResponse;

}
function CreateVirtualDisk_Task($CreateVirtualDiskRequestType)
{

$CreateVirtualDisk_TaskResponse = $this->soapClient->CreateVirtualDisk_Task($CreateVirtualDiskRequestType);
return $CreateVirtualDisk_TaskResponse;

}
function DeleteVirtualDisk_Task($DeleteVirtualDiskRequestType)
{

$DeleteVirtualDisk_TaskResponse = $this->soapClient->DeleteVirtualDisk_Task($DeleteVirtualDiskRequestType);
return $DeleteVirtualDisk_TaskResponse;

}
function MoveVirtualDisk_Task($MoveVirtualDiskRequestType)
{

$MoveVirtualDisk_TaskResponse = $this->soapClient->MoveVirtualDisk_Task($MoveVirtualDiskRequestType);
return $MoveVirtualDisk_TaskResponse;

}
function CopyVirtualDisk_Task($CopyVirtualDiskRequestType)
{

$CopyVirtualDisk_TaskResponse = $this->soapClient->CopyVirtualDisk_Task($CopyVirtualDiskRequestType);
return $CopyVirtualDisk_TaskResponse;

}
function ExtendVirtualDisk_Task($ExtendVirtualDiskRequestType)
{

$ExtendVirtualDisk_TaskResponse = $this->soapClient->ExtendVirtualDisk_Task($ExtendVirtualDiskRequestType);
return $ExtendVirtualDisk_TaskResponse;

}
function QueryVirtualDiskFragmentation($QueryVirtualDiskFragmentationRequestType)
{

$QueryVirtualDiskFragmentationResponse = $this->soapClient->QueryVirtualDiskFragmentation($QueryVirtualDiskFragmentationRequestType);
return $QueryVirtualDiskFragmentationResponse;

}
function DefragmentVirtualDisk_Task($DefragmentVirtualDiskRequestType)
{

$DefragmentVirtualDisk_TaskResponse = $this->soapClient->DefragmentVirtualDisk_Task($DefragmentVirtualDiskRequestType);
return $DefragmentVirtualDisk_TaskResponse;

}
function ShrinkVirtualDisk_Task($ShrinkVirtualDiskRequestType)
{

$ShrinkVirtualDisk_TaskResponse = $this->soapClient->ShrinkVirtualDisk_Task($ShrinkVirtualDiskRequestType);
return $ShrinkVirtualDisk_TaskResponse;

}
function InflateVirtualDisk_Task($InflateVirtualDiskRequestType)
{

$InflateVirtualDisk_TaskResponse = $this->soapClient->InflateVirtualDisk_Task($InflateVirtualDiskRequestType);
return $InflateVirtualDisk_TaskResponse;

}
function EagerZeroVirtualDisk_Task($EagerZeroVirtualDiskRequestType)
{

$EagerZeroVirtualDisk_TaskResponse = $this->soapClient->EagerZeroVirtualDisk_Task($EagerZeroVirtualDiskRequestType);
return $EagerZeroVirtualDisk_TaskResponse;

}
function ZeroFillVirtualDisk_Task($ZeroFillVirtualDiskRequestType)
{

$ZeroFillVirtualDisk_TaskResponse = $this->soapClient->ZeroFillVirtualDisk_Task($ZeroFillVirtualDiskRequestType);
return $ZeroFillVirtualDisk_TaskResponse;

}
function SetVirtualDiskUuid($SetVirtualDiskUuidRequestType)
{

$SetVirtualDiskUuidResponse = $this->soapClient->SetVirtualDiskUuid($SetVirtualDiskUuidRequestType);
return $SetVirtualDiskUuidResponse;

}
function QueryVirtualDiskUuid($QueryVirtualDiskUuidRequestType)
{

$QueryVirtualDiskUuidResponse = $this->soapClient->QueryVirtualDiskUuid($QueryVirtualDiskUuidRequestType);
return $QueryVirtualDiskUuidResponse;

}
function QueryVirtualDiskGeometry($QueryVirtualDiskGeometryRequestType)
{

$QueryVirtualDiskGeometryResponse = $this->soapClient->QueryVirtualDiskGeometry($QueryVirtualDiskGeometryRequestType);
return $QueryVirtualDiskGeometryResponse;

}
function RefreshStorageInfo($RefreshStorageInfoRequestType)
{

$RefreshStorageInfoResponse = $this->soapClient->RefreshStorageInfo($RefreshStorageInfoRequestType);
return $RefreshStorageInfoResponse;

}
function CreateSnapshot_Task($CreateSnapshotRequestType)
{

$CreateSnapshot_TaskResponse = $this->soapClient->CreateSnapshot_Task($CreateSnapshotRequestType);
return $CreateSnapshot_TaskResponse;

}
function RevertToCurrentSnapshot_Task($RevertToCurrentSnapshotRequestType)
{

$RevertToCurrentSnapshot_TaskResponse = $this->soapClient->RevertToCurrentSnapshot_Task($RevertToCurrentSnapshotRequestType);
return $RevertToCurrentSnapshot_TaskResponse;

}
function RemoveAllSnapshots_Task($RemoveAllSnapshotsRequestType)
{

$RemoveAllSnapshots_TaskResponse = $this->soapClient->RemoveAllSnapshots_Task($RemoveAllSnapshotsRequestType);
return $RemoveAllSnapshots_TaskResponse;

}
function ConsolidateVMDisks_Task($ConsolidateVMDisksRequestType)
{

$ConsolidateVMDisks_TaskResponse = $this->soapClient->ConsolidateVMDisks_Task($ConsolidateVMDisksRequestType);
return $ConsolidateVMDisks_TaskResponse;

}
function EstimateStorageForConsolidateSnapshots_Task($EstimateStorageForConsolidateSnapshotsRequestType)
{

$EstimateStorageForConsolidateSnapshots_TaskResponse = $this->soapClient->EstimateStorageForConsolidateSnapshots_Task($EstimateStorageForConsolidateSnapshotsRequestType);
return $EstimateStorageForConsolidateSnapshots_TaskResponse;

}
function ReconfigVM_Task($ReconfigVMRequestType)
{

$ReconfigVM_TaskResponse = $this->soapClient->ReconfigVM_Task($ReconfigVMRequestType);
return $ReconfigVM_TaskResponse;

}
function UpgradeVM_Task($UpgradeVMRequestType)
{

$UpgradeVM_TaskResponse = $this->soapClient->UpgradeVM_Task($UpgradeVMRequestType);
return $UpgradeVM_TaskResponse;

}
function ExtractOvfEnvironment($ExtractOvfEnvironmentRequestType)
{

$ExtractOvfEnvironmentResponse = $this->soapClient->ExtractOvfEnvironment($ExtractOvfEnvironmentRequestType);
return $ExtractOvfEnvironmentResponse;

}
function PowerOnVM_Task($PowerOnVMRequestType)
{

$PowerOnVM_TaskResponse = $this->soapClient->PowerOnVM_Task($PowerOnVMRequestType);
return $PowerOnVM_TaskResponse;

}
function PowerOffVM_Task($PowerOffVMRequestType)
{

$PowerOffVM_TaskResponse = $this->soapClient->PowerOffVM_Task($PowerOffVMRequestType);
return $PowerOffVM_TaskResponse;

}
function SuspendVM_Task($SuspendVMRequestType)
{

$SuspendVM_TaskResponse = $this->soapClient->SuspendVM_Task($SuspendVMRequestType);
return $SuspendVM_TaskResponse;

}
function ResetVM_Task($ResetVMRequestType)
{

$ResetVM_TaskResponse = $this->soapClient->ResetVM_Task($ResetVMRequestType);
return $ResetVM_TaskResponse;

}
function ShutdownGuest($ShutdownGuestRequestType)
{

$ShutdownGuestResponse = $this->soapClient->ShutdownGuest($ShutdownGuestRequestType);
return $ShutdownGuestResponse;

}
function RebootGuest($RebootGuestRequestType)
{

$RebootGuestResponse = $this->soapClient->RebootGuest($RebootGuestRequestType);
return $RebootGuestResponse;

}
function StandbyGuest($StandbyGuestRequestType)
{

$StandbyGuestResponse = $this->soapClient->StandbyGuest($StandbyGuestRequestType);
return $StandbyGuestResponse;

}
function AnswerVM($AnswerVMRequestType)
{

$AnswerVMResponse = $this->soapClient->AnswerVM($AnswerVMRequestType);
return $AnswerVMResponse;

}
function CustomizeVM_Task($CustomizeVMRequestType)
{

$CustomizeVM_TaskResponse = $this->soapClient->CustomizeVM_Task($CustomizeVMRequestType);
return $CustomizeVM_TaskResponse;

}
function CheckCustomizationSpec($CheckCustomizationSpecRequestType)
{

$CheckCustomizationSpecResponse = $this->soapClient->CheckCustomizationSpec($CheckCustomizationSpecRequestType);
return $CheckCustomizationSpecResponse;

}
function MigrateVM_Task($MigrateVMRequestType)
{

$MigrateVM_TaskResponse = $this->soapClient->MigrateVM_Task($MigrateVMRequestType);
return $MigrateVM_TaskResponse;

}
function RelocateVM_Task($RelocateVMRequestType)
{

$RelocateVM_TaskResponse = $this->soapClient->RelocateVM_Task($RelocateVMRequestType);
return $RelocateVM_TaskResponse;

}
function CloneVM_Task($CloneVMRequestType)
{

$CloneVM_TaskResponse = $this->soapClient->CloneVM_Task($CloneVMRequestType);
return $CloneVM_TaskResponse;

}
function ExportVm($ExportVmRequestType)
{

$ExportVmResponse = $this->soapClient->ExportVm($ExportVmRequestType);
return $ExportVmResponse;

}
function MarkAsTemplate($MarkAsTemplateRequestType)
{

$MarkAsTemplateResponse = $this->soapClient->MarkAsTemplate($MarkAsTemplateRequestType);
return $MarkAsTemplateResponse;

}
function MarkAsVirtualMachine($MarkAsVirtualMachineRequestType)
{

$MarkAsVirtualMachineResponse = $this->soapClient->MarkAsVirtualMachine($MarkAsVirtualMachineRequestType);
return $MarkAsVirtualMachineResponse;

}
function UnregisterVM($UnregisterVMRequestType)
{

$UnregisterVMResponse = $this->soapClient->UnregisterVM($UnregisterVMRequestType);
return $UnregisterVMResponse;

}
function ResetGuestInformation($ResetGuestInformationRequestType)
{

$ResetGuestInformationResponse = $this->soapClient->ResetGuestInformation($ResetGuestInformationRequestType);
return $ResetGuestInformationResponse;

}
function MountToolsInstaller($MountToolsInstallerRequestType)
{

$MountToolsInstallerResponse = $this->soapClient->MountToolsInstaller($MountToolsInstallerRequestType);
return $MountToolsInstallerResponse;

}
function UnmountToolsInstaller($UnmountToolsInstallerRequestType)
{

$UnmountToolsInstallerResponse = $this->soapClient->UnmountToolsInstaller($UnmountToolsInstallerRequestType);
return $UnmountToolsInstallerResponse;

}
function UpgradeTools_Task($UpgradeToolsRequestType)
{

$UpgradeTools_TaskResponse = $this->soapClient->UpgradeTools_Task($UpgradeToolsRequestType);
return $UpgradeTools_TaskResponse;

}
function AcquireMksTicket($AcquireMksTicketRequestType)
{

$AcquireMksTicketResponse = $this->soapClient->AcquireMksTicket($AcquireMksTicketRequestType);
return $AcquireMksTicketResponse;

}
function AcquireTicket($AcquireTicketRequestType)
{

$AcquireTicketResponse = $this->soapClient->AcquireTicket($AcquireTicketRequestType);
return $AcquireTicketResponse;

}
function SetScreenResolution($SetScreenResolutionRequestType)
{

$SetScreenResolutionResponse = $this->soapClient->SetScreenResolution($SetScreenResolutionRequestType);
return $SetScreenResolutionResponse;

}
function DefragmentAllDisks($DefragmentAllDisksRequestType)
{

$DefragmentAllDisksResponse = $this->soapClient->DefragmentAllDisks($DefragmentAllDisksRequestType);
return $DefragmentAllDisksResponse;

}
function CreateSecondaryVM_Task($CreateSecondaryVMRequestType)
{

$CreateSecondaryVM_TaskResponse = $this->soapClient->CreateSecondaryVM_Task($CreateSecondaryVMRequestType);
return $CreateSecondaryVM_TaskResponse;

}
function TurnOffFaultToleranceForVM_Task($TurnOffFaultToleranceForVMRequestType)
{

$TurnOffFaultToleranceForVM_TaskResponse = $this->soapClient->TurnOffFaultToleranceForVM_Task($TurnOffFaultToleranceForVMRequestType);
return $TurnOffFaultToleranceForVM_TaskResponse;

}
function MakePrimaryVM_Task($MakePrimaryVMRequestType)
{

$MakePrimaryVM_TaskResponse = $this->soapClient->MakePrimaryVM_Task($MakePrimaryVMRequestType);
return $MakePrimaryVM_TaskResponse;

}
function TerminateFaultTolerantVM_Task($TerminateFaultTolerantVMRequestType)
{

$TerminateFaultTolerantVM_TaskResponse = $this->soapClient->TerminateFaultTolerantVM_Task($TerminateFaultTolerantVMRequestType);
return $TerminateFaultTolerantVM_TaskResponse;

}
function DisableSecondaryVM_Task($DisableSecondaryVMRequestType)
{

$DisableSecondaryVM_TaskResponse = $this->soapClient->DisableSecondaryVM_Task($DisableSecondaryVMRequestType);
return $DisableSecondaryVM_TaskResponse;

}
function EnableSecondaryVM_Task($EnableSecondaryVMRequestType)
{

$EnableSecondaryVM_TaskResponse = $this->soapClient->EnableSecondaryVM_Task($EnableSecondaryVMRequestType);
return $EnableSecondaryVM_TaskResponse;

}
function SetDisplayTopology($SetDisplayTopologyRequestType)
{

$SetDisplayTopologyResponse = $this->soapClient->SetDisplayTopology($SetDisplayTopologyRequestType);
return $SetDisplayTopologyResponse;

}
function StartRecording_Task($StartRecordingRequestType)
{

$StartRecording_TaskResponse = $this->soapClient->StartRecording_Task($StartRecordingRequestType);
return $StartRecording_TaskResponse;

}
function StopRecording_Task($StopRecordingRequestType)
{

$StopRecording_TaskResponse = $this->soapClient->StopRecording_Task($StopRecordingRequestType);
return $StopRecording_TaskResponse;

}
function StartReplaying_Task($StartReplayingRequestType)
{

$StartReplaying_TaskResponse = $this->soapClient->StartReplaying_Task($StartReplayingRequestType);
return $StartReplaying_TaskResponse;

}
function StopReplaying_Task($StopReplayingRequestType)
{

$StopReplaying_TaskResponse = $this->soapClient->StopReplaying_Task($StopReplayingRequestType);
return $StopReplaying_TaskResponse;

}
function PromoteDisks_Task($PromoteDisksRequestType)
{

$PromoteDisks_TaskResponse = $this->soapClient->PromoteDisks_Task($PromoteDisksRequestType);
return $PromoteDisks_TaskResponse;

}
function CreateScreenshot_Task($CreateScreenshotRequestType)
{

$CreateScreenshot_TaskResponse = $this->soapClient->CreateScreenshot_Task($CreateScreenshotRequestType);
return $CreateScreenshot_TaskResponse;

}
function QueryChangedDiskAreas($QueryChangedDiskAreasRequestType)
{

$QueryChangedDiskAreasResponse = $this->soapClient->QueryChangedDiskAreas($QueryChangedDiskAreasRequestType);
return $QueryChangedDiskAreasResponse;

}
function QueryUnownedFiles($QueryUnownedFilesRequestType)
{

$QueryUnownedFilesResponse = $this->soapClient->QueryUnownedFiles($QueryUnownedFilesRequestType);
return $QueryUnownedFilesResponse;

}
function reloadVirtualMachineFromPath_Task($reloadVirtualMachineFromPathRequestType)
{

$reloadVirtualMachineFromPath_TaskResponse = $this->soapClient->reloadVirtualMachineFromPath_Task($reloadVirtualMachineFromPathRequestType);
return $reloadVirtualMachineFromPath_TaskResponse;

}
function QueryFaultToleranceCompatibility($QueryFaultToleranceCompatibilityRequestType)
{

$QueryFaultToleranceCompatibilityResponse = $this->soapClient->QueryFaultToleranceCompatibility($QueryFaultToleranceCompatibilityRequestType);
return $QueryFaultToleranceCompatibilityResponse;

}
function RemoveAlarm($RemoveAlarmRequestType)
{

$RemoveAlarmResponse = $this->soapClient->RemoveAlarm($RemoveAlarmRequestType);
return $RemoveAlarmResponse;

}
function ReconfigureAlarm($ReconfigureAlarmRequestType)
{

$ReconfigureAlarmResponse = $this->soapClient->ReconfigureAlarm($ReconfigureAlarmRequestType);
return $ReconfigureAlarmResponse;

}
function CreateAlarm($CreateAlarmRequestType)
{

$CreateAlarmResponse = $this->soapClient->CreateAlarm($CreateAlarmRequestType);
return $CreateAlarmResponse;

}
function GetAlarm($GetAlarmRequestType)
{

$GetAlarmResponse = $this->soapClient->GetAlarm($GetAlarmRequestType);
return $GetAlarmResponse;

}
function AreAlarmActionsEnabled($AreAlarmActionsEnabledRequestType)
{

$AreAlarmActionsEnabledResponse = $this->soapClient->AreAlarmActionsEnabled($AreAlarmActionsEnabledRequestType);
return $AreAlarmActionsEnabledResponse;

}
function EnableAlarmActions($EnableAlarmActionsRequestType)
{

$EnableAlarmActionsResponse = $this->soapClient->EnableAlarmActions($EnableAlarmActionsRequestType);
return $EnableAlarmActionsResponse;

}
function GetAlarmState($GetAlarmStateRequestType)
{

$GetAlarmStateResponse = $this->soapClient->GetAlarmState($GetAlarmStateRequestType);
return $GetAlarmStateResponse;

}
function AcknowledgeAlarm($AcknowledgeAlarmRequestType)
{

$AcknowledgeAlarmResponse = $this->soapClient->AcknowledgeAlarm($AcknowledgeAlarmRequestType);
return $AcknowledgeAlarmResponse;

}
function ReconfigureDVPortgroup_Task($ReconfigureDVPortgroupRequestType)
{

$ReconfigureDVPortgroup_TaskResponse = $this->soapClient->ReconfigureDVPortgroup_Task($ReconfigureDVPortgroupRequestType);
return $ReconfigureDVPortgroup_TaskResponse;

}
function QueryAvailableDvsSpec($QueryAvailableDvsSpecRequestType)
{

$QueryAvailableDvsSpecResponse = $this->soapClient->QueryAvailableDvsSpec($QueryAvailableDvsSpecRequestType);
return $QueryAvailableDvsSpecResponse;

}
function QueryCompatibleHostForNewDvs($QueryCompatibleHostForNewDvsRequestType)
{

$QueryCompatibleHostForNewDvsResponse = $this->soapClient->QueryCompatibleHostForNewDvs($QueryCompatibleHostForNewDvsRequestType);
return $QueryCompatibleHostForNewDvsResponse;

}
function QueryCompatibleHostForExistingDvs($QueryCompatibleHostForExistingDvsRequestType)
{

$QueryCompatibleHostForExistingDvsResponse = $this->soapClient->QueryCompatibleHostForExistingDvs($QueryCompatibleHostForExistingDvsRequestType);
return $QueryCompatibleHostForExistingDvsResponse;

}
function QueryDvsCompatibleHostSpec($QueryDvsCompatibleHostSpecRequestType)
{

$QueryDvsCompatibleHostSpecResponse = $this->soapClient->QueryDvsCompatibleHostSpec($QueryDvsCompatibleHostSpecRequestType);
return $QueryDvsCompatibleHostSpecResponse;

}
function QueryDvsFeatureCapability($QueryDvsFeatureCapabilityRequestType)
{

$QueryDvsFeatureCapabilityResponse = $this->soapClient->QueryDvsFeatureCapability($QueryDvsFeatureCapabilityRequestType);
return $QueryDvsFeatureCapabilityResponse;

}
function QueryDvsByUuid($QueryDvsByUuidRequestType)
{

$QueryDvsByUuidResponse = $this->soapClient->QueryDvsByUuid($QueryDvsByUuidRequestType);
return $QueryDvsByUuidResponse;

}
function QueryDvsConfigTarget($QueryDvsConfigTargetRequestType)
{

$QueryDvsConfigTargetResponse = $this->soapClient->QueryDvsConfigTarget($QueryDvsConfigTargetRequestType);
return $QueryDvsConfigTargetResponse;

}
function QueryDvsCheckCompatibility($QueryDvsCheckCompatibilityRequestType)
{

$QueryDvsCheckCompatibilityResponse = $this->soapClient->QueryDvsCheckCompatibility($QueryDvsCheckCompatibilityRequestType);
return $QueryDvsCheckCompatibilityResponse;

}
function RectifyDvsOnHost_Task($RectifyDvsOnHostRequestType)
{

$RectifyDvsOnHost_TaskResponse = $this->soapClient->RectifyDvsOnHost_Task($RectifyDvsOnHostRequestType);
return $RectifyDvsOnHost_TaskResponse;

}
function ReadNextEvents($ReadNextEventsRequestType)
{

$ReadNextEventsResponse = $this->soapClient->ReadNextEvents($ReadNextEventsRequestType);
return $ReadNextEventsResponse;

}
function ReadPreviousEvents($ReadPreviousEventsRequestType)
{

$ReadPreviousEventsResponse = $this->soapClient->ReadPreviousEvents($ReadPreviousEventsRequestType);
return $ReadPreviousEventsResponse;

}
function RetrieveArgumentDescription($RetrieveArgumentDescriptionRequestType)
{

$RetrieveArgumentDescriptionResponse = $this->soapClient->RetrieveArgumentDescription($RetrieveArgumentDescriptionRequestType);
return $RetrieveArgumentDescriptionResponse;

}
function CreateCollectorForEvents($CreateCollectorForEventsRequestType)
{

$CreateCollectorForEventsResponse = $this->soapClient->CreateCollectorForEvents($CreateCollectorForEventsRequestType);
return $CreateCollectorForEventsResponse;

}
function LogUserEvent($LogUserEventRequestType)
{

$LogUserEventResponse = $this->soapClient->LogUserEvent($LogUserEventRequestType);
return $LogUserEventResponse;

}
function QueryEvents($QueryEventsRequestType)
{

$QueryEventsResponse = $this->soapClient->QueryEvents($QueryEventsRequestType);
return $QueryEventsResponse;

}
function PostEvent($PostEventRequestType)
{

$PostEventResponse = $this->soapClient->PostEvent($PostEventRequestType);
return $PostEventResponse;

}
function JoinDomain_Task($JoinDomainRequestType)
{

$JoinDomain_TaskResponse = $this->soapClient->JoinDomain_Task($JoinDomainRequestType);
return $JoinDomain_TaskResponse;

}
function JoinDomainWithCAM_Task($JoinDomainWithCAMRequestType)
{

$JoinDomainWithCAM_TaskResponse = $this->soapClient->JoinDomainWithCAM_Task($JoinDomainWithCAMRequestType);
return $JoinDomainWithCAM_TaskResponse;

}
function ImportCertificateForCAM_Task($ImportCertificateForCAMRequestType)
{

$ImportCertificateForCAM_TaskResponse = $this->soapClient->ImportCertificateForCAM_Task($ImportCertificateForCAMRequestType);
return $ImportCertificateForCAM_TaskResponse;

}
function LeaveCurrentDomain_Task($LeaveCurrentDomainRequestType)
{

$LeaveCurrentDomain_TaskResponse = $this->soapClient->LeaveCurrentDomain_Task($LeaveCurrentDomainRequestType);
return $LeaveCurrentDomain_TaskResponse;

}
function ReconfigureAutostart($ReconfigureAutostartRequestType)
{

$ReconfigureAutostartResponse = $this->soapClient->ReconfigureAutostart($ReconfigureAutostartRequestType);
return $ReconfigureAutostartResponse;

}
function AutoStartPowerOn($AutoStartPowerOnRequestType)
{

$AutoStartPowerOnResponse = $this->soapClient->AutoStartPowerOn($AutoStartPowerOnRequestType);
return $AutoStartPowerOnResponse;

}
function AutoStartPowerOff($AutoStartPowerOffRequestType)
{

$AutoStartPowerOffResponse = $this->soapClient->AutoStartPowerOff($AutoStartPowerOffRequestType);
return $AutoStartPowerOffResponse;

}
function QueryBootDevices($QueryBootDevicesRequestType)
{

$QueryBootDevicesResponse = $this->soapClient->QueryBootDevices($QueryBootDevicesRequestType);
return $QueryBootDevicesResponse;

}
function UpdateBootDevice($UpdateBootDeviceRequestType)
{

$UpdateBootDeviceResponse = $this->soapClient->UpdateBootDevice($UpdateBootDeviceRequestType);
return $UpdateBootDeviceResponse;

}
function ConfigureHostCache_Task($ConfigureHostCacheRequestType)
{

$ConfigureHostCache_TaskResponse = $this->soapClient->ConfigureHostCache_Task($ConfigureHostCacheRequestType);
return $ConfigureHostCache_TaskResponse;

}
function EnableHyperThreading($EnableHyperThreadingRequestType)
{

$EnableHyperThreadingResponse = $this->soapClient->EnableHyperThreading($EnableHyperThreadingRequestType);
return $EnableHyperThreadingResponse;

}
function DisableHyperThreading($DisableHyperThreadingRequestType)
{

$DisableHyperThreadingResponse = $this->soapClient->DisableHyperThreading($DisableHyperThreadingRequestType);
return $DisableHyperThreadingResponse;

}
function SearchDatastore_Task($SearchDatastoreRequestType)
{

$SearchDatastore_TaskResponse = $this->soapClient->SearchDatastore_Task($SearchDatastoreRequestType);
return $SearchDatastore_TaskResponse;

}
function SearchDatastoreSubFolders_Task($SearchDatastoreSubFoldersRequestType)
{

$SearchDatastoreSubFolders_TaskResponse = $this->soapClient->SearchDatastoreSubFolders_Task($SearchDatastoreSubFoldersRequestType);
return $SearchDatastoreSubFolders_TaskResponse;

}
function DeleteFile($DeleteFileRequestType)
{

$DeleteFileResponse = $this->soapClient->DeleteFile($DeleteFileRequestType);
return $DeleteFileResponse;

}
function UpdateLocalSwapDatastore($UpdateLocalSwapDatastoreRequestType)
{

$UpdateLocalSwapDatastoreResponse = $this->soapClient->UpdateLocalSwapDatastore($UpdateLocalSwapDatastoreRequestType);
return $UpdateLocalSwapDatastoreResponse;

}
function QueryAvailableDisksForVmfs($QueryAvailableDisksForVmfsRequestType)
{

$QueryAvailableDisksForVmfsResponse = $this->soapClient->QueryAvailableDisksForVmfs($QueryAvailableDisksForVmfsRequestType);
return $QueryAvailableDisksForVmfsResponse;

}
function QueryVmfsDatastoreCreateOptions($QueryVmfsDatastoreCreateOptionsRequestType)
{

$QueryVmfsDatastoreCreateOptionsResponse = $this->soapClient->QueryVmfsDatastoreCreateOptions($QueryVmfsDatastoreCreateOptionsRequestType);
return $QueryVmfsDatastoreCreateOptionsResponse;

}
function CreateVmfsDatastore($CreateVmfsDatastoreRequestType)
{

$CreateVmfsDatastoreResponse = $this->soapClient->CreateVmfsDatastore($CreateVmfsDatastoreRequestType);
return $CreateVmfsDatastoreResponse;

}
function QueryVmfsDatastoreExtendOptions($QueryVmfsDatastoreExtendOptionsRequestType)
{

$QueryVmfsDatastoreExtendOptionsResponse = $this->soapClient->QueryVmfsDatastoreExtendOptions($QueryVmfsDatastoreExtendOptionsRequestType);
return $QueryVmfsDatastoreExtendOptionsResponse;

}
function QueryVmfsDatastoreExpandOptions($QueryVmfsDatastoreExpandOptionsRequestType)
{

$QueryVmfsDatastoreExpandOptionsResponse = $this->soapClient->QueryVmfsDatastoreExpandOptions($QueryVmfsDatastoreExpandOptionsRequestType);
return $QueryVmfsDatastoreExpandOptionsResponse;

}
function ExtendVmfsDatastore($ExtendVmfsDatastoreRequestType)
{

$ExtendVmfsDatastoreResponse = $this->soapClient->ExtendVmfsDatastore($ExtendVmfsDatastoreRequestType);
return $ExtendVmfsDatastoreResponse;

}
function ExpandVmfsDatastore($ExpandVmfsDatastoreRequestType)
{

$ExpandVmfsDatastoreResponse = $this->soapClient->ExpandVmfsDatastore($ExpandVmfsDatastoreRequestType);
return $ExpandVmfsDatastoreResponse;

}
function CreateNasDatastore($CreateNasDatastoreRequestType)
{

$CreateNasDatastoreResponse = $this->soapClient->CreateNasDatastore($CreateNasDatastoreRequestType);
return $CreateNasDatastoreResponse;

}
function CreateLocalDatastore($CreateLocalDatastoreRequestType)
{

$CreateLocalDatastoreResponse = $this->soapClient->CreateLocalDatastore($CreateLocalDatastoreRequestType);
return $CreateLocalDatastoreResponse;

}
function RemoveDatastore($RemoveDatastoreRequestType)
{

$RemoveDatastoreResponse = $this->soapClient->RemoveDatastore($RemoveDatastoreRequestType);
return $RemoveDatastoreResponse;

}
function ConfigureDatastorePrincipal($ConfigureDatastorePrincipalRequestType)
{

$ConfigureDatastorePrincipalResponse = $this->soapClient->ConfigureDatastorePrincipal($ConfigureDatastorePrincipalRequestType);
return $ConfigureDatastorePrincipalResponse;

}
function QueryUnresolvedVmfsVolumes($QueryUnresolvedVmfsVolumesRequestType)
{

$QueryUnresolvedVmfsVolumesResponse = $this->soapClient->QueryUnresolvedVmfsVolumes($QueryUnresolvedVmfsVolumesRequestType);
return $QueryUnresolvedVmfsVolumesResponse;

}
function ResignatureUnresolvedVmfsVolume_Task($ResignatureUnresolvedVmfsVolumeRequestType)
{

$ResignatureUnresolvedVmfsVolume_TaskResponse = $this->soapClient->ResignatureUnresolvedVmfsVolume_Task($ResignatureUnresolvedVmfsVolumeRequestType);
return $ResignatureUnresolvedVmfsVolume_TaskResponse;

}
function UpdateDateTimeConfig($UpdateDateTimeConfigRequestType)
{

$UpdateDateTimeConfigResponse = $this->soapClient->UpdateDateTimeConfig($UpdateDateTimeConfigRequestType);
return $UpdateDateTimeConfigResponse;

}
function QueryAvailableTimeZones($QueryAvailableTimeZonesRequestType)
{

$QueryAvailableTimeZonesResponse = $this->soapClient->QueryAvailableTimeZones($QueryAvailableTimeZonesRequestType);
return $QueryAvailableTimeZonesResponse;

}
function QueryDateTime($QueryDateTimeRequestType)
{

$QueryDateTimeResponse = $this->soapClient->QueryDateTime($QueryDateTimeRequestType);
return $QueryDateTimeResponse;

}
function UpdateDateTime($UpdateDateTimeRequestType)
{

$UpdateDateTimeResponse = $this->soapClient->UpdateDateTime($UpdateDateTimeRequestType);
return $UpdateDateTimeResponse;

}
function RefreshDateTimeSystem($RefreshDateTimeSystemRequestType)
{

$RefreshDateTimeSystemResponse = $this->soapClient->RefreshDateTimeSystem($RefreshDateTimeSystemRequestType);
return $RefreshDateTimeSystemResponse;

}
function QueryAvailablePartition($QueryAvailablePartitionRequestType)
{

$QueryAvailablePartitionResponse = $this->soapClient->QueryAvailablePartition($QueryAvailablePartitionRequestType);
return $QueryAvailablePartitionResponse;

}
function SelectActivePartition($SelectActivePartitionRequestType)
{

$SelectActivePartitionResponse = $this->soapClient->SelectActivePartition($SelectActivePartitionRequestType);
return $SelectActivePartitionResponse;

}
function QueryPartitionCreateOptions($QueryPartitionCreateOptionsRequestType)
{

$QueryPartitionCreateOptionsResponse = $this->soapClient->QueryPartitionCreateOptions($QueryPartitionCreateOptionsRequestType);
return $QueryPartitionCreateOptionsResponse;

}
function QueryPartitionCreateDesc($QueryPartitionCreateDescRequestType)
{

$QueryPartitionCreateDescResponse = $this->soapClient->QueryPartitionCreateDesc($QueryPartitionCreateDescRequestType);
return $QueryPartitionCreateDescResponse;

}
function CreateDiagnosticPartition($CreateDiagnosticPartitionRequestType)
{

$CreateDiagnosticPartitionResponse = $this->soapClient->CreateDiagnosticPartition($CreateDiagnosticPartitionRequestType);
return $CreateDiagnosticPartitionResponse;

}
function EsxAgentHostManagerUpdateConfig($EsxAgentHostManagerUpdateConfigRequestType)
{

$EsxAgentHostManagerUpdateConfigResponse = $this->soapClient->EsxAgentHostManagerUpdateConfig($EsxAgentHostManagerUpdateConfigRequestType);
return $EsxAgentHostManagerUpdateConfigResponse;

}
function UpdateDefaultPolicy($UpdateDefaultPolicyRequestType)
{

$UpdateDefaultPolicyResponse = $this->soapClient->UpdateDefaultPolicy($UpdateDefaultPolicyRequestType);
return $UpdateDefaultPolicyResponse;

}
function EnableRuleset($EnableRulesetRequestType)
{

$EnableRulesetResponse = $this->soapClient->EnableRuleset($EnableRulesetRequestType);
return $EnableRulesetResponse;

}
function DisableRuleset($DisableRulesetRequestType)
{

$DisableRulesetResponse = $this->soapClient->DisableRuleset($DisableRulesetRequestType);
return $DisableRulesetResponse;

}
function UpdateRuleset($UpdateRulesetRequestType)
{

$UpdateRulesetResponse = $this->soapClient->UpdateRuleset($UpdateRulesetRequestType);
return $UpdateRulesetResponse;

}
function RefreshFirewall($RefreshFirewallRequestType)
{

$RefreshFirewallResponse = $this->soapClient->RefreshFirewall($RefreshFirewallRequestType);
return $RefreshFirewallResponse;

}
function ResetFirmwareToFactoryDefaults($ResetFirmwareToFactoryDefaultsRequestType)
{

$ResetFirmwareToFactoryDefaultsResponse = $this->soapClient->ResetFirmwareToFactoryDefaults($ResetFirmwareToFactoryDefaultsRequestType);
return $ResetFirmwareToFactoryDefaultsResponse;

}
function BackupFirmwareConfiguration($BackupFirmwareConfigurationRequestType)
{

$BackupFirmwareConfigurationResponse = $this->soapClient->BackupFirmwareConfiguration($BackupFirmwareConfigurationRequestType);
return $BackupFirmwareConfigurationResponse;

}
function QueryFirmwareConfigUploadURL($QueryFirmwareConfigUploadURLRequestType)
{

$QueryFirmwareConfigUploadURLResponse = $this->soapClient->QueryFirmwareConfigUploadURL($QueryFirmwareConfigUploadURLRequestType);
return $QueryFirmwareConfigUploadURLResponse;

}
function RestoreFirmwareConfiguration($RestoreFirmwareConfigurationRequestType)
{

$RestoreFirmwareConfigurationResponse = $this->soapClient->RestoreFirmwareConfiguration($RestoreFirmwareConfigurationRequestType);
return $RestoreFirmwareConfigurationResponse;

}
function RefreshHealthStatusSystem($RefreshHealthStatusSystemRequestType)
{

$RefreshHealthStatusSystemResponse = $this->soapClient->RefreshHealthStatusSystem($RefreshHealthStatusSystemRequestType);
return $RefreshHealthStatusSystemResponse;

}
function ResetSystemHealthInfo($ResetSystemHealthInfoRequestType)
{

$ResetSystemHealthInfoResponse = $this->soapClient->ResetSystemHealthInfo($ResetSystemHealthInfoRequestType);
return $ResetSystemHealthInfoResponse;

}
function HostImageConfigGetAcceptance($HostImageConfigGetAcceptanceRequestType)
{

$HostImageConfigGetAcceptanceResponse = $this->soapClient->HostImageConfigGetAcceptance($HostImageConfigGetAcceptanceRequestType);
return $HostImageConfigGetAcceptanceResponse;

}
function HostImageConfigGetProfile($HostImageConfigGetProfileRequestType)
{

$HostImageConfigGetProfileResponse = $this->soapClient->HostImageConfigGetProfile($HostImageConfigGetProfileRequestType);
return $HostImageConfigGetProfileResponse;

}
function UpdateHostImageAcceptanceLevel($UpdateHostImageAcceptanceLevelRequestType)
{

$UpdateHostImageAcceptanceLevelResponse = $this->soapClient->UpdateHostImageAcceptanceLevel($UpdateHostImageAcceptanceLevelRequestType);
return $UpdateHostImageAcceptanceLevelResponse;

}
function QueryVnicStatus($QueryVnicStatusRequestType)
{

$QueryVnicStatusResponse = $this->soapClient->QueryVnicStatus($QueryVnicStatusRequestType);
return $QueryVnicStatusResponse;

}
function QueryPnicStatus($QueryPnicStatusRequestType)
{

$QueryPnicStatusResponse = $this->soapClient->QueryPnicStatus($QueryPnicStatusRequestType);
return $QueryPnicStatusResponse;

}
function QueryBoundVnics($QueryBoundVnicsRequestType)
{

$QueryBoundVnicsResponse = $this->soapClient->QueryBoundVnics($QueryBoundVnicsRequestType);
return $QueryBoundVnicsResponse;

}
function QueryCandidateNics($QueryCandidateNicsRequestType)
{

$QueryCandidateNicsResponse = $this->soapClient->QueryCandidateNics($QueryCandidateNicsRequestType);
return $QueryCandidateNicsResponse;

}
function BindVnic($BindVnicRequestType)
{

$BindVnicResponse = $this->soapClient->BindVnic($BindVnicRequestType);
return $BindVnicResponse;

}
function UnbindVnic($UnbindVnicRequestType)
{

$UnbindVnicResponse = $this->soapClient->UnbindVnic($UnbindVnicRequestType);
return $UnbindVnicResponse;

}
function QueryMigrationDependencies($QueryMigrationDependenciesRequestType)
{

$QueryMigrationDependenciesResponse = $this->soapClient->QueryMigrationDependencies($QueryMigrationDependenciesRequestType);
return $QueryMigrationDependenciesResponse;

}
function QueryModules($QueryModulesRequestType)
{

$QueryModulesResponse = $this->soapClient->QueryModules($QueryModulesRequestType);
return $QueryModulesResponse;

}
function UpdateModuleOptionString($UpdateModuleOptionStringRequestType)
{

$UpdateModuleOptionStringResponse = $this->soapClient->UpdateModuleOptionString($UpdateModuleOptionStringRequestType);
return $UpdateModuleOptionStringResponse;

}
function QueryConfiguredModuleOptionString($QueryConfiguredModuleOptionStringRequestType)
{

$QueryConfiguredModuleOptionStringResponse = $this->soapClient->QueryConfiguredModuleOptionString($QueryConfiguredModuleOptionStringRequestType);
return $QueryConfiguredModuleOptionStringResponse;

}
function CreateUser($CreateUserRequestType)
{

$CreateUserResponse = $this->soapClient->CreateUser($CreateUserRequestType);
return $CreateUserResponse;

}
function UpdateUser($UpdateUserRequestType)
{

$UpdateUserResponse = $this->soapClient->UpdateUser($UpdateUserRequestType);
return $UpdateUserResponse;

}
function CreateGroup($CreateGroupRequestType)
{

$CreateGroupResponse = $this->soapClient->CreateGroup($CreateGroupRequestType);
return $CreateGroupResponse;

}
function RemoveUser($RemoveUserRequestType)
{

$RemoveUserResponse = $this->soapClient->RemoveUser($RemoveUserRequestType);
return $RemoveUserResponse;

}
function RemoveGroup($RemoveGroupRequestType)
{

$RemoveGroupResponse = $this->soapClient->RemoveGroup($RemoveGroupRequestType);
return $RemoveGroupResponse;

}
function AssignUserToGroup($AssignUserToGroupRequestType)
{

$AssignUserToGroupResponse = $this->soapClient->AssignUserToGroup($AssignUserToGroupRequestType);
return $AssignUserToGroupResponse;

}
function UnassignUserFromGroup($UnassignUserFromGroupRequestType)
{

$UnassignUserFromGroupResponse = $this->soapClient->UnassignUserFromGroup($UnassignUserFromGroupRequestType);
return $UnassignUserFromGroupResponse;

}
function ReconfigureServiceConsoleReservation($ReconfigureServiceConsoleReservationRequestType)
{

$ReconfigureServiceConsoleReservationResponse = $this->soapClient->ReconfigureServiceConsoleReservation($ReconfigureServiceConsoleReservationRequestType);
return $ReconfigureServiceConsoleReservationResponse;

}
function ReconfigureVirtualMachineReservation($ReconfigureVirtualMachineReservationRequestType)
{

$ReconfigureVirtualMachineReservationResponse = $this->soapClient->ReconfigureVirtualMachineReservation($ReconfigureVirtualMachineReservationRequestType);
return $ReconfigureVirtualMachineReservationResponse;

}
function UpdateNetworkConfig($UpdateNetworkConfigRequestType)
{

$UpdateNetworkConfigResponse = $this->soapClient->UpdateNetworkConfig($UpdateNetworkConfigRequestType);
return $UpdateNetworkConfigResponse;

}
function UpdateDnsConfig($UpdateDnsConfigRequestType)
{

$UpdateDnsConfigResponse = $this->soapClient->UpdateDnsConfig($UpdateDnsConfigRequestType);
return $UpdateDnsConfigResponse;

}
function UpdateIpRouteConfig($UpdateIpRouteConfigRequestType)
{

$UpdateIpRouteConfigResponse = $this->soapClient->UpdateIpRouteConfig($UpdateIpRouteConfigRequestType);
return $UpdateIpRouteConfigResponse;

}
function UpdateConsoleIpRouteConfig($UpdateConsoleIpRouteConfigRequestType)
{

$UpdateConsoleIpRouteConfigResponse = $this->soapClient->UpdateConsoleIpRouteConfig($UpdateConsoleIpRouteConfigRequestType);
return $UpdateConsoleIpRouteConfigResponse;

}
function UpdateIpRouteTableConfig($UpdateIpRouteTableConfigRequestType)
{

$UpdateIpRouteTableConfigResponse = $this->soapClient->UpdateIpRouteTableConfig($UpdateIpRouteTableConfigRequestType);
return $UpdateIpRouteTableConfigResponse;

}
function AddVirtualSwitch($AddVirtualSwitchRequestType)
{

$AddVirtualSwitchResponse = $this->soapClient->AddVirtualSwitch($AddVirtualSwitchRequestType);
return $AddVirtualSwitchResponse;

}
function RemoveVirtualSwitch($RemoveVirtualSwitchRequestType)
{

$RemoveVirtualSwitchResponse = $this->soapClient->RemoveVirtualSwitch($RemoveVirtualSwitchRequestType);
return $RemoveVirtualSwitchResponse;

}
function UpdateVirtualSwitch($UpdateVirtualSwitchRequestType)
{

$UpdateVirtualSwitchResponse = $this->soapClient->UpdateVirtualSwitch($UpdateVirtualSwitchRequestType);
return $UpdateVirtualSwitchResponse;

}
function AddPortGroup($AddPortGroupRequestType)
{

$AddPortGroupResponse = $this->soapClient->AddPortGroup($AddPortGroupRequestType);
return $AddPortGroupResponse;

}
function RemovePortGroup($RemovePortGroupRequestType)
{

$RemovePortGroupResponse = $this->soapClient->RemovePortGroup($RemovePortGroupRequestType);
return $RemovePortGroupResponse;

}
function UpdatePortGroup($UpdatePortGroupRequestType)
{

$UpdatePortGroupResponse = $this->soapClient->UpdatePortGroup($UpdatePortGroupRequestType);
return $UpdatePortGroupResponse;

}
function UpdatePhysicalNicLinkSpeed($UpdatePhysicalNicLinkSpeedRequestType)
{

$UpdatePhysicalNicLinkSpeedResponse = $this->soapClient->UpdatePhysicalNicLinkSpeed($UpdatePhysicalNicLinkSpeedRequestType);
return $UpdatePhysicalNicLinkSpeedResponse;

}
function QueryNetworkHint($QueryNetworkHintRequestType)
{

$QueryNetworkHintResponse = $this->soapClient->QueryNetworkHint($QueryNetworkHintRequestType);
return $QueryNetworkHintResponse;

}
function AddVirtualNic($AddVirtualNicRequestType)
{

$AddVirtualNicResponse = $this->soapClient->AddVirtualNic($AddVirtualNicRequestType);
return $AddVirtualNicResponse;

}
function RemoveVirtualNic($RemoveVirtualNicRequestType)
{

$RemoveVirtualNicResponse = $this->soapClient->RemoveVirtualNic($RemoveVirtualNicRequestType);
return $RemoveVirtualNicResponse;

}
function UpdateVirtualNic($UpdateVirtualNicRequestType)
{

$UpdateVirtualNicResponse = $this->soapClient->UpdateVirtualNic($UpdateVirtualNicRequestType);
return $UpdateVirtualNicResponse;

}
function AddServiceConsoleVirtualNic($AddServiceConsoleVirtualNicRequestType)
{

$AddServiceConsoleVirtualNicResponse = $this->soapClient->AddServiceConsoleVirtualNic($AddServiceConsoleVirtualNicRequestType);
return $AddServiceConsoleVirtualNicResponse;

}
function RemoveServiceConsoleVirtualNic($RemoveServiceConsoleVirtualNicRequestType)
{

$RemoveServiceConsoleVirtualNicResponse = $this->soapClient->RemoveServiceConsoleVirtualNic($RemoveServiceConsoleVirtualNicRequestType);
return $RemoveServiceConsoleVirtualNicResponse;

}
function UpdateServiceConsoleVirtualNic($UpdateServiceConsoleVirtualNicRequestType)
{

$UpdateServiceConsoleVirtualNicResponse = $this->soapClient->UpdateServiceConsoleVirtualNic($UpdateServiceConsoleVirtualNicRequestType);
return $UpdateServiceConsoleVirtualNicResponse;

}
function RestartServiceConsoleVirtualNic($RestartServiceConsoleVirtualNicRequestType)
{

$RestartServiceConsoleVirtualNicResponse = $this->soapClient->RestartServiceConsoleVirtualNic($RestartServiceConsoleVirtualNicRequestType);
return $RestartServiceConsoleVirtualNicResponse;

}
function RefreshNetworkSystem($RefreshNetworkSystemRequestType)
{

$RefreshNetworkSystemResponse = $this->soapClient->RefreshNetworkSystem($RefreshNetworkSystemRequestType);
return $RefreshNetworkSystemResponse;

}
function CheckHostPatch_Task($CheckHostPatchRequestType)
{

$CheckHostPatch_TaskResponse = $this->soapClient->CheckHostPatch_Task($CheckHostPatchRequestType);
return $CheckHostPatch_TaskResponse;

}
function ScanHostPatch_Task($ScanHostPatchRequestType)
{

$ScanHostPatch_TaskResponse = $this->soapClient->ScanHostPatch_Task($ScanHostPatchRequestType);
return $ScanHostPatch_TaskResponse;

}
function ScanHostPatchV2_Task($ScanHostPatchV2RequestType)
{

$ScanHostPatchV2_TaskResponse = $this->soapClient->ScanHostPatchV2_Task($ScanHostPatchV2RequestType);
return $ScanHostPatchV2_TaskResponse;

}
function StageHostPatch_Task($StageHostPatchRequestType)
{

$StageHostPatch_TaskResponse = $this->soapClient->StageHostPatch_Task($StageHostPatchRequestType);
return $StageHostPatch_TaskResponse;

}
function InstallHostPatch_Task($InstallHostPatchRequestType)
{

$InstallHostPatch_TaskResponse = $this->soapClient->InstallHostPatch_Task($InstallHostPatchRequestType);
return $InstallHostPatch_TaskResponse;

}
function InstallHostPatchV2_Task($InstallHostPatchV2RequestType)
{

$InstallHostPatchV2_TaskResponse = $this->soapClient->InstallHostPatchV2_Task($InstallHostPatchV2RequestType);
return $InstallHostPatchV2_TaskResponse;

}
function UninstallHostPatch_Task($UninstallHostPatchRequestType)
{

$UninstallHostPatch_TaskResponse = $this->soapClient->UninstallHostPatch_Task($UninstallHostPatchRequestType);
return $UninstallHostPatch_TaskResponse;

}
function QueryHostPatch_Task($QueryHostPatchRequestType)
{

$QueryHostPatch_TaskResponse = $this->soapClient->QueryHostPatch_Task($QueryHostPatchRequestType);
return $QueryHostPatch_TaskResponse;

}
function Refresh($RefreshRequestType)
{

$RefreshResponse = $this->soapClient->Refresh($RefreshRequestType);
return $RefreshResponse;

}
function UpdatePassthruConfig($UpdatePassthruConfigRequestType)
{

$UpdatePassthruConfigResponse = $this->soapClient->UpdatePassthruConfig($UpdatePassthruConfigRequestType);
return $UpdatePassthruConfigResponse;

}
function ConfigurePowerPolicy($ConfigurePowerPolicyRequestType)
{

$ConfigurePowerPolicyResponse = $this->soapClient->ConfigurePowerPolicy($ConfigurePowerPolicyRequestType);
return $ConfigurePowerPolicyResponse;

}
function UpdateServicePolicy($UpdateServicePolicyRequestType)
{

$UpdateServicePolicyResponse = $this->soapClient->UpdateServicePolicy($UpdateServicePolicyRequestType);
return $UpdateServicePolicyResponse;

}
function StartService($StartServiceRequestType)
{

$StartServiceResponse = $this->soapClient->StartService($StartServiceRequestType);
return $StartServiceResponse;

}
function StopService($StopServiceRequestType)
{

$StopServiceResponse = $this->soapClient->StopService($StopServiceRequestType);
return $StopServiceResponse;

}
function RestartService($RestartServiceRequestType)
{

$RestartServiceResponse = $this->soapClient->RestartService($RestartServiceRequestType);
return $RestartServiceResponse;

}
function UninstallService($UninstallServiceRequestType)
{

$UninstallServiceResponse = $this->soapClient->UninstallService($UninstallServiceRequestType);
return $UninstallServiceResponse;

}
function RefreshServices($RefreshServicesRequestType)
{

$RefreshServicesResponse = $this->soapClient->RefreshServices($RefreshServicesRequestType);
return $RefreshServicesResponse;

}
function ReconfigureSnmpAgent($ReconfigureSnmpAgentRequestType)
{

$ReconfigureSnmpAgentResponse = $this->soapClient->ReconfigureSnmpAgent($ReconfigureSnmpAgentRequestType);
return $ReconfigureSnmpAgentResponse;

}
function SendTestNotification($SendTestNotificationRequestType)
{

$SendTestNotificationResponse = $this->soapClient->SendTestNotification($SendTestNotificationRequestType);
return $SendTestNotificationResponse;

}
function RetrieveDiskPartitionInfo($RetrieveDiskPartitionInfoRequestType)
{

$RetrieveDiskPartitionInfoResponse = $this->soapClient->RetrieveDiskPartitionInfo($RetrieveDiskPartitionInfoRequestType);
return $RetrieveDiskPartitionInfoResponse;

}
function ComputeDiskPartitionInfo($ComputeDiskPartitionInfoRequestType)
{

$ComputeDiskPartitionInfoResponse = $this->soapClient->ComputeDiskPartitionInfo($ComputeDiskPartitionInfoRequestType);
return $ComputeDiskPartitionInfoResponse;

}
function ComputeDiskPartitionInfoForResize($ComputeDiskPartitionInfoForResizeRequestType)
{

$ComputeDiskPartitionInfoForResizeResponse = $this->soapClient->ComputeDiskPartitionInfoForResize($ComputeDiskPartitionInfoForResizeRequestType);
return $ComputeDiskPartitionInfoForResizeResponse;

}
function UpdateDiskPartitions($UpdateDiskPartitionsRequestType)
{

$UpdateDiskPartitionsResponse = $this->soapClient->UpdateDiskPartitions($UpdateDiskPartitionsRequestType);
return $UpdateDiskPartitionsResponse;

}
function FormatVmfs($FormatVmfsRequestType)
{

$FormatVmfsResponse = $this->soapClient->FormatVmfs($FormatVmfsRequestType);
return $FormatVmfsResponse;

}
function MountVmfsVolume($MountVmfsVolumeRequestType)
{

$MountVmfsVolumeResponse = $this->soapClient->MountVmfsVolume($MountVmfsVolumeRequestType);
return $MountVmfsVolumeResponse;

}
function UnmountVmfsVolume($UnmountVmfsVolumeRequestType)
{

$UnmountVmfsVolumeResponse = $this->soapClient->UnmountVmfsVolume($UnmountVmfsVolumeRequestType);
return $UnmountVmfsVolumeResponse;

}
function RescanVmfs($RescanVmfsRequestType)
{

$RescanVmfsResponse = $this->soapClient->RescanVmfs($RescanVmfsRequestType);
return $RescanVmfsResponse;

}
function AttachVmfsExtent($AttachVmfsExtentRequestType)
{

$AttachVmfsExtentResponse = $this->soapClient->AttachVmfsExtent($AttachVmfsExtentRequestType);
return $AttachVmfsExtentResponse;

}
function ExpandVmfsExtent($ExpandVmfsExtentRequestType)
{

$ExpandVmfsExtentResponse = $this->soapClient->ExpandVmfsExtent($ExpandVmfsExtentRequestType);
return $ExpandVmfsExtentResponse;

}
function UpgradeVmfs($UpgradeVmfsRequestType)
{

$UpgradeVmfsResponse = $this->soapClient->UpgradeVmfs($UpgradeVmfsRequestType);
return $UpgradeVmfsResponse;

}
function UpgradeVmLayout($UpgradeVmLayoutRequestType)
{

$UpgradeVmLayoutResponse = $this->soapClient->UpgradeVmLayout($UpgradeVmLayoutRequestType);
return $UpgradeVmLayoutResponse;

}
function QueryUnresolvedVmfsVolume($QueryUnresolvedVmfsVolumeRequestType)
{

$QueryUnresolvedVmfsVolumeResponse = $this->soapClient->QueryUnresolvedVmfsVolume($QueryUnresolvedVmfsVolumeRequestType);
return $QueryUnresolvedVmfsVolumeResponse;

}
function ResolveMultipleUnresolvedVmfsVolumes($ResolveMultipleUnresolvedVmfsVolumesRequestType)
{

$ResolveMultipleUnresolvedVmfsVolumesResponse = $this->soapClient->ResolveMultipleUnresolvedVmfsVolumes($ResolveMultipleUnresolvedVmfsVolumesRequestType);
return $ResolveMultipleUnresolvedVmfsVolumesResponse;

}
function UnmountForceMountedVmfsVolume($UnmountForceMountedVmfsVolumeRequestType)
{

$UnmountForceMountedVmfsVolumeResponse = $this->soapClient->UnmountForceMountedVmfsVolume($UnmountForceMountedVmfsVolumeRequestType);
return $UnmountForceMountedVmfsVolumeResponse;

}
function RescanHba($RescanHbaRequestType)
{

$RescanHbaResponse = $this->soapClient->RescanHba($RescanHbaRequestType);
return $RescanHbaResponse;

}
function RescanAllHba($RescanAllHbaRequestType)
{

$RescanAllHbaResponse = $this->soapClient->RescanAllHba($RescanAllHbaRequestType);
return $RescanAllHbaResponse;

}
function UpdateSoftwareInternetScsiEnabled($UpdateSoftwareInternetScsiEnabledRequestType)
{

$UpdateSoftwareInternetScsiEnabledResponse = $this->soapClient->UpdateSoftwareInternetScsiEnabled($UpdateSoftwareInternetScsiEnabledRequestType);
return $UpdateSoftwareInternetScsiEnabledResponse;

}
function UpdateInternetScsiDiscoveryProperties($UpdateInternetScsiDiscoveryPropertiesRequestType)
{

$UpdateInternetScsiDiscoveryPropertiesResponse = $this->soapClient->UpdateInternetScsiDiscoveryProperties($UpdateInternetScsiDiscoveryPropertiesRequestType);
return $UpdateInternetScsiDiscoveryPropertiesResponse;

}
function UpdateInternetScsiAuthenticationProperties($UpdateInternetScsiAuthenticationPropertiesRequestType)
{

$UpdateInternetScsiAuthenticationPropertiesResponse = $this->soapClient->UpdateInternetScsiAuthenticationProperties($UpdateInternetScsiAuthenticationPropertiesRequestType);
return $UpdateInternetScsiAuthenticationPropertiesResponse;

}
function UpdateInternetScsiDigestProperties($UpdateInternetScsiDigestPropertiesRequestType)
{

$UpdateInternetScsiDigestPropertiesResponse = $this->soapClient->UpdateInternetScsiDigestProperties($UpdateInternetScsiDigestPropertiesRequestType);
return $UpdateInternetScsiDigestPropertiesResponse;

}
function UpdateInternetScsiAdvancedOptions($UpdateInternetScsiAdvancedOptionsRequestType)
{

$UpdateInternetScsiAdvancedOptionsResponse = $this->soapClient->UpdateInternetScsiAdvancedOptions($UpdateInternetScsiAdvancedOptionsRequestType);
return $UpdateInternetScsiAdvancedOptionsResponse;

}
function UpdateInternetScsiIPProperties($UpdateInternetScsiIPPropertiesRequestType)
{

$UpdateInternetScsiIPPropertiesResponse = $this->soapClient->UpdateInternetScsiIPProperties($UpdateInternetScsiIPPropertiesRequestType);
return $UpdateInternetScsiIPPropertiesResponse;

}
function UpdateInternetScsiName($UpdateInternetScsiNameRequestType)
{

$UpdateInternetScsiNameResponse = $this->soapClient->UpdateInternetScsiName($UpdateInternetScsiNameRequestType);
return $UpdateInternetScsiNameResponse;

}
function UpdateInternetScsiAlias($UpdateInternetScsiAliasRequestType)
{

$UpdateInternetScsiAliasResponse = $this->soapClient->UpdateInternetScsiAlias($UpdateInternetScsiAliasRequestType);
return $UpdateInternetScsiAliasResponse;

}
function AddInternetScsiSendTargets($AddInternetScsiSendTargetsRequestType)
{

$AddInternetScsiSendTargetsResponse = $this->soapClient->AddInternetScsiSendTargets($AddInternetScsiSendTargetsRequestType);
return $AddInternetScsiSendTargetsResponse;

}
function RemoveInternetScsiSendTargets($RemoveInternetScsiSendTargetsRequestType)
{

$RemoveInternetScsiSendTargetsResponse = $this->soapClient->RemoveInternetScsiSendTargets($RemoveInternetScsiSendTargetsRequestType);
return $RemoveInternetScsiSendTargetsResponse;

}
function AddInternetScsiStaticTargets($AddInternetScsiStaticTargetsRequestType)
{

$AddInternetScsiStaticTargetsResponse = $this->soapClient->AddInternetScsiStaticTargets($AddInternetScsiStaticTargetsRequestType);
return $AddInternetScsiStaticTargetsResponse;

}
function RemoveInternetScsiStaticTargets($RemoveInternetScsiStaticTargetsRequestType)
{

$RemoveInternetScsiStaticTargetsResponse = $this->soapClient->RemoveInternetScsiStaticTargets($RemoveInternetScsiStaticTargetsRequestType);
return $RemoveInternetScsiStaticTargetsResponse;

}
function EnableMultipathPath($EnableMultipathPathRequestType)
{

$EnableMultipathPathResponse = $this->soapClient->EnableMultipathPath($EnableMultipathPathRequestType);
return $EnableMultipathPathResponse;

}
function DisableMultipathPath($DisableMultipathPathRequestType)
{

$DisableMultipathPathResponse = $this->soapClient->DisableMultipathPath($DisableMultipathPathRequestType);
return $DisableMultipathPathResponse;

}
function SetMultipathLunPolicy($SetMultipathLunPolicyRequestType)
{

$SetMultipathLunPolicyResponse = $this->soapClient->SetMultipathLunPolicy($SetMultipathLunPolicyRequestType);
return $SetMultipathLunPolicyResponse;

}
function QueryPathSelectionPolicyOptions($QueryPathSelectionPolicyOptionsRequestType)
{

$QueryPathSelectionPolicyOptionsResponse = $this->soapClient->QueryPathSelectionPolicyOptions($QueryPathSelectionPolicyOptionsRequestType);
return $QueryPathSelectionPolicyOptionsResponse;

}
function QueryStorageArrayTypePolicyOptions($QueryStorageArrayTypePolicyOptionsRequestType)
{

$QueryStorageArrayTypePolicyOptionsResponse = $this->soapClient->QueryStorageArrayTypePolicyOptions($QueryStorageArrayTypePolicyOptionsRequestType);
return $QueryStorageArrayTypePolicyOptionsResponse;

}
function UpdateScsiLunDisplayName($UpdateScsiLunDisplayNameRequestType)
{

$UpdateScsiLunDisplayNameResponse = $this->soapClient->UpdateScsiLunDisplayName($UpdateScsiLunDisplayNameRequestType);
return $UpdateScsiLunDisplayNameResponse;

}
function DetachScsiLun($DetachScsiLunRequestType)
{

$DetachScsiLunResponse = $this->soapClient->DetachScsiLun($DetachScsiLunRequestType);
return $DetachScsiLunResponse;

}
function AttachScsiLun($AttachScsiLunRequestType)
{

$AttachScsiLunResponse = $this->soapClient->AttachScsiLun($AttachScsiLunRequestType);
return $AttachScsiLunResponse;

}
function RefreshStorageSystem($RefreshStorageSystemRequestType)
{

$RefreshStorageSystemResponse = $this->soapClient->RefreshStorageSystem($RefreshStorageSystemRequestType);
return $RefreshStorageSystemResponse;

}
function DiscoverFcoeHbas($DiscoverFcoeHbasRequestType)
{

$DiscoverFcoeHbasResponse = $this->soapClient->DiscoverFcoeHbas($DiscoverFcoeHbasRequestType);
return $DiscoverFcoeHbasResponse;

}
function MarkForRemoval($MarkForRemovalRequestType)
{

$MarkForRemovalResponse = $this->soapClient->MarkForRemoval($MarkForRemovalRequestType);
return $MarkForRemovalResponse;

}
function UpdateIpConfig($UpdateIpConfigRequestType)
{

$UpdateIpConfigResponse = $this->soapClient->UpdateIpConfig($UpdateIpConfigRequestType);
return $UpdateIpConfigResponse;

}
function SelectVnic($SelectVnicRequestType)
{

$SelectVnicResponse = $this->soapClient->SelectVnic($SelectVnicRequestType);
return $SelectVnicResponse;

}
function DeselectVnic($DeselectVnicRequestType)
{

$DeselectVnicResponse = $this->soapClient->DeselectVnic($DeselectVnicRequestType);
return $DeselectVnicResponse;

}
function QueryNetConfig($QueryNetConfigRequestType)
{

$QueryNetConfigResponse = $this->soapClient->QueryNetConfig($QueryNetConfigRequestType);
return $QueryNetConfigResponse;

}
function SelectVnicForNicType($SelectVnicForNicTypeRequestType)
{

$SelectVnicForNicTypeResponse = $this->soapClient->SelectVnicForNicType($SelectVnicForNicTypeRequestType);
return $SelectVnicForNicTypeResponse;

}
function DeselectVnicForNicType($DeselectVnicForNicTypeRequestType)
{

$DeselectVnicForNicTypeResponse = $this->soapClient->DeselectVnicForNicType($DeselectVnicForNicTypeRequestType);
return $DeselectVnicForNicTypeResponse;

}
function QueryOptions($QueryOptionsRequestType)
{

$QueryOptionsResponse = $this->soapClient->QueryOptions($QueryOptionsRequestType);
return $QueryOptionsResponse;

}
function UpdateOptions($UpdateOptionsRequestType)
{

$UpdateOptionsResponse = $this->soapClient->UpdateOptions($UpdateOptionsRequestType);
return $UpdateOptionsResponse;

}
function CheckCompliance_Task($CheckComplianceRequestType)
{

$CheckCompliance_TaskResponse = $this->soapClient->CheckCompliance_Task($CheckComplianceRequestType);
return $CheckCompliance_TaskResponse;

}
function QueryComplianceStatus($QueryComplianceStatusRequestType)
{

$QueryComplianceStatusResponse = $this->soapClient->QueryComplianceStatus($QueryComplianceStatusRequestType);
return $QueryComplianceStatusResponse;

}
function ClearComplianceStatus($ClearComplianceStatusRequestType)
{

$ClearComplianceStatusResponse = $this->soapClient->ClearComplianceStatus($ClearComplianceStatusRequestType);
return $ClearComplianceStatusResponse;

}
function QueryExpressionMetadata($QueryExpressionMetadataRequestType)
{

$QueryExpressionMetadataResponse = $this->soapClient->QueryExpressionMetadata($QueryExpressionMetadataRequestType);
return $QueryExpressionMetadataResponse;

}
function RetrieveDescription($RetrieveDescriptionRequestType)
{

$RetrieveDescriptionResponse = $this->soapClient->RetrieveDescription($RetrieveDescriptionRequestType);
return $RetrieveDescriptionResponse;

}
function DestroyProfile($DestroyProfileRequestType)
{

$DestroyProfileResponse = $this->soapClient->DestroyProfile($DestroyProfileRequestType);
return $DestroyProfileResponse;

}
function AssociateProfile($AssociateProfileRequestType)
{

$AssociateProfileResponse = $this->soapClient->AssociateProfile($AssociateProfileRequestType);
return $AssociateProfileResponse;

}
function DissociateProfile($DissociateProfileRequestType)
{

$DissociateProfileResponse = $this->soapClient->DissociateProfile($DissociateProfileRequestType);
return $DissociateProfileResponse;

}
function CheckProfileCompliance_Task($CheckProfileComplianceRequestType)
{

$CheckProfileCompliance_TaskResponse = $this->soapClient->CheckProfileCompliance_Task($CheckProfileComplianceRequestType);
return $CheckProfileCompliance_TaskResponse;

}
function ExportProfile($ExportProfileRequestType)
{

$ExportProfileResponse = $this->soapClient->ExportProfile($ExportProfileRequestType);
return $ExportProfileResponse;

}
function CreateProfile($CreateProfileRequestType)
{

$CreateProfileResponse = $this->soapClient->CreateProfile($CreateProfileRequestType);
return $CreateProfileResponse;

}
function QueryPolicyMetadata($QueryPolicyMetadataRequestType)
{

$QueryPolicyMetadataResponse = $this->soapClient->QueryPolicyMetadata($QueryPolicyMetadataRequestType);
return $QueryPolicyMetadataResponse;

}
function FindAssociatedProfile($FindAssociatedProfileRequestType)
{

$FindAssociatedProfileResponse = $this->soapClient->FindAssociatedProfile($FindAssociatedProfileRequestType);
return $FindAssociatedProfileResponse;

}
function UpdateClusterProfile($UpdateClusterProfileRequestType)
{

$UpdateClusterProfileResponse = $this->soapClient->UpdateClusterProfile($UpdateClusterProfileRequestType);
return $UpdateClusterProfileResponse;

}
function UpdateReferenceHost($UpdateReferenceHostRequestType)
{

$UpdateReferenceHostResponse = $this->soapClient->UpdateReferenceHost($UpdateReferenceHostRequestType);
return $UpdateReferenceHostResponse;

}
function UpdateHostProfile($UpdateHostProfileRequestType)
{

$UpdateHostProfileResponse = $this->soapClient->UpdateHostProfile($UpdateHostProfileRequestType);
return $UpdateHostProfileResponse;

}
function ExecuteHostProfile($ExecuteHostProfileRequestType)
{

$ExecuteHostProfileResponse = $this->soapClient->ExecuteHostProfile($ExecuteHostProfileRequestType);
return $ExecuteHostProfileResponse;

}
function ApplyHostConfig_Task($ApplyHostConfigRequestType)
{

$ApplyHostConfig_TaskResponse = $this->soapClient->ApplyHostConfig_Task($ApplyHostConfigRequestType);
return $ApplyHostConfig_TaskResponse;

}
function GenerateConfigTaskList($GenerateConfigTaskListRequestType)
{

$GenerateConfigTaskListResponse = $this->soapClient->GenerateConfigTaskList($GenerateConfigTaskListRequestType);
return $GenerateConfigTaskListResponse;

}
function QueryHostProfileMetadata($QueryHostProfileMetadataRequestType)
{

$QueryHostProfileMetadataResponse = $this->soapClient->QueryHostProfileMetadata($QueryHostProfileMetadataRequestType);
return $QueryHostProfileMetadataResponse;

}
function QueryProfileStructure($QueryProfileStructureRequestType)
{

$QueryProfileStructureResponse = $this->soapClient->QueryProfileStructure($QueryProfileStructureRequestType);
return $QueryProfileStructureResponse;

}
function CreateDefaultProfile($CreateDefaultProfileRequestType)
{

$CreateDefaultProfileResponse = $this->soapClient->CreateDefaultProfile($CreateDefaultProfileRequestType);
return $CreateDefaultProfileResponse;

}
function UpdateAnswerFile_Task($UpdateAnswerFileRequestType)
{

$UpdateAnswerFile_TaskResponse = $this->soapClient->UpdateAnswerFile_Task($UpdateAnswerFileRequestType);
return $UpdateAnswerFile_TaskResponse;

}
function RetrieveAnswerFile($RetrieveAnswerFileRequestType)
{

$RetrieveAnswerFileResponse = $this->soapClient->RetrieveAnswerFile($RetrieveAnswerFileRequestType);
return $RetrieveAnswerFileResponse;

}
function ExportAnswerFile_Task($ExportAnswerFileRequestType)
{

$ExportAnswerFile_TaskResponse = $this->soapClient->ExportAnswerFile_Task($ExportAnswerFileRequestType);
return $ExportAnswerFile_TaskResponse;

}
function CheckAnswerFileStatus_Task($CheckAnswerFileStatusRequestType)
{

$CheckAnswerFileStatus_TaskResponse = $this->soapClient->CheckAnswerFileStatus_Task($CheckAnswerFileStatusRequestType);
return $CheckAnswerFileStatus_TaskResponse;

}
function QueryAnswerFileStatus($QueryAnswerFileStatusRequestType)
{

$QueryAnswerFileStatusResponse = $this->soapClient->QueryAnswerFileStatus($QueryAnswerFileStatusRequestType);
return $QueryAnswerFileStatusResponse;

}
function RemoveScheduledTask($RemoveScheduledTaskRequestType)
{

$RemoveScheduledTaskResponse = $this->soapClient->RemoveScheduledTask($RemoveScheduledTaskRequestType);
return $RemoveScheduledTaskResponse;

}
function ReconfigureScheduledTask($ReconfigureScheduledTaskRequestType)
{

$ReconfigureScheduledTaskResponse = $this->soapClient->ReconfigureScheduledTask($ReconfigureScheduledTaskRequestType);
return $ReconfigureScheduledTaskResponse;

}
function RunScheduledTask($RunScheduledTaskRequestType)
{

$RunScheduledTaskResponse = $this->soapClient->RunScheduledTask($RunScheduledTaskRequestType);
return $RunScheduledTaskResponse;

}
function CreateScheduledTask($CreateScheduledTaskRequestType)
{

$CreateScheduledTaskResponse = $this->soapClient->CreateScheduledTask($CreateScheduledTaskRequestType);
return $CreateScheduledTaskResponse;

}
function RetrieveEntityScheduledTask($RetrieveEntityScheduledTaskRequestType)
{

$RetrieveEntityScheduledTaskResponse = $this->soapClient->RetrieveEntityScheduledTask($RetrieveEntityScheduledTaskRequestType);
return $RetrieveEntityScheduledTaskResponse;

}
function CreateObjectScheduledTask($CreateObjectScheduledTaskRequestType)
{

$CreateObjectScheduledTaskResponse = $this->soapClient->CreateObjectScheduledTask($CreateObjectScheduledTaskRequestType);
return $CreateObjectScheduledTaskResponse;

}
function RetrieveObjectScheduledTask($RetrieveObjectScheduledTaskRequestType)
{

$RetrieveObjectScheduledTaskResponse = $this->soapClient->RetrieveObjectScheduledTask($RetrieveObjectScheduledTaskRequestType);
return $RetrieveObjectScheduledTaskResponse;

}
function OpenInventoryViewFolder($OpenInventoryViewFolderRequestType)
{

$OpenInventoryViewFolderResponse = $this->soapClient->OpenInventoryViewFolder($OpenInventoryViewFolderRequestType);
return $OpenInventoryViewFolderResponse;

}
function CloseInventoryViewFolder($CloseInventoryViewFolderRequestType)
{

$CloseInventoryViewFolderResponse = $this->soapClient->CloseInventoryViewFolder($CloseInventoryViewFolderRequestType);
return $CloseInventoryViewFolderResponse;

}
function ModifyListView($ModifyListViewRequestType)
{

$ModifyListViewResponse = $this->soapClient->ModifyListView($ModifyListViewRequestType);
return $ModifyListViewResponse;

}
function ResetListView($ResetListViewRequestType)
{

$ResetListViewResponse = $this->soapClient->ResetListView($ResetListViewRequestType);
return $ResetListViewResponse;

}
function ResetListViewFromView($ResetListViewFromViewRequestType)
{

$ResetListViewFromViewResponse = $this->soapClient->ResetListViewFromView($ResetListViewFromViewRequestType);
return $ResetListViewFromViewResponse;

}
function DestroyView($DestroyViewRequestType)
{

$DestroyViewResponse = $this->soapClient->DestroyView($DestroyViewRequestType);
return $DestroyViewResponse;

}
function CreateInventoryView($CreateInventoryViewRequestType)
{

$CreateInventoryViewResponse = $this->soapClient->CreateInventoryView($CreateInventoryViewRequestType);
return $CreateInventoryViewResponse;

}
function CreateContainerView($CreateContainerViewRequestType)
{

$CreateContainerViewResponse = $this->soapClient->CreateContainerView($CreateContainerViewRequestType);
return $CreateContainerViewResponse;

}
function CreateListView($CreateListViewRequestType)
{

$CreateListViewResponse = $this->soapClient->CreateListView($CreateListViewRequestType);
return $CreateListViewResponse;

}
function CreateListViewFromView($CreateListViewFromViewRequestType)
{

$CreateListViewFromViewResponse = $this->soapClient->CreateListViewFromView($CreateListViewFromViewRequestType);
return $CreateListViewFromViewResponse;

}
function RevertToSnapshot_Task($RevertToSnapshotRequestType)
{

$RevertToSnapshot_TaskResponse = $this->soapClient->RevertToSnapshot_Task($RevertToSnapshotRequestType);
return $RevertToSnapshot_TaskResponse;

}
function RemoveSnapshot_Task($RemoveSnapshotRequestType)
{

$RemoveSnapshot_TaskResponse = $this->soapClient->RemoveSnapshot_Task($RemoveSnapshotRequestType);
return $RemoveSnapshot_TaskResponse;

}
function RenameSnapshot($RenameSnapshotRequestType)
{

$RenameSnapshotResponse = $this->soapClient->RenameSnapshot($RenameSnapshotRequestType);
return $RenameSnapshotResponse;

}
function CheckCompatibility_Task($CheckCompatibilityRequestType)
{

$CheckCompatibility_TaskResponse = $this->soapClient->CheckCompatibility_Task($CheckCompatibilityRequestType);
return $CheckCompatibility_TaskResponse;

}
function QueryVMotionCompatibilityEx_Task($QueryVMotionCompatibilityExRequestType)
{

$QueryVMotionCompatibilityEx_TaskResponse = $this->soapClient->QueryVMotionCompatibilityEx_Task($QueryVMotionCompatibilityExRequestType);
return $QueryVMotionCompatibilityEx_TaskResponse;

}
function CheckMigrate_Task($CheckMigrateRequestType)
{

$CheckMigrate_TaskResponse = $this->soapClient->CheckMigrate_Task($CheckMigrateRequestType);
return $CheckMigrate_TaskResponse;

}
function CheckRelocate_Task($CheckRelocateRequestType)
{

$CheckRelocate_TaskResponse = $this->soapClient->CheckRelocate_Task($CheckRelocateRequestType);
return $CheckRelocate_TaskResponse;

}
function ValidateCredentialsInGuest($ValidateCredentialsInGuestRequestType)
{

$ValidateCredentialsInGuestResponse = $this->soapClient->ValidateCredentialsInGuest($ValidateCredentialsInGuestRequestType);
return $ValidateCredentialsInGuestResponse;

}
function AcquireCredentialsInGuest($AcquireCredentialsInGuestRequestType)
{

$AcquireCredentialsInGuestResponse = $this->soapClient->AcquireCredentialsInGuest($AcquireCredentialsInGuestRequestType);
return $AcquireCredentialsInGuestResponse;

}
function ReleaseCredentialsInGuest($ReleaseCredentialsInGuestRequestType)
{

$ReleaseCredentialsInGuestResponse = $this->soapClient->ReleaseCredentialsInGuest($ReleaseCredentialsInGuestRequestType);
return $ReleaseCredentialsInGuestResponse;

}
function MakeDirectoryInGuest($MakeDirectoryInGuestRequestType)
{

$MakeDirectoryInGuestResponse = $this->soapClient->MakeDirectoryInGuest($MakeDirectoryInGuestRequestType);
return $MakeDirectoryInGuestResponse;

}
function DeleteFileInGuest($DeleteFileInGuestRequestType)
{

$DeleteFileInGuestResponse = $this->soapClient->DeleteFileInGuest($DeleteFileInGuestRequestType);
return $DeleteFileInGuestResponse;

}
function DeleteDirectoryInGuest($DeleteDirectoryInGuestRequestType)
{

$DeleteDirectoryInGuestResponse = $this->soapClient->DeleteDirectoryInGuest($DeleteDirectoryInGuestRequestType);
return $DeleteDirectoryInGuestResponse;

}
function MoveDirectoryInGuest($MoveDirectoryInGuestRequestType)
{

$MoveDirectoryInGuestResponse = $this->soapClient->MoveDirectoryInGuest($MoveDirectoryInGuestRequestType);
return $MoveDirectoryInGuestResponse;

}
function MoveFileInGuest($MoveFileInGuestRequestType)
{

$MoveFileInGuestResponse = $this->soapClient->MoveFileInGuest($MoveFileInGuestRequestType);
return $MoveFileInGuestResponse;

}
function CreateTemporaryFileInGuest($CreateTemporaryFileInGuestRequestType)
{

$CreateTemporaryFileInGuestResponse = $this->soapClient->CreateTemporaryFileInGuest($CreateTemporaryFileInGuestRequestType);
return $CreateTemporaryFileInGuestResponse;

}
function CreateTemporaryDirectoryInGuest($CreateTemporaryDirectoryInGuestRequestType)
{

$CreateTemporaryDirectoryInGuestResponse = $this->soapClient->CreateTemporaryDirectoryInGuest($CreateTemporaryDirectoryInGuestRequestType);
return $CreateTemporaryDirectoryInGuestResponse;

}
function ListFilesInGuest($ListFilesInGuestRequestType)
{

$ListFilesInGuestResponse = $this->soapClient->ListFilesInGuest($ListFilesInGuestRequestType);
return $ListFilesInGuestResponse;

}
function ChangeFileAttributesInGuest($ChangeFileAttributesInGuestRequestType)
{

$ChangeFileAttributesInGuestResponse = $this->soapClient->ChangeFileAttributesInGuest($ChangeFileAttributesInGuestRequestType);
return $ChangeFileAttributesInGuestResponse;

}
function InitiateFileTransferFromGuest($InitiateFileTransferFromGuestRequestType)
{

$InitiateFileTransferFromGuestResponse = $this->soapClient->InitiateFileTransferFromGuest($InitiateFileTransferFromGuestRequestType);
return $InitiateFileTransferFromGuestResponse;

}
function InitiateFileTransferToGuest($InitiateFileTransferToGuestRequestType)
{

$InitiateFileTransferToGuestResponse = $this->soapClient->InitiateFileTransferToGuest($InitiateFileTransferToGuestRequestType);
return $InitiateFileTransferToGuestResponse;

}
function StartProgramInGuest($StartProgramInGuestRequestType)
{

$StartProgramInGuestResponse = $this->soapClient->StartProgramInGuest($StartProgramInGuestRequestType);
return $StartProgramInGuestResponse;

}
function ListProcessesInGuest($ListProcessesInGuestRequestType)
{

$ListProcessesInGuestResponse = $this->soapClient->ListProcessesInGuest($ListProcessesInGuestRequestType);
return $ListProcessesInGuestResponse;

}
function TerminateProcessInGuest($TerminateProcessInGuestRequestType)
{

$TerminateProcessInGuestResponse = $this->soapClient->TerminateProcessInGuest($TerminateProcessInGuestRequestType);
return $TerminateProcessInGuestResponse;

}
function ReadEnvironmentVariableInGuest($ReadEnvironmentVariableInGuestRequestType)
{

$ReadEnvironmentVariableInGuestResponse = $this->soapClient->ReadEnvironmentVariableInGuest($ReadEnvironmentVariableInGuestRequestType);
return $ReadEnvironmentVariableInGuestResponse;

}}


?>