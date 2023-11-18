<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LaundryController extends Controller
{
  public function index(): Response
  {
    $laundry = Laundry::with('user')->paginate(10);
    // return $laundry;

    return Inertia::render('Laundry/All', [
      'laundries' => $laundry
    ]);
  }

  public function show(Laundry $laundry): Response
  {
    $laundry = $laundry->load('user');
    // return $laundry;

    return Inertia::render('Laundry/Show', [
      'laundry' => $laundry
    ]);
  }

  public function edit(Laundry $laundry): Response
  {
    return Inertia::render('Laundry/Edit', [
      'laundry' => $laundry
    ]);
  }

  public function update(Laundry $laundry, Request $request)
  {
    $laundry->update([
      'status' => $request->status
    ]);
  }
}
