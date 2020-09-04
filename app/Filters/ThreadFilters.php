<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ThreadFilters extends Filters
{
    protected $filters = ['by', 'popularity', 'unanswered'];
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

    protected function unanswered()
    {
        return $this->builder->where('replies_count', 0);
    }
}