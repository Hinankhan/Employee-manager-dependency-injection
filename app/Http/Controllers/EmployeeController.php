<?php

namespace App\Http\Controllers;
use Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Services\EmployeeService;

class EmployeeController extends Controller
{
    //Injecting service class into the Employee Controller

    private $employeeService;

    public function __construct(EmployeeService  $service)
    {
        $this->middleware('auth');
        $this->employeeService = $service;
    }

    // Calling the service methods from EmployeeService in EmployeeController

    public function getEmployees(Employee $employee)
    {

        return $this->employeeService->getEmployees($employee);
    }

    public function create()
    {
        return $this->employeeService->create();
    }

    public function CreateEmployee(Request $request){
       return $this->employeeService->CreateEmployee($request);
    }

    public function getEmployee(Employee $employee,$id){
       return $this->employeeService->getEmployee($employee,$id);
    }
    public function updateEmployee(Request $request, Employee $employee){
        return $this->employeeService->updateEmployee($request,$employee);
    }

    public function deleteEmployee(Employee $employee,$id){
      return $this->employeeService->deleteEmployee($employee,$id);
    }

 }
