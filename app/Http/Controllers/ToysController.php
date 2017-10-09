<?php

namespace App\Http\Controllers;

use App\Toy;
use Illuminate\Http\Request;


class ToysController extends Controller
{
    public function index() {
        $toys = Toy::getAll();

        return view('toys.index', ['toys' => $toys]);
    }

    public function show($id) {
        $toy = Toy::find($id);

        return view('toys.show', ['toy' => $toy]);
    }

    public function delete($id) {
        Toy::find($id)->remove();

        return redirect('toys');
    }

    public function create() {
        return view('toys.create');
    }

    public function insert(Request $request) {
        $this->validate($request, [
            'title' => 'required|min:3',
        ]);
        $toy = Toy::add(
            $request->get('title'),
            $request->get('content')
        );
        $toy->uploadImage(
            $request->file('image')
        );

        return redirect('toys');
    }

    public function edit($id) {
        $toy = Toy::find($id);

        return view('toys.edit', ['toy' => $toy]);
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'title' => 'required|min:3'
        ]);
        $toy = Toy::find($id);
        $toy->edit(
            $request->get('title'),
            $request->get('content')
        );
        $toy->uploadImage(
            $request->file('image')
        );

        return redirect('toys');
    }

}
