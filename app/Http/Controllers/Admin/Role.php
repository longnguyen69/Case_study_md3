<?php


namespace App\Http\Controllers\Admin;


interface Role
{
    const ADMIN = 1;
    const USER = 0;
    const LOCKED = -1;
}
