<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\MenuEditRequest;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $vociMenu = Menu::all();
        return view('menu.index', compact('vociMenu'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(MenuRequest $request)
    {
        Menu::create([
            'nome'        => $request->nome,
            'categoria'   => $request->categoria,
            'ingredienti' => $request->ingredienti,
            'prezzo'      => $request->prezzo,
            'img'         => $request->file('img')->store('images', 'public'),
            'user_id'     => Auth::user()->id,
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito la ricetta!');
    }

    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        if ($menu->user_id == Auth::user()->id) {
            return view('menu.edit', compact('menu'));
        }else{

        return redirect()->route('homepage')->with('error', 'Non sei autorizzato!');
        }
    }

    public function update(MenuEditRequest $request, Menu $menu)
    {
        if ($menu->user_id == Auth::user()->id) {
            $menu->update([
                'nome'        => $request->nome,
                'categoria'   => $request->categoria,
                'ingredienti' => $request->ingredienti,
                'prezzo'      => $request->prezzo,
            ]);

            if ($request->hasFile('img')) {
                $menu->update([
                    'img' => $request->file('img')->store('images', 'public'),
                ]);
            }

            return redirect()->route('menu.index')->with('success', 'Piatto aggiornato!');
        }else{

        return redirect()->route('homepage')->with('error', 'Non sei autorizzato!');
        }
    }

    public function destroy(Menu $menu)
    {


        if ($menu->user_id == Auth::user()->id) {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Piatto eliminato!');
        }else{
            return redirect()->route('homepage')->with('error', 'Non sei autorizzato!');
        }
    }
}