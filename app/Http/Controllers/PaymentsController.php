<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    // Mostrar listado de pagos
    public function index()
    {
        $payments = Payment::all();
        return view('payments.list', compact('payments'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('payments.create');
    }

    // Guardar nuevo pago
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);

        Payment::create([
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect()->route('payments')
        ->with('alert-success', 'Pago creado correctamente');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payments')
            ->with('alert-error', 'Pago no encontrado');
        }

        return view('payments.edit', compact('payment'));
    }

    // Actualizar pago
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);

        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payments')
            ->with('alert-error', 'Pago no encontrado');
        }

        $payment->update([
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect()->route('payments')
        ->with('alert-success', 'Pago actualizado correctamente');
    }

    // Eliminar pago
    public function destroy($id)
    {
        $payment = Payment::find($id);

        if ($payment) {
            $payment->delete();

            return redirect()->route('payments')
            ->with('alert-success', 'Pago eliminado correctamente');
        }

        return redirect()->route('payments')
        ->with('alert-error', 'Pago no encontrado');
    }
}