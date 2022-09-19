<?php

namespace App\Helpers\Markdown;

use App\Helpers\Styling\StylingInterface;

class Markdown
{
    public const H5_REGEX = "/#{5}\s(.*)/";
    public const H4_REGEX = "/#{4}\s(.*)/";
    public const H3_REGEX = "/#{3}\s(.*)/";
    public const H2_REGEX = "/#{2}\s(.*)/";
    public const H1_REGEX = '/#{1}\s(.*)/';
    public const A_REGEX = '/\[(.*?)\]\((.*?)\)/';

    public const H1 = '<h1 class="heading1">$1</h1>';
    public const H2 = '<h2 class="heading2">$1</h2>';
    public const H3 = '<h3 class="heading3">$1</h3>';
    public const H4 = '<h4 class="heading4">$1</h4>';
    public const H5 = '<h5 class="heading5">$1</h5>';
    public const A = '<a href=\'$2\'>$1</a>';

    public const MAP_REGEX_TO_HTML = [
        self::H5_REGEX => self::H5,
        self::H4_REGEX => self::H4,
        self::H3_REGEX => self::H3,
        self::H2_REGEX => self::H2,
        self::H1_REGEX => self::H1,
        self::A_REGEX => self::A,
    ];

    /** @var StylingInterface */
    private $styling;

    public function __construct(StylingInterface $styling)
    {
        $this->styling = $styling;
    }

    public function MarkdownToHtml(string $markdownString): string
    {
        $temp = preg_replace(
            array_keys(static::MAP_REGEX_TO_HTML),
            array_values(static::MAP_REGEX_TO_HTML),
            $markdownString
        );

        $temp2 = '';
        foreach(explode(PHP_EOL, $temp) as $line){
            if (substr(trim($line), 0, 1) === '<' || substr(trim($line), 0, 1) === '') {
                $temp2 = $temp2 . $line;

                continue;
            }

            $temp2 = $temp2 . '<p>' . trim($line) . '</p>' . PHP_EOL;
        }

        return $this->addStyling($temp2);
    }

    private function addStyling(string $html): string
    {
        return $this->styling->getStyling() . $html;
    }
}
