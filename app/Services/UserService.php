<?php

namespace App\Services;

use App\Models\Area;
use Illuminate\Support\Facades\DB;

class UserService
{
    /**
     * Get users of the specified area.
     *
     * @param  int  $id
     * @return \App\Models\User
     */
    public function get_users_by_area($id)
    {
        $area = Area::find($id);
        return $area->users()->get();
    }
}
