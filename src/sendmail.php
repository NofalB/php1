<?php
  require '../vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('dfbc7475f1095ef52342f903fcfa4f20','0dda49dd36e9279009e86b4cf1367a15',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "mumbojumbo399@gmail.com",
          'Name' => "mumbo"
        ],
        'To' => [
          [
            'Email' => "mumbojumbo399@gmail.com",
            'Name' => "mumbo"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>