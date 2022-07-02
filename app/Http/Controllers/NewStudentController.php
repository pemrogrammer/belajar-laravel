<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewStudent;

class NewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$new_students = NewStudent::all();

		return view('new-student.index', ['new_students' => $new_students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$new_student = new NewStudent;

		return view('new-student.form', ['new_student' => $new_student]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$new_student = new NewStudent;

		$new_student->name = $request->name;
		$new_student->birth_place = $request->birthPlace;
		$new_student->birth_date = $request->birthDate;
		$new_student->citizenship = $request->citizenship;
		$new_student->religion = $request->religion;
		$new_student->email = $request->email;
		$new_student->phone = $request->phone;
		// $new_student->nik = $request->nik;
		$new_student->id_no = $request->nik;
		$new_student->gender = $request->gender;
		$new_student->mother_name = $request->motherName;
		$new_student->hobbies_json = json_encode($request->hobby);
		$new_student->address = $request->address;
		$new_student->zip = $request->zip;
		$new_student->prov = $request->province;
		$new_student->last_edu = $request->lastEdu;
		$new_student->school_name = $request->schoolName;
		$new_student->avg_score = $request->avgScore;
		$new_student->study_program_1 = $request->prodi1;
		$new_student->study_program_2 = $request->prodi2;

		$new_student->save();

		return redirect()->route('new-students.index');		
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
		$new_student = NewStudent::find($id);
		
		return view('new-student.form', ['new_student' => $new_student]);
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
		$new_student = NewStudent::find($id);

		$new_student->name = $request->name;
		$new_student->birth_place = $request->birthPlace;
		$new_student->birth_date = $request->birthDate;
		$new_student->citizenship = $request->citizenship;
		$new_student->religion = $request->religion;
		$new_student->email = $request->email;
		$new_student->phone = $request->phone;
		// $new_student->nik = $request->nik;
		$new_student->id_no = $request->nik;
		$new_student->gender = $request->gender;
		$new_student->mother_name = $request->motherName;
		$new_student->hobbies_json = json_encode($request->hobby);
		$new_student->address = $request->address;
		$new_student->zip = $request->zip;
		$new_student->prov = $request->province;
		$new_student->last_edu = $request->lastEdu;
		$new_student->school_name = $request->schoolName;
		$new_student->avg_score = $request->avgScore;
		$new_student->study_program_1 = $request->prodi1;
		$new_student->study_program_2 = $request->prodi2;

		$new_student->save();

		return redirect()->route('new-students.index');	
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
