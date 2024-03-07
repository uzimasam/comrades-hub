<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view("welcome");
    }

    public function createSeller()
    {
        return view("seller.create");
    }

    public function storeSeller(Request $request)
    {
        $request->validate([
            'store_name' => 'required|string|max:255',
            'store_description' => 'required|string',
            'store_address' => 'required|string',
            'store_phone' => 'required|string',
            'store_email' => 'required|string|email',
            'store_logo' => 'required|image',
            'store_banner' => 'required|image',
        ]);

        // Create a unique slug for the store
        $slug = Str::slug($request->store_name, '-');
        while (Seller::where('store_slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(5);
        }
        $seller = new Seller();
        $seller->user_id = auth()->user()->id;
        $seller->store_name = $request->store_name;
        $seller->store_description = $request->store_description;
        $seller->store_address = $request->store_address;
        $seller->store_phone = $request->store_phone;
        $seller->store_email = $request->store_email;
        $seller->store_status = 'active';
        $seller->store_slug = $slug;

        $logo = $request->file('store_logo');
        $banner = $request->file('store_banner');

        $logoName = $slug . $logo->getClientOriginalExtension();
        $bannerName = $slug . $banner->getClientOriginalExtension();

        $logo->move(public_path('web/images/sellers/logo'), $logoName);
        $banner->move(public_path('web/images/sellers/banner'), $bannerName);

        $seller->store_logo = $logoName;
        $seller->store_banner = $bannerName;

        $seller->save();

        toastr()->success('Your store has been created successfully');
        return redirect()->route('seller.dashboard');
    }
}
