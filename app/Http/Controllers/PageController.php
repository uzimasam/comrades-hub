<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Ad;
use App\Models\Item;
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
        $ads = Ad::where('status', 'active')->get();
        $items = Item::where('status', 'active')->get();
        // randomize the ads and items and combine them into one array, but add a type key to differentiate them
        $ads = $ads->shuffle()->map(function ($ad) {
            $ad['type'] = 'ad';
            return $ad;
        });
        $items = $items->shuffle()->map(function ($item) {
            $item['type'] = 'item';
            return $item;
        });
        $all = $ads->concat($items)->shuffle();
        // get all categories with at least one ad or item
        $categories = Category::whereHas('ads', function ($query) {
            $query->where('status', 'active');
        })->orWhereHas('items', function ($query) {
            $query->where('status', 'active');
        })->get();
        return view("welcome")->with([
            'all' => $all,
            'categories' => $categories
        ]);
    }

    public function items()
    {
        $items = Item::where('status', 'active')->get();
        $items = $items->shuffle()->map(function ($item) {
            $item['type'] = 'item';
            return $item;
        });
        $all = $items;
        $categories = Category::whereHas('items', function ($query) {
            $query->where('status', 'active');
        })->get();
        return view('items')->with([
            'all' => $all,
            'categories' => $categories
        ]);
    }

    public function ads()
    {
        $ads = Ad::where('status', 'active')->get();
        $ads = $ads->shuffle()->map(function ($ad) {
            $ad['type'] = 'ad';
            return $ad;
        });
        $all = $ads;
        $categories = Category::whereHas('ads', function ($query) {
            $query->where('status', 'active');
        })->get();
        return view('ads')->with([
            'all' => $all,
            'categories' => $categories
        ]);
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

    public function chatItem($slug)
    {
        $item = Item::where('slug', $slug)->first();
        if(!$item) {
            toastr()->error('The item does not exist');
            return redirect()->route('items');
        }
        $item->views = $item->views + 1;
        $item->save();
        $seller = $item->seller;
        // phone number should be in the format 2348012345678
        if (Str::startsWith($seller->store_phone, '0')) {
            $seller->store_phone = '254' . substr($seller->store_phone, 1);
        }
        $whatsapp = 'https://wa.me/' . $seller->store_phone . '?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20the%20item%20titled%20' . $item->name . '.%20The%20item%20link%20is%20' . route('item', $item->slug);
        return redirect($whatsapp);
    }

    public function chatAd($slug)
    {
        $ad = Ad::where('slug', $slug)->first();
        if(!$ad) {
            toastr()->error('The ad does not exist');
            return redirect()->route('ads');
        }
        $ad->views = $ad->views + 1;
        $ad->save();
        $seller = $ad->seller;
        // phone number should be in the format 2348012345678
        if (Str::startsWith($seller->store_phone, '0')) {
            $seller->store_phone = '254' . substr($seller->store_phone, 1);
        }
        $whatsapp = 'https://wa.me/' . $seller->store_phone . '?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20the%20ad%20titled%20' . $ad->title . '.%20The%20ad%20link%20is%20' . route('ad', $ad->slug);
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
        $ads = Ad::all();
        $items = Item::all();
        return view('admin.dashboard')->with([
            'users' => $users,
            'sellers' => $sellers,
            'ads' => $ads,
            'items' => $items
        ]);
    }

    public function adminCategories()
    {
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'required|string'
        ]);

        $slug = Str::slug($request->name, '-');
        while (Category::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(5);
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->description = $request->description;
        $category->save();

        toastr()->success('Category has been created successfully');
        return redirect()->back();
    }

    public function createAd()
    {
        $seller = Seller::where('user_id', auth()->user()->id)->first();
        $categories = Category::all();
        return view('seller.create-ad', compact('seller', 'categories'));
    }

    public function storeAd(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
            'categories' => 'required|array'
        ]);

        $slug = Str::slug($request->title, '-');
        while (Ad::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(5);
        }

        $ad = new Ad();
        $ad->seller_id = Seller::where('user_id', auth()->user()->id)->first()->id;
        $ad->title = $request->title;
        $ad->slug = $slug;
        $ad->description = $request->description;
        $ad->views = 0;
        $ad->status = 'active';
        $image = $request->file('image');
        $imageName = $slug .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('web/images/ads'), $imageName);
        $ad->image = $imageName;
        $ad->save();

        $ad->categories()->attach($request->categories);

        toastr()->success('Ad has been created successfully');
        return redirect()->back();
    }

    public function createItem()
    {
        $seller = Seller::where('user_id', auth()->user()->id)->first();
        $categories = Category::all();
        return view('seller.create-item', compact('seller', 'categories'));
    }

    public function storeItem(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'categories' => 'required|array'
        ]);

        $slug = Str::slug($request->title, '-');
        while (Item::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(5);
        }

        $item = new Item();
        $item->seller_id = Seller::where('user_id', auth()->user()->id)->first()->id;
        $item->name = $request->title;
        $item->slug = $slug;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->views = 0;
        $item->status = 'active';
        $image = $request->file('image');
        $imageName = $slug .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('web/images/items'), $imageName);
        $item->image = $imageName;
        $item->save();

        $item->categories()->attach($request->categories);

        toastr()->success('Item has been created successfully');
        return redirect()->back();
    }
}
