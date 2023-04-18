<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function __construct(){

    }
    public function index(){

        // $results = DB::table('contacts')
        //                 ->select('contacts.id', 'contacts.email', DB::raw('GROUP_CONCAT(phones.number SEPARATOR ", ") AS phone_numbers'),DB::raw('GROUP_CONCAT(social_media.icon SEPARATOR ", ") AS icon'),DB::raw('GROUP_CONCAT(social_media.link SEPARATOR ", ") AS link'))
        //                 ->join('phones', 'contacts.id', '=', 'phones.contact_id')
        //                 ->join(DB::raw('(SELECT contact_id, GROUP_CONCAT(icon SEPARATOR ", ") AS icon, GROUP_CONCAT(link SEPARATOR ", ") AS link FROM social_media GROUP BY contact_id) AS social_media'), 'contacts.id', '=', 'social_media.contact_id')
        //                 ->groupBy('contacts.id', 'contacts.email')
        //                 ->get();
        $results = Contact::all();
        return Response::json($results);
    }
    public function update(){
        Contact::where('id',1)->update(['first_name'=>'mahmoud yousry']);
        $results = Contact::all();
        return Response::json($results);
    }

}
