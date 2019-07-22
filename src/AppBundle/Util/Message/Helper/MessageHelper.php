<?php


namespace AppBundle\Util\Message\Helper;


use AppBundle\Entity\Message;
use Twig\Environment as TwigEnvironment;

class MessageHelper
{
    protected $mailer;
    protected $templating;

    public function __construct(\Swift_Mailer $mailer, TwigEnvironment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    /**
     * @param Message $message
     * @param $recipient
     */
    public function sendNotification(Message $message, $recipient)
    {
        $mailer = \Swift_Message::newInstance()
            ->setSubject('New Message!')
            ->setFrom($message->getEmail())
            ->setTo($recipient)
            ->setBody(
                $this->templating->render(
                    'default/email_message.html.twig',
                    [
                        'name'    => $message->getName(),
                        'email'   => $message->getEmail(),
                        'message' => $message->getMessage()
                    ]
                ),
                'text/html'
            );

        $this->mailer->send($mailer);
    }
}
