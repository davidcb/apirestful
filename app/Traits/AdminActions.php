<?php

namespace App\Traits;

trait AdminActions
{

    public function before(User $user, $ability)
    {
        if ($user->esAdministrador()) {
            return true;
        }
    }
    
}
