<div style="margin-top: 5px; width: 750px; clear: both; height: 30px;" class="tab_menu">
    <ul id="tracplugin_settings_menu">
        <li class="selected" id="tracplugin_tab_settings"><a onclick="TBG.Main.Helpers.tabSwitcher('tracplugin_tab_settings', 'tracplugin_settings_menu');" href="javascript:void(0);"><?php echo image_tag('cfg_icon_general.png', array('style' => 'float: left;')).__('Project settings'); ?></a></li>
        <li id="tracplugin_tab_mail"><a onclick="TBG.Main.Helpers.tabSwitcher('tracplugin_tab_mail', 'tracplugin_settings_menu');" href="javascript:void(0);"><?php echo image_tag('modules/mailing/tab_mailing.png', array('style' => 'float: left;')).__('Mail settings'); ?></a></li>
    </ul>
</div>
<div id="tracplugin_settings_menu_panes">
    <div id="tracplugin_tab_settings_pane" style="margin: 10px 0 0 0; width: 740px;<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> border-bottom: 0;<?php endif; ?>">
        <form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('configure_module', array('config_module' => $module->getName())); ?>" enctype="multipart/form-data" method="post">
            <div class="rounded_box borderless mediumgrey<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> cut_bottom<?php endif; ?>" style="margin: 10px 0 0 0; width: 744px;<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> border-bottom: 0;<?php endif; ?>">
                <div class="content" style="padding-bottom: 10px;"><?php echo __('Settings to create a project associated with a Trac project.'); ?></div>
                <table style="width: 680px;" class="padded_table" cellpadding=0 cellspacing=0 id="mailnotification_settings_table">
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="project_name_input"><?php echo __('Project name:'); ?></label></td>
                        <td><input type="text" name="project_name_input" id="project_name_input" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="path_trac_project_input"><?php echo __('Path to the Trac project:'); ?></label></td>
                        <td><input type="text" name="path_trac_project_input" id="path_trac_project_input" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="manager_email_input"><?php echo __('Email of the project manager:'); ?></label></td>
                        <td><input type="text" name="manager_email_input" id="manager_email_input" style="width: 100%;"></td>
                    </tr>
                </table>
            </div>
        <?php if ($access_level == TBGSettings::ACCESS_FULL): ?>
            <div class="rounded_box iceblue borderless cut_top" style="margin: 0 0 5px 0; width: 740px; border-top: 0; padding: 8px 5px 2px 5px; height: 25px;">
                <div style="float: left; font-size: 13px; padding-top: 2px;"><?php echo __('Click "%create%" to create the project', array('%create%' => __('Create Project'))); ?></div>
                <input type="submit" id="submit_settings_button" style="float: right; padding: 0 10px 0 10px; font-size: 14px; font-weight: bold;" value="<?php echo __('Create Project'); ?>">
            </div>
        <?php endif; ?>
        </form>
    </div>
    <div id="tracplugin_tab_mail_pane" style="margin: 10px 0 0 0; width: 740px; display: none;<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> border-bottom: 0;<?php endif; ?>">
        <form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('configure_module', array('config_module' => $module->getName())); ?>" enctype="multipart/form-data" method="post">
            <div class="rounded_box borderless mediumgrey<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> cut_bottom<?php endif; ?>" style="margin: 10px 0 0 0; width: 744px;<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> border-bottom: 0;<?php endif; ?>">
                <div class="content" style="padding-bottom: 10px;"><?php echo __('Settings for outgoing emails, such as bug notification emails.'); ?></div>
                <table style="width: 680px;" class="padded_table" cellpadding=0 cellspacing=0 id="mailnotification_settings_table">
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="smtp_server_address_input"><?php echo __('SMTP server address:'); ?></label></td>
                        <td><input type="text" name="smtp_server_address_input" id="smtp_server_address_input" value="<?php echo $module->getSetting('smtp_server_address_input'); ?>" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="smtp_server_port"><?php echo __('SMTP server port:'); ?></label></td>
                        <td><input type="text" name="smtp_server_port" id="smtp_server_port" value="<?php echo $module->getSetting('smtp_server_port'); ?>" style="width: 40px;"<?php echo ($access_level != TBGSettings::ACCESS_FULL) ? ' disabled' : ''; ?>></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="smtp_user"><?php echo __('Username:'); ?></label></td>
                        <td><input type="text" name="smtp_user" id="smtp_user" value="<?php echo $module->getSetting('smtp_user'); ?>" style="width: 100%;"<?php echo ($access_level != TBGSettings::ACCESS_FULL) ? ' disabled' : ''; ?>></td>
                    </tr>
                    <tr>
                        <td class="config_explanation" colspan="2"><?php echo __('The username used for sending emails.'); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="smtp_wd"><?php echo __('Password:'); ?></label></td>
                        <td><input type="password" name="smtp_pwd" id="smtp_pwd" value="<?php echo $module->getSetting('smtp_pwd'); ?>" style="width: 100%;"<?php echo ($access_level != TBGSettings::ACCESS_FULL) ? ' disabled' : ''; ?>></td>
                    </tr>
                    <tr>
                        <td class="config_explanation" colspan="2"><?php echo __('The password used for sending emails.'); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%; padding: 5px;"><label for="name_input"><?php echo __('Name:'); ?></label></td>
                        <td><input type="text" name="name_input" id="name_input" value="<?php echo $module->getSetting('name_input'); ?>" style="width: 100%;"<?php echo ($access_level != TBGSettings::ACCESS_FULL) ? ' disabled' : ''; ?>></td>
                    </tr>
                    <tr>
                        <td class="config_explanation" colspan="2"><?php echo __('The alias for the email.'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 5px; text-align: right;">&nbsp;</td>
                    </tr>
                </table>
            </div>
        <?php if ($access_level == TBGSettings::ACCESS_FULL): ?>
            <div class="rounded_box iceblue borderless cut_top" style="margin: 0 0 5px 0; width: 740px; border-top: 0; padding: 8px 5px 2px 5px; height: 25px;">
                <div style="float: left; font-size: 13px; padding-top: 2px;"><?php echo __('Click "%save%" to save mail settings', array('%save%' => __('Save'))); ?></div>
                <input type="submit" id="submit_settings_button" style="float: right; padding: 0 10px 0 10px; font-size: 14px; font-weight: bold;" value="<?php echo __('Save'); ?>">
            </div>
        <?php endif; ?>
        <?php if ($module->isEnabled()): ?>
            <form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" method="post">
                <div class="rounded_box borderless mediumgrey" style="margin: 10px 0 0 0; width: 740px; padding: 5px 5px 30px 5px;">
                    <table style="width: 680px;" class="padded_table" cellpadding=0 cellspacing=0>
                        <tr>
                            <td style="width: 40%; padding: 5px;"><label for="test_email_to"><?php echo __('Send test email:'); ?></label></td>
                            <td style="width: auto;"><input type="text" name="test_email_to" id="test_email_to" value="" style="width: 100%;"<?php echo ($access_level != TBGSettings::ACCESS_FULL) ? ' disabled' : ''; ?>></td>
                        </tr>
                        <tr>
                            <td class="config_explanation" colspan="2" style="font-size: 13px;">
                                <span class="faded_out">
                                    <?php echo __('Enter an email address, and click "%send_test_email%" to send a test email.', array('%send_test_email%' => __('Send test email'))); ?>
                                </span>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" id="submit_settings_button" style="float: right; padding: 0 10px 0 10px; font-size: 13px; font-weight: bold;" value="<?php echo __('Send test email'); ?>">
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>
