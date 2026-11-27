<?php

namespace rhertogh\Yii2Oauth2Server\models\traits;

use DateTimeImmutable;

trait Oauth2ExpiryDateTimeTrait
{
    /**
     * @inheritDoc
     */
    public function getExpiryDateTime(): \DateTimeImmutable
    {
        return $this->expiry_date_time;
    }

    /**
     * @inheritDoc
     */
    public function setExpiryDateTime(DateTimeImmutable $dateTime): void
    {
        $this->expiry_date_time = $dateTime;
    }
}
