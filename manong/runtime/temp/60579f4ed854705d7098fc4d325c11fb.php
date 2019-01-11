<?php /*a:2:{s:73:"C:\Users\Dongyao001\Desktop\manong\application\admin\view\index\main.html";i:1534329860;s:77:"C:\Users\Dongyao001\Desktop\manong\application\admin\view\public\content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">

<table class="layui-table" lay-even lay-skin="line">
    <colgroup>
        <col width="20%">
        <col width="30%">
        <col width="20%">
        <col width="30%">
    </colgroup>
    <thead>
    <tr>
        <th class="text-left" colspan="2">系统信息</th>
        <th class="text-left" colspan="2">产品团队</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="max-width:200px" class="nowrap">ThinkAdmin 版本</td>
        <td class="nowrap"><?php echo sysconf('app_version'); ?></td>
        <td style="max-width:200px" class="nowrap">产品名称</td>
        <td class="nowrap">ThinkAdmin 管理框架</td>
    </tr>
    <tr>
        <td class="nowrap">ThinkPHP 版本</td>
        <td class="nowrap"><?php echo htmlentities($think_ver); ?></td>
        <td class="nowrap">产品名称</td>
        <td class="nowrap">ThinkAdmin 管理框架</td>
    </tr>
    <tr>
        <td class="nowrap">服务器操作系统</td>
        <td class="nowrap"><?php echo php_uname('s'); ?></td>
        <td class="nowrap">产品DEMO体验</td>
        <td class="nowrap">
            <a target="_blank" href="http://demo.thinkadmin.top">http://demo.thinkadmin.top</a>
        </td>
    </tr>
    <tr>
        <td class="nowrap">WEB运行环境</td>
        <td class="nowrap"><?php echo php_sapi_name(); ?></td>
        <td class="nowrap">官方QQ群</td>
        <td class="nowrap">
            <a href="http://shang.qq.com/wpa/qunwpa?idkey=ae25cf789dafbef62e50a980ffc31242f150bc61a61164458216dd98c411832a">
                <img src="//pub.idqqimg.com/wpa/images/group.png" style="height:18px;width:auto" target="_blank">
            </a>
        </td>
    </tr>
    <tr>
        <td class="nowrap">MySQL数据库版本</td>
        <td class="nowrap"><?php echo htmlentities($mysql_ver); ?></td>
        <td class="nowrap">BUG反馈</td>
        <td class="nowrap">
            <a target="_blank" href="https://github.com/zoujingli/ThinkAdmin/issues">
                https://github.com/zoujingli/ThinkAdmin/issues
            </a>
        </td>
    </tr>
    <tr>
        <td class="nowrap">运行PHP版本</td>
        <td class="nowrap"><?php echo htmlentities(PHP_VERSION); ?></td>
        <td class="nowrap">项目地址</td>
        <td class="nowrap">
            <a target="_blank" href="https://github.com/zoujingli/ThinkAdmin">
                https://github.com/zoujingli/ThinkAdmin
            </a>
        </td>
    </tr>
    <tr>
        <td class="nowrap">上传大小限制</td>
        <td class="nowrap"><?php echo ini_get('upload_max_filesize'); ?></td>
        <td class="nowrap">公司官网</td>
        <td class="nowrap"><a target="_blank" href="http://www.cuci.cc">http://www.cuci.cc</a></td>
    </tr>
    <tr>
        <td class="nowrap">POST大小限制</td>
        <td class="nowrap"><?php echo ini_get('post_max_size'); ?></td>
        <td class="nowrap">公司地址</td>
        <td class="nowrap">广州市天河区东圃一横路东泷商贸中心C座316</td>
    </tr>
    </tbody>
</table>
</div>
</div>

<!-- 右则内容区域 结束 -->