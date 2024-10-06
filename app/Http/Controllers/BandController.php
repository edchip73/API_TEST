<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {
        $bands = $this->getBands();
        return response()->json($bands);
    }
    protected function getBands()
    {
        return
        [
            [
                'id'=> 1, 'name'=> 'dream teacher', 'gender'=> 'progressivo'
            ],
            [
                'id'=> 2, 'name'=> 'megadeth', 'gender'=> 'trash metal'
            ],
            [
                'id'=> 3, 'name'=> 'dio', 'gender'=> 'heavy metal'
            ],
            [
                'id'=> 4, 'name'=> 'metallica', 'gender'=> 'trash metal'
            ],
            [
                'id'=> 5, 'name'=> 'acdc', 'gender'=> 'heavy metal'
            ],
            [
                'id'=> 6, 'name'=> 'iron maiden', 'gender'=> 'heavy metal'
            ],

        ];
    }
    public function getById($id)
    {
        $band = null;
        foreach($this->getBands() as $_band)
        {
            if ($_band['id'] == $id)
            $band = $_band;
        }
        return $band ? response()->json($band) : abort(404);
    }
    public function getBandsByGender($gender)
    {
        dd($gender);
        $bands = [];
        foreach($this->getBands() as $_band)
        {
            if ($_band['gender'] == $gender)
                $_bands[] = $_band;
        }
    }

    public function store(Request $request) {

        $validate = $request->validate([
            'id' => 'numeric',
            'name' => 'required|min:3'
        ]);

        return response()->json($request->all());

    }
}
