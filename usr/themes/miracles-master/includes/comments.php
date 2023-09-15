<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
<div role="comment" id="<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->_levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass; 
?>">
    <div class="comment-body-inner">
      <div class="comment-author-avatar">
        <?php $comments->gravatar('100', ''); ?>
      </div>
	  <div class="comment-main comment-author-info">
		<div class="comment-content bubble">
		  <span class="comment-reply">
		    <?php $comments->reply('<i class="iconfont icon-return"></i>'); ?>
		  </span>
		  <?php Comments::getCommentHF($comments->coid); echo Contents::parseEmo($comments->content); ?>
	    </div>
		<p class="comment-meta">
		  <span class="comment-author"><a href="<?php echo $comments->url; ?>" target="_blank"><?php echo $comments->author; ?></a></span>
		  <span class="comment-date">
		    <?php if ('waiting' == $comments->status) { ?>
            <em class="comment-waiting"><?php gtecho('commentListTexts','commentWaiting'); ?></em>
            <?php } else { ?>
		    <?php $comments->date('Y-m-d H:i'); ?>
			<?php } ?>
		  </span>
		</p>
	  </div>
	</div>
	  <?php if ($comments->children) { ?>
        <div class="comment-children">
          <?php $comments->threadedComments($options); ?>
        </div>
      <?php } ?>
</div>
<?php } ?>

      <div class="comment">
	    <?php $this->comments()->to($comments); ?>
    <?php if($this->fields->commentShow == 0)://如果显示评论列表 ?>
        <?php if ($comments->have())://如果有评论 则显示 ?>
		<div class="comment-container" id="comments">
		  <h3 class="comment-title" id="response"><?php $this->commentsNum(_t(gt('commentListTexts','commentNumNone')), _t(gta('commentListTexts','commentNum','1')), _t(gta('commentListTexts','commentNum','%d'))); ?></h3>
          <?php $comments->listComments(array(
            'before'        =>  '<div class="comment-list" role="list">',
            'after'         =>  '</div>',
            'avatarSize'    =>  200,
            'dateFormat'    =>  'Y-m-d H:i'
            )); ?>
		  <div class="comment-pagenav">
        <?php $comments->pageNav('<i class="iconfont icon-chevron-left comment-pagenav-icon"></i>', '<i class="iconfont icon-chevron-right comment-pagenav-icon"></i>'); ?>
      </div>
		</div>
		
        <?php endif;//有无评论判断结束?>
	<?php else: //如果不显示评论列表 ?>
	    <?php if($this->allow('comment')): ?><div class="comment-hidden"><?php gtecho('commentListTexts','commentHidden'); ?></div><?php endif; ?>
	<?php endif;//是否显示判断结束 ?>
		
		<div class="comment-form">
		  <!-- 判断设置是否允许对当前文章进行评论 -->
    <?php if($this->allow('comment')): ?>
          <div id="<?php $this->respondId(); ?>" class="respond comment-box-id" data-commentUrl="<?php $this->commentUrl() ?>">
<!-- 输入表单开始 -->
           <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
<!-- 如果当前用户已经登录 -->
            <?php if($this->user->hasLogin()): ?>
<!-- 显示当前登录用户的用户名以及登出连接 -->
            <p class="col-md-12 comment-logined-sign"><?php gtecho('commentListTexts','commentStatus'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php gtecho('commentListTexts','commentLogout'); ?></a></p>
<!-- 若当前用户未登录 -->
            <?php else: ?>
<!-- 要求输入名字、邮箱、网址 -->
            <div class="comment-input">
                <input type="text" name="author" id="author" class="text" placeholder="<?php gtecho('commentFormTexts','nameInput'); ?>" value="<?php $this->remember('author'); ?>" required />
                <input type="email" name="mail" id="mail" class="text" placeholder="<?php gtecho('commentFormTexts','emailInput'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                <input type="url" name="url" id="url" class="text" placeholder="<?php gtecho('commentFormTexts','urlInput'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
			</div>
            <?php endif; ?>
<!-- 输入要回复的内容 -->
             <p>
                <textarea rows="8" name="text" id="textarea" class="OwO-textarea comment-textarea textarea" required ><?php $this->remember('text'); ?></textarea>
             </p>
			  <p class="comment-submit-box">
			    <div title="OwO" class="OwO"></div>
				<div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div>
                <button type="submit" onclick="return MiraclesComment.submitComment();" class="comment-submit submit"><?php gtecho('commentFormTexts','submit'); ?></button>
              </p>
             </form>
            </div>
<!-- 若当前文章不允许进行评论 -->
      <?php else: ?>
      <div class="comment-hidden"><?php gtecho('commentListTexts','commentClosed'); ?></div>
      <?php endif; ?>
		</div>
	</div>
  <?php //兼容 typecho 反垃圾
  if ($this->options->commentsAntiSpam) { Comments::AntiSpam($this->respondId, Typecho_Common::shuffleScriptVar($this->security->getToken(preg_replace('/\??&?_pjax=[^&]+/i','',$this->request->getRequestUrl())))); } ?>
