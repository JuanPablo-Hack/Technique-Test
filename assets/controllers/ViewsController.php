<?php
function getViewController($view)
{
    switch ($view) {
        case '1':
            return 'Alumns';
            break;
        case '2':
            return 'Teachers';
            break;
        case '3':
            return 'Classes';
            break;
        case '4':
            return  'Grades';
            break;
        default:
            return 'Dashboard';
            break;
    }
}
