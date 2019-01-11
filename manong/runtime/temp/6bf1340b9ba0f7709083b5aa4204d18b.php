<?php /*a:2:{s:66:"/www/wwwroot/manong.yaho.cc/application/wechat/view/keys/form.html";i:1534329860;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<style>
    .keys-container{min-width:800px}
    .keys-container textarea{width:95%;height:100px;border-radius:0}
    .keys-container .input-group input{border-right:0}
    .keys-container .input-group-addon{border-left:0;border-radius:0}
    .keys-container [data-tips-image]{width:112px;height:auto;}
    .keys-container .layui-elem-field{width:535px;height:590px;position:absolute}
</style>

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">

<!-- 效果预览区域 开始 -->
<div class='mobile-preview pull-left' style="margin-top:13px;">
    <div class='mobile-header'>公众号</div>
    <div class='mobile-body'>
        <iframe id="phone-preview" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
<!-- 效果预览区域 结束 -->

<div class="row keys-container">
    <div class='col-xs-6 margin-left-15'>
        <form class="form-horizontal layui-form" role="form" data-auto="true" action="<?php echo request()->url(); ?>" method="post">
            <fieldset class="layui-elem-field layui-box">
                <legend><?php echo htmlentities($title); ?></legend>
                <!--<?php if(!isset($vo['keys']) or ($vo['keys'] != 'default' and $vo['keys'] != 'subscribe')): ?>-->
                <div class="form-group">
                    <label class="col-xs-2 control-label layui-form-label ">关 键 字</label>
                    <div class="col-xs-8">
                        <input required title='请输入关键字' maxlength='20' name='keys' class="layui-input" value='<?php echo htmlentities((isset($vo['keys']) && ($vo['keys'] !== '')?$vo['keys']:"")); ?>'>
                    </div>
                </div>
                <!--<?php else: ?>-->
                <input type="hidden" name="keys" value="<?php echo htmlentities((isset($vo['keys']) && ($vo['keys'] !== '')?$vo['keys']:'')); ?>">
                <!--<?php endif; ?>-->
                <div class="form-group">
                    <label class="col-xs-2 control-label layui-form-label label-required">规则状态</label>
                    <div class="col-xs-8">
                        <div class="mt-radio-inline padding-bottom-0">
                           <?php foreach(['1'=>'启用','0'=>'禁用'] as $k=>$v): ?>
                            <label class="think-radio">
                                <!--<?php if((!isset($vo['status']) and $k == '1') or (isset($vo['status']) and $vo['status'] == $k)): ?>-->
                                <input data-auto-none type="radio" checked name="status" value="<?php echo htmlentities($k); ?>"> <?php echo htmlentities($v); ?>
                                <!--<?php else: ?>-->
                                <input data-auto-none type="radio" name="status" value="<?php echo htmlentities($k); ?>"> <?php echo htmlentities($v); ?>
                                <!--<?php endif; ?>-->
                            </label>
                           <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label layui-form-label label-required">消息类型</label>
                    <div class="col-xs-8">
                       <?php foreach(['text'=>'文字','news'=>'图文','image'=>'图片','music'=>'音乐','video'=>'视频'] as $k=>$v): ?>
                        <label class="think-radio">
                            <!--<?php if((!isset($vo['type']) and $k == 'text') or (isset($vo['type']) and$vo['type'] == $k)): ?>-->
                            <input name="type" checked type="radio" value="<?php echo htmlentities($k); ?>"> <?php echo htmlentities($v); ?>
                            <!--<?php else: ?>-->
                            <input name="type" type="radio" value="<?php echo htmlentities($k); ?>"> <?php echo htmlentities($v); ?>
                            <!--<?php endif; ?>-->
                        </label>
                       <?php endforeach; ?>
                    </div>
                </div>

                <div class="form-group" data-keys-type='text'>
                    <label class="col-xs-2 control-label layui-form-label label-required">规则内容</label>
                    <div class="col-xs-8">
                        <textarea name="content" maxlength="10000" class="form-control"><?php echo (isset($vo['content']) && ($vo['content'] !== '')?$vo['content']:'说点什么吧'); ?></textarea>
                    </div>
                </div>

                <div class="form-group" data-keys-type='news'>
                    <label class="col-xs-2 control-label layui-form-label">选取图文</label>
                    <div class="col-xs-8">
                        <a class="btn btn-link" data-title="选择图文" data-iframe="<?php echo url('wechat/news/select'); ?>?field=<?php echo encode('news_id'); ?>">选择图文</a>
                        <input type="hidden" class='layui-input' value="<?php echo htmlentities((isset($vo['news_id']) && ($vo['news_id'] !== '')?$vo['news_id']:0)); ?>" name="news_id">
                    </div>
                </div>

                <div class="form-group" data-keys-type='image'>
                    <label class="col-xs-2 control-label layui-form-label label-required">图片地址</label>
                    <div class="col-xs-8">
                        <input type="text" class="layui-input" onchange="$(this).nextAll('img').attr('src', this.value);"
                               value="<?php echo htmlentities((isset($vo['image_url']) && ($vo['image_url'] !== '')?$vo['image_url']:'http://plugs.ctolog.com/theme/default/img/image.png')); ?>"
                               name="image_url" required title="请上传图片或输入图片URL地址">
                        <p class="help-block">文件最大2Mb，支持bmp/png/jpeg/jpg/gif格式</p>
                        <img data-tips-image src='<?php echo htmlentities((isset($vo['image_url']) && ($vo['image_url'] !== '')?$vo['image_url']:"http://plugs.ctolog.com/theme/default/img/image.png")); ?>'>
                        <a data-file="one" data-type="bmp,png,jpeg,jpg,gif" data-field="image_url" class='btn btn-link'>上传图片</a>
                    </div>
                </div>

                <div class="form-group" data-keys-type='voice'>
                    <label class="col-xs-2 control-label layui-form-label label-required">上传语音</label>
                    <div class="col-xs-8">
                        <div class="input-group">
                            <input class='layui-input' type="text" value="<?php echo htmlentities((isset($vo['voice_url']) && ($vo['voice_url'] !== '')?$vo['voice_url']:'')); ?>" name="voice_url" required title="请上传语音文件或输入语音URL地址　　">
                            <a data-file="one" data-type="mp3,wma,wav,amr" data-field="voice_url" class="input-group-addon"><i class="fa fa-upload"></i></a>
                        </div>
                        <p class="help-block">文件最大2Mb，播放长度不超过60s，mp3/wma/wav/amr格式</p>
                    </div>
                </div>

                <div class="form-group" data-keys-type='music'>
                    <label class="col-xs-2 control-label layui-form-label">音乐标题</label>
                    <div class="col-xs-8">
                        <input class='layui-input' value="<?php echo htmlentities((isset($vo['music_title']) && ($vo['music_title'] !== '')?$vo['music_title']:'音乐标题')); ?>" name="music_title" required title="请输入音乐标题">
                    </div>
                </div>
                <div class="form-group" data-keys-type='music'>
                    <label class="col-xs-2 control-label layui-form-label label-required">上传音乐</label>
                    <div class="col-xs-8">
                        <div class="input-group">
                            <input class='layui-input' type="text" value="<?php echo htmlentities((isset($vo['music_url']) && ($vo['music_url'] !== '')?$vo['music_url']:'')); ?>" name="music_url" required title="请上传音乐文件或输入音乐URL地址　　">
                            <a data-file="one" data-type="mp3,wma,wav,amr" data-field="music_url" class="input-group-addon"><i class="fa fa-upload"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-keys-type='music'>
                    <label class="col-xs-2 control-label layui-form-label">音乐描述</label>
                    <div class="col-xs-8">
                        <input name="music_desc" class="layui-input" value="<?php echo (isset($vo['music_desc']) && ($vo['music_desc'] !== '')?$vo['music_desc']:'音乐描述'); ?>">
                    </div>
                </div>
                <div class="form-group" data-keys-type='music'>
                    <label class="col-xs-2 control-label layui-form-label">音乐图片</label>
                    <div class="col-xs-8">
                        <input onchange="$(this).nextAll('img').attr('src', this.value);" type="text" class="layui-input"
                               value="<?php echo htmlentities((isset($vo['music_image']) && ($vo['music_image'] !== '')?$vo['music_image']:'http://plugs.ctolog.com/theme/default/img/image.png')); ?>"
                               name="music_image" required title="请上传音乐图片或输入音乐图片URL地址　　">
                        <p class="help-block">文件最大64KB，只支持JPG格式</p>
                        <img data-tips-image src='<?php echo htmlentities((isset($vo['music_image']) && ($vo['music_image'] !== '')?$vo['music_image']:"http://plugs.ctolog.com/theme/default/img/image.png")); ?>'>
                        <a data-file="one" data-type="jpg" data-field="music_image" class='btn btn-link'>上传图片</a>
                    </div>
                </div>

                <div class="form-group" data-keys-type='video'>
                    <label class="col-xs-2 control-label layui-form-label">视频标题</label>
                    <div class="col-xs-8">
                        <input class='layui-input' value="<?php echo htmlentities((isset($vo['video_title']) && ($vo['video_title'] !== '')?$vo['video_title']:'视频标题')); ?>" name="video_title" required title="请输入视频标题">
                    </div>
                </div>
                <div class="form-group" data-keys-type='video'>
                    <label class="col-xs-2 control-label layui-form-label label-required">上传视频</label>
                    <div class="col-xs-8">
                        <div class="input-group">
                            <input class='layui-input' type="text" value="<?php echo htmlentities((isset($vo['video_url']) && ($vo['video_url'] !== '')?$vo['video_url']:'')); ?>" name="video_url" required title="请上传音乐视频或输入音乐视频URL地址　　">
                            <a data-file="one" data-type="mp4" data-field="video_url" class="input-group-addon"><i class="fa fa-upload"></i></a>
                        </div>
                        <p class="help-block">文件最大10MB，只支持MP4格式</p>
                    </div>
                </div>
                <div class="form-group" data-keys-type='video'>
                    <label class="col-xs-2 control-label layui-form-label">视频描述</label>
                    <div class="col-xs-8">
                        <textarea name="video_desc" maxlength="50" class="form-control"><?php echo (isset($vo['video_desc']) && ($vo['video_desc'] !== '')?$vo['video_desc']:'视频描述'); ?></textarea>
                    </div>
                </div>

                <div class="text-center padding-bottom-10" style="position:absolute;bottom:0;width:100%;">
                    <div class="hr-line-dashed" style="margin:10px 0"></div>
                    <button class="layui-btn menu-submit">保存数据</button>
                    <!--<?php if(!isset($vo['keys']) || !in_array($vo['keys'],['default','subscribe'])): ?>-->
                    <button data-cancel-edit class="layui-btn layui-btn-danger" type='button'>取消编辑</button>
                    <!--<?php endif; ?>-->
                </div>
               <?php if(isset($vo['id'])): ?><input type='hidden' value='<?php echo htmlentities($vo['id']); ?>' name='id'><?php endif; ?>

            </fieldset>
        </form>
    </div>
</div>
</div>
</div>

<script>

    $(function (){

        var $body = $('body');

        /*! 取消编辑 */
        $('[data-cancel-edit]').on('click', function (){
            var dialogIndex = $.msg.confirm('确定取消编辑吗？', function (){
                history.back();
                $.msg.close(dialogIndex);
            });
        });

        /*! 刷新预览显示 */
        function showReview(params){
            $('#phone-preview').attr('src', '<?php echo url("@wechat/review"); ?>?' + $.param(params ||{}));
        }

        // 图文显示预览
        $body.off('change', '[name="news_id"]').on('change', '[name="news_id"]', function (){
            showReview({type:'news', content:this.value});
        });

        // 文字显示预览
        $body.off('change', '[name="content"]').on('change', '[name="content"]', function (){
            showReview({type:'text', content:this.value});
        });

        // 图片显示预览
        $body.off('change', '[name="image_url"]').on('change', '[name="image_url"]', function (){
            showReview({type:'image', content:this.value});
        });

        // 音乐显示预览
        var musicSelector = '[name="music_url"],[name="music_title"],[name="music_desc"],[name="music_image"]';
        $body.off('change', musicSelector).on('change', musicSelector, function (){
            var params ={type:'music'}, $parent = $(this).parents('form');
            params.title = $parent.find('[name="music_title"]').val();
            params.url = $parent.find('[name="music_url"]').val();
            params.image = $parent.find('[name="music_image"]').val();
            params.desc = $parent.find('[name="music_desc"]').val();
            showReview(params);
        });

        // 视频显示预览
        var videoSelector = '[name="video_title"],[name="video_url"],[name="video_desc"]';
        $body.off('change', videoSelector).on('change', videoSelector, function (){
            var params ={type:'video'}, $parent = $(this).parents('form');
            params.title = $parent.find('[name="video_title"]').val();
            params.url = $parent.find('[name="video_url"]').val();
            params.desc = $parent.find('[name="video_desc"]').val();
            showReview(params);
        });

        /*! 默认类型事件 */
        $body.off('click', 'input[name=type]').on('click', 'input[name=type]', function (){
            var value = $(this).val(), $form = $(this).parents('form');
            var $current = $form.find('[data-keys-type="' + value + '"]').removeClass('hide');
            $form.find('[data-keys-type]').not($current).addClass('hide');
            switch (value){
                case 'news':
                    return $('[name="news_id"]').trigger('change');
                case 'text':
                    return $('[name="content"]').trigger('change');
                case 'image':
                    return $('[name="image_url"]').trigger('change');
                case 'video':
                    return $('[name="video_url"]').trigger('change');
                case 'music':
                    return $('[name="music_url"]').trigger('change');
                case 'voice':
                    return $('[name="voice_url"]').trigger('change');
            }
        });

        // 默认事件触发
        $('input[name=type]:checked').map(function (){
            $(this).trigger('click');
        });
    });
</script>

<!-- 右则内容区域 结束 -->