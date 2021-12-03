<!DOCTYPE html>
<html dir="{$dir}">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{$bootstrap}">
    <link rel="stylesheet" href="/pub_wt/css/font-awesome.min.css">
    <link rel="stylesheet" href="/pub_wt/css/animate.css">
    <link rel="stylesheet" href="/pub_wt/css/wt_admin.css">
    <style>
        {if isset($smarty.session.lang) && $smarty.session.lang=='EN'}
        {literal} .container{margin-left: 20%} .container-fluid{margin-left: 20%} {/literal}
            {else}
        {literal} .container{margin-right: 20%} .container-fluid{margin-right: 20%} {/literal}  {/if}
    </style>
    <style>{$font}</style><style>{$font2}</style>
    <title>{$panel} - {$subTitle}</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name='description' content=''/>
    <meta name='keywords' content=''/>
</head>
<body>
