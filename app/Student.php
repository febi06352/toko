<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Student
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Student newModelQuery()
 * @method static Builder|Student newQuery()
 * @method static Builder|Student query()
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereId($value)
 * @method static Builder|Student whereName($value)
 * @method static Builder|Student wherePassword($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @method static Builder|Student whereUsername($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    //
}
