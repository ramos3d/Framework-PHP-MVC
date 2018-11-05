<?php
/**
 *
 */
 namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
class Teste extends Eloquent
{

    protected $table = 'users';
    protected $fillable = ['username', 'email'];
}
