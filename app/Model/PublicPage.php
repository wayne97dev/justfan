<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PublicPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'short_title',
        'content',
        'page_order',
        'shown_in_footer',
        'show_last_update_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
