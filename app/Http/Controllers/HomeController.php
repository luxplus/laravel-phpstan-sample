<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $users = ['Lasse']; // Harcoded for now, happy Friday everyone
        $meetingTitle = $this->getMeetingTitle($request->integer('id'));

        return view('home', compact('users', 'meetingTitle'));
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
