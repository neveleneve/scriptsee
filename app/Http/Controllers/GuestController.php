<?php

namespace App\Http\Controllers;

use App\Bid_Placement;
use App\Brand;
use App\Item_Data;
use App\Item_Details;
use App\Type;
use App\User_Data_Buyer;
use App\User_Data_Seller;
use App\User_Login;
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
        $mostbrands = Brand::OrderBy('views')->paginate(6);
        return view('page_guest.dashboard', [
            'daftartipemobil' => $this->tipemobil(),
            'daftarbrandmobil' => $this->brandmobil(),
            'latestitem' => $this->latestadd(),
            'seller' => $dataseller,
            'detail' => $details,
            'mostbrand' => $mostbrands
        ]);
    }

    public function search()
    {
        # code...
    }

    public function login()
    {
        return view('login');
    }

    public function loggin_in(Request $data)
    {
        $login = User_Login::where('username', $data->username)->count();
        if ($login == 0) {
            # code...
        }
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
        // -- Bid Interval
        $bid = $detailsitem[0]['bid'];
        // -- Latest Bid
        $latestbid = Bid_Placement::where('code_item', $code)->orderBy('created_at')->paginate(3);
        // -- Highest Bid
        $highestbid = Bid_Placement::where('code_item', $code)->orderByDesc('bid_price')->paginate(3);

        $dataall = [
            'nama' => $itemdata[0]['nama'],
            'views' => $itemdata[0]['views'],
            'tahun' => $itemdata[0]['tahun'],
            'gambar' => $image,
            'brand' => $databranditem['brand'],
            'type' => $datatypeitem['type'],
            'price_limit' => $datalimitprice,
            'bid' => $bid,
            'seller' => $dataseller['username'],
            'time_limit' => $datalimittime,
            'sell_type' => $dataselltype,
            'desc' => $datadescription,
            'latestbid' => $latestbid,
            'highestbid' => $highestbid,
        ];
        // dd($dataall);
        return view('page_guest.item_view', [
            'data' => $dataall,
        ]);
    }
}
