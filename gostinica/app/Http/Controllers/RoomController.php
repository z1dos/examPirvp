<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all()->where('free', 'Да');
        $roomsNf = Rooms::all()->where('free', 'Нет');
        return view('index', [
            'rooms' => $rooms,
            'roomsNf' => $roomsNf
        ]);
    }

    public function detail($id)
    {
        $room = Rooms::find($id);
        return view('detail', [
            'room' => $room
        ]);
    }

    public function update($id)
    {
        try {
            $this->validate(request(), [
                'surname' => 'required|alpha',
                'name' => 'required|alpha',
                'patronymic' => 'required|alpha',
                'arrival_date' => 'required|date',
                'dot_congress' => 'required|date',
            ]);
        } catch (ValidationException $e) {
        }
        $data = request()->all();

        $rooms = Rooms::find($id);
        $rooms->surname = $data['surname'];
        $rooms->name = $data['name'];
        $rooms->patronymic = $data['patronymic'];
        $rooms->arrival_date = $data['arrival_date'];
        $rooms->dot_congress = $data['dot_congress'];
        $rooms->update(['free' => 'Нет']);
        $rooms->save();

        return redirect('/');
    }

    public function storeView($id)
    {
        $room = Rooms::find($id);
        return view('storeView', [
            'room' => $room
        ]);
    }

    public function updateRoom($id)
    {
        $room = Rooms::find($id);
        if(!is_null($room)){
            $room->update([
                'free' => 'Да',
                'surname'=> null,
                'name'=> null,
                'patronymic'=> null,
                'arrival_date'=> null,
                'dot_congress'=> null,
            ]);
        }
        return redirect('/');
    }
}
