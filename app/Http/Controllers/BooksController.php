<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BooksController extends Controller
{

    /**
     * INSTRUCTIONS
     * 
     * - Create the Books Model with Migrations, Factory and Seeder
     * - Table books columns: id,title,category,author,realease_date,publish_date
     * - php artisan db:seed should populate the User and Books tables
     * - The index page should show a datatable using ajax loading using JQUERY
     * - The datatable should get the info from BooksController@api
     * - The dates should be shown in the format d/M/y
     * - Extra points for bootstrap 4 styling
     * 
     */


    /**
     * Show index page
     */
    public function index()
    {
        //$books = Books::select('id', 'title', 'category', 'author', 'realease_date', 'publish_date')->get();

        // only return de view
        return view('home');
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        // query to Books table through the model
        $books = Books::select('id', 'title', 'category', 'author', 'realease_date', 'publish_date')->get();

        // to Json install package of oracle data table
        return  datatables()->collection(Books::all())->toJson();
    }
}
