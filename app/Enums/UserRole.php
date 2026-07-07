<?php

namespace App\Enums;

enum UserRole: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN_DESA = 'admin_desa';
    case KEPALA_DESA = 'kepala_desa';
    case SEKRETARIS = 'sekretaris';
    case OPERATOR = 'operator';
    case RT = 'rt';
    case RW = 'rw';
    case PETANI = 'petani';
    case NELAYAN = 'nelayan';
    case UMKM = 'umkm';
    case WARGA = 'warga';
}
