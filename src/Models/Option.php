<?php

namespace Paplow\eTest\Models;

use Illuminate\Database\Eloquent\Model;
use Paplow\eTest\Models\Events\OptionSaving;

class Option extends Model
{
    /**
     * The attributes that aren't mass assignable.
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'e_options';

    protected $dispatchesEvents = [
        'saving' => OptionSaving::class
    ];

    /**
     * Relationship with Question Model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    /**
     * Relationship with Answer Model
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer()
    {
        return $this->hasOne(Answer::class, 'option_id');
    }
}
