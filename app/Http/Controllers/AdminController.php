<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use DataTables;

class AdminController extends Controller
{
    public function index()
    {
        $count_pelajar = UserDetail::select('id')
            ->where('category', 'Pelajar')
            ->count();
        $count_umum = UserDetail::select('id')
            ->where('category', 'Umum')
            ->count();
        $count_m = UserDetail::select('id')
            ->where('gender', 'Laki-laki')
            ->count();
        $count_f = UserDetail::select('id')
            ->where('gender', 'Perempuan')
            ->count();
        return view('admin.index', compact(
            'count_pelajar',
            'count_umum',
            'count_m',
            'count_f',
        ));
    }

    public function participant()
    {
        return view('admin.participant');
    }

    public function dataTable()
    {
        $fetch = User::where('role', 'Participant')
            ->join('user_details as ud', 'ud.user_id', '=', 'users.id')
            ->join('invoices as i', 'i.user_id', '=', 'users.id')
            ->select('users.*', 'ud.nik', 'ud.category', 'ud.gender', 'ud.re_registration')
            ->where('i.is_paid', 1)
            ->get()
            ->toArray();
        $i = 0;
        $reform = array_map(function ($new) use (&$i) {
            $i++;
            return [
                'no' => $i . '.',
                'id' => $new['id'],
                'nik' => $new['nik'],
                'name' => $new['name'],
                'email' => $new['email'],
                'category' => $new['category'],
                'gender' => $new['gender'],
                're_registration' => $new['re_registration'] == 1 ? "Sudah" : "Belum",
            ];
        }, $fetch);

        $datatables =  DataTables::of($reform)->make(true);

        return $datatables;
    }

    public function update($id)
    {
        $check = UserDetail::where('user_id', $id)
            ->where('re_registration', 0)
            ->first();
        if(!$check){
            return redirect()->back();
        }

        UserDetail::where('user_id', $id)
            ->update([
                're_registration' => 1
            ]);
    }
}
