<?php
namespace VimServiceStub;

class HostNetworkInfo{
var $vswitch;//HostVirtualSwitch
var $proxySwitch;//HostProxySwitch
var $portgroup;//HostPortGroup
var $pnic;//PhysicalNic
var $vnic;//HostVirtualNic
var $consoleVnic;//HostVirtualNic
var $dnsConfig;//HostDnsConfig
var $ipRouteConfig;//HostIpRouteConfig
var $consoleIpRouteConfig;//HostIpRouteConfig
var $routeTableInfo;//HostIpRouteTableInfo
var $dhcp;//HostDhcpService
var $nat;//HostNatService
var $ipV6Enabled;//boolean
var $atBootIpV6Enabled;//boolean
}