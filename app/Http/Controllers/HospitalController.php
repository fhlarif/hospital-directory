<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Resources\HospitalResource;
use App\Http\Resources\HospitalCollection;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('modules.hospitals.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function apiIndex(Request $request): HospitalCollection
    {
        $type = $request->type ?? 'name';
        $search = $request->search ?? '';

        $query = Institution::orderBy('id', 'DESC');
        if ($search !== '') {
            $query = Institution::where($type, 'like', '%' . strtolower($search) . '%')->orderBy('id', 'DESC');
        }

        return new HospitalCollection($query->paginate(5));
    }

    /**
     * Display the specified resource.
     */
    public function apiShow(string $id): HospitalResource
    {
        return new HospitalResource(Institution::findOrFail($id));
    }
}
