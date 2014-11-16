<?php
/**
 * Project: Zener Cards Game
 * File:    zener.php
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright 2008 Franco Tecnologia (http://francotecnologia.com)
 * @author    Anderson Franco <anderson@francotecnologia.com>
 * @version   1.0 (06 Nov 2008)
 */

/**
 * Embedded Images
 */
$imgs = array(
    'waves' => array(
        'type' => 'gif', 'width' => '58', 'height' => '78',
        'code' => 'eJwBHgHh/kdJRjg5YToATgCAAAD///8AAAAh+QQAAAAAACwAAAAAOgBOAEAC
                   9YSPqcvtD1cIaMaLk6307AxKnfGRYxiW6om2Jqex7rzCMzqNuSffTx3z4UrC
                   IoRojOx4p2XyQgQ+G1IAchq0vbCZqpPr8PbAYjADeTWr1+xnms2KjuHxejvL
                   w9+r1jlX7IdVdreVZ0hY2KeH6PT1RqeVyKhjh6iY+PjXtGnJlzklp/AJWhdI
                   aGqZqtqJSke5KsqZGso069nqdmu7OJrLi2u0IntaKelae7j34Qhc1MgHGdmb
                   RGscnTztm3w5OczNKp1NvVwMbuI9iWzdRr6ojN0c7C3uPPz1fnh/fB7J3t5/
                   TRK9G8xipQOoqhqsewMFNYQFkU0BADtwhopp'
    ),
    'star' => array(
        'type' => 'gif', 'width' => '58', 'height' => '78',
        'code' => 'eJwBHQHi/kdJRjg5YToATgCAAAD///8AAAAh+QQAAAAAACwAAAAAOgBOAEAC
                   9ISPqcvtD6OcNIWLb90wB+R9nBGWpuicKpaWoxW+ZDZ6MrjSQK7f/g8MCodE
                   FrGmOi6SS9PLpdxBKTZO7FfFTbWa26nCjIrH5LL5jI5e000nmytao7MH+Yb3
                   beDddbt6C+PnJfjABwaIZHTX40O31KIoQ7eHIhVplQOZ9+SIyfgGGio6Slpq
                   eoqaKtQpSvhmGBoGGsNqtlY7Zoer5Od6SFkJl8kA7Fvcgwe0p4BY1DyzK+kr
                   3IU13RbdcV2YTbwd0Y0dPHg5EQ7++VtNvi7sXe55OdwHv2h0HJduv8LMw/7c
                   b1O8eui+6WlHTpXChQwbOnzIoQAAO1FZg8w='
    ),
    'square' => array(
        'type' => 'gif', 'width' => '58', 'height' => '78',
        'code' => 'eJwB/AAD/0dJRjg5YToATgCAAAD///8AAAAh+QQAAAAAACwAAAAAOgBOAEAC
                   04SPqcvtD6OUodqLs95cqz6FAJiQYmQe6emsI8eicNnV9o19+M5n8Q8MCodE
                   Vu/Y022KtGXTw1TNEC6iqzq8Ire2qPcLDovHZDL3PJWi1xYle+32fbVOLx1q
                   Txuwwrs8X6eGF+WXM6f3EshU+LYV1+hYJjlJWWl5iZmpuckpAgn39In0KMpD
                   WopzitoVagg4uIdohcgXxNh2qJgIW3RbAeYbAEwrm0WsO6tbCxQ8rFzcd8yb
                   zLv805xbDW0rvbqj6t0dzko1/t1qvt25zt7u/g4/VgAAO6H/de0='
    ),
    'cross' => array(
        'type' => 'gif', 'width' => '58', 'height' => '78',
        'code' => 'eJwBzwAw/0dJRjg5YToATgCAAAD///8AAAAh+QQAAAAAACwAAAAAOgBOAEAC
                   poSPqcvtD6OcFIWLc90x+8CFzaeJComm6vqZierGACybdI3n+s731e2DAGOs
                   opG1OCqXGNwwOEpBp9Sq9YrN7p5ZLtZ7BVvFVfKPiS4m02xpzTyFQ+VBus+u
                   zev3/L7/DxgoOLjltofHg1iI0qeo45gD6WSoJ/lGSdSm6bG26dnpqQkayjZK
                   ijbJyGcpw5qpeoip5epCayPbhfulG8ZL+AscLDy8UQAAO9XiZPU='
    ),
    'circle' => array(
        'type' => 'gif', 'width' => '58', 'height' => '78',
        'code' => 'eJwBEAHv/kdJRjg5YToATgCAAAD///8AAAAh+QQAAAAAACwAAAAAOgBOAEAC
                   54SPqcvtD6OcL9iLs96BJu1NWwOG5pEp6ckCK1K2IhaNsmHfMMfp/g8M+njC
                   XezUq9GKqpfRwqwsUdNo80JyCo8zXmfhhVrH5LL5jE4jw94tUfIO5XRzh7bI
                   fX7Nd1eV/+eHpabVR3ZnyJSHkwjUSBV4U6e0SFkpx5aptsnZ6fkJGio6SkqY
                   OWh1yha0ChYmOQmX5BFrUpsVKXOrt4f3eOmYK4h6mPvIiigclUx8Vqi8/Hfs
                   2zztVg1NLcab1mc9JPyt2yi+lg3cssvbC1s+nC3lvt5sN9uu+qqNv41mX/oP
                   MKDAgWQKAAA7ELSBbg=='
    ),
    'dot' => array(
        'type' => 'gif', 'width' => '1', 'height' => '1',
        'code' => 'eJxz93SzsExkZGBkaGAAgf///yv+ZAEzdUAESIaBicmFkcEaAL+eBvg='
    )
);

/**
 * Send image to the browser
 */
if (isset($_GET['i'])) {
    $i = $_GET['i'];
    if (!isset($imgs[$i])) {
        $i = 'dot';
    }
    header("Content-type: image/{$imgs[$i]['type']}");
    echo gzuncompress(base64_decode(str_replace(' ','',$imgs[$i]['code'])));
    exit;
}

/**
 * Session and variables
 */
session_start();
$cards = array('waves', 'star', 'square', 'cross', 'circle');
$match = null;

/**
 * Start the game or check the answer
 */
if (isset($_GET['e']) && isset($_SESSION['chosen'])) {
    if (isset($_GET['t']) && isset($_SESSION['token'])
        && $_GET['t'] == $_SESSION['token']) {
        if (strtolower($_GET['e']) == $_SESSION['chosen']) {
            $match = 1;
            $_SESSION['matches']++;
        } else {
            $match = 0;
            $_SESSION['misses']++;
        }
        $_SESSION['tries']++;
    }
} else {
    $_SESSION['tries']   = 0;
    $_SESSION['matches'] = 0;
    $_SESSION['misses']  = 0;
}

/**
 * Token to allow it to refresh the page without mess the score
 */
$_SESSION['token'] = sha1(microtime(true));

/**
 * Shuffle the deck of cards
 */
shuffle($cards);

/**
 * Pick a random card
 */
$_SESSION['chosen'] = $cards[array_rand($cards)];

/**
 * HTML - Page Header
 */
echo "<html><head><style>";
echo ".b{color:#00F}.r{color:#F00}body{background-color:#FFF}";
echo ".c{cursor:pointer;border:1px solid #ccc;padding: 5px;}";
echo "</style></head><body><pre>\n";
echo "<span class=\"b\">",
     "Predict by clicking on one of the 5 cards:",
     "</span>\n\n";

/**
 * Display the cards
 */
foreach($cards as $c) {
    echo "<img alt=\"" . ucfirst($c) . "\" src=\"?i={$c}\" ";
    echo "width=\"{$imgs[$c]['width']}\" height=\"{$imgs[$c]['height']}\" ";
    echo "onClick=\"location.href='?e={$c}&t={$_SESSION['token']}';\" ";
    echo "class=\"c\" /> ";
}
echo "\n\n";

/**
 * Display the answer
 */
if ($match !== null) {
    echo $match == 1 ?
        '<span class="b">Correct!</span>' :
        '<span class="r">Not Correct!</span>';
    echo "\n\n";
}

/**
 * Display the score
 */
printf("Tries   : %02d (<a href=\"?\">Restart</a>)\n\n",
    $_SESSION['tries']);
printf("Matches : %02d (%.2f%%)\n\n", $_SESSION['matches'],
    $_SESSION['tries'] > 0 ?
    $_SESSION['matches'] / $_SESSION['tries'] * 100 : 0);
printf("Misses  : %02d (%.2f%%)\n\n", $_SESSION['misses'],
    $_SESSION['tries'] > 0 ?
    $_SESSION['misses'] / $_SESSION['tries'] * 100 : 0);

/**
 * HTML - Page Footer
 */
echo "* Select this line for a hint. <span style=\"color:#FFF\">" . ucfirst($_SESSION['chosen']) . "</span>\n";
echo "</pre></body></html>";
