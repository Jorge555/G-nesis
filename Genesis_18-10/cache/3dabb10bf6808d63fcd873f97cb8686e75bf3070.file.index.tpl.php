<?php /* Smarty version Smarty-3.1.21, created on 2019-09-25 06:21:27
         compiled from "views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134755d8aeb47e2dce6-23335862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dabb10bf6808d63fcd873f97cb8686e75bf3070' => 
    array (
      0 => 'views\\index.tpl',
      1 => 1569298970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134755d8aeb47e2dce6-23335862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8aeb47e78527_68909079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8aeb47e78527_68909079')) {function content_5d8aeb47e78527_68909079($_smarty_tpl) {?><!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=50">
   <title>Login</title>

    <style class="cp-pen-styles">* {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        .wrapper,
        .container {
            height: 525px;
            width: 337px;
        }
        .wrapper {
            margin: auto;
            position: absolute;
            top: -10px; right: 0; bottom: 0; left: 0;
        }
        .container {
            position: relative;
        }
        .container .stencil {
            border: 5px solid #77dff9;
            height: 440px;
            width: 235px;
            transform: matrix(0.85,0.8,-0.08,0.7,19,43);
            position: absolute;
            z-index: 1;
        }
        .container .stencil .line {
            border: 3px solid #77dff9 ;
            height: 94.6%;
            margin: 11px 0;
            border-right: none;
            border-left: none;
        }
        .container .border-triangle  {
            position: absolute;
            z-index: 10;
            border-top: 257px solid transparent;
            border-left: 337px solid rgba(255,255,255,0.5);
            border-bottom: 268px solid transparent;
        }
        .container .content-triangle {
            position: absolute;
            left: 12px;
            top: 22px;
            border-top: 235px solid transparent;
            border-left: 307px solid #fff;
            border-bottom: 245px solid transparent;
            z-index: 15;
        }
        .container .content-triangle:before,
        .container .content-triangle:after,
        .container form .title:after {
            content: '';
            position: absolute;
            width: 10px;
            height: 15px;
            border: 1px solid #71d2ec;

        }
        .container .content-triangle:before {
            border-bottom: none;
            border-right: none;
            transform: matrix(0.85,0.64,-0,0.7,-295,-203);
        }
        .container .content-triangle:after {
            border-top: none;
            border-right: none;
            transform: matrix(0.85,-0.7,-0,0.7,-295,197);
        }
        .container .enter-triangle-one {
            position: absolute;
            border-top: 90px solid transparent;
            border-left: 135px solid #192042;
            border-bottom: 76px solid transparent;
            transform: rotate(51.5deg);
            bottom: 5px;
            left: 153px;
            z-index: 5;
        }
        .container .enter-triangle-one:before {
            content: '';
            position: absolute;
            border-top: 120px solid transparent;
            border-left: 188px solid #192042;
            border-bottom: 141px solid transparent;
            transform: rotate(4deg);
            bottom: -129px;
            left: -207px;
            -webkit-filter: blur(20px);
            filter: blur(20px);
            z-index: 5;
        }
        .container .enter-triangle-two {
            position: absolute;
            border-top: 111px solid transparent;
            border-left: 108px solid rgba(40, 65, 143, 0.2);
            border-bottom: 47px solid transparent;
            transform: rotate(51deg);
            bottom: 13px;
            left: 148px;
            z-index: 6;
        }
        .container form {
            position: absolute;
            z-index: 20;
            top: 166px;
            left: 30px;
        }
        .container form:before,
        .container form:after,
        .container form .input-inform:before,
        .container form .title:before {
            content: '';
            position: absolute;
            background: rgba(204,204,204,0.13);
            height: 1px;
        }
        .container form:before {
            width: 315px;
            transform: rotate(37.2deg);
            left: -28px;
            top: -11px;
        }
        .container form:after {
            width: 320px;
            left: -31px;
            bottom: 35px;
            transform: rotate(-39deg);
        }
        .container form .title {
            border-bottom: 1px solid #67e2fb;
            padding-bottom: 9px;
            margin: 0 0 30px 9px;
            width: 95px;
        }
        .container form .title:before {
            width: 26px;
            background: #67e2fb;
            top: 58px;
        }
        .container form .title:after {
            border-top: none;
            border-left: none;
            width: 8px;
            height: 9px;
            transform: matrix(0.85,-0.7,0.8,0.6,241,37);
        }
        .container form label {
            display: block;
            color: #6b707d;
            font-size: 20px;
            font-weight: 300;
            line-height: 24px;
        }
        .container form .input-inform:before {
            width: 1px;
            height: 396px;
            left: -5px;
            top: -102px;
        }
        .container form input:focus {
            outline: none;
        }
        .container form label:last-child {
            font-weight: bold;
            letter-spacing: 1px;
        }
        .container form input[type="text"],
        .container form input[type="password"] {
            border: none;
            border-bottom: 1px solid #f2f2f2;
            display: block;
            width: 160px;
            color: #000000;
        }
        .container form input[type="text"] {
            padding: 0 0 7px 9px;
        }
        .container form input[type="password"] {
            padding: 17px 0 9px 9px;
        }
        .container form #forgot-pas,
        .container form .enter,
        .container form .enter label,
        .container form #enter {
            cursor: pointer;
            position: relative;
        }
        .container form #forgot-pas {
            color: #c5c5c5;
            background: #fff;
            border: 1px solid #f2f2f2;
            font-size: 7px;
            height: 17px;
            width: 96px;
            top: 6px;
            left: 25px;
        }
        .container form .enter {
            width: 50px;
            height: 50px;
            top: 50px;
            left: 148px;
        }
        .container form .enter label:before {
            content: '\1F512';
            color: rgba(197, 197, 197,0.6);
            left: 10px;
            top: 7px;
            position: relative;
        }
        .container form .enter label:hover:before {
            content: '\1F513';
        }
        .container form #enter {
            color: #fff;
            border: none;
            font-size: 10px;
            background: transparent;
        }
    </style>
</head>
 <body>
   <div class="wrapper">
       <div class="container">
           <div class="stencil">
               <div class="line">
                   <div class="line"></div>
               </div>
           </div>
           <div class="border-triangle"></div>
           <div class="content-triangle"></div>
           <div class="enter-triangle-one"></div>
           <div class="enter-triangle-two"></div>
           <form method="post" id="form">
               <div class="title">
                   <label>Genesis</label>
               </div>
               <div class="input-inform">
                   <input type="text" name="usu" id="usu" placeholder="Usuario" />
                   <input type="password" name="pass" id="pass" placeholder="Contraseña" />
                <button type="submit" class="btn btn-primary" name="Login">Login</button>
               </div>
           </form>
       </div>
   </div>


   <!---
      <div class="container caja1" align="center">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-md-offset-4">
              <div class="account-wall">
                <img class="profile-img" src="assets/img/login1.png" height="150" width="150">
                <form class="form-signin" role="form" method="POST">
                <input type="text" class="form-control" name="usu" placeholder="Usuario" required autofocus><br>
                <input type="password" class="form-control" name="pass" placeholder="Password" required><br>
                <button type="submit" class="btn btn-primary" name="Login">Login</button>

            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

          </div>
        </div>
      </div>
   >-->
 </body>
 </html>
<?php echo '<?php'; ?>
 } <?php echo '?>'; ?>
<?php }} ?>
