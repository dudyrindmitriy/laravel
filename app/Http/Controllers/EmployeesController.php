<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function main()
    {
        $employees = DB::table('employees')->get();
        return view('employees.main', ['employees' => $employees]);
    }
    public function method2()
    {
        $employees = DB::table('employees')->orderBy('salary')->get();
        return view('employees.table', ['employees' => $employees,'previous'=>'/employees','current'=>'2','next'=>'/employees/3']);
    }
    public function method3()
    {
        $employees = DB::table('employees')->where('salary',400)->orWhere('id','>',4)->get();
        return view('employees.table', ['employees' => $employees,'previous'=>'/employees/2','current'=>'3','next'=>'/employees/4']);
    }
    public function method4()
    {
        $employee = DB::table('employees')->find(3);
        return view('employees.employee', ['employee' => $employee,'previous'=>'/employees/3','current'=>'4','next'=>'/employees/5']);
    }
    public function method5()
    {
        $name = DB::table('employees')->where('id',5)->value('name');
        return view('employees.value', ['value' => $name,'previous'=>'/employees/4','current'=>'5','next'=>'/employees/6']);
    }
    public function method6()
    {
        $employees = DB::table('employees')->where('salary','>',400)->where('salary','<',800)->orWhere('position','программист')->get();
        return view('employees.table', ['employees' => $employees,'previous'=>'/employees/5','current'=>'6','next'=>'/employees/7']);
    }
    public function method7()
    {
        $salary = (DB::table('employees')->pluck('salary'))->sum();
        return view('employees.value', ['value' => $salary,'previous'=>'/employees/6','current'=>'7','next'=>'/employees/8']);
    }
    public function method8()
    {
        $positions = [
            'программист'=>(DB::table('employees')->where('position','программист')->pluck('salary'))->sum(),
            'верстальщик'=>(DB::table('employees')->where('position','верстальщик')->pluck('salary'))->sum(),
            'дизайнер'=>(DB::table('employees')->where('position','дизайнер')->pluck('salary'))->sum(),
        ];
        return view('employees.array', ['array' => $positions,'previous'=>'/employees/7','current'=>'8','next'=>'/employees/9']);
    }
    public function method9()
    {
        $employees = DB::table('employees')->whereDay('birthday',25)->get();
        return view('employees.table', ['employees' => $employees,'previous'=>'/employees/8','current'=>'9','next'=>'/employees/10']);
    }

    public function method10()
    {
        $employees = DB::table('employees')->whereYear('birthday',1990)->get();
        return view('employees.table', ['employees' => $employees,'previous'=>'/employees/9','current'=>'10','next'=>'/employees']);
    }
}
