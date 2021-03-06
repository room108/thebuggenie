<?php

    TBGContext::loadLibrary('ui');

?>
<div id="login_backdrop">
    <div class="backdrop_box login_page login_popup" id="login_popup">
        <div id="backdrop_detail_content" class="backdrop_detail_content rounded_top login_content">
            <?php include_component('main/login', compact('section', 'error')); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php if (TBGContext::hasMessage('login_message')): ?>
        TBG.Main.Helpers.Message.success('<?php echo TBGContext::getMessageAndClear('login_message'); ?>');
    <?php elseif (TBGContext::hasMessage('login_message_err')): ?>
        TBG.Main.Helpers.Message.error('<?php echo TBGContext::getMessageAndClear('login_message_err'); ?>');
    <?php endif; ?>
    document.observe('dom:loaded', function() {
        $('tbg3_username').focus();
    });
</script>