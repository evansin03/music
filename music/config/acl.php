<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//遵循qeephp中的acl规则
$acl['all_controllers'] = array(
    'allow'=>'ACL_HAS_ROLE',//表示所有拥有角色的用户
);
$acl['welcome'] = array(
    'allow'=>'ACL_HAS_ROLE',
    'actions'=>array(
        'index'=>array('allow' => 'admin,editor,gm'),
        'add' => array('allow'=> 'admin,editor'),
    ),
);

// Acl中预定义的角色常量如下：

// ACL_EVERYONE = 'acl_everyone';     // 所有用户

// ACL_NULL = 'acl_null';                     // 未设置

// ACL_NO_ROLE = 'acl_no_role';         // 没有角色用户

// ACL_HAS_ROLE = 'acl_has_role';     // 有角色用户

// ALL_CONTROLLERS = 'all_controllers';   //  表示所有控制器

// ALL_ACTIONS = 'all_actions';           //  表示所有控制器内的方法