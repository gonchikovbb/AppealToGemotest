<?php

namespace App\Client\Type;

class OrderResult
{
    /**
     * @var string
     */
    private $order_num;

    /**
     * @var \App\Client\Type\ResultsCl
     */
    private $results_cl;

    /**
     * @var \App\Client\Type\ResultsMb
     */
    private $results_mb;

    /**
     * @var \App\Client\Type\Attachments
     */
    private $attachments;

    /**
     * @return string
     */
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return OrderResult
     */
    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

        return $new;
    }

    /**
     * @return \App\Client\Type\ResultsCl
     */
    public function getResults_cl()
    {
        return $this->results_cl;
    }

    /**
     * @param \App\Client\Type\ResultsCl $results_cl
     * @return OrderResult
     */
    public function withResults_cl($results_cl)
    {
        $new = clone $this;
        $new->results_cl = $results_cl;

        return $new;
    }

    /**
     * @return \App\Client\Type\ResultsMb
     */
    public function getResults_mb()
    {
        return $this->results_mb;
    }

    /**
     * @param \App\Client\Type\ResultsMb $results_mb
     * @return OrderResult
     */
    public function withResults_mb($results_mb)
    {
        $new = clone $this;
        $new->results_mb = $results_mb;

        return $new;
    }

    /**
     * @return \App\Client\Type\Attachments
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \App\Client\Type\Attachments $attachments
     * @return OrderResult
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }
}

