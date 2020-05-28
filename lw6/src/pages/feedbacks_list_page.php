<?php
function feedbackPage(array $args = ['is_submit' => false]): void
{
    renderTemplate('feedback.tpl.php', $args);
}
