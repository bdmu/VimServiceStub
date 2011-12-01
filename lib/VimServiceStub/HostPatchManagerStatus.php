<?php
namespace VimServiceStub;

class HostPatchManagerStatus{
var $id;//string
var $applicable;//boolean
var $reason;//string
var $integrity;//string
var $installed;//boolean
var $installState;//string
var $prerequisitePatch;//HostPatchManagerStatusPrerequisitePatch
var $restartRequired;//boolean
var $reconnectRequired;//boolean
var $vmOffRequired;//boolean
var $supersededPatchIds;//string
}