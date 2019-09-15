<?php

return [
    'css' => '
        <link rel="stylesheet" href="/panel/default/' . $this->exp[0] . '.css">',
    'logo' => '<div class="logo"></div>',
    'a-logo' => '<a href="/main' . $this->ext . '"><div class="logo"></div></a>',
    'wg' => '<p class="input-warning">{ W }</p>',
    'id-error' => '
            <p id="id-error">{ E }</p>',
    'option' => '<option value="{ V }">{ O }</option>',
    'option-selected' => '<option value="{ V }" selected>{ O }</option>',
    'lang' => [
        'div' => '
                <div class="right">
                    <ul class="hover">
                        <li>&#9660; { L }</li>
                        <li>
                        <form action="' . $this->request . '" method="post">
                            <div>{ B }</div>
                        </form>
                        </li>
                    </ul>
                </div>',
        'button' => '<button type="submit" name="core:lang" value="{ V }"><img src="/panel/img/lang/20x13.{ L }.png">{ B }</button>',
        'hidden' => '<input type="hidden" name="{ N }">',
        'hidden-value' => '<input type="hidden" name="{ N }" value="{ V }">'
    ],
    'route' => [
        'div' => '
            <div id="route">{ R }
                <div class="clear"></div>
            </div>',
        'p' => '
                <p><span>&#187;</span>{ T }</p>',
        'p-red' => '
                <p class="red"><span>&#187;</span>{ T }</p>',
        'a' => '
                <p><span>&#187;</span><a href="{ H }' . $this->ext . '">{ A }</a></p>'
    ],
    'menu' => [
        'ul' => '
            <ul id="menu">[L]
            </ul>',
        'li' => '
                <li><a href="/[H]' . $this->ext . '">[A]</a></li>',
        'li-blank' => '
                <li><a href="/[H]' . $this->ext . '" target="_blank">[A]</a></li>'
    ]
];
