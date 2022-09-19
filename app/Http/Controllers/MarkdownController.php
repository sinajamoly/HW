<?php

namespace App\Http\Controllers;

use App\Helpers\Markdown\Markdown;
use App\Helpers\Styling\DarkColorStyling;
use App\Helpers\Styling\lightColorStyling;
use App\Helpers\Styling\StylingInterface;
use App\Http\Requests\GetMarkdownRequest;
use App\Http\Requests\publishMarkdownRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;


class MarkdownController extends Controller
{
    /**
     * @param GetMarkdownRequest $request
     * @return Response
     */
    public function getHTMLFromMarkdown(GetMarkdownRequest $request)
    {
        $markdown_content = $request->file('markdown')->getContent();

        $html = (new Markdown(static::getStyling($request)))->MarkdownToHtml($markdown_content);

        return new Response($html);
    }

    /**
     * @param publishMarkdownRequest $request
     * @return Response
     */
    public function publishMarkdown(publishMarkdownRequest $request)
    {
        $markdown_content = $request->file('markdown')->getContent();

        $html = (new Markdown(static::getStyling($request)))->MarkdownToHtml($markdown_content);

        Storage::disk('markdown')->put($request->get('name') . '.html', $html);

        return new Response('successfully published', Response::HTTP_CREATED);
    }

    private static function getStyling(Request $request): StylingInterface
    {
        if ($request->get('theme') === 'dark') {
            return new DarkColorStyling();
        }

        return new lightColorStyling();
    }
}
