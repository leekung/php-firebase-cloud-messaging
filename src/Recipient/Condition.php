<?php
namespace sngrl\PhpFirebaseCloudMessaging\Recipient;

class Condition extends Recipient
{
    private $condition;

    public function __construct($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    public function getCondition()
    {
        return $this->condition;
    }
}