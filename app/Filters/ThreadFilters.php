<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ThreadFilters extends Filters
{
    protected $filters = ['by', 'popularity'];
    /**
     * @param $username
     * @return mixed
     */
    public function by($username)
    {
        $user = \App\User::where('name', $username)->firstOrFail();

        return $this->builder->where('user_id', $user->id);
    }

    /**
     * @return mixed
     */
    public function popularity()
    {
        $this->builder->getQuery()->orders = [];

        return $this->builder->orderBy('replies_count', 'desc');
    }
}