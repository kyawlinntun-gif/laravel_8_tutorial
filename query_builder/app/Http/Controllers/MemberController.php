<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function dbOperation()
    {
        // get the members
        // return DB::select('select * from members');

        // get the member with id
        // return DB::select('select * from members where id = ? and name = ?', [5, 'Bruce Gibson']);

        // get the members
        // return DB::table('members')->get();

        // get the member with id
        // return (array)DB::table('members')->find(5);

        // get the member with id
        // return DB::table('members')->where('id', 5)->get();

        // get the count list
        // return DB::table('members')->count();

        // Insert the data
        // DB::table('members')->insertGetId([
        //     'name' => 'Aung Aung',
        //     'email' => 'Yangon',
        //     'address' => 'Bahan',
        //     'created_at' => DB::raw('now()'),
        //     'updated_at' => DB::raw('now()')
        // ]);

        // Updated the data
        // DB::table('members')->where('id', 5)->update(['name' => 'Tun Aung', 'address' => 'Sawmahar Street, Bahan', 'updated_at' => DB::raw('now()')]);

        // Updated the data with where exists clause
        // if(DB::table('members')->where('id', 1)->doesntExist())
        // {
        //     return 'Id was not found!';
        // }
        // DB::table('members')->where('id', 5)->update(['name' => 'Bo Aung', 'address' => 'Sawmahar Street, Bahan, Yangon', 'updated_at' => DB::raw('now()')]);

        // Deleted the data
        return DB::table('members')->where('id', 5)->delete();

    }

    public function aggregate()
    {
        // Sum
        // return DB::table('members')->sum('id');

        // Max
        // return DB::table('members')->max('id');

        // Min
        // return DB::table('members')->min('id');

        // Avg
        // return DB::table('members')->avg('id');

        // You can also use above

        // Sum use two columns //not work
        // return DB::table('members')->sum('id','created_at');
    }

    public function join()
    {
        // inner join
        // return DB::table('companies')
        //             ->join('employee', 'companies.id', '=', 'employee.companies_id')
        //             // ->select('companies.c_name', 'employee.e_name', 'employee.email')
        //             ->get();

        // left join
        // return DB::table('companies')
        //             ->leftJoin('employee', 'companies.id', '=', 'employee.companies_id')
        //             ->get();

        // right join
        return DB::table('companies')
                    ->rightJoin('employee', 'companies.id', '=', 'employee.companies_id')
                    ->get();
    }
}
