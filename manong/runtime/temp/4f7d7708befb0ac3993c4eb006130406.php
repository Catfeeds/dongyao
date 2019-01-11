<?php /*a:1:{s:68:"/www/wwwroot/manong.yaho.cc/application/index/view/member/index.html";i:1547091472;}*/ ?>
﻿   <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>

    
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user" id="LAY_uc">
			<div class="fly-msg fly-text fly-mb20">hi~~<a class="fly-red"> <?php echo htmlentities($users['username']); ?> </a>，欢迎登陆<?php echo htmlentities($config[1]['value']); ?>会员中心！</div>
			<div class="layui-row">
				<div class="layui-col-md12">
        			<div class="profile-sidebar">
               			<div class="portlet light profile-sidebar-portlet ">
                		<div class="profile-userpic">
                    			<a href="https://www.codesceo.com/index.php?s=member&c=account&m=avatar">
                                    <?php if($users['userpic']): ?>
                                     <img src="<?php echo htmlentities($users['userpic']); ?>" class="img-responsive"></a>
                                    <?php else: ?>
                                     <img src="/static/index/Picture/avatar_90.png" class="img-responsive" ></a>
                                    
                                    <?php endif; ?>
                		</div>
                		<div class="profile-usertitle">
                    		<div class="profile-usertitle-name"> <?php echo htmlentities($users['username']); ?>  </div>
                    		<div class="profile-usertitle-job"> </div>
                		</div>
                		<div class="profile-userbuttons">
                    		<a class="layui-btn layui-btn-sm layui-btn-normal layui-btn-radius" href="/index/member/upgrade">升级VIP</a>
                    		<a class="layui-btn layui-btn-sm layui-btn-danger layui-btn-radius" href="/index/member/topup?cateid=1">充值积分</a>
                		</div>
                		<div class="profile-usermenu" style="margin-top:23px;">
                    		<ul class="nav">
                        		<li class=""><a ><i class="layui-icon">&#xe612;</i> 会员组：
                                <?php if($users['members'] == 1): ?>
                                普通会员
                                <?php elseif($users['members'] == 2): ?>
                                钻石会员
                                <?php endif; ?>
                                </a></li>
                        		<li><a ><i class="layui-icon">&#xe63f;</i> 积分：<?php echo htmlentities($users['price']); ?>分</a></li>
                                <li><a ><i class="layui-icon">&#xe65e;</i> RMB：<?php echo htmlentities($users['money']); ?>元</a></li>
                                <?php if($users['members'] == 2): ?>

                        		<li><a ><i class="layui-icon">&#xe770;</i> 会员到期：<?php echo date('Y-m-d',$users['duetotime']); ?></a></li>
                                <?php endif; ?>
                    		</ul>
                		</div>
                		</div>
                	</div>
        			<div class="profile-content">
               		<div class="layui-row">
                   	<div class="layui-col-md12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <a href="https://www.codesceo.com/index.php?s=member&c=notice&m=go" class="caption-subject font-blue bold uppercase">通知提醒</a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="feeds">
                                <?php if($notice): foreach($notice as $value): ?>
                            	<li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col2">
                                                <div class="desc" style="padding:5px;"><?php echo htmlentities($value['desc']); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> <?php echo htmlentities($value['addtime']); ?> </div>
                                    </div>
                                </li>
                                <?php endforeach; else: ?>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col2">
                                                <div class="desc" style="padding:5px;">暂无消息</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">  </div>
                                    </div>
                                </li>
                                <?php endif; ?>                  
                            </ul>
                        </div>
                    </div>
                	</div>
            		</div>
            		<div class="layui-row">
                	<div class="layui-col-md12">
                    <div class="portlet light  ">
                        <div class="portlet-title">
                            <div class="caption">
                                <a href="https://www.codesceo.com/index.php?s=member&c=account&m=login" class="caption-subject font-blue bold uppercase"><i class="fa fa-calendar "></i> 登陆记录(显示最近10条)</a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="feeds">
                            <?php foreach($info as $value): ?>
                              	<li>
                               		<div class="desc" style="padding:5px;">
                                        <font color="red"><?php echo htmlentities($value['addlogin']); ?></font>&nbsp;
                                        &nbsp;&nbsp;
                                 <a ><?php echo htmlentities($users['username']); ?></a>
                                       									</div>
                                </li>
                            <?php endforeach; ?>
                                                            </ul>
                        </div>
                    </div>
                	</div>
            		</div>
        			</div>
    			</div>
			</div>
		</div>
	</div>
</div>
   <?php echo widget("Last/mfooter"); ?>
