<li id="tab_vcs"<?php if ($selected_tab == 'vcs'): ?> class="selected"<?php endif; ?>><?php echo javascript_link_tag(__('VCS Integration'), array('onclick' => "TBG.Main.Helpers.tabSwitcher('tab_vcs', 'project_config_menu');")); ?></li>