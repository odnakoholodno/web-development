<?php
  include __DIR__ . '/../src/common.inc.php';
  if(getRequestMethod() === 'POST')
  {
    getUser();
  }
  else
  {
    feedbackPage();
  }

function getUser(): void
{
  $dataFeedback = [];
  $dataFeedback['success'] = true;
  $userEmail = mb_strtolower(getPostParameter('email'));
  $dataFeedback['enterEmail'] = $userEmail;
  if (file_exists(__DIR__ . 'messages/' . $userEmail . '.txt'))
  {
      $dataFeedback['data'] = file_get_contents(__DIR__ . 'messages/' . $userEmail . '.txt');
  }
  else
  {
      $dataFeedback['success'] = false;
  }
  feedbackPage($dataFeedback);
}
