<?php
include_once "Classes/Stack.php";

function checkBrackets($string)
{
    $stack = new Stack();
    for ($i = 0; $i < strlen($string); $i++) {
        switch ($string[$i]) {
            case '(':
                $stack->push('parenthesis');
                break;
            case ')':
                if ($stack->pop() !== 'parenthesis') {
                    return false;
                }
                break;
            case '[':
                $stack->push('square brackets');
                break;
            case ']':
                if ($stack->pop() !== 'square brackets') {
                    return false;
                }
                break;
            case '{':
                $stack->push('braces');
                break;
            case '}':
                if ($stack->pop() !== 'braces') {
                    return false;
                }
                break;
            default:
                break;
        }
    }
    return $stack->isEmpty();
}

$str1 = '8 * 2 / ( 9 - 2)';
$str2 = '7 - 3 / 5 * ( 6 +4 ))';
$str3 = '({ (4 - 6) * 7)';

echo "<pre>";
var_dump(checkBrackets($str1));
var_dump(checkBrackets($str2));
var_dump(checkBrackets($str3));