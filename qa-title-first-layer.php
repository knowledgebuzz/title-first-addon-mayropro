<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    public function q_item_main($q_item)
    {
        $this->output('<div class="qa-q-item-main">');

        // Show question title first
        $this->q_item_title($q_item);

        // Then author/meta
        $this->post_avatar_meta($q_item, 'qa-q-item');

        // Rest of elements
        $this->q_item_content($q_item);
        $this->post_tags($q_item, 'qa-q-item');
        $this->q_item_buttons($q_item);

        $this->output('</div>');
    }
}