<?php

namespace App\Http\Controllers;

use App\Models\Labaratoria;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class LabController extends Controller
{
    public function index()
    {
        $people = Labaratoria::all();
        return view('index', [
            'peoples' => $people,
        ]);
    }

    public function createView()
    {
        return view('create');
    }

    public function store()
    {
        try {
            $this->validate(request(), [
                'surname'=>'required',
                'name'=>'required',
                'lastname'=>'required',
                'sex'=>'required',
                'age'=>'required',
                'sem_pol'=>'required',
                'deti_est'=>'required',
                'post'=>'required',
                'academic_degree'=>'required',
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $laba = new Labaratoria();

        $laba->surname = $data['surname'];
        $laba->name = $data['name'];
        $laba->lastname = $data['lastname'];
        $laba->sex = $data['sex'];
        $laba->age = $data['age'];
        $laba->sem_pol = $data['sem_pol'];
        $laba->deti_est = $data['deti_est'];
        $laba->post = $data['post'];
        $laba->academic_degree = $data['academic_degree'];
        $laba->save();

        return redirect('/');
    }

    public function detail($id)
    {
        $people = Labaratoria::find($id);
        return view('detail', [
            'peoples' => $people
        ]);
    }

    public function delete($id)
    {
        $people = Labaratoria::find($id);
        $people->delete();
        return redirect('/');
    }
}
