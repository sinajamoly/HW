<?php


namespace App\Helpers\Styling;


class DarkColorStyling implements StylingInterface
{
    /**
     * @return string
     */
    public function getStyling(): string
    {
        return "
            <style>
                .heading1 {
                    color: gray;
                    font-weight:700;
                    font-size: 35px;
                }
                .heading2 {
                    color: darkgray;
                    font-weight:700;
                    font-size: 30px;
                }
                .heading3 {
                    color: darkgreen;
                    font-weight:700;
                    font-size: 25px;
                }
                .heading4 {
                    color: darkseagreen;
                    font-weight:700;
                    font-size: 20px;
                }
                .heading5 {
                    color: darkorange;
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
