<?php
enum Role
{
    case ADMIN;
    case USER;
    case VIEWER;

    public static function getString(Role $role)
    {
        if ($role == Role::ADMIN) {
            return 'ADMIN';
        } elseif ($role == Role::USER) {
            return 'USER';
        } elseif ($role == Role::VIEWER) {
            return 'VIEWER';
        }
    }
}
