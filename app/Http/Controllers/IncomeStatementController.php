<?php

namespace App\Http\Controllers;

use App\Models\IncomeStatement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DateTime;
use App\Http\Resources\IncomeStatementResource;

class IncomeStatementController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['show',]]);
    }

    function validateDate($date, $format = 'Y-m-d') {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ticker = $request->ticker;
        $cik = $request->cik;
        $startDate = $request->start_date;
        $adsh = $request->adsh;
        $fileDate = $request->file_date;
        $data = IncomeStatement::with("attribute");
        if ($ticker) {
            $data = $data->where('ticker', '=', $ticker);
        }
        if (strlen($cik) == 10) {
            $data = $data->where('cik', '=', $cik);
        }
        if ($this->validateDate($startDate)) {
            $data = $data->where('period_ending', '>', $startDate);
        }
        if ($adsh) {
            $data = $data->where('access_number', '=', $adsh);
        }
        if ($this->validateDate($fileDate)) {
            $data = $data->where('file_date', '=', $fileDate);
        }

        return response(['data' => IncomeStatementResource::collection($data->get())], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeStatement  $incomeStatement
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeStatement $incomeStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeStatement  $incomeStatement
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeStatement $incomeStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncomeStatement  $incomeStatement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncomeStatement $incomeStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeStatement  $incomeStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeStatement $incomeStatement)
    {
        //
    }
}
