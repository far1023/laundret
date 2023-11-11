<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
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
}
