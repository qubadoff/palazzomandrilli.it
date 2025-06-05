<?php

namespace App\Http\Controllers\Frontend;

use App\Enum\EventStatusEnum;
use App\Enum\SliderStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Page;
use App\Models\Slider;
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
}
