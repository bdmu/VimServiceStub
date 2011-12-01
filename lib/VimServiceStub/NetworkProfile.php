<?php
namespace VimServiceStub;

class NetworkProfile{
var $vswitch;//VirtualSwitchProfile
var $vmPortGroup;//VmPortGroupProfile
var $hostPortGroup;//HostPortGroupProfile
var $serviceConsolePortGroup;//ServiceConsolePortGroupProfile
var $dnsConfig;//NetworkProfileDnsConfigProfile
var $ipRouteConfig;//IpRouteProfile
var $consoleIpRouteConfig;//IpRouteProfile
var $pnic;//PhysicalNicProfile
var $dvswitch;//DvsProfile
var $dvsServiceConsoleNic;//DvsServiceConsoleVNicProfile
var $dvsHostNic;//DvsHostVNicProfile
}