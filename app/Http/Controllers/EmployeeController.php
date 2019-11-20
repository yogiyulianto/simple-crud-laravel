<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees=Employee::all();
        return view('index',compact('employees'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        function generateBarcodeNumber() {
            $number = mt_rand(1000000000, 9999999999); // better than rand()

            // otherwise, it's valid and can be used
            return $number;
        }


        $employee = new Employee();
        $employee->id = generateBarcodeNumber();
        $employee->name = $request->get('name');
        $employee->email = $request->get('email');
        $employee->born_city = $request->get('born_city');
        $employee->born_date = $request->get('born_date');
        $employee->gender = $request->get('gender');
        $employee->address = $request->get('address');
        $employee->phone_number = $request->get('phone_number');
        $employee->password = $request->get('password');
        $employee->save();

        return redirect('employee')->with('success', 'Selamat data employee berhasil disimpan');
        // return redirect()->route('employee.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Employee::where('id', $id)->update($request->all());
        return redirect('employee');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
