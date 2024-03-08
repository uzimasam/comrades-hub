<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Str;

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

        $logoName = $slug .'.'.$logo->getClientOriginalExtension();
        $bannerName = $slug .'.'. $banner->getClientOriginalExtension();

        $logo->move(public_path('web/images/sellers/logo'), $logoName);
        $banner->move(public_path('web/images/sellers/banner'), $bannerName);

        $seller->store_logo = $logoName;
        $seller->store_banner = $bannerName;

        $seller->save();

        toastr()->success('Your store has been created successfully');
        return redirect()->route('seller.dashboard');
    }

    public function sellerDashboard()
    {
        $seller = Seller::where('user_id', auth()->user()->id)->first();
        return view('seller.dashboard', compact('seller'));
    }

    public function sellers()
    {
        $sellers = Seller::where('store_status', 'active')->get();
        return view('sellers', compact('sellers'));
    }

    public function chatSeller($slug)
    {
        $seller = Seller::where('store_slug', $slug)->first();
        if(!$seller) {
            toastr()->error('The seller does not exist');
            return redirect()->route('sellers');
        }
        // phone number should be in the format 2348012345678
        if (Str::startsWith($seller->store_phone, '0')) {
            $seller->store_phone = '254' . substr($seller->store_phone, 1);
        }
        $whatsapp = 'https://wa.me/' . $seller->store_phone . '?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20store%20titled%20' . $seller->store_name . '.%20The%20store%20link%20is%20' . route('seller', $seller->store_slug);
        return redirect($whatsapp);
    }

    public function followSeller($slug)
    {
        $seller = Seller::where('store_slug', $slug)->first();
        if(!$seller) {
            toastr()->error('The seller does not exist');
            return redirect()->route('sellers');
        }
        if ($seller->isFollowedByUser(auth()->user()->id)) {
            toastr()->error('You are already following this seller');
            return redirect()->route('seller', $slug);
        }
        $seller->followers()->create([
            'user_id' => auth()->user()->id
        ]);
        toastr()->success('You are now following ' . $seller->store_name);
        return redirect()->route('seller', $slug);
    }

    public function unfollowSeller($slug)
    {
        $seller = Seller::where('store_slug', $slug)->first();
        if(!$seller) {
            toastr()->error('The seller does not exist');
            return redirect()->route('sellers');
        }
        if (!$seller->isFollowedByUser(auth()->user()->id)) {
            toastr()->error('You are not following this seller');
            return redirect()->route('seller', $slug);
        }
        $seller->followers()->where('user_id', auth()->user()->id)->delete();
        toastr()->success('You have unfollowed ' . $seller->store_name);
        return redirect()->route('seller', $slug);
    }

    public function adminDashboard()
    {
        $users = User::all();
        $sellers = Seller::all();
        return view('admin.dashboard')->with([
            'users' => $users,
            'sellers' => $sellers
        ]);
    }

    public function adminCategories()
    {
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }
}
