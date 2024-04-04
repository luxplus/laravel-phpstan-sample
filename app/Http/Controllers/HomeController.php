<?php

namespace App\Http\Controllers;

use App\Http\Views\PageData;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $data = new PageData(
            ['Lasse'],
            $this->getMeetingTitle($request->integer('id')),
        );

        return view('home', compact('data'));
    }

    public function dynamicPage(Request $request): View
    {
        $data = new PageData(
            User::get(),
            $this->getMeetingTitle($request->integer('id')),
        );

        return view('home', compact('data'));
    }

    private function getMeetingTitle(int $id): ?string
    {
        $meetings = $this->getMeetingTitles();

        return $meetings[$id] ?? null;
    }

    /**
     * @return array<int, string>
     */
    private function getMeetingTitles(): array
    {
        return ['Stand up'];
    }
}
