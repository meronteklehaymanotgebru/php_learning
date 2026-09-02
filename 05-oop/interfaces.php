<?php

interface Notification
{
    public function send(string $message): void;
}

class EmailNotification implements Notification
{
    public function send(string $message): void
    {
        echo "Sending email: " . $message . "\n";
    }
}

class SMSNotification implements Notification
{
    public function send(string $message): void
    {
        echo "Sending SMS: " . $message . "\n";
    }
}
class PushNotification implements Notification
{
    public function send(string $message): void
    {
       echo "Sending push notification: " . $message . "\n"; 
    }
}
$push = new PushNotification();
$push -> send("Your account was created");