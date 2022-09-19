<?php


namespace App\Helpers\Styling;


class lightColorStyling implements StylingInterface
{
    /**
     * @return string
     */
    public function getStyling(): string
    {
        return "
            <style>
                .heading1 {
                    color: lightcoral;
                    font-weight:700;
                    font-size: 35px;
                }
                .heading2 {
                    color: lightblue;
                    font-weight:700;
                    font-size: 30px;
                }
                .heading3 {
                    color: lightgreen;
                    font-weight:700;
                    font-size: 25px;
                }
                .heading4 {
                    color: lightsalmon;
                    font-weight:700;
                    font-size: 20px;
                }
                .heading5 {
                    color: lightseagreen;
                    font-weight:700;
                    font-size: 15px;
                }
                .paragraph {
                    color: black;
                    font-weight:700;
                    font-size: 10px;
                }
            </style>
        ";
    }
}
