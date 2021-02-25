<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Item_Data;
use App\Item_Details;
use App\Type;
use App\User_Data_Seller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    private function latestadd()
    {
        $latestitem = Item_Data::with('details')->paginate(3);
        return $latestitem;
    }

    private function tipemobil()
    {
        $tipemobil = Type::all()
            ->sortBy('type');
        return $tipemobil;
    }

    private function brandmobil()
    {
        $brandmobil = Brand::all()
            ->sortBy('id')
            ->take(19);
        return $brandmobil;
    }

    public function index()
    {
        $dataseller = User_Data_Seller::get();
        $details = Item_Details::get();
        // dd($this->latestadd());
        return view('page_guest.dashboard', [
            'daftartipemobil' => $this->tipemobil(),
            'daftarbrandmobil' => $this->brandmobil(),
            'latestitem' => $this->latestadd(),
            'seller' => $dataseller,
            'detail' => $details,
        ]);
    }

    public function search()
    {
        # code...
    }

    public function login()
    {
        # code...
    }

    public function user_view()
    {
        # code...
    }

    public function item_view($code)
    {
        // Item Data
        $itemdata = Item_Data::where('code', $code)->get();
        // Gambar Item
        $dataimage = Item_Data::find($itemdata[0]->id)->image;
        $image = [];
        for ($i = 0; $i < count($dataimage); $i++) {
            $image[] .= $dataimage[$i]->image;
        }
        // Item Details
        $detailsitem = Item_Data::find($itemdata[0]->id)->details;
        // -- Brand
        $databranditem = Brand::find($detailsitem[0]->id_brand);
        // -- Type
        $datatypeitem = Type::find($detailsitem[0]->type);
        // -- Limit Price
        $datalimitprice = $detailsitem[0]['limit_price'];
        // -- Seller
        $dataseller = User_Data_Seller::find($detailsitem[0]->id_seller);
        // -- Limit Time
        $datalimittime = $detailsitem[0]['limit_time'];
        // -- Sell Type
        $dataselltype = $detailsitem[0]['sell_type'];
        // -- Description
        $datadescription = $detailsitem[0]['description'];

        
        $dataall = [
            'nama' => $itemdata[0]['nama'],
            'tahun' => $itemdata[0]['tahun'],
            'gambar' => $image,
            'brand' => $databranditem['brand'],
            'type' => $datatypeitem['type'],
            'price_limit' => $datalimitprice,
            'seller' => $dataseller['username'],
            'time_limit' => $datalimittime,
            'sell_type' => $dataselltype,
            'desc' => $datadescription,
        ];
        // dd($dataall);
        return view('page_guest.item_view', [
            'data' => $dataall
        ]);
    }
}
