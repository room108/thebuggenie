<div class="article">
    <div class="header">Special:<?php echo ($projectnamespace != '') ? "<span class='faded_out'>{$projectnamespace}</span>" : ''; ?>Uncategorized Categories</div>
    <?php if (TBGContext::isProjectContext()): ?>
        <div class="greybox" style="margin: 15px;">
            <?php echo __('Note: This page lists all categories without any parent categories in "%project_name". For a list of global categories with no parent categories, see %uncategorized_categories', array('%project_name' => TBGContext::getCurrentProject()->getName(), '%uncategorized_categories' => link_tag(make_url('publish_article', array('article_name' => "Special:UncategorizedCategories")), 'Special:UncategorizedCategories'))); ?>
        </div>
    <?php endif; ?>
    <p>
        <?php echo __('Below is a listing of categories that have no parent categories.'); ?>
    </p>
    <?php include_template('publish/articleslist', array('articles' => $articles, 'include_redirects' => false)); ?>
</div>
