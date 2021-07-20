<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use App\Mail\SummaryReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index', [
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validata =  $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show($id)
    // {
    //     $report = ExpenseReport::findOrFail($id);
    //     return view('expenseReport.show',[
    //         'report' => $report
    //     ]);
    // }

    public function show(ExpenseReport $expenseReport)
    {
        // $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.show', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->title = $request->get('title');
        $report->save();

        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('Confirm'.$id);
        $report = ExpenseReport::findOrFail($id);
        $report->delete();

        return redirect('/expense_reports');
    }

    public function confirmSendEmail(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmSendEmail', [
            'report' => $report,
            // 'sent' => $request->get('sent')
        ]);
    }

    public function sendEmail(Request $request, $id) {

        $validaData = $request->validate([
            'email' => 'required'
        ]);

        $report = ExpenseReport::find($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));
        // return $report;
        return redirect('/expense_reports/' . $id); // .'?sent=true'
    }
}
