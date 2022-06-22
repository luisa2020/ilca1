<?php

namespace App\Http\Controllers;

use App\Models\Detallecompra;
use Illuminate\Http\Request;

/**
 * Class DetallecompraController
 * @package App\Http\Controllers
 */
class DetallecompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecompras = Detallecompra::paginate();

        return view('detallecompra.index', compact('detallecompras'))
            ->with('i', (request()->input('page', 1) - 1) * $detallecompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallecompra = new Detallecompra();
        return view('detallecompra.create', compact('detallecompra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallecompra::$rules);

        $detallecompra = Detallecompra::create($request->all());

        return redirect()->route('detallecompras.index')
            ->with('success', 'Detallecompra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($IdDetalleCompra)
    {
        $detallecompra = Detallecompra::find($IdDetalleCompra);

        return view('detallecompra.show', compact('detallecompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($IdDetalleCompra)
    {
        $detallecompra = Detallecompra::find($IdDetalleCompra);

        return view('detallecompra.edit', compact('detallecompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallecompra $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallecompra $detallecompra)
    {
        request()->validate(Detallecompra::$rules);

        $detallecompra->update($request->all());

        return redirect()->route('detallecompras.index')
            ->with('success', 'Detallecompra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($IdDetalleCompra)
    {
        $detallecompra = Detallecompra::find($IdDetalleCompra)->delete();

        return redirect()->route('detallecompras.index')
            ->with('success', 'Detallecompra deleted successfully');
    }
}
