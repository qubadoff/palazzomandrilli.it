<?php

namespace App\Http\Controllers\Frontend;

use App\Enum\EventStatusEnum;
use App\Enum\SliderStatusEnum;
use App\Http\Controllers\Controller;
use App\Mail\NewContactMessageMail;
use App\Models\ContactMessage;
use App\Models\Event;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Subscribe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::query()
            ->where('status', SliderStatusEnum::ACTIVE)
            ->whereNull('deleted_at')
            ->orderBy('sort_order')
            ->get();

        $events = Event::query()
            ->where('status', EventStatusEnum::ACTIVE)
            ->whereNull('deleted_at')
            ->latest()
            ->limit(3)
            ->get();

        return view('Frontend.index', compact('sliders', 'events'));
    }

    public function page($slug): View
    {
        $page = Page::query()->where('slug', $slug)->first();

        if (!$page) {
            abort(404);
        }

        return view('Frontend.page', compact('page'));
    }

    public function photos(): View
    {
        return view('Frontend.photos');
    }

    public function events(): View
    {
        $events = Event::query()
            ->where('status', EventStatusEnum::ACTIVE)
            ->whereNull('deleted_at')
            ->latest()
            ->paginate(20);

        return view('Frontend.events', compact('events'));
    }

    public function singleEvent($slug): View
    {
        $event = Event::query()
            ->where('slug', $slug)
            ->first();

        if (!$event) {
            abort(404);
        }

        return view('Frontend.singleEvent', compact('event'));
    }

    public function contact(): View
    {
        return view('Frontend.contact');
    }

    public function sendMessage(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to('palazzomandrilli@gmail.com')->send(
            new NewContactMessageMail($request->name, $request->email, $request->message)
        );

        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    public function subscribe(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Subscribe::query()->create([
            'email' => $request->email,
        ]);

        return redirect()->route('index')->with('success', 'Thanks for subscribing to our newsletter!');
    }
}
