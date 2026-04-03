<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RentalController extends Controller
{
    // GET /rentals
    public function index()
    {
        $rentals = Rental::all();
        return response()->json($rentals);
    }

    // GET /rentals/{id}
    public function show($id)
    {
        $rental = Rental::find($id);

        if (!$rental) {
            throw new ModelNotFoundException();
        }

        return response()->json($rental);
    }

    // POST /rentals
    public function store(Request $request)
    {
        $this->validate($request, [
            'vehicle_name' => 'required|string|max:100',
            'customer_name' => 'required|string|max:100',
            'price_per_day' => 'required|numeric|min:1'
        ]);

        $rental = Rental::create($request->all());

        return response()->json($rental, 201);
    }

    // PUT /rentals/{id}
    public function update(Request $request, $id)
    {
        $rental = Rental::find($id);

        if (!$rental) {
            throw new ModelNotFoundException();
        }

        $this->validate($request, [
            'vehicle_name' => 'required|string|max:100',
            'customer_name' => 'required|string|max:100',
            'price_per_day' => 'required|numeric|min:1'
        ]);

        $rental->update($request->all());

        return response()->json($rental);
    }

    // DELETE /rentals/{id}
    public function destroy($id)
    {
        $rental = Rental::find($id);

        if (!$rental) {
            throw new ModelNotFoundException();
        }

        $rental->delete();

        return response()->json([
            'message' => 'Rental deleted successfully'
        ]);
    }
}