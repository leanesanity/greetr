<?php

namespace Solisleanesanity\Greetr;

use Illuminate\Routing\Controller;

class GreetrController extends Controller
{
    public function index(string $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
