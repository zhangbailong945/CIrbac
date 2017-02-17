<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
//这是一个提交请求的钩子
$hook['post_controller_constructor']=array(
  'class'=>'Rbac',
  'function'=>'auto_verify',
  'filename'=>'rabc_hook.php',
  'filepath'=>'third_party/rbac/hooks',
  'params'=>''
);

//重写CI的显示模板
$hook['display_override']=array(
  'class'=>'Rbac',
  'function'=>'view_override',
  'filename'=>'rabc_hook.php',
  'filepath'=>'third_party/rbac/hooks',
  'params'=>''
);

