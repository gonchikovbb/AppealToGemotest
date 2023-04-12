<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetAnalysisResult implements ResultInterface
{
    /**
     * @var \App\Client\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $order_num;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $doctor;

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
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $status;

    /**
     * @return \App\Client\Type\ErrorDescription
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * @param \App\Client\Type\ErrorDescription $error_description
     * @return ResponseGetAnalysisResult
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return string
     */
    public function getExt_num()
    {
        return $this->ext_num;
    }

    /**
     * @param string $ext_num
     * @return ResponseGetAnalysisResult
     */
    public function withExt_num($ext_num)
    {
        $new = clone $this;
        $new->ext_num = $ext_num;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return ResponseGetAnalysisResult
     */
    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return ResponseGetAnalysisResult
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return string
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * @param string $doctor
     * @return ResponseGetAnalysisResult
     */
    public function withDoctor($doctor)
    {
        $new = clone $this;
        $new->doctor = $doctor;

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
     * @return ResponseGetAnalysisResult
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
     * @return ResponseGetAnalysisResult
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
     * @return ResponseGetAnalysisResult
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return ResponseGetAnalysisResult
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return ResponseGetAnalysisResult
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

