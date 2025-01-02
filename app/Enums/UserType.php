<?php

namespace App\Enums;

enum UserType: string
{
  case EMPLOYEE = 'employee';
  case ADMIN = 'admin';
  case DEFAULT = 'default';
}
