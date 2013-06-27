<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Type/BaseType: Base type
 *
 * @author Raúl Fraile Beneyto <raulfraile@gmail.com> || @raulfraile
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Render;

use Ladybug\Theme\HtmlThemeInterface;

class HtmlRender extends BaseRender implements RenderInterface
{

    public function getFormat()
    {
        return self::FORMAT_HTML;
    }

    public function render(array $nodes)
    {
        /** @var HtmlThemeInterface $theme */
        $theme = $this->theme;

        $result = $this->twig->render('layout.html.twig', array(
            'nodes' => $nodes,
            'css' => $theme->getHtmlCssDependencies(),
            'js' => $theme->getHtmlJsDependencies()
        ));

        return $result;
    }
}