<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class TodoController extends Controller
{
    public function index()
    {
        $todoDone = Todo::all()->where('done', 'done');
        $todoNo = Todo::all()->where('done', 'no');
        return view('index', [
            'todosDone' => $todoDone,
            'todosNo' => $todoNo
        ]);
    }

    public function createView()
    {
        return view('create-todo');
    }

    public function store()
    {
        try {
            $this->validate(request(), [
                'title' => ['required'],
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo = new Todo();
        $todo->title = $data['title'];
        $todo->save();

        session()->flash('success', 'Задача успешно создана!');

        return redirect('/');
    }

    public function detail(Todo $todo)
    {
        return view('detail')->with('todos', $todo);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Задача успешно удалена!');
        return redirect('/');
    }

    public function done($id){
        $todo = Todo::findOrFail($id);
        if(!is_null($todo)){
            $todo->update(['done'=>'done']);
            session()->flash('success', 'Задача перемещена в выполенно');
            return redirect('/');
        }
    }

    public function updateView(Todo $todo){
        return view('update')->with('todos', $todo);
    }

    public function update(Todo $todo){
        try {
            $this->validate(request(), [
                'title' => ['required'],
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo->title = $data['title'];
        $todo->save();

        session()->flash('success', 'Задача успешно Обновлена!');

        return redirect('/');
    }
}


