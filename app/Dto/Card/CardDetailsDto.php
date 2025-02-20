<?php

namespace App\Dto\Card;
use App\Dto\BaseDto;

readonly class CardDetailsDto extends BaseDto
{
    /**
     * @param string $card_holder_name
     * @param string $card_number
     * @param string $card_expiry_month
     * @param string $card_expiry_year
     * @param int $card_cvv
     */
    public function __construct(
        private string $card_holder_name,
        private string $card_number,
        private string $card_expiry_month,
        private string $card_expiry_year,
        private int $card_cvv,
    ){}

    /**
     * @return string
     */
    public function getCardHolderName(): string
    {
        return $this->card_holder_name;
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->card_number;
    }

    /**
     * @return string
     */
    public function getCardExpiryMonth(): string
    {
        return $this->card_expiry_month;
    }

    /**
     * @return string
     */
    public function getCardExpiryYear(): string
    {
        return $this->card_expiry_year;
    }

    /**
     * @return string
     */
    public function getCardCvv(): string
    {
        return $this->card_cvv;
    }

}
