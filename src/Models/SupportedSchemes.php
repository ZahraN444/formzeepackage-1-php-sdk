<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class SupportedSchemes implements \JsonSerializable
{
    /**
     * @var BACS|null
     */
    private $bACS;

    /**
     * @var CCC|null
     */
    private $cCC;

    /**
     * @var CHAPS|null
     */
    private $cHAPS;

    /**
     * @var FPS|null
     */
    private $fPS;

    /**
     * Returns B ACS.
     */
    public function getBACS(): ?BACS
    {
        return $this->bACS;
    }

    /**
     * Sets B ACS.
     *
     * @maps BACS
     */
    public function setBACS(?BACS $bACS): void
    {
        $this->bACS = $bACS;
    }

    /**
     * Returns C CC.
     */
    public function getCCC(): ?CCC
    {
        return $this->cCC;
    }

    /**
     * Sets C CC.
     *
     * @maps CCC
     */
    public function setCCC(?CCC $cCC): void
    {
        $this->cCC = $cCC;
    }

    /**
     * Returns C HAPS.
     */
    public function getCHAPS(): ?CHAPS
    {
        return $this->cHAPS;
    }

    /**
     * Sets C HAPS.
     *
     * @maps CHAPS
     */
    public function setCHAPS(?CHAPS $cHAPS): void
    {
        $this->cHAPS = $cHAPS;
    }

    /**
     * Returns F PS.
     */
    public function getFPS(): ?FPS
    {
        return $this->fPS;
    }

    /**
     * Sets F PS.
     *
     * @maps FPS
     */
    public function setFPS(?FPS $fPS): void
    {
        $this->fPS = $fPS;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->bACS)) {
            $json['BACS']  = $this->bACS;
        }
        if (isset($this->cCC)) {
            $json['CCC']   = $this->cCC;
        }
        if (isset($this->cHAPS)) {
            $json['CHAPS'] = $this->cHAPS;
        }
        if (isset($this->fPS)) {
            $json['FPS']   = $this->fPS;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
