<?php
namespace VimServiceStub;

class HostNetworkConfig{
var $vswitch;//HostVirtualSwitchConfig
var $proxySwitch;//HostProxySwitchConfig
var $portgroup;//HostPortGroupConfig
var $pnic;//PhysicalNicConfig
var $vnic;//HostVirtualNicConfig
var $consoleVnic;//HostVirtualNicConfig
var $dnsConfig;//HostDnsConfig
var $ipRouteConfig;//HostIpRouteConfig
var $consoleIpRouteConfig;//HostIpRouteConfig
var $routeTableConfig;//HostIpRouteTableConfig
var $dhcp;//HostDhcpServiceConfig
var $nat;//HostNatServiceConfig
var $ipV6Enabled;//boolean
}